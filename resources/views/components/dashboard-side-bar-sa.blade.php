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

        /* kelola notifikasi */
        .icon-kelola-notifikasi {
            transition: stroke 0.3s;
            /* Efek transisi pada perubahan warna stroke */
        }

        .group:hover .icon-kelola-notifikasi {
            stroke: #297785;
            /* stroke saat elemen dalam keadaan hover */
        }
    </style>

    <aside id="default-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"aria-label="Sidebar">
        <div class="h-full px-4 py-4 overflow-y-auto bg-[#297785]">
            <a href="/sa-kelola-sistem">
                <img src="/assets/landing/prov-lampung2.svg" alt=""
                    class="w-[50%] h-[50%] m-auto items-center lg:w-[70px] lg:h-[100px] mb-5 lg:mb-0">
            </a>
            <div class="flex items-center justify-center m-auto text-white">
                <ul class='mt-10'>
                    {{-- Kelola notifikasi --}}
                    <li x-data="{ isSubMenuOpen: false }" class="absolute flex items-center justify-center inset-x-0">
                        @php
                            // path halaman aktif
                            $activePagePath4 = [
                                'sa-kelola-sistem',
                                'sa-on-off-sistem',
                                'sa-kelola-pengumuman-slb',
                                'sa-kelola-pengumuman-slb/tambah',
                                'sa-kelola-pengumuman-slb/edit',
                                'sa-kelola-pengumuman-si',
                                'sa-kelola-pengumuman-si/tambah',
                                'sa-kelola-pengumuman-si/edit',
                            ]; // path halaman aktif
                        @endphp
                        <a href="/sa-kelola-sistem" type="button"
                            class="group w-[80%] h-[60px] p-1 pl-5 flex gap-6 text-lg font-medium
        @if (in_array(Request::path(), $activePagePath4)) rounded-lg bg-white text-[#297785] focus:z-10 focus:ring-2 focus:ring-white focus:text-white
        @else
            text-white rounded-lg hover:bg-white hover:text-[#297785] focus:z-10 focus:ring-2 focus:ring-white focus:text-white @endif">
                            <div class="text-start justify-center items-center flex">
                                <svg class="icon-kelola-notifikasi" width="25" height="24" viewBox="0 0 25 24"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_704_3247)">
                                        <path
                                            d="M5.87207 23H19.8721M8.62907 5.757L10.7511 7.879M10.7511 7.879C11.3137 7.31639 12.0764 7 12.8721 7M10.7511 7.879C10.1885 8.44161 9.87207 9.20435 9.87207 10M9.87207 10H6.87207M9.87207 10C9.87207 10.7956 10.1885 11.5584 10.7511 12.121M10.7511 12.121L8.62907 14.243M10.7511 12.121C11.3137 12.6836 12.0764 13 12.8721 13M12.8721 13V16M12.8721 13C13.6677 13 14.4305 12.6836 14.9931 12.121M14.9931 12.121L17.1151 14.243M14.9931 12.121C15.5557 11.5584 15.8721 10.7956 15.8721 10M18.8721 10H15.8721M15.8721 10C15.8721 9.20435 15.5557 8.44161 14.9931 7.879M17.1151 5.757L14.9931 7.879M14.9931 7.879C14.4305 7.31639 13.6677 7 12.8721 7M12.8721 7V4M1.87207 19H23.8721V1H1.87207V19ZM8.87207 23H16.8721V19H8.87207V23Z"
                                            stroke="currentColor" stroke-width="2" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_704_3247">
                                            <rect width="24" height="24" fill="currentColor"
                                                transform="translate(0.87207)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="text-start justify-center items-center flex font-bold">Kelola <br> Sistem
                            </div>
                        </a>
                        <div
                            class="absolute justify-end flex ml-32 icon-slb @if (in_array(Request::path(), $activePagePath4)) text-[#297785] hover:text-[#297785] @else text-white dark:hover:text-white @endif">
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
                                $onoff = ['sa-on-off-sistem']; // halaman aktif
                                $kelolapengumumanslb = [
                                    'sa-kelola-pengumuman-slb',
                                    'sa-kelola-pengumuman-slb/tambah',
                                    'sa-kelola-pengumuman-slb/edit',
                                ];
                                $kelolapengumumansi = [
                                    'sa-kelola-pengumuman-si',
                                    'sa-kelola-pengumuman-si/tambah',
                                    'sa-kelola-pengumuman-si/edit',
                                ];
                                // halaman aktif
                            @endphp
                            <a href="/sa-on-off-sistem"
                                class="block px-4 py-2 text-sm @if (in_array(Request::path(), $onoff)) rounded-b-lg bg-[#FA8F21] text-white hover:text-white font-bold focus:z-10 focus:ring-2 focus:ring-white focus:text-white
        @else
            bg-white text-[#297785] font-bold rounded-md hover:bg-[#FA8F21] hover:text-white focus:z-10 focus:ring-2 focus:ring-white focus:text-white @endif">On/Off
                                Sistem</a>
                            <a href="/sa-kelola-pengumuman-slb"
                                class="block px-4 py-2 text-sm @if (in_array(Request::path(), $kelolapengumumanslb)) rounded-b-lg bg-[#FA8F21] text-white hover:text-white font-bold focus:z-10 focus:ring-2 focus:ring-white focus:text-white
        @else
            bg-white text-[#297785] font-bold rounded-md hover:bg-[#FA8F21] hover:text-white focus:z-10 focus:ring-2 focus:ring-white focus:text-white @endif">SLB</a>
                            <a href="/sa-kelola-pengumuman-si"
                                class="block px-4 py-2 text-sm @if (in_array(Request::path(), $kelolapengumumansi)) rounded-lg bg-[#FA8F21] text-white hover:text-white font-bold focus:z-10 focus:ring-2 focus:ring-white focus:text-white
        @else
            bg-white text-[#297785] font-bold rounded-md hover:bg-[#FA8F21] hover:text-white focus:z-10 focus:ring-2 focus:ring-white focus:text-white @endif">Sekolah
                                Inklusi</a>
                        </div>
                    </li>
                    {{-- admin slb --}}
                    @php
                        $activePagePath = ['kelola-admin-slb', 'kelola-admin-slb/tambah', 'kelola-admin-slb/edit']; // halaman aktif
                    @endphp
                    <li class="absolute flex items-center justify-center inset-x-0 mt-5 mt-[70px]">
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
                    {{-- slb --}}
                    <li x-data="{ isSubMenuOpen: false }" class="absolute flex items-center justify-center inset-x-0 mt-[140px]">
                        @php
                            // path halaman aktif
                            $activePagePath2 = [
                                'sa-dashboard-slb',
                                'sa-kelola-notifikasi-slb',
                                'sa-guru-slb',
                                'sa-kebutuhan-guru-slb',
                                'sa-peserta-didik-slb',
                                'sa-sarpras-slb',
                                'sa-tendik-slb',
                                'sa-statistik-slb',
                                'sa-statistik-guru',
                                'sa-statistik-kebutuhan-guru',
                                'sa-statistik-peserta-didik',
                                'sa-statistik-sarpras',
                                'sa-statistik-tendik',
                            ]; // halaman aktif
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
                                $statistikslb = [
                                    'sa-statistik-slb',
                                    'sa-statistik-guru',
                                    'sa-statistik-kebutuhan-guru',
                                    'sa-statistik-peserta-didik',
                                    'sa-statistik-sarpras',
                                    'sa-statistik-tendik',
                                ]; // halaman aktif
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
                    @php
                        $activePagePath = ['sa-pendataan-si', 'sa-pendataan-si/lihat', 'sa-pendataan-si/edit']; // halaman aktif
                    @endphp
                    <li class="absolute flex items-center justify-center inset-x-0 mt-5 mt-[210px]">
                        <a href="/sa-pendataan-si" type="button"
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
                            <div class="text-start justify-center items-center flex font-bold">Sekolah <br> Inklusi</div>
                        </a>
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
