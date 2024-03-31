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
                    <div class="text-base lg:text-lg font-thin text-black text-justify">
                        SLB vokasi mengacu pada kurikulum SLB yang lebih menekankan pada pendidikan keterampilan.
                        Tujuannya adalah agar setelah lulus dari sekolah, ABK atau PDPD memiliki modal untuk lebih
                        mandiri, sehingga di masa depan tidak menjadi beban bagi keluarga atau masyarakat di sekitarnya.
                    </div>
                </div>
            </div>
        </div>
        <div id="section2" class="w-full justify-center items-start bg-white pb-10 lg:pb-0 lg:pt-0">
            <div class="lg:w-full lg:flex p-5 lg:pl-20 lg:pr-20 lg:pb-20">
                <div class="w-full rounded shadow-lg border-solid border-4 border-[#297785]" id="moving-border">
                    <div class="relative overflow-x-auto sm:rounded-lg p-5">
                        <div class="lg:flex justify-between lg:mb-5">
                            <div class="sm:flex flex sm:justify-center justify-center sm:items-center items-center">
                                <div class="dropdown dropdown-hover">
                                    <div tabindex="0" role="button"
                                        class="bg-white text-black hover:bg-[#297785] hover:text-white flex gap-2 btn m-1 border-solid border-1 border-[#297785] hover:border-[#297785]">
                                        <div class="div">
                                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M24.5002 11.6666H22.1668V4.66659H23.3335V2.33325H4.66683V4.66659H5.8335V11.6666H3.50016C3.19074 11.6666 2.894 11.7895 2.6752 12.0083C2.45641 12.2271 2.3335 12.5238 2.3335 12.8333V23.3333H25.6668V12.8333C25.6668 12.5238 25.5439 12.2271 25.3251 12.0083C25.1063 11.7895 24.8096 11.6666 24.5002 11.6666ZM16.3335 20.9999V16.3333H11.6668V20.9999H8.16683V4.66659H19.8335V20.9999H16.3335Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M10.5 7H12.8333V9.33333H10.5V7ZM15.1667 7H17.5V9.33333H15.1667V7ZM10.5 11.6667H12.8333V14H10.5V11.6667ZM15.1667 11.6667H17.5V14H15.1667V11.6667Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </div>
                                        <div class="div">
                                            Pilih Sekolah
                                        </div>
                                    </div>
                                    <ul tabindex="0"
                                        class="dropdown-content z-[1] menu p-2 shadow bg-white text-black rounded-box w-52">
                                        @foreach ($sekolah as $data)
                                            <li class="hover:bg-[#297785] hover:text-white"><a href="/karya-slb?filterSekolah={{ $data['id'] }}">{{ $data['nama'] }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="mt-2 lg:mt-0 mb-5 lg:mb-0">
                                <label
                                    class="input input-bordered flex items-center gap-2 bg-white border-solid border-1 border-[#297785] hover:border-[#297785]">
                                    <input type="text"
                                        class="grow border-none focus:ring-white focus:border-white text-black"
                                        placeholder="Search Karya SLB" name="pencarian" />
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="black"
                                        class="w-4 h-4 opacity-70">
                                        <path fill-rule="evenodd"
                                            d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </label>
                                {{-- <label for="table-search" class="sr-only">Search</label>
                                <div class="relative">
                                    <div
                                        class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                                        <x-svg-search />
                                    </div>
                                    <input type="text" id="table-search"
                                        class="block p-2 ps-10 text-sm text-black border border-black rounded-lg w-full lg:w-[750px] bg-white focus:ring-[#2F8386] focus:border-[#2F8386]"
                                        placeholder="Search...">
                                </div> --}}
                            </div>
                        </div>
                        {{-- Isi Content --}}
                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                            @foreach ($dummyData as $index => $data)
                                <div class="max-w-sm rounded overflow-hidden shadow-lg ">
                                    <img class="w-full" src="{{ url(asset('storage/' . $data['gambar'])) }}" alt="Gambar {{ $index + 1 }}">
                                    <div class="px-6 py-4">
                                        <div class="font-bold text-xl mb-2">{{ $data['nama'] }}</div>
                                        <p class="text-gray-700 text-base">
                                            {{ $data['deskripsi'] }}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="relative flex justify-between mt-5">
                            <div class="font-bold text-black">Jumlah :</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-layout-landing>
</body>

</html>
