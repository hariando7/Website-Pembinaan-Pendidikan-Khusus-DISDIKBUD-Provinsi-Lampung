<div id="select-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-[#297785] rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                <h3 class="text-lg font-bold text-white">
                    Statistik Karya SLB
                </h3>
                <button type="button"
                    class="text-white bg-transparent hover:bg-[#D87815] hover:text-white rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center"
                    data-modal-toggle="select-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5">
                <p class="text-white mb-4">Pilih berdasarkan jenis statistik yang diinginkan</p>
                <ul class="space-y-4 mb-4">
                    <li>
                        <a href="/admin-statistik-karya-tahun" for="job-1"
                            class="inline-flex items-center justify-between w-full p-5 text-white border border-[#FA8F21] rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-white hover:text-white bg-[#FA8F21] hover:bg-[#D87815]">
                            <div class="block">
                                <div class="w-full text-lg font-semibold text-white">Statistik Tahun Ajaran</div>
                            </div>
                            <svg class="w-4 h-4 ms-3 rtl:rotate-180 text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
