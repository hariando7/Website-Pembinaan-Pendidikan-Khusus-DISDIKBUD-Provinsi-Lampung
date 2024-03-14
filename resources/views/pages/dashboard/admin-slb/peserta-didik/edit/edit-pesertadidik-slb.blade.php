<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Peserta Didik SLB</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="/assets/landing/prov-lampung2.svg">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />
    <style>
        @keyframes moving-border {
            0% {
                border-color: white;
            }

            50% {
                border-color: #297785;
            }

            100% {
                border-color: white;
            }
        }

        #moving-border {
            animation: moving-border 3s infinite;
        }
    </style>
</head>

<body class="bg-white z-10">
    <div>
        <x-dashboard-side-bar-slb />
        <div class="pl-[280px] h-screen pt-2 pr-5 pb-28">
            <div class="pb-2 mt-5">
                <div class="text-[#297785] font-bold text-[32px]">Edit Peserta Didik SLB
                </div>
                <div class="flex justify-between pb-2">
                    <div class="div">
                        <x-buttitle-landing ref="/admin-pesertadidik-slb" color="#FA8F21" width="[8rem]"
                            title="kembali" extendClass="text-white text-center py-2 lg:py-2 hover:bg-[#D87815]" />
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="bg-[#FF0000] hover:bg-[#D51717] p-1 rounded-md cursor-pointer" title="Delete">
                            <button data-modal-toggle="popup-modal-delete"
                                class="bg-[#FF0000] hover:bg-[#D51717] p-1 rounded-md cursor-pointer" title="Delete"
                                type="button">
                                <x-svg-delete />
                            </button>
                            <div id="popup-modal-delete" tabindex="-1" aria-hidden="true"
                                class="z-50 hidden fixed top-0 right-0 left-[260px] bottom-0 flex items-center justify-center backdrop-blur-md bg-opacity-50">
                                <div class="relative p-4 w-full max-w-md max-h-full">
                                    <div class="relative bg-[#297785] rounded-lg shadow">
                                        <button type="button"
                                            class="absolute top-3 end-2.5 text-white bg-transparent hover:bg-[#D87815] hover:text-white rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                            data-modal-hide="popup-modal-delete">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="white" viewBox="0 0 14 14">
                                                <path stroke="white" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                        <div class="p-4 md:p-5 text-center">
                                            <svg class="mx-auto mb-4 text-white w-12 h-12" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                            </svg>
                                            <h3 class="mb-5 text-lg font-normal text-white ">
                                                Anda Yakin Ingin Menghapus Data Ini?</h3>
                                            <button data-modal-hide="popup-modal-delete" type="button"
                                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                Ya
                                            </button>
                                            <button data-modal-hide="popup-modal-delete" type="button"
                                                class="py-2.5 px-5 ms-3 text-sm font-medium text-white bg-[#FA8F21] rounded-lg hover:bg-[#D87815] hover:text-white focus:z-10 ">Tidak</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                const modal = document.getElementById('popup-modal-delete');

                                const toggleButton = document.querySelector('[data-modal-toggle="popup-modal-delete"]');
                                toggleButton.addEventListener('click', () => {
                                    modal.classList.remove('hidden');
                                    modal.setAttribute('aria-hidden', 'false');
                                    modal.setAttribute('tabindex', '0');
                                });

                                const closeButton = document.querySelector('[data-modal-hide="popup-modal-delete"]');
                                closeButton.addEventListener('click', () => {
                                    modal.classList.add('hidden');
                                    modal.setAttribute('aria-hidden', 'true');
                                    modal.setAttribute('tabindex', '-1');
                                });

                                const confirmButtons = document.querySelectorAll('[data-modal-hide="popup-modal-delete"]');
                                confirmButtons.forEach(button => {
                                    button.addEventListener('click', () => {
                                        modal.classList.add('hidden');
                                        modal.setAttribute('aria-hidden', 'true');
                                        modal.setAttribute('tabindex', '-1');
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rounded shadow-lg border-solid border-4 border-[#297785] p-5 font-bold text-black"
                id="moving-border">
                {{-- isi konten disini --}}
                <div class=''>
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <label htmlFor="name">Nama Peserta Didik</label>
                            <input type="text" id="name"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Nama Peserta Didik" required />
                        </div>
                        <div class="flex flex-col flex-1 mb-4">
                            <label htmlFor="jeniskelamin">Jenis Kelamin (JK)</label>
                            <input type="text" id="jeniskelamin"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Jenis Kelamin" required />
                        </div>
                    </div>
                </div>
                <div class=''>
                    <div class="flex gap-x-2">
                        {{-- <div class="flex flex-col flex-1 mb-4">
                            <label htmlFor="namasekolah">Nama Sekolah</label>
                            <input type="text" id="namasekolah"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Nama Sekolah" required />
                        </div> --}}
                        <div class="flex flex-col flex-1 mb-4">
                            <label htmlFor="jenisketunaan">Jenis Ketunaan</label>
                            <input type="text" id="jenisketunaan"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Jenis Ketunaan" required />
                        </div>
                    </div>
                </div>
                <div class=''>
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <label htmlFor="kelas">Kelas</label>
                            <input type="text" id="kelas"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Kelas" required />
                        </div>
                        <div class="flex flex-col flex-1 mb-4">
                            <label htmlFor="romble">Romble</label>
                            <input type="text" id="romble"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Romble" required />
                        </div>
                    </div>
                </div>
                <div class="flex justify-end mt-4">
                    <button type="submit"
                        class="flex justify-center py-2 items-center w-32 h-9 bg-[#FA8F21] hover:bg-[#D87815] focus:ring-4 focus:ring-[#D87815] text-white rounded-lg text-sm">
                        <div class="flex gap-2">
                            <div class="pt-1">
                                <svg width="20" height="14" viewBox="0 0 20 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 1.5L6.7633 12.5L1.20117 7.5" stroke="white" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="div">
                                Update
                            </div>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
