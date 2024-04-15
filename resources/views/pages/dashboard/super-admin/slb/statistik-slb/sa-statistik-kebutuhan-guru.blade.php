<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data SLB | Statistik Kebutuhan Guru</title>
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

<body class="bg-white z-10">
    <div>
        <x-dashboard-side-bar-sa />
        <div class="pl-[280px] min-h-screen pt-5 pr-5 pb-28">
            <div class="flex justify-between pb-2">
                <div class="div">
                    <x-buttitle-landing ref="/sa-statistik-slb" color="#FA8F21" width="[13rem]" title="Kembali"
                        extendClass="text-white text-center py-2 lg:py-2 hover:bg-[#D87815]" />
                </div>
                <div class="text-center items-center justify-center text-[#297785] font-bold text-xl m-auto">Statistik
                    Kebutuhan Guru SLB Provinsi Lampung
                </div>
                <div class="div">
                    <x-buttitle-landing ref="/sa-kebutuhan-guru-slb" color="#FA8F21" width="[13rem]"
                        title="Selengkapnya" extendClass="text-white text-center py-2 lg:py-2 hover:bg-[#D87815]" />
                </div>
            </div>
            <div class="rounded shadow-lg border-solid border-4 border-[#297785] p-5 font-bold text-black relative"
                id="moving-border">
                {{-- isi konten disini --}}
                <div class="max-w-full h-[450px] relative" style="">
                    <canvas id="myChart" class="top-0 left-0 w-full h-full"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script>
        async function statistik() {
            const ctx = document.getElementById('myChart');
            let temp = await fetch('/api/statistik-kebutuhan-guru');
            let kebutuhanGuru = await temp.json();

            let labels = [];
            let jumlahDibutuhkan = [];
            let jumlahYangAda = [];

            kebutuhanGuru.forEach(item => {
                labels.push(item['namaSekolah']);
                jumlahDibutuhkan.push(item['jumlahDibutuhkan']);
                jumlahYangAda.push(item['jumlahYangAda']);
            });
            const data = {
                labels: labels,
                datasets: [{
                        label: 'Jumlah Dibutuhkan',
                        data: jumlahDibutuhkan,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 205, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(201, 203, 207, 0.2)'
                        ],
                        borderColor: [
                            'rgb(255, 99, 132)',
                            'rgb(255, 159, 64)',
                            'rgb(255, 205, 86)',
                            'rgb(75, 192, 192)',
                            'rgb(54, 162, 235)',
                            'rgb(153, 102, 255)',
                            'rgb(201, 203, 207)'
                        ],
                        borderWidth: 1
                    },
                    {
                        label: 'Jumlah Yang Ada',
                        data: jumlahYangAda,
                        backgroundColor: [
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(255, 205, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(201, 203, 207, 0.2)'
                        ],
                        borderColor: [
                            'rgb(54, 162, 235)',
                            'rgb(255, 99, 132)',
                            'rgb(255, 205, 86)',
                            'rgb(75, 192, 192)',
                            'rgb(255, 159, 64)',
                            'rgb(153, 102, 255)',
                            'rgb(201, 203, 207)'
                        ],
                        borderWidth: 1
                    }
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
                },
            };

            // Set canvas size to match its parent
            const parent = ctx.parentElement;
            ctx.width = parent.clientWidth;
            ctx.height = parent.clientHeight;

            // Draw chart
            new Chart(ctx, config);
        }
        statistik();
    </script>
</body>

</html>
