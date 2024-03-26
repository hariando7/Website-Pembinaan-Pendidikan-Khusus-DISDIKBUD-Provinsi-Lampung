<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tentang | Bidang Pembinaan Pendidikan Khusus | Disdikbud Provinsi Lampung</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="/assets/landing/prov-lampung2.svg">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
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
</head>

<body>
    <x-layout-landing>
        <x-hero-landing title="Bidang Pembinaan Pendidikan Khusus"
            desc="Dinas Pendidikan dan Kebudayaan Provinsi Lampung Jl. Drs. Warsito No. 72 Teluk Betung Bandar Lampung, 35215"
            ref="#section2" imgPath="{{ asset('/assets/landing/bg-utama.png') }}" butTitle="Selengkapnya" />
        <div id="section_profile">
            <div class="hero min-h-screen bg-[#C4DDDE] pb-10 lg:pb-0 pt-10 lg:pt-0">
                <div class="hero-content flex-col lg:flex-row lg:w-full lg:flex p-5 lg:p-20 gap-10">
                    <div class="image-container relative">
                        <img src="assets/landing/prov-lampung2.svg" class="rounded-lg w-[300px] h-[300px] image-zoom" />
                    </div>
                    <div>
                        <h1 class="text-2xl lg:text-4xl text-center lg:text-left font-bold text-black">Sekapur Sirih
                            Kepala Bidang Pembinaan Pendidikan Khusus Provinsi Lampung</h1>
                        <p class="py-6 text-black">Bidang Pembinaan Pendidikan Khusus memiliki tugas melaksanakan
                            penyusunan bahan perumusan dan pelaksanaan kebijakan di bidang pendidikan khusus.</p>
                        <x-buttitle-landing ref="" color="#FA8F21" width="[10rem]" title="Selengkapnya"
                            extendClass="text-white text-center mt-2 lg:mt-6 py-2 lg:py-3" />
                    </div>
                </div>
            </div>
        </div>
        <div id="section2" class="w-full justify-center items-start bg-white">
            <div class="w-full p-5 lg:p-20 pt-10 pb-10">
                <div class="text-center items-center">
                    <h1 class="text-2xl lg:text-4xl font-bold text-black pb-5 lg:pb-10">Bidang Pembinaan Pendidikan
                        Khusus</h1>
                    <h4 class="text-md lg:text-xl text-black pb-5 lg:pb-10">Berdasarkan peraturan Gubernur Lampung Nomor
                        59 Tahun 2021 Tentang Susunan Organisasi, Tugas Dan Fungsi, Serta Tata Kerja Perangkat Daerah
                        dijelaskan bahwa:</h4>
                    <div id="accordion-nested-parent" data-accordion="collapse">
                        <h2 id="accordion-collapse-heading-1">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-black border border-b-0 border-[#C4DDDE] rounded-t-xl focus:ring-4 focus:ring-[#C4DDDE] hover:bg-[#2F8386]/[0.66] gap-3"
                                data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                                aria-controls="accordion-collapse-body-1">
                                <span class="">Pasal 115 ayat 1</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="#C4DDDE" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-1" class="hidden"
                            aria-labelledby="accordion-collapse-heading-1">
                            <div class="p-5 border border-b-0 border-[#C4DDDE] text-black">
                                <p class="mb-2 text-left">Bidang Pembinaan Pendidikan Khusus mempunyai tugas
                                    melaksanakan
                                    penyusunan bahan perumusan dan pelaksanaan kebijakan di bidang pendidikan khusus</p>
                            </div>
                        </div>
                        <h2 id="accordion-collapse-heading-2">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 rounded-t-xl font-medium rtl:text-right text-black border border-b-0 border-[#C4DDDE] focus:ring-4 focus:ring-[#C4DDDE] hover:bg-[#C4DDDE] gap-3    "
                                data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                                aria-controls="accordion-collapse-body-2">
                                <span>Pasal 115 ayat 2</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="#C4DDDE" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-2" class="hidden"
                            aria-labelledby="accordion-collapse-heading-2">
                            <div class="p-5 border border-[#C4DDDE] text-left">
                                <p class="mb-2 text-black">Untuk menyelenggarakan tugas sebagaimana dimaksud pada ayat
                                    (1), Bidang
                                    Pembinaan Pendidikan Khusus mempunyai fungsi:</p>
                                <ol class="mb-2 text-black" type="a">
                                    <li>(a.) penyusunan bahan perumusan dan koordinasi pelaksanaan kebijakan di bidang
                                        kurikulum dan penilaian, kelembagaan dan sarana prasarana, serta peserta didik
                                        dan pembangunan karakter pendidikan khusus;</li>
                                    <li>(b.) pembinaan pelaksanaan kebijakan di bidang kurikulum dan penilaian,
                                        kelembagaan
                                        dan sarana prasarana, serta peserta didik dan pembangunan karakter pendidikan
                                        khusus;</li>
                                    <li>(c.) penyusunan bahan penetapan kurikulum muatan lokal pendidikan khusus;</li>
                                    <li>(d.) penyusunan bahan penerbitan izin pendirian, penataan, dan penutupan satuan
                                        pendidikan khusus;</li>
                                    <li>(e.) penyusunan bahan pembinaan pelaksanaan kurikulum dan penilaian, kelembagaan
                                        dan
                                        sarana prasarana, serta peserta didik dan pembangunan karakter pendidikan
                                        khusus;</li>
                                    <li>(f.) pelaksanaan pemantauan dan evaluasi di bidang kurikulum dan penilaian,
                                        kelembagaan dan sarana prasarana, serta peserta didik dan pembangunan karakter
                                        pendidikan khusus;</li>
                                    <li>(g.) pelaporan di bidang kurikulum dan penilaian, kelembagaan dan sarana
                                        prasarana,
                                        serta peserta didik dan pembangunan karakter pendidikan khusus; dan</li>
                                    <li>(h.) pelaksanaan fungsi lain yang diberikan oleh atasan.</li>
                                </ol>
                            </div>
                        </div>
                        <h2 id="accordion-collapse-heading-3">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 rounded-t-xl font-medium rtl:text-right text-black border border-b-0 border-[#C4DDDE] focus:ring-4 focus:ring-[#C4DDDE] hover:bg-[#C4DDDE] gap-3    "
                                data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                                aria-controls="accordion-collapse-body-2">
                                <span>Pasal 115 ayat 1</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="#C4DDDE" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-3" class="hidden"
                            aria-labelledby="accordion-collapse-heading-3">
                            <div class="p-5 border border-[#C4DDDE]">
                                <p class="mb-2 text-black">Bidang Pembinaan Pendidikan Khusus dipimpin oleh seorang
                                    Kepala Bidang
                                    yang berada di bawah dan bertanggungjawab kepada Kepala Dinas
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center text-center pb-5 lg:mr-20 lg:-mt-20 lg:pb-20">
                <x-buttitle-landing
                    ref="https://drive.google.com/file/d/13DNkClGHYWfuzN4LpMGIg9LgwJzpcb2J/view?usp=sharing"
                    color="#FA8F21" width="[10rem]" title="Selengkapnya"
                    extendClass="text-white text-center mt-2 lg:mt-6 py-2 lg:py-3" />
            </div>
        </div>
        <div id="section3" class="w-full justify-center items-start bg-[#C4DDDE]">
            <div class="lg:w-full p-5 lg:p-20 pt-10 pb-10">
                <div class="text-center items-center">
                    <div class="text-2xl lg:text-3xl text-center lg:text-center font-bold text-black pb-5 lg:pb-10">
                        Struktur Dinas Pendidikan Dan Kebudayaan Provinsi Lampung</div>
                    <img src="assets/landing/strukturDinas.svg" class="flex justify-center items-center m-auto"
                        alt="">
                </div>
            </div>
        </div>
        <div id="section4" class="w-full justify-center items-start bg-white">
            <div class="lg:w-full p-5 lg:p-20 pt-10 pb-10">
                <div class="text-center items-center">
                    <div class="text-2xl lg:text-3xl text-center lg:text-center font-bold text-black pb-5 lg:pb-10">
                        Struktur Bidang
                        Pembinaan Pendidikan Khusus</div>
                    <img src="assets/landing/strukturDinas.svg" class="flex justify-center items-center m-auto"
                        alt="">
                </div>
            </div>
        </div>
        {{-- <div id="section5"
            class="bg-[url({{ '/assets/landing/disdikbud.png' }})] w-full h-[500px] lg:min-h-screen bg-cover bg-no-repeat bg-[#000000]/[0.50] bg-blend-overlay flex justify-center items-center"
            style="background-size: 100% 100%;">
            <div class="lg:w-1/2 lg:p-5 relative">
                <div class="absolute inset-0 bg-white opacity-20 rounded-lg"></div>
                <div class="box relative w-[350px] h-[250px] lg:w-[600px] lg:h-[300px] m-auto flex items-center m-auto">
                    <form autocomplete="off" class="">
                        <h2 class="mb-5 text-md lg:text-2xl font-bold">Portal Pendataan Sekolah Inklusi Dinas Pendidikan dan
                            Kebudayaan Provinsi
                            Lampung
                        </h2>
                        <x-buttitle-landing ref="/pendataan-sekolah-inklusi" color="#FA8F21" width="[10rem]"
                            title="Selengkapnya"
                            extendClass="text-white text-center m-auto mt-2 lg:mt-6 py-2 lg:py-3" />
                    </form>
                </div>
            </div>
        </div> --}}
    </x-layout-landing>
</body>

</html>
