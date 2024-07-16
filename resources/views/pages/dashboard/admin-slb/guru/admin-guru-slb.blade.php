<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Guru SLB</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link rel="icon" type="image/x-icon" href="/assets/landing/prov-lampung2.svg">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Include SheetJS library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js"></script>
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

        @keyframes border-tombol {
            0% {
                border-color: #297785;
            }

            50% {
                border-color: #FA8F21;
            }

            100% {
                border-color: #297785;
            }
        }

        #border-tombol {
            animation: border-tombol 3s infinite;
        }
    </style>
</head>

@use('App\Models\Sekolah')
@php
    $sekolah = Sekolah::find(auth()->user()->sekolah);
@endphp

<body class="bg-white z-10">
    <div>
        <x-dashboard-sidebar-admin />
        <div class="p-4 sm:ml-64 min-h-screen">
            <div class="grid grid-cols-1 gap-4 mb-4">
                <p class="text-2xl justify-center text-left items-center text-[24px] font-bold text-[#297785] m-auto">
                    Guru
                    SLB - {{ $sekolah->nama }}
                </p>
                <div class="flex items-center justify-center rounded gap-2 h-20 border-dashed border-2 border-[#297785] rounded-lg"
                    id="border-tombol">
                    <div>
                        {{-- Button Panduan --}}
                        <button data-modal-target="button-panduan" data-modal-toggle="button-panduan" type="button"
                            class="btn border-none text-white text-center py-2 lg:py-2 hover:bg-[#D87815 w-[4.5rem] lg:w-[14.5rem] py-1 my-2 flex items-center justify-center rounded-md bg-[#FA8F21] bg-[#FA8F21] hover:bg-[#D87815] gap-2">
                            <x-svg-panduan />
                            <span class="hidden sm:inline">Panduan Pengisian</span>
                        </button>
                    </div>
                    <div>
                        {{-- Button Notifikasi --}}
                        <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                            title="Tombol Notifikasi Dari Bidang Pembinaan Pendidikan Khusus"
                            class="btn border-none text-white text-center py-2 lg:py-2 hover:bg-[#D87815 w-[4.5rem] lg:w-[14.5rem] py-1 my-2 flex items-center justify-center rounded-md bg-[#FA8F21] bg-[#FA8F21] hover:bg-[#D87815] gap-2">
                            <x-svg-notifikasi />
                            <span class="hidden sm:inline">
                                Notifikasi Dinas
                                <span id="notificationBadge"
                                    class="inline-flex items-center justify-center w-4 h-4 ms-2 text-xs font-semibold text-[#FA8F21] bg-white rounded-full"
                                    style="display: none;">
                                </span>
                            </span>
                        </button>
                        <x-notifikasi-slb :notifications="$pengumuman" />
                    </div>
                    <div>
                        {{-- Button Statistik --}}
                        <button data-modal-target="modal-admin-guru" data-modal-toggle="modal-admin-guru"
                            title="Visualisasi Statistik Guru SLB Berdasarkan PNS, Sertifikasi dan Tahun Ajaran"
                            class="btn border-none text-white text-center py-2 lg:py-2 hover:bg-[#D87815 w-[4.5rem] lg:w-[14.5rem] py-1 my-2 flex items-center justify-center rounded-md bg-[#FA8F21] bg-[#FA8F21] hover:bg-[#D87815] gap-2"
                            type="button">
                            <x-svg-statistik />
                            <span class="hidden sm:inline">Statistik Guru</span>
                        </button>
                        <x-admin-statistik-guru />
                    </div>
                    <div>
                        {{-- Button Tambah --}}
                        <button data-modal-target="button-tambah" data-modal-toggle="button-tambah" type="button"
                            class="btn border-none text-white text-center py-2 lg:py-2 hover:bg-[#D87815 w-[4.5rem] lg:w-[14.5rem] py-1 my-2 flex items-center justify-center rounded-md bg-[#FA8F21] bg-[#FA8F21] hover:bg-[#D87815] gap-2">
                            <x-svg-tambah />
                            <span class="hidden sm:inline">Tambah Guru</span>
                        </button>
                        <div id="button-tambah" tabindex="-1" aria-hidden="true"
                            class="fixed bottom-0 left-0 right-0 top-0 z-50 flex hidden items-center justify-center bg-opacity-50 backdrop-blur-sm">
                            <div class="relative max-h-full w-full max-w-md p-4">
                                <!-- Modal content -->
                                <div class="relative rounded-lg bg-[#297785] shadow">
                                    <!-- Modal header -->
                                    <div
                                        class="flex items-center justify-between rounded-t border-b border-white p-4 dark:border-white md:p-5">
                                        <div class="div">
                                            <h3 class="text-lg font-semibold text-white dark:text-white">
                                                Tambah Guru
                                            </h3>
                                        </div>
                                        <button type="button"
                                            class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-white hover:bg-[#D87815] hover:text-white dark:hover:bg-[#D87815] dark:hover:text-white"
                                            data-modal-hide="button-tambah">
                                            <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 14 14">
                                                <path stroke="white" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <div
                                        class="m-auto flex items-center justify-center gap-2 rounded-b border-t border-gray-200 p-4 text-center md:p-5">
                                        <div>
                                            <button data-modal-target="import-excel" data-modal-toggle="import-excel"
                                                type="button"
                                                class="btn border-none text-white text-center py-2 lg:py-2 hover:bg-[#D87815 w-[9rem] lg:w-[11.5rem] py-1 my-2 flex items-center justify-center rounded-md bg-[#FA8F21] bg-[#FA8F21] hover:bg-[#D87815] gap-2">
                                                <x-svg-excel />
                                                Import
                                            </button>
                                        </div>
                                        <div>
                                            <a href="/admin-guru-slb/tambah"
                                                class="btn border-none text-white text-center py-2 lg:py-2 hover:bg-[#D87815 w-[9rem] lg:w-[11.5rem] py-1 my-2 flex items-center justify-center rounded-md bg-[#FA8F21] bg-[#FA8F21] hover:bg-[#D87815] gap-2">
                                                <x-svg-tambah />
                                                Manual
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-4 border-4 border-solid border-[#297785] rounded-lg" id="moving-border">
                <div class="hide-scrollbar max-h-[calc(100%-1rem)] overflow-y-auto">
                    {{-- isi konten disini --}}
                    <div class="m-auto flex items-center justify-center">
                        <x-toast-tambah />
                        <x-toast-edit />
                        <x-toast-hapus />
                    </div>
                    <form class="flex flex-row gap-2" action="{{ route('kontrolGuru.import') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="basis-[20%]">
                            <select name="tahun" id="tahun" title="Filter Berdasarkan Tahun"
                                class="focus:ring-none z-10 inline-flex w-full items-center rounded-lg border-2 border-[#297785] py-2.5 pl-2 text-center text-sm font-medium text-[#297785] focus:border-[#FA8F21] dark:border-[#297785] dark:text-[#297785]"
                                onchange="filterTahun(this)">
                                <option value="">Semua Tahun</option>
                                @foreach ($daftarTahun as $tahun)
                                    <option value="{{ $tahun->tahun }}"
                                        @if (isset($_GET['tahun']) && $_GET['tahun'] == $tahun->tahun) selected @endif>{{ $tahun->tahun }}</option>
                                @endforeach
                            </select>
                            <script>
                                function filterTahun(e) {
                                    const params = new URLSearchParams(window.location.search);
                                    if (e.value === '') {
                                        params.delete('tahun');
                                    } else {
                                        params.set('tahun', e.value);
                                    }
                                    window.location.search = params.toString();
                                }
                            </script>
                        </div>
                        <div class="basis-[70%]">
                            <div class="mx-auto my-auto flex items-center">
                                <div class="relative w-full">
                                    <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
                                        <x-svg-search />
                                    </div>
                                    <input type="text" name="pencarian" id="simple-search"
                                        class="mx-auto border-2 border-[#297785] dark:border-[#297785] text-black text-sm rounded-lg focus:border-[#FA8F21] block w-full ps-10 p-2.5 dark:hover:text-black hover:text-black dark:placeholder-gray-400 placeholder-gray-400 dark:focus:ring-[#FA8F21] focus:ring-[#FA8F21]"
                                        placeholder="Cari Nama Guru, Jenis Kelamin, NIP, PNS/Non, Sertifikasi, Mengajar Bidang Studi"
                                        onkeypress="cariDenganEnter(event)" oninput="hapusPencarianKosong(event)"
                                        value="{{ isset($_GET['pencarian']) ? $_GET['pencarian'] : '' }}" />
                                    <script>
                                        function cariDenganEnter(event) {
                                            if (event.key === 'Enter') {
                                                event.preventDefault();
                                                const input = event.target;
                                                const params = new URLSearchParams(window.location.search);
                                                if (input.value === '') {
                                                    params.delete('pencarian');
                                                } else {
                                                    params.set('pencarian', input.value);
                                                }
                                                window.location.search = params.toString();
                                            }
                                        }

                                        function hapusPencarianKosong(event) {
                                            const input = event.target;
                                            const params = new URLSearchParams(window.location.search);
                                            if (input.value === '') {
                                                params.delete('pencarian');
                                                window.location.search = params.toString();
                                            }
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>
                        <div class="basis-[10%]">
                            <div>
                                <button id="print-button" type="button" onclick="showModal()" type="button"
                                    class="btn border-none text-white text-center w-[4rem] lg:w-[8rem] flex items-center justify-center rounded-md bg-[#FA8F21] hover:bg-[#D87815] gap-2">
                                    <x-svg-excel />
                                    <span class="hidden sm:inline">Unduh</span>
                                </button>
                            </div>
                            <!-- Main modal -->
                            <div id="modal-print" tabindex="-1" aria-hidden="true"
                                class="fixed bottom-0 left-0 right-0 top-0 z-50 flex hidden items-center justify-center bg-opacity-50 backdrop-blur-sm">
                                <div class="relative max-h-full w-full max-w-md p-4">
                                    <!-- Modal content -->
                                    <div class="relative rounded-lg bg-[#297785] shadow dark:bg-[#297785]">
                                        <!-- Modal header -->
                                        <div
                                            class="flex items-center justify-between rounded-t border-b border-white p-4 dark:border-white md:p-5">
                                            <div class="div">
                                                <h3 class="text-lg font-semibold text-white dark:text-white">
                                                    Unduh Data<br>
                                                </h3>
                                                <h5 class="text-white">
                                                    <x-time-saat-ini />
                                                </h5>
                                            </div>
                                            <button type="button"
                                                class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-white hover:bg-[#D87815] hover:text-white dark:hover:bg-[#D87815] dark:hover:text-white"
                                                data-modal-close="modal-print" onclick="hideModal()">
                                                <svg class="h-3 w-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 14 14">
                                                    <path stroke="white" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal footer -->
                                        <div
                                            class="m-auto flex items-center justify-center gap-5 rounded-b border-t border-gray-200 p-4 text-center dark:border-gray-600 md:p-5">
                                            <div>
                                                <button data-modal-hide="static-modal" type="button"
                                                    id="downloadExcel"
                                                    class="btn rounded-lg border-none bg-[#FA8F21] px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-[#D87815] hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300 gap-2">
                                                    <x-svg-excel />
                                                    Download Excel
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Modal Import Excel --}}
                            <!-- Main modal -->
                            <div id="import-excel" tabindex="-1" aria-hidden="true"
                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                <div class="relative p-4 w-full max-w-md lg:max-w-lg max-h-full">
                                    <!-- Modal content -->
                                    <div class="relative bg-[#297785] rounded-lg shadow">
                                        <!-- Modal header -->
                                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                                            <h3 class="text-lg font-bold text-white">
                                                Import Excel Guru SLB
                                            </h3>
                                            <button type="button"
                                                class="text-white bg-transparent hover:bg-[#D87815] hover:text-white rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center"
                                                data-modal-hide="import-excel">
                                                <svg class="w-3 h-3" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 14 14">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="p-4 md:p-5">
                                            <ol class="relative border-s border-[#FA8F21] ms-3.5 mb-4 md:mb-5">
                                                <li class="mb-2 ms-8">
                                                    <span
                                                        class="absolute flex items-center justify-center w-6 h-6 bg-[#FA8F21] hover:bg-[#D87815] rounded-full -start-3.5 ring-4 ring-white">
                                                        <svg fill="white" version="1.1" id="Layer_1"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            viewBox="0 0 512 512" enable-background="new 0 0 512 512"
                                                            xml:space="preserve">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                                stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path
                                                                    d="M256,0C114.609,0,0,114.609,0,256c0,141.391,114.609,256,256,256c141.391,0,256-114.609,256-256 C512,114.609,397.391,0,256,0z M256,472c-119.297,0-216-96.703-216-216S136.703,40,256,40s216,96.703,216,216S375.297,472,256,472z">
                                                                </path>
                                                                <g>
                                                                    <path
                                                                        d="M249.703,201.25H188v-25h19.312c6.859,0,13.422-1.219,19.5-3.594c6.172-2.375,11.438-5.641,15.797-9.797 c4.358-4.203,7.922-9.25,10.547-15.234c2.734-5.906,4.047-12.5,4.047-19.625H284v256h-34.297V201.25z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <h3 class="mb-1 text-lg font-semibold text-white">
                                                        Langkah Pertama, Pelajari Panduan!
                                                    </h3>
                                                    <time
                                                        class="block mb-3 text-sm font-bold leading-none text-red-800">Panduan
                                                        Tersedia Pada Laman Dibawah Ini!</time>
                                                    <button type="button"
                                                        class="btn border-none bg-[#FA8F21] hover:bg-[#D87815] hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center text-white gap-2">
                                                        <svg class="w-7 h-7" aria-hidden="true"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            viewBox="0 0 20 20">
                                                            <path
                                                                d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z" />
                                                            <path
                                                                d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                                                        </svg>
                                                        Download
                                                    </button>
                                                </li>
                                                <li class="mb-2 ms-8">
                                                    <span
                                                        class="absolute flex items-center justify-center w-6 h-6 bg-[#FA8F21] hover:bg-[#D87815] rounded-full -start-3.5 ring-4 ring-white">
                                                        <svg fill="white" version="1.1" id="Layer_1"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            viewBox="0 0 512 512" enable-background="new 0 0 512 512"
                                                            xml:space="preserve">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                                stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path
                                                                    d="M256,0C114.609,0,0,114.609,0,256s114.609,256,256,256s256-114.609,256-256S397.391,0,256,0z M256,472 c-119.297,0-216-96.703-216-216S136.703,40,256,40s216,96.703,216,216S375.297,472,256,472z">
                                                                </path>
                                                                <g>
                                                                    <path
                                                                        d="M176,209.75c2.531-24.406,10.969-44.141,25.375-59.219c14.344-15.031,34-22.531,58.859-22.531 c12.234,0,23.172,2.141,32.594,6.484c9.422,4.297,17.375,10.141,23.719,17.484c6.328,7.281,11.219,15.547,14.516,24.797 c3.281,9.266,4.938,18.844,4.938,28.703c0,8.625-0.984,16.391-3.062,23.266c-2.094,6.875-4.953,12.984-8.688,18.297 c-3.75,5.438-8.031,10.375-13.109,15c-4.922,4.688-10.328,9.078-16.188,13.234c-10.844,8.406-22.125,16.453-33.672,24.203 c-11.594,7.75-22.719,16.531-33.375,26.328c-3.875,3.672-7.062,7.438-9.594,11.453c-2.5,4.016-4.594,9.031-6.266,15.016h117.375 V384H178.531v-24.203c0-10.047,3.188-20,9.625-29.578c6.438-9.734,14.438-19.188,24.125-28.219 c9.625-9.031,20.188-17.828,31.781-26.359c11.609-8.516,22.531-16.766,32.891-24.781c7.844-5.984,14.031-12.359,18.672-19.234 c4.516-6.859,6.859-15.625,6.859-26.344c0-15.172-3.812-27.031-11.734-35.531c-7.781-8.484-17.938-12.734-30.516-12.734 c-15.359,0-27.531,4.703-36.453,14.109c-9,9.375-13.438,22.25-13.438,38.625H176z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <h3 class="mb-1 text-lg font-semibold text-white">
                                                        Langkah
                                                        Kedua, Unduh Tamplate Berikut Ini!
                                                    </h3>
                                                    <time
                                                        class="block mb-3 text-sm font-bold leading-none text-red-800">Unduh
                                                        Tamplate Berikut Ini!</time>
                                                    <a href="{{ route('download.template.guru') }}"
                                                        class="btn border-none bg-[#FA8F21] hover:bg-[#D87815] hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center text-white gap-2">
                                                        <x-svg-excel />
                                                        Unduh Template
                                                    </a>
                                                </li>
                                                <li class="mb-2 ms-8">
                                                    <span
                                                        class="absolute flex items-center justify-center w-6 h-6 bg-[#FA8F21] hover:bg-[#D87815] rounded-full -start-3.5 ring-4 ring-white">
                                                        <svg fill="white" version="1.1" id="Layer_1"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            viewBox="0 0 512 512" enable-background="new 0 0 512 512"
                                                            xml:space="preserve">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                                stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path
                                                                    d="M256,0C114.609,0,0,114.609,0,256s114.609,256,256,256s256-114.609,256-256S397.391,0,256,0z M256,472 c-119.297,0-216-96.703-216-216S136.703,40,256,40s216,96.703,216,216S375.297,472,256,472z">
                                                                </path>
                                                                <g>
                                                                    <path
                                                                        d="M182.828,204.781c2.688-24.062,9.672-42.922,20.938-56.5C215.031,134.766,232.812,128,257.25,128 c21.156,0,37.938,5.969,50.25,17.875s18.469,27.75,18.469,47.469c0,14.125-2.562,25.375-7.781,33.781 c-5.234,8.375-13.453,14.906-24.781,19.625c5.422,1.75,10.641,4.25,15.688,7.5c5.188,3.25,9.734,7.406,13.672,12.594 c4.062,5.156,7.266,11.234,9.734,18.344c2.344,7.047,3.5,15.359,3.5,25.094c0,12.172-2.078,22.688-6.234,31.75 c-4.281,9.188-9.984,16.906-17.078,22.984c-7.234,6.219-15.641,10.938-25.047,14.188c-9.531,3.234-19.672,4.797-30.391,4.797 c-21.969,0-40.156-6.984-54.5-20.984c-14.344-13.984-23.25-34.547-26.75-62h32.562c3.188,20,8.734,34.047,16.5,42.203 c7.75,8.031,18.531,12.062,32.188,12.062c6.156,0,12.094-1.016,17.703-3.047c5.641-2.016,10.516-5.016,14.812-9.016 c4.312-4,7.734-8.734,10.391-14.281c2.5-5.688,3.703-11.906,3.703-18.656c0-13.516-4.125-25.016-12.5-34.438 c-8.25-9.375-19.641-14.094-34.109-14.094h-18.516v-28.719h18.516c6.719,0,12.422-1.062,17.109-3.281 c4.656-2.234,8.484-5.094,11.453-8.625c2.953-3.5,5.031-7.5,6.219-11.875c1.297-4.469,1.797-8.875,1.797-13.25 c0-12.375-3.406-22.109-10.25-29.156c-6.828-7.078-15.922-10.594-27.188-10.594c-6.953,0-12.797,1.281-17.656,3.984 c-4.812,2.641-8.875,6.156-12.078,10.547c-3.188,4.453-5.719,9.594-7.625,15.484c-1.859,5.875-3.219,12.109-4,18.516H182.828z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <h3 class="mb-1 text-lg font-semibold text-white">
                                                        Langkah Ketiga, Upload Excel!</h3>
                                                    <time
                                                        class="block mb-3 text-sm font-bold leading-none text-red-800">Upload
                                                        Excel Di Sini!</time>
                                                    <button type="button"
                                                        onclick="document.getElementById('excelInput').click()"
                                                        class="btn border-none bg-[#FA8F21] hover:bg-[#D87815] hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center text-white gap-2">
                                                        <svg viewBox="0 0 24 24" class="w-7 h-7" fill="white"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0">
                                                            </g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                                stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path
                                                                    d="M5 9.98193V19.9819H19V9.98193H15V7.98193H21V21.9819H3V7.98193H9V9.98193H5Z"
                                                                    fill="white"></path>
                                                                <path
                                                                    d="M13.0001 2H11.0001V14.0531L8.46451 11.5175L7.05029 12.9317L12 17.8815L16.9498 12.9317L15.5356 11.5175L13.0001 14.053V2Z"
                                                                    fill="white"></path>
                                                            </g>
                                                        </svg>
                                                        Upload Excel
                                                    </button>
                                                    <input type="file" id="excelInput" name="file"
                                                        accept=".xlsx, .xls" required style="display:none"
                                                        onchange="handleFileUpload(event)">
                                                    <p id="fileName"
                                                        class="block mt-2 mb-3 text-sm font-bold leading-none text-red-800">
                                                    </p>
                                                    <script>
                                                        function handleFileUpload(event) {
                                                            const file = event.target.files[0];
                                                            if (file) {
                                                                const fileNameElement = document.getElementById('fileName');
                                                                fileNameElement.textContent = `File yang diunggah: ${file.name}`;
                                                            }
                                                        }
                                                    </script>
                                                </li>
                                                <li class="mb-2 ms-8">
                                                    <span
                                                        class="absolute flex items-center justify-center w-6 h-6 bg-[#FA8F21] hover:bg-[#D87815] rounded-full -start-3.5 ring-4 ring-white">
                                                        <svg fill="white" version="1.1" id="Layer_1"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            viewBox="0 0 512 512" enable-background="new 0 0 512 512"
                                                            xml:space="preserve">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                                stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path
                                                                    d="M256,0C114.609,0,0,114.609,0,256s114.609,256,256,256s256-114.609,256-256S397.391,0,256,0z M256,472 c-119.297,0-216-96.703-216-216S136.703,40,256,40s216,96.703,216,216S375.297,472,256,472z">
                                                                </path>
                                                                <g>
                                                                    <path
                                                                        d="M274.203,384v-62.5H176v-37.203L274.203,128H303.5v164.484H336V321.5h-32.5V384H274.203z M202.438,292.484h71.766V176.969 L202.438,292.484z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <h3 class="mb-1 text-lg font-semibold text-white">
                                                        Langkah Keempat, Import Data Excel !</h3>
                                                    <time
                                                        class="block mb-3 text-sm font-bold leading-none text-red-800">Tekan
                                                        Import Excel Di Bawah Ini</time>
                                                </li>
                                            </ol>
                                        </div>
                                        <div
                                            class="flex m-auto justify-center items-center p-4 md:p-5 border-t border-white rounded-b gap-2">
                                            <button data-modal-hide="import-excel" type="button"
                                                class="btn border-none text-white text-center py-2 lg:py-2 hover:bg-[#D87815 w-[4.5rem] lg:w-[11rem] py-1 my-2 flex items-center justify-center rounded-md bg-[#FA8F21] bg-[#FA8F21] hover:bg-[#D87815] gap-2">
                                                <svg viewBox="0 0 24 24" class="w-7 h-7" fill="white"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0">
                                                    </g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path
                                                            d="M16.19 2H7.81C4.17 2 2 4.17 2 7.81V16.18C2 19.83 4.17 22 7.81 22H16.18C19.82 22 21.99 19.83 21.99 16.19V7.81C22 4.17 19.83 2 16.19 2ZM13.92 16.13H9C8.59 16.13 8.25 15.79 8.25 15.38C8.25 14.97 8.59 14.63 9 14.63H13.92C15.2 14.63 16.25 13.59 16.25 12.3C16.25 11.01 15.21 9.97 13.92 9.97H8.85L9.11 10.23C9.4 10.53 9.4 11 9.1 11.3C8.95 11.45 8.76 11.52 8.57 11.52C8.38 11.52 8.19 11.45 8.04 11.3L6.47 9.72C6.18 9.43 6.18 8.95 6.47 8.66L8.04 7.09C8.33 6.8 8.81 6.8 9.1 7.09C9.39 7.38 9.39 7.86 9.1 8.15L8.77 8.48H13.92C16.03 8.48 17.75 10.2 17.75 12.31C17.75 14.42 16.03 16.13 13.92 16.13Z"
                                                            fill="white"></path>
                                                    </g>
                                                </svg>
                                                <span class="hidden sm:inline">Kembali</span>
                                            </button>
                                            <button data-modal-hide="import-excel" type="submit"
                                                class="btn border-none text-white text-center py-2 lg:py-2 hover:bg-[#D87815 w-[4.5rem] lg:w-[11rem] py-1 my-2 flex items-center justify-center rounded-md bg-[#FA8F21] bg-[#FA8F21] hover:bg-[#D87815] gap-2">
                                                <svg viewBox="0 0 24 24" class="w-7 h-7" fill="white"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <g id="SVGRepo_bgCarrier" stroke-width="0">
                                                    </g>
                                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                        stroke-linejoin="round"></g>
                                                    <g id="SVGRepo_iconCarrier">
                                                        <path
                                                            d="M5 9.98193V19.9819H19V9.98193H15V7.98193H21V21.9819H3V7.98193H9V9.98193H5Z"
                                                            fill="white"></path>
                                                        <path
                                                            d="M13.0001 2H11.0001V14.0531L8.46451 11.5175L7.05029 12.9317L12 17.8815L16.9498 12.9317L15.5356 11.5175L13.0001 14.053V2Z"
                                                            fill="white"></path>
                                                    </g>
                                                </svg>
                                                <span class="hidden sm:inline">Import Excel</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="relative overflow-x-auto overflow-y-auto shadow-sm sm:rounded-lg mt-5">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 bg-white">
                            <thead class="text-xs text-white uppercase bg-[#2F8386] dark:bg-[#2F8386] dark:text-white">
                                <tr>
                                    <th scope="col" class="px-3 py-2">
                                        No
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Tahun Ajaran
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Nama Guru
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Jenis Kelamin
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        NIP
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        PNS/
                                        NON
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Sertifikasi/
                                        NON
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Mengajar Bidang Studi
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // $dummyData = [
                                //     [
                                //         'id' => 1,
                                //         'tahun' => '2024-03-13 23.59',
                                //         'namaGuru' => 'John Doe',
                                //         'jenisKelamin' => 'Laki-laki',
                                //         'NIP' => '1234567890',
                                //         'statusPNS' => 'PNS',
                                //         'sertifikasi' => 'Sertifikasi',
                                //         'bidangStudi' => 'Matematika',
                                //     ],
                                // ];
                                ?>
                                <?php foreach ($dummyData as $index => $data): ?>
                                <tr
                                    class="bg-white border-b dark:bg-white dark:border-gray-700 border-gray-700 hover:bg-[#C4DDDE] dark:hover:bg-[#C4DDDE] text-black hover:text-whitee">
                                    <td class="px-3 py-2">{{ ($DATA->currentPage() - 1) * 10 + $index + 1 }}</td>
                                    <td class="px-3 py-2"><?= $data['tahun'] ?></td>
                                    <td class="px-3 py-2">
                                        <?php
                                        $namaGuru = $data['namaGuru'];
                                        echo strlen($namaGuru) > 100 ? substr($namaGuru, 0, 100) . '...' : $namaGuru;
                                        ?>
                                    </td>
                                    <td class="px-3 py-2"><?= $data['jenisKelamin'] ?></td>
                                    <td class="px-3 py-2"><?= $data['NIP'] ?></td>
                                    <td class="px-3 py-2"><?= $data['statusPNS'] ?></td>
                                    <td class="px-3 py-2"><?= $data['sertifikasi'] ?></td>
                                    <td class="px-3 py-2"><?= $data['bidangStudi'] ?></td>
                                    <td class="px-3 py-2">
                                        <div class="flex justify-items-center m-auto text-center gap-2">
                                            <a href="/admin-guru-slb/edit/{{ $data['id'] }}" title="Edit">
                                                <div
                                                    class="bg-[#FA8F21] dark:bg-[#FA8F21] hover:bg-[#D87815] dark:hover:bg-[#D87815] p-1 rounded-md">
                                                    <x-svg-edit />
                                                </div>
                                            </a>
                                            <div class="div">
                                                <button
                                                    class="bg-[#FF0000] hover:bg-[#D51717] p-1 rounded-md cursor-pointer delete-button"
                                                    title="Delete" type="button" data-index="<?= $data['id'] ?>">
                                                    <x-svg-delete />
                                                </button>
                                            </div>
                                            <?php endforeach; ?>
                                            <!-- Modal -->
                                            <div id="popup-modal" tabindex="-1" aria-hidden="true"
                                                class="z-50 hidden fixed top-0 right-0 left-0 bottom-0 flex items-center justify-center backdrop-blur-md bg-opacity-50">
                                                <div class="relative p-4 w-full max-w-md max-h-full">
                                                    <div class="relative bg-[#297785] rounded-lg shadow">
                                                        <button type="button"
                                                            class="absolute top-3 end-2.5 text-white bg-transparent hover:bg-[#D87815] hover:text-white rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                                                            data-modal-hide="popup-modal-delete">
                                                            <svg class="w-3 h-3" aria-hidden="true"
                                                                xmlns="http://www.w3.org/2000/svg" fill="white"
                                                                viewBox="0 0 14 14">
                                                                <path stroke="white" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                        <div class="p-4 md:p-5 text-center">
                                                            <svg class="mx-auto mb-4 text-white w-12 h-12"
                                                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                                fill="none" viewBox="0 0 20 20">
                                                                <path stroke="currentColor" stroke-linecap="round"
                                                                    stroke-linejoin="round" stroke-width="2"
                                                                    d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                                            </svg>
                                                            <h3 class="mb-5 text-lg font-normal text-white ">
                                                                Anda Yakin Ingin Menghapus Data Ini?</h3>
                                                            <button data-modal-hide="popup-modal-ya" type="button"
                                                                class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                                Ya
                                                            </button>
                                                            <button data-modal-hide="popup-modal-tidak"
                                                                aria-hidden="true" type="button"
                                                                class="py-2.5 px-5 ms-3 text-sm font-medium text-white bg-[#FA8F21] rounded-lg hover:bg-[#D87815] hover:text-white focus:z-10 ">Tidak</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <script>
                                                document.addEventListener('DOMContentLoaded', function() {
                                                    const deleteButtons = document.querySelectorAll('.delete-button');
                                                    deleteButtons.forEach(button => {
                                                        button.addEventListener('click', function() {
                                                            // console.log(button.getAttribute('data-index'));
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
                                                            const closeButtonYa = modal.querySelector(
                                                                '[data-modal-hide="popup-modal-ya"]');
                                                            closeButtonYa.addEventListener('click', () => {
                                                                window.location.href = window.location.origin +
                                                                    '/admin-guru-slb/delete/' + button.getAttribute(
                                                                        'data-index');
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
                                            </script>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="relative flex justify-between mt-5">
                        <div class="font-bold text-black">Jumlah : {{ $DATA->total() }}</div>
                        <div class="">
                            {{ $DATA->appends([
                                    'filterSekolah' => request('filterSekolah'),
                                    'tahun' => request('tahun'),
                                    'pencarian' => request('pencarian'),
                                ])->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/exceljs/dist/exceljs.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/xlsx/dist/xlsx.full.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/xlsx-image/dist/xlsx-image.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/xlsx-populate/browser/xlsx-populate.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('downloadExcel').addEventListener('click', async function() {
                const params = new URLSearchParams(window.location.search);
                const tahun = params.get('tahun') || '';
                const pencarian = params.get('pencarian') || '';

                try {
                    let response = await fetch(
                        `/api/guru?filterSekolah={{ auth()->user()->sekolah }}&tahun=${tahun}&pencarian=${pencarian}`
                    );
                    let result = await response.json();
                    let allData = result.data;
                    let namaSekolah = result.namaSekolah;

                    await createExcel(allData, namaSekolah);
                } catch (error) {
                    console.error("Error fetching data:", error);
                }
            });
        });

        async function createExcel(data, namaSekolah) {
            const currentDate = new Date();
            const formattedDate = currentDate.toLocaleString('id-ID', {
                year: 'numeric',
                month: 'long',
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit'
            });

            const titleHeader = [
                [`Daftar Guru ${namaSekolah}`], // Judul
                ['Tanggal Unduh: ' + formattedDate], // Waktu download
                [`Pengunduh: Admin ${namaSekolah}`], // Judul
                []
            ];

            const header = [
                'No',
                'Tahun Ajaran',
                // 'Nama Sekolah',
                'Nama Guru',
                'Jenis Kelamin',
                'NIP',
                'Status PNS',
                'Sertifikasi',
                'Bidang Studi'
            ];

            const excelData = [...titleHeader, header];
            data.forEach((item, index) => {
                const rowData = [
                    index + 1,
                    item.tahun,
                    // item.namaSekolah,
                    item.namaGuru,
                    item.jenisKelamin,
                    item.NIP,
                    item.statusPNS,
                    item.sertifikasi,
                    item.bidangStudi
                ];
                excelData.push(rowData);
            });

            const workbook = new ExcelJS.Workbook();
            const sheet = workbook.addWorksheet('Guru-SLB');

            for (let i = 0; i < 6; i++) {
                sheet.addRow([]);
            }

            sheet.addRows(excelData);

            sheet.mergeCells('A7:H7');
            sheet.mergeCells('A8:H8');
            sheet.mergeCells('A9:H9');
            sheet.getCell('A7').value = `Daftar Guru ${namaSekolah}`;
            sheet.getCell('A8').value = `Tanggal Unduh: ${formattedDate}`;
            sheet.getCell('A9').value = `Pengunduh: Admin ${namaSekolah}`;

            sheet.getCell('A7').font = {
                name: 'Arial',
                size: 18,
                bold: true
            };
            sheet.getCell('A7').alignment = {
                horizontal: 'center',
                vertical: 'center'
            };
            sheet.getCell('A8').font = {
                bold: true
            };
            sheet.getCell('A8').alignment = {
                horizontal: 'center',
                vertical: 'center'
            };
            sheet.getCell('A9').font = {
                bold: true
            };
            sheet.getCell('A9').alignment = {
                horizontal: 'center',
                vertical: 'center'
            };

            const widths = [5, 20, 30, 30, 20, 30, 20, 20, 30];
            widths.forEach((width, index) => {
                sheet.getColumn(index + 1).width = width;
            });

            const imageResponse = await fetch('/assets/landing/kop_surat.png');
            const imageBlob = await imageResponse.blob();
            const imageBuffer = await imageBlob.arrayBuffer();
            const imageId = workbook.addImage({
                buffer: imageBuffer,
                extension: 'png',
            });

            sheet.addImage(imageId, {
                tl: {
                    col: 3,
                    row: 0
                },
                ext: {
                    width: 600,
                    height: 100
                },
            });

            const buffer = await workbook.xlsx.writeBuffer();
            const blob = new Blob([buffer], {
                type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
            });
            saveAs(blob, 'Guru-SLB.xlsx');
        }

        function showModal() {
            var modal = document.getElementById("modal-print");
            modal.classList.remove("hidden");
            modal.setAttribute("aria-hidden", "false");
        }

        function hideModal() {
            var modal = document.getElementById("modal-print");
            modal.classList.add("hidden");
            modal.setAttribute("aria-hidden", "true");
        }
    </script>

</body>

</html>
