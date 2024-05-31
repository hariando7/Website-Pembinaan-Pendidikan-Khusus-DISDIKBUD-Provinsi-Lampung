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
</head>

<body class="bg-white z-10">
    <div>
        <x-dashboard-side-bar-sa />
        <div class="pl-[280px] h-screen pt-2 pr-5 pb-[85px] full-height">
            <div class="flex justify-between pb-2">
                <div class="text-center items-center justify-center text-[#297785] font-bold text-[32px]">Pendataan
                    Sekolah Inklusi Provinsi Lampung
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
                        <div class="basis-[90%]">
                            <form class="flex items-center mx-auto my-auto">
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                        <x-svg-search />
                                    </div>
                                    <input name="pencarian" type="text"
                                        value="{{ isset($_GET['pencarian']) ? $_GET['pencarian'] : '' }}"
                                        id="simple-search"
                                        class="mx-auto border-2 border-[#297785] dark:border-[#297785] text-black text-sm rounded-lg focus:border-[#FA8F21] block w-full ps-10 p-2.5 dark:hover:text-black hover:text-black dark:placeholder-gray-400 placeholder-gray-400 dark:focus:ring-[#FA8F21] focus:ring-[#FA8F21]"
                                        placeholder="Search..." oninput="cekKosong(this)" required />
                                    <script>
                                        function cekKosong(e) {
                                            if (e.value === '') {
                                                window.location.href = window.location.origin + window.location.pathname;
                                            }
                                        }
                                    </script>
                                </div>
                            </form>
                        </div>
                        <div class="basis-[10%]">
                            <button data-modal-target="modal-print" data-modal-toggle="modal-print" type="button"
                                class="inline-flex w-full items-center gap-2 rounded-md border border-[#FA8F21] bg-[#FA8F21] px-5 py-2 text-center text-center text-sm font-medium text-white hover:bg-[#D87815] focus:outline-none focus:ring-2 focus:ring-[#FA8F21] dark:border-[#FA8F21] dark:bg-[#FA8F21] dark:text-white dark:hover:bg-[#D87815] dark:focus:ring-[#FA8F21]">
                                <x-svg-print />
                                Print
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
                                                    <path stroke="white" stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
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
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // $dummyData = [
                                //     [
                                //         'tahun' => '2023',
                                //         'nama_sekolah' => 'SMA Negeri 1',
                                //         'npsn' => '123456789',
                                //         'jumlah_pdbk' => '5',
                                //     ],
                                // ];
                                ?>
                                @foreach ($dummyData as $index => $data)
                                    <tr
                                        class="bg-white border-b dark:bg-white dark:border-gray-700 border-gray-700 hover:bg-[#C4DDDE] dark:hover:bg-[#C4DDDE] text-black hover:text-white">
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
                                                <?php endforeach; ?>
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
                                                                <svg class="mx-auto mb-4 text-white w-12 h-12"
                                                                    aria-hidden="true"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 20 20">
                                                                    <path stroke="currentColor" stroke-linecap="round"
                                                                        stroke-linejoin="round" stroke-width="2"
                                                                        d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                                </svg>
                                                                <h3 class="mb-5 text-lg font-normal text-white ">
                                                                    Anda Yakin Ingin Menghapus Data Ini?</h3>
                                                                <button data-modal-hide="popup-modal-ya"
                                                                    type="button"
                                                                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                                    Ya
                                                                </button>
                                                                <button data-modal-hide="popup-modal-tidak"
                                                                    aria-hidden="true" type="button"
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
                                            </div>
                                        </td>
                                    </tr>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('downloadExcel').addEventListener('click', async function() {
                let data = await fetch('/api/sekolah-inklusi');
                let allData = await data.json();

                function createExcel(data) {
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
                        ['Laporan Data Sekolah Inklusi Provinsi Lampung'], // Judul
                        ['Tanggal Unduh: ' + formattedDate], // Waktu download
                        ['Pengunduh: Super Admin'], // Judul
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
                        'Jenis Kelamin Pembimbing PDKB',
                        'Pangkat/Golongan Pembimbing PDBK',
                        'Alamat Tinggal Pembimbing PDBK',
                        'Nomor HP Pembimbing PDBK'
                    ];

                    const excelData = [...titleHeader, header];
                    data.forEach(function(item, index) {
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
                            item.nomorHP
                        ];
                        excelData.push(rowData);
                    });

                    const ws = XLSX.utils.aoa_to_sheet(excelData);

                    ws['!merges'] = [{
                            s: {
                                r: 0,
                                c: 0
                            },
                            e: {
                                r: 0,
                                c: 12
                            }
                        }, // Merge untuk judul
                        {
                            s: {
                                r: 1,
                                c: 0
                            },
                            e: {
                                r: 1,
                                c: 12
                            }
                        } // Merge untuk tanggal
                    ];

                    ws['!cols'] = [{
                            wch: 5
                        }, // No
                        {
                            wch: 20
                        }, // Waktu Submit
                        {
                            wch: 30
                        }, // Nama Sekolah
                        {
                            wch: 15
                        }, // NPSN Sekolah
                        {
                            wch: 20
                        }, // Status Sekolah
                        {
                            wch: 40
                        }, // Alamat Sekolah
                        {
                            wch: 20
                        }, // Kota Sekolah
                        {
                            wch: 15
                        }, // Jumlah PDBK
                        {
                            wch: 30
                        }, // Nama Pembimbing PDBK
                        {
                            wch: 25
                        }, // Jenis Kelamin Pembimbing PDKB
                        {
                            wch: 25
                        }, // Pangkat/Golongan Pembimbing PDBK
                        {
                            wch: 40
                        }, // Alamat Tinggal Pembimbing PDBK
                        {
                            wch: 25
                        } // Nomor HP Pembimbing PDBK
                    ];

                    ws['A1'].s = {
                        font: {
                            name: 'Arial',
                            sz: 24, // ukuran huruf 24pt
                            bold: true // teks bold
                        },
                        alignment: {
                            horizontal: 'center',
                            vertical: 'center'
                        }
                    };

                    const wb = XLSX.utils.book_new();
                    XLSX.utils.book_append_sheet(wb, ws, 'SekolahInklusi');

                    XLSX.writeFile(wb, 'SekolahInklusiLampung.xlsx');
                }

                createExcel(allData);
            });
        });
    </script>
</body>

</html>
