<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin SLB | Statistik Karya | Tahun Ajaran</title>
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
        <x-dashboard-side-bar-slb />
        <div class="min-h-screen pb-28 pl-[280px] pr-5 pt-5">
            <div class="flex justify-between pb-2">
                <div class="div">
                    <x-buttitle-landing ref="/admin-karya-slb" color="#FA8F21" width="[13rem]" title="Kembali"
                        extendClass="text-white text-center py-2 lg:py-2 hover:bg-[#D87815]" />
                </div>
                <div class="m-auto items-center justify-center text-center text-xl font-bold text-[#297785]">Statistik
                    Karya By Tahun Ajaran
                </div>
                <x-admin-statistik-karya />
            </div>
            <div class="relative rounded border-4 border-solid border-[#297785] p-5 font-bold text-black shadow-lg"
                id="moving-border">
                <div class="relative h-[450px] max-w-full">
                    <canvas id="myChart" class="left-0 top-0 h-full w-full" width="800" height="600"></canvas>
                </div>
                <div class="m-auto flex justify-center items-center">
                    <x-buttitle-landing ref="/karya-slb" color="#FA8F21" width="[13rem]" title="Lihat Landing Page"
                        extendClass="text-white text-center py-2 lg:py-2 hover:bg-[#D87815]" />
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
                },
                {
                    tahun: '2024/2025',
                    total: 100,
                },
                {
                    tahun: '2025/2026',
                    total: 100,
                },
            ];

            let labels = [];
            let total = [];
            let perempuan = [];
            let lakiLaki = [];
            dummyData.forEach(item => {
                labels.push(item['tahun']);
                total.push(item['total']);
            });

            const data = {
                labels: labels,
                datasets: [{
                    label: 'Total Karya',
                    data: total,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgb(54, 162, 235)',
                    borderWidth: 1
                }]
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
        }
        statistik();
    </script>
</body>

</html>
