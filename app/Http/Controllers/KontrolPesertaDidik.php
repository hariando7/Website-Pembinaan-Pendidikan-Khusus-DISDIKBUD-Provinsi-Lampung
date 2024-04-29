<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use App\Models\Tahun;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

use App\Models\Sekolah;
use App\Models\PesertaDidik;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class KontrolPesertaDidik extends Controller
{
    // $dummyData = [
    //     [
    //         'id' => 1,
    //         'tahun' => '2023',
    //         'namaSiswa' => 'Rizkyaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
    //         'jenisKelamin' => 'Laki-laki',
    //         'jenisKetunaan' => 'Tuna Rungu',
    //         'kelas' => 'XII-A',
    //         'romble' => '1A',
    //     ],
    // ];
    public function statistikSekolah(Request $req)
    {
        $pesertaDidik = PesertaDidik::where(function (Builder $query) use ($req) {
            if ($req->tahun) {
                $query->where('tahun', $req->tahun);
            }
            if ($req->kelas) {
                $query->where('kelas', $req->kelas);
            }
            if ($req->jenisKetunaan) {
                $query->where('jenisKetunaan', $req->jenisKetunaan);
            }
        })->get();

        $sekolah = Sekolah::all();

        $data = array_map(function ($data) use ($pesertaDidik) {
            $perempuan = $pesertaDidik->where('sekolah', $data['id'])->where('jenisKelamin', 'Perempuan')->all();
            $lakiLaki = $pesertaDidik->where('sekolah', $data['id'])->where('jenisKelamin', 'Laki-laki')->all();
            return [
                'sekolah' => $data['nama'],
                'total' => count($lakiLaki) + count($perempuan),
                'lakiLaki' => count($lakiLaki),
                'perempuan' => count($perempuan),
            ];
        }, $sekolah->toArray());

        return json_encode($data);
    }
    public function statistikKelas(Request $req)
    {
        $pesertaDidik = PesertaDidik::where(function (Builder $query) use ($req) {
            if ($req->tahun) {
                $query->where('tahun', $req->tahun);
            }
            if ($req->sekolah) {
                $query->where('sekolah', $req->sekolah);
            }
            if ($req->jenisKetunaan) {
                $query->where('jenisKetunaan', $req->jenisKetunaan);
            }
        })->get();

        $data = array_map(function ($data) use ($pesertaDidik) {
            $perempuan = $pesertaDidik->where('kelas', $data)->where('jenisKelamin', 'Perempuan')->all();
            $lakiLaki = $pesertaDidik->where('kelas', $data)->where('jenisKelamin', 'Laki-laki')->all();
            return [
                'kelas' => $data,
                'total' => count($lakiLaki) + count($perempuan),
                'lakiLaki' => count($lakiLaki),
                'perempuan' => count($perempuan),
            ];
        }, ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12']);

        return json_encode($data);
    }
    public function statistikJenisKetunaan(Request $req)
    {
        $pesertaDidik = PesertaDidik::where(function (Builder $query) use ($req) {
            if ($req->tahun) {
                $query->where('tahun', $req->tahun);
            }
            if ($req->sekolah) {
                $query->where('sekolah', $req->sekolah);
            }
            if ($req->kelas) {
                $query->where('kelas', $req->kelas);
            }
        })->get();

        $data = array_map(function ($data) use ($pesertaDidik) {
            $perempuan = $pesertaDidik->where('jenisKetunaan', $data)->where('jenisKelamin', 'Perempuan')->all();
            $lakiLaki = $pesertaDidik->where('jenisKetunaan', $data)->where('jenisKelamin', 'Laki-laki')->all();
            return [
                'jenisKetunaan' => $data,
                'total' => count($lakiLaki) + count($perempuan),
                'lakiLaki' => count($lakiLaki),
                'perempuan' => count($perempuan),
            ];
        }, ['Tunanetra', 'Tunarungu', 'Tuna Laras', 'Tunadaksa', 'Tunagrahita', 'Down Syndrome', 'Autis', 'Hiperaktif']);

        return json_encode($data);
    }
    public function statistikTahun(Request $req)
    {
        $pesertaDidik = PesertaDidik::where(function (Builder $query) use ($req) {
            if ($req->jenisKetunaan) {
                $query->where('jenisKetunaan', $req->jenisKetunaan);
            }
            if ($req->sekolah) {
                $query->where('sekolah', $req->sekolah);
            }
            if ($req->kelas) {
                $query->where('kelas', $req->kelas);
            }
        })->get();

        $tahun = Tahun::all();

        $data = array_map(function ($data) use ($pesertaDidik) {
            $perempuan = $pesertaDidik->where('tahun', $data['tahun'])->where('jenisKelamin', 'Perempuan')->all();
            $lakiLaki = $pesertaDidik->where('tahun', $data['tahun'])->where('jenisKelamin', 'Laki-laki')->all();
            return [
                'tahun' => $data['tahun'],
                'total' => count($lakiLaki) + count($perempuan),
                'lakiLaki' => count($lakiLaki),
                'perempuan' => count($perempuan),
            ];
        }, $tahun->toArray());

        return json_encode($data);
    }
    public function lihatSemua()
    {
        $pesertaDidik = PesertaDidik::all();
        $sekolah = Sekolah::all();

        $dummyData = array_map(function ($data) use ($sekolah) {
            $temp = $sekolah->find($data['sekolah']);
            return [
                'id' => $data['id'],
                'namaSekolah' => $temp['nama'],
                'tahun' => $data['tahun'],
                'namaSiswa' => $data['nama'],
                'jenisKelamin' => $data['jenisKelamin'],
                'jenisKetunaan' => $data['jenisKetunaan'],
                'kelas' => $data['kelas'],
            ];
        }, $pesertaDidik->toArray());

        return json_encode($dummyData);
    }

    public function daftarPesertaDidikSuperAdmin(Request $req)
    {
        $pesertaDidik = $this->daftarPesertaDidik($req);
        $sekolah = Sekolah::all();

        $dummyData = array_map(function ($data) use ($sekolah) {
            $temp = $sekolah->find($data->sekolah);
            return [
                'id' => $data->id,
                'namaSekolah' => $temp->nama,
                'tahun' => $data->tahun,
                'namaSiswa' => $data->nama,
                'jenisKelamin' => $data->jenisKelamin,
                'jenisKetunaan' => $data->jenisKetunaan,
                'kelas' => $data->kelas,
            ];
        }, $pesertaDidik->items());
        $tahun = Tahun::all();

        // return json_encode($pesertaDidik);
        return view('pages/dashboard/super-admin/slb/peserta-didik/sa-peserta-didik-slb', [
            'dummyData' => $dummyData,
            'DATA' => $pesertaDidik,
            'sekolah' => $sekolah,
            'daftarTahun' => $tahun
        ]);
    }

    public function daftarPesertaDidikAdmin(Request $req)
    {
        $pesertaDidik = $this->daftarPesertaDidik($req);

        $dummyData = array_map(function ($data) {
            return [
                'id' => $data->id,
                'tahun' => $data->tahun,
                'namaSiswa' => $data->nama,
                'jenisKelamin' => $data->jenisKelamin,
                'jenisKetunaan' => $data->jenisKetunaan,
                'kelas' => $data->kelas,
            ];
        }, $pesertaDidik->items());

        $time = new \DateTime("now", new \DateTimeZone('Asia/Jakarta'));
        $notif = Pengumuman::where('sistem', 'slb')
            ->where('tanggalMulai', '<', $time)
            ->where('tanggalAkhir', '>', $time)->latest()->get();
        $tahun = Tahun::all();

        // return json_encode($pesertaDidik);
        return view('pages/dashboard/admin-slb/peserta-didik/admin-pesertadidik-slb', [
            'dummyData' => $dummyData,
            'DATA' => $pesertaDidik,
            'pengumuman' => $notif,
            'daftarTahun' => $tahun
        ]);
    }

    public function daftarPesertaDidik(Request $req)
    {
        $pengguna = Auth::user();

        $pesertaDidik = PesertaDidik::where(function (Builder $query) use ($req, $pengguna) {
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
                        ->orWhere('jenisKelamin', 'LIKE', '%' . $req->pencarian . '%')
                        ->orWhere('jenisKetunaan', 'LIKE', '%' . $req->pencarian . '%')
                        ->orWhere('kelas', 'LIKE', '%' . $req->pencarian . '%');
                });
            }
        })->latest()->paginate(10);

        return $pesertaDidik;
    }

    public function lihatSatu($id)
    {
        $pengguna = Auth::user();
        $pesertaDidik = PesertaDidik::find($id);

        if ($pesertaDidik) {
            if ($pengguna->sekolah !== $pesertaDidik->sekolah) {
                $pesertaDidik = null;
            }
        }

        return $pesertaDidik;
    }

    public function tambah(Request $req)
    {
        $pengguna = Auth::user();
        $validasi = $req->validate([
            'tahun' => 'required',
            'nama' => 'required',
            'jenisKelamin' => 'required',
            'jenisKetunaan' => 'required',
            'kelas' => 'required',
        ]);

        $validasi['pemilik'] = $pengguna->id;
        $validasi['sekolah'] = $pengguna->sekolah;

        Tahun::firstOrCreate(['tahun' => $req['tahun']]);

        PesertaDidik::create($validasi);

        Session::flash('toast-tambah', [
            'type' => 'toast-tambah',
            'message' => 'Berhasil Menambahkan Data'
        ]);

        return redirect('/admin-pesertadidik-slb');
    }

    public function tampilanEdit($id)
    {
        $pesertaDidik = PesertaDidik::find($id);
        return view('pages/dashboard/admin-slb/peserta-didik/edit/edit-pesertadidik-slb', [
            'id' => $id,
            'DATA' => $pesertaDidik
        ]);
    }

    public function ubah(Request $req)
    {
        $pengguna = Auth::user();
        $validasi = $req->validate([
            'id' => 'required',
        ]);

        // dd($validasi);

        $pesertaDidik = PesertaDidik::find($validasi['id']);

        if ($pesertaDidik) {
            if ($pesertaDidik->sekolah === $pengguna->sekolah) {
                if ($req['tahun']) {
                    Tahun::firstOrCreate(['tahun' => $req['tahun']]);
                    $pesertaDidik->tahun = $req['tahun'];
                }
                if ($req['nama']) {
                    $pesertaDidik->nama = $req['nama'];
                }
                if ($req['jenisKelamin']) {
                    $pesertaDidik->jenisKelamin = $req['jenisKelamin'];
                }
                if ($req['jenisKetunaan']) {
                    $pesertaDidik->jenisKetunaan = $req['jenisKetunaan'];
                }
                if ($req['kelas']) {
                    $pesertaDidik->kelas = $req['kelas'];
                }

                $pesertaDidik->save();

                Session::flash('toast-edit', [
                    'type' => 'toast-edit',
                    'message' => 'Berhasil Edit Data'
                ]);

                return redirect('/admin-pesertadidik-slb');
            }
        }

        // return back();
    }

    public function hapus($id)
    {
        $pengguna = Auth::user();

        $pesertaDidik = PesertaDidik::find($id);

        if ($pesertaDidik) {
            if ($pesertaDidik->sekolah === $pengguna->sekolah) {
                PesertaDidik::find($id)->delete();

                Session::flash('toast-hapus', [
                    'type' => 'toast-hapus',
                    'message' => 'Berhasil Hapus Data'
                ]);

                return redirect('/admin-pesertadidik-slb');
            }
        }

        // return back();
    }
}
