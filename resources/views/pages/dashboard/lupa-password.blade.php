<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lupa Password</title>
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
                        <div class="text-[24px] font-bold">Lupa Password</div>
                        <div class="mt-2">
                            <div class="text-base">Masukkan Email</div>
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
                    </div>
                    <button type="submit" id="signIn" href="/otp"
                        class="w-full h-15 text-base text-white bg-[#FA8F21] hover:bg-[#D87815] focus:ring-4 focus:ring-blue-300 px-5 py-2.5 mr-2 mb-2 dark:bg-[#FA8F21] dark:hover:bg-[#D87815] rounded transition duration-300">Kirim</button>
                    <a href="/login">
                        <div class="text-center text-black text-bold">Kembali Ke Login</div>
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
