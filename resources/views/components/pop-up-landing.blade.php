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
                        <h3 class="text-lg font-semibold text-white dark:text-white">
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
                        <div class="relative lg:flex gap-5">
                            <div class="">
                                <div class="card card-compact w-72 lg:w-80 bg-transparent text-white shadow-xl mb-5">
                                    <figure><img
                                            src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg"
                                            alt="kegiatan_SLB" /></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">kegiatan_SLB!</h2>
                                        <p>If a dog chews kegiatan_SLB whose kegiatan_SLB does he choose?</p>
                                        <div class="card-actions justify-end">
                                            <button class="btn bg-[#FA8F21] hover:bg-[#D87815] text-white border-none">Selengkapnya</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-compact w-72 lg:w-80 bg-transparent text-white shadow-xl mb-5">
                                    <figure><img
                                            src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg"
                                            alt="kegiatan_SLB" /></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">kegiatan_SLB!</h2>
                                        <p>If a dog chews kegiatan_SLB whose kegiatan_SLB does he choose?</p>
                                        <div class="card-actions justify-end">
                                            <button class="btn bg-[#FA8F21] hover:bg-[#D87815] text-white border-none">Selengkapnya</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="div">
                                <div class="card card-compact w-72 lg:w-80 bg-transparent text-white shadow-xl mb-5">
                                    <figure><img
                                            src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg"
                                            alt="kegiatan_SLB" /></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">kegiatan_SLB!</h2>
                                        <p>If a dog chews kegiatan_SLB whose kegiatan_SLB does he choose?</p>
                                        <div class="card-actions justify-end">
                                            <button class="btn bg-[#FA8F21] hover:bg-[#D87815] text-white border-none">Selengkapnya</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-compact w-72 lg:w-80 bg-transparent text-white shadow-xl mb-5">
                                    <figure><img
                                            src="https://daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg"
                                            alt="kegiatan_SLB" /></figure>
                                    <div class="card-body">
                                        <h2 class="card-title">kegiatan_SLB!</h2>
                                        <p>If a dog chews kegiatan_SLB whose kegiatan_SLB does he choose?</p>
                                        <div class="card-actions justify-end">
                                            <button class="btn bg-[#FA8F21] hover:bg-[#D87815] text-white border-none">Selengkapnya</button>
                                        </div>
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
