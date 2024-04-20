<?php

namespace App\Http\Controllers;

use App\Models\Karya;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

use App\Models\Sekolah;

class GeneralPage extends Controller
{
    function pengumumanSLB () {
        $time = new \DateTime("now", new \DateTimeZone('Asia/Jakarta'));
        $notif = Pengumuman::where('sistem', 'slb')
                        -> where('tanggalMulai', '<', $time)
                        -> where('tanggalAkhir', '>', $time) -> latest() -> get();

        return $notif;
    }
    // Awal Landing page
    function home () {
        return view('pages/landing/home');
    }
    function slb (Request $req) {
        $sekolah = Sekolah::all();

        $daftarSekolah = Sekolah::where(function (Builder $query) use ($req) {
            if ($req -> filterSekolah) {
                $query -> where('id', $req -> filterSekolah);
            }
            if ($req -> pencarian) {
                $query -> where(function (Builder $query) use ($req) {
                    $query -> where('nama', 'LIKE', '%' . $req -> pencarian . '%')
                        -> orWhere('kota', 'LIKE', '%' . $req -> pencarian . '%')
                        -> orWhere('kecamatan', 'LIKE', '%' . $req -> pencarian . '%')
                        -> orWhere('jenisKetunaan', 'LIKE', '%' . $req -> pencarian . '%');
                });
            }
        }) -> latest() -> get() -> toArray();

        $temp = array_map(function ($data) {
            return [
                'namaSekolah' => $data["nama"],
                'kabkota' => $data["kota"],
                'kecamatan' => $data["kecamatan"],
                'alamat' => $data["alamat"],
                'jenisKetunaan' => $data["jenisKetunaan"],
                'websiteSekolah' => $data["linkWebsiteSekolah"]
            ];
        }, $daftarSekolah);

        return view('pages/landing/slb', [
            'dummyData' => $temp,
            'sekolah' => $sekolah
        ]);
    }
    function karyaslb (Request $req) {
        $sekolah = Sekolah::all();

        $daftarKarya = Karya::where(function (Builder $query) use ($req) {
            if ($req -> filterSekolah) {
                $query -> where('sekolah', (int) $req -> filterSekolah);
            }
            if ($req -> pencarian) {
                $query -> where(function (Builder $query) use ($req) {
                    $query -> where('nama', 'LIKE', '%' . $req -> pencarian . '%')
                        -> orWhere('deskripsi', 'LIKE', '%' . $req -> pencarian . '%');
                });
            }
        }) -> latest() -> get() -> toArray();

        return view('pages/landing/karya-slb', [
            'dummyData' => $daftarKarya,
            'sekolah' => $sekolah
        ]);
    }
    function tentang () {
        return view('pages/landing/tentang');
    }
    // Akhir landing page

    // Awal Auth Admin SLB dan SA
    function login () {
        return view('pages/dashboard/login');
    }
    function lupapassword () {
        return view('pages/dashboard/lupa-password');
    }
    function otp () {
        return view('pages/dashboard/otp');
    }
    function newpassword () {
        return view('pages/dashboard/new-password');
    }
    // Akhir Auth Admin SLB dan SA

    // Awal Admin Home SLB
    function adminhomeslb () {
        $notif = $this -> pengumumanSLB();

        return view('pages/dashboard/admin-slb/admin-home-slb', [
            'pengumuman' => $notif
        ]);
    }
    // Guru
    function adminguruslb () {
        return view('pages/dashboard/admin-slb/guru/admin-guru-slb');
    }
    function admintambahguruslb () {
        return view('pages/dashboard/admin-slb/guru/tambah/tambah-guru-slb');
    }
    function admineditguruslb () {
        return view('pages/dashboard/admin-slb/guru/edit/edit-guru-slb');
    }
    // Kebutuhan guru
    function adminkebutuhanguruslb () {
        return view('pages/dashboard/admin-slb/kebutuhan-guru/admin-kebutuhan-guru-slb');
    }
    function admintambahkebutuhanguruslb () {
        return view('pages/dashboard/admin-slb/kebutuhan-guru/tambah/tambah-kebutuhan-guru-slb');
    }
    function admineditkebutuhanguruslb () {
        return view('pages/dashboard/admin-slb/kebutuhan-guru/edit/edit-kebutuhan-guru-slb');
    }
    // Peserta didik
    function adminpesertadidikslb () {
        return view('pages/dashboard/admin-slb/peserta-didik/admin-pesertadidik-slb');
    }
    function admintambahpesertadidikslb () {
        return view('pages/dashboard/admin-slb/peserta-didik/tambah/tambah-pesertadidik-slb');
    }
    function admineditpesertadidikslb () {
        return view('pages/dashboard/admin-slb/peserta-didik/edit/edit-pesertadidik-slb');
    }
    // sarpras
    function adminsarprasslb () {
        return view('pages/dashboard/admin-slb/sarpras/admin-sarpras-slb');
    }      
    function admintambahsarprasslb () {
        return view('pages/dashboard/admin-slb/sarpras/tambah/tambah-sarpras-slb');
    }
    function admineditsarprasslb () {
        return view('pages/dashboard/admin-slb/sarpras/edit/edit-sarpras-slb');
    } 
    // Tendik
    function admintendikslb () {
        return view('pages/dashboard/admin-slb/tendik/admin-tendik-slb');
    }
    function admintambahtendikslb () {
        return view('pages/dashboard/admin-slb/tendik/tambah/tambah-tendik-slb');
    }
    function adminedittendikslb () {
        return view('pages/dashboard/admin-slb/tendik/edit/edit-tendik-slb');
    } 
    // Tendik
    function adminkaryaslb () {
        return view('pages/dashboard/admin-slb/karya/admin-karya-slb');
    }
    function admintambahkaryaslb () {
        return view('pages/dashboard/admin-slb/karya/tambah/tambah-karya-slb');
    }
    function admineditkaryaslb () {
        return view('pages/dashboard/admin-slb/karya/edit/edit-karya-slb');
    } 

