<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sekolah Inklusi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="assets/landing/prov-lampung2.svg">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />
    <style>
        .hide-scrollbar {
            scrollbar-width: thin;
            scrollbar-color: transparent transparent;
            overflow: hidden;
        }

        .hide-scrollbar::-webkit-scrollbar {
            width: 6px;
        }

        .hide-scrollbar::-webkit-scrollbar-thumb {
            background-color: transparent;
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
        <div class="pl-[280px] h-screen pt-2 pr-5 pb-[85px] full-height">
            <div class="flex justify-between pb-2">
                <div class="text-center items-center justify-center text-[#297785] font-bold text-[32px]">Pendataan
                    Sekolah Inklusi Provinsi Lampung
                </div>
                {{-- <div class="">
                    <x-buttitle-landing ref="/admin-tambah-guru-slb" color="#FA8F21" width="[13rem]"
                        title="+ Tambah Guru" extendClass="text-white text-center py-2 lg:py-2 hover:bg-[#D87815]" />
                </div> --}}
            </div>
            <div class="rounded shadow-lg h-full border-solid border-4 border-[#297785] pt-5 pl-5 pr-3 pb-1" id="moving-border">
                <div class="max-h-[calc(100%-1rem)] overflow-y-auto overflow-x-auto hide-scrollbar">
                    {{-- isi konten disini --}}
                    <div class="flex flex-row gap-2">
                        <div class="basis-[20%]">
                            <form>
                                <div class="relative">
                                    <button id="dropdown-button" data-dropdown-toggle="dropdown"
                                        class="z-10 inline-flex items-center py-2.5 w-full pl-2 text-sm font-medium text-center text-[#297785] border-2 border-[#297785] dark:border-[#297785] focus:border-[#FA8F21] dark:text-[#297785] rounded-lg focus:ring-none"
                                        type="button" onclick="toggleDropdown()">Filter Nama Sekolah
                                        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg>
                                    </button>
                                    <div id="dropdown"
                                        class="absolute z-20 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-[#FA8F21] top-full mt-1">
                                        <ul class="py-2 text-sm text-gray-200 dark:text-gray-200"
                                            aria-labelledby="dropdown-button">
                                            <li>
                                                <a href="#" onclick="filterGender('All')"
                                                    class="block px-4 py-2 hover:bg-[#D87815] dark:hover:bg-[#D87815] dark:hover:text-white hover:text-white">Bina
                                                    Insani</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="basis-[70%]">
                            <form class="flex items-center mx-auto my-auto">
                                <div class="relative w-full">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.9997 14.5002L11.009 11.5042L13.9997 14.5002ZM12.6663 7.50016C12.6663 9.00306 12.0693 10.4444 11.0066 11.5071C9.94391 12.5698 8.50257 13.1668 6.99967 13.1668C5.49678 13.1668 4.05544 12.5698 2.99274 11.5071C1.93003 10.4444 1.33301 9.00306 1.33301 7.50016C1.33301 5.99727 1.93003 4.55593 2.99274 3.49322C4.05544 2.43052 5.49678 1.8335 6.99967 1.8335C8.50257 1.8335 9.94391 2.43052 11.0066 3.49322C12.0693 4.55593 12.6663 5.99727 12.6663 7.50016V7.50016Z"
                                                stroke="#9E9E9E" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <input type="text" id="simple-search"
                                        class="mx-auto border-2 border-[#297785] dark:border-[#297785] text-black text-sm rounded-lg focus:border-[#FA8F21] block w-full ps-10 p-2.5 dark:hover:text-black hover:text-black dark:placeholder-gray-400 placeholder-gray-400 dark:focus:ring-[#FA8F21] focus:ring-[#FA8F21]"
                                        placeholder="Search..." oninput="searchTable()" required />
                                </div>
                            </form>
                        </div>
                        <div class="basis-[10%]">
                            <button type="button"
                                class="text-white bg-[#FA8F21] hover:bg-[#D87815] border border-[#FA8F21] dark:border-[#FA8F21] focus:ring-2 focus:outline-none focus:ring-[#FA8F21] font-medium rounded-md text-sm px-5 py-2 text-center inline-flex items-center dark:focus:ring-[#FA8F21] dark:bg-[#FA8F21] dark:text-white dark:hover:bg-[#D87815] w-full gap-2 text-center">
                                <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20.1664 7.29167H18.7497V5.20833C18.7723 4.67951 18.5844 4.16328 18.2271 3.77277C17.8697 3.38227 17.3722 3.14933 16.8434 3.125H8.15594C7.62719 3.14933 7.12965 3.38227 6.77234 3.77277C6.41502 4.16328 6.22708 4.67951 6.24969 5.20833V7.29167H4.83303C4.09997 7.29717 3.39896 7.59296 2.88353 8.11425C2.3681 8.63554 2.08025 9.33984 2.08303 10.0729V17.0104C2.08025 17.7435 2.3681 18.4478 2.88353 18.9691C3.39896 19.4904 4.09997 19.7862 4.83303 19.7917H5.72886C5.72886 20.3442 5.94835 20.8741 6.33906 21.2648C6.72976 21.6555 7.25966 21.875 7.81219 21.875H17.1872C17.7397 21.875 18.2696 21.6555 18.6603 21.2648C19.051 20.8741 19.2705 20.3442 19.2705 19.7917H20.1664C20.8994 19.7862 21.6004 19.4904 22.1159 18.9691C22.6313 18.4478 22.9191 17.7435 22.9164 17.0104V10.0729C22.9191 9.33984 22.6313 8.63554 22.1159 8.11425C21.6004 7.59296 20.8994 7.29717 20.1664 7.29167ZM8.33303 5.20833H16.6664V7.29167H8.33303V5.20833ZM7.81219 19.7917V15.625H17.1872V19.7917H7.81219ZM20.833 17.0104C20.8358 17.191 20.7675 17.3654 20.6428 17.496C20.518 17.6266 20.3469 17.7029 20.1664 17.7083H19.2705V15.625C19.2705 15.0725 19.051 14.5426 18.6603 14.1519C18.2696 13.7612 17.7397 13.5417 17.1872 13.5417H7.81219C7.25966 13.5417 6.72976 13.7612 6.33906 14.1519C5.94835 14.5426 5.72886 15.0725 5.72886 15.625V17.7083H4.83303C4.65251 17.7029 4.48139 17.6266 4.35664 17.496C4.23189 17.3654 4.16354 17.191 4.16636 17.0104V10.0729C4.16354 9.89234 4.23189 9.7179 4.35664 9.58731C4.48139 9.45672 4.65251 9.38045 4.83303 9.375H20.1664C20.3469 9.38045 20.518 9.45672 20.6428 9.58731C20.7675 9.7179 20.8358 9.89234 20.833 10.0729V17.0104Z"
                                        fill="white" />
                                </svg>
                                Print
                            </button>
                        </div>
                    </div>
                    <div class="relative overflow-x-auto overflow-y-auto shadow-sm sm:rounded-lg mt-5">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 bg-white">
                            <thead class="text-xs text-white uppercase bg-[#2F8386] dark:bg-[#2F8386] dark:text-white">
                                <tr>
                                    <th scope="col" class="px-3 py-2">
                                        No
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Tahun
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Nama Sekolah
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        NPSN
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Jumlah PDBK
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    class="bg-white border-b dark:bg-white dark:border-gray-700 border-gray-700 hover:bg-[#C4DDDE] dark:hover:bg-[#C4DDDE] text-black hover:text-white">
                                    <td class="px-3 py-2">
                                        data 1
                                    </td>
                                    <td class="px-3 py-2">
                                        data 1
                                    </td>
                                    <td class="px-3 py-2">
                                        data 1
                                    </td>
                                    <td class="px-3 py-2">
                                        data 1
                                    </td>
                                    <td class="px-3 py-2">
                                        data 1
                                    </td>
                                    <td class="px-3 py-2">
                                        <div class="flex justify-items-center m-auto text-center gap-2">
                                            <a href="/sa-pendataan-si/lihat" title="lihat">
                                                <div
                                                    class="bg-[#FA8F21] dark:bg-[#FA8F21] hover:bg-[#D87815] dark:hover:bg-[#D87815] p-1 pt-2 rounded-md">
                                                    <svg width="20" height="17" viewBox="0 0 20 17"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M20.7021 6.77528C20.0354 5.61903 16.3687 -0.183056 10.1396 0.00444383C4.37914 0.150277 1.04581 5.21278 0.139557 6.77528C0.0481316 6.93363 0 7.11326 0 7.29611C0 7.47896 0.0481316 7.65859 0.139557 7.81694C0.795807 8.95236 4.30622 14.5878 10.4416 14.5878H10.7021C16.4625 14.4419 19.8062 9.37945 20.7021 7.81694C20.7935 7.65859 20.8416 7.47896 20.8416 7.29611C20.8416 7.11326 20.7935 6.93363 20.7021 6.77528ZM10.65 12.5044C6.16039 12.6086 3.23331 8.76486 2.31664 7.29611C3.35831 5.61903 6.07706 2.19194 10.2437 2.08778C14.7125 1.97319 17.65 5.82736 18.5771 7.29611C17.5041 8.9732 14.8166 12.4003 10.65 12.5044Z"
                                                            fill="white" />
                                                        <path
                                                            d="M10.4202 3.64941C9.69917 3.64941 8.99429 3.86324 8.39473 4.26385C7.79518 4.66446 7.32788 5.23386 7.05194 5.90005C6.77599 6.56624 6.70379 7.29929 6.84447 8.00652C6.98514 8.71374 7.33238 9.36336 7.84226 9.87324C8.35214 10.3831 9.00176 10.7304 9.70898 10.871C10.4162 11.0117 11.1493 10.9395 11.8154 10.6636C12.4816 10.3876 13.051 9.92032 13.4516 9.32076C13.8523 8.72121 14.0661 8.01633 14.0661 7.29525C14.0661 6.32831 13.682 5.40098 12.9982 4.71725C12.3145 4.03353 11.3872 3.64941 10.4202 3.64941ZM10.4202 8.85775C10.1112 8.85775 9.80912 8.76611 9.55217 8.59442C9.29522 8.42273 9.09495 8.1787 8.97669 7.89319C8.85843 7.60768 8.82748 7.29351 8.88777 6.99042C8.94806 6.68732 9.09688 6.40891 9.3154 6.19039C9.53391 5.97187 9.81233 5.82306 10.1154 5.76277C10.4185 5.70248 10.7327 5.73342 11.0182 5.85169C11.3037 5.96995 11.5477 6.17022 11.7194 6.42717C11.8911 6.68412 11.9827 6.98621 11.9827 7.29525C11.9827 7.70965 11.8181 8.10708 11.5251 8.4001C11.2321 8.69313 10.8347 8.85775 10.4202 8.85775Z"
                                                            fill="white" />
                                                    </svg>

                                                </div>
                                            </a>
                                            <a href="/sa-pendataan-si/edit" title="Edit">
                                                <div
                                                    class="bg-[#FA8F21] dark:bg-[#FA8F21] hover:bg-[#D87815] dark:hover:bg-[#D87815] p-1 rounded-md">
                                                    <svg width="23" height="21" viewBox="0 0 23 21"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.7125 13.4736L16.9624 12.2238C17.1576 12.0285 17.4974 12.1652 17.4974 12.4464V18.1253C17.4974 19.1603 16.6577 20 15.6227 20H1.87473C0.839721 20 0 19.1603 0 18.1253V4.37729C0 3.34228 0.839721 2.50256 1.87473 2.50256H12.5568C12.8341 2.50256 12.9747 2.83845 12.7794 3.03764L11.5296 4.28746C11.471 4.34604 11.3929 4.37729 11.3069 4.37729H1.87473V18.1253H15.6227V13.6923C15.6227 13.6103 15.654 13.5322 15.7125 13.4736ZM21.8288 5.59195L11.5725 15.8483L8.04179 16.2388C7.0185 16.3521 6.14754 15.4889 6.2608 14.4578L6.65137 10.9271L16.9077 0.6708C17.8021 -0.2236 19.2472 -0.2236 20.1377 0.6708L21.8249 2.35805C22.7193 3.25245 22.7193 4.70146 21.8288 5.59195ZM17.97 6.79881L15.7008 4.52961L8.44408 11.7903L8.15896 14.3407L10.7094 14.0556L17.97 6.79881ZM20.5009 3.68598L18.8137 1.99873C18.6535 1.8386 18.3918 1.8386 18.2356 1.99873L17.0288 3.20559L19.298 5.47478L20.5048 4.26793C20.661 4.10389 20.661 3.84612 20.5009 3.68598Z"
                                                            fill="white" />
                                                    </svg>
                                                </div>
                                            </a>
                                            <div class="bg-[#FF0000] hover:bg-[#D51717] p-1 rounded-md cursor-pointer"
                                                title="Delete">
                                                <svg width="18" height="21" viewBox="0 0 18 21"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M10.4688 16.25H11.4062C11.5306 16.25 11.6498 16.2006 11.7377 16.1127C11.8256 16.0248 11.875 15.9056 11.875 15.7812V7.34375C11.875 7.21943 11.8256 7.1002 11.7377 7.01229C11.6498 6.92439 11.5306 6.875 11.4062 6.875H10.4688C10.3444 6.875 10.2252 6.92439 10.1373 7.01229C10.0494 7.1002 10 7.21943 10 7.34375V15.7812C10 15.9056 10.0494 16.0248 10.1373 16.1127C10.2252 16.2006 10.3444 16.25 10.4688 16.25ZM16.875 3.125H13.6559L12.3277 0.910156C12.1611 0.632428 11.9253 0.402614 11.6434 0.243108C11.3615 0.0836025 11.043 -0.000154039 10.7191 2.12674e-07H6.78086C6.45709 -1.90925e-05 6.13883 0.0838016 5.85707 0.243301C5.57531 0.4028 5.33965 0.632542 5.17305 0.910156L3.84414 3.125H0.625C0.45924 3.125 0.300269 3.19085 0.183058 3.30806C0.065848 3.42527 0 3.58424 0 3.75L0 4.375C0 4.54076 0.065848 4.69973 0.183058 4.81694C0.300269 4.93415 0.45924 5 0.625 5H1.25V18.125C1.25 18.6223 1.44754 19.0992 1.79917 19.4508C2.15081 19.8025 2.62772 20 3.125 20H14.375C14.8723 20 15.3492 19.8025 15.7008 19.4508C16.0525 19.0992 16.25 18.6223 16.25 18.125V5H16.875C17.0408 5 17.1997 4.93415 17.3169 4.81694C17.4342 4.69973 17.5 4.54076 17.5 4.375V3.75C17.5 3.58424 17.4342 3.42527 17.3169 3.30806C17.1997 3.19085 17.0408 3.125 16.875 3.125ZM6.7125 1.98867C6.73339 1.9539 6.76294 1.92515 6.79827 1.90523C6.8336 1.8853 6.8735 1.87489 6.91406 1.875H10.5859C10.6264 1.87495 10.6662 1.8854 10.7015 1.90532C10.7368 1.92524 10.7663 1.95396 10.7871 1.98867L11.4691 3.125H6.03086L6.7125 1.98867ZM14.375 18.125H3.125V5H14.375V18.125ZM6.09375 16.25H7.03125C7.15557 16.25 7.2748 16.2006 7.36271 16.1127C7.45061 16.0248 7.5 15.9056 7.5 15.7812V7.34375C7.5 7.21943 7.45061 7.1002 7.36271 7.01229C7.2748 6.92439 7.15557 6.875 7.03125 6.875H6.09375C5.96943 6.875 5.8502 6.92439 5.76229 7.01229C5.67439 7.1002 5.625 7.21943 5.625 7.34375V15.7812C5.625 15.9056 5.67439 16.0248 5.76229 16.1127C5.8502 16.2006 5.96943 16.25 6.09375 16.25Z"
                                                        fill="white" />
                                                </svg>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="relative flex justify-between mt-5">
                        <div class="font-bold text-black">Jumlah :</div>
                        <div class="">
                            <nav aria-label="Page navigation example">
                                <ul class="inline-flex -space-x-px text-sm gap-2">
                                    <li>
                                        <a href="#"
                                            class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-[#FA8F21] hover:text-[#D87815] dark:text-[#FA8F21] font-bold">Previous</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center justify-center px-3 h-8 leading-tight text-black bg-[#FCC68F] rounded-lg hover:bg-[#FA8F21] dark:bg-[#FCC68F] dark:text-black dark:hover:bg-[#FA8F21] dark:hover:text-white hover:text-white font-bold">1</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center justify-center px-3 h-8 leading-tight text-black bg-[#FCC68F] rounded-lg hover:bg-[#FA8F21] dark:bg-[#FCC68F] dark:text-black dark:hover:bg-[#FA8F21] dark:hover:text-white hover:text-white font-bold">2</a>
                                    </li>
                                    <li>
                                        <a href="#" aria-current="page"
                                            class="flex items-center justify-center px-3 h-8 leading-tight text-black bg-[#FCC68F] rounded-lg hover:bg-[#FA8F21] dark:bg-[#FCC68F] dark:text-black dark:hover:bg-[#FA8F21] dark:hover:text-white hover:text-white font-bold">3</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center justify-center px-3 h-8 leading-tight text-black bg-[#FCC68F] rounded-lg hover:bg-[#FA8F21] dark:bg-[#FCC68F] dark:text-black dark:hover:bg-[#FA8F21] dark:hover:text-white hover:text-white font-bold">4</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center justify-center px-3 h-8 leading-tight text-black bg-[#FCC68F] rounded-lg hover:bg-[#FA8F21] dark:bg-[#FCC68F] dark:text-black dark:hover:bg-[#FA8F21] dark:hover:text-white hover:text-white font-bold ">5</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-[#FA8F21] hover:text-[#D87815] dark:text-[#FA8F21] font-bold">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
