{{-- <div class="bg-white rounded-box">
    <div class="carousel gap-2 lg:gap-5 lg:ml-2">
        <div class="carousel-item">
            <img src="assets/landing/prov-lampung2.svg" alt="SLB" class="w-[95px] lg:w-[200px]" />
        </div>
        <div class="carousel-item">
            <img src="assets/landing/prov-lampung2.svg" alt="SLB" class="w-[95px] lg:w-[200px]" />
        </div>
        <div class="carousel-item">
            <img src="assets/landing/prov-lampung2.svg" alt="SLB" class="w-[95px] lg:w-[200px]" />
        </div>
        <div class="carousel-item">
            <img src="assets/landing/prov-lampung2.svg" alt="SLB" class="w-[95px] lg:w-[200px]" />
        </div>
        <div class="carousel-item">
            <img src="assets/landing/prov-lampung2.svg" alt="SLB" class="w-[95px] lg:w-[200px]" />
        </div>
        <div class="carousel-item">
            <img src="assets/landing/prov-lampung2.svg" alt="SLB" class="w-[95px] lg:w-[200px]" />
        </div>
        <div class="carousel-item">
            <img src="assets/landing/prov-lampung2.svg" alt="SLB" class="w-[95px] lg:w-[200px]" />
        </div>
    </div>
</div>

<!-- Inisialisasi Slick Carousel -->
<script>
    $(document).ready(function() {
        $('.carousel').slick({
            autoplay: true,
            autoplaySpeed: 2000, // Waktu geser otomatis dalam milidetik (misalnya 2000 untuk 2 detik)
            arrows: false, // Hilangkan panah navigasi jika tidak diperlukan
            dots: false, // Tampilkan titik navigasi jika diinginkan
            slidesToShow: 4, // Jumlah gambar yang ditampilkan pada setiap slide
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2
                    }
                }
            ]
        });
    });
</script> --}}


