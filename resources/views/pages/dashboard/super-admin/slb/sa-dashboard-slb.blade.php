<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data SLB</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <link rel="icon" type="image/x-icon" href="assets/landing/prov-lampung2.svg">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />
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
                <div class="text-center items-center justify-center text-[#297785] font-bold text-[20px] lg:text-[28px]">Sekolah Luar
                    Biasa Provinsi
                    Lampung
                </div>
                <div class="flex justify-end gap-5">
                    <div class="div">
                        <x-buttitle-landing ref="/sa-statistik-slb" color="#FA8F21" width="[13rem]"
                            title="Statistik SLB"
                            extendClass="text-white text-center py-2 lg:py-2 hover:bg-[#D87815]" />
                    </div>
                    <!-- Modal toggle -->
                    {{-- <x-pengumuman-slb /> --}}
                </div>
            </div>
            <div class="rounded shadow-lg border-solid border-4 border-[#297785] p-10 font-bold text-black"
                id="moving-border">
                {{-- isi konten disini --}}
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-4">
                    <div
                        class="flex items-center justify-center rounded-lg h-32 bg-[#297785] hover:bg-[#143D44] shadow-lg">
                        <a href="/sa-peserta-didik-slb">
                            <div class="rounded-t-lg text-xl p-3 pl-4 justify-center items-center flex">
                                <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                                    class="icon-peserta-didik-slb" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M66.6668 87.5V79.1667C66.6668 74.7464 64.9109 70.5072 61.7853 67.3816C58.6597 64.256 54.4204 62.5 50.0002 62.5H25.0002C20.5799 62.5 16.3407 64.256 13.215 67.3816C10.0894 70.5072 8.3335 74.7464 8.3335 79.1667V87.5"
                                        stroke="white" stroke-width="5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M37.5002 45.8333C46.7049 45.8333 54.1668 38.3714 54.1668 29.1667C54.1668 19.9619 46.7049 12.5 37.5002 12.5C28.2954 12.5 20.8335 19.9619 20.8335 29.1667C20.8335 38.3714 28.2954 45.8333 37.5002 45.8333Z"
                                        stroke="white" stroke-width="5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M91.6665 87.4998V79.1665C91.6637 75.4737 90.4347 71.8864 88.1722 68.9678C85.9097 66.0492 82.742 63.9647 79.1665 63.0415"
                                        stroke="white" stroke-width="5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M66.6665 13.0415C70.2516 13.9594 73.4292 16.0444 75.6983 18.9678C77.9675 21.8912 79.1992 25.4866 79.1992 29.1873C79.1992 32.888 77.9675 36.4835 75.6983 39.4069C73.4292 42.3303 70.2516 44.4153 66.6665 45.3332"
                                        stroke="white" stroke-width="5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <div class="flex">
                                    <div class="justify-center items-center flex text-center m-auto text-white">
                                        Peserta Didik SLB
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div
                        class="flex items-center justify-center rounded-lg h-32 bg-[#297785] hover:bg-[#143D44] shadow-lg">
                        <a href="/sa-guru-slb">
                            <div class="rounded-t-lg text-xl p-3 pl-4 justify-center items-center flex">
                                <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.5 18.75V25H81.25V75H37.5V81.25H93.75V75H87.5V18.75H12.5ZM25.0062 28.125C21.694 28.1365 18.5206 29.457 16.1779 31.7985C13.8352 34.1401 12.5132 37.3128 12.5 40.625C12.5 47.4969 18.1375 53.125 25.0062 53.125C28.3168 53.1118 31.488 51.7904 33.8283 49.4489C36.1687 47.1074 37.4885 43.9356 37.5 40.625C37.5 33.7594 31.8687 28.125 25.0062 28.125ZM43.75 31.25V37.5H59.375V31.25H43.75ZM65.625 31.25V37.5H75V31.25H65.625ZM25.0062 34.375C28.4875 34.375 31.25 37.1344 31.25 40.625C31.25 44.125 28.4906 46.875 25.0062 46.875C21.5062 46.875 18.75 44.125 18.75 40.625C18.75 37.1344 21.5094 34.375 25.0062 34.375ZM43.75 43.75V50H75V43.75H43.75ZM12.5 56.25V81.25H18.75V62.5H28.125V81.25H34.375V64.5563L40.825 67.9688C42.6531 68.9375 44.85 68.9344 46.675 67.9688V67.975L57.7062 62.1406L54.7906 56.6094L43.7563 62.4438L34.0813 57.3375C32.731 56.6241 31.2271 56.2509 29.7 56.25H12.5Z"
                                        fill="white" />
                                </svg>
                                <div class="flex">
                                    <div class="justify-center items-center flex text-center m-auto text-white">
                                        Guru SLB
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div
                        class="flex items-center justify-center rounded-lg h-32 bg-[#297785] hover:bg-[#143D44] shadow-lg">
                        <a href="/sa-tendik-slb">
                            <div class="rounded-t-lg text-xl p-3 pl-4 justify-center items-center flex">
                                <svg class="mt-10" width="100" height="100" viewBox="0 0 100 100" fill="none"
                                    class="" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_440_17813)">
                                        <path
                                            d="M26.3252 47.4375C26.0227 47.4375 25.7202 47.4847 25.4317 47.5844C23.7914 48.1518 22.0664 48.5156 20.2502 48.5156C18.434 48.5156 16.709 48.1518 15.0675 47.5844C14.7789 47.4847 14.4777 47.4375 14.1752 47.4375C6.32074 47.4375 -0.0415612 54.2405 0.000204459 62.6148C0.0179232 66.1537 2.75041 69 6.0752 69H34.4252C37.75 69 40.4825 66.1537 40.5002 62.6148C40.542 54.2405 34.1797 47.4375 26.3252 47.4375ZM20.2502 43.125C26.9605 43.125 32.4002 37.3328 32.4002 30.1875C32.4002 23.0422 26.9605 17.25 20.2502 17.25C13.5399 17.25 8.1002 23.0422 8.1002 30.1875C8.1002 37.3328 13.5399 43.125 20.2502 43.125ZM74.9252 0H26.3252C22.9751 0 20.2502 2.99854 20.2502 6.68303V12.9375C23.2143 12.9375 25.9582 13.8512 28.3502 15.3363V8.625H72.9002V47.4375H64.8002V38.8125H48.6002V47.4375H38.9511C41.3684 49.6867 43.1428 52.657 43.9743 56.0625H74.9252C78.2753 56.0625 81.0002 53.064 81.0002 49.3795V6.68303C81.0002 2.99854 78.2753 0 74.9252 0Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_440_17813">
                                            <rect width="100" height="100" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <div class="flex">
                                    <div class="justify-center items-center flex text-center m-auto text-white">
                                        Tendik SLB
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div
                        class="flex items-center justify-center rounded-lg h-32 bg-[#297785] hover:bg-[#143D44] shadow-lg">
                        <a href="/sa-sarpras-slb">
                            <div class="rounded-t-lg text-xl p-3 pl-4 justify-center items-center flex">
                                <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_440_17818)">
                                        <path
                                            d="M86.1109 22.2222H63.8887V27.7777H86.1109V86.1111H63.8887V91.6666H91.6664V27.7777C91.6664 26.3043 91.0811 24.8912 90.0393 23.8494C88.9974 22.8075 87.5843 22.2222 86.1109 22.2222Z"
                                            fill="white" />
                                        <path
                                            d="M55.2224 8.3335H17.0002C15.4384 8.3335 13.9405 8.95393 12.8361 10.0583C11.7318 11.1627 11.1113 12.6606 11.1113 14.2224V91.6668H61.1113V14.2224C61.1113 12.6606 60.4909 11.1627 59.3865 10.0583C58.2821 8.95393 56.7843 8.3335 55.2224 8.3335ZM55.5558 86.1113H47.2224V77.7779H25.0002V86.1113H16.6669V14.2224C16.6669 14.1786 16.6755 14.1353 16.6923 14.0948C16.709 14.0544 16.7336 14.0176 16.7645 13.9867C16.7955 13.9557 16.8322 13.9312 16.8727 13.9144C16.9131 13.8977 16.9564 13.8891 17.0002 13.8891H55.2224C55.2662 13.8891 55.3096 13.8977 55.35 13.9144C55.3904 13.9312 55.4272 13.9557 55.4581 13.9867C55.4891 14.0176 55.5136 14.0544 55.5304 14.0948C55.5471 14.1353 55.5558 14.1786 55.5558 14.2224V86.1113Z"
                                            fill="white" />
                                        <path d="M22.2222 22.2222H27.7777V27.7777H22.2222V22.2222Z" fill="white" />
                                        <path d="M33.3335 22.2222H38.8891V27.7777H33.3335V22.2222Z" fill="white" />
                                        <path d="M44.4443 22.2222H49.9999V27.7777H44.4443V22.2222Z" fill="white" />
                                        <path d="M22.2222 36.1113H27.7777V41.6669H22.2222V36.1113Z" fill="white" />
                                        <path d="M33.3335 36.1113H38.8891V41.6669H33.3335V36.1113Z" fill="white" />
                                        <path d="M44.4443 36.1113H49.9999V41.6669H44.4443V36.1113Z" fill="white" />
                                        <path d="M22.2222 50H27.7777V55.5556H22.2222V50Z" fill="white" />
                                        <path d="M33.3335 50H38.8891V55.5556H33.3335V50Z" fill="white" />
                                        <path d="M44.4443 50H49.9999V55.5556H44.4443V50Z" fill="white" />
                                        <path d="M22.2222 63.8887H27.7777V69.4442H22.2222V63.8887Z" fill="white" />
                                        <path d="M33.3335 63.8887H38.8891V69.4442H33.3335V63.8887Z" fill="white" />
                                        <path d="M44.4443 63.8887H49.9999V69.4442H44.4443V63.8887Z" fill="white" />
                                        <path d="M63.8887 36.1113H69.4442V41.6669H63.8887V36.1113Z" fill="white" />
                                        <path d="M75 36.1113H80.5556V41.6669H75V36.1113Z" fill="white" />
                                        <path d="M63.8887 50H69.4442V55.5556H63.8887V50Z" fill="white" />
                                        <path d="M75 50H80.5556V55.5556H75V50Z" fill="white" />
                                        <path d="M63.8887 63.8887H69.4442V69.4442H63.8887V63.8887Z" fill="white" />
                                        <path d="M75 63.8887H80.5556V69.4442H75V63.8887Z" fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_440_17818">
                                            <rect width="100" height="100" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <div class="flex">
                                    <div class="justify-center items-center flex text-center m-auto text-white">
                                        Sarpras SLB
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div
                        class="flex items-center justify-center rounded-lg h-32 bg-[#297785] hover:bg-[#143D44] shadow-lg">
                        <a href="/sa-kebutuhan-guru-slb">
                            <div class="rounded-t-lg text-xl p-3 ml-5 mt-2 justify-center items-center flex">
                                <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M79.4883 13.0354L41.9883 0.535388C41.3468 0.321537 40.6532 0.321537 40.0117 0.535388L2.51172 13.0354C1.88947 13.2428 1.34827 13.6408 0.964779 14.1729C0.581288 14.705 0.374951 15.3443 0.375 16.0002V47.2502C0.375 48.079 0.70424 48.8739 1.29029 49.4599C1.87634 50.046 2.6712 50.3752 3.5 50.3752C4.3288 50.3752 5.12366 50.046 5.70971 49.4599C6.29576 48.8739 6.625 48.079 6.625 47.2502V20.3362L19.7461 24.7073C16.26 30.3393 15.1514 37.1246 16.6638 43.5733C18.1762 50.022 22.1859 55.6069 27.8125 59.1018C20.7812 61.8596 14.7031 66.8479 10.2578 73.6682C10.0266 74.0118 9.86604 74.3979 9.78539 74.8042C9.70475 75.2104 9.70565 75.6286 9.78805 76.0344C9.87045 76.4403 10.0327 76.8257 10.2654 77.1683C10.498 77.5109 10.7965 77.8039 11.1434 78.0301C11.4902 78.2564 11.8786 78.4114 12.286 78.4863C12.6933 78.5611 13.1114 78.5542 13.5161 78.466C13.9207 78.3778 14.3038 78.2101 14.643 77.9725C14.9823 77.735 15.2709 77.4323 15.4922 77.0823C21.3789 68.051 30.6758 62.8752 41 62.8752C51.3242 62.8752 60.6211 68.051 66.5078 77.0823C66.9662 77.7635 67.6742 78.237 68.4788 78.4003C69.2835 78.5637 70.1201 78.4038 70.8078 77.9552C71.4955 77.5067 71.979 76.8055 72.1539 76.0033C72.3287 75.2011 72.1808 74.3623 71.7422 73.6682C67.2969 66.8479 61.1953 61.8596 54.1875 59.1018C59.8087 55.6071 63.8146 50.0258 65.3267 43.5818C66.8389 37.1378 65.7338 30.3572 62.2539 24.7268L79.4883 18.9846C80.1107 18.7773 80.652 18.3794 81.0356 17.8472C81.4193 17.3151 81.6257 16.6758 81.6257 16.0198C81.6257 15.3638 81.4193 14.7244 81.0356 14.1923C80.652 13.6601 80.1107 13.2622 79.4883 13.0549V13.0354ZM59.75 37.8752C59.7508 40.8395 59.0489 43.7618 57.7016 46.4022C56.3544 49.0426 54.4003 51.326 51.9997 53.065C49.5991 54.804 46.8204 55.9491 43.8916 56.4062C40.9628 56.8634 37.9673 56.6196 35.151 55.6949C32.3346 54.7702 29.7776 53.1909 27.6898 51.0867C25.602 48.9824 24.0428 46.4131 23.1403 43.5895C22.2377 40.766 22.0175 37.7687 22.4976 34.8436C22.9777 31.9184 24.1445 29.1488 25.9023 26.762L40.0117 31.4495C40.6532 31.6633 41.3468 31.6633 41.9883 31.4495L56.0977 26.762C58.4718 29.9807 59.7519 33.8756 59.75 37.8752ZM41 25.2073L13.3828 16.0002L41 6.7932L68.6172 16.0002L41 25.2073Z"
                                        fill="white" />
                                </svg>
                                <div class="flex">
                                    <div class="justify-center items-center flex text-center m-auto text-white">
                                        Kebutuhan Guru SLB
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div
                        class="flex items-center justify-center rounded-lg h-32 bg-[#297785] hover:bg-[#143D44] shadow-lg">
                        <a href="/sa-karya-slb">
                            <div class="rounded-t-lg text-xl mt-5 justify-center items-center flex">
                                <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M13.5 64.9273C11.6437 64.9273 10.0552 64.3499 8.7345 63.195C7.41375 62.04 6.75225 60.65 6.75 59.0248V23.6098C6.75 21.9867 7.4115 20.5976 8.7345 19.4427C10.0575 18.2878 11.646 17.7093 13.5 17.7073H27L40.5 5.90234L54 17.7073H67.5C69.3562 17.7073 70.9459 18.2858 72.2689 19.4427C73.5919 20.5996 74.2522 21.9886 74.25 23.6098V59.0248C74.25 60.648 73.5896 62.0381 72.2689 63.195C70.9481 64.3518 69.3585 64.9293 67.5 64.9273H13.5ZM20.25 53.1223H60.75L48.0937 38.3661L37.9687 50.1711L30.375 41.3173L20.25 53.1223ZM59.0625 38.3661C60.4687 38.3661 61.6646 37.9362 62.6501 37.0764C63.6356 36.2166 64.1272 35.1709 64.125 33.9392C64.125 32.7095 63.6334 31.6648 62.6501 30.805C61.6669 29.9452 60.471 29.5143 59.0625 29.5123C57.6562 29.5123 56.4615 29.9432 55.4782 30.805C54.495 31.6668 54.0022 32.7115 54 33.9392C54 35.1689 54.4927 36.2146 55.4782 37.0764C56.4637 37.9382 57.6585 38.3681 59.0625 38.3661ZM34.0875 17.7073H46.9125L40.5 12.1L34.0875 17.7073Z"
                                        fill="white" />
                                </svg>
                                <div class="flex pb-4">
                                    <div class="justify-center items-center flex text-center m-auto text-white">
                                        Karya SLB
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
