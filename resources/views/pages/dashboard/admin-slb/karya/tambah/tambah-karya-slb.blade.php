<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Tambah Karya SLB</title>
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
    <style>
        /* input gambar */
        .custom-file-input {
            border: 1px solid #297785;
            /* Warna border */
            color: #297785;
            /* Warna teks */
            background-color: #ffffff;
            /* Warna latar belakang */
            padding: 6px 12px;
            /* ukuran padding */
            border-radius: 4px;
            /* radius border */
            cursor: pointer;
        }

        /* Untuk menyembunyikan default input file */
        .custom-file-input::-webkit-file-upload-button {
            visibility: hidden;
            position: absolute;
        }

        .custom-file-input::before {
            content: 'Pilih Gambar';
            /* teks yang diinginkan */
            display: inline-block;
            background: #297785;
            /* Warna latar belakang tombol */
            color: #fff;
            /* Warna teks tombol */
            border-radius: 4px;
            /* radius border */
            padding: 6px 12px;
            /* ukuran padding */
            outline: none;
            white-space: nowrap;
            -webkit-user-select: none;
            cursor: pointer;
            margin-right: 30px;
        }

        .custom-file-input:hover::before {
            background: #1e5652;
            /* Warna latar belakang tombol saat dihover */
        }

        .custom-file-input:active::before {
            background: #15403d;
            /* Warna latar belakang tombol saat ditekan */
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
                    Tambah Karya SLB - {{ $sekolah->nama }}
                </div>
            </div>
            <div class="p-4 border-4 border-solid border-[#297785] rounded-lg" id="moving-border">
                <div class="hide-scrollbar max-h-[calc(100%-1rem)] overflow-y-auto">
                    {{-- isi konten disini --}}
                    <form method="POST" enctype="multipart/form-data" onsubmit="return validateForm()"
                        class="font-bold text-black text-sm">
                        @csrf
                        <div class="grid grid-cols-1 gap-2 mb-2">
                            <div class=''>
                                <div class="flex gap-x-2">
                                    <div class="flex flex-col flex-1">
                                        <label for="tahun">Tahun Ajaran</label>
                                        <select name="tahun" id="tahun"
                                            class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                            required>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-2 mb-2">
                            <div class=''>
                                <div class="flex gap-x-2">
                                    <div class="flex flex-col flex-1">
                                        <label htmlFor="nama">Judul Karya</label>
                                        <input type="text" name="nama" id="nama" maxlength="100"
                                            class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                            placeholder="Masukkan Judul Karya SLB (Maksimal 100 Karakter)" required />
                                        <script>
                                            function validateForm() {
                                                const input = document.getElementById('nama');
                                                const value = input.value.trim();
                                                const letterCount = value.replace(/\s/g, '').length;
                                                if (letterCount <= 4 || letterCount >= 100) {
                                                    alert("Judul karya harus ALFABET lebih dari 4 kata!");
                                                    return false;
                                                }
                                                const regex = /[^a-zA-Z\s']/g;
                                                input.value = value.replace(regex, '');
                                                return true;
                                            }
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-2 mb-2">
                            <div class=''>
                                <div class="flex gap-x-2">
                                    <div class="flex flex-col flex-1">
                                        <label htmlFor="deskripsi">Deskripsi</label>
                                        <input type="text" name="deskripsi" id="deskripsi" maxlength="500"
                                            class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                            placeholder="Masukkan Deskripsi Karya (Maksimal 500 Karakter)" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 gap-2 mb-2">
                            <div class=''>
                                <div class="flex gap-x-2">
                                    <div class="flex flex-col flex-1">
                                        <label htmlFor="gambarKarya">Gambar Karya</label>
                                        <input type="file" name="gambar" id="gambarKarya"
                                            accept="image/png, image/jpeg, image/jpg" class="custom-file-input"
                                            onchange="previewImage(event)" required />
                                        <img id="preview" src="" alt="Preview Gambar" class="mt-5 mb-5"
                                            style="max-width: 300px; max-height: 300px;">
                                        <div id="deleteIconContainer" style="display: none;">
                                            <span
                                                class="bg-red-500 text-white px-3 py-2 rounded-md w-[125px] cursor-pointer mt-5"
                                                id="deleteIcon" style="cursor: pointer;" onclick="deleteImage()">Hapus
                                                Gambar</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between mt-8 m-4">
                            <div class="">
                                <a href="/admin-karya-slb"
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

    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('preview');
                output.src = reader.result;
                document.getElementById('deleteIconContainer').style.display = 'inline';
            }
            reader.readAsDataURL(event.target.files[0]);
        }

        function deleteImage() {
            document.getElementById('gambarKarya').value = '';
            document.getElementById('preview').src = '';
            document.getElementById('deleteIconContainer').style.display = 'none';
        }

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
</body>

</html>
