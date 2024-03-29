<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;

use App\Models\Sekolah;
use App\Models\SaranaPrasarana;
use App\Models\GambarSaranaPrasarana;
use Carbon\Carbon;

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
    
    public function daftarSaranaPrasaranaSuperAdmin (Request $req) {
        $saranaPrasarana = $this -> daftarSaranaPrasarana($req);

        $dummyData = array_map(function ($data) {
        return [
            'id' => $data->id,
            'tahun' => Carbon::parse($data->created_at)->setTimezone('Asia/Jakarta')->format('d-m-Y H:i:s'),
            // 'tahun' => Carbon::parse($data->created_at)->setTimezone('Asia/Jakarta')->format('Y-m-d H:i:s'),
            'gedungRuang' => $data->nama,
            'jumlahVol' => $data->jumlah,
            'kondisi' => $data->kondisi,
            'catatan' => $data->keterangan,
        ];
    }, $saranaPrasarana->items());

        // return json_encode($pesertaDidik);
        return view('pages/dashboard/super-admin/slb/sarpras/sa-sarpras-slb', [
            'dummyData' => $dummyData,
            'DATA' => $saranaPrasarana
        ]);
    }

    public function daftarSaranaPrasaranaAdmin (Request $req) {
        $saranaPrasarana = $this -> daftarSaranaPrasarana($req);

        $dummyData = array_map(function ($data) {
        return [
            'id' => $data->id,
            'tahun' => Carbon::parse($data->created_at)->setTimezone('Asia/Jakarta')->format('d-m-Y H:i:s'),
            // 'tahun' => Carbon::parse($data->created_at)->setTimezone('Asia/Jakarta')->format('Y-m-d H:i:s'),
            'gedungRuang' => $data->nama,
            'jumlahVol' => $data->jumlah,
            'kondisi' => $data->kondisi,
            'catatan' => $data->keterangan,
        ];
    }, $saranaPrasarana->items());

        // return json_encode($pesertaDidik);
        return view('pages/dashboard/admin-slb/sarpras/admin-sarpras-slb', [
            'dummyData' => $dummyData,
            'DATA' => $saranaPrasarana
        ]);
    }

    public function daftarSaranaPrasarana (Request $req) {
        $pengguna = Auth::user();

        $saranaPrasarana = SaranaPrasarana::where(function (Builder $query) use ($req, $pengguna) {
            if ($pengguna -> akses === 'admin') {
                $query -> where('sekolah', $pengguna -> sekolah);
            } else if ($req -> filterSekolah) {
                $query -> where('sekolah', (int) $req -> filterSekolah);
            }
            if ($req -> pencarian) {
                $query -> where(function (Builder $query) use ($req) {
                    $query -> where('nama', 'LIKE', '%' . $req -> pencarian . '%')
                        -> orWhere('jumlah', 'LIKE', '%' . $req -> pencarian . '%')
                        -> orWhere('kondisi', 'LIKE', '%' . $req -> pencarian . '%')
                        -> orWhere('keterangan', 'LIKE', '%' . $req -> pencarian . '%');
                });
            }
        }) -> latest() -> paginate(10);

        return $saranaPrasarana;
    }

    public function lihatSatu ($id) {
        $pengguna = Auth::user();
        $saranaPrasarana = SaranaPrasarana::find($id);

        if ($saranaPrasarana) {
            if ($pengguna -> sekolah !== $saranaPrasarana -> sekolah) {
                $saranaPrasarana = null;
            }
        }

        return $saranaPrasarana;
    }

    public function tambah (Request $req) {
        $pengguna = Auth::user();
        $validasi = $req -> validate ([
            'nama' => 'required',
            'jumlah' => 'required',
            'kondisi' => 'required',
            'keterangan' => 'required'
        ]);

        $validasi['pemilik'] = $pengguna -> id;
        $validasi['sekolah'] = $pengguna -> sekolah;

        SaranaPrasarana::create($validasi);

        $saranaPrasarana = SaranaPrasarana::firstWhere([
            'nama' => $validasi['nama'],
            'jumlah' => $validasi['jumlah'],
            'kondisi' => $validasi['kondisi'],
            'keterangan' => $validasi['keterangan']
        ]);

        if ($req -> hasFile('daftarGambar')) {
            foreach ($req -> file('daftarGambar') as $gambar) {
                $url = $gambar -> store('saranaPrasarana');
                
                GambarSaranaPrasarana::create([
                    'saranaPrasarana' => $saranaPrasarana -> id,
                    'gambar' => $url
                ]);
            }
        }
        
        // return 'true';
        return redirect('/admin-sarpras-slb');
    }

    
    public function tampilanEdit ($id) {
        $saranaprasarana = SaranaPrasarana::find($id);
        return view('pages/dashboard/admin-slb/sarpras/edit/edit-sarpras-slb', [
            'id' => $id,
            'DATA' => $saranaprasarana
        ]);
    }

    public function ubah (Request $req) {
        $pengguna = Auth::user();
        $validasi = $req -> validate ([
            'id' => 'required',
        ]);

        $saranaPrasarana = SaranaPrasarana::find($validasi['id']);

        if ($saranaPrasarana){
            if ($saranaPrasarana -> sekolah === $pengguna -> sekolah) {
                if ($req['nama']) {
                    $saranaPrasarana -> nama = $req['nama'];
                }
                if ($req['jumlah']) {
                    $saranaPrasarana -> jumlah = $req['jumlah'];
                }
                if ($req['kondisi']) {
                    $saranaPrasarana -> kondisi = $req['kondisi'];
                }
                if ($req['keterangan']) {
                    $saranaPrasarana -> keterangan = $req['keterangan'];
                }

                if ($req -> hasFile('daftarGambar')) {
                    $daftarGambar = GambarSaranaPrasarana::where('saranaPrasarana', $saranaPrasarana -> id) -> get();

                    foreach ($daftarGambar as $gambar) {
                        Storage::delete($gambar -> gambar);
                        $saranaPrasarana -> gambar = $req -> file('daftarGambar') -> store('saranaPrasarana');
                    }
                    GambarSaranaPrasarana::where('saranaPrasarana', $saranaPrasarana -> id) -> delete();

                    foreach ($req -> file('daftarGambar') as $gambar) {
                        $url = $gambar -> store('saranaPrasarana');
                        
                        GambarSaranaPrasarana::create([
                            'saranaPrasarana' => $saranaPrasarana -> id,
                            'gambar' => $url
                        ]);
                    }
                }

                $saranaPrasarana -> save();

                // return 'true';
                return redirect('/admin-sarpras-slb');
            }
        }

        // return 'false';
        return back();
    }

    public function hapus ($id) {
        $pengguna = Auth::user();

        $saranaPrasarana = SaranaPrasarana::find($id);

        if ($saranaPrasarana) {
            if ($saranaPrasarana -> sekolah === $pengguna -> sekolah) {
                $daftarGambar = GambarSaranaPrasarana::where('saranaPrasarana', $saranaPrasarana -> id) -> get();

                foreach ($daftarGambar as $gambar) {
                    Storage::delete($gambar -> gambar);
                }

                GambarSaranaPrasarana::where('saranaPrasarana', $saranaPrasarana -> id) -> delete();
                SaranaPrasarana::find($id) -> delete();

                // return 'true';
                return redirect('/admin-sarpras-slb');
            }
        }

        // return 'false';
        return back();
    }
}
