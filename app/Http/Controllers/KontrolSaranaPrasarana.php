<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use App\Models\Tahun;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;

use App\Models\Sekolah;
use App\Models\SaranaPrasarana;
use App\Models\GambarSaranaPrasarana;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class KontrolSaranaPrasarana extends Controller
{
    // $dummyData = [
    //                                 [
    //                                     'id' => 1,
    //                                     'tahun' => '2023',
    //                                     'gedungRuang' => 'Gedung A',
    //                                     'jumlahVol' => '100',
    //                                     // 'totalLuas' => '500',
    //                                     'kondisi' => 'Baik',
    //                                     'catatan' => 'Tidak ada catatan',
    //                                 ],
    //                             ];
    public function statistik()
    {
        $saranaPrasarana = SaranaPrasarana::all();
        $sekolah = Sekolah::all();

        $data = array_map(function ($data) use ($saranaPrasarana) {
            $baik = $saranaPrasarana->where('sekolah', $data['id'])->where('kondisi', 'Baik')->all();
            $rusakRingan = $saranaPrasarana->where('sekolah', $data['id'])->where('kondisi', 'Rusak Ringan')->all();
            $rusakBerat = $saranaPrasarana->where('sekolah', $data['id'])->where('kondisi', 'Rusak Berat')->all();
            return [
                'namaSekolah' => $data['nama'],
                'baik' => count($baik),
                'rusakRingan' => count($rusakRingan),
                'rusakBerat' => count($rusakBerat),
            ];
        }, $sekolah->toArray());

        return json_encode($data);
    }
    public function lihatSemua()
    {
        $saranaPrasarana = SaranaPrasarana::all();
        $sekolah = Sekolah::all();
        $gambar = GambarSaranaPrasarana::all();

        $dummyData = array_map(function ($data) use ($sekolah) {
            $temp = $sekolah->find($data['sekolah']);
            $daftarGambar = GambarSaranaPrasarana::where('saranaPrasarana', $data['id'])->get();
            return [
                'id' => $data['id'],
                'namaSekolah' => $temp['nama'],
                'tahun' => $data['tahun'],
                'gedungRuang' => $data['nama'],
                'jumlahVol' => $data['jumlah'],
                'kondisi' => $data['kondisi'],
                'catatan' => $data['keterangan'],
                'gambar' => $daftarGambar,
            ];
        }, $saranaPrasarana->toArray());

        return json_encode($dummyData);
    }
    public function daftarSaranaPrasaranaSuperAdmin(Request $req)
    {
        $saranaPrasarana = $this->daftarSaranaPrasarana($req);
        $sekolah = Sekolah::all();
        $gambar = GambarSaranaPrasarana::all();

        $dummyData = array_map(function ($data) use ($sekolah) {
            $temp = $sekolah->find($data->sekolah);
            return [
                'id' => $data->id,
                'namaSekolah' => $temp->nama,
                'tahun' => $data->tahun,
                'gedungRuang' => $data->nama,
                'jumlahVol' => $data->jumlah,
                'kondisi' => $data->kondisi,
                'catatan' => $data->keterangan,
            ];
        }, $saranaPrasarana->items());
        $tahun = Tahun::all();

        // return json_encode($pesertaDidik);
        return view('pages/dashboard/super-admin/slb/sarpras/sa-sarpras-slb', [
            'dummyData' => $dummyData,
            'DATA' => $saranaPrasarana,
            'sekolah' => $sekolah,
            'daftarTahun' => $tahun,
            'gambar' => $gambar
        ]);
    }

    public function daftarSaranaPrasaranaAdmin(Request $req)
    {
        $saranaPrasarana = $this->daftarSaranaPrasarana($req);

        $dummyData = array_map(function ($data) {
            $daftarGambar = GambarSaranaPrasarana::where('saranaPrasarana', $data->id)->get();
            return [
                'id' => $data->id,
                'tahun' => $data->tahun,
                'gedungRuang' => $data->nama,
                'jumlahVol' => $data->jumlah,
                'kondisi' => $data->kondisi,
                'catatan' => $data->keterangan,
                'gambar' => $daftarGambar->count()
            ];
        }, $saranaPrasarana->items());

        $time = new \DateTime("now", new \DateTimeZone('Asia/Jakarta'));
        $notif = Pengumuman::where('sistem', 'slb')
            ->where('tanggalMulai', '<', $time)
            ->where('tanggalAkhir', '>', $time)->latest()->get();
        $tahun = Tahun::all();

        // return json_encode($pesertaDidik);
        return view('pages/dashboard/admin-slb/sarpras/admin-sarpras-slb', [
            'dummyData' => $dummyData,
            'DATA' => $saranaPrasarana,
            'daftarTahun' => $tahun,
            'pengumuman' => $notif
        ]);
    }

    public function daftarSaranaPrasarana(Request $req)
    {
        $pengguna = Auth::user();

        $saranaPrasarana = SaranaPrasarana::where(function (Builder $query) use ($req, $pengguna) {
            if ($pengguna->akses === 'admin') {
                $query->where('sekolah', $pengguna->sekolah);
            } else if ($req->filterSekolah) {
                $query->where('sekolah', (int) $req->filterSekolah);
            }
            if ($req->tahun) {
                $query->where('tahun', $req->tahun);
            }
            if ($req->pencarian) {
                $query->where(function (Builder $query) use ($req) {
                    $query->where('nama', 'LIKE', '%' . $req->pencarian . '%')
                        ->orWhere('jumlah', 'LIKE', '%' . $req->pencarian . '%')
                        ->orWhere('kondisi', 'LIKE', '%' . $req->pencarian . '%')
                        ->orWhere('keterangan', 'LIKE', '%' . $req->pencarian . '%');
                });
            }
        })->latest()->paginate(10);

        return $saranaPrasarana;
    }

    public function lihatSatu($id)
    {
        $pengguna = Auth::user();
        $saranaPrasarana = SaranaPrasarana::find($id);

        if ($saranaPrasarana) {
            if ($pengguna->sekolah !== $saranaPrasarana->sekolah) {
                $saranaPrasarana = null;
            }
        }

        return $saranaPrasarana;
    }

    public function tambah(Request $req)
    {
        $pengguna = Auth::user();
        $validasi = $req->validate([
            'tahun' => 'required',
            'nama' => 'required',
            'jumlah' => 'required',
            'kondisi' => 'required',
            'keterangan' => 'required'
        ]);

        $validasi['pemilik'] = $pengguna->id;
        $validasi['sekolah'] = $pengguna->sekolah;

        Tahun::firstOrCreate(['tahun' => $req['tahun']]);

        $saranaPrasarana = SaranaPrasarana::create($validasi);

        if ($req->hasFile('daftarGambar')) {
            foreach ($req->file('daftarGambar') as $gambar) {
                $url = $gambar->store('saranaPrasarana');

                GambarSaranaPrasarana::create([
                    'saranaPrasarana' => $saranaPrasarana->id,
                    'gambar' => $url
                ]);
            }
        }

        // return 'true';
        Session::flash('toast-tambah', [
            'type' => 'toast-tambah',
            'message' => 'Berhasil Menambahkan Data'
        ]);

        return redirect('/admin-sarpras-slb');
    }


    public function tampilanEdit($id)
    {
        $saranaprasarana = SaranaPrasarana::find($id);
        $daftarGambar = GambarSaranaPrasarana::where('saranaPrasarana', $id)->get();
        return view('pages/dashboard/admin-slb/sarpras/edit/edit-sarpras-slb', [
            'id' => $id,
            'DATA' => $saranaprasarana,
            'daftarGambar' => $daftarGambar
        ]);
    }

    public function ubah(Request $req)
    {
        $pengguna = Auth::user();
        $validasi = $req->validate([
            'id' => 'required',
        ]);

        $saranaPrasarana = SaranaPrasarana::find($validasi['id']);

        if ($saranaPrasarana) {
            if ($saranaPrasarana->sekolah === $pengguna->sekolah) {
                if ($req['tahun']) {
                    Tahun::firstOrCreate(['tahun' => $req['tahun']]);
                    $saranaPrasarana->tahun = $req['tahun'];
                }
                if ($req['nama']) {
                    $saranaPrasarana->nama = $req['nama'];
                }
                if ($req['jumlah']) {
                    $saranaPrasarana->jumlah = $req['jumlah'];
                }
                if ($req['kondisi']) {
                    $saranaPrasarana->kondisi = $req['kondisi'];
                }
                if ($req['keterangan']) {
                    $saranaPrasarana->keterangan = $req['keterangan'];
                }

                if ($req->hasFile('daftarGambar')) {
                    $daftarGambar = GambarSaranaPrasarana::where('saranaPrasarana', $saranaPrasarana->id)->get();

                    foreach ($daftarGambar as $gambar) {
                        Storage::delete($gambar->gambar);
                        $saranaPrasarana->gambar = $req->file('daftarGambar')->store('saranaPrasarana');
                    }
                    GambarSaranaPrasarana::where('saranaPrasarana', $saranaPrasarana->id)->delete();

                    foreach ($req->file('daftarGambar') as $gambar) {
                        $url = $gambar->store('saranaPrasarana');

                        GambarSaranaPrasarana::create([
                            'saranaPrasarana' => $saranaPrasarana->id,
                            'gambar' => $url
                        ]);
                    }
                }

                $saranaPrasarana->save();

                Session::flash('toast-edit', [
                    'type' => 'toast-edit',
                    'message' => 'Berhasil Edit Data'
                ]);

                // return 'true';
                return redirect('/admin-sarpras-slb');
            }
        }

        // return 'false';
        // return back();
    }

    public function hapus($id)
    {
        $pengguna = Auth::user();

        $saranaPrasarana = SaranaPrasarana::find($id);

        if ($saranaPrasarana) {
            if ($saranaPrasarana->sekolah === $pengguna->sekolah) {
                $daftarGambar = GambarSaranaPrasarana::where('saranaPrasarana', $saranaPrasarana->id)->get();

                foreach ($daftarGambar as $gambar) {
                    Storage::delete($gambar->gambar);
                }

                GambarSaranaPrasarana::where('saranaPrasarana', $saranaPrasarana->id)->delete();
                SaranaPrasarana::find($id)->delete();

                // return 'true';
                Session::flash('toast-hapus', [
                    'type' => 'toast-hapus',
                    'message' => 'Berhasil Hapus Data'
                ]);

                return redirect('/admin-sarpras-slb');
            }
        }

        // return 'false';
        // return back();
    }
}
