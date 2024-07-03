<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sekolah Inklusi | Lihat Data</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
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
        <x-dashboard-side-bar-sa id="{{ $id }}" />
        <div class="pl-[280px] min-h-screen pt-2 pr-5 pb-28">
            <div class="text-[#297785] font-bold text-[32px]">Lihat
                Pendataan Sekolah Inklusi Provinsi Lampung
            </div>
            <div class="flex justify-between pb-2">
                <div class="div">
                    <x-buttitle-landing ref="/sa-pendataan-si" color="#FA8F21" width="[8rem]" title="kembali"
                        extendClass="text-white text-center py-2 lg:py-2 hover:bg-[#D87815]" />
                </div>
            </div>
            <div class="rounded shadow-lg border-solid border-4 border-[#297785] p-5 font-bold text-black"
                id="moving-border">
                {{-- isi konten disini --}}
                <div class=''>
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <div class="flex">
                                <label htmlFor="nama_sekolah">Nama Sekolah</label>
                                <div class="div">
                                    <button data-popover-target="popover-namaSekolah" data-popover-placement="right"
                                        type="button"><svg class="w-4 h-4 ms-2 text-gray-400 hover:text-gray-500"
                                            aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                                clip-rule="evenodd"></path>
                                        </svg><span class="sr-only">Show information</span>
                                    </button>
                                    <div data-popover id="popover-namaSekolah" role="tooltip"
                                        class="absolute z-30 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72">
                                        <div class="p-3 space-y-2">
                                            <h3 class="font-semibold text-gray-900">Nama Sekolah</h3>
                                            <p>Masukkan Nama Sekolah yang sesuai dan sudah terdata di Disdikbud</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                            <input type="text" name="nama" id="name"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Nama Sekolah" value="{{ $DATA['nama'] }}" required disabled />
                        </div>
                    </div>
                </div>
                <div class=''>
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <div class="flex">
                                <label htmlFor="npsn_sekolah">NPSN Sekolah</label>
                                <div class="div">
                                    <button data-popover-target="popover-npsn" data-popover-placement="right"
                                        type="button"><svg class="w-4 h-4 ms-2 text-gray-400 hover:text-gray-500"
                                            aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                                clip-rule="evenodd"></path>
                                        </svg><span class="sr-only">Show information</span>
                                    </button>
                                    <div data-popover id="popover-npsn" role="tooltip"
                                        class="absolute z-30 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72">
                                        <div class="p-3 space-y-2">
                                            <h3 class="font-semibold text-gray-900">NPSN Sekolah</h3>
                                            <p>Masukkan NPSN Sekolah Aktif</p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                            <input type="number" name="npsn" id="name" disabled
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan NPSN" value="{{ $DATA['npsn'] }}" required />
                        </div>
                        <div class="flex flex-col flex-1 mb-4">
                            <label for="statusSekolah" class="">Status Sekolah</label>
                            <select id="statusSekolah" name="statusSekolah" disabled
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
                            <div class="flex">
                                <label htmlFor="alamat">Alamat Sekolah</label>
                                <div class="div">
                                    <button data-popover-target="popover-alamat" data-popover-placement="right"
                                        type="button"><svg class="w-4 h-4 ms-2 text-gray-400 hover:text-gray-500"
                                            aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                                clip-rule="evenodd"></path>
                                        </svg><span class="sr-only">Show information</span>
                                    </button>
                                    <div data-popover id="popover-alamat" role="tooltip"
                                        class="absolute z-30 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72">
                                        <div class="p-3 space-y-2">
                                            <h3 class="font-semibold text-gray-900">Alamat Sekolah</h3>
                                            <p>Masukkan Alamat Sekolah yang sesuai dan sudah terdata di Disdikbud
                                            </p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                            <input type="text" name="alamatSekolah" id="namasekolah" disabled
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Alamat Sekolah" value="{{ $DATA['alamatSekolah'] }}" required />
                        </div>
                        <div class="flex flex-col flex-1 mb-4">
                            <label for="kota" class="">Kab/Kota</label>
                            <select id="kota" name="kota" disabled
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
                            <input type="number" name="jumlahPDBK" id="visitors" disabled
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Jumlah PDBK" value="{{ $DATA['jumlahPDBK'] }}" required />
                        </div>
                        <div class="flex flex-col flex-1 mb-4">
                            <div class="flex">
                                <label htmlFor="pembimbing">
                                    Nama Pembimbing PDBK
                                </label>
                                <div class="div">
                                    <button data-popover-target="popover-pembimbing" data-popover-placement="right"
                                        type="button"><svg class="w-4 h-4 ms-2 text-gray-400 hover:text-gray-500"
                                            aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                                clip-rule="evenodd"></path>
                                        </svg><span class="sr-only">Show information</span>
                                    </button>
                                    <div data-popover id="popover-pembimbing" role="tooltip"
                                        class="absolute z-30 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72">
                                        <div class="p-3 space-y-2">
                                            <h3 class="font-semibold text-gray-900">Nama Pembimbing PDBK</h3>
                                            <p>Masukkan nama pembimbing PDBK untuk memudahkan pendataan
                                            </p>
                                        </div>
                                        <div data-popper-arrow></div>
                                    </div>
                                </div>
                            </div>
                            <input type="text" name="namaPembimbing" id="romble" disabled
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Nama Pembimbing PDBK" value="{{ $DATA['namaPembimbing'] }}"
                                required />
                        </div>
                    </div>
                    <div class=''>
                        <div class="flex gap-x-2">
                            <div class="flex flex-col flex-1 mb-4">
                                <label for="jenisKelamin" class="">Jenis Kelamin</label>
                                <select id="jenisKelamin" name="jenisKelamin" disabled
                                    class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                    required>
                                    <option value="{{ $DATA['jenisKelamin'] }}">{{ $DATA['jenisKelamin'] }}</option>
                                    <option value="l">Laki-Laki</option>
                                    <option value="p">Perempuan</option>
                                </select>
                            </div>
                            <div class="flex flex-col flex-1 mb-4">
                                <div class="flex">
                                    <label htmlFor="asn">Pangkat/Golongan (Jika ASN)</label>
                                    <div class="div">
                                        <button data-popover-target="popover-asn" data-popover-placement="right"
                                            type="button"><svg class="w-4 h-4 ms-2 text-gray-400 hover:text-gray-500"
                                                aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                                    clip-rule="evenodd"></path>
                                            </svg><span class="sr-only">Show information</span>
                                        </button>
                                        <div data-popover id="popover-asn" role="tooltip"
                                            class="absolute z-30 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72">
                                            <div class="p-3 space-y-2">
                                                <h3 class="font-semibold text-gray-900">Pangkat/Golongan</h3>
                                                <p>Masukkan pangkat/golongan jika ASN
                                                </p>
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                    </div>
                                </div>
                                <input type="text" name="pangkat" id="romble" disabled
                                    class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                    placeholder="Masukkan Pangkat/Golongan" value="{{ $DATA['pangkat'] }}"
                                    required />
                            </div>
                        </div>
                    </div>
                    <div class=''>
                        <div class="flex gap-x-2">
                            <div class="flex flex-col flex-1 mb-4">
                                <div class="flex">
                                    <label htmlFor="alamat-tinggal">Alamat Tinggal</label>
                                    <div class="div">
                                        <button data-popover-target="popover-alamat-tinggal"
                                            data-popover-placement="right" type="button"><svg
                                                class="w-4 h-4 ms-2 text-gray-400 hover:text-gray-500"
                                                aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                                    clip-rule="evenodd"></path>
                                            </svg><span class="sr-only">Show information</span>
                                        </button>
                                        <div data-popover id="popover-alamat-tinggal" role="tooltip"
                                            class="absolute z-30 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72">
                                            <div class="p-3 space-y-2">
                                                <h3 class="font-semibold text-gray-900">Alamat Tinggal</h3>
                                                <p>Masukkan alamat tinggal pembimbing PDBK
                                                </p>
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                    </div>
                                </div>
                                <input type="text" name="alamatTinggal" id="romble" disabled
                                    class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                    placeholder="Masukkan Alamat Tinggal" value="{{ $DATA['alamatTinggal'] }}"
                                    required />
                            </div>
                            <div class="flex flex-col flex-1 mb-4">
                                <div class="flex">
                                    <label htmlFor="no-hp">No HP
                                    </label>
                                    <div class="div">
                                        <button data-popover-target="popover-no-hp" data-popover-placement="right"
                                            type="button"><svg class="w-4 h-4 ms-2 text-gray-400 hover:text-gray-500"
                                                aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                                    clip-rule="evenodd"></path>
                                            </svg><span class="sr-only">Show information</span>
                                        </button>
                                        <div data-popover id="popover-no-hp" role="tooltip"
                                            class="absolute z-30 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72">
                                            <div class="p-3 space-y-2">
                                                <h3 class="font-semibold text-gray-900">Nomor Hp</h3>
                                                <p>Masukkan No HP Pembimbing PDBK
                                                </p>
                                            </div>
                                            <div data-popper-arrow></div>
                                        </div>
                                    </div>
                                </div>
                                <input type="text" name="nomorHP" id="romble" disabled
                                    class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                    placeholder="Masukkan No HP" value="{{ $DATA['nomorHP'] }}" required />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
