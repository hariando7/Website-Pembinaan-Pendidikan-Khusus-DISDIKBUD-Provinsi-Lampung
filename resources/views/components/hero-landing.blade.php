    <style>
        .animate-bounce {
            animation-duration: 1.5s;
        }
    </style>

    <section id="scrollTop"
        class="bg-center bg-no-repeat bg-[url('/assets/landing/b1.jpg')] bg-gray-700 bg-blend-multiply w-full h-screen bg-cover relative slideshow">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56 ">
            <div class="flex flex-col justify-center items-center mt-28 lg:mt-0">
                <h1 class="mb-4 text-3xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                    {{ $title }}</h1>
                <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-12 lg:px-48">
                    <marquee behavior="scroll" direction="left"
                        class="text-sm md:text-xl font-thin text-white text-center mt-4">
                        {{ $desc }}</marquee>
                </p>
                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                    <a href="{{ $ref }}"
                        class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-[#FA8F21] hover:bg-[#D87815] focus:ring-4 focus:ring-[#FA8F21] dark:focus:ring-[#FA8F21] btn">
                        <span class="uppercase">S</span><span class="lowercase">elengkapnya</span>
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                    <a href="/tentang-bidang-pembinaan-pendidikan-khusus"
                        class="btn inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400 bg-transparent">
                        <span class="uppercase">T</span><span class="lowercase">entang</span><span
                            class="ml-1"></span>
                        <span class="uppercase">B</span><span class="lowercase">idang</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- Memindahkan konten ini ke bawah -->
        <div class="absolute bottom-0 bg-[#2F8386]/[0.66] w-full">
            <div class="text-center m-auto flex items-center p-1.5">
                <div class="ml-10 mr-10 w-full">
                    <marquee behavior="bounce" direction="left" class="font-thin text-white text-center">
                        "Sesungguhnya Allah tidak melihat kepada bentuk tubuhmu atau harta kekayaanmu, tetapi Dia
                        melihat
                        kepada
                        hati dan amalmu." - Hadis dari Nabi Muhammad SAW "Janganlah kamu merendahkan orang yang memiliki
                        kekurangan atau kelemahan, karena sesungguhnya setiap orang memiliki kelemahan yang berbeda." -
                        Ali
                        bin
                        Abi Thalib
                    </marquee>
                </div>
            </div>
        </div>
    </section>
    <div class="scroolTop">
        <a href='#scrollTop'
            class="bg-[#FA8F21]/[0.20] btn border-none hover:bg-[#D87815] text-white font-bold py-2 px-4 rounded fixed z-50 bottom-10 right-4 animate-bounce"
            onclick="smoothScroll('#scrollTop')">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 14 14">
                <path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    d="M7 13.5V.5M10.5 4L7 .5L3.5 4" />
            </svg>
        </a>
    </div>

    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>

    <script>
        function smoothScroll(target) {
            var targetElement = document.querySelector(target);
            window.scrollTo({
                top: targetElement.offsetTop,
                behavior: 'smooth'
            });
        }
    </script>

    <style>
        @keyframes slide {
            0% {
                opacity: 0;
            }

            25% {
                opacity: 1;
            }

            75% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        .slide-show {
            animation: slide 10s infinite;
        }

        .slideshow {
            transition: background-image 2s ease;
            /* Menambahkan transisi pada perubahan background-image */
        }
    </style>


    <script>
        var slideshowImages = [
            // "{{ url(asset('storage/assets/a1.jpg')) }}", // Ganti dengan URL gambar kedua
            "{{ url(asset('storage/assets/b1.jpg')) }}", // Ganti dengan URL gambar pertama
            "{{ url(asset('storage/assets/c8.jpg')) }}", // Ganti dengan URL gambar ketiga dst.
            "{{ url(asset('storage/assets/a14.jpg')) }}",
            // "{{ url(asset('storage/assets/e1.jpg')) }}",
            // "/assets/landing/f1.jpg"
            // "/assets/landing/strukturDinas.svg",
            // "/assets/landing/strukturDinas.svg",
        ];

        var currentIndex = 0;
        var slideshowElement = document.querySelector('.slideshow');

        function changeBackground() {
            currentIndex = (currentIndex + 1) % slideshowImages.length;
            slideshowElement.style.backgroundImage = "url('" + slideshowImages[currentIndex] + "')";
        }

        setInterval(changeBackground, 3500); // Ganti gambar setiap 3 detik
    </script>
