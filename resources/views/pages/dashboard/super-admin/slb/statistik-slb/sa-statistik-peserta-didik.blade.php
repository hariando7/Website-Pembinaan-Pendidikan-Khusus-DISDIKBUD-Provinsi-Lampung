<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data SLB | Statistik Peserta Didik</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="assets/landing/prov-lampung2.svg">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />

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
        <x-dashboard-side-bar-sa />
        <div class="min-h-screen pb-28 pl-[280px] pr-5 pt-5">
            <div class="flex justify-between pb-2">
                <div class="div">
                    <x-buttitle-landing ref="/admin-pesertadidik-slb" color="#FA8F21" width="[13rem]" title="Kembali"
                        extendClass="text-white text-center py-2 lg:py-2 hover:bg-[#D87815]" />
                </div>
                <div class="m-auto items-center justify-center text-center text-xl font-bold text-[#297785]">Statistik
                    Peserta Didik By Jenis Kelamin
                </div>
                <x-admin-statistik-pd />
            </div>
            <div class="relative rounded border-4 border-solid border-[#297785] p-5 font-bold text-black shadow-lg"
                id="moving-border">
                <div class="flex justify-between mb-4">
                    <div class="relative">
                        <label for="filterTahun" class="block text-sm font-medium text-gray-700">Tahun</label>
                        <select id="filterTahun"
                            class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                        </select>
                    </div>
                    <div class="relative">
                        <label for="filterKelas" class="block text-sm font-medium text-gray-700">Kelas</label>
                        <select id="filterKelas"
                            class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                            <option value="Class A">Kelas 1</option>
                            <option value="Class B">Kelas 2</option>
                            <option value="Class C">Kelas 3</option>
                        </select>
                    </div>
                    <div class="relative">
                        <label for="filterDisabilitas" class="block text-sm font-medium text-gray-700">Jenis
                            Disabilitas</label>
                        <select id="filterDisabilitas"
                            class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                            <option value="Physical">Tunanetra</option>
                            <option value="Visual">Tunagrahita</option>
                            <option value="Hearing">Tunadhaksa</option>
                        </select>
                    </div>
                </div>
                <div class="relative h-[450px] max-w-full">
                    <canvas id="myChart" class="left-0 top-0 h-full w-full"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script>
        async function statistik() {
            const ctx = document.getElementById('myChart');
            const filterTahun = document.getElementById('filterTahun');
            const filterKelas = document.getElementById('filterKelas');
            const filterDisabilitas = document.getElementById('filterDisabilitas');

            const dummyData = [{
                    namaSekolah: 'Sekolah A',
                    total: 100,
                    perempuan: 50,
                    lakiLaki: 70
                },
                {
                    namaSekolah: 'Sekolah B',
                    total: 100,
                    perempuan: 40,
                    lakiLaki: 60
                },
                {
                    namaSekolah: 'Sekolah C',
                    total: 100,
                    perempuan: 30,
                    lakiLaki: 50
                },
                {
                    namaSekolah: 'Sekolah D',
                    total: 100,
                    perempuan: 60,
                    lakiLaki: 80
                },
                {
                    namaSekolah: 'Sekolah E',
                    total: 100,
                    perempuan: 45,
                    lakiLaki: 65
                },
            ];

            let labels = [];
            let total = [];
            let perempuan = [];
            let lakiLaki = [];
            dummyData.forEach(item => {
                labels.push(item['namaSekolah']);
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
                        hidden: true
                    },
                ]
            };

            const config = {
                type: 'bar',
                data: data,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            };

            const parent = ctx.parentElement;
            ctx.width = parent.clientWidth;
            ctx.height = parent.clientHeight;

            const myChart = new Chart(ctx, config);

            filterTahun.addEventListener('change', () => updateChart());
            filterKelas.addEventListener('change', () => updateChart());
            filterDisabilitas.addEventListener('change', () => updateChart());

            function updateChart() {
                const selectedTahun = filterTahun.value;
                const selectedKelas = filterKelas.value;
                const selectedDisabilitas = filterDisabilitas.value;

                console.log('Selected Year:', selectedTahun);
                console.log('Selected Class:', selectedKelas);
                console.log('Selected Disability Type:', selectedDisabilitas);
            }
            // non aktif perepuan
            document.getElementById('togglePerempuan').addEventListener('click', () => {
                const perempuanDataset = myChart.getDatasetMeta(1);
                perempuanDataset.hidden = !perempuanDataset.hidden;
                myChart.update();
            });
            // non aktif laki laki
            document.getElementById('toggleLakiLaki').addEventListener('click', () => {
                const lakiLakiDataset = myChart.getDatasetMeta(2);
                lakiLakiDataset.hidden = !lakiLakiDataset.hidden;
                myChart.update();
            });
        }
        statistik();
    </script>


</body>

</html>
