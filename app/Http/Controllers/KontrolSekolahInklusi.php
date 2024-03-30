<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

use App\Models\SekolahInklusi;

class KontrolSekolahInklusi extends Controller
{
    public function daftarSekolahInklusiSuperAdmin (Request $req) {
        $sekolahInklusi = $this -> daftarSekolahInklusi($req);
        
    $dummyData = array_map(function ($data) {
        return [
            'id' => $data->id,
            // 'tahun' => Carbon::parse($data->created_at)->setTimezone('Asia/Jakarta')->format('Y-m-d H:i:s'),
            'namaSiswa' => $data->nama,
            'jenisKelamin' => $data->jenisKelamin,
            'jenisKetunaan' => $data->jenisKetunaan,
            'kelas' => $data->kelas,
            'romble' => $data->rombel,
        ];
    }, $sekolahInklusi->items());
        
        // return json_encode($sekolahInklusi);
        return view('pages/dashboard/super-admin/slb/peserta-didik/sa-peserta-didik-slb', [
            'dummyData' => $dummyData,
            'DATA' => $sekolahInklusi
        ]);
    }

    public function daftarSekolahInklusi (Request $req) {
        $pengguna = Auth::user();

        $sekolahInklusi = SekolahInklusi::where(function (Builder $query) use ($req, $pengguna) {
            if ($pengguna -> akses === 'admin') {
                $query -> where('sekolah', $pengguna -> sekolah);
            } else if ($req -> filterSekolah) {
                $query -> where('sekolah', (int) $req -> filterSekolah);
            }
            if ($req -> pencarian) {
                $query -> where(function (Builder $query) use ($req) {
                    $query -> where('nama', 'LIKE', '%' . $req -> pencarian . '%')
                        -> orWhere('jenisKelamin', 'LIKE', '%' . $req -> pencarian . '%')
                        -> orWhere('jenisKetunaan', 'LIKE', '%' . $req -> pencarian . '%')
                        -> orWhere('kelas', 'LIKE', '%' . $req -> pencarian . '%')
                        -> orWhere('rombel', 'LIKE', '%' . $req -> pencarian . '%');
                });
            }
        }) -> latest() -> paginate(10);

        return $sekolahInklusi;
    }

    public function lihatSatu ($id) {
        $pengguna = Auth::user();
        $sekolahInklusi = SekolahInklusi::find($id);

        if ($sekolahInklusi) {
            if ($pengguna -> sekolah !== $sekolahInklusi -> sekolah) {
                $sekolahInklusi = null;
            }
        }

        return $sekolahInklusi;
    }

    public function tambah (Request $req) {
        $validasi = $req -> validate ([
            'nama' => 'required',
            'npsn' => 'required',
            'statusSekolah' => 'required',
            'alamatSekolah' => 'required',
            'kota' => 'required',
            'jumlahPDBK' => 'required',
            'namaPembimbing' => 'required',
            'jenisKelamin' => 'required',
            'pangkat' => 'required',
            'alamatTinggal' => 'required',
            'nomorHP' => 'required'
        ]);
        
        SekolahInklusi::create($validasi);
        
        return redirect('/pendataan-sekolah-inklusi');
    }

    public function tampilanEdit ($id) {
        $sekolahInklusi = SekolahInklusi::find($id);
        return view('pages/dashboard/admin-slb/peserta-didik/edit/edit-pesertadidik-slb', [
            'id' => $id,
            'DATA' => $sekolahInklusi
        ]);
    }

    public function ubah (Request $req) {
        $pengguna = Auth::user();
        $validasi = $req -> validate ([
            'id' => 'required',
        ]);

        // dd($validasi);

        $sekolahInklusi = SekolahInklusi::find($validasi['id']);

        if ($sekolahInklusi){
            if ($sekolahInklusi -> sekolah === $pengguna -> sekolah) {
                if ($req['nama']) {
                    $sekolahInklusi -> nama = $req['nama'];
                }
                if ($req['jenisKelamin']) {
                    $sekolahInklusi -> jenisKelamin = $req['jenisKelamin'];
                }
                if ($req['jenisKetunaan']) {
                    $sekolahInklusi -> jenisKetunaan = $req['jenisKetunaan'];
                }
                if ($req['kelas']) {
                    $sekolahInklusi -> kelas = $req['kelas'];
                }
                if ($req['rombel']) {
                    $sekolahInklusi -> rombel = $req['rombel'];
                }

                $sekolahInklusi -> save();

                return redirect('/admin-pesertadidik-slb');
            }
        }

        return back();
    }

    public function hapus ($id) {
        $pengguna = Auth::user();

        $sekolahInklusi = SekolahInklusi::find($id);

        if ($sekolahInklusi) {
            if ($sekolahInklusi -> sekolah === $pengguna -> sekolah) {
                SekolahInklusi::find($id) -> delete();

                return redirect('/admin-pesertadidik-slb');
            }
        }

        return back();
    }
}
