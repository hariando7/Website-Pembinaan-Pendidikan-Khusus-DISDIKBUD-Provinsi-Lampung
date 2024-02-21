    <style>
        /* kelola admin slb */
        .icon-kelola-admin-slb {
            transition: stroke 0.3s;
            /* Efek transisi pada perubahan warna stroke */
        }

        .group:hover .icon-kelola-admin-slb {
            stroke: #297785;
            /* stroke saat elemen dalam keadaan hover */
        }

        /* slb */
        .icon-slb {
            transition: stroke 0.3s;
            /* Efek transisi pada perubahan warna stroke */
        }

        .group:hover .icon-slb {
            stroke: #297785;
            /* stroke saat elemen dalam keadaan hover */
        }

        /* sekolah inklusi */
        .icon-sekolah-inklusi {
            transition: stroke 0.3s;
            /* Efek transisi pada perubahan warna stroke */
        }

        .group:hover .icon-sekolah-inklusi {
            stroke: #297785;
            /* stroke saat elemen dalam keadaan hover */
        }
    </style>

    <aside id="default-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"aria-label="Sidebar">
        <div class="h-full px-4 py-4 overflow-y-auto bg-[#297785]">
            <a href="/admin-home-slb">
                <img src="assets/landing/prov-lampung2.svg" alt=""
                    class="w-[50%] h-[50%] m-auto items-center lg:w-[70px] lg:h-[100px] mb-5 lg:mb-0">
            </a>
            <div class="flex items-center justify-center m-auto text-white">
                <ul class=''>
                    {{-- admin slb --}}
                    @php
                        $activePagePath = ['kelola-admin-slb', 'tambah-admin-slb', 'edit-admin-slb']; // halaman aktif
                    @endphp
                    <li class="absolute flex items-center justify-center inset-x-0 mt-5">
                        <a href="/kelola-admin-slb" type="button"
                            class="group w-[80%] h-[60px] p-1 pl-5 flex gap-6 text-lg font-medium
  @if (in_array(Request::path(), $activePagePath)) rounded-lg bg-white text-[#297785] focus:z-10 focus:ring-2 focus:ring-white focus:text-white
        @else
            text-white rounded-lg hover:bg-white hover:text-[#297785] focus:z-10 focus:ring-2 focus:ring-white focus:text-white @endif">
                            <div class="text-start justify-center items-center flex">
                                <svg width="29" height="28" viewBox="0 0 29 28" fill="none"
                                    class="icon-kelola-admin-slb" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.8724 16.3334V18.6667C13.0159 18.6667 11.2354 19.4042 9.92265 20.7169C8.60989 22.0297 7.8724 23.8102 7.8724 25.6667H5.53906C5.53906 23.1913 6.52239 20.8174 8.27273 19.067C10.0231 17.3167 12.397 16.3334 14.8724 16.3334ZM14.8724 15.1667C11.0049 15.1667 7.8724 12.0342 7.8724 8.16669C7.8724 4.29919 11.0049 1.16669 14.8724 1.16669C18.7399 1.16669 21.8724 4.29919 21.8724 8.16669C21.8724 12.0342 18.7399 15.1667 14.8724 15.1667ZM14.8724 12.8334C17.4507 12.8334 19.5391 10.745 19.5391 8.16669C19.5391 5.58835 17.4507 3.50002 14.8724 3.50002C12.2941 3.50002 10.2057 5.58835 10.2057 8.16669C10.2057 10.745 12.2941 12.8334 14.8724 12.8334ZM25.3724 19.8334H26.5391V25.6667H17.2057V19.8334H18.3724V18.6667C18.3724 17.7384 18.7411 16.8482 19.3975 16.1918C20.0539 15.5354 20.9441 15.1667 21.8724 15.1667C22.8007 15.1667 23.6909 15.5354 24.3473 16.1918C25.0036 16.8482 25.3724 17.7384 25.3724 18.6667V19.8334ZM23.0391 19.8334V18.6667C23.0391 18.3573 22.9161 18.0605 22.6974 17.8417C22.4786 17.6229 22.1818 17.5 21.8724 17.5C21.563 17.5 21.2662 17.6229 21.0474 17.8417C20.8286 18.0605 20.7057 18.3573 20.7057 18.6667V19.8334H23.0391Z"
                                        stroke="currentColor" stroke-linecap="round" fill="currentcolor" />
                                </svg>
                            </div>
                            <div class="text-start justify-center items-center flex font-bold">Kelola Admin SLB</div>
                        </a>
                    </li>
                    {{-- guru slb --}}
                    <li x-data="{ isSubMenuOpen: false }" class="absolute flex items-center justify-center inset-x-0 mt-[90px]">
                        @php
                            // path halaman aktif
                            $activePagePath2 = ['sa-dashboard-slb', 'sa-kelola-pengumuman-slb', 'sa-guru-slb', 'sa-kebutuhan-guru-slb', 'sa-peserta-didik-slb', 'sa-sarpras-slb', 'sa-tendik-slb', 'sa-statistik-slb', 'sa-statistik-guru', 'sa-statistik-kebutuhan-guru', 'sa-statistik-peserta-didik', 'sa-statistik-sarpras', 'sa-statistik-tendik']; // halaman aktif
                        @endphp
                        <a type="button" href="/sa-dashboard-slb"
                            class="group w-[80%] h-[60px] p-1 pl-5 flex gap-6 text-lg font-medium
        @if (in_array(Request::path(), $activePagePath2)) rounded-lg bg-white text-[#297785] focus:z-10 focus:ring-2 focus:ring-white focus:text-white
        @else
            text-white rounded-lg hover:bg-white hover:text-[#297785] focus:z-10 focus:ring-2 focus:ring-white focus:text-white @endif">
                            <div class="text-start justify-center items-center flex">
                                <svg width="29" height="28" viewBox="0 0 29 28" fill="none" class="icon-slb"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M25.3717 11.6666H23.0384V4.66665H24.2051V2.33331H5.53841V4.66665H6.70508V11.6666H4.37174C4.06233 11.6666 3.76558 11.7896 3.54679 12.0084C3.32799 12.2271 3.20508 12.5239 3.20508 12.8333V23.3333H26.5384V12.8333C26.5384 12.5239 26.4155 12.2271 26.1967 12.0084C25.9779 11.7896 25.6812 11.6666 25.3717 11.6666ZM17.2051 21V16.3333H12.5384V21H9.03841V4.66665H20.7051V21H17.2051Z"
                                        stroke="currentColor" stroke-linecap="round" fill="currentcolor" />
                                    <path
                                        d="M11.3721 7H13.7054V9.33333H11.3721V7ZM16.0387 7H18.3721V9.33333H16.0387V7ZM11.3721 11.6667H13.7054V14H11.3721V11.6667ZM16.0387 11.6667H18.3721V14H16.0387V11.6667Z"
                                        stroke="currentColor" stroke-linecap="round" fill="currentcolor" />
                                </svg>
                            </div>
                            <div class="text-start justify-center items-center flex font-bold">SLB</div>
                        </a>
                        <div
                            class="absolute justify-end flex ml-32 icon-slb @if (in_array(Request::path(), $activePagePath2)) text-[#297785] hover:text-[#297785] @else text-white dark:hover:text-white @endif">
                            <svg type="button" @click.prevent="isSubMenuOpen = !isSubMenuOpen"
                                class="w-5 h-5 ms-2.5 m-auto" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </div>
                        <!-- Submenu -->
                        <div x-show="isSubMenuOpen" @click.away="isSubMenuOpen = false"
                            class="absolute mt-2 bg-white rounded-md shadow-lg right-6 top-14 z-20">
                            @php
                                // path halaman aktif
                                $statistikslb = ['sa-statistik-slb', 'sa-statistik-guru', 'sa-statistik-kebutuhan-guru', 'sa-statistik-peserta-didik', 'sa-statistik-sarpras', 'sa-statistik-tendik']; // halaman aktif
                                $pesertadidik = ['sa-peserta-didik-slb'];
                                $guru = ['sa-guru-slb'];
                                $tendik = ['sa-tendik-slb'];
                                $sarpras = ['sa-sarpras-slb'];
                                $kebutuhanguru = ['sa-kebutuhan-guru-slb'];
                            @endphp
                            <a href="/sa-statistik-slb"
                                class="block px-4 py-2 text-sm @if (in_array(Request::path(), $statistikslb)) rounded-b-lg bg-[#FA8F21] text-white hover:text-white font-bold focus:z-10 focus:ring-2 focus:ring-white focus:text-white
        @else
            bg-white text-[#297785] font-bold rounded-md hover:bg-[#FA8F21] hover:text-white focus:z-10 focus:ring-2 focus:ring-white focus:text-white @endif">Statistik
                                SLB</a>
                            <a href="/sa-peserta-didik-slb"
                                class="block px-4 py-2 text-sm @if (in_array(Request::path(), $pesertadidik)) rounded-lg bg-[#FA8F21] text-white hover:text-white font-bold focus:z-10 focus:ring-2 focus:ring-white focus:text-white
        @else
            bg-white text-[#297785] font-bold rounded-md hover:bg-[#FA8F21] hover:text-white focus:z-10 focus:ring-2 focus:ring-white focus:text-white @endif">Peserta
                                Didik SLB</a>
                            <a href="/sa-guru-slb"
                                class="block px-4 py-2 text-sm @if (in_array(Request::path(), $guru)) rounded-lg bg-[#FA8F21] text-white focus:z-10 hover:text-white font-bold focus:ring-2 focus:ring-white focus:text-white
        @else
            bg-white text-[#297785] font-bold rounded-md hover:bg-[#FA8F21] hover:text-white focus:z-10 focus:ring-2 focus:ring-white focus:text-white @endif">Guru
                                SLB</a>
                            <a href="/sa-tendik-slb"
                                class="block px-4 py-2 text-sm @if (in_array(Request::path(), $tendik)) rounded-lg bg-[#FA8F21] text-white hover:text-white font-bold focus:z-10 focus:ring-2 focus:ring-white focus:text-white
        @else
            bg-white text-[#297785] font-bold rounded-md hover:bg-[#FA8F21] hover:text-white focus:z-10 focus:ring-2 focus:ring-white focus:text-white @endif">Tendik
                                SLB</a>
                            <a href="/sa-sarpras-slb"
                                class="block px-4 py-2 text-sm @if (in_array(Request::path(), $sarpras)) rounded-lg bg-[#FA8F21] text-white hover:text-white font-bold focus:z-10 focus:ring-2 focus:ring-white focus:text-white
        @else
            bg-white text-[#297785] font-bold rounded-md hover:bg-[#FA8F21] hover:text-white focus:z-10 focus:ring-2 focus:ring-white focus:text-white @endif">Sarpras
                                SLB</a>
                            <a href="/sa-kebutuhan-guru-slb"
                                class="block px-4 py-2 text-sm @if (in_array(Request::path(), $kebutuhanguru)) rounded-lg bg-[#FA8F21] text-white hover:text-white font-bold focus:z-10 focus:ring-2 focus:ring-white focus:text-white
        @else
            bg-white text-[#297785] font-bold rounded-md hover:bg-[#FA8F21] hover:text-white focus:z-10 focus:ring-2 focus:ring-white focus:text-white @endif">Kebutuhan
                                Guru SLB</a>
                        </div>
                    </li>
                    {{-- sekolah inklusi slb --}}
                    <li x-data="{ isSubMenuOpen: false }" class="absolute flex items-center justify-center inset-x-0 mt-[160px]">
                        @php
                            // path halaman aktif
                            $activePagePath3 = ['sa-dashboard-si', 'sa-kelola-admin-si', 'sa-laporan-pendataan-si', 'sa-detail-laporan-pendataan-si', 'sa-lihat-pendataan-si', 'sa-detail-lihat-pendataan-si']; // path halaman aktif
                        @endphp
                        <a href="/sa-dashboard-si" type="button"
                            class="group w-[80%] h-[60px] p-1 pl-5 flex gap-6 text-lg font-medium
        @if (in_array(Request::path(), $activePagePath3)) rounded-lg bg-white text-[#297785] focus:z-10 focus:ring-2 focus:ring-white focus:text-white
        @else
            text-white rounded-lg hover:bg-white hover:text-[#297785] focus:z-10 focus:ring-2 focus:ring-white focus:text-white @endif">
                            <div class="text-start justify-center items-center flex">
                                <svg width="29" height="28" viewBox="0 0 29 28" fill="none"
                                    class="icon-sekolah-inklusi" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_361_8765)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M24.5805 0.291993C24.393 0.104522 24.1387 -0.000793457 23.8735 -0.000793457C23.6083 -0.000793457 23.354 0.104522 23.1665 0.291993L19.1665 4.29199C19.0264 4.43173 18.9309 4.60989 18.8921 4.80392C18.8533 4.99795 18.873 5.19913 18.9486 5.38199C19.0241 5.56486 19.1523 5.72119 19.3168 5.8312C19.4812 5.94121 19.6746 5.99995 19.8725 5.99999H27.8725C28.0705 6.00035 28.2642 5.94189 28.429 5.83203C28.5938 5.72218 28.7222 5.56587 28.7981 5.38292C28.8739 5.19997 28.8937 4.99863 28.855 4.80441C28.8162 4.61019 28.7207 4.43185 28.5805 4.29199L24.5805 0.291993ZM19.8725 9.99999C19.6745 9.99964 19.4808 10.0581 19.316 10.168C19.1512 10.2778 19.0228 10.4341 18.9469 10.6171C18.8711 10.8 18.8513 11.0014 18.89 11.1956C18.9288 11.3898 19.0243 11.5681 19.1645 11.708L23.1645 15.708C23.2574 15.8011 23.3678 15.875 23.4892 15.9254C23.6107 15.9758 23.741 16.0018 23.8725 16.0018C24.004 16.0018 24.1343 15.9758 24.2558 15.9254C24.3773 15.875 24.4876 15.8011 24.5805 15.708L28.5805 11.708C28.7207 11.5681 28.8162 11.3898 28.855 11.1956C28.8937 11.0014 28.8739 10.8 28.7981 10.6171C28.7222 10.4341 28.5938 10.2778 28.429 10.168C28.2642 10.0581 28.0705 9.99964 27.8725 9.99999H19.8725ZM9.58651 8.51999C9.58651 7.59624 9.95347 6.71033 10.6067 6.05714C11.2598 5.40395 12.1458 5.03699 13.0695 5.03699C13.9933 5.03699 14.8792 5.40395 15.5324 6.05714C16.1856 6.71033 16.5525 7.59624 16.5525 8.51999C16.5525 9.44374 16.1856 10.3297 15.5324 10.9828C14.8792 11.636 13.9933 12.003 13.0695 12.003C12.1458 12.003 11.2598 11.636 10.6067 10.9828C9.95347 10.3297 9.58651 9.44374 9.58651 8.51999ZM15.0725 14.97C15.0725 14.4396 14.8618 13.9309 14.4867 13.5558C14.1116 13.1807 13.6029 12.97 13.0725 12.97C12.5421 12.97 12.0334 13.1807 11.6583 13.5558C11.2832 13.9309 11.0725 14.4396 11.0725 14.97V19.934C11.0725 20.4644 11.2832 20.9731 11.6583 21.3482C12.0334 21.7233 12.5421 21.934 13.0725 21.934H16.8625V25.89C16.8625 26.4204 17.0732 26.9291 17.4483 27.3042C17.8234 27.6793 18.3321 27.89 18.8625 27.89C19.3929 27.89 19.9016 27.6793 20.2767 27.3042C20.6518 26.9291 20.8625 26.4204 20.8625 25.89V21.864C20.862 20.822 20.4477 19.8229 19.7107 19.0864C18.9738 18.3498 17.9745 17.936 16.9325 17.936H15.0725V14.97ZM9.74851 14.72C9.74851 15.1178 9.59047 15.4993 9.30917 15.7807C9.02786 16.062 8.64633 16.22 8.24851 16.22C7.56175 16.221 6.88527 16.3869 6.27595 16.7037C5.66663 17.0205 5.14226 17.479 4.74695 18.0406C4.35163 18.6021 4.09691 19.2504 4.0042 19.9309C3.91149 20.6113 3.98351 21.3041 4.21419 21.951C4.44487 22.5978 4.82748 23.1799 5.32984 23.6481C5.83221 24.1164 6.43965 24.4572 7.10111 24.6419C7.76256 24.8266 8.4587 24.8498 9.13098 24.7096C9.80327 24.5693 10.4321 24.2698 10.9645 23.836C11.2727 23.5843 11.6682 23.4653 12.0641 23.5053C12.46 23.5452 12.8238 23.7408 13.0755 24.049C13.3272 24.3572 13.4462 24.7527 13.4062 25.1486C13.3663 25.5445 13.1707 25.9083 12.8625 26.16C11.9578 26.8976 10.8892 27.4072 9.7466 27.6459C8.60398 27.8846 7.42074 27.8455 6.2964 27.5317C5.17207 27.218 4.13951 26.6388 3.28558 25.843C2.43165 25.0471 1.78132 24.0579 1.38928 22.9584C0.997233 21.8589 0.874947 20.6813 1.0327 19.5248C1.19046 18.3682 1.62365 17.2664 2.29583 16.3121C2.96801 15.3577 3.85952 14.5788 4.8954 14.0407C5.93128 13.5026 7.08122 13.2212 8.24851 13.22C8.64633 13.22 9.02786 13.378 9.30917 13.6593C9.59047 13.9406 9.74851 14.3222 9.74851 14.72Z"
                                            fill="currentColor" stroke="currentColor" stroke-linecap="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_361_8765">
                                            <rect width="28" height="28" fill="currentColor"
                                                stroke="currentColor" stroke-linecap="round"
                                                transform="translate(0.87207)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="text-start justify-center items-center flex font-bold">Sekolah <br> Inklusi
                            </div>
                        </a>
                        <div
                            class="absolute justify-end flex ml-32 icon-slb @if (in_array(Request::path(), $activePagePath3)) text-[#297785] hover:text-[#297785] @else text-white dark:hover:text-white @endif">
                            <svg type="button" @click.prevent="isSubMenuOpen = !isSubMenuOpen"
                                class="w-5 h-5 ms-2.5 m-auto" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </div>
                        <!-- Submenu -->
                        <div x-show="isSubMenuOpen" @click.away="isSubMenuOpen = false"
                            class="absolute mt-2 bg-white rounded-md shadow-lg right-6 top-14 z-20">
                            @php
                                // path halaman aktif
                                $kelolaadmininklusi = ['sa-kelola-admin-si']; // halaman aktif
                                $lihatpendataan = ['sa-lihat-pendataan-si', 'sa-detail-lihat-pendataan-si'];
                                $laporanpendataan = ['sa-laporan-pendataan-si', 'sa-detail-laporan-pendataan-si'];
                            @endphp
                            <a href="/sa-kelola-admin-si"
                                class="block px-4 py-2 text-sm @if (in_array(Request::path(), $kelolaadmininklusi)) rounded-b-lg bg-[#FA8F21] text-white hover:text-white font-bold focus:z-10 focus:ring-2 focus:ring-white focus:text-white
        @else
            bg-white text-[#297785] font-bold rounded-md hover:bg-[#FA8F21] hover:text-white focus:z-10 focus:ring-2 focus:ring-white focus:text-white @endif">Kelola
                                Admin Inklusi</a>
                            <a href="/sa-lihat-pendataan-si"
                                class="block px-4 py-2 text-sm @if (in_array(Request::path(), $lihatpendataan)) rounded-lg bg-[#FA8F21] text-white hover:text-white font-bold focus:z-10 focus:ring-2 focus:ring-white focus:text-white
        @else
            bg-white text-[#297785] font-bold rounded-md hover:bg-[#FA8F21] hover:text-white focus:z-10 focus:ring-2 focus:ring-white focus:text-white @endif">Lihat
                                Pendataan</a>
                            <a href="/sa-laporan-pendataan-si"
                                class="block px-4 py-2 text-sm @if (in_array(Request::path(), $laporanpendataan)) rounded-lg bg-[#FA8F21] text-white hover:text-white font-bold focus:z-10 focus:ring-2 focus:ring-white focus:text-white
        @else
            bg-white text-[#297785] font-bold rounded-md hover:bg-[#FA8F21] hover:text-white focus:z-10 focus:ring-2 focus:ring-white focus:text-white @endif">Laporan
                                Pendataan</a>
                        </div>
                    </li>
                    <li class="absolute w-full -inset-x-1 bottom-0">
                        <a type="button" id="logOut" href="/login"
                            class="gap-3 w-52 py-1 mb-5 flex items-center justify-center m-auto rounded-md bg-[#FF0000] hover:bg-[#D51717] text-white p-2 pt-2 pb-2">
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </aside>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2"></script>
