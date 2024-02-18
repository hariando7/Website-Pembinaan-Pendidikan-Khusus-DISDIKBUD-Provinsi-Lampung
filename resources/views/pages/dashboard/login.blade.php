<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

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
                <x-buttitle-landing ref="" color="#FA8F21" width="[10rem]" title="Selengkapnya"
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
                        <div class="text-[24px] font-bold">Login</div>
                        <div class="mt-2">
                            <div class="text-base">Masukkan Email Password</div>
                        </div>
                    </div>
                    <div class="text-black">
                        <div class="mb-2">
                            <label class="block text-black">
                                <span class="block text-base text-black mb-1">
                                    Email
                                </span>
                                <input type="email" id="email" name="email"
                                    class="h-[36px] px-3 py-2 bg-transparent border border-black shadow-sm placeholder-black focus:outline-none focus:border-[#FA8F21] focus:ring-[#FA8F21] block w-full rounded-md sm:text-sm focus:ring-1"
                                    placeholder="example@company.com"
                                    oninvalid="this.setCustomValidity('Input your email address'); alertInputRequired()"
                                    oninput="this.setCustomValidity('')" maxlength="255" value="{{ old('email') }}"
                                    required />
                            </label>
                        </div>
                        <div class="mb-2">
                            <label class="block">
                                <span class="block text-base text-back mb-1">
                                    Password
                                </span>
                                <div class="password-container">
                                    <input type="password" name="password" id="password"
                                        class="h-[36px] px-3 py-2 border shadow-sm border-black placeholder-black focus:outline-none focus:border-[#FA8F21] focus:ring-[#FA8F21] block w-full rounded-md sm:text-sm focus:ring-1 bg-transparent"
                                        placeholder="*********"
                                        oninvalid="this.setCustomValidity('Input your password, at least 6 character'); alertInputRequired()"
                                        oninput="this.setCustomValidity('')" minLength="6" maxlength="255" required />
                                    <button type="button" class="eye-icon" id="eye-open"
                                        onclick="togglePasswordVisibility('open')">
                                        <svg id="eye-open" width="1em" height="1em" viewBox="0 0 16 16"
                                            class="bi bi-eye-fill cursor-pointer text-black" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                            <path fill-rule="evenodd"
                                                d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                        </svg>
                                    </button>
                                    <button type="button" class="eye-icon" id="eye-close"
                                        onclick="togglePasswordVisibility('close')">
                                        <svg id="eye-icon" width="1em" height="1em" viewBox="0 0 16 16"
                                            class="bi bi-eye-fill text-black" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z" />
                                            <path
                                                d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z" />
                                            <path fill-rule="evenodd"
                                                d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z" />
                                        </svg>
                                    </button>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="justify-start inline-flex mb-5">
                        <a href="/forgetPassword">
                            <div class="text-black text-base">Lupa Password ?</div>
                        </a>
                    </div>
                    <button type="submit" id="signIn"
                        class="w-full h-15 text-base text-white bg-[#FA8F21] hover:bg-[#D87815] focus:ring-4 focus:ring-blue-300 px-5 py-2.5 mr-2 mb-2 dark:bg-[#FA8F21] dark:hover:bg-[#D87815] rounded transition duration-300">Masuk</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
