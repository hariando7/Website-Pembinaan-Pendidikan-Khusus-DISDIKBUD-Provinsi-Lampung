<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kelola Notifikasi</title>
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
        <x-dashboard-side-bar-sa />
        <div class="pl-[280px] h-screen pt-10 pr-5 pb-28">
            <div class="flex m-auto justify-center items-center">
                <x-toast-login-sukses />
            </div>
            <div class="flex justify-between pb-2">
                <div class="text-center items-center justify-center text-[#297785] font-bold text-[32px]">Kelola
                    Notifikasi
                    SLB dan Sekolah Inklusi
                </div>
            </div>
            <div class="rounded shadow-lg border-solid border-4 border-[#297785] p-10 font-bold text-black"
                id="moving-border">
                {{-- isi konten disini --}}
                <div class="flex justify-center">
                    <a href="/sa-kelola-notifikasi-slb">
                        <div class="m-4 w-72 bg-[#297785] hover:bg-[#143D44] shadow-lg rounded-lg">
                            <div class="rounded-t-lg text-xl pt-6 justify-center items-center flex">
                                <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M26.7878 10.0542C27.3132 9.42718 27.5717 8.61924 27.508 7.80377C27.4443 6.9883 27.0634 6.23032 26.4471 5.69254C25.8308 5.15477 25.0282 4.88007 24.2116 4.92743C23.395 4.97478 22.6295 5.34041 22.0795 5.94582L16.6962 12.1125C13.6436 15.6107 11.918 20.0707 11.8212 24.7125L11.5837 36.0417C11.5665 36.8705 11.8794 37.6721 12.4533 38.2703C13.0272 38.8684 13.8153 39.2141 14.6441 39.2312C15.4729 39.2484 16.2746 38.9356 16.8727 38.3616C17.4709 37.7877 17.8165 36.9996 17.8337 36.1708L18.067 24.8458C18.1339 21.6697 19.3152 18.6182 21.4045 16.225L26.7878 10.0542Z"
                                        fill="white" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M25.9871 32.0833C26.2669 27.6255 28.2351 23.442 31.491 20.3843C34.7468 17.3266 39.0456 15.6247 43.5121 15.625H45.833V12.5C45.833 11.3949 46.2719 10.3351 47.0534 9.5537C47.8348 8.7723 48.8946 8.33331 49.9996 8.33331C51.1047 8.33331 52.1645 8.7723 52.9459 9.5537C53.7273 10.3351 54.1663 11.3949 54.1663 12.5V15.625H56.4871C60.9537 15.6247 65.2524 17.3266 68.5083 20.3843C71.7641 23.442 73.7323 27.6255 74.0121 32.0833L74.933 46.8083C75.2839 52.4227 77.169 57.8331 80.383 62.45C81.047 63.4044 81.4527 64.5144 81.5607 65.6721C81.6687 66.8298 81.4752 67.9957 80.9992 69.0565C80.5231 70.1173 79.7806 71.0368 78.8439 71.7256C77.9072 72.4144 76.8082 72.8492 75.6538 72.9875L61.458 74.6875V79.1666C61.458 82.2056 60.2507 85.1201 58.1019 87.2689C55.953 89.4178 53.0386 90.625 49.9996 90.625C46.9607 90.625 44.0462 89.4178 41.8974 87.2689C39.7485 85.1201 38.5413 82.2056 38.5413 79.1666V74.6875L24.3455 72.9833C23.1917 72.8446 22.0934 72.4099 21.1573 71.7213C20.2212 71.0327 19.4791 70.1137 19.0032 69.0535C18.5272 67.9934 18.3335 66.8282 18.441 65.6711C18.5484 64.514 18.9533 63.4044 19.6163 62.45C22.83 57.833 24.7152 52.4227 25.0663 46.8083L25.9871 32.0833ZM44.7913 79.1666C44.7913 80.548 45.34 81.8727 46.3168 82.8495C47.2935 83.8262 48.6183 84.375 49.9996 84.375C51.381 84.375 52.7057 83.8262 53.6825 82.8495C54.6592 81.8727 55.208 80.548 55.208 79.1666V76.0416H44.7913V79.1666Z"
                                        fill="white" />
                                    <path
                                        d="M73.5123 5.64581C72.8881 6.1907 72.5059 6.96119 72.4496 7.78786C72.3933 8.61453 72.6677 9.42971 73.2123 10.0541L78.5957 16.2208C80.6843 18.6157 81.8643 21.6688 81.929 24.8458L82.1665 36.1666C82.175 36.577 82.2642 36.9817 82.4291 37.3576C82.594 37.7335 82.8313 38.0733 83.1275 38.3574C83.4236 38.6416 83.7729 38.8647 84.1553 39.0139C84.5377 39.1631 84.9457 39.2355 85.3561 39.2271C85.7665 39.2186 86.1712 39.1293 86.5471 38.9645C86.9229 38.7996 87.2627 38.5623 87.5469 38.2661C87.8311 37.9699 88.0541 37.6207 88.2033 37.2383C88.3525 36.8559 88.425 36.4479 88.4165 36.0375L88.179 24.7125C88.0822 20.0707 86.3566 15.6107 83.304 12.1125L77.9207 5.94581C77.3758 5.32159 76.6053 4.93933 75.7786 4.88307C74.9519 4.82681 74.1368 5.10117 73.5123 5.64581Z"
                                        fill="white" />
                                </svg>
                            </div>
                            <div class="flex pb-4">
                                <div class="justify-center items-center flex text-center m-auto text-white">
                                    Notifikasi SLB
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/sa-kelola-notifikasi-si">
                        <div class="m-4 w-72 bg-[#297785] hover:bg-[#143D44] shadow-lg rounded-lg">
                            <div class="rounded-t-lg text-xl pt-6 justify-center items-center flex">
                                <svg width="100" height="100" viewBox="0 0 100 100" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.6663 79.1667V70.8333H24.9997V41.6667C24.9997 35.9028 26.7358 30.7819 30.208 26.3042C33.6802 21.8264 38.1941 18.8917 43.7497 17.5V14.5833C43.7497 12.8472 44.358 11.3722 45.5747 10.1583C46.7913 8.94444 48.2663 8.33611 49.9997 8.33333C51.7358 8.33333 53.2122 8.94167 54.4288 10.1583C55.6455 11.375 56.2525 12.85 56.2497 14.5833V17.5C61.8052 18.8889 66.3191 21.8236 69.7913 26.3042C73.2636 30.7847 74.9997 35.9056 74.9997 41.6667V70.8333H83.333V79.1667H16.6663ZM49.9997 91.6667C47.708 91.6667 45.7469 90.8514 44.1163 89.2208C42.4858 87.5903 41.6691 85.6278 41.6663 83.3333H58.333C58.333 85.625 57.5177 87.5875 55.8872 89.2208C54.2566 90.8542 52.2941 91.6694 49.9997 91.6667ZM8.33301 41.6667C8.33301 34.7222 9.87884 28.3514 12.9705 22.5542C16.0622 16.7569 20.2108 11.9472 25.4163 8.125L30.3122 14.7917C26.1455 17.8472 22.8302 21.7014 20.3663 26.3542C17.9025 31.0069 16.6691 36.1111 16.6663 41.6667H8.33301ZM83.333 41.6667C83.333 36.1111 82.0997 31.0069 79.633 26.3542C77.1663 21.7014 73.8525 17.8472 69.6913 14.7917L74.5872 8.125C79.7955 11.9444 83.9455 16.7542 87.0372 22.5542C90.1288 28.3542 91.6719 34.725 91.6664 41.6667H83.333Z"
                                        fill="white" />
                                </svg>
                            </div>
                            <div class="flex pb-4">
                                <div class="justify-center items-center flex text-center m-auto text-white">
                                    Notifikasi Sekolah Inklusi
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modalButtons = document.querySelectorAll('[data-modal-toggle]');
            const modalCloseButtons = document.querySelectorAll('[data-modal-close]');
            modalButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const targetModalId = this.getAttribute('data-modal-target');
                    const targetModal = document.getElementById(targetModalId);
                    if (targetModal) {
                        targetModal.classList.toggle('hidden');
                        targetModal.setAttribute('aria-hidden', targetModal.classList.contains(
                            'hidden').toString());
                    }
                });
            });
            modalCloseButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const targetModalId = this.getAttribute('data-modal-close');
                    const targetModal = document.getElementById(targetModalId);
                    if (targetModal) {
                        targetModal.classList.add('hidden');
                        targetModal.setAttribute('aria-hidden', 'true');
                    }
                });
            });
        });
    </script>
</body>

</html>
