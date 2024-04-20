<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Super Admin SLB | Statistik Sarpras | Sekolah</title>
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

<body class="bg-white z-10">
    <div>
        <x-dashboard-side-bar-sa />
        <div class="pl-[280px] min-h-screen pt-5 pr-5 pb-28">
            <div class="flex justify-between pb-2">
                <div class="div">
                    <x-buttitle-landing ref="/sa-sarpras-slb" color="#FA8F21" width="[13rem]" title="Kembali"
                        extendClass="text-white text-center py-2 lg:py-2 hover:bg-[#D87815]" />
                </div>
                <div class="text-center items-center justify-center text-[#297785] font-bold text-xl m-auto">Statistik
                    Sarpras SLB By Sekolah Provinsi Lampung
                </div>
                <div class="">
                    <x-sa-statistik-sarpras />
                    <button data-modal-target="select-modal5" data-modal-toggle="select-modal5"
                        class="btn border-none text-white text-center py-2 lg:py-2 my-2 flex items-center justify-center rounded-md bg-[#FA8F21] hover:bg-[#D87815] focus:ring-4 pl-2 pr-2"
                        type="button">
                        Statistik Sarpras SLB
                    </button>
                </div>
            </div>
            <div class="relative rounded border-4 border-solid border-[#297785] p-5 font-bold text-black shadow-lg"
                id="moving-border">
                <div class="flex justify-between mb-4">
                    <div class="relative">
                        <label for="filterTahun" class="block text-sm font-medium text-gray-700">Tahun</label>
                        <select id="filterTahun"
                            class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                            <option value="2022/2023">2022/2023</option>
                            <option value="2023/2024">2023/2024</option>
                            <option value="2024/2025">2024/2025</option>
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

            const dummyData = [{
                    sekolah: 'Sekolah A',
                    total: 100,
                    baik: 50,
                    rusakRingan: 70,
                    rusakBerat: 50
                },
                {
                    sekolah: 'Sekolah B',
                    total: 100,
                    baik: 50,
                    rusakRingan: 70,
                    rusakBerat: 50
                },
                {
                    sekolah: 'Sekolah C',
                    total: 100,
                    baik: 50,
                    rusakRingan: 70,
                    rusakBerat: 50
                },
            ];

            let labels = [];
            let total = [];
            let baik = [];
            let rusakRingan = [];
            let rusakBerat = [];
            dummyData.forEach(item => {
                labels.push(item['sekolah']);
                total.push(item['total']);
                baik.push(item['baik']);
                rusakRingan.push(item['rusakRingan']);
                rusakBerat.push(item['rusakBerat']);
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
                        label: 'Baik',
                        data: baik,
                        backgroundColor: [
                            'rgba(255, 205, 86, 0.2)'
                        ],
                        borderColor: [
                            'rgb(255, 205, 86)'
                        ],
                        borderWidth: 1,
                        hidden: true
                    },
                    {
                        label: 'Rusak Ringan',
                        data: rusakRingan,
                        backgroundColor: [
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgb(255, 159, 64)'
                        ],
                        borderWidth: 1,
                        hidden: true
                    },
                    {
                        label: 'Rusak Berat',
                        data: rusakBerat,

                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)'
                        ],
                        borderColor: [
                            'rgb(255, 99, 132)'
                        ],
                        borderWidth: 1,
                        hidden: true
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
                                text: 'Nama Sekolah'
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
