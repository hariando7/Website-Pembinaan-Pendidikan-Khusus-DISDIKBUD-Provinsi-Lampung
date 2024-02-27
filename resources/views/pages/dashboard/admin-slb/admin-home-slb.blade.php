<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Admin SLB</title>
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
        <x-dashboard-side-bar-slb />
        <div class="pl-[280px] h-screen pt-10 pr-5 pb-28">
            <div class="flex justify-between pb-2">
                <div class="text-center items-center justify-center text-[#297785] font-bold text-[32px]">Kelola SLB
                    Provinsi Lampung
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
                    <a href="/admin-pesertadidik-slb">
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
                                    Peserta Didik SLB
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/admin-guru-slb">
                        <div class="m-4 w-72 bg-[#297785] hover:bg-[#143D44] shadow-lg rounded-lg">
                            <div class="rounded-t-lg text-xl p-3 pl-4 justify-center items-center flex">
                                <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.5 18.75V25H81.25V75H37.5V81.25H93.75V75H87.5V18.75H12.5ZM25.0062 28.125C21.694 28.1365 18.5206 29.457 16.1779 31.7985C13.8352 34.1401 12.5132 37.3128 12.5 40.625C12.5 47.4969 18.1375 53.125 25.0062 53.125C28.3168 53.1118 31.488 51.7904 33.8283 49.4489C36.1687 47.1074 37.4885 43.9356 37.5 40.625C37.5 33.7594 31.8687 28.125 25.0062 28.125ZM43.75 31.25V37.5H59.375V31.25H43.75ZM65.625 31.25V37.5H75V31.25H65.625ZM25.0062 34.375C28.4875 34.375 31.25 37.1344 31.25 40.625C31.25 44.125 28.4906 46.875 25.0062 46.875C21.5062 46.875 18.75 44.125 18.75 40.625C18.75 37.1344 21.5094 34.375 25.0062 34.375ZM43.75 43.75V50H75V43.75H43.75ZM12.5 56.25V81.25H18.75V62.5H28.125V81.25H34.375V64.5563L40.825 67.9688C42.6531 68.9375 44.85 68.9344 46.675 67.9688V67.975L57.7062 62.1406L54.7906 56.6094L43.7563 62.4438L34.0813 57.3375C32.731 56.6241 31.2271 56.2509 29.7 56.25H12.5Z" fill="white" />
                                </svg>
                            </div>
                            <div class="flex pb-4">
                                <div class="justify-center items-center flex text-center m-auto text-white">
                                    Guru SLB
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="flex justify-center">
                    <a href="/admin-tendik-slb">
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
                                    Tendik SLB
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/admin-sarpras-slb">
                        <div class="m-4 w-72 bg-[#297785] hover:bg-[#143D44] shadow-lg rounded-lg">
                            <div class="rounded-t-lg text-xl p-3 pl-4 justify-center items-center flex">
                                <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_440_17818)">
                                        <path d="M86.1109 22.2222H63.8887V27.7777H86.1109V86.1111H63.8887V91.6666H91.6664V27.7777C91.6664 26.3043 91.0811 24.8912 90.0393 23.8494C88.9974 22.8075 87.5843 22.2222 86.1109 22.2222Z" fill="white" />
                                        <path d="M55.2224 8.3335H17.0002C15.4384 8.3335 13.9405 8.95393 12.8361 10.0583C11.7318 11.1627 11.1113 12.6606 11.1113 14.2224V91.6668H61.1113V14.2224C61.1113 12.6606 60.4909 11.1627 59.3865 10.0583C58.2821 8.95393 56.7843 8.3335 55.2224 8.3335ZM55.5558 86.1113H47.2224V77.7779H25.0002V86.1113H16.6669V14.2224C16.6669 14.1786 16.6755 14.1353 16.6923 14.0948C16.709 14.0544 16.7336 14.0176 16.7645 13.9867C16.7955 13.9557 16.8322 13.9312 16.8727 13.9144C16.9131 13.8977 16.9564 13.8891 17.0002 13.8891H55.2224C55.2662 13.8891 55.3096 13.8977 55.35 13.9144C55.3904 13.9312 55.4272 13.9557 55.4581 13.9867C55.4891 14.0176 55.5136 14.0544 55.5304 14.0948C55.5471 14.1353 55.5558 14.1786 55.5558 14.2224V86.1113Z" fill="white" />
                                        <path d="M22.2222 22.2222H27.7777V27.7777H22.2222V22.2222Z" fill="white" />
                                        <path d="M33.3335 22.2222H38.8891V27.7777H33.3335V22.2222Z" fill="white" />
                                        <path d="M44.4443 22.2222H49.9999V27.7777H44.4443V22.2222Z" fill="white" />
                                        <path d="M22.2222 36.1113H27.7777V41.6669H22.2222V36.1113Z" fill="white" />
                                        <path d="M33.3335 36.1113H38.8891V41.6669H33.3335V36.1113Z" fill="white" />
                                        <path d="M44.4443 36.1113H49.9999V41.6669H44.4443V36.1113Z" fill="white" />
                                        <path d="M22.2222 50H27.7777V55.5556H22.2222V50Z" fill="white" />
                                        <path d="M33.3335 50H38.8891V55.5556H33.3335V50Z" fill="white" />
                                        <path d="M44.4443 50H49.9999V55.5556H44.4443V50Z" fill="white" />
                                        <path d="M22.2222 63.8887H27.7777V69.4442H22.2222V63.8887Z" fill="white" />
                                        <path d="M33.3335 63.8887H38.8891V69.4442H33.3335V63.8887Z" fill="white" />
                                        <path d="M44.4443 63.8887H49.9999V69.4442H44.4443V63.8887Z" fill="white" />
                                        <path d="M63.8887 36.1113H69.4442V41.6669H63.8887V36.1113Z" fill="white" />
                                        <path d="M75 36.1113H80.5556V41.6669H75V36.1113Z" fill="white" />
                                        <path d="M63.8887 50H69.4442V55.5556H63.8887V50Z" fill="white" />
                                        <path d="M75 50H80.5556V55.5556H75V50Z" fill="white" />
                                        <path d="M63.8887 63.8887H69.4442V69.4442H63.8887V63.8887Z" fill="white" />
                                        <path d="M75 63.8887H80.5556V69.4442H75V63.8887Z" fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_440_17818">
                                            <rect width="100" height="100" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="flex pb-4">
                                <div class="justify-center items-center flex text-center m-auto text-white">
                                    Sarpras SLB
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/admin-kebutuhan-guru-slb">
                        <div class="m-4 w-72 bg-[#297785] hover:bg-[#143D44] shadow-lg rounded-lg">
                            <div class="rounded-t-lg text-xl pt-6 pl-4 justify-center items-center flex">
                                <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M79.4883 13.0354L41.9883 0.535388C41.3468 0.321537 40.6532 0.321537 40.0117 0.535388L2.51172 13.0354C1.88947 13.2428 1.34827 13.6408 0.964779 14.1729C0.581288 14.705 0.374951 15.3443 0.375 16.0002V47.2502C0.375 48.079 0.70424 48.8739 1.29029 49.4599C1.87634 50.046 2.6712 50.3752 3.5 50.3752C4.3288 50.3752 5.12366 50.046 5.70971 49.4599C6.29576 48.8739 6.625 48.079 6.625 47.2502V20.3362L19.7461 24.7073C16.26 30.3393 15.1514 37.1246 16.6638 43.5733C18.1762 50.022 22.1859 55.6069 27.8125 59.1018C20.7812 61.8596 14.7031 66.8479 10.2578 73.6682C10.0266 74.0118 9.86604 74.3979 9.78539 74.8042C9.70475 75.2104 9.70565 75.6286 9.78805 76.0344C9.87045 76.4403 10.0327 76.8257 10.2654 77.1683C10.498 77.5109 10.7965 77.8039 11.1434 78.0301C11.4902 78.2564 11.8786 78.4114 12.286 78.4863C12.6933 78.5611 13.1114 78.5542 13.5161 78.466C13.9207 78.3778 14.3038 78.2101 14.643 77.9725C14.9823 77.735 15.2709 77.4323 15.4922 77.0823C21.3789 68.051 30.6758 62.8752 41 62.8752C51.3242 62.8752 60.6211 68.051 66.5078 77.0823C66.9662 77.7635 67.6742 78.237 68.4788 78.4003C69.2835 78.5637 70.1201 78.4038 70.8078 77.9552C71.4955 77.5067 71.979 76.8055 72.1539 76.0033C72.3287 75.2011 72.1808 74.3623 71.7422 73.6682C67.2969 66.8479 61.1953 61.8596 54.1875 59.1018C59.8087 55.6071 63.8146 50.0258 65.3267 43.5818C66.8389 37.1378 65.7338 30.3572 62.2539 24.7268L79.4883 18.9846C80.1107 18.7773 80.652 18.3794 81.0356 17.8472C81.4193 17.3151 81.6257 16.6758 81.6257 16.0198C81.6257 15.3638 81.4193 14.7244 81.0356 14.1923C80.652 13.6601 80.1107 13.2622 79.4883 13.0549V13.0354ZM59.75 37.8752C59.7508 40.8395 59.0489 43.7618 57.7016 46.4022C56.3544 49.0426 54.4003 51.326 51.9997 53.065C49.5991 54.804 46.8204 55.9491 43.8916 56.4062C40.9628 56.8634 37.9673 56.6196 35.151 55.6949C32.3346 54.7702 29.7776 53.1909 27.6898 51.0867C25.602 48.9824 24.0428 46.4131 23.1403 43.5895C22.2377 40.766 22.0175 37.7687 22.4976 34.8436C22.9777 31.9184 24.1445 29.1488 25.9023 26.762L40.0117 31.4495C40.6532 31.6633 41.3468 31.6633 41.9883 31.4495L56.0977 26.762C58.4718 29.9807 59.7519 33.8756 59.75 37.8752ZM41 25.2073L13.3828 16.0002L41 6.7932L68.6172 16.0002L41 25.2073Z" fill="white" />
                                </svg>
                            </div>
                            <div class="flex pb-4">
                                <div class="justify-center items-center flex text-center m-auto text-white">
                                    Kebutuhan Guru SLB
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