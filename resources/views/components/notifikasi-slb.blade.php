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

<div class="z-30">
    <button data-modal-target="timeline-modal" data-modal-toggle="timeline-modal"
        class="text-white text-center py-2 lg:py-2 my-2 flex items-center justify-center rounded-md bg-[#FA8F21] hover:bg-[#D87815] focus:ring-4 dark:bg-[#FA8F21] dark:hover:bg-[#D87815] pl-2 pr-2">
        {{-- {{ $title }} --}}
        Pengumuman SLB
        <span id="notificationBadge"
            class="inline-flex items-center justify-center w-4 h-4 ms-2 text-xs font-semibold text-[#FA8F21] bg-white rounded-full"
            style="display: none;">
            <!-- Jumlah notifikasi di sini -->
        </span>

    </button>
    <!-- Main modal -->
    <div id="timeline-modal" tabindex="-1" aria-hidden="true"
        class="hidden fixed top-0 right-0 left-[260px] bottom-0 flex items-center justify-center backdrop-blur-sm bg-opacity-50">
        <div class="relative p-4 w-full max-w-3xl max-h-full">
            <!-- Modal content -->
            <div class="relative rounded-lg shadow dark:bg-[#297785] bg-[#297785]">
                <!-- Modal header -->
                <div
                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-white border-white">
                    <div class="div">
                        <h3 class="text-lg font-semibold text-white dark:text-white">
                            Notifikasi Pengisian Data <br>
                        </h3>
                        <h5 class="text-white">
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
                <?php
                $notifications = [
                    [
                        'id' => 1,
                        'title' => 'Notifikasi 1',
                        'desk' => 'Deskripsi notifikasi 1 lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                        'start_time' => '12 Januari 2024, 23.59',
                        'end_time' => '15 Januari 2024, 23.59',
                    ],
                    [
                        'id' => 2,
                        'title' => 'Notifikasi 2',
                        'desk' => 'Deskripsi notifikasi 2 lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                        'start_time' => '13 Januari 2024, 23.59',
                        'end_time' => '16 Januari 2024, 23.59',
                    ],
                    [
                        'id' => 3,
                        'title' => 'Notifikasi 3',
                        'desk' => 'Deskripsi notifikasi 3 lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                        'start_time' => '14 Januari 2024, 23.59',
                        'end_time' => '17 Januari 2024, 23.59',
                    ],
                    [
                        'id' => 4,
                        'title' => 'Notifikasi 4',
                        'desk' => 'Deskripsi notifikasi 3 lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                        'start_time' => '14 Januari 2024, 23.59',
                        'end_time' => '17 Januari 2024, 23.59',
                    ],
                    [
                        'id' => 5,
                        'title' => 'Notifikasi 5',
                        'desk' => 'Deskripsi notifikasi 3 lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                        'start_time' => '14 Januari 2024, 23.59',
                        'end_time' => '17 Januari 2024, 23.59',
                    ],
                ];
                ?>
                <div class="p-4 md:p-5 lg:p-5">
                    <div class="overflow-y-auto h-[200px] hide-scrollbar">
                        <div class="relative">
                            <?php foreach ($notifications as $notification): ?>
                            <div class="mb-5 flex justify-between items-start">
                                <div>
                                    {{-- Judul Notifikasi --}}
                                    <h3 class="text-lg font-semibold text-white dark:text-white">
                                        <?= $notification['title'] ?>
                                    </h3>
                                    {{-- Deskripsi Notifikasi --}}
                                    <p class="text-sm text-white">
                                        <?= $notification['desk'] ?>
                                    </p>
                                </div>
                                {{-- Waktu notifikasi --}}
                                <div class="text-right font-bold pt-2">
                                    <p class="text-sm text-white">Mulai: <?= $notification['start_time'] ?></p>
                                    <p class="text-sm text-white">Akhir: <?= $notification['end_time'] ?></p>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
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
                // Toggle class untuk membuat teks berkedip
                notificationBadge.classList.toggle('text-blink');
            }, 500); // Mengatur interval kedipan menjadi setiap 500ms (0.5 detik)
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
