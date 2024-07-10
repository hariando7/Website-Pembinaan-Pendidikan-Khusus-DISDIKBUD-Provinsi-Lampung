<button data-drawer-target="cta-button-sidebar" data-drawer-toggle="cta-button-sidebar" aria-controls="cta-button-sidebar"
    type="button"
    class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
        </path>
    </svg>
</button>

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

    /* Karya slb */
    .icon-karya-slb {
        transition: stroke 0.3s;
    }

    .group:hover .icon-karya-slb {
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

<aside id="cta-button-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-[#297785] hide-scrollbar">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="/admin-home-slb">
                    <img src="/assets/landing/prov-lampung2.svg" alt=""
                        title="Website Bidang Pembinaan Pendidikan Khsus"
                        class="w-[20%] h-[20%] m-auto items-center lg:w-[70px] lg:h-[100px]">
                </a>
            </li>
            <li>
                @php
                    $activePagePath = [
                        'admin-pesertadidik-slb',
                        'admin-pesertadidik-slb/tambah',
                        'admin-statistik-pd-kelas',
                        'admin-statistik-pd-jenisKetunaan',
                        'admin-statistik-pd-tahun',
                    ]; // halaman aktif
                    if (isset($id)) {
                        array_push($activePagePath, 'admin-pesertadidik-slb/edit/' . $id);
                    }
                @endphp
                {{-- @dd($id) --}}
                <a href="/admin-pesertadidik-slb" type="button"
                    class="group w-full h-[60px] mt-3 p-1 pl-5 flex gap-6 text-lg font-medium
@if (in_array(Request::path(), $activePagePath)) rounded-lg bg-white text-[#297785] focus:z-10 focus:ring-2 focus:ring-white focus:text-white
        @else
            text-white rounded-lg hover:bg-white hover:text-[#297785] focus:z-10 focus:ring-2 focus:ring-white focus:text-white @endif">
                    <div class="text-start justify-center items-center flex">
                        <svg width="32" height="28" viewBox="0 0 32 28" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="icon-peserta-didik-slb">
                            <path
                                d="M2 30.345V28.5519C2 21.6197 8.42248 16 16.345 16C24.2675 16 30.69 21.6197 30.69 28.5519V30.345"
                                stroke="currentColor" stroke-width="2.66" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M16.3436 15.9998C20.8707 15.9998 24.5408 12.7885 24.5408 8.82729C24.5408 4.86602 20.8707 1.65479 16.3436 1.65479C11.8165 1.65479 8.14648 4.86602 8.14648 8.82729C8.14648 12.7885 11.8165 15.9998 16.3436 15.9998Z"
                                stroke="currentColor" stroke-width="2.66" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="text-start justify-center items-center flex">Peserta Didik <br> SLB</div>
                </a>
            </li>
            <li>
                @php
                    // path halaman aktif
                    $activePagePath2 = [
                        'admin-guru-slb',
                        'admin-guru-slb/tambah',
                        'admin-statistik-guru-pns',
                        'admin-statistik-guru-sertifikasi',
                        'admin-statistik-guru-tahun',
                    ]; // halaman aktif
                    if (isset($id)) {
                        array_push($activePagePath2, 'admin-guru-slb/edit/' . $id);
                    }
                @endphp
                <a href="/admin-guru-slb" type="button"
                    class="group w-full h-[60px] p-1 pl-5 flex gap-6 text-lg font-medium
        @if (in_array(Request::path(), $activePagePath2)) rounded-lg bg-white text-[#297785] focus:z-10 focus:ring-2 focus:ring-white focus:text-white
        @else
            text-white rounded-lg hover:bg-white hover:text-[#297785] focus:z-10 focus:ring-2 focus:ring-white focus:text-white @endif">
                    <div class="text-start justify-center items-center flex">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="icon-guru-slb">
                            <path
                                d="M4 6V8H26V24H12V26H30V24H28V6H4ZM8.002 9C6.94208 9.00369 5.9266 9.42623 5.17694 10.1755C4.42727 10.9248 4.00422 11.9401 4 13C4 15.199 5.804 17 8.002 17C9.06138 16.9958 10.0761 16.5729 10.8251 15.8236C11.574 15.0744 11.9963 14.0594 12 13C12 10.803 10.198 9 8.002 9ZM14 10V12H19V10H14ZM21 10V12H24V10H21ZM8.002 11C9.116 11 10 11.883 10 13C10 14.12 9.117 15 8.002 15C6.882 15 6 14.12 6 13C6 11.883 6.883 11 8.002 11ZM14 14V16H24V14H14ZM4 18V26H6V20H9V26H11V20.658L13.064 21.75C13.649 22.06 14.352 22.059 14.936 21.75V21.752L18.466 19.885L17.533 18.115L14.002 19.982L10.906 18.348C10.4739 18.1197 9.99268 18.0003 9.504 18H4Z"
                                stroke="currentColor" stroke-linecap="round" fill="currentcolor" />
                        </svg>
                    </div>
                    <div class="text-start justify-center items-center flex">Guru SLB</div>
                </a>
            </li>
            <li>
                @php
                    // path halaman aktif
                    $activePagePath3 = [
                        'admin-tendik-slb',
                        'admin-tendik-slb/tambah',
                        'admin-statistik-tendik-pns',
                        'admin-statistik-tendik-tahun',
                    ]; // path halaman aktif
                    if (isset($id)) {
                        array_push($activePagePath3, 'admin-tendik-slb/edit/' . $id);
                    }
                @endphp
                <a href="/admin-tendik-slb" type="button"
                    class="group w-full h-[60px] p-1 pl-5 flex gap-6 text-lg font-medium
        @if (in_array(Request::path(), $activePagePath3)) rounded-lg bg-white text-[#297785] focus:z-10 focus:ring-2 focus:ring-white focus:text-white
        @else
            text-white rounded-lg hover:bg-white hover:text-[#297785] focus:z-10 focus:ring-2 focus:ring-white focus:text-white @endif">
                    <div class="text-start justify-center items-center flex">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none" stroke="currentColor"
                            xmlns="http://www.w3.org/2000/svg" class="icon-tendik-slb">
                            <g clip-path="url(#clip0_440_17745)">
                                <path
                                    d="M9.10007 19.25C8.99551 19.25 8.89095 19.2691 8.7912 19.3096C8.2242 19.5398 7.62788 19.6875 7.00007 19.6875C6.37226 19.6875 5.77595 19.5398 5.20851 19.3096C5.10876 19.2691 5.00463 19.25 4.90007 19.25C2.18495 19.25 -0.0143668 22.0106 7.06772e-05 25.4089C0.00619568 26.845 0.950758 28 2.10007 28H11.9001C13.0494 28 13.9939 26.845 14.0001 25.4089C14.0145 22.0106 11.8152 19.25 9.10007 19.25ZM7.00007 17.5C9.3197 17.5 11.2001 15.1495 11.2001 12.25C11.2001 9.35047 9.3197 7 7.00007 7C4.68045 7 2.80007 9.35047 2.80007 12.25C2.80007 15.1495 4.68045 17.5 7.00007 17.5ZM25.9001 0H9.10007C7.94201 0 7.00007 1.2168 7.00007 2.71195V5.25C8.0247 5.25 8.9732 5.62078 9.80007 6.22344V3.5H25.2001V19.25H22.4001V15.75H16.8001V19.25H13.4646C14.3002 20.1627 14.9136 21.368 15.201 22.75H25.9001C27.0581 22.75 28.0001 21.5332 28.0001 20.038V2.71195C28.0001 1.2168 27.0581 0 25.9001 0Z"
                                    fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                    class="icon-tendik-slb" />
                            </g>
                            <defs>
                                <clipPath id="clip0_440_17745">
                                    <rect width="28" height="28" stroke="currentColor" fill="currentColor"
                                        stroke-linecap="round" class="icon" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="text-start justify-center items-center flex">Tendik SLB</div>
                </a>
            </li>
            <li>
                @php
                    // path halaman aktif
                    $activePagePath4 = [
                        'admin-sarpras-slb',
                        'admin-sarpras-slb/tambah',
                        'admin-sarpras-slb/edit',
                        'admin-statistik-sarpras-tahun',
                    ]; // path halaman aktif
                    if (isset($id)) {
                        array_push($activePagePath4, 'admin-sarpras-slb/edit/' . $id);
                    }
                @endphp
                <a href="/admin-sarpras-slb" type="button"
                    class="group w-full h-[60px] p-1 pl-5 flex gap-6 text-lg font-medium
        @if (in_array(Request::path(), $activePagePath4)) rounded-lg bg-white text-[#297785] focus:z-10 focus:ring-2 focus:ring-white focus:text-white
        @else
            text-white rounded-lg hover:bg-white hover:text-[#297785] focus:z-10 focus:ring-2 focus:ring-white focus:text-white @endif">
                    <div class="text-start justify-center items-center flex">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="icon-sarpras-slb">
                            <g clip-path="url(#clip0_440_17755)">
                                <path
                                    d="M24.1109 6.22217H17.8887V7.77772H24.1109V24.1111H17.8887V25.6666H25.6664V7.77772C25.6664 7.36516 25.5026 6.9695 25.2108 6.67778C24.9191 6.38606 24.5235 6.22217 24.1109 6.22217Z"
                                    fill="currentColor" stroke="currentColor" />
                                <path
                                    d="M15.4624 2.3335H4.76022C4.3229 2.3335 3.9035 2.50722 3.59428 2.81644C3.28505 3.12567 3.11133 3.54507 3.11133 3.98238V25.6668H17.1113V3.98238C17.1113 3.54507 16.9376 3.12567 16.6284 2.81644C16.3192 2.50722 15.8998 2.3335 15.4624 2.3335ZM15.5558 24.1113H13.2224V21.7779H7.00022V24.1113H4.66688V3.98238C4.66688 3.97013 4.6693 3.95799 4.67399 3.94667C4.67868 3.93534 4.68555 3.92506 4.69422 3.91639C4.70289 3.90772 4.71318 3.90085 4.7245 3.89616C4.73582 3.89147 4.74796 3.88905 4.76022 3.88905H15.4624C15.4747 3.88905 15.4868 3.89147 15.4982 3.89616C15.5095 3.90085 15.5198 3.90772 15.5284 3.91639C15.5371 3.92506 15.544 3.93534 15.5487 3.94667C15.5534 3.95799 15.5558 3.97013 15.5558 3.98238V24.1113Z"
                                    fill="currentColor" stroke="currentColor" />
                                <path d="M6.22217 6.22217H7.77772V7.77772H6.22217V6.22217Z" fill="currentColor"
                                    stroke="currentColor" />
                                <path d="M9.3335 6.22217H10.8891V7.77772H9.3335V6.22217Z" fill="currentColor"
                                    stroke="currentColor" />
                                <path d="M12.4443 6.22217H13.9999V7.77772H12.4443V6.22217Z" fill="currentColor"
                                    stroke="currentColor" />
                                <path d="M6.22217 10.1113H7.77772V11.6669H6.22217V10.1113Z" fill="currentColor"
                                    stroke="currentColor" />
                                <path d="M9.3335 10.1113H10.8891V11.6669H9.3335V10.1113Z" fill="currentColor"
                                    stroke="currentColor" />
                                <path d="M12.4443 10.1113H13.9999V11.6669H12.4443V10.1113Z" fill="currentColor"
                                    stroke="currentColor" />
                                <path d="M6.22217 14H7.77772V15.5556H6.22217V14Z" fill="currentColor"
                                    stroke="currentColor" />
                                <path d="M9.3335 14H10.8891V15.5556H9.3335V14Z" fill="currentColor"
                                    stroke="currentColor" />
                                <path d="M12.4443 14H13.9999V15.5556H12.4443V14Z" fill="currentColor"
                                    stroke="currentColor" />
                                <path d="M6.22217 17.8887H7.77772V19.4442H6.22217V17.8887Z" fill="currentColor"
                                    stroke="currentColor" />
                                <path d="M9.3335 17.8887H10.8891V19.4442H9.3335V17.8887Z" fill="currentColor"
                                    stroke="currentColor" />
                                <path d="M12.4443 17.8887H13.9999V19.4442H12.4443V17.8887Z" fill="currentColor"
                                    stroke="currentColor" />
                                <path d="M17.8887 10.1113H19.4442V11.6669H17.8887V10.1113Z" fill="currentColor"
                                    stroke="currentColor" />
                                <path d="M21 10.1113H22.5556V11.6669H21V10.1113Z" fill="currentColor"
                                    stroke="currentColor" />
                                <path d="M17.8887 14H19.4442V15.5556H17.8887V14Z" fill="currentColor"
                                    stroke="currentColor" />
                                <path d="M21 14H22.5556V15.5556H21V14Z" fill="currentColor" stroke="currentColor" />
                                <path d="M17.8887 17.8887H19.4442V19.4442H17.8887V17.8887Z" fill="currentColor"
                                    stroke="currentColor" />
                                <path d="M21 17.8887H22.5556V19.4442H21V17.8887Z" fill="currentColor"
                                    stroke="currentColor" />
                            </g>
                            <defs>
                                <clipPath id="clip0_440_17755">
                                    <rect width="28" height="28" fill="currentColor" stroke="currentColor" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="text-start justify-center items-center flex">Sarpras SLB</div>
                </a>
            </li>
            <li>
                @php
                    // path halaman aktif
                    $activePagePath5 = [
                        'admin-kebutuhan-guru-slb',
                        'admin-kebutuhan-guru-slb/tambah',
                        'admin-statistik-kg-tahun',
                    ]; // path halaman aktif
                    if (isset($id)) {
                        array_push($activePagePath5, 'admin-kebutuhan-guru-slb/edit/' . $id);
                    }
                @endphp
                <a href="/admin-kebutuhan-guru-slb" type="button"
                    class="group w-full h-[60px] p-1 pl-5 flex gap-6 text-lg font-medium
        @if (in_array(Request::path(), $activePagePath5)) rounded-lg bg-white text-[#297785] focus:z-10 focus:ring-2 focus:ring-white focus:text-white
        @else
            text-white rounded-lg hover:bg-white hover:text-[#297785] focus:z-10 focus:ring-2 focus:ring-white focus:text-white @endif">
                    <div class="text-start justify-center items-center flex">
                        <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="icon-kebutuhan-guru-slb">
                            <path
                                d="M22.7767 4.16991L12.2767 0.669909C12.0971 0.61003 11.9029 0.61003 11.7233 0.669909L1.22328 4.16991C1.04905 4.22799 0.897516 4.33942 0.790138 4.48841C0.682761 4.63741 0.624986 4.81641 0.625 5.00006V13.7501C0.625 13.9821 0.717187 14.2047 0.881282 14.3688C1.04538 14.5329 1.26794 14.6251 1.5 14.6251C1.73206 14.6251 1.95462 14.5329 2.11872 14.3688C2.28281 14.2047 2.375 13.9821 2.375 13.7501V6.21413L6.04891 7.43803C5.0728 9.01501 4.7624 10.9149 5.18587 12.7205C5.60933 14.5262 6.73205 16.0899 8.3075 17.0685C6.33875 17.8407 4.63688 19.2374 3.39219 21.1471C3.32745 21.2433 3.28249 21.3514 3.25991 21.4652C3.23733 21.5789 3.23758 21.696 3.26065 21.8096C3.28373 21.9233 3.32916 22.0312 3.3943 22.1271C3.45945 22.2231 3.54302 22.3051 3.64014 22.3684C3.73727 22.4318 3.84602 22.4752 3.96007 22.4962C4.07412 22.5171 4.1912 22.5152 4.3045 22.4905C4.4178 22.4658 4.52506 22.4188 4.62005 22.3523C4.71504 22.2858 4.79586 22.2011 4.85781 22.103C6.50609 19.5743 9.10922 18.1251 12 18.1251C14.8908 18.1251 17.4939 19.5743 19.1422 22.103C19.2705 22.2938 19.4688 22.4263 19.6941 22.4721C19.9194 22.5178 20.1536 22.4731 20.3462 22.3475C20.5387 22.2219 20.6741 22.0255 20.7231 21.8009C20.772 21.5763 20.7306 21.3414 20.6078 21.1471C19.3631 19.2374 17.6547 17.8407 15.6925 17.0685C17.2664 16.09 18.3881 14.5272 18.8115 12.7229C19.2349 10.9186 18.9255 9.02001 17.9511 7.4435L22.7767 5.83569C22.951 5.77764 23.1026 5.66623 23.21 5.51723C23.3174 5.36823 23.3752 5.18921 23.3752 5.00553C23.3752 4.82186 23.3174 4.64283 23.21 4.49384C23.1026 4.34484 22.951 4.23342 22.7767 4.17538V4.16991ZM17.25 11.1251C17.2502 11.9551 17.0537 12.7733 16.6765 13.5126C16.2992 14.2519 15.7521 14.8913 15.0799 15.3782C14.4078 15.8651 13.6297 16.1857 12.8097 16.3137C11.9896 16.4417 11.1509 16.3735 10.3623 16.1146C9.57369 15.8557 8.85773 15.4135 8.27315 14.8243C7.68856 14.2351 7.25199 13.5157 6.99928 12.7251C6.74656 11.9345 6.68489 11.0952 6.81932 10.2762C6.95376 9.45716 7.28047 8.68167 7.77266 8.01335L11.7233 9.32585C11.9029 9.38573 12.0971 9.38573 12.2767 9.32585L16.2273 8.01335C16.8921 8.91459 17.2505 10.0052 17.25 11.1251ZM12 7.57803L4.26719 5.00006L12 2.4221L19.7328 5.00006L12 7.57803Z"
                                fill="currentColor" stroke="currentColor" />
                        </svg>
                    </div>
                    <div class="text-start justify-center items-center flex">Kebutuhan <br> Guru SLB</div>
                </a>
            </li>
            <li>
                @php
                    // path halaman aktif
                    $activePagePath6 = [
                        'admin-karya-slb',
                        'admin-karya-slb/tambah',
                        'admin-karya-slb/edit',
                        'admin-statistik-karya-tahun',
                    ]; // path halaman aktif
                    if (isset($id)) {
                        array_push($activePagePath6, 'admin-karya-slb/edit/' . $id);
                    }
                @endphp
                <a href="/admin-karya-slb" type="button"
                    class="group w-full h-[60px] p-1 pl-5 flex gap-6 text-lg font-medium
        @if (in_array(Request::path(), $activePagePath6)) rounded-lg bg-white text-[#297785] focus:z-10 focus:ring-2 focus:ring-white focus:text-white
        @else
            text-white rounded-lg hover:bg-white hover:text-[#297785] focus:z-10 focus:ring-2 focus:ring-white focus:text-white @endif">
                    <div class="text-start justify-center items-center flex">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class="icon-karya-slb">
                            <path
                                d="M4.66634 25.6668C4.02467 25.6668 3.47556 25.4386 3.01901 24.982C2.56245 24.5254 2.33379 23.9759 2.33301 23.3335V9.3335C2.33301 8.69183 2.56167 8.14272 3.01901 7.68616C3.47634 7.22961 4.02545 7.00094 4.66634 7.00016H9.33301L13.9997 2.3335L18.6663 7.00016H23.333C23.9747 7.00016 24.5242 7.22883 24.9815 7.68616C25.4388 8.1435 25.6671 8.69261 25.6663 9.3335V23.3335C25.6663 23.9752 25.4381 24.5247 24.9815 24.982C24.525 25.4393 23.9755 25.6676 23.333 25.6668H4.66634ZM6.99967 21.0002H20.9997L16.6247 15.1668L13.1247 19.8335L10.4997 16.3335L6.99967 21.0002ZM20.4163 15.1668C20.9025 15.1668 21.3158 14.9969 21.6565 14.657C21.9972 14.3171 22.1671 13.9037 22.1663 13.4168C22.1663 12.9307 21.9964 12.5177 21.6565 12.1778C21.3166 11.8379 20.9032 11.6676 20.4163 11.6668C19.9302 11.6668 19.5172 11.8372 19.1773 12.1778C18.8375 12.5185 18.6671 12.9315 18.6663 13.4168C18.6663 13.9029 18.8367 14.3163 19.1773 14.657C19.518 14.9977 19.931 15.1676 20.4163 15.1668ZM11.783 7.00016H16.2163L13.9997 4.7835L11.783 7.00016Z"
                                fill="currentColor" />
                        </svg>
                    </div>
                    <div class="text-start justify-center items-center flex">Karya SLB</div>
                </a>
            </li>
            <div id="dropdown-cta" class="p-4 mt-6 rounded-lg bg-blue-900" role="alert">
                <div class="flex items-center mb-3">
                    <span
                        class="bg-orange-200 text-orange-900 text-sm font-semibold me-2 px-2.5 py-0.5 rounded">Beta</span>
                    <button type="button"
                        class="ms-auto -mx-1.5 -my-1.5 bg-transparent inline-flex justify-center items-center w-6 h-6 rounded-lg focus:ring-2 focus:ring-blue-400 p-1 text-sm text-white hover:bg-[#D87815] hover:text-white dark:hover:bg-[#D87815] dark:hover:text-white"
                        data-dismiss-target="#dropdown-cta" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-2.5 h-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
                <p class="mb-3 text-sm text-blue-400">
                    Preview the new Flowbite dashboard navigation! You can turn the new navigation off for a limited
                    time in
                    your profile.
                </p>
                <a class="text-sm text-blue-400 underline font-medium hover:text-blue-300" href="#">Turn new
                    navigation off</a>
            </div>
            <li>
                <button data-modal-target="popUp-keluar-slb" data-modal-toggle="popUp-keluar-slb" type="button"
                    class="btn border-none gap-3 w-52 py-1 mb-5 flex items-center justify-center m-auto rounded-md bg-[#FF0000] hover:bg-[#D51717] text-white p-2 pt-2 pb-2">
                    Logout
                </button>
            </li>
        </ul>
    </div>
</aside>

<div id="popUp-keluar-slb" tabindex="-1"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-[#297785] rounded-lg shadow">
            <button type="button"
                class="absolute top-3 end-2.5 text-white bg-transparent hover:bg-[#D87815] hover:text-white rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                data-modal-hide="popUp-keluar-slb">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-4 md:p-5 text-center">
                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>
                <h3 class="mb-5 text-lg font-normal text-white">Anda yakin ingin keluar ?</h3>
                <a id="logOut" href="/logout" type="button"
                    class="btn border-none text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                    Ya
                </a>
                <button data-modal-hide="popUp-keluar-slb" type="button"
                    class="btn border-none py-2.5 px-5 ms-3 text-sm font-medium focus:outline-none rounded-lg text-white bg-[#FA8F21] rounded-lg hover:bg-[#D87815] hover:text-white">Tidak</button>
            </div>
        </div>
    </div>
</div>
