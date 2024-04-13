<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelola Notifikasi | Edit Notifikasi SLB</title>
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
        {{-- <x-dashboard-side-bar-sa id="{{ $id }}"/> --}}
        <x-dashboard-side-bar-sa />
        <div class="pl-[280px] full-height h-screen pt-2 pr-5 pb-28">
            <div class="flex justify-between">
                <div class="pb-2 mt-5 flex gap-5">
                    <x-buttitle-landing ref="/sa-kelola-notifikasi-slb" color="#FA8F21" width="[7rem]" title="Kembali"
                        extendClass="text-white text-center py-2 lg:py-2 hover:bg-[#D87815]" />
                    <div class="text-[#297785] font-bold text-[32px]">
                        Edit Notifikasi SLB
                    </div>
                </div>
                <div class="pb-2 mt-5 flex gap-5 text-[#297785]">
                    <x-time-saat-ini />
                </div>
            </div>
            <form method="POST"
                class="rounded shadow-lg border-solid border-4 border-[#297785] p-5 font-bold text-black"
                id="moving-border">
                @csrf
                @method('PUT')
                {{-- <input type="hidden" id="id" name="id" value="{{ $id }}" required> --}}
                {{-- isi konten disini --}}
                <div class=''>
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <label for="notificationDateTime">Tanggal dan Waktu Mulai Notifikasi</label>
                            <input name="{{ $DATA['tanggalMulai'] }}" type="datetime-local" id="notificationDateTime1"
                                value="{{ $DATA['tanggalMulai'] }}"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Tanggal dan Waktu notifikasi" required />
                        </div>
                        <div class="flex flex-col flex-1 mb-4">
                            <label for="notificationDateTime">Tanggal dan Waktu Selesai Notifikasi</label>
                            <input name="tanggalAkhir" type="datetime-local" id="notificationDateTime2"
                                value="{{ $DATA['tanggalAkhir'] }}"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Tanggal dan Waktu notifikasi" required />
                        </div>
                    </div>
                </div>
                <div class=''>
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <label for="notificationName">Nama Notifikasi</label>
                            <input name="nama" type="text" id="notificationName" value="{{ $DATA['nama'] }}"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Nama Notifikasi" required />
                        </div>
                    </div>
                </div>
                <div class=''>
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <label for="notificationDescription">Deskripsi Notifikasi</label>
                            <input name="detail" type="text" id="notificationDescription"
                                value="{{ $DATA['detail'] }}"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Detail Notifikasi" required />
                        </div>
                    </div>
                </div>
                <div class=''>
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <label for="sendToAdminEmail">Send To Email Admin SLB</label>
                            <label class="inline-flex items-center me-5 cursor-pointer">
                                <input name="kirimEmail" type="checkbox" id="emailCheckbox" class="sr-only peer"
                                    checked>
                                <div
                                    class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-green-300 dark:peer-focus:ring-green-800 dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-green-600">
                                </div>
                                <span id="emailText"
                                    class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Kirim Ke Email
                                    Admin</span>
                            </label>
                            <script>
                                const emailCheckbox = document.getElementById('emailCheckbox');
                                const emailText = document.getElementById('emailText');
                                emailCheckbox.addEventListener('change', function() {
                                    if (this.checked) {
                                        emailText.textContent = "Kirim Ke Email Admin";
                                    } else {
                                        emailText.textContent = "Tidak Kirim Ke Email Admin";
                                    }
                                });
                            </script>
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
