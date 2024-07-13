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
    <link href="https://cdn.jsdelivr.net/npm/tom-select/dist/css/tom-select.css" rel="stylesheet" />
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
    <style>
        /* Custom styles for dropdown */
        #email-dropdown {
            max-height: 200px;
            overflow-y: auto;
        }
    </style>
</head>

<body class="bg-white z-10">
    <div>
        <x-dashboard-sidebar-superadmin />
        <div class="p-4 sm:ml-64 min-h-screen text-sm">
            <div class="lg:flex lg:justify-between pb-2 gap-5">
                <div class="text-[#297785] font-bold text-[20px] lg:text-[28px]">Tambah Admin SLB Provinsi Lampung
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
                <div class="flex m-auto justify-center items-center">
                    <x-toast-tambah />
                    <x-toast-edit />
                    <x-toast-hapus />
                </div>
                <div class=''>
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <div class="flex">
                                <label htmlFor="nama_sekolah">Nama Sekolah</label>
                                <div class="div">
                                    <button data-popover-target="popover-namaSekolah" data-popover-placement="left"
                                        type="button"><svg class="w-4 h-4 ms-2 text-gray-400 hover:text-gray-500"
                                            aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                                clip-rule="evenodd"></path>
                                        </svg><span class="sr-only">Show information</span>
                                    </button>
                                    <div data-popover id="popover-namaSekolah" role="tooltip"
                                        class="absolute z-30 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-32 lg:w-72">
                                        <div class="p-3 space-y-2">
                                            <h3 class="font-semibold text-gray-900">Nama Sekolah</h3>
                                            <p>Masukkan Nama Sekolah (Maksimal 100 karakter) Yang Sesuai</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Dropdown Nama Sekolah -->
                            <select id="nama_sekolah" name="nama"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                required>
                                <option value="" disabled selected>Pilih Nama Sekolah</option>
                                <!-- 1 -->
                                <option value="SLB_KURNIA_PONCOWATI">SLB KURNIA PONCOWATI</option>
                                <!-- 2 -->
                                <option value="SLB_NEGERI_KOTA_GAJAH">SLB NEGERI KOTA GAJAH</option>
                                <!-- 3 -->
                                <option value="SLB_NEGERI_LAMPUNG_TIMUR">SLB NEGERI LAMPUNG TIMUR</option>
                                <!-- 4 -->
                                <option value="SLB_NEGERI_SIDOMULYO">SLB NEGERI SIDOMULYO</option>
                                <!-- 5 -->
                                <option value="SLB_Pelita_Kasih">SLB Pelita Kasih</option>
                                <!-- 6 -->
                                <option value="SLB_IT_HARAPAN_BANGSA">SLB IT HARAPAN BANGSA</option>
                                <!-- 7 -->
                                <option value="SLB_DHARMA_BHAKTI_DHARMA_PERTIWI">SLB DHARMA BHAKTI DHARMA PERTIWI
                                </option>
                                <!-- 8 -->
                                <option value="SLBIT_Baitul_Jannah">SLBIT Baitul Jannah</option>
                                <!-- 9 -->
                                <option value="SLBN_PKK_PROVINSI_LAMPUNG">SLBN PKK PROVINSI LAMPUNG</option>
                                <!-- 10 -->
                                <option value="SLB_INSAN_PRIMA_BESTARI">SLB INSAN PRIMA BESTARI</option>
                                <!-- 11 -->
                                <option value="SLB_A_Bina_Insani">SLB A Bina Insani</option>
                                <!-- 12 -->
                                <option value="SLB_GROWING_HOPE">SLB GROWING HOPE</option>
                                <!-- 13 -->
                                <option value="SLB_NEGERI_TANGGAMUS">SLB NEGERI TANGGAMUS</option>
                                <!-- 14 -->
                                <option value="SLBN_SUKAMAJU_LAMPUNG_UTARA">SLBN SUKAMAJU LAMPUNG UTARA</option>
                                <!-- 15 -->
                                <option value="SLB_N_Baradatu">SLB N Baradatu</option>
                                <!-- 16 -->
                                <option value="SLB_SINAR_HAFIZAH">SLB SINAR HAFIZAH</option>
                                <!-- 17 -->
                                <option value="SLB_NEGERI_TULANG_BAWANG">SLB NEGERI TULANG BAWANG</option>
                                <!-- 18 -->
                                <option value="SLB_NEGERI_PRINGSEWU">SLB NEGERI PRINGSEWU</option>
                                <!-- 19 -->
                                <option value="SLB_Negeri_Tulang_Bawang_Barat">SLB Negeri Tulang Bawang Barat</option>
                                <!-- 20 -->
                                <option value="SLB_Negeri_Mesuji">SLB Negeri Mesuji</option>
                                <!-- 21 -->
                                <option value="SLB_N_PESISIR_BARAT">SLB N PESISIR BARAT</option>
                                <!-- 22 -->
                                <option value="SLB_CATUR_BINA_BANGSA">SLB CATUR BINA BANGSA</option>
                                <!-- 23 -->
                                <option value="SLB_INSAN_MADANI_METRO">SLB INSAN MADANI METRO</option>
                                <!-- 24 -->
                                <option value="SLB_N_METRO">SLB N METRO</option>
                                <!-- 25 -->
                                <option value="SLB_TRI_BHAKTI">SLB TRI BHAKTI</option>
                                <!-- 26 -->
                                <option value="SLB_YAMET_SCHOOL_CENDANA_LAMPUNG">SLB YAMET SCHOOL CENDANA LAMPUNG
                                </option>
                                <!-- 27 -->
                                <option value="SLB_Pelita_Bunga">SLB Pelita Bunga</option>
                                <!-- 28 -->
                                <option value="SLB_SRIKANDI_BANDAR_SURABAYA">SLB SRIKANDI BANDAR SURABAYA</option>
                                <!-- 29 -->
                                <option value="SLB_PUTRA_BAKTI">SLB PUTRA BAKTI</option>
                                <!-- 30 -->
                                <option value="SLB_HARAPAN_IBU">SLB HARAPAN IBU</option>
                                <!-- 31 -->
                                <option value="SLB_WIYATA_DHARMA">SLB WIYATA DHARMA</option>


                            </select>
                        </div>
                        <div class="flex flex-col flex-1 mb-4">
                            <div class="flex">
                                <label htmlFor="npsn">NPSN Sekolah</label>
                                <div class="div">
                                    <button data-popover-target="popover-npsn" data-popover-placement="left"
                                        type="button"><svg class="w-4 h-4 ms-2 text-gray-400 hover:text-gray-500"
                                            aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                                clip-rule="evenodd"></path>
                                        </svg><span class="sr-only">Show information</span>
                                    </button>
                                    <div data-popover id="popover-npsn" role="tooltip"
                                        class="absolute z-30 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-32 lg:w-72">
                                        <div class="p-3 space-y-2">
                                            <h3 class="font-semibold text-gray-900">NPSN Sekolah</h3>
                                            <p>Masukkan NPSN Sekolah (Minimal 8 Karakter) Yang Sesuai</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Input NPSN -->
                            <input type="number" name="npsn" id="npsn" maxlength="100"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan NPSN Sekolah (Minimal 8 Karakter)" required
                                oninput="showSuggestionsNPSN(this.value)" />
                            <div id="npsn-dropdown"
                                class="absolute mt-1 bg-white border border-gray-300 rounded-md shadow-lg hidden w-full z-10 mt-[60px]">
                                <ul id="npsn-suggestions" class="text-sm text-gray-700"></ul>
                            </div>
                            <script>
                                const npsnData = [
                                    "69892774", // 1
                                    "10802101", // 2
                                    "69772635", // 3
                                    "10815063", // 4
                                    "69987237", // 5
                                    "69949369", // 6
                                    "10807124", // 7
                                    "69899293", // 8
                                    "10807125", // 9
                                    "69892327", // 10
                                    "10807122", // 11
                                    "10816216", // 12
                                    "69944816", // 13
                                    "10802992", // 14
                                    "10814676", // 15
                                    "70024586", // 16
                                    "10811029", // 17
                                    "10805070", // 18
                                    "69968420", // 19
                                    "69968419", // 20
                                    "70010851", // 21
                                    "69827640", // 22
                                    "10816023", // 23
                                    "58570004", // 24
                                    "70002455", // 25
                                    "69987635", // 26
                                    "69947997", // 27
                                    "69786996", // 28
                                    "70035375", // 29
                                    "69888972", // 30
                                    "10807586" // 31
                                ];

                                function showSuggestionsNPSN(value) {
                                    const dropdown = document.getElementById('npsn-dropdown');
                                    const suggestions = document.getElementById('npsn-suggestions');
                                    suggestions.innerHTML = '';
                                    if (value.length === 0) {
                                        dropdown.classList.add('hidden');
                                        return;
                                    }
                                    const filterednpsn = npsnData.filter(npsn => npsn.toLowerCase().includes(value.toLowerCase()));
                                    filterednpsn.forEach(npsn => {
                                        const li = document.createElement('li');
                                        li.textContent = npsn;
                                        li.classList.add('p-2', 'cursor-pointer', 'hover:bg-gray-200');
                                        li.addEventListener('click', () => {
                                            document.getElementById('npsn').value = npsn;
                                            dropdown.classList.add('hidden');
                                        });
                                        suggestions.appendChild(li);
                                    });
                                    if (filterednpsn.length > 0) {
                                        dropdown.classList.remove('hidden');
                                    } else {
                                        dropdown.classList.add('hidden');
                                    }
                                }
                                document.addEventListener('click', (e) => {
                                    const dropdown = document.getElementById('npsn-dropdown');
                                    if (!dropdown.contains(e.target) && e.target.id !== 'npsn') {
                                        dropdown.classList.add('hidden');
                                    }
                                });
                            </script>
                        </div>
                    </div>
                    <div class=''>
                        <div class="flex gap-x-2">
                            <div class="flex flex-col flex-1 mb-4 relative">
                                <div class="flex items-center">
                                    <label for="email_sekolah" class="mr-2">Email Sekolah</label>
                                    <button data-popover-target="popover-email" data-popover-placement="right"
                                        type="button">
                                        <svg class="w-4 h-4 text-gray-400 hover:text-gray-500" aria-hidden="true"
                                            fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Show information</span>
                                    </button>
                                    <div data-popover id="popover-email" role="tooltip"
                                        class="absolute z-30 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-32 lg:w-72">
                                        <div class="p-3 space-y-2">
                                            <h3 class="font-semibold text-gray-900">Email Sekolah</h3>
                                            <p>Masukkan Email Sekolah Aktif (Maksimal 100 karakter), diusahakan
                                                menggunakan
                                                @gmail.com. Supaya memudahkan saat ingin reset password</p>
                                            <a href="https://mail.google.com/mail/u/0/#inbox"
                                                class="flex items-center font-medium text-blue-600 hover:text-blue-700 hover:underline">Selengkapnya
                                                <svg class="w-2 h-2 ms-1.5 rtl:rotate-180" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 6 10">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                </div>
                                <!-- Input Email -->
                                <input type="email" name="email" id="email_sekolah" maxlength="100"
                                    class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                    placeholder="Masukkan Email Aktif Sekolah (Maksimal 100 karakter)" required
                                    oninput="showSuggestions(this.value)" />
                                <div id="email-dropdown"
                                    class="absolute mt-1 bg-white border border-gray-300 rounded-md shadow-lg hidden w-full z-10 mt-[60px]">
                                    <ul id="email-suggestions" class="text-sm text-gray-700"></ul>
                                </div>
                                <script>
                                    const emailData = [
                                        "slbkurniapcw@gmail.com", // 1
                                        "slbnkoga@gmail.com", // 2
                                        "slblamtim@gmail.com", // 3
                                        "slbnegerisidomulyo@gmail.com", // 4
                                        "slbpelitakasih@gmail.com", // 5
                                        "slbitharapanbangsa@gmail.com", // 6
                                        "slbdharmabhakti@gmail.com", // 7
                                        "slbitbaituljannah60@gmail.com", // 8
                                        "slbpkkproplampung@yahoo.com", // 9
                                        "riamarianazulfa@gmail.com", // 10
                                        "slbabinainsani@gmail.com", // 11
                                        "growinghopebdl@gmail.com", // 12
                                        "slbntanggamuslampung@gmail.com", // 13
                                        "slbnsukamajulampungutara@gmail.com", // 14
                                        "satriajauhari@gmail.com", // 15
                                        "doni63@guru.slb.belajar.id", // 16
                                        "slbtulangbawang@gmail.com", // 17
                                        "sdlb.pringsewu1@gmail.com", // 18
                                        "srihandayani00@guru.slb.belajar.id", // 19
                                        "wulan.angraini.1990@gmail.com", // 20
                                        "fiddyajuwita82@guru.slb.belajar.id", // 21
                                        "dwiprastia651@gmail.com", // 22
                                        "mujianto00@guru.slb.belajar.id", // 23
                                        "andykurniawan1110@gmail.com", // 24
                                        "rianningrum13@guru.slb.belajar.id", // 25
                                        "yametcendana@gmail.com", // 26
                                        "slbpelitabunga2016@gmail.com", // 27
                                        "slbsrikandibadarsurabaya@gmail.com", // 28
                                        "slbputrabakti@gmail.com", // 29
                                        "slbharapanibu@gmail.com", // 30
                                        "slbwiyatadharma@gmail.com" // 31
                                    ];

                                    function showSuggestions(value) {
                                        const dropdown = document.getElementById('email-dropdown');
                                        const suggestions = document.getElementById('email-suggestions');
                                        suggestions.innerHTML = '';
                                        if (value.length === 0) {
                                            dropdown.classList.add('hidden');
                                            return;
                                        }
                                        const filteredEmails = emailData.filter(email => email.toLowerCase().includes(value.toLowerCase()));
                                        filteredEmails.forEach(email => {
                                            const li = document.createElement('li');
                                            li.textContent = email;
                                            li.classList.add('p-2', 'cursor-pointer', 'hover:bg-gray-200');
                                            li.addEventListener('click', () => {
                                                document.getElementById('email_sekolah').value = email;
                                                dropdown.classList.add('hidden');
                                            });
                                            suggestions.appendChild(li);
                                        });
                                        if (filteredEmails.length > 0) {
                                            dropdown.classList.remove('hidden');
                                        } else {
                                            dropdown.classList.add('hidden');
                                        }
                                    }
                                    document.addEventListener('click', (e) => {
                                        const dropdown = document.getElementById('email-dropdown');
                                        if (!dropdown.contains(e.target) && e.target.id !== 'email_sekolah') {
                                            dropdown.classList.add('hidden');
                                        }
                                    });
                                </script>
                            </div>
                            <div class="flex flex-col flex-1 mb-4 relative">
                                <div class="flex">
                                    <label htmlFor="password">Password</label>
                                    <div class="div">
                                        <button data-popover-target="popover-password" data-popover-placement="left"
                                            type="button"><svg class="w-4 h-4 ms-2 text-gray-400 hover:text-gray-500"
                                                aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                                    clip-rule="evenodd"></path>
                                            </svg><span class="sr-only">Show information</span>
                                        </button>
                                        <div data-popover id="popover-password" role="tooltip"
                                            class="absolute z-30 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-32 lg:w-72">
                                            <div class="p-3 space-y-2">
                                                <h3 class="font-semibold text-gray-900">Password</h3>
                                                <p>Masukkan Password (Minimal 8 Karakter), Masukkan minimal 6 karakter
                                                    random. Apabila password
                                                    lupa, dapat melakukan reset password menggunakan Email aktif yang
                                                    terdaftar.</p>
                                                <a href="https://wa.me/0895637316999"
                                                    class="flex items-center font-medium text-blue-600 hover:text-blue-700 hover:underline">Selengkapnya
                                                    <svg class="w-2 h-2 ms-1.5 rtl:rotate-180" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 6 10">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="m1 9 4-4-4-4" />
                                                    </svg></a>
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Input Password -->
                                <input type="password" name="password" id="password" minlength="8"
                                    class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 pl-2 pr-10 w-full"
                                    placeholder="Masukkan Password (Minimal 8 Karakter)" required />
                                <x-icon-password />
                            </div>
                        </div>
                    </div>
                    <div class=''>
                        <div class="flex gap-x-2">
                            <div class="flex flex-col flex-1 mb-4">
                                <label htmlFor="kabkota">Kab/Kota</label>
                                <!-- Input Kab/Kota -->
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
                                <!-- Input Kecamatan -->
                                <select id="kecamatan" name="kecamatan"
                                    class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                    required>
                                    <option value="" disabled selected>Pilih Kecamatan</option>
                                </select>
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
                    </div>
                    <div class=''>
                        <div class="flex gap-x-2">
                            <div class="flex flex-col flex-1 mb-4">
                                <div class="flex">
                                    <label htmlFor="alamat">Alamat Link Maps Sekolah</label>
                                    <div class="div">
                                        <button data-popover-target="popover-alamat" data-popover-placement="left"
                                            type="button"><svg class="w-4 h-4 ms-2 text-gray-400 hover:text-gray-500"
                                                aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                                    clip-rule="evenodd"></path>
                                            </svg><span class="sr-only">Show information</span>
                                        </button>
                                        <div data-popover id="popover-alamat" role="tooltip"
                                            class="absolute z-30 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-32 lg:w-72">
                                            <div class="p-3 space-y-2">
                                                <h3 class="font-semibold text-gray-900">Alamat Link Maps Sekolah</h3>
                                                <p>Masukkan Link Maps Sekolah
                                                </p>
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Input Alamat -->
                                <input type="text" name="alamat" id="alamat" maxlength="200"
                                    class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                    placeholder="Masukkan Link Maps Sekolah (Maksimal 200 Karakter)" required />
                            </div>
                            <div class="flex flex-col flex-1 mb-4">
                                <label htmlFor="link_website">Link Website/Sosial Media Sekolah</label>
                                <!-- Input Link Website Sekolah -->
                                <input type="url" name="linkWebsiteSekolah" id="link_website" maxlength="200"
                                    class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                    placeholder="Masukkan Link Website/Sosial Media Sekolah (Maksimal 200 Karakter)"
                                    required />
                            </div>
                        </div>
                    </div>
                    <!-- Tambahkan script JavaScript -->
                    <script>
                        const sekolahData = {
                            // sekolah 1
                            SLB_KURNIA_PONCOWATI: {
                                email: "slbkurniapcw@gmail.com",
                                password: "password",
                                npsn: "69892774",
                                kota: "Lampung Tengah",
                                kecamatan: "Terbanggi Besar",
                                alamat: "https://maps.app.goo.gl/U96xNprPAqJEHy6S7",
                                linkWebsiteSekolah: "https://www.instagram.com/slbkurnia_poncowati/"
                            },

                            // sekolah 2
                            SLB_NEGERI_KOTA_GAJAH: {
                                email: "slbnkoga@gmail.com",
                                password: "password",
                                npsn: "10802101",
                                kota: "Lampung Tengah",
                                kecamatan: "Kota Gajah",
                                alamat: "https://maps.app.goo.gl/UgFdCh9Quf5X6qSb9",
                                linkWebsiteSekolah: "http://www.slbnkotagajah.sch.id/?"
                            },

                            // sekolah 3
                            SLB_NEGERI_LAMPUNG_TIMUR: {
                                email: "slblamtim@gmail.com",
                                password: "password",
                                npsn: "69772635",
                                kota: "Lampung Timur",
                                kecamatan: "Purbolinggo",
                                alamat: "https://maps.app.goo.gl/yHASPg6JGQzT3Lie9",
                                linkWebsiteSekolah: "https://www.instagram.com/slbnlamtim/"
                            },

                            // sekolah 4
                            SLB_NEGERI_SIDOMULYO: {
                                email: "slbnegerisidomulyo@gmail.com",
                                password: "password",
                                npsn: "10815063",
                                kota: "Lampung Selatan",
                                kecamatan: "Sidomulyo",
                                alamat: "https://maps.app.goo.gl/v3pcda7Q16AUbpKEA",
                                linkWebsiteSekolah: "https://slbnegerisidomulyo.com/"
                            },

                            // sekolah 5
                            SLB_Pelita_Kasih: {
                                email: "slbpelitakasih@gmail.com",
                                password: "password",
                                npsn: "69987237",
                                kota: "Bandar Lampung",
                                kecamatan: "Sukabumi",
                                alamat: "https://maps.app.goo.gl/VbAC85rWgesC4vkL8",
                                linkWebsiteSekolah: "https://www.instagram.com/pelita_kasihh_lampung/?img_index=1"
                            },

                            // sekolah 6
                            SLB_IT_HARAPAN_BANGSA: {
                                email: "slbitharapanbangsa@gmail.com",
                                password: "password",
                                npsn: "69949369",
                                kota: "Lampung Selatan",
                                kecamatan: "Candipuro",
                                alamat: "https://maps.app.goo.gl/eC7bVu7Dt3572pS58",
                                linkWebsiteSekolah: "https://maps.app.goo.gl/eC7bVu7Dt3572pS58"
                            },

                            // sekolah 7
                            SLB_DHARMA_BHAKTI_DHARMA_PERTIWI: {
                                email: "slb_dbdp@gmail.com",
                                password: "password",
                                npsn: "10807124",
                                kota: "Bandar Lampung",
                                kecamatan: "Kemiling",
                                alamat: "https://maps.app.goo.gl/aT6korBQueW2DmDE7",
                                linkWebsiteSekolah: "https://www.instagram.com/slb"
                            },

                            // sekolah 8
                            SLBIT_Baitul_Jannah: {
                                email: "slbitbaituljannah60@gmail.com",
                                password: "password",
                                npsn: "69899293",
                                kota: "Bandar Lampung",
                                kecamatan: "Kemiling",
                                alamat: "https://maps.app.goo.gl/ZeFedtUxFv7uzMFt5",
                                linkWebsiteSekolah: "https://www.instagram.com/p/CIpz4SbljD6/"
                            },

                            // sekolah 9
                            SLBN_PKK_PROVINSI_LAMPUNG: {
                                email: "slbpkkproplampung@yahoo.com",
                                password: "password",
                                npsn: "10807125",
                                kota: "Bandar Lampung",
                                kecamatan: "Sukarame",
                                alamat: "https://maps.app.goo.gl/hUtjxVEZexj4JXCs9",
                                linkWebsiteSekolah: "https://www.instagram.com/p/CQfI4S5BT7p/"
                            },

                            // sekolah 10
                            SLB_INSAN_PRIMA_BESTARI: {
                                email: "riamarianazulfa@gmail.com",
                                password: "password",
                                npsn: "69892327",
                                kota: "Bandar Lampung",
                                kecamatan: "Sukarame",
                                alamat: "https://maps.app.goo.gl/B2GzKpx9AYyyGmU29",
                                linkWebsiteSekolah: "https://maps.app.goo.gl/B2GzKpx9AYyyGmU29"
                            },

                            // sekolah 11
                            SLB_A_Bina_Insani: {
                                email: "slbabinainsani@gmail.com",
                                password: "password",
                                npsn: "10807122",
                                kota: "Bandar Lampung",
                                kecamatan: "Rajabasa",
                                alamat: "https://maps.app.goo.gl/axfL1qDmMyPVkZFu6",
                                linkWebsiteSekolah: "https://www.instagram.com/slbbinainsani/"
                            },

                            // sekolah 12
                            SLB_GROWING_HOPE: {
                                email: "growinghopebdl@gmail.com",
                                password: "password",
                                npsn: "10816216",
                                kota: "Bandar Lampung",
                                kecamatan: "Way Halim",
                                alamat: "https://maps.app.goo.gl/TPDcWQ4TvcqbG3C7A",
                                linkWebsiteSekolah: "https://www.instagram.com/growinghope_bdl/"
                            },

                            // sekolah 13
                            SLB_NEGERI_TANGGAMUS: {
                                email: "slbntanggamuslampung@gmail.com",
                                password: "password",
                                npsn: "69944816",
                                kota: "Tanggamus",
                                kecamatan: "Kota Agung Timur",
                                alamat: "https://maps.app.goo.gl/hgUgbE8awtSNQTzK9",
                                linkWebsiteSekolah: "https://www.instagram.com/slb_negeri_tanggamus/"
                            },

                            // sekolah 14
                            SLBN_SUKAMAJU_LAMPUNG_UTARA: {
                                email: "slbnsukamajulampungutara@gmail.com",
                                password: "password",
                                npsn: "10802992",
                                kota: "Lampung Utara",
                                kecamatan: "Abung Semuli",
                                alamat: "https://maps.app.goo.gl/tPNMeCSPViGjd1Eo8",
                                linkWebsiteSekolah: "https://www.instagram.com/slbnsukamaju/"
                            },

                            // sekolah 15
                            SLB_N_Baradatu: {
                                email: "satriajauhari@gmail.com",
                                password: "password",
                                npsn: "10814676",
                                kota: "Way Kanan",
                                kecamatan: "Baradatu",
                                alamat: "https://maps.app.goo.gl/1Eh5WpfPFmAVWT6N7",
                                linkWebsiteSekolah: "https://www.instagram.com/slbnbaradatu/"
                            },

                            // sekolah 16
                            SLB_SINAR_HAFIZAH: {
                                email: "doni63@guru.slb.belajar.id",
                                password: "password",
                                npsn: "70024586",
                                kota: "Pesawaran",
                                kecamatan: "Gedong Tataan",
                                alamat: "https://maps.app.goo.gl/naPRGkKoxkLrnDVn6",
                                linkWebsiteSekolah: "https://www.instagram.com/slb_sinarhafizah/"
                            },

                            // sekolah 17
                            SLB_NEGERI_TULANG_BAWANG: {
                                email: "slbtulangbawang@gmail.com",
                                password: "password",
                                npsn: "10811029",
                                kota: "Tulang Bawang",
                                kecamatan: "Menggala",
                                alamat: "https://maps.app.goo.gl/daj9Gy1xXQFsNNAVA",
                                linkWebsiteSekolah: "https://maps.app.goo.gl/daj9Gy1xXQFsNNAVA"
                            },

                            // sekolah 18
                            SLB_NEGERI_PRINGSEWU: {
                                email: "sdlb.pringsewu@gmail.com",
                                password: "password",
                                npsn: "10805070",
                                kota: "Pringsewu",
                                kecamatan: "Pringsewu",
                                alamat: "https://maps.app.goo.gl/odfaCtxMLxjUG35i6",
                                linkWebsiteSekolah: "https://www.instagram.com/slbnpringsewu/"
                            },

                            // sekolah 19
                            SLB_Negeri_Tulang_Bawang_Barat: {
                                email: "srihandayani00@guru.slb.belajar.id",
                                password: "password",
                                npsn: "69968420",
                                kota: "Tulang Bawang Barat",
                                kecamatan: "Tulang Bawang Udik",
                                alamat: "https://maps.app.goo.gl/H3teATofasyyAsbi6",
                                linkWebsiteSekolah: "https://www.instagram.com/_slbntubaba/reels/"
                            },

                            // sekolah 20
                            SLB_Negeri_Mesuji: {
                                email: "wulan.angraini.1990@gmail.com",
                                password: "password",
                                npsn: "69968419",
                                kota: "Mesuji",
                                kecamatan: "Tanjung Raya",
                                alamat: "https://maps.app.goo.gl/FREnLxPz5h7saB5z6",
                                linkWebsiteSekolah: "https://www.instagram.com/slbnegeri_mesuji/"
                            },

                            // sekolah 21
                            SLB_N_PESISIR_BARAT: {
                                email: "fiddyajuwita82@guru.slb.belajar.id",
                                password: "password",
                                npsn: "70010851",
                                kota: "Pesisir Barat",
                                kecamatan: "Pesisir Selatan",
                                alamat: "https://maps.app.goo.gl/c753TewRG5HHwBxf9",
                                linkWebsiteSekolah: "https://www.instagram.com/slbn_pesisirbarat/"
                            },

                            // sekolah 22
                            SLB_CATUR_BINA_BANGSA: {
                                email: "dwiprastia651@gmail.com",
                                password: "password",
                                npsn: "69827640",
                                kota: "Metro",
                                kecamatan: "Metro Barat",
                                alamat: "https://maps.app.goo.gl/tWbHatRthqqemBF36",
                                linkWebsiteSekolah: "https://www.instagram.com/explore/tags/slbcaturbinabangsa/"
                            },

                            // sekolah 23
                            SLB_INSAN_MADANI_METRO: {
                                email: "mujianto00@guru.slb.belajar.id",
                                password: "password",
                                npsn: "10816023",
                                kota: "Metro",
                                kecamatan: "Metro Barat",
                                alamat: "https://maps.app.goo.gl/U3Vq7Uy4LTCtjmuF9",
                                linkWebsiteSekolah: "https://slbinsanmadanimetro.sch.id/"
                            },

                            // sekolah 24
                            SLB_N_METRO: {
                                email: "andykurniawan1110@gmail.com",
                                password: "password",
                                npsn: "58570004",
                                kota: "Metro",
                                kecamatan: "Metro Selatan",
                                alamat: "https://maps.app.goo.gl/xtNAA8m8LQPvHX8s9",
                                linkWebsiteSekolah: "https://www.instagram.com/slbnegerimetro/"
                            },

                            // sekolah 25
                            SLB_TRI_BHAKTI: {
                                email: "rianningrum13@guru.slb.belajar.id",
                                password: "password",
                                npsn: "70002455",
                                kota: "Metro",
                                kecamatan: "Metro Selatan",
                                alamat: "https://www.instagram.com/slb_tribhaktimetro/",
                                linkWebsiteSekolah: "https://www.instagram.com/slb_tribhaktimetro/"
                            },

                            // sekolah 26
                            SLB_YAMET_SCHOOL_CENDANA_LAMPUNG: {
                                email: "yametcendana@gmail.com",
                                password: "password",
                                npsn: "69987635",
                                kota: "Bandar Lampung",
                                kecamatan: "Labuhan Ratu",
                                alamat: "https://maps.app.goo.gl/ggN1qd4gj9nyhnFt9",
                                linkWebsiteSekolah: "https://yametcendana.sch.id/"
                            },

                            // sekolah 27
                            SLB_Pelita_Bunga: {
                                email: "slbpelitabunga2016@gmail.com",
                                password: "password",
                                npsn: "69947997",
                                kota: "Lampung Selatan",
                                kecamatan: "Jati Agung",
                                alamat: "https://maps.app.goo.gl/eukYiiZdvCSLRJyF8",
                                linkWebsiteSekolah: "https://www.instagram.com/slbpelitabunga/"
                            },

                            // sekolah 28
                            SLB_SRIKANDI_BANDAR_SURABAYA: {
                                email: "slbsrikandibadarsurabaya@gmail.com",
                                password: "password",
                                npsn: "69786996",
                                kota: "Lampung Tengah",
                                kecamatan: "Bandar Surabaya",
                                alamat: "https://maps.app.goo.gl/vEeUe749vnPniCCD6",
                                linkWebsiteSekolah: "https://www.instagram.com/explore/locations/112689073606980/yayasan-srikandi/"
                            },

                            // sekolah 29
                            SLB_PUTRA_BAKTI: {
                                email: "slbputrabakti@gmail.com",
                                password: "password",
                                npsn: "70035375",
                                kota: "Pringsewu",
                                kecamatan: "Pagelaran",
                                alamat: "https://maps.app.goo.gl/HVzzoc4mFcoz5u6x6",
                                linkWebsiteSekolah: "https://bintangpost.com/read/8258/slb-putra-bakti-pringsewu-gelar-pelepasan-siswa"
                            },

                            // sekolah 30
                            SLB_HARAPAN_IBU: {
                                email: "slbharapanibu@gmail.com",
                                password: "password",
                                npsn: "69888972",
                                kota: "Metro",
                                kecamatan: "Metro Pusat",
                                alamat: "https://maps.app.goo.gl/sLeShEGSGTd4uzJf7",
                                linkWebsiteSekolah: "https://umala.ac.id/pgmi-goes-to-school-slb-harapan-ibu-metro-pusat/"
                            },

                            // sekolah 31
                            SLB_WIYATA_DHARMA: {
                                email: "slbwiyatadharma@gmail.com",
                                password: "password",
                                npsn: "10807586",
                                kota: "Metro",
                                kecamatan: "Metro Pusat",
                                alamat: "https://maps.app.goo.gl/wqaHtcVaz7b3rii89",
                                linkWebsiteSekolah: "https://slbwiyatadharma.com/"
                            },
                        };
                        document.getElementById('nama_sekolah').addEventListener('change', function() {
                            var sekolah = this.value;
                            if (sekolahData[sekolah]) {
                                var data = sekolahData[sekolah];
                                document.getElementById('email_sekolah').value = data.email;
                                document.getElementById('password').value = data.password;
                                document.getElementById('npsn').value = data.npsn;
                                document.getElementById('kabkota').value = data.kota;
                                var kecamatanSelect = document.getElementById('kecamatan');
                                kecamatanSelect.innerHTML = '<option value="' + data.kecamatan + '">' + data.kecamatan +
                                    '</option>';
                                document.getElementById('alamat').value = data.alamat;
                                document.getElementById('link_website').value = data.linkWebsiteSekolah;
                            }
                        });
                    </script>
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
                                            class="absolute z-30 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 lg:w-72 w-32 lg:w-72">
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
                                    <input type="text" name="jenisKetunaan" id="selected-text"
                                        name="selectedText" readonly
                                        class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                        placeholder="Jenis Ketunaan Sekolah" required />
                                    <select id="select-role" placeholder="Pilih Disini" autocomplete="off"
                                        class="block w-full rounded-sm cursor-pointer focus:outline-none">
                                        <option value="" disabled selected>Pilih</option>
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
                            + Simpan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
