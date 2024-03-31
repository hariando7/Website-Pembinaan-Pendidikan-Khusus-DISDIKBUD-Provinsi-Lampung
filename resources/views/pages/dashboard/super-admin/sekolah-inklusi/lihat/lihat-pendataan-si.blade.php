<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sekolah Inklusi | Lihat Data</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="/assets/landing/prov-lampung2.svg">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />
    <style>
        .hide-scrollbar {
            scrollbar-width: thin;
            scrollbar-color: transparent transparent;
            overflow: hidden;
        }

        .hide-scrollbar::-webkit-scrollbar {
            width: 6px;
        }

        .hide-scrollbar::-webkit-scrollbar-thumb {
            background-color: transparent;
        }
    </style>
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
        <x-dashboard-side-bar-sa />
        <div class="pl-[280px] max-h-full pt-2 pr-5 pb-[85px]">
            <div class="text-[#297785] font-bold text-[32px]">Lihat
                Pendataan Sekolah Inklusi Provinsi Lampung
            </div>
            <div class="flex justify-between pb-2">
                <div class="div">
                    <x-buttitle-landing ref="/sa-pendataan-si" color="#FA8F21" width="[8rem]" title="kembali"
                        extendClass="text-white text-center py-2 lg:py-2 hover:bg-[#D87815]" />
                </div>
                {{-- <div class="div">
                    <button class="bg-[#FF0000] hover:bg-[#D51717] p-1 rounded-md cursor-pointer delete-button"
                        title="Delete" type="button" data-index="">
                        <x-svg-delete />
                    </button>
                </div>
                <!-- Modal -->
                <div id="popup-modal" tabindex="-1" aria-hidden="true"
                    class="z-50 hidden fixed top-0 right-0 left-[260px] bottom-0 flex items-center justify-center backdrop-blur-sm bg-opacity-50">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <div class="relative bg-[#297785] rounded-lg shadow">
                            <button type="button"
                                class="absolute top-3 end-2.5 text-white bg-transparent hover:bg-[#D87815] hover:text-white rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                data-modal-hide="popup-modal-delete">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="white" viewBox="0 0 14 14">
                                    <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="p-4 md:p-5 text-center">
                                <svg class="mx-auto mb-4 text-white w-12 h-12" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                <h3 class="mb-5 text-lg font-normal text-white ">
                                    Anda Yakin Ingin Menghapus Data Ini?</h3>
                                <button data-modal-hide="popup-modal-ya" type="button"
                                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                    Ya
                                </button>
                                <button data-modal-hide="popup-modal-tidak" aria-hidden="true" type="button"
                                    class="py-2.5 px-5 ms-3 text-sm font-medium text-white bg-[#FA8F21] rounded-lg hover:bg-[#D87815] hover:text-white focus:z-10 ">Tidak</button>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const deleteButtons = document.querySelectorAll('.delete-button');
                        deleteButtons.forEach(button => {
                            button.addEventListener('click', function() {
                                const index = this.dataset.index;
                                const modal = document.getElementById('popup-modal');
                                modal.classList.remove('hidden');
                                modal.setAttribute('aria-hidden', 'false');
                                modal.setAttribute('tabindex', '0');
                                const modalTidak = document.getElementById('popup-modal');
                                modalTidak.classList.remove('hidden');
                                modalTidak.setAttribute('aria-hidden', 'false');
                                modalTidak.setAttribute('tabindex', '0');
                                const closeButton = modal.querySelector(
                                    '[data-modal-hide="popup-modal-delete"]');
                                closeButton.addEventListener('click', () => {
                                    modal.classList.add('hidden');
                                    modal.setAttribute('aria-hidden', 'true');
                                    modal.setAttribute('tabindex', '-1');
                                });
                                const closeButtonTidak = modalTidak.querySelector(
                                    '[data-modal-hide="popup-modal-tidak"]');
                                closeButtonTidak.addEventListener('click', () => {
                                    modalTidak.classList.add('hidden');
                                    modalTidak.setAttribute('aria-hidden', 'true');
                                    modalTidak.setAttribute('tabindex', '-1');
                                });
                            });
                        });
                    });
                </script> --}}
            </div>
            <div class="relative rounded shadow-lg h-full border-solid border-4 border-[#297785] pt-5 pl-5 pr-3 pb-5"
                id="moving-border">
                <div
                    class="max-h-[calc(100%-1rem)] overflow-y-auto overflow-x-auto hide-scrollbar font-bold text-black">
                    {{-- isi konten disini --}}
                    <div class=''>
                        <div class="flex gap-x-2">
                            <div class="flex flex-col flex-1 mb-4">
                                <div class="flex gap-1">
                                    <label htmlFor="name">Nama Sekolah</label>
                                    <div class="flex items-center">
                                        <button type="button" class="" data-te-toggle="modal"
                                            data-te-target="#namasekolah" data-te-ripple-init
                                            data-te-ripple-color="light">
                                            <svg class="" width="18" height="18" viewBox="0 0 18 18"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_695_2158)">
                                                    <path
                                                        d="M8.96489 6.65C9.35149 6.65 9.66489 6.3366 9.66489 5.95C9.66489 5.5634 9.35149 5.25 8.96489 5.25C8.57829 5.25 8.26489 5.5634 8.26489 5.95C8.26489 6.3366 8.57829 6.65 8.96489 6.65Z"
                                                        fill="#334155" />
                                                    <path
                                                        d="M10.5 11.5H9.5V7.5H8C7.86739 7.5 7.74021 7.55268 7.64645 7.64645C7.55268 7.74021 7.5 7.86739 7.5 8C7.5 8.13261 7.55268 8.25979 7.64645 8.35355C7.74021 8.44732 7.86739 8.5 8 8.5H8.5V11.5H7.5C7.36739 11.5 7.24021 11.5527 7.14645 11.6464C7.05268 11.7402 7 11.8674 7 12C7 12.1326 7.05268 12.2598 7.14645 12.3536C7.24021 12.4473 7.36739 12.5 7.5 12.5H10.5C10.6326 12.5 10.7598 12.4473 10.8536 12.3536C10.9473 12.2598 11 12.1326 11 12C11 11.8674 10.9473 11.7402 10.8536 11.6464C10.7598 11.5527 10.6326 11.5 10.5 11.5Z"
                                                        fill="#334155" />
                                                    <path
                                                        d="M9 3C7.81331 3 6.65328 3.35189 5.66658 4.01118C4.67989 4.67047 3.91085 5.60754 3.45673 6.7039C3.0026 7.80026 2.88378 9.00666 3.11529 10.1705C3.3468 11.3344 3.91825 12.4035 4.75736 13.2426C5.59648 14.0818 6.66558 14.6532 7.82946 14.8847C8.99335 15.1162 10.1997 14.9974 11.2961 14.5433C12.3925 14.0892 13.3295 13.3201 13.9888 12.3334C14.6481 11.3467 15 10.1867 15 9C15 7.4087 14.3679 5.88258 13.2426 4.75736C12.1174 3.63214 10.5913 3 9 3ZM9 14C8.0111 14 7.0444 13.7068 6.22215 13.1573C5.39991 12.6079 4.75904 11.827 4.38061 10.9134C4.00217 9.99979 3.90315 8.99445 4.09608 8.02455C4.289 7.05464 4.76521 6.16373 5.46447 5.46447C6.16373 4.7652 7.05465 4.289 8.02455 4.09607C8.99446 3.90315 9.99979 4.00216 10.9134 4.3806C11.8271 4.75904 12.6079 5.3999 13.1574 6.22215C13.7068 7.04439 14 8.01109 14 9C14 9.65661 13.8707 10.3068 13.6194 10.9134C13.3681 11.52 12.9998 12.0712 12.5355 12.5355C12.0712 12.9998 11.52 13.3681 10.9134 13.6194C10.3068 13.8707 9.65661 14 9 14Z"
                                                        fill="#334155" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_695_2158">
                                                        <rect width="18" height="18" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </button>
                                        <div data-te-modal-init
                                            class="fixed top-0 left-0 bottom-0 flex items-center justify-center backdrop-blur-md bg-opacity-50 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                                            id="namasekolah" tabindex="-1" aria-labelledby="namasekolahLabel"
                                            aria-hidden="true">
                                            <div data-te-modal-dialog-ref
                                                class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
                                                <div
                                                    class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                                                    <div
                                                        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                                                        <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                                                            id="namasekolahLabel">
                                                            Keterangan
                                                        </h5>
                                                        <button type="button"
                                                            class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                                                            data-te-modal-dismiss aria-label="Close">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor" class="h-6 w-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M6 18L18 6M6 6l12 12" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="relative flex-auto p-4" data-te-modal-body-ref>Nama
                                                        Sekolahhh</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="text" name="nama" id="name"
                                    class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                    placeholder="Masukkan Nama Sekolah" value="{{ $DATA['nama'] }}" required />
                            </div>
                        </div>
                    </div>
                    <div class=''>
                        <div class="flex gap-x-2">
                            <div class="flex flex-col flex-1 mb-4">
                                <div class="flex">
                                    <label htmlFor="name">NPSN</label>
                                    <div class="flex items-center">
                                        <button type="button" class="" data-te-toggle="modal"
                                            data-te-target="#npsn" data-te-ripple-init data-te-ripple-color="light">
                                            <svg class="" width="18" height="18" viewBox="0 0 18 18"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_695_2158)">
                                                    <path
                                                        d="M8.96489 6.65C9.35149 6.65 9.66489 6.3366 9.66489 5.95C9.66489 5.5634 9.35149 5.25 8.96489 5.25C8.57829 5.25 8.26489 5.5634 8.26489 5.95C8.26489 6.3366 8.57829 6.65 8.96489 6.65Z"
                                                        fill="#334155" />
                                                    <path
                                                        d="M10.5 11.5H9.5V7.5H8C7.86739 7.5 7.74021 7.55268 7.64645 7.64645C7.55268 7.74021 7.5 7.86739 7.5 8C7.5 8.13261 7.55268 8.25979 7.64645 8.35355C7.74021 8.44732 7.86739 8.5 8 8.5H8.5V11.5H7.5C7.36739 11.5 7.24021 11.5527 7.14645 11.6464C7.05268 11.7402 7 11.8674 7 12C7 12.1326 7.05268 12.2598 7.14645 12.3536C7.24021 12.4473 7.36739 12.5 7.5 12.5H10.5C10.6326 12.5 10.7598 12.4473 10.8536 12.3536C10.9473 12.2598 11 12.1326 11 12C11 11.8674 10.9473 11.7402 10.8536 11.6464C10.7598 11.5527 10.6326 11.5 10.5 11.5Z"
                                                        fill="#334155" />
                                                    <path
                                                        d="M9 3C7.81331 3 6.65328 3.35189 5.66658 4.01118C4.67989 4.67047 3.91085 5.60754 3.45673 6.7039C3.0026 7.80026 2.88378 9.00666 3.11529 10.1705C3.3468 11.3344 3.91825 12.4035 4.75736 13.2426C5.59648 14.0818 6.66558 14.6532 7.82946 14.8847C8.99335 15.1162 10.1997 14.9974 11.2961 14.5433C12.3925 14.0892 13.3295 13.3201 13.9888 12.3334C14.6481 11.3467 15 10.1867 15 9C15 7.4087 14.3679 5.88258 13.2426 4.75736C12.1174 3.63214 10.5913 3 9 3ZM9 14C8.0111 14 7.0444 13.7068 6.22215 13.1573C5.39991 12.6079 4.75904 11.827 4.38061 10.9134C4.00217 9.99979 3.90315 8.99445 4.09608 8.02455C4.289 7.05464 4.76521 6.16373 5.46447 5.46447C6.16373 4.7652 7.05465 4.289 8.02455 4.09607C8.99446 3.90315 9.99979 4.00216 10.9134 4.3806C11.8271 4.75904 12.6079 5.3999 13.1574 6.22215C13.7068 7.04439 14 8.01109 14 9C14 9.65661 13.8707 10.3068 13.6194 10.9134C13.3681 11.52 12.9998 12.0712 12.5355 12.5355C12.0712 12.9998 11.52 13.3681 10.9134 13.6194C10.3068 13.8707 9.65661 14 9 14Z"
                                                        fill="#334155" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_695_2158">
                                                        <rect width="18" height="18" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </button>
                                        <!-- Modal -->
                                        <div data-te-modal-init
                                            class="fixed top-0 left-0 bottom-0 flex items-center justify-center backdrop-blur-md bg-opacity-50 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                                            id="npsn" tabindex="-1" aria-labelledby="npsnLabel"
                                            aria-hidden="true">
                                            <div data-te-modal-dialog-ref
                                                class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
                                                <div
                                                    class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                                                    <div
                                                        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                                                        <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                                                            id="npsnLabel">
                                                            Keterangan
                                                        </h5>
                                                        <button type="button"
                                                            class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                                                            data-te-modal-dismiss aria-label="Close">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor" class="h-6 w-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M6 18L18 6M6 6l12 12" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="relative flex-auto p-4" data-te-modal-body-ref>NPSN
                                                        Sekolah</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="text" name="npsn" id="name"
                                    class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                    placeholder="Masukkan NPSN" value="{{ $DATA['npsn'] }}" required />
                            </div>
                            <div class="flex flex-col flex-1 mb-4">
                                <label for="statusSekolah" class="">Status Sekolah</label>
                                <select id="statusSekolah" name="statusSekolah"
                                    class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                    placeholder="Masukkan Status Sekolah" required>
                                    <option value="{{ $DATA['statusSekolah'] }}">{{ $DATA['statusSekolah'] }}</option>
                                    <option value="negeri">Negeri</option>
                                    <option value="swasta">Swasta</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=''>
                        <div class="flex gap-x-2">
                            <div class="flex flex-col flex-1 mb-4">
                                <div class="flex gap-1">
                                    <label htmlFor="namasekolah">Alamat Sekolah</label>
                                    <div class="flex items-center">
                                        <button type="button" class="" data-te-toggle="modal"
                                            data-te-target="#alamatsekolah" data-te-ripple-init
                                            data-te-ripple-color="light">
                                            <svg class="" width="18" height="18" viewBox="0 0 18 18"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_695_2158)">
                                                    <path
                                                        d="M8.96489 6.65C9.35149 6.65 9.66489 6.3366 9.66489 5.95C9.66489 5.5634 9.35149 5.25 8.96489 5.25C8.57829 5.25 8.26489 5.5634 8.26489 5.95C8.26489 6.3366 8.57829 6.65 8.96489 6.65Z"
                                                        fill="#334155" />
                                                    <path
                                                        d="M10.5 11.5H9.5V7.5H8C7.86739 7.5 7.74021 7.55268 7.64645 7.64645C7.55268 7.74021 7.5 7.86739 7.5 8C7.5 8.13261 7.55268 8.25979 7.64645 8.35355C7.74021 8.44732 7.86739 8.5 8 8.5H8.5V11.5H7.5C7.36739 11.5 7.24021 11.5527 7.14645 11.6464C7.05268 11.7402 7 11.8674 7 12C7 12.1326 7.05268 12.2598 7.14645 12.3536C7.24021 12.4473 7.36739 12.5 7.5 12.5H10.5C10.6326 12.5 10.7598 12.4473 10.8536 12.3536C10.9473 12.2598 11 12.1326 11 12C11 11.8674 10.9473 11.7402 10.8536 11.6464C10.7598 11.5527 10.6326 11.5 10.5 11.5Z"
                                                        fill="#334155" />
                                                    <path
                                                        d="M9 3C7.81331 3 6.65328 3.35189 5.66658 4.01118C4.67989 4.67047 3.91085 5.60754 3.45673 6.7039C3.0026 7.80026 2.88378 9.00666 3.11529 10.1705C3.3468 11.3344 3.91825 12.4035 4.75736 13.2426C5.59648 14.0818 6.66558 14.6532 7.82946 14.8847C8.99335 15.1162 10.1997 14.9974 11.2961 14.5433C12.3925 14.0892 13.3295 13.3201 13.9888 12.3334C14.6481 11.3467 15 10.1867 15 9C15 7.4087 14.3679 5.88258 13.2426 4.75736C12.1174 3.63214 10.5913 3 9 3ZM9 14C8.0111 14 7.0444 13.7068 6.22215 13.1573C5.39991 12.6079 4.75904 11.827 4.38061 10.9134C4.00217 9.99979 3.90315 8.99445 4.09608 8.02455C4.289 7.05464 4.76521 6.16373 5.46447 5.46447C6.16373 4.7652 7.05465 4.289 8.02455 4.09607C8.99446 3.90315 9.99979 4.00216 10.9134 4.3806C11.8271 4.75904 12.6079 5.3999 13.1574 6.22215C13.7068 7.04439 14 8.01109 14 9C14 9.65661 13.8707 10.3068 13.6194 10.9134C13.3681 11.52 12.9998 12.0712 12.5355 12.5355C12.0712 12.9998 11.52 13.3681 10.9134 13.6194C10.3068 13.8707 9.65661 14 9 14Z"
                                                        fill="#334155" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_695_2158">
                                                        <rect width="18" height="18" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </button>
                                        <!-- Modal -->
                                        <div data-te-modal-init
                                            class="fixed top-0 left-0 bottom-0 flex items-center justify-center backdrop-blur-md bg-opacity-50 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                                            id="alamatsekolah" tabindex="-1" aria-labelledby="alamatsekolahLabel"
                                            aria-hidden="true">
                                            <div data-te-modal-dialog-ref
                                                class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
                                                <div
                                                    class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                                                    <div
                                                        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                                                        <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                                                            id="alamatsekolahLabel">
                                                            Keterangan
                                                        </h5>
                                                        <button type="button"
                                                            class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                                                            data-te-modal-dismiss aria-label="Close">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor" class="h-6 w-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M6 18L18 6M6 6l12 12" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="relative flex-auto p-4" data-te-modal-body-ref>Alamat
                                                        Sekolah</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="text" name="alamatSekolah" id="namasekolah"
                                    class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                    placeholder="Masukkan Alamat Sekolah" value="{{ $DATA['alamatSekolah'] }}" required />
                            </div>
                            <div class="flex flex-col flex-1 mb-4">
                                <label for="kota" class="">Kab/Kota</label>
                                <select id="kota" name="kota"
                                    class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                    placeholder="Masukkan Status Sekolah" required>
                                    <option value="{{ $DATA['kota'] }}">{{ $DATA['kota'] }}</option>
                                    <option value="">Kab. Lampung Tengah</option>
                                    <option value="">Kab. Lampung Timur</option>
                                    <option value="">Kab. Lampung Selatan</option>
                                    <option value="">Kota Bandar Lampung</option>
                                    <option value="">Kab. Tanggamus</option>
                                    <option value="">Kab. Lampung Utara</option>
                                    <option value="">Kab. Way Kanan</option>
                                    <option value="">Kab. Pesawaran</option>
                                    <option value="">Kab. Tulang Bawang</option>
                                    <option value="">Kab. Pringsewu</option>
                                    <option value="">Kab. Lampung Barat</option>
                                    <option value="">Kab. Tulang Bawang Barat</option>
                                    <option value="">Kab. Mesuji</option>
                                    <option value="">Kab. Pesisir Barat</option>
                                    <option value="">Kota Metro</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=''>
                        <div class="flex gap-x-2">
                            <div class="flex flex-col flex-1 mb-4">
                                <label for="visitors" class="">Jumlah Peserta Didik Berkebutuhan Khusus
                                    (PDBK)</label>
                                <input type="number" name="jumlahPDBK" id="visitors"
                                    class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                    placeholder="Masukkan Jumlah PDBK" value="{{ $DATA['jumlahPDBK'] }}" required />
                            </div>
                            <div class="flex flex-col flex-1 mb-4">
                                <div class="flex gap-1">
                                    <label htmlFor="romble">Nama Pembimbing PDBK</label>
                                    <div class="flex items-center">
                                        <button type="button" class="" data-te-toggle="modal"
                                            data-te-target="#pdbk" data-te-ripple-init data-te-ripple-color="light">
                                            <svg class="" width="18" height="18" viewBox="0 0 18 18"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_695_2158)">
                                                    <path
                                                        d="M8.96489 6.65C9.35149 6.65 9.66489 6.3366 9.66489 5.95C9.66489 5.5634 9.35149 5.25 8.96489 5.25C8.57829 5.25 8.26489 5.5634 8.26489 5.95C8.26489 6.3366 8.57829 6.65 8.96489 6.65Z"
                                                        fill="#334155" />
                                                    <path
                                                        d="M10.5 11.5H9.5V7.5H8C7.86739 7.5 7.74021 7.55268 7.64645 7.64645C7.55268 7.74021 7.5 7.86739 7.5 8C7.5 8.13261 7.55268 8.25979 7.64645 8.35355C7.74021 8.44732 7.86739 8.5 8 8.5H8.5V11.5H7.5C7.36739 11.5 7.24021 11.5527 7.14645 11.6464C7.05268 11.7402 7 11.8674 7 12C7 12.1326 7.05268 12.2598 7.14645 12.3536C7.24021 12.4473 7.36739 12.5 7.5 12.5H10.5C10.6326 12.5 10.7598 12.4473 10.8536 12.3536C10.9473 12.2598 11 12.1326 11 12C11 11.8674 10.9473 11.7402 10.8536 11.6464C10.7598 11.5527 10.6326 11.5 10.5 11.5Z"
                                                        fill="#334155" />
                                                    <path
                                                        d="M9 3C7.81331 3 6.65328 3.35189 5.66658 4.01118C4.67989 4.67047 3.91085 5.60754 3.45673 6.7039C3.0026 7.80026 2.88378 9.00666 3.11529 10.1705C3.3468 11.3344 3.91825 12.4035 4.75736 13.2426C5.59648 14.0818 6.66558 14.6532 7.82946 14.8847C8.99335 15.1162 10.1997 14.9974 11.2961 14.5433C12.3925 14.0892 13.3295 13.3201 13.9888 12.3334C14.6481 11.3467 15 10.1867 15 9C15 7.4087 14.3679 5.88258 13.2426 4.75736C12.1174 3.63214 10.5913 3 9 3ZM9 14C8.0111 14 7.0444 13.7068 6.22215 13.1573C5.39991 12.6079 4.75904 11.827 4.38061 10.9134C4.00217 9.99979 3.90315 8.99445 4.09608 8.02455C4.289 7.05464 4.76521 6.16373 5.46447 5.46447C6.16373 4.7652 7.05465 4.289 8.02455 4.09607C8.99446 3.90315 9.99979 4.00216 10.9134 4.3806C11.8271 4.75904 12.6079 5.3999 13.1574 6.22215C13.7068 7.04439 14 8.01109 14 9C14 9.65661 13.8707 10.3068 13.6194 10.9134C13.3681 11.52 12.9998 12.0712 12.5355 12.5355C12.0712 12.9998 11.52 13.3681 10.9134 13.6194C10.3068 13.8707 9.65661 14 9 14Z"
                                                        fill="#334155" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_695_2158">
                                                        <rect width="18" height="18" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </button>
                                        <!-- Modal -->
                                        <div data-te-modal-init
                                            class="fixed top-0 left-0 bottom-0 flex items-center justify-center backdrop-blur-md bg-opacity-50 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                                            id="pdbk" tabindex="-1" aria-labelledby="pdbkLabel"
                                            aria-hidden="true">
                                            <div data-te-modal-dialog-ref
                                                class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
                                                <div
                                                    class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                                                    <div
                                                        class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                                                        <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                                                            id="pdbkLabel">
                                                            Keterangan
                                                        </h5>
                                                        <button type="button"
                                                            class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                                                            data-te-modal-dismiss aria-label="Close">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                viewBox="0 0 24 24" stroke-width="1.5"
                                                                stroke="currentColor" class="h-6 w-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M6 18L18 6M6 6l12 12" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="relative flex-auto p-4" data-te-modal-body-ref>Nama
                                                        Pembimbing PDBK</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="text" name="namaPembimbing" id="romble"
                                    class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                    placeholder="Masukkan Nama Pembimbing PDBK" value="{{ $DATA['namaPembimbing'] }}" required />
                            </div>
                        </div>
                        <div class=''>
                            <div class="flex gap-x-2">
                                <div class="flex flex-col flex-1 mb-4">
                                    <label for="jenisKelamin" class="">Jenis Kelamin</label>
                                    <select id="jenisKelamin" name="jenisKelamin"
                                        class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                        required>
                                        <option value="{{ $DATA['jenisKelamin'] }}">{{ $DATA['jenisKelamin'] }}</option>
                                        <option value="l">Laki-Laki</option>
                                        <option value="p">Perempuan</option>
                                    </select>
                                </div>
                                <div class="flex flex-col flex-1 mb-4">
                                    <div class="flex gap-1">
                                        <label htmlFor="romble">Pangkat/Golongan (Jika ASN)</label>
                                        <div class="flex items-center">
                                            <button type="button" class="" data-te-toggle="modal"
                                                data-te-target="#asn" data-te-ripple-init
                                                data-te-ripple-color="light">
                                                <svg class="" width="18" height="18"
                                                    viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_695_2158)">
                                                        <path
                                                            d="M8.96489 6.65C9.35149 6.65 9.66489 6.3366 9.66489 5.95C9.66489 5.5634 9.35149 5.25 8.96489 5.25C8.57829 5.25 8.26489 5.5634 8.26489 5.95C8.26489 6.3366 8.57829 6.65 8.96489 6.65Z"
                                                            fill="#334155" />
                                                        <path
                                                            d="M10.5 11.5H9.5V7.5H8C7.86739 7.5 7.74021 7.55268 7.64645 7.64645C7.55268 7.74021 7.5 7.86739 7.5 8C7.5 8.13261 7.55268 8.25979 7.64645 8.35355C7.74021 8.44732 7.86739 8.5 8 8.5H8.5V11.5H7.5C7.36739 11.5 7.24021 11.5527 7.14645 11.6464C7.05268 11.7402 7 11.8674 7 12C7 12.1326 7.05268 12.2598 7.14645 12.3536C7.24021 12.4473 7.36739 12.5 7.5 12.5H10.5C10.6326 12.5 10.7598 12.4473 10.8536 12.3536C10.9473 12.2598 11 12.1326 11 12C11 11.8674 10.9473 11.7402 10.8536 11.6464C10.7598 11.5527 10.6326 11.5 10.5 11.5Z"
                                                            fill="#334155" />
                                                        <path
                                                            d="M9 3C7.81331 3 6.65328 3.35189 5.66658 4.01118C4.67989 4.67047 3.91085 5.60754 3.45673 6.7039C3.0026 7.80026 2.88378 9.00666 3.11529 10.1705C3.3468 11.3344 3.91825 12.4035 4.75736 13.2426C5.59648 14.0818 6.66558 14.6532 7.82946 14.8847C8.99335 15.1162 10.1997 14.9974 11.2961 14.5433C12.3925 14.0892 13.3295 13.3201 13.9888 12.3334C14.6481 11.3467 15 10.1867 15 9C15 7.4087 14.3679 5.88258 13.2426 4.75736C12.1174 3.63214 10.5913 3 9 3ZM9 14C8.0111 14 7.0444 13.7068 6.22215 13.1573C5.39991 12.6079 4.75904 11.827 4.38061 10.9134C4.00217 9.99979 3.90315 8.99445 4.09608 8.02455C4.289 7.05464 4.76521 6.16373 5.46447 5.46447C6.16373 4.7652 7.05465 4.289 8.02455 4.09607C8.99446 3.90315 9.99979 4.00216 10.9134 4.3806C11.8271 4.75904 12.6079 5.3999 13.1574 6.22215C13.7068 7.04439 14 8.01109 14 9C14 9.65661 13.8707 10.3068 13.6194 10.9134C13.3681 11.52 12.9998 12.0712 12.5355 12.5355C12.0712 12.9998 11.52 13.3681 10.9134 13.6194C10.3068 13.8707 9.65661 14 9 14Z"
                                                            fill="#334155" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_695_2158">
                                                            <rect width="18" height="18" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </button>
                                            <!-- Modal -->
                                            <div data-te-modal-init
                                                class="fixed top-0 left-0 bottom-0 flex items-center justify-center backdrop-blur-md bg-opacity-50 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                                                id="asn" tabindex="-1" aria-labelledby="asn"
                                                aria-hidden="true">
                                                <div data-te-modal-dialog-ref
                                                    class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
                                                    <div
                                                        class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                                                        <div
                                                            class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                                                            <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                                                                id="asn">
                                                                Keterangan
                                                            </h5>
                                                            <button type="button"
                                                                class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                                                                data-te-modal-dismiss aria-label="Close">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="h-6 w-6">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        d="M6 18L18 6M6 6l12 12" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="relative flex-auto p-4" data-te-modal-body-ref>
                                                            Pangkat atau golongan asn</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="text" name="pangkat" id="romble"
                                        class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                        placeholder="Masukkan Pangkat/Golongan" value="{{ $DATA['pangkat'] }}" required />
                                </div>
                            </div>
                        </div>
                        <div class=''>
                            <div class="flex gap-x-2">
                                <div class="flex flex-col flex-1 mb-4">
                                    <div class="flex gap-1">
                                        <label htmlFor="romble">Alamat Tinggal</label>
                                        <div class="flex items-center">
                                            <button type="button" class="" data-te-toggle="modal"
                                                data-te-target="#alamattinggal" data-te-ripple-init
                                                data-te-ripple-color="light">
                                                <svg class="" width="18" height="18"
                                                    viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_695_2158)">
                                                        <path
                                                            d="M8.96489 6.65C9.35149 6.65 9.66489 6.3366 9.66489 5.95C9.66489 5.5634 9.35149 5.25 8.96489 5.25C8.57829 5.25 8.26489 5.5634 8.26489 5.95C8.26489 6.3366 8.57829 6.65 8.96489 6.65Z"
                                                            fill="#334155" />
                                                        <path
                                                            d="M10.5 11.5H9.5V7.5H8C7.86739 7.5 7.74021 7.55268 7.64645 7.64645C7.55268 7.74021 7.5 7.86739 7.5 8C7.5 8.13261 7.55268 8.25979 7.64645 8.35355C7.74021 8.44732 7.86739 8.5 8 8.5H8.5V11.5H7.5C7.36739 11.5 7.24021 11.5527 7.14645 11.6464C7.05268 11.7402 7 11.8674 7 12C7 12.1326 7.05268 12.2598 7.14645 12.3536C7.24021 12.4473 7.36739 12.5 7.5 12.5H10.5C10.6326 12.5 10.7598 12.4473 10.8536 12.3536C10.9473 12.2598 11 12.1326 11 12C11 11.8674 10.9473 11.7402 10.8536 11.6464C10.7598 11.5527 10.6326 11.5 10.5 11.5Z"
                                                            fill="#334155" />
                                                        <path
                                                            d="M9 3C7.81331 3 6.65328 3.35189 5.66658 4.01118C4.67989 4.67047 3.91085 5.60754 3.45673 6.7039C3.0026 7.80026 2.88378 9.00666 3.11529 10.1705C3.3468 11.3344 3.91825 12.4035 4.75736 13.2426C5.59648 14.0818 6.66558 14.6532 7.82946 14.8847C8.99335 15.1162 10.1997 14.9974 11.2961 14.5433C12.3925 14.0892 13.3295 13.3201 13.9888 12.3334C14.6481 11.3467 15 10.1867 15 9C15 7.4087 14.3679 5.88258 13.2426 4.75736C12.1174 3.63214 10.5913 3 9 3ZM9 14C8.0111 14 7.0444 13.7068 6.22215 13.1573C5.39991 12.6079 4.75904 11.827 4.38061 10.9134C4.00217 9.99979 3.90315 8.99445 4.09608 8.02455C4.289 7.05464 4.76521 6.16373 5.46447 5.46447C6.16373 4.7652 7.05465 4.289 8.02455 4.09607C8.99446 3.90315 9.99979 4.00216 10.9134 4.3806C11.8271 4.75904 12.6079 5.3999 13.1574 6.22215C13.7068 7.04439 14 8.01109 14 9C14 9.65661 13.8707 10.3068 13.6194 10.9134C13.3681 11.52 12.9998 12.0712 12.5355 12.5355C12.0712 12.9998 11.52 13.3681 10.9134 13.6194C10.3068 13.8707 9.65661 14 9 14Z"
                                                            fill="#334155" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_695_2158">
                                                            <rect width="18" height="18" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </button>
                                            <!-- Modal -->
                                            <div data-te-modal-init
                                                class="fixed top-0 left-0 bottom-0 flex items-center justify-center backdrop-blur-md bg-opacity-50 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                                                id="alamattinggal" tabindex="-1" aria-labelledby="alamattinggal"
                                                aria-hidden="true">
                                                <div data-te-modal-dialog-ref
                                                    class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
                                                    <div
                                                        class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                                                        <div
                                                            class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                                                            <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                                                                id="alamattinggal">
                                                                Keterangan
                                                            </h5>
                                                            <button type="button"
                                                                class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                                                                data-te-modal-dismiss aria-label="Close">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="h-6 w-6">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        d="M6 18L18 6M6 6l12 12" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="relative flex-auto p-4" data-te-modal-body-ref>
                                                            Alamat Tinggal</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="text" name="alamatTinggal" id="romble"
                                        class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                        placeholder="Masukkan Alamat Tinggal" value="{{ $DATA['alamatTinggal'] }}" required />
                                </div>
                                <div class="flex flex-col flex-1 mb-4">
                                    <div class="flex gap-1">
                                        <label htmlFor="romble">No HP</label>
                                        <div class="flex items-center">
                                            <button type="button" class="" data-te-toggle="modal"
                                                data-te-target="#nohp" data-te-ripple-init
                                                data-te-ripple-color="light">
                                                <svg class="" width="18" height="18"
                                                    viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_695_2158)">
                                                        <path
                                                            d="M8.96489 6.65C9.35149 6.65 9.66489 6.3366 9.66489 5.95C9.66489 5.5634 9.35149 5.25 8.96489 5.25C8.57829 5.25 8.26489 5.5634 8.26489 5.95C8.26489 6.3366 8.57829 6.65 8.96489 6.65Z"
                                                            fill="#334155" />
                                                        <path
                                                            d="M10.5 11.5H9.5V7.5H8C7.86739 7.5 7.74021 7.55268 7.64645 7.64645C7.55268 7.74021 7.5 7.86739 7.5 8C7.5 8.13261 7.55268 8.25979 7.64645 8.35355C7.74021 8.44732 7.86739 8.5 8 8.5H8.5V11.5H7.5C7.36739 11.5 7.24021 11.5527 7.14645 11.6464C7.05268 11.7402 7 11.8674 7 12C7 12.1326 7.05268 12.2598 7.14645 12.3536C7.24021 12.4473 7.36739 12.5 7.5 12.5H10.5C10.6326 12.5 10.7598 12.4473 10.8536 12.3536C10.9473 12.2598 11 12.1326 11 12C11 11.8674 10.9473 11.7402 10.8536 11.6464C10.7598 11.5527 10.6326 11.5 10.5 11.5Z"
                                                            fill="#334155" />
                                                        <path
                                                            d="M9 3C7.81331 3 6.65328 3.35189 5.66658 4.01118C4.67989 4.67047 3.91085 5.60754 3.45673 6.7039C3.0026 7.80026 2.88378 9.00666 3.11529 10.1705C3.3468 11.3344 3.91825 12.4035 4.75736 13.2426C5.59648 14.0818 6.66558 14.6532 7.82946 14.8847C8.99335 15.1162 10.1997 14.9974 11.2961 14.5433C12.3925 14.0892 13.3295 13.3201 13.9888 12.3334C14.6481 11.3467 15 10.1867 15 9C15 7.4087 14.3679 5.88258 13.2426 4.75736C12.1174 3.63214 10.5913 3 9 3ZM9 14C8.0111 14 7.0444 13.7068 6.22215 13.1573C5.39991 12.6079 4.75904 11.827 4.38061 10.9134C4.00217 9.99979 3.90315 8.99445 4.09608 8.02455C4.289 7.05464 4.76521 6.16373 5.46447 5.46447C6.16373 4.7652 7.05465 4.289 8.02455 4.09607C8.99446 3.90315 9.99979 4.00216 10.9134 4.3806C11.8271 4.75904 12.6079 5.3999 13.1574 6.22215C13.7068 7.04439 14 8.01109 14 9C14 9.65661 13.8707 10.3068 13.6194 10.9134C13.3681 11.52 12.9998 12.0712 12.5355 12.5355C12.0712 12.9998 11.52 13.3681 10.9134 13.6194C10.3068 13.8707 9.65661 14 9 14Z"
                                                            fill="#334155" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_695_2158">
                                                            <rect width="18" height="18" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </button>
                                            <!-- Modal -->
                                            <div data-te-modal-init
                                                class="fixed top-0 left-0 bottom-0 flex items-center justify-center backdrop-blur-md bg-opacity-50 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                                                id="nohp" tabindex="-1" aria-labelledby="nohp"
                                                aria-hidden="true">
                                                <div data-te-modal-dialog-ref
                                                    class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
                                                    <div
                                                        class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                                                        <div
                                                            class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                                                            <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200"
                                                                id="nohp">
                                                                Keterangan
                                                            </h5>
                                                            <button type="button"
                                                                class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                                                                data-te-modal-dismiss aria-label="Close">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="h-6 w-6">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        d="M6 18L18 6M6 6l12 12" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="relative flex-auto p-4" data-te-modal-body-ref>Np
                                                            HP</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="text" name="nomorHP" id="romble"
                                        class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                        placeholder="Masukkan No HP" value="{{ $DATA['nomorHP'] }}" required />
                                </div>
                            </div>
                        </div>
                        {{-- <div class="flex justify-end mt-4">
                            <button type="submit"
                                class="flex justify-center py-2 items-center w-32 h-9 bg-[#FA8F21] hover:bg-[#D87815] focus:ring-4 focus:ring-[#D87815] text-white rounded-lg text-sm">
                                + Simpan
                            </button>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
