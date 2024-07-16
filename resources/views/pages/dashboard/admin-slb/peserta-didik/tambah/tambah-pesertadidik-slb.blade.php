<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Tambah Peserta Didik SLB</title>
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
@use('App\Models\Sekolah')
@php
    $sekolah = Sekolah::find(auth()->user()->sekolah);
@endphp

<body class="bg-white z-10">
    <div>
        <x-dashboard-sidebar-admin />
        <div class="p-4 sm:ml-64 min-h-screen">
            <div class="gap-2 mb-4 mt-0 lg:mt-4">
                <div class="text-2xl justify-center text-left items-center font-bold text-[#297785] m-auto">
                    Tambah Peserta Didik SLB - {{ $sekolah->nama }}
                </div>
            </div>
            <div class="p-4 border-4 border-solid border-[#297785] rounded-lg" id="moving-border">
                <div class="hide-scrollbar max-h-[calc(100%-1rem)] overflow-y-auto">
                    {{-- isi konten disini --}}
                    <form method="POST" class="font-bold text-black text-sm" onsubmit="return validateForm()">
                        @csrf
                        <div class="grid grid-cols-1 gap-2 mb-2">
                            <div class=''>
                                <div class="flex gap-x-2">
                                    <div class="flex flex-col flex-1">
                                        <label for="tahun">Tahun Ajaran</label>
                                        <select name="tahun" id="tahun"
                                            class="border border-[#297785] text-gray-900 rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
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
                                        if (month >= 1 && month <= 9) {
                                            select.add(new Option((year - 1) + "/" + year, (year - 1) + "/" + year));
                                            select.add(new Option(year + "/" + (year + 1), year + "/" + (year + 1)));
                                        } else {
                                            select.add(new Option(year + "/" + (year + 1), year + "/" + (year + 1)));
                                            select.add(new Option((year + 1) + "/" + (year + 2), (year + 1) + "/" + (year + 2)));
                                        }
                                    }
                                    window.onload = populateTahunOptions;
                                </script>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2 mb-2">
                            <div class=''>
                                <label htmlFor="name">Nama Peserta Didik</label>
                                <input type="text" name="nama" id="name" maxlength="100"
                                    class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                    placeholder="Masukkan Nama Peserta Didik (Maksimal 100 Karakter)" required />
                                <script>
                                    function validateForm() {
                                        const input = document.getElementById('name');
                                        const value = input.value.trim();
                                        const letterCount = value.replace(/\s/g, '').length;
                                        if (letterCount <= 4 || letterCount >= 100) {
                                            alert("Nama harus ALFABET lebih dari 4 kata!");
                                            return false;
                                        }
                                        const regex = /[^a-zA-Z\s']/g;
                                        input.value = value.replace(regex, '');
                                        return true;
                                    }
                                </script>
                            </div>
                            <div class=''>
                                <label for="jeniskelamin">Jenis Kelamin (JK)</label>
                                <select name="jenisKelamin" id="jeniskelamin"
                                    class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                    required>
                                    <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2 mb-2">
                            <div class=''>
                                <label for="kelas">Kelas Peserta Didik</label>
                                <select name="kelas" id="kelas"
                                    class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                    required>
                                    <option value="" disabled selected>Pilih Kelas</option>
                                    <option value="1">Kelas 1</option>
                                    <option value="2">Kelas 2</option>
                                    <option value="3">Kelas 3</option>
                                    <option value="4">Kelas 4</option>
                                    <option value="5">Kelas 5</option>
                                    <option value="6">Kelas 6</option>
                                    <option value="7">Kelas 7</option>
                                    <option value="8">Kelas 8</option>
                                    <option value="9">Kelas 9</option>
                                    <option value="10">Kelas 10</option>
                                    <option value="11">Kelas 11</option>
                                    <option value="12">Kelas 12</option>
                                </select>
                            </div>
                            <div class=''>
                                <label htmlFor="jenisketunaan">Jenis Ketunaan</label>
                                <select name="jenisKetunaan" id="jenisketunaan"
                                    class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                    required>
                                    <option value="" disabled selected>Pilih Jenis Ketunaan</option>
                                    <option value="Tunanetra">Tunanetra</option>
                                    <option value="Tunarungu">Tunarungu</option>
                                    <option value="Tuna Laras">Tuna Laras</option>
                                    <option value="Tunadaksa">Tunadaksa</option>
                                    <option value="Tunagrahita">Tunagrahita</option>
                                    <option value="Down Syndrome">Down Syndrome</option>
                                    <option value="Autis">Autis</option>
                                    <option value="Hiperaktif">Hiperaktif</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex justify-between mt-8 m-4">
                            <div class="">
                                <a href="/admin-pesertadidik-slb"
                                    class="btn border-none flex justify-center py-2 items-center w-32 h-9 bg-[#FA8F21] hover:bg-[#D87815] focus:ring-4 focus:ring-[#D87815] text-white rounded-lg text-sm">
                                    Kembali
                                </a>
                            </div>
                            <div class="div">
                                <button type="submit"
                                    class="btn border-none flex justify-center py-2 items-center w-32 h-9 bg-[#FA8F21] hover:bg-[#D87815] focus:ring-4 focus:ring-[#D87815] text-white rounded-lg text-sm">
                                    + Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
