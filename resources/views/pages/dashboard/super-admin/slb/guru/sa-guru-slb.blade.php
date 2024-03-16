<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data SLB | Guru</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="assets/landing/prov-lampung2.svg">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />
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
                <div class="text-center items-center justify-center text-[#297785] font-bold text-[32px]">Guru SLB
                    Provinsi Lampung
                </div>
                <div class="">
                    <x-buttitle-landing ref="/sa-statistik-guru" color="#FA8F21" width="[13rem]"
                        title="Statistik Guru SLB"
                        extendClass="text-white text-center py-2 lg:py-2 hover:bg-[#D87815]" />
                </div>
            </div>
            <div class="rounded shadow-lg h-full border-solid border-4 border-[#297785] pt-5 pl-5 pr-3 pb-1"
                id="moving-border">
                <div class="max-h-[calc(100%-1rem)] overflow-y-auto overflow-x-auto hide-scrollbar">
                    {{-- isi konten disini --}}
                    <div class="flex flex-row gap-2">
                        <div class="basis-[20%]">
                            <form>
                                <div class="relative">
                                    <button id="dropdown-button" data-dropdown-toggle="dropdown"
                                        class="z-10 inline-flex items-center py-2.5 w-full pl-2 text-sm font-medium text-center text-[#297785] border-2 border-[#297785] dark:border-[#297785] focus:border-[#FA8F21] dark:text-[#297785] rounded-lg focus:ring-none"
                                        type="button" onclick="toggleDropdown()">Filter Nama Sekolah
                                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg>
                                    </button>
                                    <div id="dropdown"
                                        class="absolute z-20 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-[#FA8F21] top-full mt-1">
                                        <ul class="py-2 text-sm text-gray-200 dark:text-gray-200"
                                            aria-labelledby="dropdown-button">
                                            <li>
                                                <a href="#" onclick="filterGender('All')"
                                                    class="block px-4 py-2 hover:bg-[#D87815] dark:hover:bg-[#D87815] dark:hover:text-white hover:text-white">Bina
                                                    Insani</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="basis-[70%]">
                            <form class="flex items-center mx-auto my-auto">
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                        <x-svg-search />
                                    </div>
                                    <input type="text" id="simple-search"
                                        class="mx-auto border-2 border-[#297785] dark:border-[#297785] text-black text-sm rounded-lg focus:border-[#FA8F21] block w-full ps-10 p-2.5 dark:hover:text-black hover:text-black dark:placeholder-gray-400 placeholder-gray-400 dark:focus:ring-[#FA8F21] focus:ring-[#FA8F21]"
                                        placeholder="Search..." oninput="searchTable()" required />
                                </div>
                            </form>
                        </div>
                        <div class="basis-[10%]">
                            <button type="button"
                                class="text-white bg-[#FA8F21] hover:bg-[#D87815] border border-[#FA8F21] dark:border-[#FA8F21] focus:ring-2 focus:outline-none focus:ring-[#FA8F21] font-medium rounded-md text-sm px-5 py-2 text-center inline-flex items-center dark:focus:ring-[#FA8F21] dark:bg-[#FA8F21] dark:text-white dark:hover:bg-[#D87815] w-full gap-2 text-center">
                                <x-svg-print />
                                Print
                            </button>
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
                                        Tahun
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Nama Guru
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        JK
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        NIP
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        PNS/
                                        NON
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Sertifikasi/
                                        NON
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Mengajar Bidang Studi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $dummyData = [
                                    [
                                        'tahun' => '2024-03-13 23.59',
                                        'namaGuru' => 'John Doe',
                                        'jenisKelamin' => 'Laki-laki',
                                        'NIP' => '1234567890',
                                        'statusPNS' => 'PNS',
                                        'sertifikasi' => 'Sertifikasi',
                                        'bidangStudi' => 'Matematika',
                                    ],
                                    [
                                        'tahun' => '2024-03-13 23.59',
                                        'namaGuru' => 'Jane Doe',
                                        'jenisKelamin' => 'Perempuan',
                                        'NIP' => '0987654321',
                                        'statusPNS' => 'Non-PNS',
                                        'sertifikasi' => 'Non-Sertifikasi',
                                        'bidangStudi' => 'Bahasa Inggris',
                                    ],
                                ];
                                ?>
                                <?php foreach ($dummyData as $index => $data): ?>
                                <tr
                                    class="bg-white border-b dark:bg-white dark:border-gray-700 border-gray-700 hover:bg-[#C4DDDE] dark:hover:bg-[#C4DDDE] text-black hover:text-whitee">
                                    <td class="px-3 py-2"><?= $index + 1 ?></td>
                                    <td class="px-3 py-2"><?= $data['tahun'] ?></td>
                                    <td class="px-3 py-2">
                                        <?php
                                        $namaGuru = $data['namaGuru'];
                                        echo strlen($namaGuru) > 15 ? substr($namaGuru, 0, 15) . '...' : $namaGuru;
                                        ?>
                                    </td>
                                    <td class="px-3 py-2"><?= $data['jenisKelamin'] ?></td>
                                    <td class="px-3 py-2"><?= $data['NIP'] ?></td>
                                    <td class="px-3 py-2"><?= $data['statusPNS'] ?></td>
                                    <td class="px-3 py-2"><?= $data['sertifikasi'] ?></td>
                                    <td class="px-3 py-2"><?= $data['bidangStudi'] ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="relative flex justify-between mt-5">
                        <div class="font-bold text-black">Jumlah :</div>
                        <div class="">
                            <nav aria-label="Page navigation example">
                                <ul class="inline-flex -space-x-px text-sm gap-2">
                                    <li>
                                        <a href="#"
                                            class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-[#FA8F21] hover:text-[#D87815] dark:text-[#FA8F21] font-bold">Previous</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center justify-center px-3 h-8 leading-tight text-black bg-[#FCC68F] rounded-lg hover:bg-[#FA8F21] dark:bg-[#FCC68F] dark:text-black dark:hover:bg-[#FA8F21] dark:hover:text-white hover:text-white font-bold">1</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center justify-center px-3 h-8 leading-tight text-black bg-[#FCC68F] rounded-lg hover:bg-[#FA8F21] dark:bg-[#FCC68F] dark:text-black dark:hover:bg-[#FA8F21] dark:hover:text-white hover:text-white font-bold">2</a>
                                    </li>
                                    <li>
                                        <a href="#" aria-current="page"
                                            class="flex items-center justify-center px-3 h-8 leading-tight text-black bg-[#FCC68F] rounded-lg hover:bg-[#FA8F21] dark:bg-[#FCC68F] dark:text-black dark:hover:bg-[#FA8F21] dark:hover:text-white hover:text-white font-bold">3</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center justify-center px-3 h-8 leading-tight text-black bg-[#FCC68F] rounded-lg hover:bg-[#FA8F21] dark:bg-[#FCC68F] dark:text-black dark:hover:bg-[#FA8F21] dark:hover:text-white hover:text-white font-bold">4</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center justify-center px-3 h-8 leading-tight text-black bg-[#FCC68F] rounded-lg hover:bg-[#FA8F21] dark:bg-[#FCC68F] dark:text-black dark:hover:bg-[#FA8F21] dark:hover:text-white hover:text-white font-bold ">5</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-[#FA8F21] hover:text-[#D87815] dark:text-[#FA8F21] font-bold">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
