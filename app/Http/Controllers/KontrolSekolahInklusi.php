<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

use App\Models\SekolahInklusi;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class KontrolSekolahInklusi extends Controller
{
    // $dummyData = [
    //     [
    //         'tahun' => '2023',
    //         'nama_sekolah' => 'SMA Negeri 1',
    //         'npsn' => '123456789',
    //         'jumlah_pdbk' => '5',
    //     ],
    //     [
    //         'tahun' => '2022',
    //         'nama_sekolah' => 'SMP Negeri 2',
    //         'npsn' => '987654321',
    //         'jumlah_pdbk' => '3',
    //     ],
    // ];
    // 'pengubah',
    //     'nama',
    //     'npsn',
    //     'statusSekolah',
    //     'alamatSekolah',
    //     'kota',
    //     'jumlahPDBK',
    //     'namaPembimbing',
    //     'jenisKelamin',
    //     'pangkat',
    //     'alamatTinggal',
    //     'nomorHP',
    public function lihatSemua()
    {
        $sekolahInklusi = SekolahInklusi::all();
        $dummyData = array_map(function ($data) {
            return [
                'id' => $data['id'],
                'tahun' => Carbon::parse($data['created_at'])->setTimezone('Asia/Jakarta')->format('Y-m-d H:i:s'),
                'nama_sekolah' => $data['nama'],
                'npsn' => $data['npsn'],
                'statusSekolah' => $data['statusSekolah'],
                'alamatSekolah' => $data['alamatSekolah'],
                'kota' => $data['kota'],
                'jumlah_pdbk' => $data['jumlahPDBK'],
                'namaPembimbing' => $data['namaPembimbing'],
                'jenisKelamin' => $data['jenisKelamin'],
                'pangkat' => $data['pangkat'],
                'alamatTinggal' => $data['alamatTinggal'],
                'nomorHP' => $data['nomorHP']
            ];
        }, $sekolahInklusi->toArray());

        return json_encode($dummyData);
    }
    public function daftarSekolahInklusiSuperAdmin(Request $req)
    {
        $sekolahInklusi = $this->daftarSekolahInklusi($req, 1);
        $sekolahInklusiMasuk = $this->daftarSekolahInklusi($req, 0);

        $dummyData = array_map(function ($data) {
            return [
                'id' => $data->id,
                'tahun' => Carbon::parse($data->created_at)->setTimezone('Asia/Jakarta')->format('Y-m-d H:i:s'),
                'nama_sekolah' => $data->nama,
                'npsn' => $data->npsn,
                'statusSekolah' => $data->statusSekolah,
                'alamatSekolah' => $data->alamatSekolah,
                'kota' => $data->kota,
                'jumlah_pdbk' => $data->jumlahPDBK,
                'namaPembimbing' => $data->namaPembimbing,
                'jenisKelamin' => $data->jenisKelamin,
                'pangkat' => $data->pangkat,
                'alamatTinggal' => $data->alamatTinggal,
                'nomorHP' => $data->nomorHP
            ];
        }, $sekolahInklusi->items());
        $dummyDataMasuk = array_map(function ($data) {
            return [
                'id' => $data->id,
                'tahun' => Carbon::parse($data->created_at)->setTimezone('Asia/Jakarta')->format('Y-m-d H:i:s'),
                'nama_sekolah' => $data->nama,
                'npsn' => $data->npsn,
                'statusSekolah' => $data->statusSekolah,
                'alamatSekolah' => $data->alamatSekolah,
                'kota' => $data->kota,
                'jumlah_pdbk' => $data->jumlahPDBK,
                'namaPembimbing' => $data->namaPembimbing,
                'jenisKelamin' => $data->jenisKelamin,
                'pangkat' => $data->pangkat,
                'alamatTinggal' => $data->alamatTinggal,
                'nomorHP' => $data->nomorHP
            ];
        }, $sekolahInklusiMasuk->items());

        // return json_encode($sekolahInklusi);
        return view('pages/dashboard/super-admin/sekolah-inklusi/sa-pendataan-si', [
            'dummyData' => $dummyData,
            'dummyDataMasuk' => $dummyDataMasuk,
            'DATA' => $sekolahInklusi
        ]);
    }

    public function daftarSekolahInklusi(Request $req, bool $status)
    {
        $pengguna = Auth::user();

        $sekolahInklusi = SekolahInklusi::where('status', $status)->where(function (Builder $query) use ($req, $pengguna) {
            if ($req->pencarian) {
                $query->where(function (Builder $query) use ($req) {
                    $query->where('nama', 'LIKE', '%' . $req->pencarian . '%')
                        ->orWhere('npsn', 'LIKE', '%' . $req->pencarian . '%')
                        ->orWhere('statusSekolah', 'LIKE', '%' . $req->pencarian . '%')
                        ->orWhere('jumlahPDBK', 'LIKE', '%' . $req->pencarian . '%')
                        ->orWhere('kota', 'LIKE', '%' . $req->pencarian . '%')
                        ->orWhere('namaPembimbing', 'LIKE', '%' . $req->pencarian . '%')
                        ->orWhere('nomorHP', 'LIKE', '%' . $req->pencarian . '%')
                        ->orWhereYear('created_at', $req->pencarian);
                        
                });
            }
        })->latest()->paginate(10);

        return $sekolahInklusi;
    }

    public function tambah(Request $req)
    {
        $validasi = $req->validate([
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

        Session::flash('toast-tambah', [
            'type' => 'toast-tambah',
            'message' => 'Berhasil Menambahkan Data'
        ]);

        return redirect('/pendataan-sekolah-inklusi');
    }

    public function tampilanEdit($id)
    {
        $sekolahInklusi = SekolahInklusi::find($id);
        return view('pages/dashboard/super-admin/sekolah-inklusi/edit/edit-pendataan-si', [
            'id' => $id,
            'DATA' => $sekolahInklusi
        ]);
    }

    public function tampilanLihat($id)
    {
        $sekolahInklusi = SekolahInklusi::find($id);
        return view('pages/dashboard/super-admin/sekolah-inklusi/lihat/lihat-pendataan-si', [
            'id' => $id,
            'DATA' => $sekolahInklusi
        ]);
    }

    public function ubah(Request $req)
    {
        $pengguna = Auth::user();
        $validasi = $req->validate([
            'id' => 'required',
        ]);

        // dd($validasi);

        $sekolahInklusi = SekolahInklusi::find($validasi['id']);
        if ($sekolahInklusi) {
            if ($req['nama']) {
                $sekolahInklusi->nama = $req['nama'];
            }
            if ($req['npsn']) {
                $sekolahInklusi->npsn = $req['npsn'];
            }
            if ($req['statusSekolah']) {
                $sekolahInklusi->statusSekolah = $req['statusSekolah'];
            }
            if ($req['alamatSekolah']) {
                $sekolahInklusi->alamatSekolah = $req['alamatSekolah'];
            }
            if ($req['kota']) {
                $sekolahInklusi->kota = $req['kota'];
            }
            if ($req['jumlahPDBK']) {
                $sekolahInklusi->jumlahPDBK = $req['jumlahPDBK'];
            }
            if ($req['namaPembimbing']) {
                $sekolahInklusi->namaPembimbing = $req['namaPembimbing'];
            }
            if ($req['jenisKelamin']) {
                $sekolahInklusi->jenisKelamin = $req['jenisKelamin'];
            }
            if ($req['pangkat']) {
                $sekolahInklusi->pangkat = $req['pangkat'];
            }
            if ($req['alamatTinggal']) {
                $sekolahInklusi->alamatTinggal = $req['alamatTinggal'];
            }
            if ($req['nomorHP']) {
                $sekolahInklusi->nomorHP = $req['nomorHP'];
            }

            $sekolahInklusi->pengubah = $pengguna->id;

            $sekolahInklusi->save();

            Session::flash('toast-edit', [
                'type' => 'toast-edit',
                'message' => 'Berhasil Edit Data'
            ]);

            return redirect('/sa-pendataan-si');
        }

        // return back();
    }

    public function validasi($id)
    {
        $sekolahInklusi = SekolahInklusi::find($id);

        if ($sekolahInklusi) {
            $sekolahInklusi->update(['status' => true]);

            return redirect('/sa-pendataan-si');
        }

        return back();
    }

    public function hapus($id)
    {
        $sekolahInklusi = SekolahInklusi::find($id);

        if ($sekolahInklusi) {
            SekolahInklusi::find($id)->delete();

            Session::flash('toast-hapus', [
                'type' => 'toast-hapus',
                'message' => 'Berhasil Hapus Data'
            ]);

            return redirect('/sa-pendataan-si');
        }

        // return back();
    }
}
