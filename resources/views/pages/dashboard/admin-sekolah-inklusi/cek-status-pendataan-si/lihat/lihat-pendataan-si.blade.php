<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lihat Pendataan Sekolah Inklusi | Bidang Pembinaan Pendidikan Khusus | Disdikbud Provinsi Lampung</title>
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
                <div class="text-[#297785] font-bold text-[32px]">Lihat Data
                </div>
                <div class="">
                    <x-buttitle-landing ref="/ai-cek-status" color="#FA8F21" width="[7rem]" title="Kembali"
                        extendClass="text-white text-center py-2 lg:py-2 hover:bg-[#D87815]" />
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
                                </div>
                                <input type="text" id="romble" class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full" placeholder="Masukkan No HP" required />
                            </div>
                            <div class="flex flex-col flex-1 mb-4">
                                <div class="flex gap-1">
                                    <label htmlFor="romble">No HP</label>
                                </div>
                                <input type="text" id="romble" class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full" placeholder="Masukkan No HP" required />
                            </div>
                        </div>
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