    // awal admin statistik
    function asgurupnsnon () {
        return view('pages/dashboard/admin-slb/statistik/guru/pns-non');
    }
    function asgurusertifikasinon () {
        return view('pages/dashboard/admin-slb/statistik/guru/sertifikasi-non');
    }
    function asgurutahunajaran () {
        return view('pages/dashboard/admin-slb/statistik/guru/tahun-ajaran');
    }

    function askaryatahunajaran () {
        return view('pages/dashboard/admin-slb/statistik/karya/tahun-ajaran');
    }

    
    function askebutuhangurutahunajaran () {
        return view('pages/dashboard/admin-slb/statistik/kebutuhan-guru/tahun-ajaran');
    }

    function aspesertadidikjenisketunaan () {
        return view('pages/dashboard/admin-slb/statistik/peserta-didik/jenis-ketunaan');
    }
    function aspesertadidikkelas () {
        return view('pages/dashboard/admin-slb/statistik/peserta-didik/kelas');
    }
    function aspesertadidiktahunajaran () {
        return view('pages/dashboard/admin-slb/statistik/peserta-didik/tahun-ajaran');
    }

    function assarprastahunajaran () {
        return view('pages/dashboard/admin-slb/statistik/sarpras/tahun-ajaran');
    }
    
    function astendikpnsnon () {
        return view('pages/dashboard/admin-slb/statistik/tendik/pns-non');
    }
    function astendiktahunajaran () {
        return view('pages/dashboard/admin-slb/statistik/tendik/tahun-ajaran');
    }
    // akhir admin statistik

    // Akhir Admin Home SLB

    // Awal Super Admin
    // Kelola Admin SLB
    function kelolaadminslb () {
        return view('pages/dashboard/super-admin/kelola-admin-slb/kelola-admin-slb');
    }
    function tambahadminslb () {
        return view('pages/dashboard/super-admin/kelola-admin-slb/tambah/tambah-admin-slb');
    }
    function editadminslb () {
        return view('pages/dashboard/super-admin/kelola-admin-slb/edit/edit-admin-slb');
    }
    function lihatadminslb () {
        return view('pages/dashboard/super-admin/kelola-admin-slb/lihat/lihat-admin-slb');
    }
    // SLB Dashboard
    function sadashboardslb () {
        return view('pages/dashboard/super-admin/slb/sa-dashboard-slb');
    }
    // statistik
    function sastatistikslb () {
        return view('pages/dashboard/super-admin/slb/statistik-slb/sa-statistik-slb');
    }
    function sastatistikguru () {
        return view('pages/dashboard/super-admin/slb/statistik-slb/sa-statistik-guru');
    }
    function sastatistikkebutuhanguru () {
        return view('pages/dashboard/super-admin/slb/statistik-slb/sa-statistik-kebutuhan-guru');
    }
    function sastatistikpesertadidik () {
        return view('pages/dashboard/super-admin/slb/statistik-slb/sa-statistik-peserta-didik');
    }
    function sastatistiksarpras () {
        return view('pages/dashboard/super-admin/slb/statistik-slb/sa-statistik-sarpras');
    }
    function sastatistiktendik () {
        return view('pages/dashboard/super-admin/slb/statistik-slb/sa-statistik-tendik');
    }
    function sastatistikkarya () {
        return view('pages/dashboard/super-admin/slb/statistik-slb/sa-statistik-karya');
    }

     // awal Super admin statistik
    function sasgurusekolah () {
        return view('pages/dashboard/super-admin/slb/statistik/guru/sekolah');
    }
    function sasgurupnsnon () {
        return view('pages/dashboard/super-admin/slb/statistik/guru/pns-non');
    }
    function sasgurusertifikasinon () {
        return view('pages/dashboard/super-admin/slb/statistik/guru/sertifikasi-non');
    }
    function sasgurutahunajaran () {
        return view('pages/dashboard/super-admin/slb/statistik/guru/tahun-ajaran');
    }

    function saskaryasekolah () {
        return view('pages/dashboard/super-admin/slb/statistik/karya/sekolah');
    }
    function saskaryatahunajaran () {
        return view('pages/dashboard/super-admin/slb/statistik/karya/tahun-ajaran');
    }

