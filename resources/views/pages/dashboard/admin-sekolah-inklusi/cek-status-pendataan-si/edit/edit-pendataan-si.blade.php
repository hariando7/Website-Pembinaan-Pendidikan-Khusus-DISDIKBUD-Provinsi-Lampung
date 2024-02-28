<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Pendataan Sekolah Inklusi | Bidang Pembinaan Pendidikan Khusus | Disdikbud Provinsi Lampung</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="assets/landing/prov-lampung2.svg">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/js/select2.min.js"></script>

    <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                fontFamily: {
                    sans: ["Roboto", "sans-serif"],
                    body: ["Roboto", "sans-serif"],
                    mono: ["ui-monospace", "monospace"],
                },
            },
            corePlugins: {
                preflight: false,
            },
        };
    </script>
</head>

<body class="bg-white z-10">
    <div>
        <x-dashboard-side-bar-ai />
        <div class="pl-[280px] h-full pt-2 pr-5 pb-10">
            <div class="pb-2 mt-5">
                <div class="text-[#297785] font-bold text-[32px]">Edit Data
                </div>
                <div class="">
                    <x-buttitle-landing ref="/ai-cek-status" color="#FA8F21" width="[7rem]" title="Kembali" extendClass="text-white text-center py-2 lg:py-2 hover:bg-[#D87815]" />
                </div>
            </div>
            <div class="rounded shadow-lg border-solid border-4 border-[#297785] p-5 font-bold text-black">
                {{-- isi konten disini --}}
                <div class=''>
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <label htmlFor="name">No</label>
                            <input type="text" id="name" class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full" placeholder="1" required />
                        </div>
                        <div class="flex flex-col flex-1 mb-4">
                            <label htmlFor="">Waktu Submit</label>
                            <input type="text" placeholder="Masukkan Tanggal Sekarang" id="datetimePicker" class="flatpickr-input border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full" required />
                            <svg class="absolute ml-[33%] mt-[30px]" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 4H17V3C17 2.73478 16.8946 2.48043 16.7071 2.29289C16.5196 2.10536 16.2652 2 16 2C15.7348 2 15.4804 2.10536 15.2929 2.29289C15.1054 2.48043 15 2.73478 15 3V4H9V3C9 2.73478 8.89464 2.48043 8.70711 2.29289C8.51957 2.10536 8.26522 2 8 2C7.73478 2 7.48043 2.10536 7.29289 2.29289C7.10536 2.48043 7 2.73478 7 3V4H5C4.20435 4 3.44129 4.31607 2.87868 4.87868C2.31607 5.44129 2 6.20435 2 7V19C2 19.7956 2.31607 20.5587 2.87868 21.1213C3.44129 21.6839 4.20435 22 5 22H19C19.7956 22 20.5587 21.6839 21.1213 21.1213C21.6839 20.5587 22 19.7956 22 19V7C22 6.20435 21.6839 5.44129 21.1213 4.87868C20.5587 4.31607 19.7956 4 19 4ZM20 19C20 19.2652 19.8946 19.5196 19.7071 19.7071C19.5196 19.8946 19.2652 20 19 20H5C4.73478 20 4.48043 19.8946 4.29289 19.7071C4.10536 19.5196 4 19.2652 4 19V12H20V19ZM20 10H4V7C4 6.73478 4.10536 6.48043 4.29289 6.29289C4.48043 6.10536 4.73478 6 5 6H7V7C7 7.26522 7.10536 7.51957 7.29289 7.70711C7.48043 7.89464 7.73478 8 8 8C8.26522 8 8.51957 7.89464 8.70711 7.70711C8.89464 7.51957 9 7.26522 9 7V6H15V7C15 7.26522 15.1054 7.51957 15.2929 7.70711C15.4804 7.89464 15.7348 8 16 8C16.2652 8 16.5196 7.89464 16.7071 7.70711C16.8946 7.51957 17 7.26522 17 7V6H19C19.2652 6 19.5196 6.10536 19.7071 6.29289C19.8946 6.48043 20 6.73478 20 7V10Z" fill="black" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class=''>
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <div class="flex gap-1">
                                <label htmlFor="name">Nama Sekolah</label>
                                <div class="flex items-center">
                                    <button type="button" class="" data-te-toggle="modal" data-te-target="#namasekolah" data-te-ripple-init data-te-ripple-color="light">
                                        <svg class="" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_695_2158)">
                                                <path d="M8.96489 6.65C9.35149 6.65 9.66489 6.3366 9.66489 5.95C9.66489 5.5634 9.35149 5.25 8.96489 5.25C8.57829 5.25 8.26489 5.5634 8.26489 5.95C8.26489 6.3366 8.57829 6.65 8.96489 6.65Z" fill="#334155" />
                                                <path d="M10.5 11.5H9.5V7.5H8C7.86739 7.5 7.74021 7.55268 7.64645 7.64645C7.55268 7.74021 7.5 7.86739 7.5 8C7.5 8.13261 7.55268 8.25979 7.64645 8.35355C7.74021 8.44732 7.86739 8.5 8 8.5H8.5V11.5H7.5C7.36739 11.5 7.24021 11.5527 7.14645 11.6464C7.05268 11.7402 7 11.8674 7 12C7 12.1326 7.05268 12.2598 7.14645 12.3536C7.24021 12.4473 7.36739 12.5 7.5 12.5H10.5C10.6326 12.5 10.7598 12.4473 10.8536 12.3536C10.9473 12.2598 11 12.1326 11 12C11 11.8674 10.9473 11.7402 10.8536 11.6464C10.7598 11.5527 10.6326 11.5 10.5 11.5Z" fill="#334155" />
                                                <path d="M9 3C7.81331 3 6.65328 3.35189 5.66658 4.01118C4.67989 4.67047 3.91085 5.60754 3.45673 6.7039C3.0026 7.80026 2.88378 9.00666 3.11529 10.1705C3.3468 11.3344 3.91825 12.4035 4.75736 13.2426C5.59648 14.0818 6.66558 14.6532 7.82946 14.8847C8.99335 15.1162 10.1997 14.9974 11.2961 14.5433C12.3925 14.0892 13.3295 13.3201 13.9888 12.3334C14.6481 11.3467 15 10.1867 15 9C15 7.4087 14.3679 5.88258 13.2426 4.75736C12.1174 3.63214 10.5913 3 9 3ZM9 14C8.0111 14 7.0444 13.7068 6.22215 13.1573C5.39991 12.6079 4.75904 11.827 4.38061 10.9134C4.00217 9.99979 3.90315 8.99445 4.09608 8.02455C4.289 7.05464 4.76521 6.16373 5.46447 5.46447C6.16373 4.7652 7.05465 4.289 8.02455 4.09607C8.99446 3.90315 9.99979 4.00216 10.9134 4.3806C11.8271 4.75904 12.6079 5.3999 13.1574 6.22215C13.7068 7.04439 14 8.01109 14 9C14 9.65661 13.8707 10.3068 13.6194 10.9134C13.3681 11.52 12.9998 12.0712 12.5355 12.5355C12.0712 12.9998 11.52 13.3681 10.9134 13.6194C10.3068 13.8707 9.65661 14 9 14Z" fill="#334155" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_695_2158">
                                                    <rect width="18" height="18" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </button>
                                    <div data-te-modal-init class="fixed top-0 left-0 bottom-0 flex items-center justify-center backdrop-blur-md bg-opacity-50 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="namasekolah" tabindex="-1" aria-labelledby="namasekolahLabel" aria-hidden="true">
                                        <div data-te-modal-dialog-ref class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
                                            <div class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                                                <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                                                    <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200" id="namasekolahLabel">
                                                        Keterangan
                                                    </h5>
                                                    <button type="button" class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-modal-dismiss aria-label="Close">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="relative flex-auto p-4" data-te-modal-body-ref>Nama Sekolahhh</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="text" id="name" class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full" placeholder="Masukkan Nama Sekolah" required />
                        </div>
                    </div>
                </div>
                <div class=''>
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <div class="flex">
                                <label htmlFor="name">NPSN</label>
                                <div class="flex items-center">
                                    <button type="button" class="" data-te-toggle="modal" data-te-target="#npsn" data-te-ripple-init data-te-ripple-color="light">
                                        <svg class="" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_695_2158)">
                                                <path d="M8.96489 6.65C9.35149 6.65 9.66489 6.3366 9.66489 5.95C9.66489 5.5634 9.35149 5.25 8.96489 5.25C8.57829 5.25 8.26489 5.5634 8.26489 5.95C8.26489 6.3366 8.57829 6.65 8.96489 6.65Z" fill="#334155" />
                                                <path d="M10.5 11.5H9.5V7.5H8C7.86739 7.5 7.74021 7.55268 7.64645 7.64645C7.55268 7.74021 7.5 7.86739 7.5 8C7.5 8.13261 7.55268 8.25979 7.64645 8.35355C7.74021 8.44732 7.86739 8.5 8 8.5H8.5V11.5H7.5C7.36739 11.5 7.24021 11.5527 7.14645 11.6464C7.05268 11.7402 7 11.8674 7 12C7 12.1326 7.05268 12.2598 7.14645 12.3536C7.24021 12.4473 7.36739 12.5 7.5 12.5H10.5C10.6326 12.5 10.7598 12.4473 10.8536 12.3536C10.9473 12.2598 11 12.1326 11 12C11 11.8674 10.9473 11.7402 10.8536 11.6464C10.7598 11.5527 10.6326 11.5 10.5 11.5Z" fill="#334155" />
                                                <path d="M9 3C7.81331 3 6.65328 3.35189 5.66658 4.01118C4.67989 4.67047 3.91085 5.60754 3.45673 6.7039C3.0026 7.80026 2.88378 9.00666 3.11529 10.1705C3.3468 11.3344 3.91825 12.4035 4.75736 13.2426C5.59648 14.0818 6.66558 14.6532 7.82946 14.8847C8.99335 15.1162 10.1997 14.9974 11.2961 14.5433C12.3925 14.0892 13.3295 13.3201 13.9888 12.3334C14.6481 11.3467 15 10.1867 15 9C15 7.4087 14.3679 5.88258 13.2426 4.75736C12.1174 3.63214 10.5913 3 9 3ZM9 14C8.0111 14 7.0444 13.7068 6.22215 13.1573C5.39991 12.6079 4.75904 11.827 4.38061 10.9134C4.00217 9.99979 3.90315 8.99445 4.09608 8.02455C4.289 7.05464 4.76521 6.16373 5.46447 5.46447C6.16373 4.7652 7.05465 4.289 8.02455 4.09607C8.99446 3.90315 9.99979 4.00216 10.9134 4.3806C11.8271 4.75904 12.6079 5.3999 13.1574 6.22215C13.7068 7.04439 14 8.01109 14 9C14 9.65661 13.8707 10.3068 13.6194 10.9134C13.3681 11.52 12.9998 12.0712 12.5355 12.5355C12.0712 12.9998 11.52 13.3681 10.9134 13.6194C10.3068 13.8707 9.65661 14 9 14Z" fill="#334155" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_695_2158">
                                                    <rect width="18" height="18" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </button>
                                    <!-- Modal -->
                                    <div data-te-modal-init class="fixed top-0 left-0 bottom-0 flex items-center justify-center backdrop-blur-md bg-opacity-50 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="npsn" tabindex="-1" aria-labelledby="npsnLabel" aria-hidden="true">
                                        <div data-te-modal-dialog-ref class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
                                            <div class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                                                <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                                                    <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200" id="npsnLabel">
                                                        Keterangan
                                                    </h5>
                                                    <button type="button" class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-modal-dismiss aria-label="Close">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="relative flex-auto p-4" data-te-modal-body-ref>NPSN Sekolah</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="text" id="name" class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full" placeholder="Masukkan NPSN" required />
                        </div>
                        <div class="flex flex-col flex-1 mb-4">
                            <label for="statusSekolah" class="">Status Sekolah</label>
                            <select id="statusSekolah" name="statusSekolah" class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full" placeholder="Masukkan Status Sekolah" required>
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
                                    <button type="button" class="" data-te-toggle="modal" data-te-target="#alamatsekolah" data-te-ripple-init data-te-ripple-color="light">
                                        <svg class="" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_695_2158)">
                                                <path d="M8.96489 6.65C9.35149 6.65 9.66489 6.3366 9.66489 5.95C9.66489 5.5634 9.35149 5.25 8.96489 5.25C8.57829 5.25 8.26489 5.5634 8.26489 5.95C8.26489 6.3366 8.57829 6.65 8.96489 6.65Z" fill="#334155" />
                                                <path d="M10.5 11.5H9.5V7.5H8C7.86739 7.5 7.74021 7.55268 7.64645 7.64645C7.55268 7.74021 7.5 7.86739 7.5 8C7.5 8.13261 7.55268 8.25979 7.64645 8.35355C7.74021 8.44732 7.86739 8.5 8 8.5H8.5V11.5H7.5C7.36739 11.5 7.24021 11.5527 7.14645 11.6464C7.05268 11.7402 7 11.8674 7 12C7 12.1326 7.05268 12.2598 7.14645 12.3536C7.24021 12.4473 7.36739 12.5 7.5 12.5H10.5C10.6326 12.5 10.7598 12.4473 10.8536 12.3536C10.9473 12.2598 11 12.1326 11 12C11 11.8674 10.9473 11.7402 10.8536 11.6464C10.7598 11.5527 10.6326 11.5 10.5 11.5Z" fill="#334155" />
                                                <path d="M9 3C7.81331 3 6.65328 3.35189 5.66658 4.01118C4.67989 4.67047 3.91085 5.60754 3.45673 6.7039C3.0026 7.80026 2.88378 9.00666 3.11529 10.1705C3.3468 11.3344 3.91825 12.4035 4.75736 13.2426C5.59648 14.0818 6.66558 14.6532 7.82946 14.8847C8.99335 15.1162 10.1997 14.9974 11.2961 14.5433C12.3925 14.0892 13.3295 13.3201 13.9888 12.3334C14.6481 11.3467 15 10.1867 15 9C15 7.4087 14.3679 5.88258 13.2426 4.75736C12.1174 3.63214 10.5913 3 9 3ZM9 14C8.0111 14 7.0444 13.7068 6.22215 13.1573C5.39991 12.6079 4.75904 11.827 4.38061 10.9134C4.00217 9.99979 3.90315 8.99445 4.09608 8.02455C4.289 7.05464 4.76521 6.16373 5.46447 5.46447C6.16373 4.7652 7.05465 4.289 8.02455 4.09607C8.99446 3.90315 9.99979 4.00216 10.9134 4.3806C11.8271 4.75904 12.6079 5.3999 13.1574 6.22215C13.7068 7.04439 14 8.01109 14 9C14 9.65661 13.8707 10.3068 13.6194 10.9134C13.3681 11.52 12.9998 12.0712 12.5355 12.5355C12.0712 12.9998 11.52 13.3681 10.9134 13.6194C10.3068 13.8707 9.65661 14 9 14Z" fill="#334155" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_695_2158">
                                                    <rect width="18" height="18" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </button>
                                    <!-- Modal -->
                                    <div data-te-modal-init class="fixed top-0 left-0 bottom-0 flex items-center justify-center backdrop-blur-md bg-opacity-50 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="alamatsekolah" tabindex="-1" aria-labelledby="alamatsekolahLabel" aria-hidden="true">
                                        <div data-te-modal-dialog-ref class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
                                            <div class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                                                <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                                                    <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200" id="alamatsekolahLabel">
                                                        Keterangan
                                                    </h5>
                                                    <button type="button" class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-modal-dismiss aria-label="Close">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="relative flex-auto p-4" data-te-modal-body-ref>Alamat Sekolah</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="text" id="namasekolah" class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full" placeholder="Masukkan Alamat Sekolah" required />
                        </div>
                        <div class="flex flex-col flex-1 mb-4">
                            <label for="statusSekolah" class="">Kab/Kota</label>
                            <select id="statusSekolah" name="statusSekolah" class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full" placeholder="Masukkan Status Sekolah" required>
                                <option value="" hidden class="text-gray-500">Pilih Kab/Kota</option>
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
                            <label for="visitors" class="">Jumlah Peserta Didik Berkebutuhan Khusus (PDBK)</label>
                            <input type="number" id="visitors" class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full" placeholder="Masukkan Jumlah PDBK" required />
                        </div>
                        <div class="flex flex-col flex-1 mb-4">
                            <div class="flex gap-1">
                                <label htmlFor="romble">Nama Pembimbing PDBK</label>
                                <div class="flex items-center">
                                    <button type="button" class="" data-te-toggle="modal" data-te-target="#pdbk" data-te-ripple-init data-te-ripple-color="light">
                                        <svg class="" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_695_2158)">
                                                <path d="M8.96489 6.65C9.35149 6.65 9.66489 6.3366 9.66489 5.95C9.66489 5.5634 9.35149 5.25 8.96489 5.25C8.57829 5.25 8.26489 5.5634 8.26489 5.95C8.26489 6.3366 8.57829 6.65 8.96489 6.65Z" fill="#334155" />
                                                <path d="M10.5 11.5H9.5V7.5H8C7.86739 7.5 7.74021 7.55268 7.64645 7.64645C7.55268 7.74021 7.5 7.86739 7.5 8C7.5 8.13261 7.55268 8.25979 7.64645 8.35355C7.74021 8.44732 7.86739 8.5 8 8.5H8.5V11.5H7.5C7.36739 11.5 7.24021 11.5527 7.14645 11.6464C7.05268 11.7402 7 11.8674 7 12C7 12.1326 7.05268 12.2598 7.14645 12.3536C7.24021 12.4473 7.36739 12.5 7.5 12.5H10.5C10.6326 12.5 10.7598 12.4473 10.8536 12.3536C10.9473 12.2598 11 12.1326 11 12C11 11.8674 10.9473 11.7402 10.8536 11.6464C10.7598 11.5527 10.6326 11.5 10.5 11.5Z" fill="#334155" />
                                                <path d="M9 3C7.81331 3 6.65328 3.35189 5.66658 4.01118C4.67989 4.67047 3.91085 5.60754 3.45673 6.7039C3.0026 7.80026 2.88378 9.00666 3.11529 10.1705C3.3468 11.3344 3.91825 12.4035 4.75736 13.2426C5.59648 14.0818 6.66558 14.6532 7.82946 14.8847C8.99335 15.1162 10.1997 14.9974 11.2961 14.5433C12.3925 14.0892 13.3295 13.3201 13.9888 12.3334C14.6481 11.3467 15 10.1867 15 9C15 7.4087 14.3679 5.88258 13.2426 4.75736C12.1174 3.63214 10.5913 3 9 3ZM9 14C8.0111 14 7.0444 13.7068 6.22215 13.1573C5.39991 12.6079 4.75904 11.827 4.38061 10.9134C4.00217 9.99979 3.90315 8.99445 4.09608 8.02455C4.289 7.05464 4.76521 6.16373 5.46447 5.46447C6.16373 4.7652 7.05465 4.289 8.02455 4.09607C8.99446 3.90315 9.99979 4.00216 10.9134 4.3806C11.8271 4.75904 12.6079 5.3999 13.1574 6.22215C13.7068 7.04439 14 8.01109 14 9C14 9.65661 13.8707 10.3068 13.6194 10.9134C13.3681 11.52 12.9998 12.0712 12.5355 12.5355C12.0712 12.9998 11.52 13.3681 10.9134 13.6194C10.3068 13.8707 9.65661 14 9 14Z" fill="#334155" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_695_2158">
                                                    <rect width="18" height="18" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </button>
                                    <!-- Modal -->
                                    <div data-te-modal-init class="fixed top-0 left-0 bottom-0 flex items-center justify-center backdrop-blur-md bg-opacity-50 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="pdbk" tabindex="-1" aria-labelledby="pdbkLabel" aria-hidden="true">
                                        <div data-te-modal-dialog-ref class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
                                            <div class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                                                <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                                                    <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200" id="pdbkLabel">
                                                        Keterangan
                                                    </h5>
                                                    <button type="button" class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-modal-dismiss aria-label="Close">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="relative flex-auto p-4" data-te-modal-body-ref>Nama Pembimbing PDBK</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="text" id="romble" class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full" placeholder="Masukkan Nama Pembimbing PDBK" required />
                        </div>
                    </div>
                    <div class=''>
                        <div class="flex gap-x-2">
                            <div class="flex flex-col flex-1 mb-4">
                                <label for="jenisKelamin" class="">Jenis Kelamin</label>
                                <select id="jenisKelamin" name="jenisKelamin" class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full" required>
                                    <option value="" hidden class="text-gray-500">Pilih Jenis Kelamin</option>
                                    <option value="l">Laki-Laki</option>
                                    <option value="p">Perempuan</option>
                                </select>
                            </div>
                            <div class="flex flex-col flex-1 mb-4">
                                <div class="flex gap-1">
                                    <label htmlFor="romble">Pangkat/Golongan (Jika ASN)</label>
                                    <div class="flex items-center">
                                        <button type="button" class="" data-te-toggle="modal" data-te-target="#asn" data-te-ripple-init data-te-ripple-color="light">
                                            <svg class="" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_695_2158)">
                                                    <path d="M8.96489 6.65C9.35149 6.65 9.66489 6.3366 9.66489 5.95C9.66489 5.5634 9.35149 5.25 8.96489 5.25C8.57829 5.25 8.26489 5.5634 8.26489 5.95C8.26489 6.3366 8.57829 6.65 8.96489 6.65Z" fill="#334155" />
                                                    <path d="M10.5 11.5H9.5V7.5H8C7.86739 7.5 7.74021 7.55268 7.64645 7.64645C7.55268 7.74021 7.5 7.86739 7.5 8C7.5 8.13261 7.55268 8.25979 7.64645 8.35355C7.74021 8.44732 7.86739 8.5 8 8.5H8.5V11.5H7.5C7.36739 11.5 7.24021 11.5527 7.14645 11.6464C7.05268 11.7402 7 11.8674 7 12C7 12.1326 7.05268 12.2598 7.14645 12.3536C7.24021 12.4473 7.36739 12.5 7.5 12.5H10.5C10.6326 12.5 10.7598 12.4473 10.8536 12.3536C10.9473 12.2598 11 12.1326 11 12C11 11.8674 10.9473 11.7402 10.8536 11.6464C10.7598 11.5527 10.6326 11.5 10.5 11.5Z" fill="#334155" />
                                                    <path d="M9 3C7.81331 3 6.65328 3.35189 5.66658 4.01118C4.67989 4.67047 3.91085 5.60754 3.45673 6.7039C3.0026 7.80026 2.88378 9.00666 3.11529 10.1705C3.3468 11.3344 3.91825 12.4035 4.75736 13.2426C5.59648 14.0818 6.66558 14.6532 7.82946 14.8847C8.99335 15.1162 10.1997 14.9974 11.2961 14.5433C12.3925 14.0892 13.3295 13.3201 13.9888 12.3334C14.6481 11.3467 15 10.1867 15 9C15 7.4087 14.3679 5.88258 13.2426 4.75736C12.1174 3.63214 10.5913 3 9 3ZM9 14C8.0111 14 7.0444 13.7068 6.22215 13.1573C5.39991 12.6079 4.75904 11.827 4.38061 10.9134C4.00217 9.99979 3.90315 8.99445 4.09608 8.02455C4.289 7.05464 4.76521 6.16373 5.46447 5.46447C6.16373 4.7652 7.05465 4.289 8.02455 4.09607C8.99446 3.90315 9.99979 4.00216 10.9134 4.3806C11.8271 4.75904 12.6079 5.3999 13.1574 6.22215C13.7068 7.04439 14 8.01109 14 9C14 9.65661 13.8707 10.3068 13.6194 10.9134C13.3681 11.52 12.9998 12.0712 12.5355 12.5355C12.0712 12.9998 11.52 13.3681 10.9134 13.6194C10.3068 13.8707 9.65661 14 9 14Z" fill="#334155" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_695_2158">
                                                        <rect width="18" height="18" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </button>
                                        <!-- Modal -->
                                        <div data-te-modal-init class="fixed top-0 left-0 bottom-0 flex items-center justify-center backdrop-blur-md bg-opacity-50 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="asn" tabindex="-1" aria-labelledby="asn" aria-hidden="true">
                                            <div data-te-modal-dialog-ref class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
                                                <div class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                                                    <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                                                        <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200" id="asn">
                                                            Keterangan
                                                        </h5>
                                                        <button type="button" class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-modal-dismiss aria-label="Close">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="relative flex-auto p-4" data-te-modal-body-ref>Pangkat atau golongan asn</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="text" id="romble" class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full" placeholder="Masukkan Pangkat/Golongan" required />
                            </div>
                        </div>
                    </div>
                    <div class=''>
                        <div class="flex gap-x-2">
                            <div class="flex flex-col flex-1 mb-4">
                                <div class="flex gap-1">
                                    <label htmlFor="romble">Alamat Tinggal</label>
                                    <div class="flex items-center">
                                        <button type="button" class="" data-te-toggle="modal" data-te-target="#alamattinggal" data-te-ripple-init data-te-ripple-color="light">
                                            <svg class="" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_695_2158)">
                                                    <path d="M8.96489 6.65C9.35149 6.65 9.66489 6.3366 9.66489 5.95C9.66489 5.5634 9.35149 5.25 8.96489 5.25C8.57829 5.25 8.26489 5.5634 8.26489 5.95C8.26489 6.3366 8.57829 6.65 8.96489 6.65Z" fill="#334155" />
                                                    <path d="M10.5 11.5H9.5V7.5H8C7.86739 7.5 7.74021 7.55268 7.64645 7.64645C7.55268 7.74021 7.5 7.86739 7.5 8C7.5 8.13261 7.55268 8.25979 7.64645 8.35355C7.74021 8.44732 7.86739 8.5 8 8.5H8.5V11.5H7.5C7.36739 11.5 7.24021 11.5527 7.14645 11.6464C7.05268 11.7402 7 11.8674 7 12C7 12.1326 7.05268 12.2598 7.14645 12.3536C7.24021 12.4473 7.36739 12.5 7.5 12.5H10.5C10.6326 12.5 10.7598 12.4473 10.8536 12.3536C10.9473 12.2598 11 12.1326 11 12C11 11.8674 10.9473 11.7402 10.8536 11.6464C10.7598 11.5527 10.6326 11.5 10.5 11.5Z" fill="#334155" />
                                                    <path d="M9 3C7.81331 3 6.65328 3.35189 5.66658 4.01118C4.67989 4.67047 3.91085 5.60754 3.45673 6.7039C3.0026 7.80026 2.88378 9.00666 3.11529 10.1705C3.3468 11.3344 3.91825 12.4035 4.75736 13.2426C5.59648 14.0818 6.66558 14.6532 7.82946 14.8847C8.99335 15.1162 10.1997 14.9974 11.2961 14.5433C12.3925 14.0892 13.3295 13.3201 13.9888 12.3334C14.6481 11.3467 15 10.1867 15 9C15 7.4087 14.3679 5.88258 13.2426 4.75736C12.1174 3.63214 10.5913 3 9 3ZM9 14C8.0111 14 7.0444 13.7068 6.22215 13.1573C5.39991 12.6079 4.75904 11.827 4.38061 10.9134C4.00217 9.99979 3.90315 8.99445 4.09608 8.02455C4.289 7.05464 4.76521 6.16373 5.46447 5.46447C6.16373 4.7652 7.05465 4.289 8.02455 4.09607C8.99446 3.90315 9.99979 4.00216 10.9134 4.3806C11.8271 4.75904 12.6079 5.3999 13.1574 6.22215C13.7068 7.04439 14 8.01109 14 9C14 9.65661 13.8707 10.3068 13.6194 10.9134C13.3681 11.52 12.9998 12.0712 12.5355 12.5355C12.0712 12.9998 11.52 13.3681 10.9134 13.6194C10.3068 13.8707 9.65661 14 9 14Z" fill="#334155" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_695_2158">
                                                        <rect width="18" height="18" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </button>
                                        <!-- Modal -->
                                        <div data-te-modal-init class="fixed top-0 left-0 bottom-0 flex items-center justify-center backdrop-blur-md bg-opacity-50 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="alamattinggal" tabindex="-1" aria-labelledby="alamattinggal" aria-hidden="true">
                                            <div data-te-modal-dialog-ref class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
                                                <div class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                                                    <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                                                        <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200" id="alamattinggal">
                                                            Keterangan
                                                        </h5>
                                                        <button type="button" class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-modal-dismiss aria-label="Close">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="relative flex-auto p-4" data-te-modal-body-ref>Alamat Tinggal</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="text" id="romble" class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full" placeholder="Masukkan No HP" required />
                            </div>
                            <div class="flex flex-col flex-1 mb-4">
                                <div class="flex gap-1">
                                    <label htmlFor="romble">No HP</label>
                                    <div class="flex items-center">
                                        <button type="button" class="" data-te-toggle="modal" data-te-target="#nohp" data-te-ripple-init data-te-ripple-color="light">
                                            <svg class="" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_695_2158)">
                                                    <path d="M8.96489 6.65C9.35149 6.65 9.66489 6.3366 9.66489 5.95C9.66489 5.5634 9.35149 5.25 8.96489 5.25C8.57829 5.25 8.26489 5.5634 8.26489 5.95C8.26489 6.3366 8.57829 6.65 8.96489 6.65Z" fill="#334155" />
                                                    <path d="M10.5 11.5H9.5V7.5H8C7.86739 7.5 7.74021 7.55268 7.64645 7.64645C7.55268 7.74021 7.5 7.86739 7.5 8C7.5 8.13261 7.55268 8.25979 7.64645 8.35355C7.74021 8.44732 7.86739 8.5 8 8.5H8.5V11.5H7.5C7.36739 11.5 7.24021 11.5527 7.14645 11.6464C7.05268 11.7402 7 11.8674 7 12C7 12.1326 7.05268 12.2598 7.14645 12.3536C7.24021 12.4473 7.36739 12.5 7.5 12.5H10.5C10.6326 12.5 10.7598 12.4473 10.8536 12.3536C10.9473 12.2598 11 12.1326 11 12C11 11.8674 10.9473 11.7402 10.8536 11.6464C10.7598 11.5527 10.6326 11.5 10.5 11.5Z" fill="#334155" />
                                                    <path d="M9 3C7.81331 3 6.65328 3.35189 5.66658 4.01118C4.67989 4.67047 3.91085 5.60754 3.45673 6.7039C3.0026 7.80026 2.88378 9.00666 3.11529 10.1705C3.3468 11.3344 3.91825 12.4035 4.75736 13.2426C5.59648 14.0818 6.66558 14.6532 7.82946 14.8847C8.99335 15.1162 10.1997 14.9974 11.2961 14.5433C12.3925 14.0892 13.3295 13.3201 13.9888 12.3334C14.6481 11.3467 15 10.1867 15 9C15 7.4087 14.3679 5.88258 13.2426 4.75736C12.1174 3.63214 10.5913 3 9 3ZM9 14C8.0111 14 7.0444 13.7068 6.22215 13.1573C5.39991 12.6079 4.75904 11.827 4.38061 10.9134C4.00217 9.99979 3.90315 8.99445 4.09608 8.02455C4.289 7.05464 4.76521 6.16373 5.46447 5.46447C6.16373 4.7652 7.05465 4.289 8.02455 4.09607C8.99446 3.90315 9.99979 4.00216 10.9134 4.3806C11.8271 4.75904 12.6079 5.3999 13.1574 6.22215C13.7068 7.04439 14 8.01109 14 9C14 9.65661 13.8707 10.3068 13.6194 10.9134C13.3681 11.52 12.9998 12.0712 12.5355 12.5355C12.0712 12.9998 11.52 13.3681 10.9134 13.6194C10.3068 13.8707 9.65661 14 9 14Z" fill="#334155" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_695_2158">
                                                        <rect width="18" height="18" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </button>
                                        <!-- Modal -->
                                        <div data-te-modal-init class="fixed top-0 left-0 bottom-0 flex items-center justify-center backdrop-blur-md bg-opacity-50 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="nohp" tabindex="-1" aria-labelledby="nohp" aria-hidden="true">
                                            <div data-te-modal-dialog-ref class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
                                                <div class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                                                    <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4 dark:border-opacity-50">
                                                        <h5 class="text-xl font-medium leading-normal text-neutral-800 dark:text-neutral-200" id="nohp">
                                                            Keterangan
                                                        </h5>
                                                        <button type="button" class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-modal-dismiss aria-label="Close">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <div class="relative flex-auto p-4" data-te-modal-body-ref>Np HP</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="text" id="romble" class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full" placeholder="Masukkan No HP" required />
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end mt-4">
                        <button type="submit" class="flex justify-center py-2 items-center w-32 h-9 bg-[#FA8F21] hover:bg-[#D87815] focus:ring-4 focus:ring-[#D87815] text-white rounded-lg text-sm">
                            + Simpan
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function updateCurrentTime() {
                var currentDate = new Date();
                var hours = currentDate.getHours();
                var minutes = currentDate.getMinutes();
                var seconds = currentDate.getSeconds();
                var formattedTime = (hours < 10 ? "0" : "") + hours + ":" +
                    (minutes < 10 ? "0" : "") + minutes + ":" +
                    (seconds < 10 ? "0" : "") + seconds;
                var flatpickrDate = flatpickr.formatDate(currentDate, "d/m/Y");
                var combinedDateTime = flatpickrDate + " " + formattedTime;
                document.getElementById("datetimePicker").value = combinedDateTime;
            }
            flatpickr("#datetimePicker", {
                enableTime: true,
                dateFormat: "d/m/Y H:i",
                time_24hr: true,
            });
            setInterval(updateCurrentTime, 1000);
        </script>
        <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->
        <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
</body>

</html>