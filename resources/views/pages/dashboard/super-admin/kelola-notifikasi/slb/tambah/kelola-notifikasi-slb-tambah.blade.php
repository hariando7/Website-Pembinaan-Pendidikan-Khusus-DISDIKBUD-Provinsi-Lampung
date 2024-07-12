<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelola Notifikasi | Tambah notifikasi SLB</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
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
        <x-dashboard-sidebar-superadmin />
        <div class="p-4 sm:ml-64 min-h-screen">
            <div class="lg:flex lg:justify-between pb-2 gap-5">
                <div class="pb-2 mt-5 flex gap-5">
                    <div class="text-[#297785] font-bold text-[32px]">
                        Tambah Notifikasi SLB
                    </div>
                </div>
                <div class="pb-2 mt-5 flex gap-5 text-[#297785]">
                    <x-time-saat-ini />
                </div>
            </div>
            <form method="POST"
                class="rounded shadow-lg border-solid border-4 border-[#297785] p-5 font-bold text-black text-sm"
                id="moving-border">
                @csrf
                {{-- isi konten disini --}}
                <div class=''>
                    <div class="grid grid-cols-2 gap-2 mb-2">
                        <div class=''>
                            <label for="notificationDateTime">Tanggal dan Waktu Mulai Notifikasi</label>
                            <input name="tanggalMulai" type="datetime-local" id="notificationDateTime"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Tanggal dan Waktu notifikasi" required />
                        </div>
                        <div class=''>
                            <label for="notificationDateTimeEnd">Tanggal dan Waktu Selesai Notifikasi</label>
                            <input name="tanggalAkhir" type="datetime-local" id="notificationDateTimeEnd"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Tanggal dan Waktu notifikasi" required />
                        </div>
                    </div>
                </div>
                <div class=''>
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-2">
                            <label for="namaNotifikasi">Nama Notifikasi</label>
                            <input name="nama" type="text" id="namaNotifikasi"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                maxlength="100" placeholder="Masukkan Nama Notifikasi (Maksimal 100 karakter)"
                                required />
                        </div>
                    </div>
                </div>
                <div class=''>
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-2">
                            <label htmlFor="deskNotifikasi">Deskripsi Notifikasi</label>
                            <input name="detail" type="text" id="deskNotifikasi" maxlength="100"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Detial Notifikasi (Maksimal 500 karakter)" required />
                        </div>
                    </div>
                </div>
                <div class=''>
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-2">
                            <label htmlFor="kirimEmail">Send To Email Admin SLB</label>
                            <label class="inline-flex items-center me-5 cursor-pointer">
                                <input name="kirimEmail" type="checkbox" id="emailCheckbox" class="sr-only peer"
                                    checked>
                                <div
                                    class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-green-300 dark:peer-focus:ring-green-800 dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-green-600">
                                </div>
                                <span id="emailText" class="ms-3 text-sm font-medium text-gray-900">Kirim Ke Email
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
                <div class="flex justify-between mt-4">
                    <a href="/sa-kelola-notifikasi-slb"
                        class="btn border-none flex justify-center py-2 items-center w-32 h-9 bg-[#FA8F21] hover:bg-[#D87815] focus:ring-4 focus:ring-[#D87815] text-white rounded-lg text-sm">
                        Kembali
                    </a>
                    <button type="submit"
                        class="btn border-none flex justify-center py-2 items-center w-32 h-9 bg-[#FA8F21] hover:bg-[#D87815] focus:ring-4 focus:ring-[#D87815] text-white rounded-lg text-sm">
                        + Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const input = document.getElementById('notificationDateTime');
            const now = new Date();
            const year = now.getFullYear();
            const month = String(now.getMonth() + 1).padStart(2, '0');
            const day = String(now.getDate()).padStart(2, '0');
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const currentDateTime = `${year}-${month}-${day}T${hours}:${minutes}`;
            input.min = currentDateTime;
        });
        document.addEventListener('DOMContentLoaded', (event) => {
            const input = document.getElementById('notificationDateTimeEnd');
            const now = new Date();
            const year = now.getFullYear();
            const month = String(now.getMonth() + 1).padStart(2, '0');
            const day = String(now.getDate()).padStart(2, '0');
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const currentDateTime = `${year}-${month}-${day}T${hours}:${minutes}`;
            input.min = currentDateTime;
        });
    </script>
</body>

</html>
