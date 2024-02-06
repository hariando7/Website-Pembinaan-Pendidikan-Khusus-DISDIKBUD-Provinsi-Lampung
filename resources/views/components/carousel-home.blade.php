<div class="bg-white rounded-box p-3 lg:p-5">
    <div class="carousel gap-2 lg:gap-5 lg:ml-2">
        <div class="carousel-item">
            <img src="assets/landing/prov-lampung.png" alt="SLB" class="w-[95px] lg:w-[200px]" />
        </div>
        <div class="carousel-item">
            <img src="assets/landing/prov-lampung.png" alt="SLB" class="w-[95px] lg:w-[200px]" />
        </div>
        <div class="carousel-item">
            <img src="assets/landing/prov-lampung.png" alt="SLB" class="w-[95px] lg:w-[200px]" />
        </div>
        <div class="carousel-item">
            <img src="assets/landing/prov-lampung.png" alt="SLB" class="w-[95px] lg:w-[200px]" />
        </div>
        <div class="carousel-item">
            <img src="assets/landing/prov-lampung.png" alt="SLB" class="w-[95px] lg:w-[200px]" />
        </div>
        <div class="carousel-item">
            <img src="assets/landing/prov-lampung.png" alt="SLB" class="w-[95px] lg:w-[200px]" />
        </div>
        <div class="carousel-item">
            <img src="assets/landing/prov-lampung.png" alt="SLB" class="w-[95px] lg:w-[200px]" />
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
</script>
