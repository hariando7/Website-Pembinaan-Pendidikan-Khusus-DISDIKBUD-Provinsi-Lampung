<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Super Admin Keloa Notifikasi | Bidang Pembinaan Pendidikan Khusus | Disdikbud Provinsi Lampung</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="assets/landing/prov-lampung2.svg">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />
    <style>
        /* peserta didik slb */
        .icon-peserta-didik-slb {
            transition: stroke 0.3s;
            /* Efek transisi pada perubahan warna stroke */
        }

        .group:hover .icon-peserta-didik-slb {
            stroke: #297785;
            /* stroke saat elemen dalam keadaan hover */
        }

        /* guru slb */
        .icon-guru-slb {
            transition: stroke 0.3s;
            /* Efek transisi pada perubahan warna stroke */
        }

        .group:hover .icon-guru-slb {
            stroke: #297785;
            /* stroke saat elemen dalam keadaan hover */
        }

        /* tendik slb */
        .icon-tendik-slb {
            transition: stroke 0.3s;
            /* Efek transisi pada perubahan warna stroke */
        }

        .group:hover .icon-tendik-slb {
            stroke: #297785;
            /* stroke saat elemen dalam keadaan hover */
        }

        /* sarpras slb */
        .icon-sarpras-slb {
            transition: stroke 0.3s;
            /* Efek transisi pada perubahan warna stroke */
        }

        .group:hover .icon-sarpras-slb {
            stroke: #297785;
            /* stroke saat elemen dalam keadaan hover */
        }

        /* kebutuhan guru slb */
        .icon-kebutuhan-guru-slb {
            transition: stroke 0.3s;
            /* Efek transisi pada perubahan warna stroke */
        }

        .group:hover .icon-kebutuhan-guru-slb {
            stroke: #297785;
            /* stroke saat elemen dalam keadaan hover */
        }
    </style>
</head>

<body class="bg-white z-10">
    <div>
        <x-dashboard-side-bar-sa />
        <div class="pl-[280px] h-screen pt-10 pr-5 pb-28">
            <div class="flex justify-between pb-2">
                <div class="text-center items-center justify-center text-[#297785] font-bold text-[32px]">Kelola
                    Notifikasi
                </div>
            </div>
            <div class="rounded shadow-lg border-solid border-4 border-[#297785] p-10 font-bold text-black">
                {{-- isi konten disini --}}
                <div class="flex justify-center">
                    <a href="/sa-kelola-notifikasi-slb">
                        <div class="m-4 w-72 bg-[#297785] hover:bg-[#143D44] shadow-lg rounded-lg">
                            <div class="rounded-t-lg text-xl pt-6 pl-10 justify-center items-center flex">
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
                            </div>
                            <div class="flex pb-4">
                                <div class="justify-center items-center flex text-center m-auto text-white">
                                    Kelola Notifikasi SLB
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="/sa-kelola-notifikasi-si">
                        <div class="m-4 w-72 bg-[#297785] hover:bg-[#143D44] shadow-lg rounded-lg">
                            <div class="rounded-t-lg text-xl pt-6 pl-4 justify-center items-center flex">
                                <svg width="100" height="100" viewBox="0 0 100 100" fill="none" class=""
                                    xmlns="http://www.w3.org/2000/svg">
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
                            </div>
                            <div class="flex pb-4">
                                <div class="justify-center items-center flex text-center m-auto text-white">
                                    Kelola Notifikasi Sekolah Inklusi
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
