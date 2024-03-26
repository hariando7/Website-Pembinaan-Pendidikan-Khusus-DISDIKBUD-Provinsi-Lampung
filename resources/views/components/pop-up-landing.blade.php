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
        <div class="relative p-4 w-full max-w-3xl max-h-full">
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
                            <div class="">
                                <div class="card card-compact w-72 lg:w-full bg-transparent text-white shadow-xl mb-5">
                                    <figure>
                                        {{-- <img src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg"
                                            alt="kegiatan_SLB" /> --}}
                                        <div id="default-carousel" class="relative w-full z-0" data-carousel="slide">
                                            <!-- Carousel wrapper -->
                                            <div class="relative h-56 overflow-hidden rounded-lg md:h-72">
                                                <!-- Item 1 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/mXQHV2v/DSC02530.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 2 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/1JFscjM/DSC02520.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 3 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/whm1hRb/DSC02502.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 4 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/pwjyP75/DSC02500.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 5 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/ftXFpLL/DSC02480.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 6 -->
                                                {{-- <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/b2HjMt6/DSC02462.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 7 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/BCVwnzh/DSC02455.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 8 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/KGYh6Ff/DSC02438.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 9 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/D7ydzSx/DSC02421.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 10 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/VxbKdZ9/DSC02411.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 11 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/qMK2k9Z/DSC02397.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 12 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/F7Mpm5k/DSC02350.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 13 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/dMYqQbV/DSC02325.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 14 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/qdhYkNr/DSC02290.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 15 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/KVmhmcS/DSC02275.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div> --}}
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
                                                            stroke-linejoin="round" stroke-width="2"
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
                                                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 6 10">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="m1 9 4-4-4-4" />
                                                    </svg>
                                                    <span class="sr-only">Next</span>
                                                </span>
                                            </button>
                                        </div>
                                    </figure>
                                    <div class="card-body">
                                        <h2 class="card-title text-lg font-semibold text-white">Gebyar dan Apresiasi ABK Provinsi
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
                                                    <img src="https://i.ibb.co/4p6yJqx/IMG20230316101554.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 2 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/DRt8TFr/IMG20230315163409.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 3 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/TL4BWw6/IMG20230315095805.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 4 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/93sFmCr/IMG20230315081331.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 5 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/smhXpDD/IMG20230314092238.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 6 -->
                                                {{-- <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/wCTV61j/IMG20230314090701.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 7 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/NStkxC0/IMG20230313151459.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 8 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/7SNgFZ6/IMG20230313151220.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div> --}}
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
                                                            stroke-linejoin="round" stroke-width="2"
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
                                                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 6 10">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="m1 9 4-4-4-4" />
                                                    </svg>
                                                    <span class="sr-only">Next</span>
                                                </span>
                                            </button>
                                        </div>
                                    </figure>
                                    <div class="card-body">
                                        <h2 class="card-title text-lg font-semibold text-white">Workshop Keterampilan bagi Guru SLB
                                        </h2>
                                        <p>Workshop Keterampilan bagi Guru SLB</p>
                                    </div>
                                </div>
                            </div>
                            <div class="div">
                                <div class="card card-compact w-72 lg:w-full bg-transparent text-white shadow-xl mb-5">
                                    <figure>
                                        <div id="default-carousel" class="relative w-full z-0" data-carousel="slide">
                                            <!-- Carousel wrapper -->
                                            <div class="relative h-56 overflow-hidden rounded-lg md:h-72">
                                                <!-- Item 1 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/KsR7SR6/IMG20230512092511.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 2 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/3vz7B1S/IMG20230512104930.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 3 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/d6yWvMT/IMG20230509142950.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 4 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/d6tjHZP/IMG20230316115137.jpg"
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
                                                            stroke-linejoin="round" stroke-width="2"
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
                                                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 6 10">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="m1 9 4-4-4-4" />
                                                    </svg>
                                                    <span class="sr-only">Next</span>
                                                </span>
                                            </button>
                                        </div>
                                    </figure>
                                    <div class="card-body">
                                        <h2 class="card-title text-lg font-semibold text-white">Bimtek Kekhususan bagi Guru SLB
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
                                                    <img src="https://i.ibb.co/pd7BXdp/Whats-App-Image-2023-11-30-at-16-33-53-31e0d40c.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 2 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/VYz9CJn/Whats-App-Image-2023-11-01-at-10-46-33-4875f7d9.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 3 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/K7PM6vB/Whats-App-Image-2023-11-01-at-10-42-13-04c23043.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 4 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/SV4gjz2/Whats-App-Image-2023-11-01-at-10-41-22-090d6382.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 5 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/nbPq1WN/Whats-App-Image-2023-11-01-at-09-09-06-2a9d3cee.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 6 -->
                                                {{-- <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/H4D2cLZ/Whats-App-Image-2023-11-01-at-09-06-44-4ffacf60.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 7 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/r6SBcq1/Whats-App-Image-2023-11-01-at-09-04-23-c7970197.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 8 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/23MthXx/Whats-App-Image-2023-11-01-at-09-03-55-d5aa8f9a.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div> --}}
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
                                                            stroke-linejoin="round" stroke-width="2"
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
                                                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 6 10">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="m1 9 4-4-4-4" />
                                                    </svg>
                                                    <span class="sr-only">Next</span>
                                                </span>
                                            </button>
                                        </div>
                                    </figure>
                                    <div class="card-body">
                                        <h2 class="card-title text-lg font-semibold text-white">Bimtek Shadow Teacher untuk Guru
                                            Sekolah Inklusi</h2>
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
                                                    <img src="https://i.ibb.co/GvLyNXD/Whats-App-Image-2023-10-19-at-16-48-56-3e83377b.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 2 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/yFVXSs6/Whats-App-Image-2023-11-01-at-09-14-08-3818856e.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 3 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/rcNSQF5/Whats-App-Image-2023-10-19-at-16-48-55-24e891f7.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 4 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/nD1NxDF/Whats-App-Image-2023-10-19-at-16-47-58-7a7432a2.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 5 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/T4svGMJ/Whats-App-Image-2023-10-19-at-07-06-40-87711538.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 6 -->
                                                {{-- <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/qJL9wVv/Whats-App-Image-2023-10-19-at-07-06-37-5135546b.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 7 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/1qwNMML/Whats-App-Image-2023-10-17-at-15-15-24-ba04d44b.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 8 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/S6SnvsV/Whats-App-Image-2023-10-16-at-21-21-40-787d6fd4.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div> --}}
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
                                                            stroke-linejoin="round" stroke-width="2"
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
                                                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 6 10">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="m1 9 4-4-4-4" />
                                                    </svg>
                                                    <span class="sr-only">Next</span>
                                                </span>
                                            </button>
                                        </div>
                                    </figure>
                                    <div class="card-body">
                                        <h2 class="card-title text-lg font-semibold text-white">Bimtek Tenaga Pendidik Sekolah
                                            Inklusi Provinsi Lampung</h2>
                                        <p>Bimtek Tenaga Pendidik Sekolah Inklusi Provinsi Lampung</p>
                                    </div>
                                </div>
                                <div class="card card-compact w-72 lg:w-full bg-transparent text-white shadow-xl mb-5">
                                    <figure>
                                        <div id="default-carousel" class="relative w-full z-0" data-carousel="slide">
                                            <!-- Carousel wrapper -->
                                            <div class="relative h-56 overflow-hidden rounded-lg md:h-72">
                                                <!-- Item 1 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/wLBQmZt/3-Whats-App-Image-2023-10-02-at-14-00-26-0faab9c3.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 2 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/nLprNqD/2-Screenshot-2023-10-02-135531.png"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 3 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/p10TQfM/5-IMG-20230221-WA0059-681x511.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 4 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/DMptcw7/4-mesuji-kekurangan-guru-slb.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 5 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/q7n9h6M/1-Whats-App-Image-2023-10-02-at-13-07-15-fc904cdf.jpg"
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
                                                            stroke-linejoin="round" stroke-width="2"
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
                                                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 6 10">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="m1 9 4-4-4-4" />
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
                                </div>
                                <div class="card card-compact w-72 lg:w-full bg-transparent text-white shadow-xl mb-5">
                                    <figure>
                                        <div id="default-carousel" class="relative w-full z-0" data-carousel="slide">
                                            <!-- Carousel wrapper -->
                                            <div class="relative h-56 overflow-hidden rounded-lg md:h-72">
                                                <!-- Item 1 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/47d4St0/IMG20230309101819.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 2 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/Cn2VkcZ/IMG20230309154941.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 3 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/jHS1v9b/IMG20230309101647.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 4 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/71RKC6w/IMG20230309092825.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 5 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/gJ32Gkg/IMG20230309092812.jpg"
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
                                                            stroke-linejoin="round" stroke-width="2"
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
                                                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 6 10">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="m1 9 4-4-4-4" />
                                                    </svg>
                                                    <span class="sr-only">Next</span>
                                                </span>
                                            </button>
                                        </div>
                                    </figure>
                                    <div class="card-body">
                                        <h2 class="card-title text-lg font-semibold text-white">Rakor Pendidikan Khusus Provinsi
                                            Lampung</h2>
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
                                                    <img src="https://i.ibb.co/XjNG5Dh/IMG20231125115918.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 2 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/SvRbZsW/Whats-App-Image-2023-11-30-at-16-31-23-830b97bf.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 3 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/M93wY9Q/IMG20231125115655.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 4 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/NVRBhn5/Whats-App-Image-2023-11-30-at-16-30-28-b0569bf7.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 5 -->
                                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/h8YrWt9/Whats-App-Image-2023-11-30-at-16-29-19-11e4084c.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div>
                                                <!-- Item 6 -->
                                                {{-- <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                                    <img src="https://i.ibb.co/zVZ7BMN/Whats-App-Image-2023-11-30-at-16-29-12-a3acc976.jpg"
                                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                                                        alt="...">
                                                </div> --}}
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
                                                            stroke-linejoin="round" stroke-width="2"
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
                                                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="none" viewBox="0 0 6 10">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="m1 9 4-4-4-4" />
                                                    </svg>
                                                    <span class="sr-only">Next</span>
                                                </span>
                                            </button>
                                        </div>
                                    </figure>
                                    <div class="card-body">
                                        <h2 class="card-title text-lg font-semibold text-white">Workshop Penguatan TIK bagi Guru SLB Provinsi Lampung</h2>
                                        <p>Workshop Penguatan TIK bagi Guru SLB Provinsi Lampung</p>
                                    </div>
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
