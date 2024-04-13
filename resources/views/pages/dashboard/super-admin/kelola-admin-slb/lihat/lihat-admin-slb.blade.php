<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelola Admin SLB | Lihat</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="/assets/landing/prov-lampung2.svg">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />
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
        <x-dashboard-side-bar-sa id="{{ $id }}"/>
        <div class="pl-[280px] min-h-screen pt-2 pr-5 pb-28">
            <div class="pb-2 mt-5">
                <div class="text-[#297785] font-bold text-[32px]">Lihat Admin SLB Provinsi Lampung
                </div>
                <div class="">
                    <x-buttitle-landing ref="/kelola-admin-slb" color="#FA8F21" width="[7rem]" title="Kembali"
                        extendClass="text-white text-center py-2 lg:py-2 hover:bg-[#D87815]" />
                </div>
            </div>
            <div class="rounded shadow-lg border-solid border-4 border-[#297785] p-5 font-bold text-black"
                id="moving-border">
                {{-- isi konten disini --}}
                <div class=''>
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <label htmlFor="email_sekolah">Email Sekolah</label>
                            <input name="email" type="email" id="email_sekolah"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="contoh@sekolah.com" value="{{ $DATA['email'] }}" required />
                        </div>
                        {{-- <div class="flex flex-col flex-1 mb-4 relative">
                            <label htmlFor="password">Password</label>
                            <input name="password" type="password" id="password"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 pl-2 pr-10 w-full"
                                placeholder="********" />
                            <x-icon-password />
                        </div> --}}
                    </div>
                </div>
                <div class=''>
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <label htmlFor="nama_sekolah">Nama Sekolah</label>
                            <input name="nama" type="text" id="nama_sekolah"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="SMA Negeri 1" value="{{ $DATA['nama'] }}" required />
                        </div>
                        <div class="flex flex-col flex-1 mb-4">
                            <label htmlFor="npsn">NPSN</label>
                            <input name="npsn" type="text" id="npsn"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="12345678" value="{{ $DATA['npsn'] }}" required />
                        </div>
                    </div>
                </div>
                <div class=''>
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <label htmlFor="kabkota">Kab/Kota</label>
                            <select name="kota" id="kabkota" name="kabkota" value="{{ $DATA['kota'] }}"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                required onchange="populateKecamatan(this.value)">
                                <option value="{{ $DATA['kota'] }}" selected>{{ $DATA['kota'] }}</option>
                                <option value="Bandar Lampung">Bandar Lampung</option>
                                <option value="Metro">Metro</option>
                            </select>
                        </div>
                        <div class="flex flex-col flex-1 mb-4">
                            <label htmlFor="kecamatan">Kecamatan</label>
                            <select name="kecamatan" id="kecamatan" name="kecamatan" value="{{ $DATA['kecamatan'] }}"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                required>
                                <option value="{{ $DATA['kecamatan'] }}" selected>{{ $DATA['kecamatan'] }}</option>
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
                            <input name="alamat" type="text" id="alamat" value="{{ $DATA['alamat'] }}"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Alamat Sekolah" required />
                        </div>
                        <div class="flex flex-col flex-1 mb-4">
                            <label htmlFor="jenis_ketunaan">Jenis Ketunaan</label>
                            <input name="jenisKetunaan" type="text" id="jenis_ketunaan" value="{{ $DATA['jenisKetunaan'] }}"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Jenis Ketunaan Yang Ada Di Sekolah" required />
                        </div>
                    </div>
                </div>
                <div class=''>
                    <div class="gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <label htmlFor="link_website">Link Website Sekolah</label>
                            <input name="linkWebsiteSekolah" type="url" id="link_website" value="{{ $DATA['linkWebsiteSekolah'] }}"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Link Website Sekolah" required />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
