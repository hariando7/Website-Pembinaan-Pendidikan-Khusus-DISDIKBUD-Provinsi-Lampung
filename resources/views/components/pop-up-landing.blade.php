<style>
    @keyframes blink {
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

    .text-blink {
        animation: blink 3s infinite;
    }
</style>

<div class="z-50">
    <!-- Main modal -->
    <div id="timeline-modal" tabindex="-1" aria-hidden="true"
        class="hidden fixed top-0 right-0 left-0 bottom-0 flex items-center justify-center backdrop-blur-sm bg-opacity-50 z-50">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative rounded-lg shadow dark:bg-[#297785] bg-[#297785] z-50">
                <!-- Modal header -->
                <div
                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-white border-white">
                    <div class="div">
                        <h3 class="text-lg font-semibold text-white">
                            Kegiatan Bidang Pembinaan Pendidikan Khusus <br>
                        </h3>
                        <h5 class="text-white text-blink">
                            <x-time-saat-ini />
                        </h5>
                    </div>
                    <button type="button"
                        class="text-white bg-transparent hover:bg-[#D87815] hover:text-white rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center dark:hover:bg-[#D87815] dark:hover:text-white"
                        data-modal-close="timeline-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="p-4 md:p-5 lg:p-5">
                    <div class="overflow-y-auto h-[400px] hide-scrollbar">
                        <div class="relative gap-5">
                            <div class="card card-compact w-72 lg:w-full bg-transparent text-white shadow-xl mb-5">
                                <figure>
                                    {{-- <img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg"
                                            alt="kegiatan_SLB" /> --}}
                                    <div id="default-carousel" class="relative w-full z-0" data-carousel="slide">
                                        <!-- Carousel wrapper -->
                                        <div class="relative h-56 overflow-hidden rounded-lg md:h-80">
                                            <!-- Item 1 -->
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/a1.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <!-- Item 2 -->
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/a2.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <!-- Item 3 -->
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/a3.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <!-- Item 4 -->
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/a4.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <!-- Item 5 -->
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/a5.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <!-- Item 6 -->
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/a6.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <!-- Item 7 -->
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/a7.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <!-- Item 8 -->
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/a8.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <!-- Item 9 -->
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/a9.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <!-- Item 10 -->
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/a10.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <!-- Item 11 -->
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/a11.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <!-- Item 12 -->
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/a12.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <!-- Item 13 -->
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/a13.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <!-- Item 14 -->
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/a14.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <!-- Item 15 -->
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/a15.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
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
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 6 10">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                                </svg>
                                                <span class="sr-only">Next</span>
                                            </span>
                                        </button>
                                    </div>
                                </figure>
                                <div class="card-body">
                                    <h2 class="card-title text-lg font-semibold text-white">Gebyar dan Apresiasi ABK
                                        Provinsi
                                        Lampung</h2>
                                    <p>Gebyar dan Apresiasi ABK Provinsi Lampung</p>
                                    {{-- <div class="card-actions justify-end">
                                            <button class="btn bg-[#FA8F21] hover:bg-[#D87815] text-white border-none">Selengkapnya</button>
                                        </div> --}}
                                </div>
                            </div>
                            <div class="card card-compact w-72 lg:w-full bg-transparent text-white shadow-xl mb-5">
                                <figure>
                                    <div id="default-carousel" class="relative w-full z-0" data-carousel="slide">
                                        <!-- Carousel wrapper -->
                                        <div class="relative h-56 overflow-hidden rounded-lg md:h-72">
                                            <!-- Item 1 -->
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/b1.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/b2.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/b3.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/b4.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                        </div>
                                        <!-- Slider controls -->
                                        <button type="button"
                                            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                            data-carousel-prev>
                                            <span
                                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 6 10">
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
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 6 10">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                                </svg>
                                                <span class="sr-only">Next</span>
                                            </span>
                                        </button>
                                    </div>
                                </figure>
                                <div class="card-body">
                                    <h2 class="card-title text-lg font-semibold text-white">Bimtek Kekhususan bagi Guru
                                        SLB
                                    </h2>
                                    <p>Bimtek Kekhususan bagi Guru SLB</p>
                                </div>
                            </div>
                            <div class="card card-compact w-72 lg:w-full bg-transparent text-white shadow-xl mb-5">
                                <figure>
                                    <div id="default-carousel" class="relative w-full z-0" data-carousel="slide">
                                        <!-- Carousel wrapper -->
                                        <div class="relative h-56 overflow-hidden rounded-lg md:h-72">
                                            <!-- Item 1 -->
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/c1.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/c2.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/c3.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/c4.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/c5.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/c6.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/c7.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/c8.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                        </div>
                                        <!-- Slider controls -->
                                        <button type="button"
                                            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                            data-carousel-prev>
                                            <span
                                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 6 10">
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
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 6 10">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                                </svg>
                                                <span class="sr-only">Next</span>
                                            </span>
                                        </button>
                                    </div>
                                </figure>
                                <div class="card-body">
                                    <h2 class="card-title text-lg font-semibold text-white">Bimtek Shadow Teacher untuk
                                        Guru Sekolah Inklusi
                                    </h2>
                                    <p>Bimtek Shadow Teacher untuk Guru Sekolah Inklusi</p>
                                </div>
                            </div>
                            <div class="card card-compact w-72 lg:w-full bg-transparent text-white shadow-xl mb-5">
                                <figure>
                                    <div id="default-carousel" class="relative w-full z-0" data-carousel="slide">
                                        <!-- Carousel wrapper -->
                                        <div class="relative h-56 overflow-hidden rounded-lg md:h-72">
                                            <!-- Item 1 -->
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/d1.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/d2.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/d3.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/d4.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/d5.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/d6.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/d7.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/d8.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                        </div>
                                        <!-- Slider controls -->
                                        <button type="button"
                                            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                            data-carousel-prev>
                                            <span
                                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 6 10">
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
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 6 10">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                                </svg>
                                                <span class="sr-only">Next</span>
                                            </span>
                                        </button>
                                    </div>
                                </figure>
                                <div class="card-body">
                                    <h2 class="card-title text-lg font-semibold text-white">Bimtek Tenaga Pendidik
                                        Sekolah Inklusi Provinsi Lampung</h2>
                                    <p>Bimtek Tenaga Pendidik Sekolah Inklusi Provinsi Lampung</p>
                                </div>
                            </div>
                            {{-- kadis --}}
                            {{-- <div class="card card-compact w-72 lg:w-full bg-transparent text-white shadow-xl mb-5">
                                <figure>
                                    <div id="default-carousel" class="relative w-full z-0" data-carousel="slide">
                                        <!-- Carousel wrapper -->
                                        <div class="relative h-56 overflow-hidden rounded-lg md:h-72">
                                            <!-- Item 1 -->
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/e1.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/e2.png')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/e3.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/e4.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/e5.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                        </div>
                                        <!-- Slider controls -->
                                        <button type="button"
                                            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                            data-carousel-prev>
                                            <span
                                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 6 10">
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
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 6 10">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                                </svg>
                                                <span class="sr-only">Next</span>
                                            </span>
                                        </button>
                                    </div>
                                </figure>
                                <div class="card-body">
                                    <h2 class="card-title text-lg font-semibold text-white">Kadis</h2>
                                    <p>Kadis</p>
                                </div>
                            </div> --}}
                            {{-- kadis --}}
                            <div class="card card-compact w-72 lg:w-full bg-transparent text-white shadow-xl mb-5">
                                <figure>
                                    <div id="default-carousel" class="relative w-full z-0" data-carousel="slide">
                                        <!-- Carousel wrapper -->
                                        <div class="relative h-56 overflow-hidden rounded-lg md:h-72">
                                            <!-- Item 1 -->
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/f1.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/f2.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/f3.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/f4.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/f5.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                        </div>
                                        <!-- Slider controls -->
                                        <button type="button"
                                            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                            data-carousel-prev>
                                            <span
                                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 6 10">
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
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 6 10">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                                </svg>
                                                <span class="sr-only">Next</span>
                                            </span>
                                        </button>
                                    </div>
                                </figure>
                                <div class="card-body">
                                    <h2 class="card-title text-lg font-semibold text-white">Rakor Pendidikan Khusus
                                        Provinsi Lampung</h2>
                                    <p>Rakor Pendidikan Khusus Provinsi Lampung</p>
                                </div>
                            </div>
                            <div class="card card-compact w-72 lg:w-full bg-transparent text-white shadow-xl mb-5">
                                <figure>
                                    <div id="default-carousel" class="relative w-full z-0" data-carousel="slide">
                                        <!-- Carousel wrapper -->
                                        <div class="relative h-56 overflow-hidden rounded-lg md:h-72">
                                            <!-- Item 1 -->
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/g1.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/g2.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/g3.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/g4.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/g5.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/g6.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/g7.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/g8.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/g9.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                        </div>
                                        <!-- Slider controls -->
                                        <button type="button"
                                            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                            data-carousel-prev>
                                            <span
                                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 6 10">
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
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 6 10">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                                </svg>
                                                <span class="sr-only">Next</span>
                                            </span>
                                        </button>
                                    </div>
                                </figure>
                                <div class="card-body">
                                    <h2 class="card-title text-lg font-semibold text-white">Workshop Keterampilan bagi
                                        Guru SLB</h2>
                                    <p>Workshop Keterampilan bagi Guru SLB</p>
                                </div>
                            </div>
                            <div class="card card-compact w-72 lg:w-full bg-transparent text-white shadow-xl mb-5">
                                <figure>
                                    <div id="default-carousel" class="relative w-full z-0" data-carousel="slide">
                                        <!-- Carousel wrapper -->
                                        <div class="relative h-56 overflow-hidden rounded-lg md:h-72">
                                            <!-- Item 1 -->
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/h1.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/h2.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/h3.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/h4.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                <img src="{{ url(asset('storage/assets/h5.jpg')) }}"
                                                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                    alt="...">
                                            </div>
                                        </div>
                                        <!-- Slider controls -->
                                        <button type="button"
                                            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                            data-carousel-prev>
                                            <span
                                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 6 10">
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
                                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 6 10">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                                </svg>
                                                <span class="sr-only">Next</span>
                                            </span>
                                        </button>
                                    </div>
                                </figure>
                                <div class="card-body">
                                    <h2 class="card-title text-lg font-semibold text-white">Workshop Penguatan TIK bagi
                                        Guru SLB Provinsi Lampung</h2>
                                    <p>Workshop Penguatan TIK bagi Guru SLB Provinsi Lampung</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const openModalButton = document.getElementById("open-modal-button");
            const modal = document.getElementById("timeline-modal");

            openModalButton.addEventListener("click", function() {
                modal.classList.remove("hidden");
                modal.setAttribute("aria-hidden", "false");
            });

            const closeModalButton = modal.querySelector("[data-modal-close]");
            closeModalButton.addEventListener("click", function() {
                modal.classList.add("hidden");
                modal.setAttribute("aria-hidden", "true");
            });
        });
    </script>
</div>
