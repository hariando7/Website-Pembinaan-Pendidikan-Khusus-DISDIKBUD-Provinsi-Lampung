<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SLB | Bidang Pembinaan Pendidikan Khusus | Disdikbud Provinsi Lampung</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="/assets/landing/prov-lampung2.svg">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />

    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Slick Carousel JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

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

<body>
    <x-layout-landing>
        <x-hero-landing title="Bidang Pembinaan Pendidikan Khusus"
            desc="Dinas Pendidikan dan Kebudayaan Provinsi Lampung Jl. Drs. Warsito No. 72 Teluk Betung Bandar Lampung, 35215"
            ref="#section2" imgPath="{{ asset('assets/landing/bg-utama.png') }}" butTitle="Selengkapnya" />
        <div id="section1" class="w-full justify-center items-start bg-white pb-10 lg:pb-0 pt-10 lg:pt-0">
            <div class="lg:w-full lg:flex p-5 lg:p-20">
                <div class="text-center lg:w-full">
                    <h1 class="text-2xl lg:text-5xl font-bold text-black pb-5 lg:pb-10 text-center lg:text-center">
                        Alamat
                        SLB Provinsi Lampung</h1>
                    <p class="lg:text-center text-base lg:text-lg font-thin text-black text-justify">
                        Daftar Sekolah Luar Biasa (SLB) Provinsi Lampung
                    </p>
                </div>
            </div>
        </div>
        <div id="section2" class="w-full justify-center items-start bg-white pb-10 lg:pb-0 pt-10 lg:pt-0">
            <div class="lg:w-full lg:flex p-5 lg:pl-20 lg:pr-20 lg:pb-20">
                <div class="w-full rounded shadow-lg border-solid border-4 border-[#297785] p-5" id="moving-border">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <div
                            class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
                            <div>
                                <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio"
                                    class="inline-flex items-center text-black bg-white border border-[#2F8386] focus:outline-none hover:bg-[#2F8386] focus:ring-4 focus:ring-[#2F8386] font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-white dark:text-black hover:text-white dark:border-[#2F8386] dark:hover:bg-[#2F8386] dark:hover:border-[#2F8386] hover:border-[#2F8386] dark:focus:ring-[#2F8386]"
                                    type="button">
                                    <svg class="w-3 h-3 text-gray-400 dark:text-gray-400 me-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z" />
                                    </svg>
                                    Pilih Sekolah
                                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                </button>
                                {{-- <x-pengumuman-slb /> --}}
                            </div>
                            <label for="table-search" class="sr-only">Search</label>
                            <form class="relative">
                                <div
                                    class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-400 dark:text-gray-400" aria-hidden="true"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input type="text" name="pencarian" value="{{ isset($_GET['pencarian']) ? $_GET['pencarian'] : '' }}" id="table-search"
                                class="block p-2 ps-10 text-sm text-black border border-black rounded-lg w-80 bg-white focus:ring-[#2F8386] focus:border-[#2F8386] dark:bg-white dark:border-[#2F8386] dark:placeholder-[#2F8386] dark:text-black dark:focus:ring-[#2F8386] dark:focus:border-[#2F8386]"
                                placeholder="Search for items" oninput="cekKosong(this)">
                                <script>
                                    function cekKosong(e) {
                                        if (e.value === '') {
                                            window.location.href = window.location.origin + window.location.pathname;
                                        }
                                    }
                                </script>
                            </form>
                        </div>
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 bg-white">
                            <thead class="text-xs text-white uppercase bg-[#2F8386] dark:bg-[#2F8386] dark:text-white">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        No
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nama Sekolah
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Kab/Kota
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Kecamatan
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Alamat
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Jenis Ketunaan
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Website Sekolah
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // $dummyData = [
                                //     [
                                //         'no' => 1,
                                //         'namaSekolah' => 'SLB KURNIA PONCOWATI',
                                //         'kabkota' => 'Kab. Lampung Tengah',
                                //         'kecamatan' => 'Kec Terbanggi Besar',
                                //         'alamat' => 'https://maps.app.goo.gl/U96xNprPAqJEHy6S7',
                                //         'jenisKetunaan' => 'Lorem',
                                //         'websiteSekolah' => 'https://www.example.com/school_a',
                                //     ],
                                ?>
                                @foreach ($dummyData as $index => $data)
                                    <tr
                                        class="bg-white border-b dark:bg-white dark:border-gray-700 border-gray-700 hover:bg-[#C4DDDE] dark:hover:bg-[#C4DDDE] text-black hover:text-white">
                                        <td class="px-6 py-4">{{ $index + 1 }}</td>
                                        <td class="px-6 py-4">{{ $data['namaSekolah'] }}</td>
                                        <td class="px-6 py-4">{{ $data['kabkota'] }}</td>
                                        <td class="px-6 py-4">{{ $data['kecamatan'] }}</td>
                                        <td class="px-6 py-4">
                                            <a class="font-medium text-blue-500 dark:text-blue-500 hover:underline"
                                                href="{{ $data['alamat'] }}">GoogleMaps</a>
                                        </td>
                                        <td class="px-6 py-4">{{ $data['jenisKetunaan'] }}</td>
                                        <td class="px-6 py-4">
                                            <a href="{{ $data['websiteSekolah'] }}"
                                                class="font-medium text-blue-500 dark:text-blue-500 hover:underline">Link
                                                Website</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-layout-landing>
</body>

</html>
