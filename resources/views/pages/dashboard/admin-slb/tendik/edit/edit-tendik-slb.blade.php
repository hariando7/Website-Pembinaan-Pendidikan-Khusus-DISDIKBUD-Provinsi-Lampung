<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Tambah Tendik SLB</title>
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
@use('App\Models\Sekolah')
@php
    $sekolah = Sekolah::find(auth()->user()->sekolah);
@endphp

<body class="bg-white z-10">
    <div>
        <x-dashboard-side-bar-slb id="{{ $id }}" />
        <div class="pl-[280px] h-screen pt-2 pr-5 pb-28">
            <div class="pb-2 mt-5">
                <div class="text-[#297785] font-bold text-[32px]">Edit Tendik SLB - {{ $sekolah->nama }}
                </div>
                <div class="flex justify-between pb-2">
                    <div class="div">
                        <x-buttitle-landing ref="/admin-tendik-slb" color="#FA8F21" width="[8rem]" title="kembali"
                            extendClass="text-white text-center py-2 lg:py-2 hover:bg-[#D87815]" />
                    </div>
                    <div class="div">
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
                                        <path stroke="white" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="p-4 md:p-5 text-center">
                                    <svg class="mx-auto mb-4 text-white w-12 h-12" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
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
                                            '/admin-tendik-slb/delete/' + document.getElementById(
                                                'id').value;
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
            </div>
            <form method="POST"
                class="rounded shadow-lg border-solid border-4 border-[#297785] p-5 font-bold text-black"
                id="moving-border">
                {{-- isi konten disini --}}
                @csrf
                @method('PUT')
                <input type="hidden" id="id" name="id" value="{{ $id }}" required>
                <div class=''>
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <label for="tahun">Tahun Ajaran</label>
                            <select name="tahun" id="tahun"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                required>
                            </select>
                        </div>
                    </div>
                    <script>
                        function populateTahunOptions() {
                            var select = document.getElementById("tahun");
                            var yearValue = "{{ $DATA['tahun'] }}";
                            var yearParts = yearValue.split('/');
                            var startYear = parseInt(yearParts[0]);
                            var endYear = parseInt(yearParts[1]);
                            select.innerHTML = '';
                            for (var year = startYear; year <= endYear; year++) {
                                select.add(new Option(year + "/" + (year + 1), year + "/" + (year + 1)));
                            }
                        }
                        window.onload = populateTahunOptions;
                    </script>
                </div>
                <div class=''>
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <label htmlFor="name">Nama tendik</label>
                            <input type="text" id="name" name="nama" maxlength="100"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Nama Tendik (Maksimal 100 Karakter)" value="{{ $DATA['nama'] }}"
                                required />
                        </div>
                        <div class="flex flex-col flex-1 mb-4">
                            <label for="jeniskelamin">Jenis Kelamin (JK)</label>
                            <select value="{{ $DATA['jenisKelamin'] }}" name="jenisKelamin" id="jeniskelamin"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                required>
                                <option value="{{ $DATA['jenisKelamin'] }}" disabled selected>
                                    {{ $DATA['jenisKelamin'] }}</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class=''>
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <label htmlFor="jenisketunaan">NIP</label>
                            <input type="number" id="jenisketunaan" name="nip" minlength="8"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan NIP" value="{{ $DATA['nip'] }}" required />
                        </div>
                    </div>
                </div>
                <div class=''>
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <label for="statusPNS">PNS/Non PNS</label>
                            <select value="{{ $DATA['statusPNS'] }}" name="statusPNS" id="statusPNS"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                required>
                                <option value="{{ $DATA['statusPNS'] }}" disabled selected>{{ $DATA['statusPNS'] }}
                                </option>
                                <option value="PNS">PNS</option>
                                <option value="Non PNS">Non PNS</option>
                            </select>
                        </div>
                        <div class="flex flex-col flex-1 mb-4">
                            <label htmlFor="romble">Bidang Tugas/ Pekerjaan</label>
                            <input type="text" id="romble" name="bidangPekerjaan" maxlength="100"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Bidang Tugas / Pekerjaan (Maksimal 100 Karakter)"
                                value="{{ $DATA['bidangPekerjaan'] }}" required />
                        </div>
                    </div>
                </div>
                <div class="flex justify-end mt-4">
                    <button type="submit"
                        class="btn border-none flex justify-center py-2 items-center w-32 h-9 bg-[#FA8F21] hover:bg-[#D87815] focus:ring-4 focus:ring-[#D87815] text-white rounded-lg text-sm">
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
            </form>
        </div>
    </div>
</body>

</html>
