<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Tambah Sarpras SLB</title>
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

<body class="bg-white z-10">
    <div>
        <x-dashboard-side-bar-slb />
        <div class="pl-[280px] min-h-screen pt-2 pr-5 pb-28">
            <div class="pb-2 mt-5">
                <div class="text-[#297785] font-bold text-[32px]">Tambah Sarpras SLB
                </div>
                <div class="">
                    <x-buttitle-landing ref="/admin-sarpras-slb" color="#FA8F21" width="[7rem]" title="Kembali"
                        extendClass="text-white text-center py-2 lg:py-2 hover:bg-[#D87815]" />
                </div>
            </div>
            <form method="POST"
                class="rounded shadow-lg border-solid border-4 border-[#297785] p-5 font-bold text-black"
                id="moving-border" enctype="multipart/form-data">
                @csrf
                {{-- isi konten disini --}}
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
                            <label htmlFor="nama">Gedung/Ruang</label>
                            <input name="nama" type="text" id="nama"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Gedung/Ruang" required />
                        </div>
                    </div>
                </div>
                <div class=''>
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <label htmlFor="jumlah">Jumlah</label>
                            <input name="jumlah" type="number" id="jumlah"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Jumlah" required />
                        </div>
                    </div>
                </div>
                <div class=''>
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <label htmlFor="kondisi">Kondisi</label>
                            <select name="kondisi" id="kondisi"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                required>
                                <option value="" disabled selected>Pilih Kondisi</option>
                                <option value="Baik">Baik</option>
                                <option value="Rusak Ringan">Rusak Ringan</option>
                                <option value="Rusak Berat">Rusak Berat</option>
                            </select>
                        </div>
                        <div class="flex flex-col flex-1 mb-4">
                            <label htmlFor="keterangan">Catatan/Keterangan</label>
                            <input name="keterangan" type="text" id="keterangan"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Catatan/Keterangan" required />
                        </div>
                    </div>
                </div>
                <div class=''>
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <label htmlFor="gambarKarya">Gambar Sarpras</label>
                            <input multiple type="file" name="daftarGambar[]" id="gambarKarya"
                                accept="image/png, image/jpeg, image/jpg" class="custom-file-input"
                                onchange="previewImages(event)" />
                            <div id="previewContainer" class="mt-5" style="display: flex; flex-wrap: wrap;"></div>
                            <span id="deleteIcon" style="display: none; cursor: pointer;"><i
                                    class="fas fa-times-circle">Hapus Gambar</i></span>
                            <script>
                                function previewImages(event) {
                                    var files = event.target.files;
                                    var previewContainer = document.getElementById('previewContainer');
                                    previewContainer.innerHTML = ''; // Clear previous previews
                                    for (var i = 0; i < files.length; i++) {
                                        (function(file) {
                                            var reader = new FileReader();
                                            reader.onload = function() {
                                                var output = document.createElement('img');
                                                output.src = reader.result;
                                                output.style.maxWidth = '300px';
                                                output.style.maxHeight = '300px';
                                                output.style.marginRight = '10px'; // Adjust spacing between images
                                                previewContainer.appendChild(output);
                                            }
                                            reader.readAsDataURL(file);
                                        })(files[i]);
                                    }
                                    document.getElementById('deleteIcon').style.display = 'inline-block';
                                }
                                window.onload = function() {
                                    document.getElementById('deleteIcon').addEventListener('click', function() {
                                        document.getElementById('gambarKarya').value = ''; // Reset input file
                                        document.getElementById('previewContainer').innerHTML = ''; // Clear preview images
                                        document.getElementById('deleteIcon').style.display = 'none'; // Hide delete icon
                                    });
                                };
                            </script>
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
