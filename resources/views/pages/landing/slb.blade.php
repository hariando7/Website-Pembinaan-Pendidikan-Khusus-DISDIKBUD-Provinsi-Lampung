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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

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
                    <div class="shadow-md sm:rounded-lg">
                        <form class="w-full mb-5">
                            <div class="flex">
                                <select name="filterSekolah" id="filterSekolah"
                                    class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100"
                                    onchange="cariSekolah(this)">
                                    <option value="">semua</option>
                                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg>
                                    @foreach ($sekolah as $data)
                                        <option value="{{ $data['id'] }}"
                                            @if (isset($_GET['filterSekolah'])) @if ($_GET['filterSekolah'] == $data['id']) selected @endif
                                            @endif>{{ $data['nama'] }}</option>
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
                                <div class="relative w-full">
                                    <input type="search" id="search-dropdown" name="pencarian"
                                        value="{{ isset($_GET['pencarian']) ? $_GET['pencarian'] : '' }}"
                                        class="block p-2.5 w-full h-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                        placeholder="Cari data" oninput="cekKosong(this)" required />
                                    <button type="submit"
                                        class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-[#2F8386] rounded-e-lg border border-[#2F8386] hover:bg-[#FA8F21] focus:ring-4 focus:outline-none focus:ring-#FA8F21">
                                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 20 20">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                        </svg>
                                        <span class="sr-only">Search</span>
                                    </button>
                                    <script>
                                        function cekKosong(e) {
                                            if (e.value === '') {
                                                window.location.href = window.location.origin + window.location.pathname;
                                            }
                                        }
                                    </script>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="relative w-full text-sm text-left rtl:text-right text-gray-500 bg-white">
                            <thead class="text-xs text-white uppercase bg-[#2F8386]">
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
        </div>
    </x-layout-landing>
</body>

</html>
