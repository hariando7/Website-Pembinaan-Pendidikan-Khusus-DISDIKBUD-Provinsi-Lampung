<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Super Admin SLB | Statistik Peserta Didik | Kelas</title>
    <link rel="icon" type="image/x-icon" href="/assets/landing/prov-lampung2.svg">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Include SheetJS library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.com/libraries/Chart.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js"></script>

    <style>
        /* peserta didik slb */
        .icon-peserta-didik-slb {
            transition: stroke 0.3s;
        }

        .group:hover .icon-peserta-didik-slb {
            stroke: #297785;
        }

        /* guru slb */
        .icon-guru-slb {
            transition: stroke 0.3s;
        }

        .group:hover .icon-guru-slb {
            stroke: #297785;
        }

        /* tendik slb */
        .icon-tendik-slb {
            transition: stroke 0.3s;
        }

        .group:hover .icon-tendik-slb {
            stroke: #297785;
        }

        /* sarpras slb */
        .icon-sarpras-slb {
            transition: stroke 0.3s;
        }

        .group:hover .icon-sarpras-slb {
            stroke: #297785;
        }

        /* kebutuhan guru slb */
        .icon-kebutuhan-guru-slb {
            transition: stroke 0.3s;
        }

        .group:hover .icon-kebutuhan-guru-slb {
            stroke: #297785;
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

<body class="z-10 bg-white">
    <div>
        <x-dashboard-sidebar-superadmin />
        <div class="p-4 sm:ml-64 min-h-screen text-sm">
            <div class="lg:flex lg:justify-between pb-2 gap-5">
                <div class="div">
                    <x-buttitle-landing ref="/sa-peserta-didik-slb" color="#FA8F21" width="[13rem]" title="Kembali"
                        extendClass="text-white text-center py-2 lg:py-2 hover:bg-[#D87815]" />
                </div>
                <div class="m-auto items-center justify-center text-center text-xl font-bold text-[#297785]">Statistik
                    Peserta Didik By Kelas Provinsi Lampung
                </div>
                <div class="">
                    <x-sa-statistik-pd />
                    <button data-modal-target="select-modal1" data-modal-toggle="select-modal1"
                        class="btn my-2 flex items-center justify-center rounded-md border-none bg-[#FA8F21] py-2 pl-2 pr-2 text-center text-white hover:bg-[#D87815] focus:ring-4 lg:py-2"
                        type="button">
                        Statistik Peserta Didik SLB
                    </button>
                </div>
            </div>
            <div class="relative rounded border-4 border-solid border-[#297785] p-5 font-bold text-black shadow-lg"
                id="moving-border">
                <div class="mb-4 flex justify-between">
                    <div class="relative">
                        <label for="filterTahun" class="block text-sm font-medium text-gray-700">Tahun</label>
                        <select id="filterTahun"
                            class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                            <option value="">semua</option>
                        </select>
                        <script>
                            async function daftarTahun() {
                                var select = document.getElementById("filterTahun");
                                let temp = await fetch('/api/daftar-tahun');
                                let dataTahun = await temp.json();

                                dataTahun.forEach(item => {
                                    select.add(new Option(item['tahun'], item['tahun']));
                                })
                            }
                            window.onload = () => {
                                daftarTahun();
                                daftarSekolah();
                            };
                        </script>
                    </div>
                    <div class="relative">
                        <label for="filterSekolah" class="block text-sm font-medium text-gray-700">Nama
                            Sekolah</label>
                        <select id="filterSekolah"
                            class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                            <option value="">Semua</option>
                        </select>
                        <script>
                            async function daftarSekolah() {
                                var select = document.getElementById("filterSekolah");
                                let temp = await fetch('/api/daftar-sekolah');
                                let dataSekolah = await temp.json();

                                dataSekolah.forEach(item => {
                                    select.add(new Option(item['nama'], item['id']));
                                })
                            }
                            // window.onload = () => {
                            //     daftarTahun();
                            //     daftarSekolah();
                            // };
                        </script>
                    </div>
                    <div class="relative">
                        <label for="filterDisabilitas" class="block text-sm font-medium text-gray-700">Jenis
                            Disabilitas</label>
                        <select id="filterDisabilitas"
                            class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                            <option value="">Semua</option>
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
                <div id="template" class="relative h-[450px] max-w-full">
                    <canvas id="myChart" class="left-0 top-0 h-full w-full" width="800" height="600"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script>
        async function statistik() {
            const ctx = document.getElementById('myChart');
            const filterTahun = document.getElementById('filterTahun');
            const filterSekolah = document.getElementById('filterSekolah');
            const filterDisabilitas = document.getElementById('filterDisabilitas');

            const temp = await fetch(
                `/api/statistik-peserta-didik-kelas?tahun=${ encodeURI(filterTahun.value) }&sekolah=${ encodeURI(filterSekolah.value) }&jenisKetunaan=${ encodeURI(filterDisabilitas.value) }`
            );
            const dummyData = await temp.json();

            // const dummyData = [{
            //         kelas: 'Kelas 1',
            //         total: 100,
            //         perempuan: 50,
            //         lakiLaki: 70
            //     },
            //     {
            //         kelas: 'Kelas 2',
            //         total: 100,
            //         perempuan: 40,
            //         lakiLaki: 60
            //     },
            //     {
            //         kelas: 'Kelas 3',
            //         total: 100,
            //         perempuan: 30,
            //         lakiLaki: 50
            //     },
            //     {
            //         kelas: 'Kelas 4',
            //         total: 100,
            //         perempuan: 60,
            //         lakiLaki: 80
            //     },
            //     {
            //         kelas: 'Kelas 5',
            //         total: 100,
            //         perempuan: 45,
            //         lakiLaki: 65
            //     },
            //     {
            //         kelas: 'Kelas 6',
            //         total: 100,
            //         perempuan: 45,
            //         lakiLaki: 65
            //     },
            //     {
            //         kelas: 'Kelas 7',
            //         total: 100,
            //         perempuan: 45,
            //         lakiLaki: 65
            //     },
            //     {
            //         kelas: 'Kelas 8',
            //         total: 100,
            //         perempuan: 45,
            //         lakiLaki: 65
            //     },
            //     {
            //         kelas: 'Kelas 9',
            //         total: 100,
            //         perempuan: 45,
            //         lakiLaki: 65
            //     },
            //     {
            //         kelas: 'Kelas 10',
            //         total: 100,
            //         perempuan: 45,
            //         lakiLaki: 65
            //     },
            //     {
            //         kelas: 'Kelas 11',
            //         total: 100,
            //         perempuan: 45,
            //         lakiLaki: 65
            //     },
            //     {
            //         kelas: 'Kelas 12',
            //         total: 100,
            //         perempuan: 45,
            //         lakiLaki: 65
            //     }
            // ];

            let labels = [];
            let total = [];
            let perempuan = [];
            let lakiLaki = [];
            dummyData.forEach(item => {
                labels.push(item['kelas']);
                total.push(item['total']);
                perempuan.push(item['perempuan']);
                lakiLaki.push(item['lakiLaki']);
            });

            const data = {
                labels: labels,
                datasets: [{
                        label: 'Total',
                        data: total,
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgb(54, 162, 235)',
                        borderWidth: 1
                    },
                    {
                        label: 'Perempuan',
                        data: perempuan,
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgb(255, 99, 132)',
                        borderWidth: 1,
                        hidden: true
                    },
                    {
                        label: 'Laki-Laki',
                        data: lakiLaki,
                        backgroundColor: 'rgba(255, 205, 86, 0.2)',
                        borderColor: 'rgb(255, 205, 86)',
                        borderWidth: 1,
                        hidden: true,
                    }
                ]
            };

            const config = {
                type: 'bar',
                data: data,
                options: {
                    scales: {
                        x: {
                            type: 'category',
                            display: true,
                            title: {
                                display: true,
                                text: 'Kelas'
                            }
                        },
                        y: {
                            beginAtZero: true,
                            display: true,
                            title: {
                                display: true,
                                text: 'Jumlah'
                            }
                        }
                    }
                }
            };

            const parent = ctx.parentElement;
            ctx.width = parent.clientWidth;
            ctx.height = parent.clientHeight;

            const myChart = new Chart(ctx, config);
        }

        function updateChart() {
            document.getElementById('myChart').remove();
            let canv = document.createElement('canvas');
            canv.id = 'myChart';
            document.getElementById('template').appendChild(canv);
            statistik();
        }
        document.getElementById('filterTahun').addEventListener('change', () => updateChart());
        document.getElementById('filterSekolah').addEventListener('change', () => updateChart());
        document.getElementById('filterDisabilitas').addEventListener('change', () => updateChart());
        statistik();
    </script>
</body>

</html>
