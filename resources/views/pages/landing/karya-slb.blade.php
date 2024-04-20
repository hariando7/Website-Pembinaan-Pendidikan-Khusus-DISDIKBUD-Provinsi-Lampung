<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Karya | Bidang Pembinaan Pendidikan Khusus | Disdikbud Provinsi Lampung</title>
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
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

        .box {
            border-radius: 8px;
            overflow: hidden;
        }

        .box::before {
            content: '';
            z-index: 1;
            position: absolute;
            top: -50%;
            left: -50%;
            width: 380px;
            height: 420px;
            transform-origin: bottom right;
            background: linear-gradient(0deg, transparent, #45f3ff, #45f3ff);
            animation: animate 6s linear infinite;
        }

        .box::after {
            content: '';
            z-index: 1;
            position: absolute;
            top: -50%;
            left: -50%;
            width: 380px;
            height: 420px;
            transform-origin: bottom right;
            background: linear-gradient(0deg, transparent, #45f3ff, #45f3ff);
            animation: animate 6s linear infinite;
            animation-delay: -3s;
        }

        @keyframes animate {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        form {
            position: absolute;
            inset: 5px;
            background: #494A4C;
            padding: 50px 40px;
            border-radius: 8px;
            z-index: 2;
            display: flex;
            flex-direction: column;
        }

        h2 {
            color: #45f3ff;
            font-weight: 500;
            text-align: center;
            letter-spacing: 0.1em;
        }

        .inputBox input {
            width: 100%;
            padding: 20px 10px 10px;
            background: transparent;
            outline: none;
            box-shadow: none;
            border: none;
            color: white;
            font-size: 1em;
            letter-spacing: 0.05em;
            transition: 0.5s;
            z-index: 10;
        }

        .inputBox input {
            position: relative;
            width: 100%;
            padding: 20px 10px 10px;
            background: transparent;
            outline: none;
            box-shadow: none;
            border: none;
            color: white;
            font-size: 1em;
            letter-spacing: 0.05em;
            transition: 0.5s;
            z-index: 10;
        }

        .inputBox span {
            position: absolute;
            left: 0;
            padding: 20px 0px 10px;
            pointer-events: none;
            font-size: 1em;
            color: white;
            letter-spacing: 0.05em;
            transition: 0.5s;
        }

        .inputBox input:valid~span,
        .inputBox input:focus~span {
            color: #45f3ff;
            transform: translateX(0px) translateY(-34px);
            font-size: 0.75em;
        }

        .inputBox i {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 2px;
            background: #FA8F21;
            border-radius: 4px;
            overflow: hidden;
            transition: 0.5s;
            pointer-events: none;
            z-index: 9;
        }

        .inputBox input:valid~i,
        .inputBox input:focus~i {
            height: 44px;
        }

        .links {
            display: flex;
            justify-content: space-between;
        }

        .links a {
            margin: 10px 0;
            font-size: 0.75em;
            color: #45f3ff;
            text-decoration: beige;
        }

        input[type="submit"] {
            border: none;
            outline: none;
            padding: 11px 25px;
            background: #FA8F21;
            cursor: pointer;
            border-radius: 4px;
            font-weight: 600;
            width: 100px;
            margin-top: 10px;
        }

        input[type="submit"]:active {
            opacity: 0.8;
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

<body>
    <x-layout-landing>
        <x-hero-landing title="Bidang Pembinaan Pendidikan Khusus"
            desc="Dinas Pendidikan dan Kebudayaan Provinsi Lampung Jl. Drs. Warsito No. 72 Teluk Betung Bandar Lampung, 35215"
            ref="#section2" imgPath="{{ asset('assets/landing/bg-utama.png') }}" butTitle="Selengkapnya" />
        <div id="section1" class="w-full justify-center items-start bg-white pb-10 lg:pb-0 pt-10 lg:pt-0">
            <div class="lg:w-full lg:flex p-5 lg:p-20">
                <div class="">
                    <div class="text-2xl lg:text-5xl font-bold text-black pb-5 lg:pb-10 text-center lg:text-center">
                        Karya Sekolah Luar Biasa</div>
                    <div class="text-base lg:text-lg font-thin text-black text-center text-justify">
                        SLB vokasi mengacu pada kurikulum SLB yang lebih menekankan pada pendidikan keterampilan.
                        Tujuannya adalah agar setelah lulus dari sekolah, ABK atau PDPD memiliki modal untuk lebih
                        mandiri, sehingga di masa depan tidak menjadi beban bagi keluarga atau masyarakat di sekitarnya.
                    </div>
                </div>
            </div>
        </div>
        <div id="section2" class="w-full justify-center items-start bg-white pb-10 lg:pb-0 lg:pt-0">
            <div class="lg:w-full lg:flex lg:pl-20 lg:pr-20 lg:pb-20">
                <div class="w-full rounded shadow-lg border-solid border-4 border-[#297785]" id="moving-border">
                    <div class="sm:rounded-lg p-5">
                        <form class="static bg-white mt-2 lg:-mt-5 lg:mb-0">
                            <div class="flex justify-between">
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
                                </select>
                                <div class="relative w-full">
                                    <input type="search" id="search-dropdown" name="pencarian"
                                        value="{{ isset($_GET['pencarian']) ? $_GET['pencarian'] : '' }}"
                                        class="block p-2.5 w-full h-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                        placeholder="Cari Judul Karya, Cari Sekolah" oninput="cekKosong(this)"
                                        required />
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
                        </form>
                    </div>
                    {{-- Isi Content --}}
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                        @foreach ($dummyData as $index => $data)
                            <div class="border relative h-full max-w-sm rounded overflow-hidden shadow-lg ">
                                @php
                                    $temp = $sekolah->find($data['sekolah']);
                                @endphp
                                <div class="text-center font-bold text-xl pt-5 mb-5 text-[#297785]">
                                    {{-- {{ $data['namaSekolah'] }} --}}
                                    {{ $temp['nama'] }}
                                </div>
                                <div class="flex m-auto">
                                    <img class="w-full h-[300px] w-[300px] m-auto flex rounded-md"
                                        src="{{ url(asset('storage/' . $data['gambar'])) }}"
                                        alt="Gambar {{ $index + 1 }}">
                                </div>
                                <div class="px-6 py-4">
                                    <div class="font-bold text-xl mb-2 text-[#297785]">{{ $data['nama'] }}</div>
                                    <p class="text-gray-700 text-base">
                                        {{ $data['deskripsi'] }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="relative flex justify-between mt-5">
                        <div class="font-bold text-black">Jumlah : {{ count($dummyData) }}</div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </x-layout-landing>
</body>

</html>
