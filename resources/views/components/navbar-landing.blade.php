 <nav class="bg-[#2F8386]/[0.66] w-full fixed z-50">
     <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 z-[99]">
         <img src="{{ asset('assets/landing/prov-lampung.png') }}" alt="">
         <div class="flex items-center">
             <button data-collapse-toggle="navbar-user" type="button"
                 class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden dark:text-gray-400 bg-white"
                 aria-controls="navbar-user" aria-expanded="false" id="navbar-toggle">
                 <span class="sr-only">Open main menu</span>
                 <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 17 14">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                         d="M1 1h15M1 7h15M1 13h15" />
                 </svg>
             </button>
         </div>
         <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
             <ul
                 class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent sm:bg-white">
                 <li>
                     <a href="/"
                         class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:p-0 md:text-white sm:text-black {{ request()->is('/') ? '' : 'font-thin' }} ">Home</a>
                 </li>
                 <li>
                     <a href="/slb"
                         class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:p-0 md:text-white sm:text-black {{ request()->is('slb') ? '' : 'font-thin' }}">SLB</a>
                 </li>
                 <li>
                     <a href="/sekolah-inklusi"
                         class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:p-0 md:text-white sm:text-black {{ request()->is('login') ? '' : 'font-thin' }}">Sekolah
                         Inklusi</a>
                 </li>
                 <li>
                     <a href="/tentang"
                         class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:p-0 md:text-white sm:text-black {{ request()->is('tentang') ? '' : 'font-thin' }}">Tentang</a>
                 </li>
                 <li>
                     <a href="/login"
                         class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:p-0 md:text-white sm:text-black {{ request()->is('login') ? '' : 'font-thin' }}">Login</a>
                 </li>
             </ul>
         </div>
     </div>
 </nav>

 <!-- Add your JavaScript code here -->
 <script>
     document.getElementById('navbar-toggle').addEventListener('click', function() {
         var navbarUser = document.getElementById('navbar-user');
         if (navbarUser.style.display === 'none' || navbarUser.style.display === '') {
             navbarUser.style.display = 'block';
         } else {
             navbarUser.style.display = 'none';
         }
     });
 </script>
