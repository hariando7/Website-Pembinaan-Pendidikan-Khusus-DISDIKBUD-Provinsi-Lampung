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
    <link href="https://cdn.jsdelivr.net/npm/tom-select/dist/css/tom-select.css" rel="stylesheet" />
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
                                <option value="{{ $DATA['kecamatan'] }}" selected>{{ $DATA['kecamatan'] }}</option>
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
                                    var kecamatanArray = ["Buhaga", "Banjit", "Baradatu", "Blambangan Umpu", "Buay Bahuga", "Bumi Agung",
                                        "Gunung Labuhan", "Kasui", "Negara Batin", "Negeri Agung", "Negeri Besar", "Pakuan Ratu",
                                        "Rebang Tangkas", "Umpu Semenguk", "Way Tuba"
                                    ];
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
                            <label htmlFor="link_website">Link Website Sekolah</label>
                            <input value="{{ $DATA['linkWebsiteSekolah'] }}" name="linkWebsiteSekolah"
                                type="url" id="link_website" value="www.website.com"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Link Website Sekolah" required />
                        </div>
                    </div>
                </div>
                <div class=''>
                    <div class="gap-x-2">
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
                            <div class="w-full">
                                <input value="{{ $DATA['jenisKetunaan'] }}" name="jenisKetunaan" id="selected-text"
                                    name="selectedText" readonly
                                    class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                    placeholder="Jenis Ketunaan Sekolah" required />
                                <select id="select-role" placeholder="Pilih Disini" autocomplete="off"
                                    class="block w-full rounded-sm cursor-pointer focus:outline-none">
                                    <option value="" disabled selected>Pililih</option>
                                    <option value="Tunanetra">Tunanetra</option>
                                    <option value="Tunarungu">Tunarungu</option>
                                    <option value="Tunagrahita">Tunagrahita</option>
                                    <option value="Tunadaksa">Tunadaksa</option>
                                    <option value="Tunalaras">Tunalaras</option>
                                    <option value="Adhd">Hiperaktivitas (ADHD)</option>
                                    <option value="Gangguan Ganda">Gangguan Ganda</option>
                                    <option value="Autis">Autis</option>
                                    <!-- tambahkan opsi lainnya sesuai kebutuhan -->
                                </select>
                                <script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>
                                <script>
                                    var select = new TomSelect('#select-role', {
                                        maxItems: 8,
                                        render: {
                                            item: function(data, escape) {
                                                return '<div>' + escape(data.text) + '</div>';
                                            }
                                        },
                                        onChange: function(value) {
                                            var selectedTexts = [];
                                            for (var i = 0; i < value.length; i++) {
                                                var option = select.options[value[i]];
                                                selectedTexts.push(option.text);
                                            }
                                            document.getElementById('selected-text').value = selectedTexts.join(', ');
                                        }
                                    });
                                </script>
                            </div>
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
