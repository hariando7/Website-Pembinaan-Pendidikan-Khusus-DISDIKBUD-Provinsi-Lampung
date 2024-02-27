<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Super Admin Sekolah Inklusi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="assets/landing/prov-lampung2.svg">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />
    <style>
        /* peserta didik slb */
        .icon-peserta-didik-slb {
            transition: stroke 0.3s;
            /* Efek transisi pada perubahan warna stroke */
        }

        .group:hover .icon-peserta-didik-slb {
            stroke: #297785;
            /* stroke saat elemen dalam keadaan hover */
        }

        /* guru slb */
        .icon-guru-slb {
            transition: stroke 0.3s;
            /* Efek transisi pada perubahan warna stroke */
        }

        .group:hover .icon-guru-slb {
            stroke: #297785;
            /* stroke saat elemen dalam keadaan hover */
        }

        /* tendik slb */
        .icon-tendik-slb {
            transition: stroke 0.3s;
            /* Efek transisi pada perubahan warna stroke */
        }

        .group:hover .icon-tendik-slb {
            stroke: #297785;
            /* stroke saat elemen dalam keadaan hover */
        }

        /* sarpras slb */
        .icon-sarpras-slb {
            transition: stroke 0.3s;
            /* Efek transisi pada perubahan warna stroke */
        }

        .group:hover .icon-sarpras-slb {
            stroke: #297785;
            /* stroke saat elemen dalam keadaan hover */
        }

        /* kebutuhan guru slb */
        .icon-kebutuhan-guru-slb {
            transition: stroke 0.3s;
            /* Efek transisi pada perubahan warna stroke */
        }

        .group:hover .icon-kebutuhan-guru-slb {
            stroke: #297785;
            /* stroke saat elemen dalam keadaan hover */
        }
    </style>
</head>

