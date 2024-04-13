<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelola Admin SLB | Edit</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
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
        <x-dashboard-side-bar-sa id="{{ $id }}" />
        <div class="pl-[280px] min-h-screen pt-2 pr-5 pb-28">
            <div class="pb-2 mt-5">
                <div class="text-[#297785] font-bold text-[32px]">Edit Admin SLB Provinsi Lampung
                </div>
                <div class="">
                    <x-buttitle-landing ref="/kelola-admin-slb" color="#FA8F21" width="[7rem]" title="Kembali"
                        extendClass="text-white text-center py-2 lg:py-2 hover:bg-[#D87815]" />
                </div>
            </div>
            <form method="POST"
                class="rounded shadow-lg border-solid border-4 border-[#297785] p-5 font-bold text-black"
                enctype="multipart/form-data" id="moving-border">
                @csrf
                @method('PUT')
                <input type="hidden" id="id" name="id" value="{{ $id }}" required>
                {{-- isi konten disini --}}
                <div class=''>
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <div class="flex">
                                <label htmlFor="email_sekolah">Email Sekolah</label>
                                <div class="div">
                                    <button data-popover-target="popover-email" data-popover-placement="right"
                                        type="button"><svg class="w-4 h-4 ms-2 text-gray-400 hover:text-gray-500"
                                            aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                                clip-rule="evenodd"></path>
                                        </svg><span class="sr-only">Show information</span>
                                    </button>
                                    <div data-popover id="popover-email" role="tooltip"
                                        class="absolute z-30 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72">
                                        <div class="p-3 space-y-2">
                                            <h3 class="font-semibold text-gray-900">Email Sekolah</h3>
                                            <p>Masukkan Email Sekolah Aktif, diusahakan menggunakan @gmail.com. Supaya
                                                memudahkan saat ingin reset password</p>
                                            <a href="https://mail.google.com/mail/u/0/#inbox"
                                                class="flex items-center font-medium text-blue-600 hover:text-blue-700 hover:underline">Selengkapnya
                                                <svg class="w-2 h-2 ms-1.5 rtl:rotate-180" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 6 10">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                                </svg></a>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                            <input value="{{ $DATA['email'] }}" type="email" name="email" id="email_sekolah"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="contoh@sekolah.com" value="binainsani@gmail.com" required />
                        </div>
                    </div>
                </div>
                <div class=''>
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <div class="flex">
                                <label htmlFor="nama_sekolah">Nama Sekolah</label>
                                <div class="div">
                                    <button data-popover-target="popover-namaSekolah" data-popover-placement="right"
                                        type="button"><svg class="w-4 h-4 ms-2 text-gray-400 hover:text-gray-500"
                                            aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                                clip-rule="evenodd"></path>
                                        </svg><span class="sr-only">Show information</span>
                                    </button>
                                    <div data-popover id="popover-namaSekolah" role="tooltip"
                                        class="absolute z-30 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72">
                                        <div class="p-3 space-y-2">
                                            <h3 class="font-semibold text-gray-900">Nama Sekolah</h3>
                                            <p>Masukkan Nama Sekolah yang sesuai dan sudah terdata di Disdikbud</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                            <input name="nama" type="text" id="nama_sekolah" value="{{ $DATA['nama'] }}"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="SMA Negeri 1" value="SLB Bina Insani" required />
                        </div>
                        <div class="flex flex-col flex-1 mb-4">
                            <div class="flex">
                                <label htmlFor="npsn">NPSN Sekolah</label>
                                <div class="div">
                                    <button data-popover-target="popover-npsn" data-popover-placement="right"
                                        type="button"><svg class="w-4 h-4 ms-2 text-gray-400 hover:text-gray-500"
                                            aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                                clip-rule="evenodd"></path>
                                        </svg><span class="sr-only">Show information</span>
                                    </button>
                                    <div data-popover id="popover-npsn" role="tooltip"
                                        class="absolute z-30 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72">
                                        <div class="p-3 space-y-2">
                                            <h3 class="font-semibold text-gray-900">NPSN Sekolah</h3>
                                            <p>Masukkan NPSN Sekolah yang sesuai dan sudah terdata di Disdikbud</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                            <input name="npsn" type="number" id="npsn"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                value="{{ $DATA['npsn'] }}" placeholder="12345678" value="45678890" required />
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
                                <option value="{{ $DATA['kota'] }}" selected>{{ $DATA['kota'] }}</option>
                                <option value="Bandar Lampung">Bandar Lampung</option>
                                <option value="Lampung Selatan">Lampung Selatan</option>
                                <option value="Lampung Tengah">Lampung Tengah</option>
                                <option value="Lampung Timur">Lampung Timur</option>
                                <option value="Lampung Utara">Lampung Utara</option>
                                <option value="Metro">Metro</option>
                            </select>
                        </div>
                        <div class="flex flex-col flex-1 mb-4">
                            <label htmlFor="kecamatan">Kecamatan</label>
                            <select id="kecamatan" name="kecamatan"
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
                                    var kecamatanArray = ["Kedaton", "Kemiling", "Rajabasa", "Sukabumi", "Tanjungkarang Barat",
                                        "Tanjungkarang Pusat", "Tanjungkarang Timur", "Tanjungsenang"
                                    ];
                                    for (var i = 0; i < kecamatanArray.length; i++) {
                                        var option = document.createElement("option");
                                        option.text = kecamatanArray[i];
                                        kecamatanSelect.add(option);
                                    }
                                } else if (selectedKabKota === "Metro") {
                                    var kecamatanArray = ["Metro Barat", "Metro Pusat", "Metro Selatan", "Metro Timur", "Metro Utara"];
                                    for (var i = 0; i < kecamatanArray.length; i++) {
                                        var option = document.createElement("option");
                                        option.text = kecamatanArray[i];
                                        kecamatanSelect.add(option);
                                    }
                                } else if (selectedKabKota === "Lampung Selatan") {
                                    var kecamatanArray = ["Kalianda", "Kalianda Selatan", "Kalianda Utara", "Sidomulyo", "Sragi"];
                                    for (var i = 0; i < kecamatanArray.length; i++) {
                                        var option = document.createElement("option");
                                        option.text = kecamatanArray[i];
                                        kecamatanSelect.add(option);
                                    }
                                } else if (selectedKabKota === "Lampung Tengah") {
                                    var kecamatanArray = ["Abung Barat", "Abung Kunang", "Abung Pekurun", "Abung Selatan", "Abung Semuli",
                                        "Abung Surakarta", "Abung Tengah", "Abung Timur", "Abung Tinggi", "Bukit Kemuning", "Pugung",
                                        "Pugung Tengah", "Punggur", "Taman Sari"
                                    ];
                                    for (var i = 0; i < kecamatanArray.length; i++) {
                                        var option = document.createElement("option");
                                        option.text = kecamatanArray[i];
                                        kecamatanSelect.add(option);
                                    }
                                } else if (selectedKabKota === "Lampung Timur") {
                                    var kecamatanArray = ["Abung Surakarta", "Bandar Sribawono", "Batanghari", "Braja Slebah", "Bumi Agung",
                                        "Mataram Baru", "Melinting", "Metro Kibang", "Pasir Sakti", "Pematang Sawa", "Purwoharjo",
                                        "Sekampung", "Sekampung Udik", "Sukadana", "Waway Karya"
                                    ];
                                    for (var i = 0; i < kecamatanArray.length; i++) {
                                        var option = document.createElement("option");
                                        option.text = kecamatanArray[i];
                                        kecamatanSelect.add(option);
                                    }
                                } else if (selectedKabKota === "Lampung Utara") {
                                    var kecamatanArray = ["Abung Selatan", "Abung Semuli", "Abung Tengah", "Abung Tinggi", "Bukit Kemuning",
                                        "Kedondong", "Kotabumi", "Kotabumi Selatan", "Kotabumi Utara", "Muara Sungkai", "Sungkai Barat",
                                        "Sungkai Jaya", "Sungkai Selatan", "Sungkai Tengah", "Sungkai Utara"
                                    ];
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
                            <div class="flex">
                                <label htmlFor="alamat">Alamat Sekolah</label>
                                <div class="div">
                                    <button data-popover-target="popover-alamat" data-popover-placement="right"
                                        type="button"><svg class="w-4 h-4 ms-2 text-gray-400 hover:text-gray-500"
                                            aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                                clip-rule="evenodd"></path>
                                        </svg><span class="sr-only">Show information</span>
                                    </button>
                                    <div data-popover id="popover-alamat" role="tooltip"
                                        class="absolute z-30 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72">
                                        <div class="p-3 space-y-2">
                                            <h3 class="font-semibold text-gray-900">Alamat Sekolah</h3>
                                            <p>Masukkan Alamat Sekolah yang sesuai dan sudah terdata di Disdikbud
                                            </p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                            <input value="{{ $DATA['alamat'] }}" name="alamat" type="text" id="alamat"
                                value="Jln. Drs Warsito"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Alamat Sekolah" required />
                        </div>
                        <div class="flex flex-col flex-1 mb-4">
                            <div class="flex">
                                <label htmlFor="jenis_ketunaan">Jenis Ketunaan</label>
                                <div class="div">
                                    <button data-popover-target="popover-ketunaan" data-popover-placement="right"
                                        type="button"><svg class="w-4 h-4 ms-2 text-gray-400 hover:text-gray-500"
                                            aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                                clip-rule="evenodd"></path>
                                        </svg><span class="sr-only">Show information</span>
                                    </button>
                                    <div data-popover id="popover-ketunaan" role="tooltip"
                                        class="absolute z-30 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72">
                                        <div class="p-3 space-y-2">
                                            <h3 class="font-semibold text-gray-900">Janis Ketunaan</h3>
                                            <p>Masukkan Jenis Ketunaan yang ada disekolah. Apabila lebih dari 1,
                                                maka pisahkan dengan tanda (,) koma. Contoh Tunagrahita, Tunanetra
                                                dan Autis.
                                            </p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                            <input value="{{ $DATA['jenisKetunaan'] }}" name="jenisKetunaan" type="text"
                                id="jenis_ketunaan" value="Tunan Wicara, Tuna Grahita, Tuna Daksa"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Jenis Ketunaan Yang Ada Di Sekolah" required />
                        </div>
                    </div>
                </div>
                <div class=''>
                    <div class="gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <label htmlFor="link_website">Link Website Sekolah</label>
                            <input value="{{ $DATA['linkWebsiteSekolah'] }}" name="linkWebsiteSekolah"
                                type="url" id="link_website" value="www.website.com"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Link Website Sekolah" required />
                        </div>
                    </div>
                </div>
                <div class="flex justify-end mt-4">
                    <button type="submit"
                        class="btn border-none flex justify-center py-2 items-center w-32 h-9 bg-[#FA8F21] hover:bg-[#D87815] focus:ring-4 focus:ring-[#D87815] text-white rounded-lg text-sm">
                        <div class="flex gap-2">
                            <div class="pt-1">
                                <svg width="20" height="14" viewBox="0 0 20 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 1.5L6.7633 12.5L1.20117 7.5" stroke="white" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="div">
                                Update
                            </div>
                        </div>
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
