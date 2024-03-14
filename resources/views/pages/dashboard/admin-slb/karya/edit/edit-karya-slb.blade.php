<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Edit Karya SLB</title>
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
</head>

<body class="bg-white z-10">
    <div>
        <x-dashboard-side-bar-slb />
        <div class="pl-[280px] h-screen pt-2 pr-5 pb-28">
            <div class="pb-2 mt-5">
                <div class="text-[#297785] font-bold text-[32px]">Edit Karya SLB
                </div>
                <div class="flex justify-between pb-2">
                    <div class="div">
                        <x-buttitle-landing ref="/admin-karya-slb" color="#FA8F21" width="[8rem]" title="kembali"
                            extendClass="text-white text-center py-2 lg:py-2 hover:bg-[#D87815]" />
                    </div>
                    <div class="flex justify-center items-center">
                        <div class="bg-[#FF0000] hover:bg-[#D51717] p-1 rounded-md cursor-pointer" title="Delete">
                            <svg width="18" height="21" viewBox="0 0 18 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.4688 16.25H11.4062C11.5306 16.25 11.6498 16.2006 11.7377 16.1127C11.8256 16.0248 11.875 15.9056 11.875 15.7812V7.34375C11.875 7.21943 11.8256 7.1002 11.7377 7.01229C11.6498 6.92439 11.5306 6.875 11.4062 6.875H10.4688C10.3444 6.875 10.2252 6.92439 10.1373 7.01229C10.0494 7.1002 10 7.21943 10 7.34375V15.7812C10 15.9056 10.0494 16.0248 10.1373 16.1127C10.2252 16.2006 10.3444 16.25 10.4688 16.25ZM16.875 3.125H13.6559L12.3277 0.910156C12.1611 0.632428 11.9253 0.402614 11.6434 0.243108C11.3615 0.0836025 11.043 -0.000154039 10.7191 2.12674e-07H6.78086C6.45709 -1.90925e-05 6.13883 0.0838016 5.85707 0.243301C5.57531 0.4028 5.33965 0.632542 5.17305 0.910156L3.84414 3.125H0.625C0.45924 3.125 0.300269 3.19085 0.183058 3.30806C0.065848 3.42527 0 3.58424 0 3.75L0 4.375C0 4.54076 0.065848 4.69973 0.183058 4.81694C0.300269 4.93415 0.45924 5 0.625 5H1.25V18.125C1.25 18.6223 1.44754 19.0992 1.79917 19.4508C2.15081 19.8025 2.62772 20 3.125 20H14.375C14.8723 20 15.3492 19.8025 15.7008 19.4508C16.0525 19.0992 16.25 18.6223 16.25 18.125V5H16.875C17.0408 5 17.1997 4.93415 17.3169 4.81694C17.4342 4.69973 17.5 4.54076 17.5 4.375V3.75C17.5 3.58424 17.4342 3.42527 17.3169 3.30806C17.1997 3.19085 17.0408 3.125 16.875 3.125ZM6.7125 1.98867C6.73339 1.9539 6.76294 1.92515 6.79827 1.90523C6.8336 1.8853 6.8735 1.87489 6.91406 1.875H10.5859C10.6264 1.87495 10.6662 1.8854 10.7015 1.90532C10.7368 1.92524 10.7663 1.95396 10.7871 1.98867L11.4691 3.125H6.03086L6.7125 1.98867ZM14.375 18.125H3.125V5H14.375V18.125ZM6.09375 16.25H7.03125C7.15557 16.25 7.2748 16.2006 7.36271 16.1127C7.45061 16.0248 7.5 15.9056 7.5 15.7812V7.34375C7.5 7.21943 7.45061 7.1002 7.36271 7.01229C7.2748 6.92439 7.15557 6.875 7.03125 6.875H6.09375C5.96943 6.875 5.8502 6.92439 5.76229 7.01229C5.67439 7.1002 5.625 7.21943 5.625 7.34375V15.7812C5.625 15.9056 5.67439 16.0248 5.76229 16.1127C5.8502 16.2006 5.96943 16.25 6.09375 16.25Z"
                                    fill="white" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rounded shadow-lg border-solid border-4 border-[#297785] p-5 font-bold text-black" id="moving-border">
                {{-- isi konten disini --}}
                <div class=''>
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <label htmlFor="name">Judul Karya</label>
                            <input type="text" id="name"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Judul Karya SLB" required />
                        </div>
                    </div>
                </div>
                <div class=''>
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <label htmlFor="jenisketunaan">Gambar Karya</label>
                            <input type="text" id="jenisketunaan"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Gambar karya" required />
                        </div>
                    </div>
                </div>
                <div class=''>
                    <div class="flex gap-x-2">
                        <div class="flex flex-col flex-1 mb-4">
                            <label htmlFor="kelas">Deskripsi</label>
                            <input type="text" id="kelas"
                                class="border border-[#297785] text-gray-900 text-sm rounded-md focus:ring-[#297785] focus:border-[#297785] h-9 px-2 w-full"
                                placeholder="Masukkan Deskripsi Karya" required />
                        </div>
                    </div>
                </div>
                <div class="flex justify-end mt-4">
                    <button type="submit"
                        class="flex justify-center py-2 items-center w-32 h-9 bg-[#FA8F21] hover:bg-[#D87815] focus:ring-4 focus:ring-[#D87815] text-white rounded-lg text-sm">
                        <div class="flex gap-2">
                            <div class="pt-1">
                                <svg width="20" height="14" viewBox="0 0 20 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 1.5L6.7633 12.5L1.20117 7.5" stroke="white" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="div">
                                Update
                            </div>
                        </div>
                    </button>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