<body class="bg-white z-10">
    <div>
        <x-dashboard-side-bar-sa />
        <div class="pl-[280px] h-screen pt-10 pr-5 pb-28">
            <div class="flex justify-between pb-2">
                <div class="text-center items-center justify-center text-[#297785] font-bold text-[32px]">Kelola
                    Pendataan Sekolah Inklusi Provinsi Lampung
                </div>
                <div class="flex justify-end gap-5">
                    {{-- <div class="div">
                        <x-buttitle-landing ref="/admin-tambah-pesertadidik-slb" color="#FA8F21" width="[13rem]"
                            title="Sistem Aktif" extendClass="text-white text-center py-2 lg:py-2 hover:bg-[#D87815]" />
                    </div> --}}
                    <!-- Modal toggle -->
                    <div class="div">
                        <button data-modal-target="timeline-modal" data-modal-toggle="timeline-modal" class="text-white text-center py-2 lg:py-2 my-2 flex items-center justify-center rounded-md bg-[#FA8F21] hover:bg-[#D87815] focus:ring-4 dark:bg-[#FA8F21] dark:hover:bg-[#D87815] pl-2 pr-2">
                            Pengumuman Dinas
                        </button>
                        <!-- Main modal -->
                        <div id="timeline-modal" tabindex="-1" aria-hidden="true" class="hidden fixed top-0 right-0 left-60 bottom-0 flex items-center justify-center backdrop-blur-md bg-opacity-50">
                            <div class="relative p-4 w-full max-w-3xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative rounded-lg shadow dark:bg-[#297785] bg-[#297785]">
                                    <!-- Modal header -->
                                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-white border-white">
                                        <h3 class="text-lg font-semibold text-white dark:text-white">
                                            Pengumuman Dinas
                                        </h3>
                                        <button type="button" class="text-white bg-transparent hover:bg-[#D87815] hover:text-white rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center dark:hover:bg-[#D87815] dark:hover:text-white" data-modal-close="timeline-modal">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <!-- Modal body -->
                                    <div class="p-4 md:p-5">
                                        <ol class="relative border-s border-[#FA8F21] dark:border-[#FA8F21] dark:hover:border-[#D87815] hover:border-[#D87815] ms-3.5 mb-4 md:mb-5">
                                            <li class="mb-10 ms-8">
                                                <span class="absolute flex items-center justify-center w-6 h-6 bg-[#297785] rounded-full -start-3.5 ring-8 dark:ring-[#FA8F21] ring-[#FA8F21] dark:hover:ring-[#D87815] hover:ring-[#D87815] dark:bg-[#297785]">
                                                    <svg class="w-2.5 h-2.5 text-gray-400 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                        <path fill="white" d="M6 1a1 1 0 0 0-2 0h2ZM4 4a1 1 0 0 0 2 0H4Zm7-3a1 1 0 1 0-2 0h2ZM9 4a1 1 0 1 0 2 0H9Zm7-3a1 1 0 1 0-2 0h2Zm-2 3a1 1 0 1 0 2 0h-2ZM1 6a1 1 0 0 0 0 2V6Zm18 2a1 1 0 1 0 0-2v2ZM5 11v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 11v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 15v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 15v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 11v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM5 15v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM2 4h16V2H2v2Zm16 0h2a2 2 0 0 0-2-2v2Zm0 0v14h2V4h-2Zm0 14v2a2 2 0 0 0 2-2h-2Zm0 0H2v2h16v-2ZM2 18H0a2 2 0 0 0 2 2v-2Zm0 0V4H0v14h2ZM2 4V2a2 2 0 0 0-2 2h2Zm2-3v3h2V1H4Zm5 0v3h2V1H9Zm5 0v3h2V1h-2ZM1 8h18V6H1v2Zm3 3v.01h2V11H4Zm1 1.01h.01v-2H5v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H5v2h.01v-2ZM9 11v.01h2V11H9Zm1 1.01h.01v-2H10v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM9 15v.01h2V15H9Zm1 1.01h.01v-2H10v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM14 15v.01h2V15h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM14 11v.01h2V11h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM4 15v.01h2V15H4Zm1 1.01h.01v-2H5v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H5v2h.01v-2Z" />
                                                    </svg>
                                                </span>
                                                <h3 class="flex items-start mb-1 text-lg font-semibold text-white dark:text-white">
                                                    Pengumuman 1 
                                                    <!-- <span class="bg-blue-900 text-white text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-white ms-3">Terbaru</span> -->
                                                </h3>
                                                <time class="block mb-3 text-sm font-normal leading-none text-white dark:text-white">Lorem ipsum dolor sit amet.</time>
                                                <button type="button" class="py-2 px-3 inline-flex items-center text-sm font-medium text-white focus:outline-none bg-[#FA8F21] rounded-lg border border-[#FA8F21] hover:bg-[#D87815] hover:text-white focus:z-10 focus:ring-4 focus:ring-[#FA8F21] dark:focus:ring-[#FA8F21] dark:text-white dark:border-[#FA8F21] dark:hover:text-white dark:bg-[#FA8F21] dark:hover:bg-[#D87815]">
                                                    <svg class="w-3 h-3 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 20 20">
                                                        <path d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z" />
                                                        <path d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                                                    </svg>
                                                    Selengkapnya
                                                </button>
                                            </li>
                                            <li class="mb-10 ms-8">
                                                <span class="absolute flex items-center justify-center w-6 h-6 bg-[#297785] rounded-full -start-3.5 ring-8 dark:ring-[#FA8F21] ring-[#FA8F21] dark:hover:ring-[#D87815] hover:ring-[#D87815] dark:bg-[#297785]">
                                                    <svg class="w-2.5 h-2.5 text-gray-400 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                        <path fill="white" d="M6 1a1 1 0 0 0-2 0h2ZM4 4a1 1 0 0 0 2 0H4Zm7-3a1 1 0 1 0-2 0h2ZM9 4a1 1 0 1 0 2 0H9Zm7-3a1 1 0 1 0-2 0h2Zm-2 3a1 1 0 1 0 2 0h-2ZM1 6a1 1 0 0 0 0 2V6Zm18 2a1 1 0 1 0 0-2v2ZM5 11v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 11v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 15v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 15v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 11v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM5 15v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM2 4h16V2H2v2Zm16 0h2a2 2 0 0 0-2-2v2Zm0 0v14h2V4h-2Zm0 14v2a2 2 0 0 0 2-2h-2Zm0 0H2v2h16v-2ZM2 18H0a2 2 0 0 0 2 2v-2Zm0 0V4H0v14h2ZM2 4V2a2 2 0 0 0-2 2h2Zm2-3v3h2V1H4Zm5 0v3h2V1H9Zm5 0v3h2V1h-2ZM1 8h18V6H1v2Zm3 3v.01h2V11H4Zm1 1.01h.01v-2H5v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H5v2h.01v-2ZM9 11v.01h2V11H9Zm1 1.01h.01v-2H10v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM9 15v.01h2V15H9Zm1 1.01h.01v-2H10v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM14 15v.01h2V15h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM14 11v.01h2V11h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM4 15v.01h2V15H4Zm1 1.01h.01v-2H5v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H5v2h.01v-2Z" />
                                                    </svg>
                                                </span>
                                                <h3 class="mb-1 text-lg font-semibold text-white dark:text-white">
                                                    Pengumuman 2</h3>
                                                <time class="block mb-3 text-sm font-normal leading-none text-white dark:text-white">Lorem ipsum dolor sit amet.</time>
                                                <button type="button" class="py-2 px-3 inline-flex items-center text-sm font-medium text-white focus:outline-none bg-[#FA8F21] rounded-lg border border-[#FA8F21] hover:bg-[#D87815] hover:text-white focus:z-10 focus:ring-4 focus:ring-[#FA8F21] dark:focus:ring-[#FA8F21] dark:text-white dark:border-[#FA8F21] dark:hover:text-white dark:bg-[#FA8F21] dark:hover:bg-[#D87815]">
                                                    <svg class="w-3 h-3 me-1.5" aria-hidden="true" viewBox="0 0 30 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M7.50012 45C11.6401 45 15.0002 41.6399 15.0002 37.4999V29.9999H7.50012C3.36009 29.9999 0 33.3599 0 37.4999C0 41.6399 3.36009 45 7.50012 45Z" fill="#0ACF83" />
                                                        <path d="M0 22.5C0 18.36 3.36009 14.9999 7.50012 14.9999H15.0002V29.9999H7.50012C3.36009 30.0001 0 26.64 0 22.5Z" fill="#A259FF" />
                                                        <path d="M0 7.50006C0 3.36006 3.36009 0 7.50012 0H15.0002V14.9999H7.50012C3.36009 14.9999 0 11.6401 0 7.50006Z" fill="#F24E1E" />
                                                        <path d="M15.0002 0H22.4999C26.6399 0 30 3.36006 30 7.50006C30 11.6401 26.6399 14.9999 22.4999 14.9999L15.0002 14.9999V0Z" fill="#FF7262" />
                                                        <path d="M30 22.5C30 26.64 26.6399 30 22.4999 30C18.3599 30 14.9998 26.64 14.9998 22.5C14.9998 18.36 18.3599 14.9999 22.4999 14.9999C26.6399 14.9999 30 18.36 30 22.5Z" fill="#1ABCFE" />
                                                    </svg>
                                                    Selengkapnya
                                                </button>
                                            </li>
                                            <li class="ms-8">
                                                <span class="absolute flex items-center justify-center w-6 h-6 bg-[#297785] rounded-full -start-3.5 ring-8 dark:ring-[#FA8F21] ring-[#FA8F21] dark:hover:ring-[#D87815] hover:ring-[#D87815] dark:bg-[#297785]">
                                                    <svg class="w-2.5 h-2.5 text-gray-400 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                        <path fill="white" d="M6 1a1 1 0 0 0-2 0h2ZM4 4a1 1 0 0 0 2 0H4Zm7-3a1 1 0 1 0-2 0h2ZM9 4a1 1 0 1 0 2 0H9Zm7-3a1 1 0 1 0-2 0h2Zm-2 3a1 1 0 1 0 2 0h-2ZM1 6a1 1 0 0 0 0 2V6Zm18 2a1 1 0 1 0 0-2v2ZM5 11v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 11v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM10 15v-1H9v1h1Zm0 .01H9v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 15v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM15 11v-1h-1v1h1Zm0 .01h-1v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM5 15v-1H4v1h1Zm0 .01H4v1h1v-1Zm.01 0v1h1v-1h-1Zm0-.01h1v-1h-1v1ZM2 4h16V2H2v2Zm16 0h2a2 2 0 0 0-2-2v2Zm0 0v14h2V4h-2Zm0 14v2a2 2 0 0 0 2-2h-2Zm0 0H2v2h16v-2ZM2 18H0a2 2 0 0 0 2 2v-2Zm0 0V4H0v14h2ZM2 4V2a2 2 0 0 0-2 2h2Zm2-3v3h2V1H4Zm5 0v3h2V1H9Zm5 0v3h2V1h-2ZM1 8h18V6H1v2Zm3 3v.01h2V11H4Zm1 1.01h.01v-2H5v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H5v2h.01v-2ZM9 11v.01h2V11H9Zm1 1.01h.01v-2H10v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM9 15v.01h2V15H9Zm1 1.01h.01v-2H10v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H10v2h.01v-2ZM14 15v.01h2V15h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM14 11v.01h2V11h-2Zm1 1.01h.01v-2H15v2Zm1.01-1V11h-2v.01h2Zm-1-1.01H15v2h.01v-2ZM4 15v.01h2V15H4Zm1 1.01h.01v-2H5v2Zm1.01-1V15h-2v.01h2Zm-1-1.01H5v2h.01v-2Z" />
                                                    </svg>
                                                </span>
                                                <h3 class="mb-1 text-lg font-semibold text-white dark:text-white">
                                                    Pengumuman 3</h3>
                                                <time class="block mb-3 text-sm font-normal leading-none text-white dark:text-white">Lorem ipsum dolor sit amet.</time>
                                            </li>
                                        </ol>
                                        {{-- <button
                                            class="text-white inline-flex w-full justify-center bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            Kembali
                                        </button> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rounded shadow-lg border-solid border-4 border-[#297785] p-10 font-bold text-black">
                {{-- isi konten disini --}}
                <div class="flex justify-center">
                    <a href="/sa-kelola-admin-si">
                        <div class="m-4 w-72 bg-[#297785] hover:bg-[#143D44] shadow-lg rounded-lg">
                            <div class="rounded-t-lg text-xl pt-6 pl-10 justify-center items-center flex">
                                <svg width="100" height="100" viewBox="0 0 100 100" fill="none" class="" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M33.3337 -0.00012207C32.2286 -0.00012207 31.1688 0.438866 30.3874 1.22027C29.606 2.00167 29.167 3.06148 29.167 4.16654V66.6665C29.167 67.7716 29.606 68.8314 30.3874 69.6128C31.1688 70.3942 32.2286 70.8332 33.3337 70.8332C34.4387 70.8332 35.4985 70.3942 36.2799 69.6128C37.0613 68.8314 37.5003 67.7716 37.5003 66.6665V4.16654C37.5003 3.06148 37.0613 2.00167 36.2799 1.22027C35.4985 0.438866 34.4387 -0.00012207 33.3337 -0.00012207Z" fill="white" />
                                    <path d="M62.4997 33.3339C61.3946 33.3339 60.3348 33.7728 59.5534 34.5543C58.772 35.3357 58.333 36.3955 58.333 37.5005V66.6672C58.333 67.7723 58.772 68.8321 59.5534 69.6135C60.3348 70.3949 61.3946 70.8339 62.4997 70.8339C63.6047 70.8339 64.6646 70.3949 65.446 69.6135C66.2274 68.8321 66.6663 67.7723 66.6663 66.6672V37.5005C66.6663 36.3955 66.2274 35.3357 65.446 34.5543C64.6646 33.7728 63.6047 33.3339 62.4997 33.3339Z" fill="white" />
                                    <path d="M4.16667 16.6664C3.0616 16.6664 2.00179 17.1054 1.22039 17.8868C0.438988 18.6682 0 19.728 0 20.833V66.6664C0 67.7715 0.438988 68.8313 1.22039 69.6127C2.00179 70.3941 3.0616 70.8331 4.16667 70.8331C5.27174 70.8331 6.33154 70.3941 7.11294 69.6127C7.89435 68.8313 8.33333 67.7715 8.33333 66.6664V20.833C8.33333 19.728 7.89435 18.6682 7.11294 17.8868C6.33154 17.1054 5.27174 16.6664 4.16667 16.6664Z" fill="white" />
                                </svg>
                            </div>
                            <div class="flex pb-4">
                                <div class="justify-center items-center flex text-center m-auto text-white">
                                    Kelola Admin
                                    Sekolah Inklusi
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/sa-lihat-pendataan-si">
                        <div class="m-4 w-72 bg-[#297785] hover:bg-[#143D44] shadow-lg rounded-lg">
                            <div class="rounded-t-lg text-xl p-3 pl-4 justify-center items-center flex">
                                <svg width="100" height="100" viewBox="0 0 100 100" fill="none" class="icon-peserta-didik-slb" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M66.6668 87.5V79.1667C66.6668 74.7464 64.9109 70.5072 61.7853 67.3816C58.6597 64.256 54.4204 62.5 50.0002 62.5H25.0002C20.5799 62.5 16.3407 64.256 13.215 67.3816C10.0894 70.5072 8.3335 74.7464 8.3335 79.1667V87.5" stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M37.5002 45.8333C46.7049 45.8333 54.1668 38.3714 54.1668 29.1667C54.1668 19.9619 46.7049 12.5 37.5002 12.5C28.2954 12.5 20.8335 19.9619 20.8335 29.1667C20.8335 38.3714 28.2954 45.8333 37.5002 45.8333Z" stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M91.6665 87.4998V79.1665C91.6637 75.4737 90.4347 71.8864 88.1722 68.9678C85.9097 66.0492 82.742 63.9647 79.1665 63.0415" stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M66.6665 13.0415C70.2516 13.9594 73.4292 16.0444 75.6983 18.9678C77.9675 21.8912 79.1992 25.4866 79.1992 29.1873C79.1992 32.888 77.9675 36.4835 75.6983 39.4069C73.4292 42.3303 70.2516 44.4153 66.6665 45.3332" stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="flex pb-4">
                                <div class="justify-center items-center flex text-center m-auto text-white">
                                    Lihat Pendataan
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="flex justify-center">
                    <a href="/sa-laporan-pendataan-si">
                        <div class="m-4 w-72 bg-[#297785] hover:bg-[#143D44] shadow-lg rounded-lg">
                            <div class="rounded-t-lg text-xl pt-6 pl-4 justify-center items-center flex">
                                <svg width="100" height="100" viewBox="0 0 100 100" fill="none" class="" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_440_17813)">
                                        <path d="M26.3252 47.4375C26.0227 47.4375 25.7202 47.4847 25.4317 47.5844C23.7914 48.1518 22.0664 48.5156 20.2502 48.5156C18.434 48.5156 16.709 48.1518 15.0675 47.5844C14.7789 47.4847 14.4777 47.4375 14.1752 47.4375C6.32074 47.4375 -0.0415612 54.2405 0.000204459 62.6148C0.0179232 66.1537 2.75041 69 6.0752 69H34.4252C37.75 69 40.4825 66.1537 40.5002 62.6148C40.542 54.2405 34.1797 47.4375 26.3252 47.4375ZM20.2502 43.125C26.9605 43.125 32.4002 37.3328 32.4002 30.1875C32.4002 23.0422 26.9605 17.25 20.2502 17.25C13.5399 17.25 8.1002 23.0422 8.1002 30.1875C8.1002 37.3328 13.5399 43.125 20.2502 43.125ZM74.9252 0H26.3252C22.9751 0 20.2502 2.99854 20.2502 6.68303V12.9375C23.2143 12.9375 25.9582 13.8512 28.3502 15.3363V8.625H72.9002V47.4375H64.8002V38.8125H48.6002V47.4375H38.9511C41.3684 49.6867 43.1428 52.657 43.9743 56.0625H74.9252C78.2753 56.0625 81.0002 53.064 81.0002 49.3795V6.68303C81.0002 2.99854 78.2753 0 74.9252 0Z" fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_440_17813">
                                            <rect width="100" height="100" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="flex pb-4">
                                <div class="justify-center items-center flex text-center m-auto text-white">
                                    Laporan Pendataan
                                </div>
                            </div>
                        </div>
                    </a>
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
</body>

</html>