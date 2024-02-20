<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OTP</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="assets/landing/prov-lampung2.svg">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.6.0/dist/full.css" rel="stylesheet" type="text/css" />

    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Slick Carousel JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
        // fungtion lain
        function togglePasswordVisibility(action) {
            var passwordInput = document.getElementById("password");
            var eyeOpenIcon = document.getElementById("eye-open");
            var eyeCloseIcon = document.getElementById("eye-close");
            if (action === "open") {
                passwordInput.type = "text";
                eyeOpenIcon.style.display = "none";
                eyeCloseIcon.style.display = "block";
            } else {
                passwordInput.type = "password";
                eyeOpenIcon.style.display = "block";
                eyeCloseIcon.style.display = "none";
            }
        }
    </script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .password-container {
            position: relative;
        }

        .eye-icon {
            display: inline-block;
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }

        #eye-close {
            display: none;
        }

        #customModal {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }

        #customModal .bg-white {
            max-width: 320px;
        }

        #customModal .bg-white {
            margin-left: auto;
            margin-right: auto;
        }

        @keyframes slideIn {
            from {
                transform: translateX(100%);
            }

            to {
                transform: translateX(0);
            }
        }

        @keyframes slideOut {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(100%);
            }
        }

        .slide-in {
            animation: slideIn 0.5s forwards;
        }

        .slide-out {
            animation: slideOut 0.5s forwards;
        }
    </style>

</head>

<body>
    <div class="bg-[url({{ 'assets/landing/disdikbud.png' }})] w-full min-h-screen bg-cover bg-no-repeat bg-[#000000]/[0.10] bg-blend-overlay"
        style="background-size: 100% 100%;">
        <div class="flex justify-between p-5">
            <div class="">
                <img src="assets/landing/prov-lampung.png" alt="" class="w-full h-[80%] lg:w-full lg:h-full">
            </div>
            <div class="">
                <x-buttitle-landing ref="/" color="#FA8F21" width="[10rem]" title="Home"
                    extendClass="text-white text-center py-2 lg:py-3 hover:bg-[#D87815]" />
            </div>
        </div>
        <div class="lg:w-1/2 lg:p-10 relative justify-center items-center m-auto">
            <div class="absolute inset-0 bg-white opacity-50 rounded-lg"></div>
            <div class="relative z-10 text-black text-[24px] items-center justify-center text-center font-bold">
                Selamat Datang Di Dashboard SLB Bidang Pembinaan Pendidikan Khusus
            </div>
            <form action="{{ url('/login') }}" method="POST"
                class="relative w-full flex-col justify-between h-full flex mt-2 lg:pl-20 lg:pr-20">
                <div class="m-auto flex flex-col w-full">
                    <div class="heading mb-2 text-center text-black">
                        <div class="text-[24px] font-bold">Verifikasi Email</div>
                        <div class="mt-2">
                            <div class="text-base">Masukkan Kode OTP Anda</div>
                        </div>
                    </div>
                    <div class="text-black">
                        <div class="mt-2">
                            <form class="max-w-sm mx-auto">
                                <div class="flex mb-2 space-x-2 rtl:space-x-reverse justify-center items-center m-auto">
                                    <div>
                                        <label for="code-1" class="sr-only">First code</label>
                                        <input type="text" maxlength="1" data-focus-input-init
                                            data-focus-input-next="code-2" id="code-1"
                                            class="block w-9 h-9 py-3 text-sm font-extrabold text-center text-gray-900 bg-white border border-gray-300 rounded-lg focus:ring-[#FA8F21] focus:border-[#FA8F21] dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-[#FA8F21] dark:focus:border-[#FA8F21]"
                                            required />
                                    </div>
                                    <div>
                                        <label for="code-2" class="sr-only">Second code</label>
                                        <input type="text" maxlength="1" data-focus-input-init
                                            data-focus-input-prev="code-1" data-focus-input-next="code-3" id="code-2"
                                            class="block w-9 h-9 py-3 text-sm font-extrabold text-center text-gray-900 bg-white border border-gray-300 rounded-lg focus:ring-[#FA8F21] focus:border-[#FA8F21] dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-[#FA8F21] dark:focus:border-[#FA8F21]"
                                            required />
                                    </div>
                                    <div>
                                        <label for="code-3" class="sr-only">Third code</label>
                                        <input type="text" maxlength="1" data-focus-input-init
                                            data-focus-input-prev="code-2" data-focus-input-next="code-4" id="code-3"
                                            class="block w-9 h-9 py-3 text-sm font-extrabold text-center text-gray-900 bg-white border border-gray-300 rounded-lg focus:ring-[#FA8F21] focus:border-[#FA8F21] dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-[#FA8F21] dark:focus:border-[#FA8F21]"
                                            required />
                                    </div>
                                    <div>
                                        <label for="code-4" class="sr-only">Fourth code</label>
                                        <input type="text" maxlength="1" data-focus-input-init
                                            data-focus-input-prev="code-3" data-focus-input-next="code-5" id="code-4"
                                            class="block w-9 h-9 py-3 text-sm font-extrabold text-center text-gray-900 bg-white border border-gray-300 rounded-lg focus:ring-[#FA8F21] focus:border-[#FA8F21] dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-[#FA8F21] dark:focus:border-[#FA8F21]"
                                            required />
                                    </div>
                                    <div>
                                        <label for="code-5" class="sr-only">Fifth code</label>
                                        <input type="text" maxlength="1" data-focus-input-init
                                            data-focus-input-prev="code-4" data-focus-input-next="code-6" id="code-5"
                                            class="block w-9 h-9 py-3 text-sm font-extrabold text-center text-gray-900 bg-white border border-gray-300 rounded-lg focus:ring-[#FA8F21] focus:border-[#FA8F21] dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-[#FA8F21] dark:focus:border-[#FA8F21]"
                                            required />
                                    </div>
                                    <div>
                                        <label for="code-6" class="sr-only">Sixth code</label>
                                        <input type="text" maxlength="1" data-focus-input-init
                                            data-focus-input-prev="code-5" id="code-6"
                                            class="block w-9 h-9 py-3 text-sm font-extrabold text-center text-gray-900 bg-white border border-gray-300 rounded-lg focus:ring-[#FA8F21] focus:border-[#FA8F21] dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-[#FA8F21] dark:focus:border-[#FA8F21]"
                                            required />
                                    </div>
                                </div>
                                <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                                    Please introduce the 6
                                    digit code we sent via email.</p>
                            </form>
                        </div>
                    </div>
                    <button type="submit" id="signIn"
                        class="w-full h-15 text-base text-white bg-[#FA8F21] hover:bg-[#D87815] focus:ring-4 focus:ring-blue-300 px-5 py-2.5 mr-2 mb-2 dark:bg-[#FA8F21] dark:hover:bg-[#D87815] rounded transition duration-300">Verifikasi</button>
                    <a href="/login">
                        <div class="text-center text-black text-bold">Kirim Ulang</div>
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
