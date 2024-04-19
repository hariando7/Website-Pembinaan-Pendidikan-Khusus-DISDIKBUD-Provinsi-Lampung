<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Tambah Kebutuhan Guru SLB</title>
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
        <x-dashboard-side-bar-slb />
        <div class="pl-[280px] h-screen pt-2 pr-5 pb-28">
            <div class="pb-2 mt-5">
                <div class="text-[#297785] font-bold text-[32px]">Tambah Kebutuhan Guru SLB
                </div>
                <div class="">
                    <x-buttitle-landing ref="/admin-kebutuhan-guru-slb" color="#FA8F21" width="[7rem]" title="Kembali"
                        extendClass="text-white text-center py-2 lg:py-2 hover:bg-[#D87815]" />
                </div>
            </div>
            <form method="POST"
                class="rounded shadow-lg border-solid border-4 border-[#297785] p-5 font-bold text-black"
                id="moving-border">
                {{-- isi konten disini --}}
                @csrf
                <div class=''>
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <label for="tahun">Tahun Pelajaran</label>
                            <select name="tahun" id="tahun"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                required>
                            </select>
                        </div>
                    </div>
                    <script>
                        function populateTahunOptions() {
                            var select = document.getElementById("tahun");
                            var date = new Date();
                            var year = date.getFullYear();
                            var month = date.getMonth() + 1;
                            select.innerHTML = '';
                            if (month >= 1 && month <= 7) {
                                select.add(new Option((year - 1) + "/" + year, year - 1));
                                select.add(new Option(year + "/" + (year + 1), year));
                            } else {
                                select.add(new Option(year + "/" + (year + 1), year));
                                select.add(new Option((year + 1) + "/" + (year + 2), year + 1));
                            }
                        }
                        window.onload = populateTahunOptions;
                    </script>
                </div>
                <div class=''>
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <label htmlFor="mataPelajaran">Guru Mata Pelajaran</label>
                            <input type="text" id="mataPelajaran" name="mataPelajaran"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Guru Mata Pelajaran" required />
                        </div>
                    </div>
                </div>
                <div class=''>
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <label htmlFor="jumlahDibutuhkan">Jumlah Dibutuhkan</label>
                            <input type="number" id="jumlahDibutuhkan" name="jumlahDibutuhkan"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Jumlah Dibutuhkan" required />
                        </div>
                        <div class="flex flex-col flex-1 mb-4">
                            <label htmlFor="jumlahSaatIni">Jumlah Yang Ada</label>
                            <input type="number" id="jumlahSaatIni" name="jumlahSaatIni"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Jumlah Yang Ada" required />
                        </div>
                    </div>
                </div>
                <div class=''>
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <label htmlFor="lebihKurang">Lebih (+)/ Kurang (-)</label>
                            <input type="number" id="lebihKurang" name="lebihKurang"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Lebih/Kurang" required />
                        </div>
                        <div class="flex flex-col flex-1 mb-4">
                            <label htmlFor="keterangan">Keterangan</label>
                            <input type="text" id="keterangan" name="keterangan"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Keterangan" required />
                        </div>
                    </div>
                </div>
                <div class="flex justify-end mt-4">
                    <button type="submit"
                        class="btn border-none flex justify-center py-2 items-center w-32 h-9 bg-[#FA8F21] hover:bg-[#D87815] focus:ring-4 focus:ring-[#D87815] text-white rounded-lg text-sm">
                        + Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
