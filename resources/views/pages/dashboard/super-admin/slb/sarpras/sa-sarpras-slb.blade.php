<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data SLB | Sarana Prasarana</title>
    <link rel="icon" type="image/x-icon" href="/assets/landing/prov-lampung2.svg">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
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

<body class="bg-white z-10">
    <div>
        <x-dashboard-sidebar-superadmin />
        <div class="p-4 sm:ml-64 min-h-screen text-sm">
            <div class="lg:flex lg:justify-between pb-2 gap-5">
                <div
                    class="text-center items-center justify-center text-[#297785] font-bold text-[20px] lg:text-[28px]">
                    Sarpras SLB
                    Provinsi Lampung
                </div>
                <div class="">
                    <x-sa-statistik-sarpras />
                    <button data-modal-target="select-modal5" data-modal-toggle="select-modal5"
                        title="Visualisasi Statistik Sarpras SLB Berdasarkan Sekolah dan Tahun Ajaran"
                        class="btn border-none text-white text-center py-2 lg:py-2 my-2 flex items-center justify-center rounded-md bg-[#FA8F21] hover:bg-[#D87815] focus:ring-4 pl-2 pr-2"
                        type="button">
                        Statistik Sarpras SLB
                    </button>
                </div>
            </div>
            <div class="rounded shadow-lg h-full border-solid border-4 border-[#297785] pt-5 pl-5 pr-3 pb-1"
                id="moving-border">
                <div class="max-h-[calc(100%-1rem)] overflow-y-auto overflow-x-auto hide-scrollbar">
                    {{-- isi konten disini --}}
                    <form class="flex flex-row gap-2">
                        <div class="basis-[20%]">
                            <select name="filterSekolah" id="filterSekolah"
                                title="Filter Berdasarkan Sekolah Luar Biasa"
                                class="z-10 inline-flex items-center py-2.5 w-full pl-2 text-sm font-medium text-center text-[#297785] border-2 border-[#297785] dark:border-[#297785] focus:border-[#FA8F21] dark:text-[#297785] rounded-lg focus:ring-none"
                                onchange="cariSekolah(this)">
                                <option value="">Semua Sekolah</option>
                                @foreach ($sekolah as $data)
                                    <option value="{{ $data->id }}"
                                        @if (isset($_GET['filterSekolah']) && $_GET['filterSekolah'] == $data->id) selected @endif>{{ $data->nama }}</option>
                                @endforeach
                            </select>
                            <script>
                                function cariSekolah(e) {
                                    const params = new URLSearchParams(window.location.search);
                                    if (e.value === '') {
                                        params.delete('filterSekolah');
                                    } else {
                                        params.set('filterSekolah', e.value);
                                    }
                                    window.location.search = params.toString();
                                }
                            </script>
                        </div>
                        <div class="basis-[20%]">
                            <select name="tahun" id="tahun" title="Filter Berdasarkan Tahun Ajaran"
                                class="focus:ring-none z-10 inline-flex w-full items-center rounded-lg border-2 border-[#297785] py-2.5 pl-2 text-center text-sm font-medium text-[#297785] focus:border-[#FA8F21] dark:border-[#297785] dark:text-[#297785]"
                                onchange="filterTahun(this)">
                                <option value="">Semua Tahun</option>
                                @foreach ($daftarTahun as $tahun)
                                    <option value="{{ $tahun->tahun }}"
                                        @if (isset($_GET['tahun']) && $_GET['tahun'] == $tahun->tahun) selected @endif>{{ $tahun->tahun }}</option>
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
                        <div class="basis-[50%]">
                            <div class="flex items-center mx-auto my-auto">
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                        <x-svg-search />
                                    </div>
                                    <input type="text" name="pencarian" id="simple-search"
                                        class="mx-auto border-2 border-[#297785] dark:border-[#297785] text-black text-sm rounded-lg focus:border-[#FA8F21] block w-full ps-10 p-2.5 dark:hover:text-black hover:text-black dark:placeholder-gray-400 placeholder-gray-400 dark:focus:ring-[#FA8F21] focus:ring-[#FA8F21]"
                                        placeholder="Cari Nama Sekolah, Gedung Ruang, Kondisi..."
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
                            </div>
                        </div>
                        <div class="basis-[10%]">
                            <button id="print-button" type="button" onclick="showModal()" type="button"
                                class="btn border-none text-white text-center w-[4rem] lg:w-[8rem] flex items-center justify-center rounded-md bg-[#FA8F21] hover:bg-[#D87815] gap-2">
                                <x-svg-excel />
                                <span class="hidden sm:inline">Unduh</span>
                            </button>
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
                                                    Cetak Data<br>
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
                                                Excel
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                        Nama Sekolah
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Gedung/Ruang
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Jumlah/Vol
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Kondisi
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Gambar
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Catatan
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // $dummyData = [
                                //     [
                                //         'id' => 1,
                                //         'tahun' => '2023',
                                //         'gedungRuang' => 'Gedung A',
                                //         'jumlahVol' => '100',
                                //         'totalLuas' => '500',
                                //         'kondisi' => 'Baik',
                                //         'catatan' => 'Tidak ada catatan',
                                //     ],
                                // ];
                                ?>
                                <?php foreach ($dummyData as $index => $data): ?>
                                <tr
                                    class="bg-white border-b dark:bg-white dark:border-gray-700 border-gray-700 hover:bg-[#C4DDDE] dark:hover:bg-[#C4DDDE] text-black hover:text-whitee">
                                    <td class="px-3 py-2">{{ ($DATA->currentPage() - 1) * 10 + $index + 1 }}</td>
                                    <td class="px-3 py-2"><?= $data['tahun'] ?></td>
                                    <td class="px-3 py-2"><?= $data['namaSekolah'] ?></td>
                                    <td class="px-3 py-2">
                                        <?php
                                        $gedungRuang = $data['gedungRuang'];
                                        echo strlen($gedungRuang) > 100 ? substr($gedungRuang, 0, 100) . '...' : $gedungRuang;
                                        ?>
                                    </td>
                                    <td class="px-3 py-2"><?= $data['jumlahVol'] ?></td>
                                    {{-- <td class="px-3 py-2">
                                        <img src="{{ url(asset('storage/' . $data['daftarGambar'])) }}" alt="">
                                        @dd($data['gambar'])
                                    </td> --}}
                                    <td class="px-3 py-2"><?= $data['kondisi'] ?></td>
                                    <td class="px-3 py-2">
                                        <div class="div">
                                            <button
                                                class="font-medium text-blue-500 dark:text-blue-500 hover:underline delete-button"
                                                title="Delete" type="button" data-index="<?= $index ?>">
                                                Klik Disini
                                            </button>
                                        </div>
                                        <!-- Modal -->
                                        @php
                                            $temp = $gambar->where('saranaPrasarana', $data['id'])->all();
                                        @endphp
                                        <div id="popup-modal-{{ $index }}" tabindex="-1" aria-hidden="true"
                                            class="z-30 hidden fixed top-0 right-0 left-0 bottom-0 flex items-center justify-center backdrop-blur-md bg-opacity-50">
                                            <div class="relative p-4 w-full max-w-2xl max-h-full">
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
                                                        {{-- konten disini --}}
                                                        <div class="grid grid-cols-1 gap-5">
                                                            <div class="w-full rounded overflow-hidden">
                                                                <div id="default-carousel" class="relative w-full z-0"
                                                                    data-carousel="slide">
                                                                    @if (empty($temp))
                                                                        <p class="text-white">Tidak ada gambar yang
                                                                            dimasukkan</p>
                                                                    @else
                                                                        <!-- Carousel wrapper -->
                                                                        <div
                                                                            class="m-5 relative h-56 overflow-hidden rounded-lg md:h-96">
                                                                            @foreach ($temp as $item)
                                                                                <div class="hidden duration-700 ease-in-out"
                                                                                    data-carousel-item>
                                                                                    <img src="{{ url(asset('storage/' . $item['gambar'])) }}"
                                                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                                                        alt="...">
                                                                                </div>
                                                                            @endforeach
                                                                        </div>
                                                                        <!-- Slider indicators -->
                                                                        <div
                                                                            class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                                                                            @foreach ($temp as $index => $item)
                                                                                <button type="button"
                                                                                    class="w-3 h-3 rounded-full"
                                                                                    aria-current="true"
                                                                                    aria-label="Slide 1"
                                                                                    data-carousel-slide-to="{{ $index }}"></button>
                                                                            @endforeach
                                                                        </div>
                                                                        <!-- Slider controls -->
                                                                        <button type="button"
                                                                            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                                                            data-carousel-prev>
                                                                            <span
                                                                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                                                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                                                                                    aria-hidden="true"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    fill="none" viewBox="0 0 6 10">
                                                                                    <path stroke="currentColor"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width="2"
                                                                                        d="M5 1 1 5l4 4" />
                                                                                </svg>
                                                                                <span class="sr-only">Previous</span>
                                                                            </span>
                                                                        </button>
                                                                        <button type="button"
                                                                            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                                                            data-carousel-next>
                                                                            <span
                                                                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                                                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                                                                                    aria-hidden="true"
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    fill="none" viewBox="0 0 6 10">
                                                                                    <path stroke="currentColor"
                                                                                        stroke-linecap="round"
                                                                                        stroke-linejoin="round"
                                                                                        stroke-width="2"
                                                                                        d="m1 9 4-4-4-4" />
                                                                                </svg>
                                                                                <span class="sr-only">Next</span>
                                                                            </span>
                                                                        </button>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
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
                                                        const modal = document.getElementById('popup-modal-' + index);
                                                        modal.classList.remove('hidden');
                                                        modal.setAttribute('aria-hidden', 'false');
                                                        modal.setAttribute('tabindex', '0');
                                                        const closeButton = modal.querySelector(
                                                            '[data-modal-hide="popup-modal-delete"]');
                                                        closeButton.addEventListener('click', () => {
                                                            modal.classList.add('hidden');
                                                            modal.setAttribute('aria-hidden', 'true');
                                                            modal.setAttribute('tabindex', '-1');
                                                        });
                                                    });
                                                });
                                            });
                                        </script>
                                    </td>
                                    <td class="px-3 py-2"><?= $data['catatan'] ?></td>
                                </tr>
                                <?php endforeach; ?>
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
                const filterSekolah = params.get('filterSekolah') || '';
                const tahun = params.get('tahun') || '';
                const pencarian = params.get('pencarian') || '';

                const dataUrl =
                    `/api/sarana-prasarana?filterSekolah=${filterSekolah}&tahun=${tahun}&pencarian=${pencarian}`;

                try {
                    let response = await fetch(dataUrl);
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
                [`Daftar Sarpras SLB Provinsi Lampung || ${namaSekolah}`],
                ['Tanggal Unduh: ' + formattedDate],
                ['Pengunduh: Super Admin'],
                []
            ];

            const header = [
                'No',
                'Tahun Ajaran',
                'Nama Sekolah',
                'Gedung Ruang',
                'Jumlah',
                'Kondisi',
                'Catatan'
            ];

            const excelData = [...titleHeader, header];
            data.forEach((item, index) => {
                const rowData = [
                    index + 1,
                    item.tahun,
                    item.namaSekolah,
                    item.gedungRuang,
                    item.jumlahVol,
                    item.kondisi,
                    item.catatan
                ];
                excelData.push(rowData);
            });

            const workbook = new ExcelJS.Workbook();
            const sheet = workbook.addWorksheet('Sarpras-SLB');

            for (let i = 0; i < 6; i++) {
                sheet.addRow([]);
            }

            sheet.addRows(excelData);

            sheet.mergeCells('A7:G7');
            sheet.mergeCells('A8:G8');
            sheet.mergeCells('A9:G9');
            sheet.getCell('A7').value = `Daftar Sarpras SLB Provinsi Lampung || ${namaSekolah}`;
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

            const widths = [5, 20, 30, 30, 15, 20, 50];
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
                    width: 880,
                    height: 100
                },
            });

            const buffer = await workbook.xlsx.writeBuffer();
            const blob = new Blob([buffer], {
                type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
            });
            saveAs(blob, 'Sarpras-SLB-ProvinsiLampung.xlsx');
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
