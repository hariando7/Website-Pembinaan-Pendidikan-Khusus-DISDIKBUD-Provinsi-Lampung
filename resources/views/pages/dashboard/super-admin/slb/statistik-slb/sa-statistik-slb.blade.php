<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data SLB | Statistik SLB</title>
    <link rel="icon" type="image/x-icon" href="/assets/landing/prov-lampung2.svg">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Include SheetJS library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js"></script>
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
        <x-dashboard-sidebar-superadmin />
        <div class="p-4 sm:ml-64 min-h-screen text-sm">
            <div class="lg:flex lg:justify-between pb-2 gap-5">
                <div class="div">
                    <x-buttitle-landing ref="/sa-dashboard-slb" color="#FA8F21" width="[13rem]" title="Kembali"
                        extendClass="text-white text-center py-2 lg:py-2 hover:bg-[#D87815]" />
                </div>
                <div class="text-[#297785] font-bold text-[20px] lg:text-[28px]">Statistik SLB
                    Provinsi Lampung
                </div>
            </div>
            <div class="rounded shadow-lg border-solid border-4 border-[#297785] p-10 font-bold text-black"
                id="moving-border">
                {{-- isi konten disini --}}
                {{-- isi konten disini --}}
                <x-sa-statistik-pd />
                <x-sa-statistik-guru />
                <x-sa-statistik-tendik />
                <x-sa-statistik-sarpras />
                <x-sa-statistik-kebutuhanguru />
                <x-sa-statistik-karya />
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-4">
                    <div
                        class="flex items-center justify-center rounded-lg h-32 bg-[#297785] hover:bg-[#143D44] shadow-lg">
                        <button data-modal-target="select-modal1" data-modal-toggle="select-modal1">
                            <div class="rounded-t-lg text-xl p-3 pl-4 justify-center items-center flex">
                                <svg width="100" height="100" viewBox="0 0 100 100" fill="none" class=""
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M33.3337 -0.00012207C32.2286 -0.00012207 31.1688 0.438866 30.3874 1.22027C29.606 2.00167 29.167 3.06148 29.167 4.16654V66.6665C29.167 67.7716 29.606 68.8314 30.3874 69.6128C31.1688 70.3942 32.2286 70.8332 33.3337 70.8332C34.4387 70.8332 35.4985 70.3942 36.2799 69.6128C37.0613 68.8314 37.5003 67.7716 37.5003 66.6665V4.16654C37.5003 3.06148 37.0613 2.00167 36.2799 1.22027C35.4985 0.438866 34.4387 -0.00012207 33.3337 -0.00012207Z"
                                        fill="white" />
                                    <path
                                        d="M62.4997 33.3339C61.3946 33.3339 60.3348 33.7728 59.5534 34.5543C58.772 35.3357 58.333 36.3955 58.333 37.5005V66.6672C58.333 67.7723 58.772 68.8321 59.5534 69.6135C60.3348 70.3949 61.3946 70.8339 62.4997 70.8339C63.6047 70.8339 64.6646 70.3949 65.446 69.6135C66.2274 68.8321 66.6663 67.7723 66.6663 66.6672V37.5005C66.6663 36.3955 66.2274 35.3357 65.446 34.5543C64.6646 33.7728 63.6047 33.3339 62.4997 33.3339Z"
                                        fill="white" />
                                    <path
                                        d="M4.16667 16.6664C3.0616 16.6664 2.00179 17.1054 1.22039 17.8868C0.438988 18.6682 0 19.728 0 20.833V66.6664C0 67.7715 0.438988 68.8313 1.22039 69.6127C2.00179 70.3941 3.0616 70.8331 4.16667 70.8331C5.27174 70.8331 6.33154 70.3941 7.11294 69.6127C7.89435 68.8313 8.33333 67.7715 8.33333 66.6664V20.833C8.33333 19.728 7.89435 18.6682 7.11294 17.8868C6.33154 17.1054 5.27174 16.6664 4.16667 16.6664Z"
                                        fill="white" />
                                </svg>
                                <div class="flex">
                                    <div class="justify-center items-center flex text-center m-auto text-white">
                                        Peserta Didik SLB
                                    </div>
                                </div>
                            </div>
                        </button>
                    </div>
                    <div
                        class="flex items-center justify-center rounded-lg h-32 bg-[#297785] hover:bg-[#143D44] shadow-lg">
                        <button data-modal-target="select-modal2" data-modal-toggle="select-modal2">
                            <div class="rounded-t-lg text-xl p-3 pl-4 justify-center items-center flex">
                                <svg width="100" height="100" viewBox="0 0 100 100" fill="none" class=""
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M33.3337 -0.00012207C32.2286 -0.00012207 31.1688 0.438866 30.3874 1.22027C29.606 2.00167 29.167 3.06148 29.167 4.16654V66.6665C29.167 67.7716 29.606 68.8314 30.3874 69.6128C31.1688 70.3942 32.2286 70.8332 33.3337 70.8332C34.4387 70.8332 35.4985 70.3942 36.2799 69.6128C37.0613 68.8314 37.5003 67.7716 37.5003 66.6665V4.16654C37.5003 3.06148 37.0613 2.00167 36.2799 1.22027C35.4985 0.438866 34.4387 -0.00012207 33.3337 -0.00012207Z"
                                        fill="white" />
                                    <path
                                        d="M62.4997 33.3339C61.3946 33.3339 60.3348 33.7728 59.5534 34.5543C58.772 35.3357 58.333 36.3955 58.333 37.5005V66.6672C58.333 67.7723 58.772 68.8321 59.5534 69.6135C60.3348 70.3949 61.3946 70.8339 62.4997 70.8339C63.6047 70.8339 64.6646 70.3949 65.446 69.6135C66.2274 68.8321 66.6663 67.7723 66.6663 66.6672V37.5005C66.6663 36.3955 66.2274 35.3357 65.446 34.5543C64.6646 33.7728 63.6047 33.3339 62.4997 33.3339Z"
                                        fill="white" />
                                    <path
                                        d="M4.16667 16.6664C3.0616 16.6664 2.00179 17.1054 1.22039 17.8868C0.438988 18.6682 0 19.728 0 20.833V66.6664C0 67.7715 0.438988 68.8313 1.22039 69.6127C2.00179 70.3941 3.0616 70.8331 4.16667 70.8331C5.27174 70.8331 6.33154 70.3941 7.11294 69.6127C7.89435 68.8313 8.33333 67.7715 8.33333 66.6664V20.833C8.33333 19.728 7.89435 18.6682 7.11294 17.8868C6.33154 17.1054 5.27174 16.6664 4.16667 16.6664Z"
                                        fill="white" />
                                </svg>
                                <div class="flex">
                                    <div class="justify-center items-center flex text-center m-auto text-white">
                                        Guru SLB
                                    </div>
                                </div>
                            </div>
                        </button>
                    </div>
                    <div
                        class="flex items-center justify-center rounded-lg h-32 bg-[#297785] hover:bg-[#143D44] shadow-lg">
                        <button data-modal-target="select-modal6" data-modal-toggle="select-modal6">
                            <div class="rounded-t-lg text-xl p-3 pl-4 justify-center items-center flex">
                                <svg width="100" height="100" viewBox="0 0 100 100" fill="none" class=""
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M33.3337 -0.00012207C32.2286 -0.00012207 31.1688 0.438866 30.3874 1.22027C29.606 2.00167 29.167 3.06148 29.167 4.16654V66.6665C29.167 67.7716 29.606 68.8314 30.3874 69.6128C31.1688 70.3942 32.2286 70.8332 33.3337 70.8332C34.4387 70.8332 35.4985 70.3942 36.2799 69.6128C37.0613 68.8314 37.5003 67.7716 37.5003 66.6665V4.16654C37.5003 3.06148 37.0613 2.00167 36.2799 1.22027C35.4985 0.438866 34.4387 -0.00012207 33.3337 -0.00012207Z"
                                        fill="white" />
                                    <path
                                        d="M62.4997 33.3339C61.3946 33.3339 60.3348 33.7728 59.5534 34.5543C58.772 35.3357 58.333 36.3955 58.333 37.5005V66.6672C58.333 67.7723 58.772 68.8321 59.5534 69.6135C60.3348 70.3949 61.3946 70.8339 62.4997 70.8339C63.6047 70.8339 64.6646 70.3949 65.446 69.6135C66.2274 68.8321 66.6663 67.7723 66.6663 66.6672V37.5005C66.6663 36.3955 66.2274 35.3357 65.446 34.5543C64.6646 33.7728 63.6047 33.3339 62.4997 33.3339Z"
                                        fill="white" />
                                    <path
                                        d="M4.16667 16.6664C3.0616 16.6664 2.00179 17.1054 1.22039 17.8868C0.438988 18.6682 0 19.728 0 20.833V66.6664C0 67.7715 0.438988 68.8313 1.22039 69.6127C2.00179 70.3941 3.0616 70.8331 4.16667 70.8331C5.27174 70.8331 6.33154 70.3941 7.11294 69.6127C7.89435 68.8313 8.33333 67.7715 8.33333 66.6664V20.833C8.33333 19.728 7.89435 18.6682 7.11294 17.8868C6.33154 17.1054 5.27174 16.6664 4.16667 16.6664Z"
                                        fill="white" />
                                </svg>
                                <div class="flex">
                                    <div class="justify-center items-center flex text-center m-auto text-white">
                                        Tendik SLB
                                    </div>
                                </div>
                            </div>
                        </button>
                    </div>
                    <div
                        class="flex items-center justify-center rounded-lg h-32 bg-[#297785] hover:bg-[#143D44] shadow-lg">
                        <button data-modal-target="select-modal5" data-modal-toggle="select-modal5">
                            <div class="rounded-t-lg text-xl p-3 pl-4 justify-center items-center flex">
                                <svg width="100" height="100" viewBox="0 0 100 100" fill="none" class=""
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M33.3337 -0.00012207C32.2286 -0.00012207 31.1688 0.438866 30.3874 1.22027C29.606 2.00167 29.167 3.06148 29.167 4.16654V66.6665C29.167 67.7716 29.606 68.8314 30.3874 69.6128C31.1688 70.3942 32.2286 70.8332 33.3337 70.8332C34.4387 70.8332 35.4985 70.3942 36.2799 69.6128C37.0613 68.8314 37.5003 67.7716 37.5003 66.6665V4.16654C37.5003 3.06148 37.0613 2.00167 36.2799 1.22027C35.4985 0.438866 34.4387 -0.00012207 33.3337 -0.00012207Z"
                                        fill="white" />
                                    <path
                                        d="M62.4997 33.3339C61.3946 33.3339 60.3348 33.7728 59.5534 34.5543C58.772 35.3357 58.333 36.3955 58.333 37.5005V66.6672C58.333 67.7723 58.772 68.8321 59.5534 69.6135C60.3348 70.3949 61.3946 70.8339 62.4997 70.8339C63.6047 70.8339 64.6646 70.3949 65.446 69.6135C66.2274 68.8321 66.6663 67.7723 66.6663 66.6672V37.5005C66.6663 36.3955 66.2274 35.3357 65.446 34.5543C64.6646 33.7728 63.6047 33.3339 62.4997 33.3339Z"
                                        fill="white" />
                                    <path
                                        d="M4.16667 16.6664C3.0616 16.6664 2.00179 17.1054 1.22039 17.8868C0.438988 18.6682 0 19.728 0 20.833V66.6664C0 67.7715 0.438988 68.8313 1.22039 69.6127C2.00179 70.3941 3.0616 70.8331 4.16667 70.8331C5.27174 70.8331 6.33154 70.3941 7.11294 69.6127C7.89435 68.8313 8.33333 67.7715 8.33333 66.6664V20.833C8.33333 19.728 7.89435 18.6682 7.11294 17.8868C6.33154 17.1054 5.27174 16.6664 4.16667 16.6664Z"
                                        fill="white" />
                                </svg>
                                <div class="flex">
                                    <div class="justify-center items-center flex text-center m-auto text-white">
                                        Sarpras SLB
                                    </div>
                                </div>
                            </div>
                        </button>
                    </div>
                    <div
                        class="flex items-center justify-center rounded-lg h-32 bg-[#297785] hover:bg-[#143D44] shadow-lg">
                        <button data-modal-target="select-modal4" data-modal-toggle="select-modal4">
                            <div class="rounded-t-lg text-xl p-3 ml-5 mt-2 justify-center items-center flex">
                                <svg width="100" height="100" viewBox="0 0 100 100" fill="none" class=""
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M33.3337 -0.00012207C32.2286 -0.00012207 31.1688 0.438866 30.3874 1.22027C29.606 2.00167 29.167 3.06148 29.167 4.16654V66.6665C29.167 67.7716 29.606 68.8314 30.3874 69.6128C31.1688 70.3942 32.2286 70.8332 33.3337 70.8332C34.4387 70.8332 35.4985 70.3942 36.2799 69.6128C37.0613 68.8314 37.5003 67.7716 37.5003 66.6665V4.16654C37.5003 3.06148 37.0613 2.00167 36.2799 1.22027C35.4985 0.438866 34.4387 -0.00012207 33.3337 -0.00012207Z"
                                        fill="white" />
                                    <path
                                        d="M62.4997 33.3339C61.3946 33.3339 60.3348 33.7728 59.5534 34.5543C58.772 35.3357 58.333 36.3955 58.333 37.5005V66.6672C58.333 67.7723 58.772 68.8321 59.5534 69.6135C60.3348 70.3949 61.3946 70.8339 62.4997 70.8339C63.6047 70.8339 64.6646 70.3949 65.446 69.6135C66.2274 68.8321 66.6663 67.7723 66.6663 66.6672V37.5005C66.6663 36.3955 66.2274 35.3357 65.446 34.5543C64.6646 33.7728 63.6047 33.3339 62.4997 33.3339Z"
                                        fill="white" />
                                    <path
                                        d="M4.16667 16.6664C3.0616 16.6664 2.00179 17.1054 1.22039 17.8868C0.438988 18.6682 0 19.728 0 20.833V66.6664C0 67.7715 0.438988 68.8313 1.22039 69.6127C2.00179 70.3941 3.0616 70.8331 4.16667 70.8331C5.27174 70.8331 6.33154 70.3941 7.11294 69.6127C7.89435 68.8313 8.33333 67.7715 8.33333 66.6664V20.833C8.33333 19.728 7.89435 18.6682 7.11294 17.8868C6.33154 17.1054 5.27174 16.6664 4.16667 16.6664Z"
                                        fill="white" />
                                </svg>
                                <div class="flex">
                                    <div class="justify-center items-center flex text-center m-auto text-white">
                                        Kebutuhan Guru SLB
                                    </div>
                                </div>
                            </div>
                        </button>
                    </div>
                    <div
                        class="flex items-center justify-center rounded-lg h-32 bg-[#297785] hover:bg-[#143D44] shadow-lg">
                        <button data-modal-target="select-modal3" data-modal-toggle="select-modal3">
                            <div class="rounded-t-lg text-xl mt-5 justify-center items-center flex">
                                <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                                    class="" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M33.3337 -0.00012207C32.2286 -0.00012207 31.1688 0.438866 30.3874 1.22027C29.606 2.00167 29.167 3.06148 29.167 4.16654V66.6665C29.167 67.7716 29.606 68.8314 30.3874 69.6128C31.1688 70.3942 32.2286 70.8332 33.3337 70.8332C34.4387 70.8332 35.4985 70.3942 36.2799 69.6128C37.0613 68.8314 37.5003 67.7716 37.5003 66.6665V4.16654C37.5003 3.06148 37.0613 2.00167 36.2799 1.22027C35.4985 0.438866 34.4387 -0.00012207 33.3337 -0.00012207Z"
                                        fill="white" />
                                    <path
                                        d="M62.4997 33.3339C61.3946 33.3339 60.3348 33.7728 59.5534 34.5543C58.772 35.3357 58.333 36.3955 58.333 37.5005V66.6672C58.333 67.7723 58.772 68.8321 59.5534 69.6135C60.3348 70.3949 61.3946 70.8339 62.4997 70.8339C63.6047 70.8339 64.6646 70.3949 65.446 69.6135C66.2274 68.8321 66.6663 67.7723 66.6663 66.6672V37.5005C66.6663 36.3955 66.2274 35.3357 65.446 34.5543C64.6646 33.7728 63.6047 33.3339 62.4997 33.3339Z"
                                        fill="white" />
                                    <path
                                        d="M4.16667 16.6664C3.0616 16.6664 2.00179 17.1054 1.22039 17.8868C0.438988 18.6682 0 19.728 0 20.833V66.6664C0 67.7715 0.438988 68.8313 1.22039 69.6127C2.00179 70.3941 3.0616 70.8331 4.16667 70.8331C5.27174 70.8331 6.33154 70.3941 7.11294 69.6127C7.89435 68.8313 8.33333 67.7715 8.33333 66.6664V20.833C8.33333 19.728 7.89435 18.6682 7.11294 17.8868C6.33154 17.1054 5.27174 16.6664 4.16667 16.6664Z"
                                        fill="white" />
                                </svg>
                                <div class="flex pb-4">
                                    <div class="justify-center items-center flex text-center m-auto text-white">
                                        Karya SLB
                                    </div>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
