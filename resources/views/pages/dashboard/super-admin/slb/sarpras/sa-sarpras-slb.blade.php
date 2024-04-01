<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data SLB | Sarana Prasarana</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="assets/landing/prov-lampung2.svg">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
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
                <div class="text-center items-center justify-center text-[#297785] font-bold text-[32px]">Sarpras SLB
                    Provinsi Lampung
                </div>
                <div class="">
                    <x-buttitle-landing ref="/sa-statistik-sarpras" color="#FA8F21" width="[13rem]"
                        title="Statistik Sarpras SLB"
                        extendClass="text-white text-center py-2 lg:py-2 hover:bg-[#D87815]" />
                </div>
            </div>
            <div class="rounded shadow-lg h-full border-solid border-4 border-[#297785] pt-5 pl-5 pr-3 pb-1"
                id="moving-border">
                <div class="max-h-[calc(100%-1rem)] overflow-y-auto overflow-x-auto hide-scrollbar">
                    {{-- isi konten disini --}}
                    <form class="flex flex-row gap-2">
                        <div class="basis-[20%]">
                            <select name="filterSekolah" id="filterSekolah"
                                class="z-10 inline-flex items-center py-2.5 w-full pl-2 text-sm font-medium text-center text-[#297785] border-2 border-[#297785] dark:border-[#297785] focus:border-[#FA8F21] dark:text-[#297785] rounded-lg focus:ring-none"
                                onchange="cariSekolah(this)">
                                <option value="">semua</option>
                                @foreach ($sekolah as $data)
                                    <option value="{{ $data->id }}"
                                        @if (isset($_GET['filterSekolah'])) @if ($_GET['filterSekolah'] == $data->id) selected @endif
                                        @endif>{{ $data->nama }}</option>
                                @endforeach
                            </select>
                            <script>
                                function cariSekolah(e) {
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
                            <div class="flex items-center mx-auto my-auto">
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                        <x-svg-search />
                                    </div>
                                    <input type="text" name="pencarian" id="simple-search"
                                        class="mx-auto border-2 border-[#297785] dark:border-[#297785] text-black text-sm rounded-lg focus:border-[#FA8F21] block w-full ps-10 p-2.5 dark:hover:text-black hover:text-black dark:placeholder-gray-400 placeholder-gray-400 dark:focus:ring-[#FA8F21] focus:ring-[#FA8F21]"
                                        placeholder="Search..." oninput="cekKosong(this)"
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
                            <button type="button"
                                class="text-white bg-[#FA8F21] hover:bg-[#D87815] border border-[#FA8F21] dark:border-[#FA8F21] focus:ring-2 focus:outline-none focus:ring-[#FA8F21] font-medium rounded-md text-sm px-5 py-2 text-center inline-flex items-center dark:focus:ring-[#FA8F21] dark:bg-[#FA8F21] dark:text-white dark:hover:bg-[#D87815] w-full gap-2 text-center">
                                <x-svg-print />
                                Print
                            </button>
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
                                        Tahun
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
                                        echo strlen($gedungRuang) > 15 ? substr($gedungRuang, 0, 15) . '...' : $gedungRuang;
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
                                                title="Delete" type="button" data-index="<?= $data['id'] ?>">
                                                Klik Disini
                                            </button>
                                        </div>
                                        <!-- Modal -->
                                        <div id="popup-modal" tabindex="-1" aria-hidden="true"
                                            class="z-30 hidden fixed top-0 right-0 left-[260px] bottom-0 flex items-center justify-center backdrop-blur-md bg-opacity-50">
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
                                                                    <!-- Carousel wrapper -->
                                                                    <div
                                                                        class="m-5 relative h-56 overflow-hidden rounded-lg md:h-96">
                                                                        <!-- Item 1 -->
                                                                        <div class="hidden duration-700 ease-in-out"
                                                                            data-carousel-item>
                                                                            <img src="{{ url(asset('storage/assets/a1.jpg')) }}"
                                                                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                                                alt="...">
                                                                        </div>
                                                                        <!-- Item 2 -->
                                                                        <div class="hidden duration-700 ease-in-out"
                                                                            data-carousel-item>
                                                                            <img src="{{ url(asset('storage/assets/b1.jpg')) }}"
                                                                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                                                alt="...">
                                                                        </div>
                                                                    </div>
                                                                    <!-- Slider indicators -->
                                                                    <div
                                                                        class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                                                                        <button type="button"
                                                                            class="w-3 h-3 rounded-full"
                                                                            aria-current="true" aria-label="Slide 1"
                                                                            data-carousel-slide-to="0"></button>
                                                                        <button type="button"
                                                                            class="w-3 h-3 rounded-full"
                                                                            aria-current="false" aria-label="Slide 2"
                                                                            data-carousel-slide-to="1"></button>
                                                                        <button type="button"
                                                                            class="w-3 h-3 rounded-full"
                                                                            aria-current="false" aria-label="Slide 3"
                                                                            data-carousel-slide-to="2"></button>
                                                                        <button type="button"
                                                                            class="w-3 h-3 rounded-full"
                                                                            aria-current="false" aria-label="Slide 4"
                                                                            data-carousel-slide-to="3"></button>
                                                                        <button type="button"
                                                                            class="w-3 h-3 rounded-full"
                                                                            aria-current="false" aria-label="Slide 5"
                                                                            data-carousel-slide-to="4"></button>
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
                        {{-- <div class="font-bold text-black">Jumlah : {{ $DATA->count() }}</div> --}}
                        <div class="font-bold text-black">Jumlah : {{ $DATA->total() }}</div>
                        <div class="">
                            {{ $DATA->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
