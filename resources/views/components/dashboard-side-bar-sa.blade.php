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

        /* kelola notifikasi */
        .icon-kelola-notifikasi {
            transition: stroke 0.3s;
            /* Efek transisi pada perubahan warna stroke */
        }

        .group:hover .icon-kelola-notifikasi {
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
            <a href="/sa-kelola-notifikasi">
                <img src="/assets/landing/prov-lampung2.svg" alt=""
                    class="w-[50%] h-[50%] m-auto items-center lg:w-[70px] lg:h-[100px] mb-5 lg:mb-0">
            </a>
            <div class="flex items-center justify-center m-auto text-white">
                <ul class='mt-5'>
                    {{-- Kelola notifikasi --}}
                    <li x-data="{ isSubMenuOpen: false }" class="absolute flex items-center justify-center inset-x-0">
                        @php
                            // path halaman aktif
                            $activePagePath4 = [
                                'sa-kelola-notifikasi',
                                'sa-kelola-notifikasi-slb',
                                'sa-kelola-notifikasi-slb/tambah',
                                'sa-kelola-notifikasi-slb/edit',
                                'sa-kelola-notifikasi-si',
                                'sa-kelola-notifikasi-si/tambah',
                                'sa-kelola-notifikasi-si/edit',
                            ]; // path halaman aktif
                        @endphp
                        <a href="/sa-kelola-notifikasi" type="button"
                            class="group w-[80%] h-[60px] p-1 pl-5 flex gap-6 text-lg font-medium
        @if (in_array(Request::path(), $activePagePath4)) rounded-lg bg-white text-[#297785] focus:z-10 focus:ring-2 focus:ring-white focus:text-white
        @else
            text-white rounded-lg hover:bg-white hover:text-[#297785] focus:z-10 focus:ring-2 focus:ring-white focus:text-white @endif">
                            <div class="text-start justify-center items-center flex">
                                <svg width="29" height="28" viewBox="0 0 29 28" fill="none"
                                    class="icon-kelola-notifikasi" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_968_2694)">
                                        <path
                                            d="M23.0387 13.9997C18.5237 13.9997 14.8721 17.6513 14.8721 22.1663C14.8721 22.563 14.9071 22.948 14.9654 23.333H4.37207V22.1663L6.7054 19.833V12.833C6.7054 9.21634 9.07374 6.03134 12.5387 5.00467V4.66634C12.5387 3.38301 13.5887 2.33301 14.8721 2.33301C16.1554 2.33301 17.2054 3.38301 17.2054 4.66634V5.00467C20.6704 6.03134 23.0387 9.21634 23.0387 12.833V13.9997ZM12.5387 24.4997C12.5387 25.1185 12.7846 25.712 13.2222 26.1496C13.6597 26.5872 14.2532 26.833 14.8721 26.833C15.3271 26.833 15.7471 26.693 16.1087 26.4713C15.7354 25.8647 15.4554 25.1997 15.2221 24.4997H12.5387ZM28.6037 23.7063C28.7204 23.788 28.7437 23.9513 28.6737 24.0797L27.5071 26.098C27.4371 26.2497 27.2854 26.2497 27.1571 26.2497L25.6987 25.6313C25.3721 25.8647 25.0804 26.063 24.7187 26.2147L24.4971 27.7547C24.4737 27.8947 24.3571 27.9997 24.2054 27.9997H21.8721C21.7321 27.9997 21.6037 27.8947 21.5804 27.7547L21.3704 26.2147C20.9971 26.063 20.7054 25.8647 20.3787 25.6313L18.9554 26.2497C18.8037 26.2497 18.6404 26.2497 18.5704 26.098L17.4037 24.0797C17.3705 24.0189 17.3593 23.9486 17.3721 23.8805C17.3848 23.8125 17.4208 23.7509 17.4737 23.7063L18.7104 22.7497C18.6871 22.5513 18.6637 22.3647 18.6637 22.1663C18.6637 21.968 18.6871 21.7813 18.7104 21.583L17.4737 20.6263C17.3687 20.5447 17.3337 20.4163 17.4037 20.253L18.5704 18.2463C18.6404 18.118 18.8037 18.083 18.9554 18.118L20.3787 18.6663C20.7054 18.468 20.9971 18.2697 21.3704 18.1297L21.5804 16.578C21.6037 16.438 21.7321 16.333 21.8721 16.333H24.2054C24.3571 16.333 24.4737 16.438 24.4971 16.578L24.7187 18.1297C25.0804 18.2697 25.3721 18.468 25.6987 18.6663L27.1571 18.118C27.2854 18.083 27.4371 18.118 27.5071 18.2463L28.6737 20.253C28.7437 20.4163 28.7204 20.5447 28.6037 20.6263L27.3787 21.583C27.4239 21.9706 27.4239 22.3621 27.3787 22.7497L28.6037 23.7063ZM25.0804 22.1663C25.0804 21.0347 24.1704 20.1247 23.0387 20.1247C21.9071 20.1247 20.9971 21.0347 20.9971 22.1663C20.9971 23.298 21.9187 24.208 23.0387 24.208C24.1587 24.208 25.0804 23.298 25.0804 22.1663Z"
                                            fill="currentColor" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_968_2694">
                                            <rect width="28" height="28" fill="white"
                                                transform="translate(0.87207)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="text-start justify-center items-center flex font-bold">Kelola <br> Notifikasi
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
                                $kelolanotifikasislb = [
                                    'sa-kelola-notifikasi-slb',
                                    'sa-kelola-notifikasi-slb/tambah',
                                    'sa-kelola-notifikasi-slb/edit',
                                ];
                                $kelolanotifikasisi = [
                                    'sa-kelola-notifikasi-si',
                                    'sa-kelola-notifikasi-si/tambah',
                                    'sa-kelola-notifikasi-si/edit',
                                ];
                                // halaman aktif
                            @endphp
                            <a href="/sa-kelola-notifikasi-slb"
                                class="block px-4 py-2 text-sm @if (in_array(Request::path(), $kelolanotifikasislb)) rounded-b-lg bg-[#FA8F21] text-white hover:text-white font-bold focus:z-10 focus:ring-2 focus:ring-white focus:text-white
        @else
            bg-white text-[#297785] font-bold rounded-md hover:bg-[#FA8F21] hover:text-white focus:z-10 focus:ring-2 focus:ring-white focus:text-white @endif">SLB</a>
                            <a href="/sa-kelola-notifikasi-si"
                                class="block px-4 py-2 text-sm @if (in_array(Request::path(), $kelolanotifikasisi)) rounded-lg bg-[#FA8F21] text-white hover:text-white font-bold focus:z-10 focus:ring-2 focus:ring-white focus:text-white
        @else
            bg-white text-[#297785] font-bold rounded-md hover:bg-[#FA8F21] hover:text-white focus:z-10 focus:ring-2 focus:ring-white focus:text-white @endif">Sekolah
                                Inklusi</a>
                        </div>
                    </li>
                    {{-- admin slb --}}
                    @php
                        $activePagePath = [
                            'kelola-admin-slb',
                            'kelola-admin-slb/tambah',
                            'kelola-admin-slb/edit',
                            'kelola-admin-slb/lihat',
                        ]; // halaman aktif
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
                                'sa-guru-slb',
                                'sa-kebutuhan-guru-slb',
                                'sa-peserta-didik-slb',
                                'sa-sarpras-slb',
                                'sa-tendik-slb',
                                'sa-karya-slb',
                                'sa-statistik-slb',
                                'sa-statistik-guru',
                                'sa-statistik-kebutuhan-guru',
                                'sa-statistik-peserta-didik',
                                'sa-statistik-sarpras',
                                'sa-statistik-tendik',
                                'sa-statistik-karya',
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
                                    'sa-statistik-karya',
                                ]; // halaman aktif
                                $pesertadidik = ['sa-peserta-didik-slb'];
                                $guru = ['sa-guru-slb'];
                                $tendik = ['sa-tendik-slb'];
                                $sarpras = ['sa-sarpras-slb'];
                                $kebutuhanguru = ['sa-kebutuhan-guru-slb'];
                                $karyaslb = ['sa-karya-slb'];
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
                            <a href="/sa-karya-slb"
                                class="block px-4 py-2 text-sm @if (in_array(Request::path(), $karyaslb)) rounded-lg bg-[#FA8F21] text-white hover:text-white font-bold focus:z-10 focus:ring-2 focus:ring-white focus:text-white
        @else
            bg-white text-[#297785] font-bold rounded-md hover:bg-[#FA8F21] hover:text-white focus:z-10 focus:ring-2 focus:ring-white focus:text-white @endif">Karya
                                SLB</a>
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
                                    xmlns="http://www.w3.org/2000/svg" class="icon-sekolah-inklusi">
                                    <g clip-path="url(#clip0_846_6402)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M24.5805 0.29181C24.393 0.104339 24.1387 -0.000976562 23.8735 -0.000976562C23.6083 -0.000976562 23.354 0.104339 23.1665 0.29181L19.1665 4.29181C19.0264 4.43155 18.9309 4.60971 18.8921 4.80374C18.8533 4.99777 18.873 5.19895 18.9486 5.38181C19.0241 5.56468 19.1523 5.72101 19.3168 5.83102C19.4812 5.94102 19.6746 5.99977 19.8725 5.99981H27.8725C28.0705 6.00016 28.2642 5.94171 28.429 5.83185C28.5938 5.72199 28.7222 5.56568 28.7981 5.38274C28.8739 5.19979 28.8937 4.99845 28.855 4.80423C28.8162 4.61001 28.7207 4.43167 28.5805 4.29181L24.5805 0.29181ZM19.8725 9.99981C19.6745 9.99946 19.4808 10.0579 19.316 10.1678C19.1512 10.2776 19.0228 10.4339 18.9469 10.6169C18.8711 10.7998 18.8513 11.0012 18.89 11.1954C18.9288 11.3896 19.0243 11.568 19.1645 11.7078L23.1645 15.7078C23.2574 15.8009 23.3678 15.8748 23.4892 15.9252C23.6107 15.9756 23.741 16.0016 23.8725 16.0016C24.004 16.0016 24.1343 15.9756 24.2558 15.9252C24.3773 15.8748 24.4876 15.8009 24.5805 15.7078L28.5805 11.7078C28.7207 11.568 28.8162 11.3896 28.855 11.1954C28.8937 11.0012 28.8739 10.7998 28.7981 10.6169C28.7222 10.4339 28.5938 10.2776 28.429 10.1678C28.2642 10.0579 28.0705 9.99946 27.8725 9.99981H19.8725ZM9.58651 8.51981C9.58651 7.59606 9.95347 6.71015 10.6067 6.05696C11.2598 5.40377 12.1458 5.03681 13.0695 5.03681C13.9933 5.03681 14.8792 5.40377 15.5324 6.05696C16.1856 6.71015 16.5525 7.59606 16.5525 8.51981C16.5525 9.44356 16.1856 10.3295 15.5324 10.9827C14.8792 11.6359 13.9933 12.0028 13.0695 12.0028C12.1458 12.0028 11.2598 11.6359 10.6067 10.9827C9.95347 10.3295 9.58651 9.44356 9.58651 8.51981ZM15.0725 14.9698C15.0725 14.4394 14.8618 13.9307 14.4867 13.5556C14.1116 13.1805 13.6029 12.9698 13.0725 12.9698C12.5421 12.9698 12.0334 13.1805 11.6583 13.5556C11.2832 13.9307 11.0725 14.4394 11.0725 14.9698V19.9338C11.0725 20.4642 11.2832 20.9729 11.6583 21.348C12.0334 21.7231 12.5421 21.9338 13.0725 21.9338H16.8625V25.8898C16.8625 26.4202 17.0732 26.929 17.4483 27.304C17.8234 27.6791 18.3321 27.8898 18.8625 27.8898C19.3929 27.8898 19.9016 27.6791 20.2767 27.304C20.6518 26.929 20.8625 26.4202 20.8625 25.8898V21.8638C20.862 20.8219 20.4477 19.8228 19.7107 19.0862C18.9738 18.3496 17.9745 17.9358 16.9325 17.9358H15.0725V14.9698ZM9.74851 14.7198C9.74851 15.1176 9.59047 15.4992 9.30917 15.7805C9.02786 16.0618 8.64633 16.2198 8.24851 16.2198C7.56175 16.2208 6.88527 16.3867 6.27595 16.7035C5.66663 17.0203 5.14226 17.4788 4.74695 18.0404C4.35163 18.6019 4.09691 19.2502 4.0042 19.9307C3.91149 20.6112 3.98351 21.3039 4.21419 21.9508C4.44487 22.5977 4.82748 23.1797 5.32984 23.6479C5.83221 24.1162 6.43965 24.457 7.10111 24.6417C7.76256 24.8264 8.4587 24.8496 9.13098 24.7094C9.80327 24.5692 10.4321 24.2696 10.9645 23.8358C11.2727 23.5841 11.6682 23.4652 12.0641 23.5051C12.46 23.5451 12.8238 23.7406 13.0755 24.0488C13.3272 24.357 13.4462 24.7525 13.4062 25.1484C13.3663 25.5443 13.1707 25.9081 12.8625 26.1598C11.9578 26.8974 10.8892 27.407 9.7466 27.6457C8.60398 27.8845 7.42074 27.8453 6.2964 27.5315C5.17207 27.2178 4.13951 26.6386 3.28558 25.8428C2.43165 25.047 1.78132 24.0577 1.38928 22.9582C0.997233 21.8587 0.874947 20.6812 1.0327 19.5246C1.19046 18.368 1.62365 17.2662 2.29583 16.3119C2.96801 15.3576 3.85952 14.5786 4.8954 14.0405C5.93128 13.5024 7.08122 13.221 8.24851 13.2198C8.64633 13.2198 9.02786 13.3778 9.30917 13.6592C9.59047 13.9405 9.74851 14.322 9.74851 14.7198Z"
                                            fill="currentColor" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_846_6402">
                                            <rect width="28" height="28" fill="white"
                                                transform="translate(0.87207)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="text-start justify-center items-center flex font-bold">Sekolah <br> Inklusi
                            </div>
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
