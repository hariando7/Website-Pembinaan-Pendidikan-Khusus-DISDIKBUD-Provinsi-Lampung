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
                border-color: #C4DDDE;
            }

            50% {
                border-color: #297785;
            }

            100% {
                border-color: #C4DDDE;
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

        /* .slideshow-2 img {
            animation: fadeInOut2 6s infinite;
        } */
    </style>
    <style>
        .text-typing {
            display: inline-block;
            overflow: hidden;
            border-right: .15em solid orange;
            /* adjust thickness and color as needed */
            white-space: nowrap;
            margin: 0;
            animation: typing 3s steps(40, end), blink-caret .75s step-end infinite;
        }

        @keyframes typing {
            from {
                width: 0;
            }

            to {
                width: 100%;
            }
        }

        @keyframes blink-caret {

            from,
            to {
                border-color: transparent;
            }

            50% {
                border-color: orange;
            }
        }
    </style>
    <style>
        .fade1 {
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        /* Style to show the content with fade-in effect */
        .fade1.fadeIn {
            opacity: 1;
        }

        .fade2 {
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        /* Style to show the content with fade-in effect */
        .fade2.fadeIn {
            opacity: 1;
        }

        .fade3 {
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        /* Style to show the content with fade-in effect */
        .fade3.fadeIn {
            opacity: 1;
        }

        .fade4 {
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        /* Style to show the content with fade-in effect */
        .fade4.fadeIn {
            opacity: 1;
        }

        .fade5 {
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        /* Style to show the content with fade-in effect */
        .fade5.fadeIn {
            opacity: 1;
        }

        .fade6 {
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        /* Style to show the content with fade-in effect */
        .fade6.fadeIn {
            opacity: 1;
        }

        .fade7 {
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        /* Style to show the content with fade-in effect */
        .fade7.fadeIn {
            opacity: 1;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var fade1 = document.querySelector('.fade1');
            var bounding = fade1.getBoundingClientRect();
            var isInViewport = (
                bounding.top >= 0 &&
                bounding.left >= 0 &&
                bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                bounding.right <= (window.innerWidth || document.documentElement.clientWidth)
            );

            if (isInViewport) {
                fade1.classList.add('fadeIn');
            } else {
                window.addEventListener('scroll', function() {
                    var bounding = fade1.getBoundingClientRect();
                    if (bounding.top < window.innerHeight && bounding.bottom >= 0) {
                        fade1.classList.add('fadeIn');
                    }
                });
            }
        });
        document.addEventListener('DOMContentLoaded', function() {
            var fade2 = document.querySelector('.fade2');
            var bounding = fade2.getBoundingClientRect();
            var isInViewport = (
                bounding.top >= 0 &&
                bounding.left >= 0 &&
                bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                bounding.right <= (window.innerWidth || document.documentElement.clientWidth)
            );

            if (isInViewport) {
                fade2.classList.add('fadeIn');
            } else {
                window.addEventListener('scroll', function() {
                    var bounding = fade2.getBoundingClientRect();
                    if (bounding.top < window.innerHeight && bounding.bottom >= 0) {
                        fade2.classList.add('fadeIn');
                    }
                });
            }
        });
        document.addEventListener('DOMContentLoaded', function() {
            var fade3 = document.querySelector('.fade3');
            var bounding = fade3.getBoundingClientRect();
            var isInViewport = (
                bounding.top >= 0 &&
                bounding.left >= 0 &&
                bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                bounding.right <= (window.innerWidth || document.documentElement.clientWidth)
            );

            if (isInViewport) {
                fade3.classList.add('fadeIn');
            } else {
                window.addEventListener('scroll', function() {
                    var bounding = fade3.getBoundingClientRect();
                    if (bounding.top < window.innerHeight && bounding.bottom >= 0) {
                        fade3.classList.add('fadeIn');
                    }
                });
            }
        });
        document.addEventListener('DOMContentLoaded', function() {
            var fade4 = document.querySelector('.fade4');
            var bounding = fade4.getBoundingClientRect();
            var isInViewport = (
                bounding.top >= 0 &&
                bounding.left >= 0 &&
                bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                bounding.right <= (window.innerWidth || document.documentElement.clientWidth)
            );

            if (isInViewport) {
                fade4.classList.add('fadeIn');
            } else {
                window.addEventListener('scroll', function() {
                    var bounding = fade4.getBoundingClientRect();
                    if (bounding.top < window.innerHeight && bounding.bottom >= 0) {
                        fade4.classList.add('fadeIn');
                    }
                });
            }
        });
        document.addEventListener('DOMContentLoaded', function() {
            var fade5 = document.querySelector('.fade5');
            var bounding = fade5.getBoundingClientRect();
            var isInViewport = (
                bounding.top >= 0 &&
                bounding.left >= 0 &&
                bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                bounding.right <= (window.innerWidth || document.documentElement.clientWidth)
            );

            if (isInViewport) {
                fade5.classList.add('fadeIn');
            } else {
                window.addEventListener('scroll', function() {
                    var bounding = fade5.getBoundingClientRect();
                    if (bounding.top < window.innerHeight && bounding.bottom >= 0) {
                        fade5.classList.add('fadeIn');
                    }
                });
            }
        });
        document.addEventListener('DOMContentLoaded', function() {
            var fade6 = document.querySelector('.fade6');
            var bounding = fade6.getBoundingClientRect();
            var isInViewport = (
                bounding.top >= 0 &&
                bounding.left >= 0 &&
                bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                bounding.right <= (window.innerWidth || document.documentElement.clientWidth)
            );

            if (isInViewport) {
                fade6.classList.add('fadeIn');
            } else {
                window.addEventListener('scroll', function() {
                    var bounding = fade6.getBoundingClientRect();
                    if (bounding.top < window.innerHeight && bounding.bottom >= 0) {
                        fade6.classList.add('fadeIn');
                    }
                });
            }
        });
        document.addEventListener('DOMContentLoaded', function() {
            var fade7 = document.querySelector('.fade7');
            var bounding = fade7.getBoundingClientRect();
            var isInViewport = (
                bounding.top >= 0 &&
                bounding.left >= 0 &&
                bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                bounding.right <= (window.innerWidth || document.documentElement.clientWidth)
            );

            if (isInViewport) {
                fade7.classList.add('fadeIn');
            } else {
                window.addEventListener('scroll', function() {
                    var bounding = fade7.getBoundingClientRect();
                    if (bounding.top < window.innerHeight && bounding.bottom >= 0) {
                        fade7.classList.add('fadeIn');
                    }
                });
            }
        });
    </script>
</head>

<body>
    <x-layout-landing>
        <x-hero-landing title="Bidang Pembinaan Pendidikan Khusus"
            desc="Dinas Pendidikan dan Kebudayaan Provinsi Lampung Jl. Drs. Warsito No. 72 Teluk Betung Bandar Lampung, 35215"
            ref="#section2" butTitle="Selengkapnya" />
        <div id="section1">
            <div class="hero min-h-screen bg-white pb-10 lg:pb-0 pt-10 lg:pt-0">
                <div class="hero-content fade1 flex-col lg:flex-row lg:w-full lg:flex p-5 lg:p-20 gap-10">
                    <div class="image-container relative">
                        <img src="assets/landing/sekapurSirih.jpg" class="rounded-lg w-[500px] h-[300px] image-zoom" />
                        <div class="text-center text-black font-bold">
                            <span class="text-typing">Dra. Suslina Sari, M.M.</span>
                        </div>
                        <script>
                            // Function to trigger typing effect
                            function typeEffect(element, speed) {
                                let text = element.getAttribute('data-text');
                                element.innerHTML = '';

                                let i = 0;
                                let timer = setInterval(function() {
                                    if (i < text.length) {
                                        element.append(text.charAt(i));
                                        i++;
                                    } else {
                                        clearInterval(timer);
                                        setTimeout(function() {
                                            deleteEffect(element, speed);
                                        }, 1000); // Wait for 1 second before deleting
                                    }
                                }, speed);
                            }

                            // Function to trigger delete effect
                            function deleteEffect(element, speed) {
                                let text = element.innerHTML;
                                let length = text.length;
                                let timer = setInterval(function() {
                                    if (length >= 0) {
                                        element.innerHTML = text.substring(0, length);
                                        length--;
                                    } else {
                                        clearInterval(timer);
                                        setTimeout(function() {
                                            typeEffect(element, speed);
                                        }, 500); // Wait for 0.5 second before typing again
                                    }
                                }, speed);
                            }

                            // Trigger typing effect for the specified element
                            let textElement = document.querySelector('.text-typing');
                            textElement.setAttribute('data-text', textElement.textContent.trim());
                            typeEffect(textElement, 100); // Adjust speed as needed
                        </script>
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
        <div id="section2" class="w-full justify-center items-start bg-[#C4DDDE] pb-10 lg:pb-0 pt-10 lg:pt-0">
            <div class="p-5 lg:p-20">
                <div class="fade2 lg:w-full w-full lg:flex rounded shadow-lg border-solid border-4 border-[#297785]"
                    id="moving-border">
                    <div class="w-full lg:p-10">
                        <h1
                            class="text-2xl lg:text-4xl font-bold text-black pt-5 pb-5 lg:pb-10 text-center lg:text-center">
                            Dokumentasi Kegiatan Bidang</h1>
                        <div class="grid grid-cols-1 gap-5 pl-5 pr-5 pb-5 ">
                            <div class="w-full rounded overflow-hidden">
                                <div id="default-carousel" class="relative w-full z-0" data-carousel="slide">
                                    <!-- Carousel wrapper -->
                                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                                        <!-- Item 1 -->
                                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                            <img src="{{ url(asset('storage/assets/a1.jpg')) }}"
                                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                alt="...">
                                        </div>
                                        <!-- Item 2 -->
                                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                            <img src="{{ url(asset('storage/assets/b1.jpg')) }}"
                                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                alt="...">
                                        </div>
                                        <!-- Item 3 -->
                                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                            <img src="{{ url(asset('storage/assets/c1.jpg')) }}"
                                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                alt="...">
                                        </div>
                                        <!-- Item 4 -->
                                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                            <img src="{{ url(asset('storage/assets/d3.jpg')) }}"
                                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                alt="...">
                                        </div>
                                        <!-- Item 5 -->
                                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                            <img src="{{ url(asset('storage/assets/e4.jpg')) }}"
                                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                alt="...">
                                        </div>
                                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                            <img src="{{ url(asset('storage/assets/f2.jpg')) }}"
                                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                alt="...">
                                        </div>
                                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                            <img src="{{ url(asset('storage/assets/g1.jpg')) }}"
                                                class="absolute block w-full -translate-x-2/3 -translate-y-2/3 top-2/3 left-2/3 z-30"
                                                alt="...">
                                        </div>
                                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                            <img src="{{ url(asset('storage/assets/h6.jpg')) }}"
                                                class="absolute block w-full -translate-x-2/3 -translate-y-2/3 top-2/3 left-2/3 z-30"
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
            <div class="p-5 lg:p-20 pt-10 pb-10 gap-10 bg-white">
                <div class="fade3">
                    <h1 class="text-2xl lg:text-4xl text-center m-auto text-center font-bold text-black pb-5 lg:pb-5">
                        Apa itu Disabilitas ?</h1>
                    <div class="lg:flex justify-center gap-10">
                        <div class="lg:w-[40%] order-2 lg:order-1 image-container relative slideshow-2">
                            {{-- <img src="{{ url(asset('storage/assets/disabilitas1.jpg')) }}"
                                class="w-full h-full m-auto items-center lg:mb-0 image-zoom" /> --}}
                            <div class="w-full h-80 carousel rounded-box">
                                <div class="carousel-item w-full">
                                    <img src="{{ url(asset('storage/assets/disabilitas1.jpg')) }}" class="w-full"
                                        alt="Tailwind CSS Carousel component" />
                                </div>
                                <div class="carousel-item w-full">
                                    <img src="{{ url(asset('storage/assets/disabilitas2.jpg')) }}" class="w-full"
                                        alt="Tailwind CSS Carousel component" />
                                </div>
                                <div class="carousel-item w-full">
                                    <img src="{{ url(asset('storage/assets/disabilitas3.jpg')) }}" class="w-full"
                                        alt="Tailwind CSS Carousel component" />
                                </div>
                                <div class="carousel-item w-full">
                                    <img src="{{ url(asset('storage/assets/disabilitas4.jpg')) }}" class="w-full"
                                        alt="Tailwind CSS Carousel component" />
                                </div>
                                <div class="carousel-item w-full">
                                    <img src="{{ url(asset('storage/assets/disabilitas5.jpg')) }}" class="w-full"
                                        alt="Tailwind CSS Carousel component" />
                                </div>
                                <div class="carousel-item w-full">
                                    <img src="{{ url(asset('storage/assets/disabilitas6.jpg')) }}" class="w-full"
                                        alt="Tailwind CSS Carousel component" />
                                </div>
                                <div class="carousel-item w-full">
                                    <img src="{{ url(asset('storage/assets/disabilitas7.jpg')) }}" class="w-full"
                                        alt="Tailwind CSS Carousel component" />
                                </div>
                            </div>
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
                                    title="Selengkapnya"
                                    extendClass="text-white text-center mt-2 lg:mt-6 py-2 lg:py-3" />
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
                                {{-- <script>
                                    var images = [
                                        "storage/assets/disabilitas2.jpg", // Ganti dengan URL gambar pertama
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
                                </script> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="section4" class="w-full justify-center items-start bg-[#EEEFF4]">
            <div class="fade4 w-full p-5 lg:p-20 pt-10 pb-10">
                <div class="text-center items-center">
                    <h1 class="text-2xl lg:text-4xl font-bold text-black pb-5 lg:pb-10">Jenis Disabilitas, Penyebab,
                        dan
                        Penanganan</h1>
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
            <div class="p-5 lg:p-20 pt-10 pb-10 gap-10 bg-white">
                <div class="fade5">
                    <h1 class="text-2xl lg:text-4xl text-center m-auto text-center font-bold text-black pb-5 lg:pb-5">
                        Sekolah
                        Luar Biasa</h1>
                    <div class="lg:flex justify-center gap-10">
                        <div class="lg:w-[40%] order-1 lg:order-2">
                            <div class="w-full h-80 carousel rounded-box lg:mt-5">
                                <div class="carousel-item w-full">
                                    <img src="{{ url(asset('storage/assets/slb1.jpg')) }}" class="w-full"
                                        alt="Tailwind CSS Carousel component" />
                                </div>
                                <div class="carousel-item w-full">
                                    <img src="{{ url(asset('storage/assets/slb2.jpg')) }}" class="w-full"
                                        alt="Tailwind CSS Carousel component" />
                                </div>
                                <div class="carousel-item w-full">
                                    <img src="{{ url(asset('storage/assets/slb3.jpg')) }}" class="w-full"
                                        alt="Tailwind CSS Carousel component" />
                                </div>
                                <div class="carousel-item w-full">
                                    <img src="{{ url(asset('storage/assets/slb4.jpg')) }}" class="w-full"
                                        alt="Tailwind CSS Carousel component" />
                                </div>
                                <div class="carousel-item w-full">
                                    <img src="{{ url(asset('storage/assets/slb5.jpg')) }}" class="w-full"
                                        alt="Tailwind CSS Carousel component" />
                                </div>
                            </div>
                        </div>
                        <div class="lg:w-[60%] order-2 lg:order-1">
                            <p class="py-6 text-black text-justify" id="pengertianSLB">Sekolah luar biasa (SLB) adalah
                                sebuah sekolah yang diperuntukkan bagi anak berkebutuhan khusus agar bisa mendapatkan
                                layanan dasar yangbisa membantu mendapatkan akses pendidikan. Dengan jenis yang berbeda,
                                berbeda pula strategi pembelajaran serta fasilitas yang dimiliki. SLB berperan sebagai
                                bagian dari lembaga pendidikan yang dapat mengakomodasi dan menyelenggarakan pendidikan
                                khusus untuk anak-anak dengan kebutuhan
                                khusus. Jenis kebutuhan tersebut mencakup berbagai kondisi, seperti tunanetra,
                                tunarungu,
                                tunawicara, tunadaksa, tunalaras, tunaganda, dan anak terbelakangan.</p>
                            <div class="gap-10 flex justify-between mt-5 lg:mt-0">
                                <x-buttitle-landing ref="/sekolah-luar-biasa" color="#FA8F21" width="[10rem]"
                                    title="Selengkapnya"
                                    extendClass="text-white text-center mt-2 lg:mt-6 py-2 lg:py-3" />
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
        </div>
        <div id="section6" class="w-full justify-center items-start bg-[#C4DDDE] pb-10 lg:pb-0 pt-10 lg:pt-0">
            <div class="fade6 p-5 lg:p-20">
                <div class="lg:w-full w-full lg:flex rounded shadow-lg border-solid border-4 border-[#297785]"
                    id="moving-border">
                    <div class="w-full lg:p-10">
                        <h1
                            class="text-2xl lg:text-4xl font-bold text-black pt-5 pb-5 lg:pb-10 text-center lg:text-center">
                            Karya/Keterampilan
                            SLB</h1>
                        <div class="grid grid-cols-1 gap-5 pl-5 pr-5 pb-5">
                            <div class="w-full rounded overflow-hidden">
                                <div id="default-carousel" class="relative w-full z-0" data-carousel="slide">
                                    <!-- Carousel wrapper -->
                                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                                        @foreach ($karya as $data)
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/' . $data['gambar'])) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-0"
                                                    alt="...">
                                            </div>
                                        @endforeach
                                    </div>
                                    <!-- Slider indicators -->
                                    <div
                                        class="absolute z-0 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                                        @for ($i = 0; $i < count($karya); $i++)
                                            <button type="button" class="w-3 h-3 rounded-full" aria-current="true"
                                                aria-label="Slide 1"
                                                data-carousel-slide-to="{{ $i }}"></button>
                                        @endfor
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
                                        Karya Peserta Didik SLB Provinsi Lampung
                                    </p>
                                </div>
                                <a href="/karya-slb" id="open-modal-button"
                                    class="text-white text-center mt-6 py-3 bg-[#FA8F21] hover:bg-[#D87815] w-[50%] lg:w-[50%] py-1 my-2 flex items-center justify-center rounded-md bg-[#FA8F21] hover:bg-[#D87815] focus:ring-4 dark:bg-[#FA8F21] dark:hover:bg-[#D87815] btn border-none m-auto">
                                    Selengkapnya
                                </a>
                                <x-pop-up-landing />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="section7">
            <div class="w-full flex flex-col justify-center items-center pt-20 pb-20 bg-white">
                <div class="fade7 w-[80%] bg-[#2E707B] p-5 rounded-lg">
                    <h1 class="lg:text-4xl md:text-4xl sm:text-2xl font-bold text-white text-center mb-5">SLB PROVINSI
                        LAMPUNG
                    </h1>
                    <x-carousel-home />
                    <p
                        class="text-sm md:text-base font-thin text-white text-justify md:text-center mt-5 pl-0 md:pl-24 md:pr-24">
                        Sekolah Luar Biasa Dinas Pendidikan Kebudayaan Provinsi Lampung <br>
                        Bidang Pembinaan Pendidikan Khusus
                        {{-- <span><a href="/sekolah-luar-biasa" target="_blank">Selengkapnya</a></span> --}}
                    </p>
                    <x-buttitle-landing ref="/sekolah-luar-biasa" color="#FA8F21" width="[10rem]"
                        title="Selengkapnya" extendClass="text-white text-center m-auto" />
                </div>
            </div>
        </div>
    </x-layout-landing>
</body>

</html>
