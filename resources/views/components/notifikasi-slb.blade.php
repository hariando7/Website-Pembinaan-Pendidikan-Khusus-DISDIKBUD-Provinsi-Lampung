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

<!-- Main modal -->
<div id="default-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative rounded-lg shadow bg-[#297785]">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <div class="div">
                    <h3 class="text-lg font-semibold text-white dark:text-white">
                        Notifikasi Bidang Pembinaan Pendidikan Khusus<br>
                    </h3>
                    <h5 class="text-white">
                        {{-- <x-time-saat-ini /> --}}
                    </h5>
                </div>
                <button type="button"
                    class="text-white bg-transparent hover:bg-[#D87815] hover:text-white rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center dark:hover:bg-[#D87815] dark:hover:text-white"
                    data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <?php
            // $notifications = [
            //     [
            //         'id' => 1,
            //         'title' => 'Notifikasi 1',
            //         'desk' => 'Deskripsi notifikasi 1 lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            //         'start_time' => '12 Januari 2024, 23.59',
            //         'end_time' => '15 Januari 2024, 23.59',
            //     ],
            ?>
            <div class="p-4 md:p-5 lg:p-5">
                <div class="overflow-y-auto h-[200px] hide-scrollbar">
                    <div class="relative">
                        <?php $counter = 1; foreach ($notifications as $notification): ?>
                        <div class="mb-5">
                            <div class="flex justify-between items-start">
                                <div>
                                    {{-- Judul Notifikasi --}}
                                    <h3 class="text-lg font-bold text-white">
                                        <?= $counter ?>. <?= $notification['nama'] ?>
                                    </h3>
                                    {{-- Deskripsi Notifikasi --}}
                                    <p class="text-sm text-white text-justify">
                                        <?= $notification['detail'] ?>
                                    </p>
                                </div>
                                {{-- Waktu notifikasi --}}
                            </div>
                            <div class="flex justify-between font-bold mt-2 pb-2 border-b border-gray-200">
                                <p class="text-sm text-white">Awal Notifikasi: <?= $notification['tanggalMulai'] ?></p>
                                <p class="text-sm text-white">Akhir Notifikasi: <?= $notification['tanggalAkhir'] ?></p>
                            </div>
                        </div>
                        <?php $counter++; endforeach; ?>
                    </div>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b">
                <button data-modal-hide="default-modal" type="button"
                    class="btn border-none m-auto flex text-white bg-[#FA8F21] hover:bg-[#D87815] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Mengerti</button>
            </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Hitung jumlah notifikasi
        const notificationsCount = <?php echo count($notifications); ?>;
        // Perbarui badge notifikasi
        const notificationBadge = document.getElementById('notificationBadge');
        if (notificationBadge) {
            notificationBadge.innerText = notificationsCount;
            if (notificationsCount > 0) {
                notificationBadge.style.display = 'inline-block';
            } else {
                notificationBadge.style.display = 'none';
            }
            setInterval(function() {
                notificationBadge.classList.toggle('text-blink');
            }, 500);
        }

        const modalButtons = document.querySelectorAll('[data-modal-toggle]');
        const modalCloseButtons = document.querySelectorAll('[data-modal-close]');
        modalButtons.forEach(button => {
            button.addEventListener('click', function() {
                const targetModalId = this.getAttribute('data-modal-target');
                const targetModal = document.getElementById(targetModalId);
                if (targetModal) {
                    targetModal.classList.toggle('hidden');
                    targetModal.setAttribute('aria-hidden', targetModal.classList.contains(
                        'hidden').toString());
                }
            });
        });
        modalCloseButtons.forEach(button => {
            button.addEventListener('click', function() {
                const targetModalId = this.getAttribute('data-modal-close');
                const targetModal = document.getElementById(targetModalId);
                if (targetModal) {
                    targetModal.classList.add('hidden');
                    targetModal.setAttribute('aria-hidden', 'true');
                }
            });
        });
    });
</script>
