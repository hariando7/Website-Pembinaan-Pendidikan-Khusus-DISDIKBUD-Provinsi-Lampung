<div class="z-30">
    <button data-modal-target="timeline-modal" data-modal-toggle="timeline-modal"
        class="text-white text-center py-2 lg:py-2 my-2 flex items-center justify-center rounded-md bg-[#FA8F21] hover:bg-[#D87815] focus:ring-4 dark:bg-[#FA8F21] dark:hover:bg-[#D87815] pl-2 pr-2">
        Notifikasi Dinas
    </button>
    <!-- Main modal -->
    <div id="timeline-modal" tabindex="-1" aria-hidden="true"
        class="hidden fixed top-0 right-0 left-[260px] bottom-0 flex items-center justify-center backdrop-blur-md bg-opacity-50">
        <div class="relative p-4 w-full max-w-3xl max-h-full">
            <!-- Modal content -->
            <div class="relative rounded-lg shadow dark:bg-[#297785] bg-[#297785]">
                <!-- Modal header -->
                <div
                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-white border-white">
                    <h3 class="text-lg font-semibold text-white dark:text-white">
                        Notifikasi SLB
                    </h3>
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
                <!-- Modal body -->
                <div class="p-4 md:p-5 lg:p-5">
                    <div class="overflow-y-auto h-[200px]">
                        <ol class="relative ">
                            <li class="mb-5">
                                <h3 class="flex items-start mb-1 text-lg font-semibold text-white dark:text-white">
                                    Notifikasi 1
                                </h3>
                            </li>
                            <li class="mb-5">
                                <h3 class="mb-1 text-lg font-semibold text-white dark:text-white">
                                    Notifikasi 2</h3>
                            </li>
                            <li class="mb-5">
                                <h3 class="mb-1 text-lg font-semibold text-white dark:text-white">
                                    Notifikasi 3</h3>
                            </li>
                            <li class="mb-5">
                                <h3 class="mb-1 text-lg font-semibold text-white dark:text-white">
                                    Notifikasi 4</h3>
                            </li>
                            <li class="mb-5">
                                <h3 class="mb-1 text-lg font-semibold text-white dark:text-white">
                                    Notifikasi 5</h3>
                            </li>
                        </ol>
                    </div>
                    {{-- <button
                                            class="text-white inline-flex w-full justify-center bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Kembali
                                        </button> --}}
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
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
