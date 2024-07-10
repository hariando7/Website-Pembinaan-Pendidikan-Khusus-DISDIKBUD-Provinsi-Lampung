<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sekolah Inklusi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link rel="icon" type="image/x-icon" href="assets/landing/prov-lampung2.svg">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Include SheetJS library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx-style/0.8.13/xlsx.full.min.js"></script>
    <style>
        .hide-scrollbar {
            scrollbar-width: thin;
            scrollbar-color: transparent transparent;
            overflow: hidden;
        }

        .hide-scrollbar::-webkit-scrollbar {
            width: 6px;
        }

        .hide-scrollbar::-webkit-scrollbar-thumb {
            background-color: transparent;
        }
    </style>
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
        @keyframes blink {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .text-blink {
            animation: blink 3s infinite;
        }
    </style>
</head>

<body class="bg-white z-10">
    <div>
        <x-dashboard-side-bar-sa />
        <div class="pl-[280px] h-screen pt-2 pr-5 pb-[85px] full-height">
            <div class="flex justify-between pb-2">
                <div class="text-center items-center justify-center text-[#297785] font-bold text-[32px]">Pendataan
                    Sekolah Inklusi Provinsi Lampung
                </div>
                <div class="flex justify-end gap-5">
                    <div class="div">
                        <button data-modal-target="default-modal-notif" data-modal-toggle="default-modal-notif"
                            class="btn border-none text-white text-center py-2 lg:py-2 my-2 flex items-center justify-center rounded-md bg-[#FA8F21] hover:bg-[#D87815] focus:ring-4 dark:bg-[#FA8F21] dark:hover:bg-[#D87815] pl-2 pr-2">
                            Data Masuk
                            <span id="notificationBadge"
                                class="inline-flex items-center justify-center w-6 h-6 ms-2 text-xs font-semibold text-[#FA8F21] bg-white rounded-full"
                                style="display: none;">
                                <!-- Jumlah notifikasi di sini -->
                            </span>
                        </button>
                        <!-- Main modal -->
                        <div id="default-modal-notif" tabindex="-2" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-full max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow">
                                    <!-- Modal header -->
                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                                        <h3
                                            class="text-center items-center justify-center text-[#297785] font-bold text-[32px]">
                                            Data Masuk Sekolah Inklusi
                                        </h3>
                                        <button type="button"
                                            class="text-gray-400 hover:text-white bg-transparent hover:bg-[#D87815] rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                            data-modal-hide="default-modal-notif">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="p-4 md:p-5 space-y-4">
                                        <div class="basis-full">
                                            <form class="flex items-center mx-auto my-auto">
                                                <div class="relative w-full" title="Cari Data">
                                                    <div
                                                        class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
                                                        <x-svg-search />
                                                    </div>
                                                    <input type="text" name="pencarian" id="simple-search"
                                                        class="mx-auto border-2 border-[#297785] dark:border-[#297785] text-black text-sm rounded-lg focus:border-[#FA8F21] block w-full ps-10 p-2.5 dark:hover:text-black hover:text-black dark:placeholder-gray-400 placeholder-gray-400 dark:focus:ring-[#FA8F21] focus:ring-[#FA8F21]"
                                                        placeholder="Cari Nama Sekolah, Waktu Submit, NPSN, Status Sekolah, Kota, Nama Pembimbing PDBK, Nomor HP Pembimbing..."
                                                        onkeypress="cariDenganEnter(event)"
                                                        oninput="hapusPencarianKosong(event)"
                                                        value="{{ isset($_GET['pencarian']) ? $_GET['pencarian'] : '' }}" />
                                                    <script>
                                                        function cariDenganEnter(event) {
                                                            if (event.key === 'Enter') {
                                                                event.preventDefault();
                                                                const input = event.target;
                                                                const params = new URLSearchParams(window.location.search);
                                                                if (input.value === '') {
                                                                    params.delete('pencarian');
                                                                } else {
                                                                    params.set('pencarian', input.value);
                                                                }
                                                                window.location.search = params.toString();
                                                            }
                                                        }

                                                        function hapusPencarianKosong(event) {
                                                            const input = event.target;
                                                            const params = new URLSearchParams(window.location.search);
                                                            if (input.value === '') {
                                                                params.delete('pencarian');
                                                                window.location.search = params.toString();
                                                            }
                                                        }
                                                    </script>
                                                </div>
                                            </form>
                                        </div>
                                        <div
                                            class="relative overflow-x-auto overflow-y-auto shadow-sm sm:rounded-lg mt-5">
                                            <table
                                                class="w-full text-sm text-left rtl:text-right text-gray-500 bg-white">
                                                <thead
                                                    class="text-xs text-white uppercase bg-[#2F8386] dark:bg-[#2F8386] dark:text-white">
                                                    <tr>
                                                        <th scope="col" class="px-3 py-2">
                                                            No
                                                        </th>
                                                        <th scope="col" class="px-3 py-2">
                                                            Waktu Submit
                                                        </th>
                                                        <th scope="col" class="px-3 py-2">
                                                            Nama Sekolah
                                                        </th>
                                                        <th scope="col" class="px-3 py-2">
                                                            NPSN
                                                        </th>
                                                        <th scope="col" class="px-3 py-2">
                                                            Status Sekolah
                                                        </th>
                                                        <th scope="col" class="px-3 py-2">
                                                            Alamat Sekolah
                                                        </th>
                                                        <th scope="col" class="px-3 py-2">
                                                            Kota
                                                        </th>
                                                        <th scope="col" class="px-3 py-2">
                                                            Jumlah PDBK
                                                        </th>
                                                        <th scope="col" class="px-3 py-2">
                                                            Nama Pembimbing PDBK
                                                        </th>
                                                        <th scope="col" class="px-3 py-2">
                                                            Jenis Kelamin Pembimbing PDBK
                                                        </th>
                                                        <th scope="col" class="px-3 py-2">
                                                            Pangkat (Jika ASN) Pembimbing PDBK
                                                        </th>
                                                        <th scope="col" class="px-3 py-2">
                                                            Alamat Tinggal Pembimbing PDBK
                                                        </th>
                                                        <th scope="col" class="px-3 py-2">
                                                            Nomor HP Pembimbing PDBK
                                                        </th>
                                                        <th scope="col" class="px-3 py-2">
                                                            Keterangan Validasi
                                                        </th>
                                                        <th scope="col" class="px-3 py-2">
                                                            Aksi
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($dummyDataMasuk as $index => $data)
                                                        <tr
                                                            class="bg-white border-b border-gray-700 hover:bg-[#C4DDDE] dark:hover:bg-[#C4DDDE] text-black hover:text-white text-xs">
                                                            <td class="px-3 py-2">
                                                                {{ ($DATA->currentPage() - 1) * 10 + $index + 1 }}
                                                            </td>
                                                            <td class="px-3 py-2">
                                                                {{ $data['tahun'] }}
                                                            </td>
                                                            <td class="px-3 py-2">
                                                                {{ $data['nama_sekolah'] }}
                                                            </td>
                                                            <td class="px-3 py-2">
                                                                {{ $data['npsn'] }}
                                                            </td>
                                                            <td class="px-3 py-2">
                                                                {{ $data['statusSekolah'] }}
                                                            </td>
                                                            {{-- alamat sekolah --}}
                                                            <td class="px-3 py-2">
                                                                {{ $data['statusSekolah'] }}
                                                            </td>
                                                            <td class="px-3 py-2">
                                                                {{ $data['kota'] }}
                                                            </td>
                                                            <td class="px-3 py-2">
                                                                {{ $data['jumlah_pdbk'] }}
                                                            </td>
                                                            <td class="px-3 py-2">
                                                                {{ $data['namaPembimbing'] }}
                                                            </td>
                                                            {{-- Jenis Kelamin --}}
                                                            <td class="px-3 py-2">
                                                                {{ $data['statusSekolah'] }}
                                                            </td>
                                                            {{-- Pangkat --}}
                                                            <td class="px-3 py-2">
                                                                {{ $data['statusSekolah'] }}
                                                            </td>
                                                            {{-- Alamat Tinggal --}}
                                                            <td class="px-3 py-2">
                                                                {{ $data['statusSekolah'] }}
                                                            </td>
                                                            <td class="px-3 py-2">
                                                                {{ $data['nomorHP'] }}
                                                            </td>
                                                            <td class="px-3 py-2">
                                                                {{-- Divalidasi --}}
                                                                {{-- Belum Divalidasi --}}
                                                                <span
                                                                    class="w-full bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded ">Belum
                                                                    Divalidasi</span>
                                                            </td>
                                                            <td class="px-3 py-2">
                                                                <div
                                                                    class="flex justify-items-center m-auto text-center gap-2">
                                                                    <button data-modal-target="modal-validasi"
                                                                        data-modal-toggle="modal-validasi"
                                                                        data-index="<?= $data['id'] ?>"
                                                                        class="bg-[#0cdf41] hover:bg-[#357e47] p-1 rounded-md cursor-pointer modal-validasi"
                                                                        title="Validasi" type="button">
                                                                        <svg class="w-5 h-5" viewBox="0 0 24 24"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <g id="SVGRepo_bgCarrier"
                                                                                stroke-width="0"></g>
                                                                            <g id="SVGRepo_tracerCarrier"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"></g>
                                                                            <g id="SVGRepo_iconCarrier">
                                                                                <path
                                                                                    d="M13.8179 4.54512L13.6275 4.27845C12.8298 3.16176 11.1702 3.16176 10.3725 4.27845L10.1821 4.54512C9.76092 5.13471 9.05384 5.45043 8.33373 5.37041L7.48471 5.27608C6.21088 5.13454 5.13454 6.21088 5.27608 7.48471L5.37041 8.33373C5.45043 9.05384 5.13471 9.76092 4.54512 10.1821L4.27845 10.3725C3.16176 11.1702 3.16176 12.8298 4.27845 13.6275L4.54512 13.8179C5.13471 14.2391 5.45043 14.9462 5.37041 15.6663L5.27608 16.5153C5.13454 17.7891 6.21088 18.8655 7.48471 18.7239L8.33373 18.6296C9.05384 18.5496 9.76092 18.8653 10.1821 19.4549L10.3725 19.7215C11.1702 20.8382 12.8298 20.8382 13.6275 19.7215L13.8179 19.4549C14.2391 18.8653 14.9462 18.5496 15.6663 18.6296L16.5153 18.7239C17.7891 18.8655 18.8655 17.7891 18.7239 16.5153L18.6296 15.6663C18.5496 14.9462 18.8653 14.2391 19.4549 13.8179L19.7215 13.6275C20.8382 12.8298 20.8382 11.1702 19.7215 10.3725L19.4549 10.1821C18.8653 9.76092 18.5496 9.05384 18.6296 8.33373L18.7239 7.48471C18.8655 6.21088 17.7891 5.13454 16.5153 5.27608L15.6663 5.37041C14.9462 5.45043 14.2391 5.13471 13.8179 4.54512Z"
                                                                                    stroke="white" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"></path>
                                                                                <path
                                                                                    d="M9 12L10.8189 13.8189V13.8189C10.9189 13.9189 11.0811 13.9189 11.1811 13.8189V13.8189L15 10"
                                                                                    stroke="white" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"></path>
                                                                            </g>
                                                                        </svg>
                                                                    </button>
                                                                    <button data-modal-target="modal-hapus-validasi"
                                                                        data-modal-toggle="modal-hapus-validasi"
                                                                        data-index="<?= $data['id'] ?>"
                                                                        class="bg-[#FF0000] hover:bg-[#D51717] p-1 rounded-md cursor-pointer modal-hapus-validasi"
                                                                        title="Delete" type="button">
                                                                        <svg class="w-5 h-5" fill="white"
                                                                            viewBox="0 0 24 24"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <g id="SVGRepo_bgCarrier"
                                                                                stroke-width="0"></g>
                                                                            <g id="SVGRepo_tracerCarrier"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"></g>
                                                                            <g id="SVGRepo_iconCarrier">
                                                                                <path
                                                                                    d="M12,2A10,10,0,1,0,22,12,10,10,0,0,0,12,2Zm3.71,12.29a1,1,0,0,1,0,1.42,1,1,0,0,1-1.42,0L12,13.42,9.71,15.71a1,1,0,0,1-1.42,0,1,1,0,0,1,0-1.42L10.58,12,8.29,9.71A1,1,0,0,1,9.71,8.29L12,10.58l2.29-2.29a1,1,0,0,1,1.42,1.42L13.42,12Z">
                                                                                </path>
                                                                            </g>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    <!-- Main modal -->
                                                    <div id="modal-validasi" tabindex="-1" aria-hidden="true"
                                                        class="z-50 hidden fixed top-0 right-0 left-0 bottom-0 flex items-center justify-center backdrop-blur-sm bg-opacity-50">
                                                        <div class="relative p-4 w-full max-w-md max-h-full">
                                                            <div class="relative bg-[#297785] rounded-lg shadow">
                                                                <button type="button"
                                                                    class="absolute top-3 right-2.5 text-white bg-transparent hover:bg-[#D87815] hover:text-white rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                                                    data-modal-hide="modal-validasi">
                                                                    <svg class="w-3 h-3" aria-hidden="true"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        fill="white" viewBox="0 0 14 14">
                                                                        <path stroke="white" stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                                    </svg>
                                                                    <span class="sr-only">Close
                                                                        modal</span>
                                                                </button>
                                                                <div class="p-4 md:p-5 text-center">
                                                                    <svg class="mx-auto mb-4 text-white w-12 h-12"
                                                                        aria-hidden="true"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 20 20">
                                                                        <path stroke="currentColor"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                                    </svg>
                                                                    <h3 class="mb-5 text-lg font-normal text-white">
                                                                        Anda Yakin Ingin Memvalidasi
                                                                        Data?</h3>
                                                                    <button data-modal-hide="modal-validasi-ya"
                                                                        type="button"
                                                                        class="btn border-none text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                                        Ya, Validasi
                                                                    </button>
                                                                    <button data-modal-hide="modal-validasi"
                                                                        aria-hidden="true" type="button"
                                                                        class="btn border-none py-2.5 px-5 ms-3 text-sm font-medium text-white bg-[#FA8F21] rounded-lg hover:bg-[#D87815] hover:text-white focus:z-10">
                                                                        Tidak
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <script>
                                                        document.addEventListener('DOMContentLoaded', function() {
                                                            const deleteButtons = document.querySelectorAll('.modal-validasi');
                                                            deleteButtons.forEach(button => {
                                                                button.addEventListener('click', function() {
                                                                    const index = this.dataset.index;
                                                                    const modal = document.getElementById('modal-validasi');
                                                                    modal.classList.remove('hidden');
                                                                    modal.setAttribute('aria-hidden', 'false');
                                                                    modal.setAttribute('tabindex', '0');
                                                                    const modalTidak = document.getElementById('modal-validasi');
                                                                    modalTidak.classList.remove('hidden');
                                                                    modalTidak.setAttribute('aria-hidden', 'false');
                                                                    modalTidak.setAttribute('tabindex', '0');
                                                                    const closeButtonYa = modal.querySelector(
                                                                        '[data-modal-hide="modal-validasi-ya"]');
                                                                    closeButtonYa.addEventListener('click', () => {
                                                                        const dataIndex = button.getAttribute('data-index');
                                                                        if (dataIndex) {
                                                                            window.location.href = window.location.origin +
                                                                                '/sa-pendataan-si/validasi/' + dataIndex;
                                                                        } else {
                                                                            alert('Data index tidak ditemukan!');
                                                                        }
                                                                    });
                                                                });
                                                            });
                                                        });
                                                    </script>
                                                    <div id="modal-hapus-validasi" tabindex="-1" aria-hidden="true"
                                                        class="z-50 hidden fixed top-0 right-0 left-0 bottom-0 flex items-center justify-center backdrop-blur-sm bg-opacity-50">
                                                        <div class="relative p-4 w-full max-w-md max-h-full">
                                                            <div class="relative bg-[#297785] rounded-lg shadow">
                                                                <button type="button"
                                                                    class="absolute top-3 right-2.5 text-white bg-transparent hover:bg-[#D87815] hover:text-white rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                                                    data-modal-hide="modal-hapus-validasi">
                                                                    <svg class="w-3 h-3" aria-hidden="true"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        fill="white" viewBox="0 0 14 14">
                                                                        <path stroke="white" stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                                    </svg>
                                                                    <span class="sr-only">Close
                                                                        modal</span>
                                                                </button>
                                                                <div class="p-4 md:p-5 text-center">
                                                                    <svg class="mx-auto mb-4 text-white w-12 h-12"
                                                                        aria-hidden="true"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        fill="none" viewBox="0 0 20 20">
                                                                        <path stroke="currentColor"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                                    </svg>
                                                                    <h3 class="mb-5 text-lg font-normal text-white">
                                                                        Anda Yakin Ingin Menghapus Data
                                                                        Ini?</h3>
                                                                    <button data-modal-hide="modal-hapus-validasi-ya"
                                                                        data-action="confirm" type="button"
                                                                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                                        Ya, Hapus
                                                                    </button>
                                                                    <button data-modal-hide="modal-hapus-validasi"
                                                                        aria-hidden="true" type="button"
                                                                        class="py-2.5 px-5 ms-3 text-sm font-medium text-white bg-[#FA8F21] rounded-lg hover:bg-[#D87815] hover:text-white focus:z-10">
                                                                        Tidak
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <script>
                                                        document.addEventListener('DOMContentLoaded', function() {
                                                            const deleteButtons = document.querySelectorAll('.modal-hapus-validasi');
                                                            deleteButtons.forEach(button => {
                                                                button.addEventListener('click', function() {
                                                                    const index = this.dataset.index;
                                                                    const modal = document.getElementById('modal-hapus-validasi');
                                                                    modal.classList.remove('hidden');
                                                                    modal.setAttribute('aria-hidden', 'false');
                                                                    modal.setAttribute('tabindex', '0');
                                                                    modal.focus();

                                                                    const closeButton = modal.querySelector(
                                                                        '[data-modal-hide="modal-hapus-validasi"]');
                                                                    closeButton.addEventListener('click', () => {
                                                                        modal.classList.add('hidden');
                                                                        modal.setAttribute('aria-hidden', 'true');
                                                                        modal.setAttribute('tabindex', '0');
                                                                        button.focus();
                                                                    });

                                                                    const confirmButton = modal.querySelector(
                                                                        '[data-modal-hide="modal-hapus-validasi-ya"]');
                                                                    confirmButton.addEventListener('click', () => {
                                                                        window.location.href = window.location.origin +
                                                                            '/sa-pendataan-si/delete/' + button.getAttribute('data-index');
                                                                    });
                                                                });
                                                            });
                                                        });
                                                    </script>
                                                    <!-- Modal Akhir -->
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="relative flex justify-between mt-5">
                                            <div class="font-bold text-black">Jumlah : {{ $DATA_MASUK->total() }}
                                            </div>
                                            <div class="">
                                                {{ $DATA_MASUK->appends([
                                                        'pencarian' => request('pencarian'),
                                                    ])->links() }}
                                            </div>
                                        </div>
                                        @php
                                            $totalDataMasuk = $DATA_MASUK->total();
                                        @endphp
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal toggle -->
                </div>
            </div>
            <div class="rounded shadow-lg h-full border-solid border-4 border-[#297785] pt-5 pl-5 pr-3 pb-1"
                id="moving-border">
                <div class="max-h-[calc(100%-1rem)] overflow-y-auto overflow-x-auto hide-scrollbar">
                    <div class="flex m-auto justify-center items-center">
                        <x-toast-tambah />
                        <x-toast-edit />
                        <x-toast-hapus />
                    </div>
                    {{-- isi konten disini --}}
                    <div class="flex flex-row gap-2">
                        <div class="basis-[10%]">
                            <button data-modal-target="modal-share" data-modal-toggle="modal-share" type="button"
                                title="Share Link"
                                class="inline-flex w-full items-center gap-2 rounded-md border border-[#FA8F21] bg-[#FA8F21] px-5 py-2 text-center text-center text-sm font-medium text-white hover:bg-[#D87815] focus:outline-none focus:ring-2 focus:ring-[#FA8F21] dark:border-[#FA8F21] dark:bg-[#FA8F21] dark:text-white dark:hover:bg-[#D87815] dark:focus:ring-[#FA8F21]">
                                <svg viewBox="0 0 24 24" class="w-7 h-7 flex m-auto" fill="white"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M15.1581 7.81489C15.883 8.5467 16.8886 9 18 9C20.2091 9 22 7.20914 22 5C22 2.79086 20.2091 1 18 1C15.7909 1 14 2.79086 14 5C14 5.37703 14.0522 5.74188 14.1497 6.08773L8.84197 9.18518C8.11707 8.45333 7.11147 8 6 8C3.79086 8 2 9.79086 2 12C2 14.2091 3.79086 16 6 16C7.11165 16 8.11739 15.5465 8.84231 14.8145L14.1509 17.9079C14.0526 18.255 14 18.6214 14 19C14 21.2091 15.7909 23 18 23C20.2091 23 22 21.2091 22 19C22 16.7909 20.2091 15 18 15C16.8902 15 15.8859 15.452 15.1613 16.1819L9.85049 13.0872C9.94789 12.7415 10 12.3768 10 12C10 11.623 9.94784 11.2582 9.85036 10.9124L15.1581 7.81489ZM18 3C16.8954 3 16 3.89543 16 5C16 5.3474 16.0886 5.67412 16.2444 5.95879C16.2545 5.97417 16.2643 5.98992 16.2737 6.00602C16.283 6.022 16.2918 6.03813 16.3002 6.05439C16.6531 6.62207 17.2824 7 18 7C19.1046 7 20 6.10457 20 5C20 3.89543 19.1046 3 18 3ZM7.69959 10.9453C7.708 10.9617 7.71691 10.978 7.72632 10.9941C7.73579 11.0103 7.74565 11.0262 7.75588 11.0417C7.91152 11.3262 8 11.6528 8 12C8 12.3474 7.9114 12.6742 7.75556 12.9589C7.74533 12.9744 7.73547 12.9903 7.726 13.0066C7.71682 13.0223 7.70812 13.0382 7.69989 13.0543C7.34703 13.622 6.71765 14 6 14C4.89543 14 4 13.1046 4 12C4 10.8954 4.89543 10 6 10C6.71745 10 7.34667 10.3778 7.69959 10.9453ZM16 19C16 18.6749 16.0776 18.368 16.2152 18.0966C16.2399 18.0641 16.2629 18.0297 16.284 17.9935C16.3042 17.9588 16.3221 17.9234 16.3378 17.8874C16.6967 17.3522 17.3072 17 18 17C19.1046 17 20 17.8954 20 19C20 20.1046 19.1046 21 18 21C16.8954 21 16 20.1046 16 19Z"
                                            fill="white"></path>
                                    </g>
                                </svg>
                                {{-- Print --}}
                            </button>
                            <!-- Main modal -->
                            <div id="modal-share" tabindex="-1" aria-hidden="true"
                                class="fixed bottom-0 left-[260px] right-0 top-0 z-50 flex hidden items-center justify-center bg-opacity-50 backdrop-blur-sm">
                                <div class="relative max-h-full w-full max-w-lg p-2">
                                    <!-- Modal content -->
                                    <div class="relative rounded-lg bg-[#297785] shadow dark:bg-[#297785]">
                                        <!-- Modal header -->
                                        <div
                                            class="flex items-center justify-between rounded-t border-b border-white p-4 dark:border-white md:p-5">
                                            <div class="div">
                                                <h3 class="text-lg font-semibold text-white dark:text-white">
                                                    Share Link Pendataan Sekolah Inklusi<br>
                                                </h3>
                                            </div>
                                            <button type="button"
                                                class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-white hover:bg-[#D87815] hover:text-white dark:hover:bg-[#D87815] dark:hover:text-white"
                                                data-modal-hide="modal-share">
                                                <svg class="h-3 w-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 14 14">
                                                    <path stroke="white" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal footer -->
                                        <div
                                            class="m-auto flex items-center justify-center gap-5 p-4 text-center md:p-4 bg-white">
                                            <div class="div">
                                                <a href="https://diksusprovlampung.com/pendataan-sekolah-inklusi"
                                                    target="_blank" id="linkToCopy"
                                                    class="text-sm font-semibold text-[#FA8F21]">
                                                    https://diksusprovlampung.com/pendataan-sekolah-inklusi
                                                </a><br>
                                            </div>
                                        </div>
                                        <div
                                            class="m-auto flex items-center justify-center gap-5 p-4 text-center md:p-5">
                                            <button data-modal-hide="static-modal" type="button" id="copyButton"
                                                class="btn rounded-lg border-none bg-[#FA8F21] px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-[#D87815] hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300">
                                                Copy Link
                                            </button>
                                            <button data-modal-hide="static-modal" type="button" id="generateQR"
                                                class="btn rounded-lg border-none bg-[#FA8F21] px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-[#D87815] hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300">
                                                Generate Link Ke Barcode
                                            </button>
                                        </div>
                                        <div class="m-auto flex items-center justify-center text-center pb-5"
                                            id="qrcode"></div>
                                        <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
                                        <script>
                                            document.getElementById('copyButton').addEventListener('click', function() {
                                                const linkElement = document.getElementById('linkToCopy');
                                                const tempInput = document.createElement('input');
                                                tempInput.value = linkElement.href;
                                                document.body.appendChild(tempInput);
                                                tempInput.select();
                                                document.execCommand('copy');
                                                document.body.removeChild(tempInput);
                                                alert('Link berhasil di copy! Harap tidak sembarang memberikan link kepada siapapun');
                                            });

                                            function downloadQRCode() {
                                                const qrCanvas = document.querySelector('#qrcode canvas');
                                                if (qrCanvas) {
                                                    const qrImage = qrCanvas.toDataURL('image/png');
                                                    const downloadLink = document.createElement('a');
                                                    downloadLink.href = qrImage;
                                                    downloadLink.download = 'qrcode-form-sekolah-inklusi.png';
                                                    downloadLink.click();
                                                }
                                            }

                                            document.getElementById('generateQR').addEventListener('click', function() {
                                                var link = document.getElementById('linkToCopy').href;
                                                var qrCodeElement = document.getElementById('qrcode');

                                                if (!qrCodeElement.innerHTML.trim()) {
                                                    var qrcode = new QRCode(qrCodeElement, {
                                                        text: link,
                                                        width: 200,
                                                        height: 200,
                                                        colorDark: "#000000",
                                                        colorLight: "#ffffff",
                                                        correctLevel: QRCode.CorrectLevel.H
                                                    });
                                                }

                                                downloadQRCode();
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="basis-[80%]">
                            <form class="flex items-center mx-auto my-auto">
                                <div class="relative w-full" title="Cari Data">
                                    <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
                                        <x-svg-search />
                                    </div>
                                    <input type="text" name="pencarian" id="simple-search"
                                        class="mx-auto border-2 border-[#297785] dark:border-[#297785] text-black text-sm rounded-lg focus:border-[#FA8F21] block w-full ps-10 p-2.5 dark:hover:text-black hover:text-black dark:placeholder-gray-400 placeholder-gray-400 dark:focus:ring-[#FA8F21] focus:ring-[#FA8F21]"
                                        placeholder="Cari Nama Sekolah, Waktu Submit, NPSN, Status Sekolah, Kota, Nama Pembimbing PDBK, Nomor HP Pembimbing..."
                                        onkeypress="cariDenganEnter(event)" oninput="hapusPencarianKosong(event)"
                                        value="{{ isset($_GET['pencarian']) ? $_GET['pencarian'] : '' }}" />
                                    <script>
                                        function cariDenganEnter(event) {
                                            if (event.key === 'Enter') {
                                                event.preventDefault();
                                                const input = event.target;
                                                const params = new URLSearchParams(window.location.search);
                                                if (input.value === '') {
                                                    params.delete('pencarian');
                                                } else {
                                                    params.set('pencarian', input.value);
                                                }
                                                window.location.search = params.toString();
                                            }
                                        }

                                        function hapusPencarianKosong(event) {
                                            const input = event.target;
                                            const params = new URLSearchParams(window.location.search);
                                            if (input.value === '') {
                                                params.delete('pencarian');
                                                window.location.search = params.toString();
                                            }
                                        }
                                    </script>
                                </div>
                            </form>
                        </div>
                        <div class="basis-[10%]">
                            <button data-modal-target="modal-print" data-modal-toggle="modal-print" type="button"
                                class="inline-flex w-full items-center gap-2 rounded-md border border-[#FA8F21] bg-[#FA8F21] px-5 py-2 text-center text-center text-sm font-medium text-white hover:bg-[#D87815] focus:outline-none focus:ring-2 focus:ring-[#FA8F21] dark:border-[#FA8F21] dark:bg-[#FA8F21] dark:text-white dark:hover:bg-[#D87815] dark:focus:ring-[#FA8F21]">
                                <x-svg-excel />
                                {{-- Print --}}
                            </button>
                            <!-- Main modal -->
                            <div id="modal-print" tabindex="-1" aria-hidden="true"
                                class="fixed bottom-0 left-[260px] right-0 top-0 z-50 flex hidden items-center justify-center bg-opacity-50 backdrop-blur-sm">
                                <div class="relative max-h-full w-full max-w-md p-4">
                                    <!-- Modal content -->
                                    <div class="relative rounded-lg bg-[#297785] shadow dark:bg-[#297785]">
                                        <!-- Modal header -->
                                        <div
                                            class="flex items-center justify-between rounded-t border-b border-white p-4 dark:border-white md:p-5">
                                            <div class="div">
                                                <h3 class="text-lg font-semibold text-white dark:text-white">
                                                    Cetak Data<br>
                                                </h3>
                                                <h5 class="text-white">
                                                    <x-time-saat-ini />
                                                </h5>
                                            </div>
                                            <button type="button"
                                                class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-white hover:bg-[#D87815] hover:text-white dark:hover:bg-[#D87815] dark:hover:text-white"
                                                data-modal-hide="modal-print">
                                                <svg class="h-3 w-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 14 14">
                                                    <path stroke="white" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal footer -->
                                        <div
                                            class="m-auto flex items-center justify-center gap-5 rounded-b border-t border-gray-200 p-4 text-center dark:border-gray-600 md:p-5">
                                            <button data-modal-hide="static-modal" type="button" id="downloadExcel"
                                                class="btn rounded-lg border-none bg-[#FA8F21] px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-[#D87815] hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300">Download
                                                Excel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative overflow-x-auto overflow-y-auto shadow-sm sm:rounded-lg mt-5">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 bg-white">
                            <thead class="text-xs text-white uppercase bg-[#2F8386] dark:bg-[#2F8386] dark:text-white">
                                <tr>
                                    <th scope="col" class="px-3 py-2">
                                        No
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Waktu Submit
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Nama Sekolah
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        NPSN
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Status Sekolah
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Kota
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Jumlah PDBK
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Nama Pembimbing PDBK
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Nomor HP Pembimbing PDBK
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Keterangan Validasi
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dummyData as $index => $data)
                                    <tr
                                        class="bg-white border-b border-gray-700 hover:bg-[#C4DDDE] dark:hover:bg-[#C4DDDE] text-black hover:text-white text-xs">
                                        <td class="px-3 py-2">
                                            {{ ($DATA->currentPage() - 1) * 10 + $index + 1 }}
                                        </td>
                                        <td class="px-3 py-2">
                                            {{ $data['tahun'] }}
                                        </td>
                                        <td class="px-3 py-2">
                                            {{ $data['nama_sekolah'] }}
                                        </td>
                                        <td class="px-3 py-2">
                                            {{ $data['npsn'] }}
                                        </td>
                                        <td class="px-3 py-2">
                                            {{ $data['statusSekolah'] }}
                                        </td>
                                        <td class="px-3 py-2">
                                            {{ $data['kota'] }}
                                        </td>
                                        <td class="px-3 py-2">
                                            {{ $data['jumlah_pdbk'] }}
                                        </td>
                                        <td class="px-3 py-2">
                                            {{ $data['namaPembimbing'] }}
                                        </td>
                                        <td class="px-3 py-2">
                                            {{ $data['nomorHP'] }}
                                        </td>
                                        <td class="px-3 py-2">
                                            {{-- Divalidasi --}}
                                            <span
                                                class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded ">Divalidasi
                                            </span>
                                            {{-- Belum Divalidasi --}}
                                            {{-- <span
                                                    class="w-full bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded ">Belum
                                                    Divalidasi</span> --}}
                                        </td>
                                        <td class="px-3 py-2">
                                            <div class="flex justify-items-center m-auto text-center gap-2">
                                                <a href="/sa-pendataan-si/lihat/{{ $data['id'] }}" title="lihat">
                                                    <div
                                                        class="bg-[#FA8F21] dark:bg-[#FA8F21] hover:bg-[#D87815] dark:hover:bg-[#D87815] p-1 pt-2 rounded-md">
                                                        <x-svg-lihat />
                                                    </div>
                                                </a>
                                                <a href="/sa-pendataan-si/edit/{{ $data['id'] }}" title="Edit">
                                                    <div
                                                        class="bg-[#FA8F21] dark:bg-[#FA8F21] hover:bg-[#D87815] dark:hover:bg-[#D87815] p-1 rounded-md">
                                                        <x-svg-edit />
                                                    </div>
                                                </a>
                                                <div class="div">
                                                    <button
                                                        class="bg-[#FF0000] hover:bg-[#D51717] p-1 rounded-md cursor-pointer delete-button"
                                                        title="Delete" type="button"
                                                        data-index="<?= $data['id'] ?>">
                                                        <x-svg-delete />
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                <!-- Modal -->
                                <div id="popup-modal" tabindex="-1" aria-hidden="true"
                                    class="z-50 hidden fixed top-0 right-0 left-[260px] bottom-0 flex items-center justify-center backdrop-blur-sm bg-opacity-50">
                                    <div class="relative p-4 w-full max-w-md max-h-full">
                                        <div class="relative bg-[#297785] rounded-lg shadow">
                                            <button type="button"
                                                class="absolute top-3 end-2.5 text-white bg-transparent hover:bg-[#D87815] hover:text-white rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                                data-modal-hide="popup-modal-delete">
                                                <svg class="w-3 h-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="white"
                                                    viewBox="0 0 14 14">
                                                    <path stroke="white" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                            <div class="p-4 md:p-5 text-center">
                                                <svg class="mx-auto mb-4 text-white w-12 h-12" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 20 20">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                </svg>
                                                <h3 class="mb-5 text-lg font-normal text-white ">
                                                    Anda Yakin Ingin Menghapus Data Ini?</h3>
                                                <button data-modal-hide="popup-modal-ya" type="button"
                                                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                    Ya
                                                </button>
                                                <button data-modal-hide="popup-modal-tidak" aria-hidden="true"
                                                    type="button"
                                                    class="py-2.5 px-5 ms-3 text-sm font-medium text-white bg-[#FA8F21] rounded-lg hover:bg-[#D87815] hover:text-white focus:z-10 ">Tidak</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        const deleteButtons = document.querySelectorAll('.delete-button');
                                        deleteButtons.forEach(button => {
                                            button.addEventListener('click', function() {
                                                const index = this.dataset.index;
                                                const modal = document.getElementById('popup-modal');
                                                modal.classList.remove('hidden');
                                                modal.setAttribute('aria-hidden', 'false');
                                                modal.setAttribute('tabindex', '0');
                                                const modalTidak = document.getElementById('popup-modal');
                                                modalTidak.classList.remove('hidden');
                                                modalTidak.setAttribute('aria-hidden', 'false');
                                                modalTidak.setAttribute('tabindex', '0');
                                                const closeButton = modal.querySelector(
                                                    '[data-modal-hide="popup-modal-delete"]');
                                                closeButton.addEventListener('click', () => {
                                                    modal.classList.add('hidden');
                                                    modal.setAttribute('aria-hidden', 'true');
                                                    modal.setAttribute('tabindex', '-1');
                                                });

                                                const closeButtonYa = modal.querySelector(
                                                    '[data-modal-hide="popup-modal-ya"]');
                                                closeButtonYa.addEventListener('click', () => {
                                                    window.location.href = window.location.origin +
                                                        '/sa-pendataan-si/delete/' + button.getAttribute(
                                                            'data-index');
                                                });

                                                const closeButtonTidak = modalTidak.querySelector(
                                                    '[data-modal-hide="popup-modal-tidak"]');
                                                closeButtonTidak.addEventListener('click', () => {
                                                    modalTidak.classList.add('hidden');
                                                    modalTidak.setAttribute('aria-hidden', 'true');
                                                    modalTidak.setAttribute('tabindex', '-1');
                                                });
                                            });
                                        });
                                    });
                                </script>
                            </tbody>
                        </table>
                    </div>
                    <div class="relative flex justify-between mt-5">
                        <div class="font-bold text-black">Jumlah : {{ $DATA->total() }}</div>
                        <div class="">
                            {{ $DATA->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/exceljs/dist/exceljs.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('downloadExcel').addEventListener('click', async function() {
                const params = new URLSearchParams(window.location.search);
                const pencarian = params.get('pencarian') || '';
                const dataUrl =
                    `/api/sekolah-inklusi?pencarian=${pencarian}`;
                try {
                    let response = await fetch(dataUrl);
                    let allData = await response.json();
                    createExcel(allData);
                } catch (error) {
                    console.error("Error fetching data:", error);
                }
            });
        });

        async function createExcel(data) {
            const currentDate = new Date();
            const formattedDate = currentDate.toLocaleString('id-ID', {
                year: 'numeric',
                month: 'long',
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit'
            });

            const titleHeader = [
                ['Daftar Sekolah Inklusi Provinsi Lampung'],
                ['Tanggal Unduh: ' + formattedDate],
                ['Pengunduh: Super Admin'],
                []
            ];

            const header = [
                'No',
                'Waktu Submit',
                'Nama Sekolah',
                'NPSN Sekolah',
                'Status Sekolah',
                'Alamat Sekolah',
                'Kota Sekolah',
                'Jumlah PDBK',
                'Nama Pembimbing PDBK',
                'Jenis Kelamin Pembimbing PDBK',
                'Pangkat/Golongan Pembimbing PDBK',
                'Alamat Tinggal Pembimbing PDBK',
                'Nomor HP Pembimbing PDBK',
                'Keterangan Validasi'
            ];

            const excelData = [...titleHeader, header];
            data.forEach((item, index) => {
                const rowData = [
                    index + 1, // No
                    item.tahun,
                    item.nama_sekolah,
                    item.npsn,
                    item.statusSekolah,
                    item.alamatSekolah,
                    item.kota,
                    item.jumlah_pdbk,
                    item.namaPembimbing,
                    item.jenisKelamin,
                    item.pangkat,
                    item.alamatTinggal,
                    item.nomorHP,
                    item.status
                ];
                excelData.push(rowData);
            });

            const workbook = new ExcelJS.Workbook();
            const sheet = workbook.addWorksheet('SekolahInklusi');

            for (let i = 0; i < 6; i++) {
                sheet.addRow([]);
            }

            sheet.addRows(excelData);

            sheet.mergeCells('A7:N7');
            sheet.mergeCells('A8:N8');
            sheet.mergeCells('A9:N9');

            sheet.getCell('A7').value = `Daftar Sekolah Inklusi Provinsi Lampung`;
            sheet.getCell('A8').value = `Tanggal Unduh: ${formattedDate}`;
            sheet.getCell('A9').value = `Pengunduh: Super Admin`;

            sheet.getCell('A7').font = {
                name: 'Arial',
                size: 18,
                bold: true
            };
            sheet.getCell('A7').alignment = {
                horizontal: 'center',
                vertical: 'center'
            };
            sheet.getCell('A8').font = {
                bold: true
            };
            sheet.getCell('A8').alignment = {
                horizontal: 'center',
                vertical: 'center'
            };
            sheet.getCell('A9').font = {
                bold: true
            };
            sheet.getCell('A9').alignment = {
                horizontal: 'center',
                vertical: 'center'
            };

            const widths = [5, 20, 30, 15, 20, 40, 20, 15, 30, 25, 25, 40, 25, 25];
            widths.forEach((width, index) => {
                sheet.getColumn(index + 1).width = width;
            });

            const imageResponse = await fetch('/assets/landing/kop_surat.png');
            const imageBlob = await imageResponse.blob();
            const imageBuffer = await imageBlob.arrayBuffer();
            const imageId = workbook.addImage({
                buffer: imageBuffer,
                extension: 'png',
            });

            sheet.addImage(imageId, {
                tl: {
                    col: 6,
                    row: 0
                },
                ext: {
                    width: 550,
                    height: 100
                }
            });

            // Unduh file Excel
            const buffer = await workbook.xlsx.writeBuffer();
            const blob = new Blob([buffer], {
                type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
            });
            saveAs(blob, 'SekolahInklusiLampung.xlsx');
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const notificationsCount = {{ $totalDataMasuk }};

            const notificationBadge = document.getElementById('notificationBadge');
            if (notificationBadge) {
                notificationBadge.innerText = notificationsCount;
                if (notificationsCount > 0) {
                    notificationBadge.style.display = 'inline-flex';
                } else {
                    notificationBadge.style.display = 'none';
                }
                setInterval(function() {
                    notificationBadge.classList.toggle('text-blink');
                }, 500);
            }
        });
    </script>

</body>

</html>