<div class="grid grid-cols-1 gap-5">
    <div class="w-full rounded overflow-hidden">
        <div id="default-carousel" class="relative w-full z-0" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-48 overflow-hidden rounded-lg md:h-96">
                <!--Balam - SLB A Bina Insani -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="{{ url(asset('storage/assets/plang_sekolah/Balam - SLB A Bina Insani/plang_sekolah.jpg')) }}"
                        class="absolute block w-full -translate-x-2/3 -translate-y-2/3 top-[80%] lg:top-[125%] left-2/3 z-30"
                        alt="...">
                </div>
                <!--Balam - SLB Dharma Bhakti Dharma Pertiwi -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="{{ url(asset('storage/assets/plang_sekolah/Balam - SLB Dharma Bhakti Dharma Pertiwi/plang_sekolah.png')) }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                        alt="...">
                </div>
                <!-- Balam - SLB GROWING HOPE -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="{{ url(asset('storage/assets/plang_sekolah/Balam - SLB GROWING HOPE/plang_sekolah.png')) }}"
                        class="absolute block w-full -translate-x-2/3 -translate-y-2/3 top-2/3 left-2/3 z-30"
                        alt="...">
                </div>
                <!--Balam - SLB INSAN PRIMA BESTARI -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="{{ url(asset('storage/assets/plang_sekolah/Balam - SLB INSAN PRIMA BESTARI/plang_sekolah.png')) }}"
                        class="absolute block w-full -translate-x-2/3 -translate-y-2/3 top-2/3 left-2/3 z-30"
                        alt="...">
                </div>
                <!-- Balam - SLB Pelita Kasih -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="{{ url(asset('storage/assets/plang_sekolah/Balam - SLB Pelita Kasih/plang_sekolah.png')) }}"
                        class="absolute block w-full -translate-x-2/3 -translate-y-2/3 top-2/3 left-2/3 z-30"
                        alt="...">
                </div>
                <!-- Balam - SLB YAMET SCHOOL CENDANA LAMPUNG -->
                {{-- <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="{{ url(asset('storage/assets/plang_sekolah/Balam - SLB YAMET SCHOOL CENDANA LAMPUNG/plang_sekolah.jpg')) }}"
                        class="absolute block w-full -translate-x-2/3 -translate-y-2/3 top-2/3 left-2/3 z-30"
                        alt="...">
                </div> --}}
                <!--Balam - SLBIT Baitul Jannah -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="{{ url(asset('storage/assets/plang_sekolah/Balam - SLBIT Baitul Jannah/plang_sekolah.jpg')) }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 lg:top-[1%] left-1/2 z-30"
                        alt="...">
                </div>
                <!--Balam - SLBN PKK PROVINSI LAMPUNG -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="{{ url(asset('storage/assets/plang_sekolah/Balam - SLBN PKK PROVINSI LAMPUNG/plang_sekolah.jpg')) }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                        alt="...">
                </div>
                <!--  Lampung Utara - SLBN SUKAMAJU LAMPUNG UTARA -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="{{ url(asset('storage/assets/plang_sekolah/Lampung Utara - SLBN SUKAMAJU LAMPUNG UTARA/plang_sekolah.png')) }}"
                        class="absolute block w-full -translate-x-2/3 -translate-y-2/3 top-2/3 left-2/3 z-30"
                        alt="...">
                </div>
                <!--  Lamsel - SLB IT HARAPAN BANGSA -->
                {{-- <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="{{ url(asset('storage/assets/plang_sekolah/Lamsel - SLB IT HARAPAN BANGSA/plang_sekolah.jpg')) }}"
                        class="absolute block w-full -translate-x-2/3 -translate-y-2/3 top-2/3 left-2/3 z-30"
                        alt="...">
                </div> --}}
                <!-- Lamsel - SLB NEGERI SIDOMULYO -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="{{ url(asset('storage/assets/plang_sekolah/Lamsel - SLB NEGERI SIDOMULYO/plang_sekolah.jpg')) }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                        alt="...">
                </div>
                <!-- Lamsel - SLB PELITA BUNGA -->
                {{-- <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="{{ url(asset('storage/assets/plang_sekolah/Lamsel - SLB PELITA BUNGA/plang_sekolah.jpg')) }}"
                        class="absolute block w-full -translate-x-2/3 -translate-y-2/3 top-2/3 left-2/3 z-30"
                        alt="...">
                </div> --}}
                <!--Lamteng - SLB Kurnia Poncowati -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="{{ url(asset('storage/assets/plang_sekolah/Lamteng - SLB Kurnia Poncowati/plang_sekolah.png')) }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 lg:top-[80%] left-1/2 z-30"
                        alt="...">
                </div>
                <!-- Lamteng - SLB NEGERI KOTA GAJAH -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="{{ url(asset('storage/assets/plang_sekolah/Lamteng - SLB NEGERI KOTA GAJAH/plang_sekolah.jpeg')) }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 lg:top-[60%] left-1/2 z-30"
                        alt="...">
                </div>
                <!--  Lamteng - SLB SRIKANDI BANDAR SURABAYA -->
                {{-- <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="{{ url(asset('storage/assets/plang_sekolah/Lamteng - SLB SRIKANDI BANDAR SURABAYA/plang_sekolah.jpg')) }}"
                        class="absolute block w-full -translate-x-2/3 -translate-y-2/3 top-2/3 left-2/3 z-30"
                        alt="...">
                </div> --}}
                <!-- Lamtim - SLB NEGERI LAMPUNG TIMUR -->
                {{-- <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="{{ url(asset('storage/assets/plang_sekolah/Lamtim - SLB NEGERI LAMPUNG TIMUR/plang_sekolah.jpg')) }}"
                        class="absolute block w-full -translate-x-2/3 -translate-y-2/3 top-2/3 left-2/3 z-30"
                        alt="...">
                </div> --}}
                <!-- Mesuji - SLB Negeri Mesuji -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="{{ url(asset('storage/assets/plang_sekolah/Mesuji - SLB Negeri Mesuji/plang_sekolah.jpg')) }}"
                        class="absolute block w-full -translate-x-2/3 -translate-y-2/3 top-2/3 left-2/3 z-30"
                        alt="...">
                </div>
                <!-- Metro - SLB CATUR BINA BANGSA -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="{{ url(asset('storage/assets/plang_sekolah/Metro - SLB CATUR BINA BANGSA/plang_sekolah.jpeg')) }}"
                        class="absolute block w-full -translate-x-2/3 -translate-y-2/3 top-[80%] lg:top-[100%] left-2/3 z-30"
                        alt="...">
                </div>
                <!-- Metro - SLB HARAPAN IBU -->
                {{-- <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="{{ url(asset('storage/assets/plang_sekolah/Metro - SLB HARAPAN IBU/plang_sekolah.jpg')) }}"
                        class="absolute block w-full -translate-x-2/3 -translate-y-2/3 top-2/3 left-2/3 z-30"
                        alt="...">
                </div> --}}
                <!-- Metro - SLB INSAN MADANI METRO -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="{{ url(asset('storage/assets/plang_sekolah/Metro - SLB INSAN MADANI METRO/plang_sekolah.jpg')) }}"
                        class="absolute block w-full -translate-x-2/3 -translate-y-2/3 top-[80%] lg:top-[150%] left-2/3 z-30"
                        alt="...">
                </div>
                <!--  Metro - SLB N METRO-->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="{{ url(asset('storage/assets/plang_sekolah/Metro - SLB N METRO/plang_sekolah.png')) }}"
                        class="absolute block w-full -translate-x-2/3 -translate-y-2/3 top-2/3 left-2/3 z-30"
                        alt="...">
                </div>
                <!--  Metro - SLB TRI BHAKTI -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="{{ url(asset('storage/assets/plang_sekolah/Metro - SLB TRI BHAKTI/plang_sekolah.jpeg')) }}"
                        class="absolute block w-full -translate-x-2/3 -translate-y-2/3 top-2/3 lg:top-[100%] left-2/3 z-30"
                        alt="...">
                </div>
                <!-- Metro - SLB WIYATA DHARMA -->
                {{-- <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="{{ url(asset('storage/assets/plang_sekolah/Metro - SLB WIYATA DHARMA/plang_sekolah.jpg')) }}"
                        class="absolute block w-full -translate-x-2/3 -translate-y-2/3 top-2/3 left-2/3 z-30"
                        alt="...">
                </div> --}}
                <!-- Pesawaran - SLB SINAR HAFIZAH -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="{{ url(asset('storage/assets/plang_sekolah/Pesawaran - SLB SINAR HAFIZAH/plang_sekolah.png')) }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-30"
                        alt="...">
                </div>
                <!-- Pesisir Barat - SLB NEGERI PESISIR BARAT -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="{{ url(asset('storage/assets/plang_sekolah/Pesisir Barat - SLB NEGERI PESISIR BARAT/plang_sekolah.jpg')) }}"
                        class="absolute block w-full -translate-x-2/3 -translate-y-2/3 top-2/3 top-[100%] left-2/3 z-30"
                        alt="...">
                </div>
                <!--  Pringsewu - SLB NEGERI PRINGSEWU -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="{{ url(asset('storage/assets/plang_sekolah/Pringsewu - SLB NEGERI PRINGSEWU/plang_sekolah.jpg')) }}"
                        class="absolute block w-full -translate-x-2/3 -translate-y-2/3 top-2/3 lg:top-[90%] left-2/3 z-30"
                        alt="...">
                </div>
                <!-- Pringsewu - SLB PUTRA BAKTI  -->
                {{-- <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="{{ url(asset('storage/assets/plang_sekolah/Pringsewu - SLB PUTRA BAKTI/plang_sekolah.jpg')) }}"
                        class="absolute block w-full -translate-x-2/3 -translate-y-2/3 top-2/3 left-2/3 z-30"
                        alt="...">
                </div> --}}
                <!-- Tanggamus - SLB NEGERI TANGGAMUS  -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="{{ url(asset('storage/assets/plang_sekolah/Tanggamus - SLB NEGERI TANGGAMUS/plang_sekolah.png')) }}"
                        class="absolute block w-full -translate-x-2/3 -translate-y-2/3 top-2/3 left-2/3 z-30"
                        alt="...">
                </div>
                <!--  Tulang Bawang - SLB NEGERI TULANG BAWANG -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="{{ url(asset('storage/assets/plang_sekolah/Tulang Bawang - SLB NEGERI TULANG BAWANG/plang_sekolah.png')) }}"
                        class="absolute block w-full -translate-x-2/3 -translate-y-2/3 top-2/3 lg:top-[80%] left-2/3 z-30"
                        alt="...">
                </div>
                <!-- Tulang Bawang Barat - SLB Negeri Tulang Bawang Barat -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="{{ url(asset('storage/assets/plang_sekolah/Tulang Bawang Barat - SLB Negeri Tulang Bawang Barat/plang_sekolah.jpg')) }}"
                        class="absolute block w-full -translate-x-2/3 -translate-y-2/3 top-2/3 left-2/3 z-30"
                        alt="...">
                </div>
                <!-- Way Kanan - SLB N Baradatu -->
                <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                    <img src="{{ url(asset('storage/assets/plang_sekolah/Way Kanan - SLB N Baradatu/plang_sekolah.jpg')) }}"
                        class="absolute block w-full -translate-x-2/3 -translate-y-2/3 top-2/3 left-2/3 z-30"
                        alt="...">
                </div>
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
    </div>
</div>
