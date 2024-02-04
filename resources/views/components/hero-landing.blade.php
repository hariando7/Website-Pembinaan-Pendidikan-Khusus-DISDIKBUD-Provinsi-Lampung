<div
    class="bg-[url({{$imgPath}})] w-full min-h-screen bg-cover bg-no-repeat bg-[#000000]/[0.46] bg-blend-overlay flex justify-center items-center">
    <div class="w-4/5 flex flex-col justify-center items-center mt-10">
        <h1 class="text-4xl md:text-6xl font-bold text-white text-center">{{$title}}</h1>
        <p class="text-sm md:text-xl font-thin text-white text-center mt-4">{{$desc}}</p>
        <x-buttitle-landing ref="{{$ref}}" color="#FA8F21" width="[10rem]" title="{{$butTitle}}"
            extendClass="text-white text-center mt-6 py-3" />
    </div>
</div>
