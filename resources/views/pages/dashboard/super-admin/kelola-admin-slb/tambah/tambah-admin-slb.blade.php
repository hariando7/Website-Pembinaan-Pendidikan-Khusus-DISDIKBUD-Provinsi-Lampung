<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelola Admin SLB | Tambah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
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
        <div class="pl-[280px] min-h-screen pt-2 pr-5 pb-28">
            <div class="pb-2 mt-5">
                <div class="text-[#297785] font-bold text-[32px]">Tambah Admin SLB Provinsi Lampung
                </div>
                <div class="">
                    <x-buttitle-landing ref="/kelola-admin-slb" color="#FA8F21" width="[7rem]" title="Kembali"
                        extendClass="text-white text-center py-2 lg:py-2 hover:bg-[#D87815]" />
                </div>
            </div>
            <form method="POST"
                class="rounded shadow-lg border-solid border-4 border-[#297785] p-5 font-bold text-black"
                id="moving-border">
                @csrf
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
                                            <p>Masukkan Email Sekolah Aktif (Maksimal 100 karakter), diusahakan
                                                menggunakan @gmail.com. Supaya
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
                            <input type="email" name="email" id="email_sekolah" maxlength="100"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Email Aktif Sekolah (Maksimal 100 karakter)" required />
                        </div>
                        <div class="flex flex-col flex-1 mb-4 relative">
                            <div class="flex">
                                <label htmlFor="password">Password</label>
                                <div class="div">
                                    <button data-popover-target="popover-password" data-popover-placement="right"
                                        type="button"><svg class="w-4 h-4 ms-2 text-gray-400 hover:text-gray-500"
                                            aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                                clip-rule="evenodd"></path>
                                        </svg><span class="sr-only">Show information</span>
                                    </button>
                                    <div data-popover id="popover-password" role="tooltip"
                                        class="absolute z-30 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72">
                                        <div class="p-3 space-y-2">
                                            <h3 class="font-semibold text-gray-900">Password</h3>
                                            <p>Masukkan Password (Minimal 8 Karakter), Masukkan minimal 6 karakter
                                                random. Apabila password
                                                lupa, dapat melakukan reset password menggunakan Email aktif. Atau
                                                menghubungi admin Dinas</p>
                                            <a href="https://wa.me/0895637316999"
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
                            <input type="password" name="password" id="password" minlength="8"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 pl-2 pr-10 w-full"
                                placeholder="Masukkan Password (Minimal 8 Karakter)" required />
                            <x-icon-password />
                        </div>
                    </div>
                    <div class=''>
                        <div class="flex gap-x-2">
                            <div class="flex flex-col flex-1 mb-4">
                                <div class="flex">
                                    <label htmlFor="nama_sekolah">Nama Sekolah</label>
                                    <div class="div">
                                        <button data-popover-target="popover-namaSekolah"
                                            data-popover-placement="right" type="button"><svg
                                                class="w-4 h-4 ms-2 text-gray-400 hover:text-gray-500"
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
                                                <p>Masukkan Nama Sekolah (Maksimal 100 karakter) yang sesuai dan sudah
                                                    terdata di Disdikbud</p>
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                    </div>
                                </div>
                                <input type="text" name="nama" id="nama_sekolah" maxlength="100"
                                    class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                    placeholder="Masukkan Nama Sekolah (Maksimal 100 karakter)" required />
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
                                                <p>Masukkan NPSN Sekolah (Minimal 8 Karakter) yang sesuai dan sudah
                                                    terdata di Disdikbud</p>
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                    </div>
                                </div>
                                <input type="number" name="npsn" id="npsn" minlength="8"
                                    class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                    placeholder="Masukkan NPSN Sekolah (Minimal 8 Karakter)" required />
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
                                    <option value="Lampung Barat">Lampung Barat</option>
                                    <option value="Lampung Selatan">Lampung Selatan</option>
                                    <option value="Lampung Tengah">Lampung Tengah</option>
                                    <option value="Lampung Timur">Lampung Timur</option>
                                    <option value="Lampung Utara">Lampung Utara</option>
                                    <option value="Metro">Metro</option>
                                    <option value="Mesuji">Mesuji</option>
                                    <option value="Pesawaran">Pesawaran</option>
                                    <option value="Pesisir Barat">Pesisir Barat</option>
                                    <option value="Pringsewu">Pringsewu</option>
                                    <option value="Tanggamus">Tanggamus</option>
                                    <option value="Tulang Bawang">Tulang Bawang</option>
                                    <option value="Tulang Bawang Barat">Tulang Bawang Barat</option>
                                    <option value="Way Kanan">Way Kanan</option>
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
                            {{-- Refrensi dari https://p2k.stekom.ac.id/ensiklopedia/Daftar_kecamatan_dan_kelurahan_di_Lampung --}}
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
                                    if (selectedKabKota === "Bandar Lampung") {
                                        var kecamatanArray = ["Bumi Waras", "Enggal", "Kedamaian", "Kedaton", "Kemiling", "Labuhan Ratu",
                                            "Langkapura", "Panjang", "Rajabasa", "Sukabumi", "Sukarame", "Tanjung Seneng",
                                            "Tanjung Karang Barat", "Tanjung Karang Pusat", "Tanjung Karang Timur", "Teluk Betung",
                                            "Teluk Betung Selatan", "Teluk Betung Timur", "Teluk Betung Utara", "Way Halim"
                                        ];
                                        for (var i = 0; i < kecamatanArray.length; i++) {
                                            var option = document.createElement("option");
                                            option.text = kecamatanArray[i];
                                            kecamatanSelect.add(option);
                                        }
                                    } else if (selectedKabKota === "Lampung Barat") {
                                        var kecamatanArray = ["Air Hitam", "Balik Bukit", "Bandar Negeri Suoh", "Batu Brak", "Batu Ketulis",
                                            "Belalau", "Gedung Surian", "Kebun Tebu", "Lumbuk Seminung", "Pagar Dewa", "Sekincau", "Sukau",
                                            "Suoh", "Sumber Jaya", "Way Tenong"
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
                                    } else if (selectedKabKota === "Lampung Selatan") {
                                        var kecamatanArray = ["Bakauheni", "Candipuro", "Jati Agung", "Kalianda", "Katibung", "Ketapang",
                                            "Merbau Mataram", "Natar", "Palas", "Penengahan", "Rajabasa", "Sidomulyo", "Sragi",
                                            "Tanjung Bintang", "Tanjung Sari", "Way Panji", "Way Sulan"
                                        ];
                                        for (var i = 0; i < kecamatanArray.length; i++) {
                                            var option = document.createElement("option");
                                            option.text = kecamatanArray[i];
                                            kecamatanSelect.add(option);
                                        }
                                    } else if (selectedKabKota === "Lampung Tengah") {
                                        var kecamatanArray = ["Anak Ratu Aji", "Anak Tuha", "Bandar Mataram", "Bandar Surabaya", "Bangunrejo",
                                            "Bekri", "Bumi Nabung", "Bumi Ratu Nuban", "Gunung Sugih", "Kalirejo", "Kota Gajah", "Padang Ratu",
                                            "Pubian", "Punggur", "Putra Rumbia", "Rumbia", "Selagai Lingga", "Sendang Agung", "Seputih Agung",
                                            "Seputih Banyak", "Seputih Mataram", "Seputih Raman", "Seputih Surabaya", "Terbanggi Besar",
                                            "Terusan Nunyai", "Trimurjo", "Way Pengubuan", "Way Seputih"
                                        ];
                                        for (var i = 0; i < kecamatanArray.length; i++) {
                                            var option = document.createElement("option");
                                            option.text = kecamatanArray[i];
                                            kecamatanSelect.add(option);
                                        }
                                    } else if (selectedKabKota === "Lampung Timur") {
                                        var kecamatanArray = ["Bandar Sribhawono", "Batanghari", "Batanghari Nuban", "Braja Slebah", "Bumi Agung",
                                            "Gunung Pelindung", "Jabung", "Labuhan Maringgai", "Labuhan Ratu", "Marga Sekampung", "Marga Tiga",
                                            "Mataram aru", "Melinting", "Metro Kibang", "Pasir Sakti", "Pekalongan", "Purbolinggo",
                                            "Raman Utara", "Sekampung", "Sekampung Udik", "Sukadana", "Way Bungur", "Waway Karya", "Way Jepara"
                                        ];
                                        for (var i = 0; i < kecamatanArray.length; i++) {
                                            var option = document.createElement("option");
                                            option.text = kecamatanArray[i];
                                            kecamatanSelect.add(option);
                                        }
                                    } else if (selectedKabKota === "Lampung Utara") {
                                        var kecamatanArray = ["Abung Barat", "Abung Kunang", "Abung Pekurun", "Abung Selatan", "Abung Semuli",
                                            "Abung Surakarta", "Abung Tengah", "Abung Timur", "Abung Tinggi", "Blambangan Pagar",
                                            "Bukit Kemuning", "Bunga Mayang", "Hulu Sungkai", "Kotabumi", "Kotabumi Selatan", "Kotabumi Utara",
                                            "Muara Sungkai", "Sungkai Barat", "Sungkai Jaya", "Sungkai Selatan", "Sungkai Tengah",
                                            "Sungkai Utara", "Tanjung Raja"
                                        ];
                                        for (var i = 0; i < kecamatanArray.length; i++) {
                                            var option = document.createElement("option");
                                            option.text = kecamatanArray[i];
                                            kecamatanSelect.add(option);
                                        }
                                    } else if (selectedKabKota === "Mesuji") {
                                        var kecamatanArray = ["Mesuji", "Mesuji Timur", "Panca Jaya", "Rawa Jitu Utara", "Simpang Pematang",
                                            "Tanjung Raya", "Way Serdang"
                                        ];
                                        for (var i = 0; i < kecamatanArray.length; i++) {
                                            var option = document.createElement("option");
                                            option.text = kecamatanArray[i];
                                            kecamatanSelect.add(option);
                                        }
                                    } else if (selectedKabKota === "Pesawaran") {
                                        var kecamatanArray = ["Gedong Tataan", "Kedondong", "Marga Punduh", "Negeri Katon", "Padang Cermin",
                                            "Punduh Pidada", "Tegineneng", "Teluk Pandan", "Way Lima", "Way Khilau", "Way Ratai"
                                        ];
                                        for (var i = 0; i < kecamatanArray.length; i++) {
                                            var option = document.createElement("option");
                                            option.text = kecamatanArray[i];
                                            kecamatanSelect.add(option);
                                        }
                                    } else if (selectedKabKota === "Pesisir Barat") {
                                        var kecamatanArray = ["Bengkunat", "Karya Penggawa", "Krui Selatan", "Lemong", "Ngambur", "Ngaras",
                                            "Pesisir Selatan", "Pesisir Tengah", "Pesisir Utara", "Pulaupisang", "Way Krui"
                                        ];
                                        for (var i = 0; i < kecamatanArray.length; i++) {
                                            var option = document.createElement("option");
                                            option.text = kecamatanArray[i];
                                            kecamatanSelect.add(option);
                                        }
                                    } else if (selectedKabKota === "Pringsewu") {
                                        var kecamatanArray = ["Adiluwih", "Ambarawa", "Banyumas", "Gading Rejo", "Pagelaran", "Pagelaran Utara",
                                            "Pardasuka", "Pringsewu", "Sukoharjo"
                                        ];
                                        for (var i = 0; i < kecamatanArray.length; i++) {
                                            var option = document.createElement("option");
                                            option.text = kecamatanArray[i];
                                            kecamatanSelect.add(option);
                                        }
                                    } else if (selectedKabKota === "Tanggamus") {
                                        var kecamatanArray = ["Air Naningan", "Bandar Negeri Semuong", "Bulok", "Cukuh Balak", "Gisting",
                                            "Gunung Alip", "Klumbayan", "Klumbayan Barat", "Kota Agung", "Kota Agung Barat", "Kota Agung Timur",
                                            "Limau", "Pematang Sawa", "Pugung", "Pulau Panggung", "Semaka", "Sumber Rejo", "Talang Padang",
                                            "Ulu Belu", "Wonosobo"
                                        ];
                                        for (var i = 0; i < kecamatanArray.length; i++) {
                                            var option = document.createElement("option");
                                            option.text = kecamatanArray[i];
                                            kecamatanSelect.add(option);
                                        }
                                    } else if (selectedKabKota === "Tulang Bawang") {
                                        var kecamatanArray = ["Banjar Agung", "Banjar Baru", "Banjar Margo", "Dente Teladas", "Gedung Aji",
                                            "Gedung Aji Baru", "Gedung Meneng", "Menggala", "Menggala Timur", "Meraksa Aji", "Penawar Aji",
                                            "Penawar Tama", "Rawa Jitu Selatan", "Rawa Jitu Timur", "Rawa Pitu"
                                        ];
                                        for (var i = 0; i < kecamatanArray.length; i++) {
                                            var option = document.createElement("option");
                                            option.text = kecamatanArray[i];
                                            kecamatanSelect.add(option);
                                        }
                                    } else if (selectedKabKota === "Tulang Bawang Barat") {
                                        var kecamatanArray = ["Batu Putih", "Gunung Agung", "Gunung Terang", "Lambu Kibang", "Pagar Dewa",
                                            "Tulang Bawang Tengah", "Tulang Bawang Udik", "Tumijajar", "Way Kenanga"
                                        ];
                                        for (var i = 0; i < kecamatanArray.length; i++) {
                                            var option = document.createElement("option");
                                            option.text = kecamatanArray[i];
                                            kecamatanSelect.add(option);
                                        }
                                    } else if (selectedKabKota === "Way Kanan") {
                                        var kecamatanArray = ["Buhaga", "Banjit", "Baradatu", "Blambangan Umpu", "Buay Bahuga", "Bumi Agung", "Gunung Labuhan", "Kasui", "Negara Batin", "Negeri Agung", "Negeri Besar", "Pakuan Ratu", "Rebang Tangkas", "Umpu Semenguk", "Way Tuba"];
                                        for (var i = 0; i < kecamatanArray.length; i++) {
                                            var option = document.createElement("option");
                                            option.text = kecamatanArray[i];
                                            kecamatanSelect.add(option);
                                        }
                                    }
                                }
                            </script>
                        </div>
                    </div>
                    <div class=''>
                        <div class="flex gap-x-2">
                            <div class="flex flex-col flex-1 mb-4">
                                <div class="flex">
                                    <label htmlFor="alamat">Alamat Link Maps Sekolah</label>
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
                                                <h3 class="font-semibold text-gray-900">Alamat Link Maps Sekolah</h3>
                                                <p>Masukkan Link Maps Sekolah
                                                </p>
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                    </div>
                                </div>
                                <input type="text" name="alamat" id="alamat" maxlength="200"
                                    class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                    placeholder="Masukkan Link Maps Sekolah (Maksimal 200 Karakter)" required />
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
                                <input type="text" name="jenisKetunaan" id="jenis_ketunaan" maxlength="100"
                                    class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                    placeholder="Masukkan Jenis Ketunaan Yang Ada Di Sekolah (Maksimal 100 Karakter)"
                                    required />
                            </div>
                        </div>
                    </div>
                    <div class=''>
                        <div class="gap-x-2">
                            <div class="flex flex-col flex-1 mb-4">
                                <label htmlFor="link_website">Link Website/Sosial Media Sekolah</label>
                                <input type="url" name="linkWebsiteSekolah" id="link_website" maxlength="200"
                                    class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                    placeholder="Masukkan Link Website/Sosial Media Sekolah (Maksimal 200 Karakter)"
                                    required />
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end mt-4">
                        <button type="submit"
                            class="btn border-none flex justify-center py-2 items-center w-32 h-9 bg-[#FA8F21] hover:bg-[#D87815] focus:ring-4 focus:ring-[#D87815] text-white rounded-lg text-sm">
                            + Simpan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
