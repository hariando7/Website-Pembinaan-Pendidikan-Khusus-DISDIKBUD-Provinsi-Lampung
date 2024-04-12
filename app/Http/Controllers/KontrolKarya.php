<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;

use App\Models\Sekolah;
use App\Models\Karya;
use Carbon\Carbon;

class KontrolKarya extends Controller
{
    // $dummyData = [
    //                                 [
    //                                     'id' => 1,
    //                                     'tahun' => '2023',
    //                                     'judulKarya' => 'Karya 1',
    //                                     'gambar' => 'gambar1.jpg',
    //                                     'deskripsi' => 'Deskripsi karya 1',
    //                                 ],
    //                             ];
    public function lihatSemua()
    {
        $karya = Karya::all();
        $sekolah = Sekolah::all();

        $dummyData = array_map(function ($data) use ($sekolah) {
            $temp = $sekolah->find($data['sekolah']);
            return [
                'id' => $data['id'],
                'namaSekolah' => $temp['nama'],
                'tahun' => Carbon::parse($data['created_at'])->setTimezone('Asia/Jakarta')->format('d-m-Y H:i:s'),
                'judulKarya' => $data['nama'],
                'gambar' => $data['gambar'],
                'deskripsi' => $data['deskripsi'],
            ];
        }, $karya->toArray());

        return json_encode($dummyData);
    }
    public function daftarKaryaSuperAdmin(Request $req)
    {
        $karya = $this->daftarKarya($req);
        $sekolah = Sekolah::all();

        $dummyData = array_map(function ($data) use ($sekolah) {
            $temp = $sekolah->find($data->sekolah);
            return [
                'id' => $data->id,
                'namaSekolah' => $temp->nama,
                'tahun' => Carbon::parse($data->created_at)->setTimezone('Asia/Jakarta')->format('d-m-Y H:i:s'),
                'judulKarya' => $data->nama,
                'gambar' => $data->gambar,
                'deskripsi' => $data->deskripsi,
            ];
        }, $karya->items());

        // return json_encode($pesertaDidik);
        return view('pages/dashboard/super-admin/slb/karya/sa-karya-slb', [
            'dummyData' => $dummyData,
            'DATA' => $karya,
            'sekolah' => $sekolah
        ]);
    }

    public function daftarKaryaAdmin(Request $req)
    {
        $karya = $this->daftarKarya($req);

        $dummyData = array_map(function ($data) {
            return [
                'id' => $data->id,
                'tahun' => Carbon::parse($data->created_at)->setTimezone('Asia/Jakarta')->format('d-m-Y H:i:s'),
                // 'tahun' => Carbon::parse($data->created_at)->setTimezone('Asia/Jakarta')->format('Y-m-d H:i:s'),
                'judulKarya' => $data->nama,
                'gambar' => $data->gambar,
                'deskripsi' => $data->deskripsi,
            ];
        }, $karya->items());

        $time = new \DateTime("now", new \DateTimeZone('Asia/Jakarta'));
        $notif = Pengumuman::where('sistem', 'slb')
            ->where('tanggalMulai', '<', $time)
            ->where('tanggalAkhir', '>', $time)->latest()->get();

        // return json_encode($pesertaDidik);
        return view('pages/dashboard/admin-slb/karya/admin-karya-slb', [
            'dummyData' => $dummyData,
            'DATA' => $karya,
            'pengumuman' => $notif
        ]);
    }

    public function daftarKarya(Request $req)
    {
        $pengguna = Auth::user();

        $karya = Karya::where(function (Builder $query) use ($req, $pengguna) {
            if ($pengguna->akses === 'admin') {
                $query->where('sekolah', $pengguna->sekolah);
            } else if ($req->filterSekolah) {
                $query->where('sekolah', (int) $req->filterSekolah);
            }
            if ($req->pencarian) {
                $query->where(function (Builder $query) use ($req) {
                    $query->where('nama', 'LIKE', '%' . $req->pencarian . '%')
                        ->orWhere('deskripsi', 'LIKE', '%' . $req->pencarian . '%');
                });
            }
        })->latest()->paginate(10);

        return $karya;
    }

    public function home()
    {
        $daftarSekolah = Sekolah::all();
        $daftarKarya = [];
        $count = 0;

        foreach ($daftarSekolah as $sekolah) {
            $karya = Karya::firstWhere('sekolah', $sekolah->id);

            if ($karya) {
                array_push($daftarKarya, $karya);
                $count += 1;
            }
            if ($count > 5) {
                break;
            }
        }

        return view('pages/landing/home', [
            'karya' => $daftarKarya
        ]);
    }

    public function lihatSatu($id)
    {
        $pengguna = Auth::user();
        $karya = Karya::find($id);

        if ($karya) {
            if ($pengguna->sekolah !== $karya->sekolah) {
                $karya = null;
            }
        }

        return $karya;
    }

    public function tambah(Request $req)
    {
        $pengguna = Auth::user();
        $validasi = $req->validate([
            'nama' => 'required',
            'gambar' => 'required',
            'deskripsi' => 'required'
        ]);

        if ($req->file('gambar')) {
            $validasi['gambar'] = $req->file('gambar')->store('karya');
        }

        $validasi['pemilik'] = $pengguna->id;
        $validasi['sekolah'] = $pengguna->sekolah;

        Karya::create($validasi);

        return redirect('/admin-karya-slb');
    }

    public function tampilanEdit($id)
    {
        $karya = Karya::find($id);
        return view('pages/dashboard/admin-slb/karya/edit/edit-karya-slb', [
            'id' => $id,
            'DATA' => $karya
        ]);
    }

    public function ubah(Request $req)
    {
        $pengguna = Auth::user();
        $validasi = $req->validate([
            'id' => 'required',
        ]);

        $karya = Karya::find($validasi['id']);

        if ($karya) {
            if ($karya->sekolah === $pengguna->sekolah) {
                if ($req['nama']) {
                    $karya->nama = $req['nama'];
                }
                if ($req['deskripsi']) {
                    $karya->deskripsi = $req['deskripsi'];
                }
                if ($req->file('gambar')) {
                    Storage::delete($karya->gambar);
                    $karya->gambar = $req->file('gambar')->store('karya');
                }

                $karya->save();

                // return 'true';
                return redirect('/admin-karya-slb');
            }
        }

        // return 'false';
        return back();
    }

    public function hapus($id)
    {
        $pengguna = Auth::user();

        $karya = Karya::find($id);

        if ($karya) {
            if ($karya->sekolah === $pengguna->sekolah) {
                if ($karya->gambar) {
                    Storage::delete($karya->gambar);
                }
                Karya::find($id)->delete();

                // return 'true';
                return redirect('/admin-karya-slb');
            }
        }

        // return 'false';
        return back();
    }
}