    function saskebutuhangurusekolah () {
        return view('pages/dashboard/super-admin/slb/statistik/kebutuhan-guru/sekolah');
    }
    function saskebutuhangurutahunajaran () {
        return view('pages/dashboard/super-admin/slb/statistik/kebutuhan-guru/tahun-ajaran');
    }

    function saspesertadidiksekolah () {
        return view('pages/dashboard/super-admin/slb/statistik/peserta-didik/sekolah');
    }
    function saspesertadidikjenisketunaan () {
        return view('pages/dashboard/super-admin/slb/statistik/peserta-didik/jenis-ketunaan');
    }
    function saspesertadidikkelas () {
        return view('pages/dashboard/super-admin/slb/statistik/peserta-didik/kelas');
    }
    function saspesertadidiktahunajaran () {
        return view('pages/dashboard/super-admin/slb/statistik/peserta-didik/tahun-ajaran');
    }

    function sassarprassekolah () {
        return view('pages/dashboard/super-admin/slb/statistik/sarpras/sekolah');
    }
    function sassarprastahunajaran () {
        return view('pages/dashboard/super-admin/slb/statistik/sarpras/tahun-ajaran');
    }
    
    function sastendiksekolah () {
        return view('pages/dashboard/super-admin/slb/statistik/tendik/sekolah');
    }
    function sastendikpnsnon () {
        return view('pages/dashboard/super-admin/slb/statistik/tendik/pns-non');
    }
    function sastendiktahunajaran () {
        return view('pages/dashboard/super-admin/slb/statistik/tendik/tahun-ajaran');
    }
    // akhir Super admin statistik

    // Data Guru SLB
    function saguruslb () {
        return view('pages/dashboard/super-admin/slb/guru/sa-guru-slb');
    }
    // Data Kebutuhan Guru
    function sakebutuhanguruslb () {
        return view('pages/dashboard/super-admin/slb/kebutuhan-guru/sa-kebutuhan-guru-slb');
    }
    // Data Peserta Didik SLB
    function sapesertadidikslb () {
        return view('pages/dashboard/super-admin/slb/peserta-didik/sa-peserta-didik-slb');
    }
    // Data Sarpras SLB
    function sasarprasslb () {
        return view('pages/dashboard/super-admin/slb/sarpras/sa-sarpras-slb');
    }
    // Data Tendik SLB
    function satendikslb () {
        return view('pages/dashboard/super-admin/slb/tendik/sa-tendik-slb');
    }
    // Data Tendik SLB
    function sakaryaslb () {
        return view('pages/dashboard/super-admin/slb/karya/sa-karya-slb');
    }

    // sa Sekolah Inklusi
    function sapendataansi () {
        return view('pages/dashboard/super-admin/sekolah-inklusi/sa-pendataan-si');
    }
    function sapendataansiedit() {
        return view('pages/dashboard/super-admin/sekolah-inklusi/edit/edit-pendataan-si');
    }
    function sapendataansilihat() {
        return view('pages/dashboard/super-admin/sekolah-inklusi/lihat/lihat-pendataan-si');
    }
    
    // Awal sa kelola notifikasi    
    function sakelolanotifikasi () {
        return view('pages/dashboard/super-admin/kelola-notifikasi/kelola-notifikasi');
    }
    function sakelolanotifikasislb () {
        return view('pages/dashboard/super-admin/kelola-notifikasi/slb/kelola-notifikasi-slb');
    }
    function sakelolanotifikasislbtambah () {
        return view('pages/dashboard/super-admin/kelola-notifikasi/slb/tambah/kelola-notifikasi-slb-tambah');
    }
    function sakelolanotifikasislbedit () {
        return view('pages/dashboard/super-admin/kelola-notifikasi/slb/edit/kelola-notifikasi-slb-edit');
    }
    function sakelolanotifikasisi () {
        return view('pages/dashboard/super-admin/kelola-notifikasi/sekolah-inklusi/kelola-notifikasi-si');
    }
    function sakelolanotifikasisitambah () {
        return view('pages/dashboard/super-admin/kelola-notifikasi/sekolah-inklusi/tambah/tambah-notifikasi-si');
    }
    function sakelolanotifikasisiedit () {
        return view('pages/dashboard/super-admin/kelola-notifikasi/sekolah-inklusi/edit/edit-notifikasi-si');
    }
    // Akhir sa kelola notifikasi

    // Awal Admin Sekolah Inklusi
    function pendataansekolahinklusi () {
        $time = new \DateTime("now", new \DateTimeZone('Asia/Jakarta'));
        $notif = Pengumuman::where('sistem', 'si')
                        -> where('tanggalMulai', '<', $time)
                        -> where('tanggalAkhir', '>', $time) -> latest() -> get();

        return view('pages/dashboard/admin-sekolah-inklusi/pendataan-sekolah-inklusi', [
            'pengumuman' => $notif
        ]);
    }
    // Akhir Admin Sekolah Inklusi


}
