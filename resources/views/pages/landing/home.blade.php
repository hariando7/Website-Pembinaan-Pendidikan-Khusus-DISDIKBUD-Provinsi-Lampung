<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | Bidang Pembinaan Pendidikan Khusus | Disdikbud Provinsi Lampung</title>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" /> --}}
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
        .image-container {
            overflow: hidden;
        }

        .image-container:hover img {
            transform: scale(1.1);
            transition: transform 0.3s ease;
        }
    </style>
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
    <style>
        @keyframes fadeInOut2 {
            0% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .slideshow-2 img {
            animation: fadeInOut2 6s infinite;
        }
    </style>
</head>

<body>
    <x-layout-landing>
        <x-hero-landing title="Bidang Pembinaan Pendidikan Khusus"
            desc="Dinas Pendidikan dan Kebudayaan Provinsi Lampung Jl. Drs. Warsito No. 72 Teluk Betung Bandar Lampung, 35215"
            ref="#section2" butTitle="Selengkapnya" />
        <div id="section1">
            <div class="hero min-h-screen bg-[#C4DDDE] pb-10 lg:pb-0 pt-10 lg:pt-0">
                <div class="hero-content flex-col lg:flex-row lg:w-full lg:flex p-5 lg:p-20 gap-10">
                    <div class="image-container relative">
                        <img src="assets/landing/prov-lampung2.svg" class="rounded-lg w-[300px] h-[300px] image-zoom" />
                    </div>
                    <div>
                        <h1 class="text-2xl lg:text-4xl text-center lg:text-left font-bold text-black">Sekapur Sirih
                            Kepala Bidang Pembinaan Pendidikan Khusus Provinsi Lampung</h1>
                        <p id="sekapurSirihText" class="py-6 text-black text-justify">Bidang Pembinaan Pendidikan Khusus
                            memiliki tugas
                            melaksanakan
                            penyusunan bahan perumusan dan pelaksanaan kebijakan di bidang pendidikan khusus.</p>
                        <x-buttitle-landing ref="" color="#FA8F21" width="[10rem]" title="Selengkapnya"
                            extendClass="text-white text-center mt-2 lg:mt-6 py-2 lg:py-3 m-auto lg:m-0" />
                    </div>
                    <button id="sekapurSirihButton"
                        class="bg-[#FA8F21]/[0.20] btn border-none hover:bg-[#D87815] text-white font-bold py-2 px-4 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 16 16">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M1.75 5.75v4.5h2.5l4 3V2.75l-4 3zm9 .5s1 .5 1 1.75s-1 1.75-1 1.75m1-6.5c2 1 3 2.5 3 4.75s-1 3.75-3 4.75" />
                        </svg>
                    </button>
                    <script>
                        document.getElementById('sekapurSirihButton').addEventListener('click', function() {
                            var text = document.getElementById('sekapurSirihText').innerText.trim();
                            var speech = new SpeechSynthesisUtterance(text);
                            var voices = window.speechSynthesis.getVoices();
                            speech.voice = voices.find(function(voice) {
                                return voice.name === 'Google Bahasa Indonesia';
                            });
                            speechSynthesis.speak(speech);
                        });
                    </script>
                </div>
            </div>
        </div>
        <div id="section2" class="w-full justify-center items-start bg-white pb-10 lg:pb-0 pt-10 lg:pt-0">
            <div class="p-5 lg:p-20">
                <div class="lg:w-full w-full lg:flex rounded shadow-lg border-solid border-4 border-[#297785]"
                    id="moving-border">
                    <div class="w-full lg:p-10">
                        <h1
                            class="text-2xl lg:text-5xl font-bold text-black pt-5 pb-5 lg:pb-10 text-center lg:text-center">
                            Dokumentasi Kegiatan Bidang</h1>
                        <div class="grid grid-cols-1 gap-5 pl-5 pr-5 pb-5 ">
                            <div class="w-full rounded overflow-hidden">
                                <div id="default-carousel" class="relative w-full z-0" data-carousel="slide">
                                    <!-- Carousel wrapper -->
                                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                                        <!-- Item 1 -->
                                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                            <img src="assets/landing/strukturDinas.svg"
                                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                alt="...">
                                        </div>
                                        <!-- Item 2 -->
                                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                            <img src="assets/landing/strukturDinas.svg"
                                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                alt="...">
                                        </div>
                                        <!-- Item 3 -->
                                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                            <img src="assets/landing/strukturDinas.svg"
                                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                alt="...">
                                        </div>
                                        <!-- Item 4 -->
                                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                            <img src="assets/landing/strukturDinas.svg"
                                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                alt="...">
                                        </div>
                                        <!-- Item 5 -->
                                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                            <img src="assets/landing/strukturDinas.svg"
                                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                alt="...">
                                        </div>
                                    </div>
                                    <!-- Slider indicators -->
                                    <div
                                        class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true"
                                            aria-label="Slide 1" data-carousel-slide-to="0"></button>
                                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                            aria-label="Slide 2" data-carousel-slide-to="1"></button>
                                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                            aria-label="Slide 3" data-carousel-slide-to="2"></button>
                                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                            aria-label="Slide 4" data-carousel-slide-to="3"></button>
                                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                            aria-label="Slide 5" data-carousel-slide-to="4"></button>
                                    </div>
                                    <!-- Slider controls -->
                                    <button type="button"
                                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                        data-carousel-prev>
                                        <span
                                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 6 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
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
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 6 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                            </svg>
                                            <span class="sr-only">Next</span>
                                        </span>
                                    </button>
                                </div>
                                <div class="px-6 py-4">
                                    {{-- <div class="font-bold text-xl mb-2">Judul </div> --}}
                                    <p class="text-gray-700 text-base">
                                        Dokumentasi Kegiatan Bidang Pembinaan Pendidikan Khusus
                                    </p>
                                </div>
                                <button id="open-modal-button"
                                    class="text-white text-center mt-6 py-3 bg-[#FA8F21] hover:bg-[#D87815] w-[50%] lg:w-[50%] py-1 my-2 flex items-center justify-center rounded-md bg-[#FA8F21] hover:bg-[#D87815] focus:ring-4 dark:bg-[#FA8F21] dark:hover:bg-[#D87815] btn border-none m-auto">
                                    Selengkapnya
                                </button>
                                <x-pop-up-landing />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="section3">
            <div class="p-5 lg:p-20 pt-10 pb-10 gap-10 bg-[#C4DDDE]">
                <h1 class="text-2xl lg:text-5xl text-center m-auto text-center font-bold text-black pb-5 lg:pb-5">
                    Apa itu Disabilitas ?</h1>
                <div class="lg:flex justify-center gap-10">
                    <div class="lg:w-[40%] order-2 lg:order-1 image-container relative slideshow-2">
                        <img src="assets/landing/apaItuDisabilitas.svg"
                            class="w-full h-full m-auto items-center lg:mb-0 image-zoom" />
                    </div>
                    <div class="lg:w-[60%] order-1 lg:order-2">
                        <p class="py-2 text-black text-justify" id="apaItuDisabilitasText">Disabilitas adalah
                            keterbatasan pada tubuh maupun pikiran yang menyebabkan pengidapnya kesulitan atau
                            mengalami keterbatasan dalam melakukan aktivitas atau berinteraksi dengan lingkungan di
                            sekitarnya. Menurut WHO, diperkirakan terdapat 1,3 miliar orang atau sekitar 16% dari
                            populasi global yang mengalami disabilitas. Disabilitas adalah kondisi ketika tubuh
                            serta pikiran mengalami kesulitan atau keterbatasan dalam menjalani aktivitas tertentu.
                            Sementara itu, difabel adalah istilah atau sebutan bagi penyandang disabilitas.</p>
                        <div class="gap-10 flex justify-between mt-5 lg:mt-0">
                            <x-buttitle-landing ref="/sekolah-luar-biasa" color="#FA8F21" width="[10rem]"
                                title="Selengkapnya" extendClass="text-white text-center mt-2 lg:mt-6 py-2 lg:py-3" />
                            <button id="bacaTeks"
                                class="bg-[#FA8F21]/[0.20] btn border-none hover:bg-[#D87815] text-white font-bold py-2 px-4 rounded mt-2 lg:mt-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 16 16">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="1.5"
                                        d="M1.75 5.75v4.5h2.5l4 3V2.75l-4 3zm9 .5s1 .5 1 1.75s-1 1.75-1 1.75m1-6.5c2 1 3 2.5 3 4.75s-1 3.75-3 4.75" />
                                </svg>
                            </button>
                            <script>
                                document.getElementById('bacaTeks').addEventListener('click', function() {
                                    var text = document.getElementById('apaItuDisabilitasText').innerText;
                                    var speech = new SpeechSynthesisUtterance(text);
                                    var voices = window.speechSynthesis.getVoices();
                                    speech.voice = voices.find(function(voice) {
                                        return voice.name === 'Google Bahasa Indonesia';
                                    });
                                    speechSynthesis.speak(speech);
                                });
                            </script>
                            <script>
                                var images = [
                                    "/assets/landing/strukturDinas.svg", // Ganti dengan URL gambar pertama
                                    // "/assets/landing/apaItuDisabilitas.svg"
                                    // "/assets/landing/bg-utama.png", // Ganti dengan URL gambar kedua
                                    // "/assets/landing/apaItuDisabilitas.svg" // Ganti dengan URL gambar ketiga dst.
                                ];

                                var currentIndex = 0;
                                var imgElement = document.querySelector('.slideshow-2 img');

                                function changeImage() {
                                    currentIndex = (currentIndex + 1) % images.length;
                                    imgElement.src = images[currentIndex];
                                }

                                setInterval(changeImage, 10000); // Ganti gambar setiap 10 detik
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div id="section4" class="w-full justify-center items-start bg-[#EEEFF4]">
            <div class="w-full p-5 lg:p-20 pt-10 pb-10">
                <div class="text-center items-center">
                    <h1 class="text-2xl lg:text-5xl font-bold text-black pb-5 lg:pb-10">Jenis Disabilitas, Penyebab,
                        dan
                        Penanganan</h1>
                    {{-- <p class="text-base lg:text-lg font-thin text-black text-justify">
                    <div class="mx-auto max-w-3xl text-black">
                        <div class="my-8">
                            <h2 class="text-xl font-bold mb-4">Jenis Disabilitas</h2>
                            <p>Menurut Undang-Undang RI No. 8 Tahun 2016 tentang Penyandang Disabilitas, disabilitas
                                terbagi menjadi beberapa jenis:</p>
                            <ul class="list-disc pl-4 mb-4">
                                <li>Disabilitas fisik (gangguan gerakan atau keterbatasan anggota tubuh)</li>
                                <li>Disabilitas mental atau kognitif (gangguan perkembangan, kejiwaan, atau belajar)
                                </li>
                                <li>Disabilitas sensorik (gangguan indra seperti pendengaran atau penglihatan)</li>
                                <li>Disabilitas kronis atau medis (kondisi kesehatan jangka panjang yang membatasi
                                    aktivitas sehari-hari)</li>
                                <li>Disabilitas pembelajaran (kesulitan memahami atau menggunakan informasi dalam
                                    pendidikan formal)</li>
                            </ul>
                        </div>
                        <div class="my-8">
                            <h2 class="text-xl font-bold mb-4">Penyebab Disabilitas</h2>
                            <p>Faktor penyebab disabilitas melibatkan:</p>
                            <ul class="list-disc pl-4 mb-4">
                                <li>Kelainan bawaan lahir (seperti down syndrome dan Duchenne muscular dystrophy)</li>
                                <li>Cedera (seperti cedera tulang belakang dan cedera otak traumatis)</li>
                                <li>Penyakit kronis (seperti diabetes, stroke, dan penyakit kardiovaskular)</li>
                                <li>Gangguan seperti autisme, ADHD, dan gangguan mental lainnya sejak masa kanak-kanak
                                </li>
                            </ul>
                        </div>
                        <div class="my-8">
                            <h2 class="text-xl font-bold mb-4">Penangangan Disabilitas</h2>
                            <p>Penanganan disabilitas bervariasi sesuai dengan jenisnya:</p>
                            <ul class="list-disc pl-4 mb-4">
                                <li>Pada disabilitas fisik, penyandangnya dapat memanfaatkan alat bantu seperti kursi
                                    roda dengan pentingnya meminta izin sebelum memberikan bantuan.</li>
                                <li>Disabilitas intelektual memerlukan waktu, kesabaran, dan instruksi dasar dengan
                                    bahasa yang sederhana, serta perlu dihindari lingkungan yang dapat mengganggu
                                    konsentrasi.</li>
                                <li>Menghadapi disabilitas mental membutuhkan kesabaran dan keterbukaan pikiran, serta
                                    perlu dihindari situasi yang memperburuk emosi.</li>
                                <li>Interaksi dengan penyandang disabilitas sensorik memerlukan keahlian khusus, seperti
                                    berkomunikasi melalui bahasa isyarat atau menulis pesan di atas kertas untuk tuna
                                    rungu atau tuna wicara.</li>
                            </ul>
                        </div>
                    </div>
                    </p> --}}


                    <div id="accordion-nested-parent" data-accordion="collapse">
                        <h2 id="accordion-collapse-heading-1">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-black border border-b-0 border-[#C4DDDE] rounded-t-xl focus:ring-4 focus:ring-[#C4DDDE] hover:bg-[#2F8386]/[0.66] gap-3"
                                data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                                aria-controls="accordion-collapse-body-1">
                                <span class="">Jenis Disabilitas</span>
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
                                {{-- <p >Check out this guide to learn how to
                                    <a href="/docs/getting-started/introduction/"
                                        class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and
                                    start developing websites even faster with components on top of Tailwind CSS.
                                </p> --}}
                                <p class="mb-2">Menurut Undang-Undang RI No. 8 Tahun 2016 tentang Penyandang
                                    Disabilitas, disabilitas
                                    terbagi menjadi beberapa jenis:</p>
                                <ul class="list-disc pl-4 mb-4">
                                    <li>Disabilitas fisik (gangguan gerakan atau keterbatasan anggota tubuh)</li>
                                    <li>Disabilitas mental atau kognitif (gangguan perkembangan, kejiwaan, atau belajar)
                                    </li>
                                    <li>Disabilitas sensorik (gangguan indra seperti pendengaran atau penglihatan)</li>
                                    <li>Disabilitas kronis atau medis (kondisi kesehatan jangka panjang yang membatasi
                                        aktivitas sehari-hari)</li>
                                    <li>Disabilitas pembelajaran (kesulitan memahami atau menggunakan informasi dalam
                                        pendidikan formal)</li>
                                </ul>
                                <!-- Nested accordion -->
                                {{-- <div id="accordion-nested-collapse" data-accordion="collapse">
                                    <h2 id="accordion-nested-collapse-heading-1">
                                        <button type="button"
                                            class="flex items-center justify-between w-full p-5 rounded-t-xl font-medium rtl:text-right text-black border border-b-0 border-[#C4DDDE] focus:ring-4 focus:ring-[#C4DDDE] hover:bg-[#C4DDDE] gap-3"
                                            data-accordion-target="#accordion-nested-collapse-body-1"
                                            aria-expanded="false" aria-controls="accordion-nested-collapse-body-1">
                                            <span>Open source</span>
                                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 10 6">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                            </svg>
                                        </button>
                                    </h2>
                                    <div id="accordion-nested-collapse-body-1" class="hidden"
                                        aria-labelledby="accordion-nested-collapse-heading-1">
                                        <div class="p-5 border border-b-0 border-[#C4DDDE]">
                                            <p class="text-black">The main difference is that the
                                                core components from Flowbite are open source under the MIT license,
                                                whereas Tailwind UI is a paid product.</p>
                                        </div>
                                    </div>
                                    <h2 id="accordion-nested-collapse-heading-2">
                                        <button type="button"
                                            class="flex items-center justify-between w-full p-5 rounded-t-xl font-medium rtl:text-right text-black border border-b-0 border-[#C4DDDE] focus:ring-4 focus:ring-[#C4DDDE] hover:bg-[#C4DDDE] gap-3"
                                            data-accordion-target="#accordion-nested-collapse-body-2"
                                            aria-expanded="false" aria-controls="accordion-nested-collapse-body-2">
                                            <span>Architecture</span>
                                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 10 6">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                            </svg>
                                        </button>
                                    </h2>
                                    <div id="accordion-nested-collapse-body-2" class="hidden"
                                        aria-labelledby="accordion-nested-collapse-heading-2">
                                        <div class="p-5 border border-b-0 border-[#C4DDDE]">
                                            <p class="text-black">Another difference is that
                                                Flowbite relies on smaller and standalone components, whereas Tailwind
                                                UI offers sections of pages.</p>
                                        </div>
                                    </div>
                                    <h2 id="accordion-nested-collapse-heading-3">
                                        <button type="button"
                                            class="flex items-center justify-between w-full p-5 rounded-t-xl font-medium rtl:text-right text-black border border-b-0 border-[#C4DDDE] focus:ring-4 focus:ring-[#C4DDDE] hover:bg-[#C4DDDE] gap-3"
                                            data-accordion-target="#accordion-nested-collapse-body-3"
                                            aria-expanded="false" aria-controls="accordion-nested-collapse-body-3">
                                            <span>Can I use both?</span>
                                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 10 6">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                                            </svg>
                                        </button>
                                    </h2>
                                    <div id="accordion-nested-collapse-body-3" class="hidden"
                                        aria-labelledby="accordion-nested-collapse-heading-3">
                                        <div class="p-5 border border-[#C4DDDE]">
                                            <p class="mb-2 text-black">We actually recommend
                                                using both Flowbite, Flowbite Pro, and even Tailwind UI as there is no
                                                technical reason stopping you from using the best of two worlds.</p>
                                        </div>
                                    </div>
                                </div> --}}
                                <!-- End: Nested accordion -->
                            </div>
                        </div>
                        <h2 id="accordion-collapse-heading-2">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 rounded-t-xl font-medium rtl:text-right text-black border border-b-0 border-[#C4DDDE] focus:ring-4 focus:ring-[#C4DDDE] hover:bg-[#C4DDDE] gap-3    "
                                data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                                aria-controls="accordion-collapse-body-2">
                                <span>Penyebab Disabilitas</span>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="#C4DDDE" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-collapse-body-2" class="hidden"
                            aria-labelledby="accordion-collapse-heading-2">
                            <div class="p-5 border border-[#C4DDDE]">
                                <p class="mb-2 text-black">Faktor penyebab disabilitas melibatkan:</p>
                                <ul class="mb-2 text-black">
                                    <li>Kelainan bawaan lahir (seperti down syndrome dan Duchenne muscular dystrophy)
                                    </li>
                                    <li>Cedera (seperti cedera tulang belakang dan cedera otak traumatis)</li>
                                    <li>Penyakit kronis (seperti diabetes, stroke, dan penyakit kardiovaskular)</li>
                                    <li>Gangguan seperti autisme, ADHD, dan gangguan mental lainnya sejak masa
                                        kanak-kanak
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h2 id="accordion-collapse-heading-3">
                            <button type="button"
                                class="flex items-center justify-between w-full p-5 rounded-t-xl font-medium rtl:text-right text-black border border-b-0 border-[#C4DDDE] focus:ring-4 focus:ring-[#C4DDDE] hover:bg-[#C4DDDE] gap-3    "
                                data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                                aria-controls="accordion-collapse-body-2">
                                <span>Penyebab Disabilitas</span>
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
                                <h2 class="mb-2 text-black">Penangangan Disabilitas</h2>
                                <p class="mb-2 text-black">Penanganan disabilitas bervariasi sesuai dengan jenisnya:
                                </p>
                                <ul class="mb-2 text-black">
                                    <li>Pada disabilitas fisik, penyandangnya dapat memanfaatkan alat bantu seperti
                                        kursi
                                        roda dengan pentingnya meminta izin sebelum memberikan bantuan.</li>
                                    <li>Disabilitas intelektual memerlukan waktu, kesabaran, dan instruksi dasar dengan
                                        bahasa yang sederhana, serta perlu dihindari lingkungan yang dapat mengganggu
                                        konsentrasi.</li>
                                    <li>Menghadapi disabilitas mental membutuhkan kesabaran dan keterbukaan pikiran,
                                        serta
                                        perlu dihindari situasi yang memperburuk emosi.</li>
                                    <li>Interaksi dengan penyandang disabilitas sensorik memerlukan keahlian khusus,
                                        seperti
                                        berkomunikasi melalui bahasa isyarat atau menulis pesan di atas kertas untuk
                                        tuna
                                        rungu atau tuna wicara.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center text-center pb-5 lg:mr-20 lg:-mt-20 lg:pb-20">
                <x-buttitle-landing ref="" color="#FA8F21" width="[10rem]" title="Selengkapnya"
                    extendClass="text-white text-center mt-2 lg:mt-6 py-2 lg:py-3" />
            </div>
        </div>
        <div id="section5">
            <div class="p-5 lg:p-20 pt-10 pb-10 gap-10 bg-[#C4DDDE]">
                <h1 class="text-2xl lg:text-5xl text-center m-auto text-center font-bold text-black pb-5 lg:pb-5">
                    Sekolah
                    Luar Biasa</h1>
                <div class="lg:flex justify-center gap-10">
                    <div class="lg:w-[40%] order-1 lg:order-2">
                        <img src="assets/landing/Pendidikan_SLB.svg"
                            class="w-full h-full m-auto items-center lg:mb-0" />
                    </div>
                    <div class="lg:w-[60%] order-2 lg:order-1">
                        <p class="py-6 text-black" id="pengertianSLB">Sekolah luar biasa (SLB) adalah sebuah sekolah
                            yang diperuntukkan bagi anak berkebutuhan khusus agar bisa mendapatkan layanan dasar yang
                            bisa membantu mendapatkan akses pendidikan.</p>
                        <div class="text-black">Dengan jenis yang berbeda, berbeda pula strategi pembelajaran serta
                            fasilitas yang dimiliki. SLB berperan sebagai bagian dari lembaga pendidikan yang dapat
                            mengakomodasi dan menyelenggarakan pendidikan khusus untuk anak-anak dengan kebutuhan
                            khusus. Jenis kebutuhan tersebut mencakup berbagai kondisi, seperti tunanetra, tunarungu,
                            tunawicara, tunadaksa, tunalaras, tunaganda, dan anak terbelakangan.</div>
                        <div class="gap-10 flex justify-between mt-5 lg:mt-0">
                            <x-buttitle-landing ref="/sekolah-luar-biasa" color="#FA8F21" width="[10rem]"
                                title="Selengkapnya" extendClass="text-white text-center mt-2 lg:mt-6 py-2 lg:py-3" />
                            <button id="bacaTeksSLB"
                                class="bg-[#FA8F21]/[0.20] btn border-none hover:bg-[#D87815] text-white font-bold py-2 px-4 rounded mt-2 lg:mt-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    viewBox="0 0 16 16">
                                    <path fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="1.5"
                                        d="M1.75 5.75v4.5h2.5l4 3V2.75l-4 3zm9 .5s1 .5 1 1.75s-1 1.75-1 1.75m1-6.5c2 1 3 2.5 3 4.75s-1 3.75-3 4.75" />
                                </svg>
                            </button>
                            <script>
                                document.getElementById('bacaTeksSLB').addEventListener('click', function() {
                                    var text = document.getElementById('pengertianSLB').innerText;
                                    var speech = new SpeechSynthesisUtterance(text);
                                    var voices = window.speechSynthesis.getVoices();
                                    speech.voice = voices.find(function(voice) {
                                        return voice.name === 'Google Bahasa Indonesia';
                                    });
                                    speechSynthesis.speak(speech);
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="section6" class="w-full justify-center items-start bg-white pb-10 lg:pb-0 pt-10 lg:pt-0">
            <div class="p-5 lg:p-20">
                <div class="lg:w-full w-full lg:flex rounded shadow-lg border-solid border-4 border-[#297785]"
                    id="moving-border">
                    <div class="w-full lg:p-10">
                        <h1
                            class="text-2xl lg:text-5xl font-bold text-black pt-5 pb-5 lg:pb-10 text-center lg:text-center">
                            Karya/Keterampilan
                            SLB</h1>
                        <div class="grid grid-cols-1 gap-5 pl-5 pr-5 pb-5">
                            <div class="w-full rounded overflow-hidden">
                                <div id="default-carousel" class="relative w-full z-0" data-carousel="slide">
                                    <!-- Carousel wrapper -->
                                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                                        <!-- Item 1 -->
                                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                            <img src="assets/landing/strukturDinas.svg"
                                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-0"
                                                alt="...">
                                        </div>
                                        <!-- Item 2 -->
                                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                            <img src="assets/landing/strukturDinas.svg"
                                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-0"
                                                alt="...">
                                        </div>
                                        <!-- Item 3 -->
                                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                            <img src="assets/landing/strukturDinas.svg"
                                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-0"
                                                alt="...">
                                        </div>
                                        <!-- Item 4 -->
                                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                            <img src="assets/landing/strukturDinas.svg"
                                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-0"
                                                alt="...">
                                        </div>
                                        <!-- Item 5 -->
                                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                            <img src="assets/landing/strukturDinas.svg"
                                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-0"
                                                alt="...">
                                        </div>
                                    </div>
                                    <!-- Slider indicators -->
                                    <div
                                        class="absolute z-0 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true"
                                            aria-label="Slide 1" data-carousel-slide-to="0"></button>
                                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                            aria-label="Slide 2" data-carousel-slide-to="1"></button>
                                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                            aria-label="Slide 3" data-carousel-slide-to="2"></button>
                                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                            aria-label="Slide 4" data-carousel-slide-to="3"></button>
                                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                            aria-label="Slide 5" data-carousel-slide-to="4"></button>
                                    </div>
                                    <!-- Slider controls -->
                                    <button type="button"
                                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                        data-carousel-prev>
                                        <span
                                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 6 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
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
                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 6 10">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                            </svg>
                                            <span class="sr-only">Next</span>
                                        </span>
                                    </button>
                                </div>
                                <div class="px-6 py-4">
                                    {{-- <div class="font-bold text-xl mb-2">Judul </div> --}}
                                    <p class="text-gray-700 text-base">
                                        Dokumentasi Kegiatan Bidang Pembinaan Pendidikan Khusus
                                    </p>
                                </div>
                                <button id="open-modal-button"
                                    class="text-white text-center mt-6 py-3 bg-[#FA8F21] hover:bg-[#D87815] w-[50%] lg:w-[50%] py-1 my-2 flex items-center justify-center rounded-md bg-[#FA8F21] hover:bg-[#D87815] focus:ring-4 dark:bg-[#FA8F21] dark:hover:bg-[#D87815] btn border-none m-auto">
                                    Selengkapnya
                                </button>
                                <x-pop-up-landing />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="section7">
            <div class="w-full flex flex-col justify-center items-center pt-20 pb-20 bg-white">
                <div class="w-[80%] bg-[#2E707B] p-10 rounded-lg">
                    <h1 class="lg:text-5xl md:text-4xl sm:text-3xl font-bold text-white text-center">SLB PROVINSI
                        LAMPUNG
                    </h1>
                    <p
                        class="text-sm md:text-base font-thin text-white text-justify md:text-center mt-4 m-2 md:m-8 pl-0 md:pl-24 md:pr-24">
                        Sekolah Luar Biasa Dinas Pendidikan Kebudayaan Provinsi Lampung <br>
                        Bidang Pembinaan Pendidikan Khusus
                        {{-- <span><a href="/sekolah-luar-biasa" target="_blank">Selengkapnya</a></span> --}}
                    </p>
                    <x-buttitle-landing ref="/sekolah-luar-biasa" color="#FA8F21" width="[10rem]"
                        title="Selengkapnya"
                        extendClass="text-white text-center mt-2 lg:mt-6 py-2 lg:py-3 m-auto mb-5" />
                    <x-carousel-home />
                </div>
            </div>
        </div>
    </x-layout-landing>
</body>

</html>
