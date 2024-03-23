<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelola Admin SLB | Tambah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="/assets/landing/prov-lampung2.svg">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />
    <!-- Other meta tags and CSS links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-Qw6AaRkX3kZnwzI+HMC2+dmfzDE32T+8bG5tZX1Pm+mv6AF3y0nKiYxP1o3gRrY7sDKPfA1r95qDQvUNgeGuFg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @keyframes moving-border {
            0% {
                border-color: white;
            }

            50% {
                border-color: #297785;
            }

            100% {
                border-color: white;
            }
        }

        #moving-border {
            animation: moving-border 3s infinite;
        }
    </style>
</head>

<body class="bg-white z-10">
    <div>
        <x-dashboard-side-bar-sa />
        <div class="pl-[280px] h-full pt-2 pr-5 pb-28">
            <div class="pb-2 mt-5">
                <div class="text-[#297785] font-bold text-[32px]">Tambah Admin SLB Provinsi Lampung
                </div>
                <div class="">
                    <x-buttitle-landing ref="/kelola-admin-slb" color="#FA8F21" width="[7rem]" title="Kembali"
                        extendClass="text-white text-center py-2 lg:py-2 hover:bg-[#D87815]" />
                </div>
            </div>
            <form method="POST" class="rounded shadow-lg border-solid border-4 border-[#297785] p-5 font-bold text-black"
                id="moving-border">
                @csrf
                {{-- isi konten disini --}}
                <div class=''>
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <label htmlFor="email_sekolah">Email Sekolah</label>
                            <input type="email" name="email" id="email_sekolah"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Email Aktif Sekolah" required />
                        </div>
                        <div class="flex flex-col flex-1 mb-4 relative">
                            <label htmlFor="password">Password</label>
                            <input type="password" name="password" id="password"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 pl-2 pr-10 w-full"
                                placeholder="Masukkan Password" required />
                            <x-icon-password />
                        </div>
                    </div>
                </div>
                <div class=''>
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <label htmlFor="nama_sekolah">Nama Sekolah</label>
                            <input type="text" name="nama" id="nama_sekolah"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Nama Sekolah" required />
                        </div>
                        <div class="flex flex-col flex-1 mb-4">
                            <label htmlFor="npsn">NPSN</label>
                            <input type="text" name="npsn" id="npsn"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan NPSN Sekolah" required />
                        </div>
                    </div>
                </div>
                <div class=''>
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <label htmlFor="kabkota">Kab/Kota</label>
                            <select id="kabkota" name="kota"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                required onchange="populateKecamatan(this.value)">
                                <option value="" disabled selected>Pilih Kab/Kota</option>
                                <option value="Bandar Lampung">Bandar Lampung</option>
                                <option value="Metro">Metro</option>
                            </select>
                        </div>
                        <div class="flex flex-col flex-1 mb-4">
                            <label htmlFor="kecamatan">Kecamatan</label>
                            <select id="kecamatan" name="kecamatan"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                required>
                                <option value="" disabled selected>Pilih Kecamatan</option>
                            </select>
                        </div>
                        <script>
                            function populateKecamatan(selectedKabKota) {
                                var kecamatanSelect = document.getElementById("kecamatan");
                                while (kecamatanSelect.options.length > 0) {
                                    kecamatanSelect.remove(0);
                                }
                                var defaultOption = document.createElement("option");
                                defaultOption.text = "Pilih Kecamatan";
                                defaultOption.disabled = true;
                                defaultOption.selected = true;
                                kecamatanSelect.add(defaultOption);
                                // opsi kecamatan sesuai dengan kab/kota
                                if (selectedKabKota === "Bandar Lampung") {
                                    var kecamatanArray = ["Kedaton", "Sukarame", "Telukbetung", "Panjang", "Tanah Sareal", "Rajabasa",
                                        "Tanjung Karang Barat", "Tanjung Karang Pusat", "Tanjung Karang Timur", "Tanjung Senang"
                                    ];
                                    for (var i = 0; i < kecamatanArray.length; i++) {
                                        var option = document.createElement("option");
                                        option.text = kecamatanArray[i];
                                        kecamatanSelect.add(option);
                                    }
                                } else if (selectedKabKota === "Metro") {
                                    var kecamatanArray = ["Metro Pusat", "Metro Barat", "Metro Timur", "Metro Selatan", "Metro Utara"];
                                    for (var i = 0; i < kecamatanArray.length; i++) {
                                        var option = document.createElement("option");
                                        option.text = kecamatanArray[i];
                                        kecamatanSelect.add(option);
                                    }
                                }
                                // Tambahkan daftar kecamatan lainnya sesuai kebutuhan
                            }
                        </script>
                    </div>
                </div>
                <div class=''>
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <label htmlFor="alamat">Alamat</label>
                            <input type="text" name="alamat" id="alamat"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Alamat Sekolah" required />
                        </div>
                        <div class="flex flex-col flex-1 mb-4">
                            <label htmlFor="jenis_ketunaan">Jenis Ketunaan</label>
                            <input type="text" name="jenisKetunaan" id="jenis_ketunaan"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Jenis Ketunaan Yang Ada Di Sekolah" required />
                        </div>
                    </div>
                </div>
                <div class=''>
                    <div class="gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <label htmlFor="link_website">Link Website Sekolah</label>
                            <input type="url" name="linkWebsiteSekolah" id="link_website"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Link Website Sekolah" required />
                        </div>
                    </div>
                </div>
                <div class="flex justify-end mt-4">
                    <button type="submit"
                        class="flex justify-center py-2 items-center w-32 h-9 bg-[#FA8F21] hover:bg-[#D87815] focus:ring-4 focus:ring-[#D87815] text-white rounded-lg text-sm">
                        + Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
