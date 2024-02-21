<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Super Admin Sarpras SLB</title>
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
</head>

<body class="bg-white z-10">
    <div>
        <x-dashboard-side-bar-sa />
        <div class="pl-[280px] h-screen pt-2 pr-5 pb-[85px] full-height">
            <div class="flex justify-between pb-2">
                <div class="text-center items-center justify-center text-[#297785] font-bold text-[32px]">Sarpras SLB
                    Provinsi Lampung
                </div>
                {{-- <div class="">
                    <x-buttitle-landing ref="/admin-tambah-guru-slb" color="#FA8F21" width="[13rem]"
                        title="+ Tambah Guru" extendClass="text-white text-center py-2 lg:py-2 hover:bg-[#D87815]" />
                </div> --}}
            </div>
            <div class="rounded shadow-lg h-full border-solid border-4 border-[#297785] pt-5 pl-5 pr-3 pb-1">
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
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                            aria-labelledby="dropdown-button">
                                            <li>
                                                <a href="#" onclick="filterGender('All')"
                                                    class="block px-4 py-2 hover:bg-[#D87815] dark:hover:bg-[#D87815] dark:hover:text-white">Bina
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
                                        class="mx-auto border-2 border-[#297785] dark:border-[#297785] text-black text-sm rounded-lg focus:border-[#FA8F21] block w-full ps-10 p-2.5 dark:hover:text-black dark:placeholder-gray-400 dark:focus:ring-[#FA8F21]"
                                        placeholder="Search..." oninput="searchTable()" required />
                                </div>
                            </form>
                        </div>
                        <div class="basis-[10%]">
                            <button type="button"
                                class="text-white bg-white hover:bg-white border border-[#FA8F21] dark:border-[#FA8F21] focus:ring-2 focus:outline-none focus:ring-[#FA8F21] font-medium rounded-md text-sm px-5 py-2 text-center inline-flex items-center dark:focus:ring-[#FA8F21] dark:bg-[#FA8F21] dark:text-white dark:hover:bg-[#D87815] w-full gap-2 text-center">
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
                            <thead
                                class="text-xs text-gray-700 uppercase bg-[#2F8386] dark:bg-[#2F8386] dark:text-white">
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
                                        Gedung/Ruang
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Jumlah/Vol
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Total Luas
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Kondisi
                                    </th>
                                    <th scope="col" class="px-3 py-2">
                                        Catatan
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    class="bg-white border-b dark:bg-white dark:border-gray-700 hover:bg-[#C4DDDE] dark:hover:bg-[#C4DDDE] text-black hover:text-white">
                                    <td class="px-3 py-2">
                                        1
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
                                        data 1
                                    </td>
                                    <td class="px-3 py-2">
                                        data 1
                                    </td>
                                    <td class="px-3 py-2">
                                        data 1
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
                                            class="flex items-center justify-center px-3 h-8 leading-tight text-black bg-[#FCC68F] rounded-lg hover:bg-[#FA8F21] hover:text-black dark:bg-[#FCC68F] dark:text-black dark:hover:bg-[#FA8F21] dark:hover:text-white font-bold">1</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center justify-center px-3 h-8 leading-tight text-black bg-[#FCC68F] rounded-lg hover:bg-[#FA8F21] hover:text-black dark:bg-[#FCC68F] dark:text-black dark:hover:bg-[#FA8F21] dark:hover:text-white font-bold">2</a>
                                    </li>
                                    <li>
                                        <a href="#" aria-current="page"
                                            class="flex items-center justify-center px-3 h-8 leading-tight text-black bg-[#FCC68F] rounded-lg hover:bg-[#FA8F21] hover:text-black dark:bg-[#FCC68F] dark:text-black dark:hover:bg-[#FA8F21] dark:hover:text-white font-bold">3</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center justify-center px-3 h-8 leading-tight text-black bg-[#FCC68F] rounded-lg hover:bg-[#FA8F21] hover:text-black dark:bg-[#FCC68F] dark:text-black dark:hover:bg-[#FA8F21] dark:hover:text-white font-bold">4</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center justify-center px-3 h-8 leading-tight text-black bg-[#FCC68F] rounded-lg hover:bg-[#FA8F21] hover:text-black dark:bg-[#FCC68F] dark:text-black dark:hover:bg-[#FA8F21] dark:hover:text-white font-bold ">5</a>
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
