<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Super Admin SLB | Statistik Guru | Tahun Ajaran</title>
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
        <x-dashboard-side-bar-sa />
        <div class="min-h-screen pb-28 pl-[280px] pr-5 pt-5">
            <div class="flex justify-between pb-2">
                <div class="div">
                    <x-buttitle-landing ref="/sa-guru-slb" color="#FA8F21" width="[13rem]" title="Kembali"
                        extendClass="text-white text-center py-2 lg:py-2 hover:bg-[#D87815]" />
                </div>
                <div class="m-auto items-center justify-center text-center text-xl font-bold text-[#297785]">Statistik
                    Guru SLB By Tahun Ajaran Provinsi Lampung
                </div>
                <div class="">
                    <x-sa-statistik-guru />
                    <button data-modal-target="select-modal2" data-modal-toggle="select-modal2"
                        class="btn border-none text-white text-center py-2 lg:py-2 my-2 flex items-center justify-center rounded-md bg-[#FA8F21] hover:bg-[#D87815] focus:ring-4 pl-2 pr-2"
                        type="button">
                        Statistik Guru SLB
                    </button>
                </div>
            </div>
            <div class="relative rounded border-4 border-solid border-[#297785] p-5 font-bold text-black shadow-lg"
                id="moving-border">
                <div class="flex justify-between mb-4">
                    <div class="relative">
                        <label for="filterSertifikasi" class="block text-sm font-medium text-gray-700">Jenis
                            Sertifikasi</label>
                        <select id="filterSertifikasi"
                            class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                            <option value="semua">Semua</option>
                            <option value="Sertifikasi">Sertifikasi</option>
                            <option value="nonsertifikasi">Non Sertifikasi</option>
                        </select>
                    </div>
                    <div class="relative">
                        <label for="filterSertifikasi" class="block text-sm font-medium text-gray-700">Nama
                            Sekolah</label>
                        <select id="filterSertifikasi"
                            class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                            <option value="semua">Semua</option>
                            <option value="sekolahA">Sekolah A</option>
                            <option value="sekolahB">Sekolah B</option>
                        </select>
                    </div>
                    <div class="relative">
                        <label for="filterPNS" class="block text-sm font-medium text-gray-700">Jenis
                            PNS</label>
                        <select id="filterPNS"
                            class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                            <option value="semua">Semua</option>
                            <option value="pns">PNS</option>
                            <option value="nonpns">Non PNS</option>
                        </select>
                    </div>
                </div>
                <div class="relative h-[450px] max-w-full">
                    <canvas id="myChart" class="left-0 top-0 h-full w-full" width="800" height="600"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script>
        async function statistik() {
            const ctx = document.getElementById('myChart');
            const filterTahun = document.getElementById('filterTahun');
            const filterKelas = document.getElementById('filterKelas');

            const dummyData = [{
                    tahun: '2023/2024',
                    total: 100,
                    perempuan: 50,
                    lakiLaki: 70
                },
                {
                    tahun: '2024/2025',
                    total: 100,
                    perempuan: 40,
                    lakiLaki: 60
                },
                {
                    tahun: '2025/2026',
                    total: 100,
                    perempuan: 30,
                    lakiLaki: 50
                },
            ];

            let labels = [];
            let total = [];
            let perempuan = [];
            let lakiLaki = [];
            dummyData.forEach(item => {
                labels.push(item['tahun']);
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
                                text: 'Tahun Ajaran'
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

            filterTahun.addEventListener('change', () => updateChart());
            filterKelas.addEventListener('change', () => updateChart());

            function updateChart() {
                const selectedTahun = filterTahun.value;
                const selectedKElas = filterKelas.value;

                console.log('Selected Year:', selectedTahun);
                console.log('Selected Disability Type:', selectedKelas);
            }
        }
        statistik();
    </script>
</body>

</html>
