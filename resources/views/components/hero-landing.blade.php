{{-- <div class="bg-[url({{ $imgPath }})] w-full min-h-screen bg-cover bg-no-repeat bg-[#000000]/[0.46] bg-blend-overlay flex justify-center items-center"
    style="background-size: 100% 100%;">
    <div class="w-full lg:w-1/2 flex flex-col justify-center items-center mt-10">
        <div class="text-2xl lg:text-6xl font-bold text-white text-center">{{ $title }}</div>
        <marquee behavior="scroll" direction="left" class="text-sm md:text-xl font-thin text-white text-center mt-4">
            {{ $desc }}</marquee>

    </div>
</div> --}}
{{-- <div class="absolute bg-[#2F8386]/[0.66] -mt-10 w-full">
    <div class="text-center m-auto flex items-center p-1.5">
        <div class="ml-10 mr-10 w-full">
            <marquee behavior="bounce" direction="left" class="font-thin text-white text-center">
                "Sesungguhnya Allah tidak melihat kepada bentuk tubuhmu atau harta kekayaanmu, tetapi Dia melihat kepada
                hati dan amalmu." - Hadis dari Nabi Muhammad SAW "Janganlah kamu merendahkan orang yang memiliki
                kekurangan atau kelemahan, karena sesungguhnya setiap orang memiliki kelemahan yang berbeda." - Ali bin
                Abi Thalib
            </marquee>
        </div>
    </div>
</div> --}}

<section
    class="bg-center bg-no-repeat bg-[url('/assets/landing/bg-utama.png')] bg-gray-700 bg-blend-multiply w-full h-screen bg-cover relative slideshow">
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
                    <span class="text-sm">S</span><span class="lowercase">elengkapnya</span>
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
                <a href="/tentang-bidang-pembinaan-pendidikan-khusus"
                    class="btn inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400 bg-transparent">
                    <span class="text-sm">T</span><span class="lowercase">entang</span><span class="ml-1"></span>
                    <span class="text-sm">B</span><span class="lowercase">idang</span>

                </a>
            </div>
        </div>
    </div>
    <!-- Memindahkan konten ini ke bawah -->
    <div class="absolute bottom-0 bg-[#2F8386]/[0.66] w-full">
        <div class="text-center m-auto flex items-center p-1.5">
            <div class="ml-10 mr-10 w-full">
                <marquee behavior="bounce" direction="left" class="font-thin text-white text-center">
                    "Sesungguhnya Allah tidak melihat kepada bentuk tubuhmu atau harta kekayaanmu, tetapi Dia melihat
                    kepada
                    hati dan amalmu." - Hadis dari Nabi Muhammad SAW "Janganlah kamu merendahkan orang yang memiliki
                    kekurangan atau kelemahan, karena sesungguhnya setiap orang memiliki kelemahan yang berbeda." - Ali
                    bin
                    Abi Thalib
                </marquee>
            </div>
        </div>
    </div>
</section>

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
        "/assets/landing/bg-utama.png", // Ganti dengan URL gambar kedua
        "/assets/landing/strukturDinas.svg", // Ganti dengan URL gambar pertama
        "/assets/landing/apaItuDisabilitas.svg" // Ganti dengan URL gambar ketiga dst.
        // "/assets/landing/strukturDinas.svg",
        // "/assets/landing/strukturDinas.svg",
    ];

    var currentIndex = 0;
    var slideshowElement = document.querySelector('.slideshow');

    function changeBackground() {
        currentIndex = (currentIndex + 1) % slideshowImages.length;
        slideshowElement.style.backgroundImage = "url('" + slideshowImages[currentIndex] + "')";
    }

    setInterval(changeBackground, 4000); // Ganti gambar setiap 5 detik
</script>

{{-- <div class="grid grid-cols-1 gap-5 pr-5">
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
            <div class="absolute z-0 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                    data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
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
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">Judul </div>
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
</div>  --}}
