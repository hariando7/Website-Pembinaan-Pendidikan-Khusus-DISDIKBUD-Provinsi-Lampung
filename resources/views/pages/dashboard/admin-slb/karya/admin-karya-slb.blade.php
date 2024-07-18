<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Karya SLB</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link rel="icon" type="image/x-icon" href="/assets/landing/prov-lampung2.svg">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Include SheetJS library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js"></script>
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

        @keyframes border-tombol {
            0% {
                border-color: #297785;
            }

            50% {
                border-color: #FA8F21;
            }

            100% {
                border-color: #297785;
            }
        }

        #border-tombol {
            animation: border-tombol 3s infinite;
        }
    </style>
</head>

@use('App\Models\Sekolah')
@php
    $sekolah = Sekolah::find(auth()->user()->sekolah);
@endphp

<body class="bg-white">
    <div>
        <x-dashboard-sidebar-admin />
        <div class="p-4 sm:ml-64 min-h-screen">
            <div class="grid grid-cols-1 gap-4 mb-4">
                <p class="text-2xl justify-center text-left items-center text-[24px] font-bold text-[#297785] m-auto">
                    Karya
                    SLB - {{ $sekolah->nama }}
                </p>
                <div class="flex items-center justify-center rounded gap-2 h-20 border-dashed border-2 border-[#297785] rounded-lg"
                    id="border-tombol">
                    <div>
                        {{-- Button Panduan --}}
                        <x-guide-book />
                    </div>
                    <div>
                        {{-- Button Notifikasi --}}
                        <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                            title="Tombol Notifikasi Dari Bidang Pembinaan Pendidikan Khusus"
                            class="btn border-none text-white text-center py-2 lg:py-2 hover:bg-[#D87815 w-[4.5rem] lg:w-[14.5rem] py-1 my-2 flex items-center justify-center rounded-md bg-[#FA8F21] bg-[#FA8F21] hover:bg-[#D87815] gap-2">
                            <x-svg-notifikasi />
                            <span class="hidden sm:inline">
                                Notifikasi Dinas
                                <span id="notificationBadge"
                                    class="inline-flex items-center justify-center w-4 h-4 ms-2 text-xs font-semibold text-[#FA8F21] bg-white rounded-full"
                                    style="display: none;">
                                </span>
                            </span>
                        </button>
                        <x-notifikasi-slb :notifications="$pengumuman" />
                    </div>
                    <div>
                        {{-- Button Statistik --}}
                        <button data-modal-target="modal-admin-karya" data-modal-toggle="modal-admin-karya"
                            title="Visualisasi Statistik Karya SLB Berdasarkan Tahun Ajaran"
                            class="btn border-none text-white text-center py-2 lg:py-2 w-[4.5rem] lg:w-[14.5rem] py-1 my-2 flex items-center justify-center rounded-md bg-[#FA8F21] hover:bg-[#D87815] gap-2"
                            type="button">
                            <x-svg-statistik />
                            <span class="hidden sm:inline">Statistik Karya</span>
                        </button>
                        <x-admin-statistik-karya />
                        {{-- Kondisi cek Hanya 1 Kali muncul modal --}}
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const toggleButtons = document.querySelectorAll('[data-modal-toggle="modal-admin-karya"]');
                                const modal = document.getElementById('modal-admin-karya');
                                toggleButtons.forEach(button => {
                                    button.addEventListener('click', function() {
                                        if (modal.classList.contains('hidden')) {
                                            modal.classList.remove('hidden');
                                            modal.classList.add('flex');
                                        } else {
                                            modal.classList.add('hidden');
                                            modal.classList.remove('flex');
                                        }
                                    });
                                });
                            });
                        </script>
                    </div>
                    <div>
                        {{-- Button Tambah --}}
                        <a href="/admin-karya-slb/tambah" type="button"
                            class="btn border-none text-white text-center py-2 lg:py-2 w-[4.5rem] lg:w-[14.5rem] py-1 my-2 flex items-center justify-center rounded-md bg-[#FA8F21] bg-[#FA8F21] hover:bg-[#D87815] gap-2">
                            <x-svg-tambah />
                            <span class="hidden sm:inline">Tambah Karya</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="p-4 border-4 border-solid border-[#297785] rounded-lg" id="moving-border">
                <div class="hide-scrollbar max-h-[calc(100%-1rem)] overflow-y-auto">
                    {{-- isi konten disini --}}
                    <div class="m-auto flex items-center justify-center">
                        <x-toast-tambah />
                        <x-toast-edit />
                        <x-toast-hapus />
                    </div>
                    <form class="flex flex-row gap-2">
                        <div class="basis-[20%]">
                            <select name="tahun" id="tahun" title="Filter Berdasarkan Tahun"
                                class="focus:ring-none z-10 inline-flex w-full items-center rounded-lg border-2 border-[#297785] py-2.5 pl-2 text-center text-sm font-medium text-[#297785] focus:border-[#FA8F21] dark:border-[#297785] dark:text-[#297785]"
                                onchange="filterTahun(this)">
                                <option value="">Semua Tahun</option>
                                @foreach ($daftarTahun as $tahun)
                                    <option value="{{ $tahun->tahun }}"
                                        @if (isset($_GET['tahun']) && $_GET['tahun'] == $tahun->tahun) selected @endif>
                                        {{ $tahun->tahun }}</option>
                                @endforeach
                            </select>
                            <script>
                                function filterTahun(e) {
                                    const params = new URLSearchParams(window.location.search);
                                    if (e.value === '') {
                                        params.delete('tahun');
                                    } else {
                                        params.set('tahun', e.value);
                                    }
                                    window.location.search = params.toString();
                                }
                            </script>
                        </div>
                        <div class="basis-[70%]">
                            <div class="mx-auto my-auto flex items-center">
                                <div class="relative w-full">
                                    <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
                                        <x-svg-search />
                                    </div>
                                    <input type="text" name="pencarian" id="simple-search"
                                        class="mx-auto border-2 border-[#297785] dark:border-[#297785] text-black text-sm rounded-lg focus:border-[#FA8F21] block w-full ps-10 p-2.5 dark:hover:text-black hover:text-black dark:placeholder-gray-400 placeholder-gray-400 dark:focus:ring-[#FA8F21] focus:ring-[#FA8F21]"
                                        placeholder="Cari Nama Karya..." onkeypress="cariDenganEnter(event)"
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
                            </div>
                        </div>
                        <div class="basis-[10%]">
                            <div>
                                <button id="print-button" type="button" onclick="showModal()" type="button"
                                    class="btn border-none text-white text-center w-[4rem] lg:w-[8rem] flex items-center justify-center rounded-md bg-[#FA8F21] hover:bg-[#D87815] gap-2">
                                    <x-svg-excel />
                                    <span class="hidden sm:inline">Unduh</span>
                                </button>
                            </div>
                            <!-- Main modal -->
                            <div id="modal-print" tabindex="-1" aria-hidden="true"
                                class="fixed bottom-0 left-0 right-0 top-0 z-50 flex hidden items-center justify-center bg-opacity-50 backdrop-blur-sm">
                                <div class="relative max-h-full w-full max-w-md p-4">
                                    <!-- Modal content -->
                                    <div class="relative rounded-lg bg-[#297785] shadow dark:bg-[#297785]">
                                        <!-- Modal header -->
                                        <div
                                            class="flex items-center justify-between rounded-t border-b border-white p-4 dark:border-white md:p-5">
                                            <div class="div">
                                                <h3 class="text-lg font-semibold text-white dark:text-white">
                                                    Unduh Data<br>
                                                </h3>
                                                <h5 class="text-white">
                                                    <x-time-saat-ini />
                                                </h5>
                                            </div>
                                            <button type="button"
                                                class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-white hover:bg-[#D87815] hover:text-white dark:hover:bg-[#D87815] dark:hover:text-white"
                                                data-modal-close="modal-print" onclick="hideModal()">
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
                                            <div>
                                                <button data-modal-hide="static-modal" type="button"
                                                    id="downloadExcel"
                                                    class="btn rounded-lg border-none bg-[#FA8F21] px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-[#D87815] hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300 gap-2">
                                                    <x-svg-excel />
                                                    Download Excel
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Modal Import Excel --}}
                        </div>
                    </form>
                    <div class="relative overflow-x-auto overflow-y-auto shadow-sm sm:rounded-lg mt-5">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 bg-white">
                            <thead class="text-xs text-white uppercase bg-[#2F8386] dark:bg-[#2F8386] dark:text-white">
                                <tr>
                                    <th scope="col" class="px-3 py-2">
                                        No
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Tahun Ajaran
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Judul Karya
                                    </th>
                                    <th scope="col" class="px-32 py-2">
                                        Gambar
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Deskripsi
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
                                //         'id' => 1,
                                //         'tahun' => '2023',
                                //         'judulKarya' => 'Karya 1',
                                //         'gambar' => 'gambar1.jpg',
                                //         'deskripsi' => 'Deskripsi karya 1',
                                //     ],
                                // ];
                                ?>
                                <?php foreach ($dummyData as $index => $data): ?>
                                <tr
                                    class="bg-white border-b dark:bg-white dark:border-gray-700 border-gray-700 hover:bg-[#C4DDDE] dark:hover:bg-[#C4DDDE] text-black hover:text-whitee">
                                    <td class="px-3 py-2">{{ ($DATA->currentPage() - 1) * 10 + $index + 1 }}</td>
                                    <td class="px-3 py-2"><?= $data['tahun'] ?></td>
                                    <td class="px-3 py-2">
                                        <?php
                                        $judulKarya = $data['judulKarya'];
                                        echo strlen($judulKarya) > 100 ? substr($judulKarya, 0, 100) . '...' : $judulKarya;
                                        ?>
                                    </td>
                                    <td class="px-3 py-2">
                                        {{-- <img src="{{ url(asset('storage/' . $data['gambar'])) }}" alt=""> --}}
                                        {{-- @dd($data['gambar']) --}}
                                        <div class="w-full rounded overflow-hidden">
                                            <div id="default-carousel" class="relative w-full z-0"
                                                data-carousel="slide">
                                                <!-- Carousel wrapper -->
                                                <div class="relative h-[300px] w-[300px] overflow-hidden rounded-lg">
                                                    <!-- Item 1 -->
                                                    <img src="{{ url(asset('storage/' . $data['gambar'])) }}"
                                                        alt=""
                                                        class="absolute block -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30 rounded-md">
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-3 py-2"><?= $data['deskripsi'] ?></td>
                                    <td class="px-3 py-2">
                                        <div class="flex justify-items-center m-auto text-center gap-2">
                                            <a href="/admin-karya-slb/edit/{{ $data['id'] }}" title="Edit">
                                                <div
                                                    class="bg-[#FA8F21] dark:bg-[#FA8F21] hover:bg-[#D87815] dark:hover:bg-[#D87815] p-1 rounded-md">
                                                    <x-svg-edit />
                                                </div>
                                            </a>
                                            <div class="div">
                                                <button
                                                    class="bg-[#FF0000] hover:bg-[#D51717] p-1 rounded-md cursor-pointer delete-button"
                                                    title="Delete" type="button" data-index="<?= $data['id'] ?>">
                                                    <x-svg-delete />
                                                </button>
                                            </div>
                                            <?php endforeach; ?>
                                            <!-- Modal -->
                                            <div id="popup-modal" tabindex="-1" aria-hidden="true"
                                                class="z-50 hidden fixed top-0 right-0 left-0 bottom-0 flex items-center justify-center backdrop-blur-md bg-opacity-50">
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
                                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                fill="none" viewBox="0 0 20 20">
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                            </svg>
                                                            <h3 class="mb-5 text-lg font-normal text-white ">
                                                                Anda Yakin Ingin Menghapus Data Ini?</h3>
                                                            <button data-modal-hide="popup-modal-ya" type="button"
                                                                class="btn border-none text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                                Ya
                                                            </button>
                                                            <button data-modal-hide="popup-modal-tidak"
                                                                aria-hidden="true" type="button"
                                                                class="btn border-none py-2.5 px-5 ms-3 text-sm font-medium text-white bg-[#FA8F21] rounded-lg hover:bg-[#D87815] hover:text-white focus:z-10 ">Tidak</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <script>
                                                document.addEventListener('DOMContentLoaded', function() {
                                                    const deleteButtons = document.querySelectorAll('.delete-button');
                                                    deleteButtons.forEach(button => {
                                                        button.addEventListener('click', function() {
                                                            // console.log(button.getAttribute('data-index'));
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
                                                                    '/admin-karya-slb/delete/' + button.getAttribute(
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
                            {{ $DATA->appends([
                                    'filterSekolah' => request('filterSekolah'),
                                    'tahun' => request('tahun'),
                                    'pencarian' => request('pencarian'),
                                ])->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/exceljs/dist/exceljs.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/xlsx/dist/xlsx.full.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/xlsx-image/dist/xlsx-image.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/xlsx-populate/browser/xlsx-populate.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('downloadExcel').addEventListener('click', async function() {
                const params = new URLSearchParams(window.location.search);
                const tahun = params.get('tahun') || '';
                const pencarian = params.get('pencarian') || '';

                try {
                    let response = await fetch(
                        `/api/karya?filterSekolah={{ auth()->user()->sekolah }}&tahun=${tahun}&pencarian=${pencarian}`
                    );
                    let result = await response.json();
                    let allData = result.data;
                    let namaSekolah = result.namaSekolah;

                    await createExcel(allData, namaSekolah);
                } catch (error) {
                    console.error("Error fetching data:", error);
                }
            });
        });

        async function createExcel(data, namaSekolah) {
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
                [`Daftar Karya ${namaSekolah}`],
                ['Tanggal Unduh: ' + formattedDate],
                [`Pengunduh: Admin ${namaSekolah}`], // Judul
                []
            ];

            const header = [
                'No',
                'Tahun Ajaran',
                // 'Nama Sekolah',
                'Judul Karya',
                'Deskripsi'
            ];

            const excelData = [...titleHeader, header];
            data.forEach((item, index) => {
                const rowData = [
                    index + 1,
                    item.tahun,
                    // item.namaSekolah,
                    item.judulKarya,
                    item.deskripsi
                ];
                excelData.push(rowData);
            });

            const workbook = new ExcelJS.Workbook();
            const sheet = workbook.addWorksheet('Karya-SLB');

            for (let i = 0; i < 6; i++) {
                sheet.addRow([]);
            }

            sheet.addRows(excelData);

            sheet.mergeCells('A7:E7');
            sheet.mergeCells('A8:E8');
            sheet.mergeCells('A9:E9');
            sheet.getCell('A7').value = `Daftar Karya ${namaSekolah}`;
            sheet.getCell('A8').value = `Tanggal Unduh: ${formattedDate}`;
            sheet.getCell('A9').value = `Pengunduh: Admin ${namaSekolah}`;

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

            const widths = [5, 20, 30, 30, 50];
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
                    col: 2,
                    row: 0
                },
                ext: {
                    width: 630,
                    height: 100
                },
            });

            const buffer = await workbook.xlsx.writeBuffer();
            const blob = new Blob([buffer], {
                type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
            });
            saveAs(blob, 'Karya-SLB.xlsx');
        }

        function showModal() {
            var modal = document.getElementById("modal-print");
            modal.classList.remove("hidden");
            modal.setAttribute("aria-hidden", "false");
        }

        function hideModal() {
            var modal = document.getElementById("modal-print");
            modal.classList.add("hidden");
            modal.setAttribute("aria-hidden", "true");
        }
    </script>

</body>

</html>
