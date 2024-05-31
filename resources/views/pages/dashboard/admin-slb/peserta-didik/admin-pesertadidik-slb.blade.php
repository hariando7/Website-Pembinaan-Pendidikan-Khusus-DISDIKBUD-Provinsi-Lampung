<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Peserta Didik SLB</title>
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
</head>
@use('App\Models\Sekolah')
@php
    $sekolah = Sekolah::find(auth()->user()->sekolah);
@endphp

<body class="z-10 bg-white">
    <div>
        <x-dashboard-side-bar-slb />
        <div class="full-height h-screen pb-[85px] pl-[280px] pr-5 pt-2">
            <div class="flex pb-2">
                <div class="w-[40%] justify-center text-left items-center text-[24px] font-bold text-[#297785] m-auto">
                    Peserta Didik
                    SLB - {{ $sekolah->nama }}
                </div>
                <div class="flex w-[60%] justify-end gap-5">
                    <!-- Modal toggle -->
                    <x-admin-statistik-pd />
                    <x-notifikasi-slb title="Notifikasi Dinas" :notifications="$pengumuman" />
                    <div class="right-0 flex justify-end">
                        <x-buttitle-landing ref="/admin-pesertadidik-slb/tambah" color="#FA8F21" width="[13rem]"
                            title="+ Tambah Peserta Didik"
                            extendClass="text-white text-center py-2 lg:py-2 hover:bg-[#D87815]" />
                    </div>
                </div>
            </div>
            <div class="h-full rounded border-4 border-solid border-[#297785] pb-3 pl-5 pr-5 pt-5 shadow-lg"
                id="moving-border">
                <div class="hide-scrollbar max-h-[calc(100%-1rem)] overflow-y-auto">
                    {{-- isi konten disini --}}
                    <div class="m-auto flex items-center justify-center">
                        <x-toast-tambah />
                        <x-toast-edit />
                        <x-toast-hapus />
                    </div>
                    <form class="flex flex-row gap-2">
                        <div class="basis-[20%]">
                            <select name="tahun" id="tahun"
                                class="focus:ring-none z-10 inline-flex w-full items-center rounded-lg border-2 border-[#297785] py-2.5 pl-2 text-center text-sm font-medium text-[#297785] focus:border-[#FA8F21] dark:border-[#297785] dark:text-[#297785]"
                                onchange="filterTahun(this)">
                                <option value="">Semua Tahun</option>
                                @foreach ($daftarTahun as $tahun)
                                    <option value="{{ $tahun->tahun }}"
                                        @if (isset($_GET['tahun'])) @if ($_GET['tahun'] == $tahun->tahun) selected @endif
                                        @endif>{{ $tahun->tahun }}</option>
                                @endforeach
                            </select>
                            <script>
                                function filterTahun(e) {
                                    console.log(e.value);
                                    if (e.value === '') {
                                        window.location.href = window.location.origin + window.location.pathname;
                                    } else {
                                        e.form.submit();
                                    }
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
                                        class="mx-auto block w-full rounded-lg border-2 border-[#297785] p-2.5 ps-10 text-sm text-black placeholder-gray-400 hover:text-black focus:border-[#FA8F21] focus:ring-[#FA8F21] dark:border-[#297785] dark:placeholder-gray-400 dark:hover:text-black dark:focus:ring-[#FA8F21]"
                                        placeholder="Cari Nama Siswa, Jenis Kelamin, Jenis Ketunaan dan Kelas"
                                        oninput="cekKosong(this)"
                                        value="{{ isset($_GET['pencarian']) ? $_GET['pencarian'] : '' }}" />
                                    <script>
                                        function cekKosong(e) {
                                            if (e.value === '') {
                                                window.location.href = window.location.origin + window.location.pathname;
                                            }
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="basis-[10%]">
                            <button id="print-button" type="button" onclick="showModal()"
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
                                            <button data-modal-hide="static-modal" type="button" id="downloadExcel"
                                                class="btn rounded-lg border-none bg-[#FA8F21] px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-[#D87815] hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300">Download
                                                Excel</button>

                                        </div>
                                        <!-- Button untuk cetak -->
                                        {{-- <button id="download-pdf" onclick="printPDF()"
                                                class="btn border-none bg-[#FA8F21] hover:bg-[#D87815] hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center text-white">
                                                Download PDF
                                            </button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="relative mt-5 overflow-x-auto overflow-y-auto shadow-sm sm:rounded-lg">
                        <table class="w-full bg-white text-left text-sm text-gray-500 rtl:text-right">
                            <thead class="bg-[#2F8386] text-xs uppercase text-white dark:bg-[#2F8386] dark:text-white">
                                <tr>
                                    <th scope="col" class="px-3 py-2">
                                        No
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Tahun
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Nama Siswa
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Jenis Kelamin
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Jenis Ketunaan
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Kelas
                                    </th>
                                    {{-- <th scope="col" class="px-3 py-2">
                                        Romble
                                    </th> --}}
                                    <th scope="col" class="px-3 py-2">
                                        Aksi
                                    </th>
                                </tr>
                            <tbody>
                                <?php
                                // $dummyData = [
                                //     [
                                //         'id' => 1,
                                //         'tahun' => '2023',
                                //         'namaSiswa' => 'Rizkyaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
                                //         'jenisKelamin' => 'Laki-laki',
                                //         'jenisKetunaan' => 'Tuna Rungu',
                                //         'kelas' => 'XII-A',
                                //         'romble' => '1A',
                                //     ],
                                // ];
                                ?>
                                <?php foreach ($dummyData as $index => $data): ?>
                                <tr
                                    class="hover:text-whitee border-b border-gray-700 bg-white text-black hover:bg-[#C4DDDE] dark:border-gray-700 dark:bg-white dark:hover:bg-[#C4DDDE]">
                                    <td class="px-3 py-2">{{ ($DATA->currentPage() - 1) * 10 + $index + 1 }}</td>
                                    <td class="px-3 py-2"><?= $data['tahun'] ?></td>
                                    <td class="px-3 py-2">
                                        <?php
                                        $namaSiswa = $data['namaSiswa'];
                                        echo strlen($namaSiswa) > 100 ? substr($namaSiswa, 0, 100) . '...' : $namaSiswa;
                                        ?>
                                    </td>
                                    <td class="px-3 py-2"><?= $data['jenisKelamin'] ?></td>
                                    <td class="px-3 py-2"><?= $data['jenisKetunaan'] ?></td>
                                    <td class="px-3 py-2"><?= $data['kelas'] ?></td>
                                    <td class="px-3 py-2">
                                        <div class="m-auto flex justify-items-center gap-2 text-center">
                                            <a href="/admin-pesertadidik-slb/edit/{{ $data['id'] }}" title="Edit">
                                                <div
                                                    class="rounded-md bg-[#FA8F21] p-1 hover:bg-[#D87815] dark:bg-[#FA8F21] dark:hover:bg-[#D87815]">
                                                    <x-svg-edit />
                                                </div>
                                            </a>
                                            <div class="div">
                                                <button
                                                    class="delete-button cursor-pointer rounded-md bg-[#FF0000] p-1 hover:bg-[#D51717]"
                                                    title="Delete" type="button" data-index="<?= $data['id'] ?>">
                                                    <x-svg-delete />
                                                </button>
                                            </div>
                                            <?php endforeach; ?>
                                            <!-- Modal -->
                                            <div id="popup-modal" tabindex="-1" aria-hidden="true"
                                                class="fixed bottom-0 left-[260px] right-0 top-0 z-50 flex hidden items-center justify-center bg-opacity-50 backdrop-blur-md">
                                                <div class="relative max-h-full w-full max-w-md p-4">
                                                    <div class="relative rounded-lg bg-[#297785] shadow">
                                                        <button type="button"
                                                            class="absolute end-2.5 top-3 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-white hover:bg-[#D87815] hover:text-white"
                                                            data-modal-hide="popup-modal-delete">
                                                            <svg class="h-3 w-3" aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg" fill="white"
                                                                viewBox="0 0 14 14">
                                                                <path stroke="white" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                        <div class="p-4 text-center md:p-5">
                                                            <svg class="mx-auto mb-4 h-12 w-12 text-white"
                                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                fill="none" viewBox="0 0 20 20">
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                            </svg>
                                                            <h3 class="mb-5 text-lg font-normal text-white">
                                                                Anda Yakin Ingin Menghapus Data Ini?</h3>
                                                            <button data-modal-hide="popup-modal-ya" type="button"
                                                                class="btn inline-flex items-center rounded-lg border-none bg-red-600 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 dark:focus:ring-red-800">
                                                                Ya
                                                            </button>
                                                            <button data-modal-hide="popup-modal-tidak"
                                                                aria-hidden="true" type="button"
                                                                class="btn ms-3 rounded-lg border-none bg-[#FA8F21] px-5 py-2.5 text-sm font-medium text-white hover:bg-[#D87815] hover:text-white focus:z-10">Tidak</button>
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
                                                                    '/admin-pesertadidik-slb/delete/' + button.getAttribute(
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
                    <div class="relative mt-5 flex justify-between">
                        {{-- <div class="font-bold text-black">Jumlah : {{ $DATA->count() }}</div> --}}
                        <div class="font-bold text-black">Jumlah : {{ $DATA->total() }}</div>
                        {{ $DATA->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('downloadExcel').addEventListener('click', async function() {
                let data = await fetch('/api/peserta-didik');
                let allData = await data.json();

                function createExcel(data) {
                    const sekolahNama = @json($sekolah->nama);
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
                        ['Daftar Peserta Didik ' + sekolahNama], // Judul
                        ['Tanggal Unduh: ' + formattedDate], // Waktu download
                        ['Pengunduh: Admin ' + sekolahNama], // Judul
                        []
                    ];

                    const header = [
                        'No',
                        'Tahun',
                        'Nama Sekolah',
                        'Nama Siswa',
                        'Jenis Kelamin',
                        'Jenis Ketunaan',
                        'Kelas',
                    ];

                    const excelData = [...titleHeader, header];
                    data.forEach(function(item, index) {
                        const rowData = [
                            index + 1, // No
                            item.tahun,
                            item.namaSekolah,
                            item.namaSiswa,
                            item.jenisKelamin,
                            item.jenisKetunaan,
                            item.kelas,
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

                    // const ws = XLSX.utils.aoa_to_sheet(excelData);
                    const wb = XLSX.utils.book_new();
                    XLSX.utils.book_append_sheet(wb, ws, 'PesertaDidik-SLB');

                    XLSX.writeFile(wb, 'PesertaDidik-SLB.xlsx');
                }

                createExcel(allData);
            });
        });

        function showModal() {
            // Dapatkan modal
            var modal = document.getElementById("modal-print");
            // Tampilkan modal
            modal.classList.remove("hidden");
            modal.setAttribute("aria-hidden", "false");
        }
        // Close modal
        function hideModal() {
            // Dapatkan modal
            var modal = document.getElementById("modal-print");
            // Sembunyikan modal
            modal.classList.add("hidden");
            modal.setAttribute("aria-hidden", "true");
        }
    </script>
</body>

</html>
