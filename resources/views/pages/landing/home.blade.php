<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    <x-layout-landing>
        <x-hero-landing title="Dinas Pendidikan dan Kebudayaan 
Provinsi Lampung"
            desc="Bidang Pembinaan Pendidikan Khusus" ref="#section2"
            imgPath="{{ asset('assets/landing/bg-utama.png') }}" butTitle="Selengkapnya" />
        <div id="section1" class="w-full justify-center items-start bg-[#C4DDDE]">
            <div class="w-full flex p-20">
                <img src="assets/landing/disabilitas.png" alt="" class="w-[50%] h-[40%]">
                <div class="pl-16">
                    <h1 class="text-5xl font-bold text-black pb-10">Apa itu Disabilitas ?</h1>
                    <p class="text-lg font-thin text-black text-justify">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam est autem, numquam ipsam
                        ratione veniam, nobis maiores placeat, earum repellendus harum quisquam. Odio, consequatur.
                        Placeat alias voluptatum nesciunt quia totam delectus incidunt vitae inventore sapiente tempore
                        nostrum maxime, quo ducimus. Ab tempora unde placeat qui nesciunt temporibus asperiores ullam.
                        Ipsa.
                    </p>
                </div>
            </div>
        </div>
        <div id="section2" class="w-full justify-center items-start bg-[#EEEFF4]">
            <div class="w-full p-20">
                <div class="text-center items-center">
                    <h1 class="text-5xl font-bold text-black pb-10">Jenis Disabilitas, Penyebab, dan Penanganan</h1>
                    <p class="text-lg font-thin text-black text-justify">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam est autem, numquam ipsam
                        ratione veniam, nobis maiores placeat, earum repellendus harum quisquam. Odio, consequatur.
                        Placeat alias voluptatum nesciunt quia totam delectus incidunt vitae inventore sapiente tempore
                        nostrum maxime, quo ducimus. Ab tempora unde placeat qui nesciunt temporibus asperiores ullam.
                        Ipsa.
                    </p>
                </div>
            </div>
        </div>
        <div id="section3" class="w-full justify-center items-start bg-[#C4DDDE]">
            <div class="w-full flex p-20">
                <div class="pl-16">
                    <h1 class="text-5xl font-bold text-black pb-10">Apa itu Disabilitas ?</h1>
                    <p class="text-lg font-thin text-black text-justify">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam est autem, numquam ipsam
                        ratione veniam, nobis maiores placeat, earum repellendus harum quisquam. Odio, consequatur.
                        Placeat alias voluptatum nesciunt quia totam delectus incidunt vitae inventore sapiente tempore
                        nostrum maxime, quo ducimus. Ab tempora unde placeat qui nesciunt temporibus asperiores ullam.
                        Ipsa.
                    </p>
                </div>
                <img src="assets/landing/disabilitas.png" alt="" class="w-[50%] h-[40%]">
            </div>
        </div>
    </x-layout-landing>
</body>

</html>
