<x-layout>
    <x-slot:title>
        {{ $title }}
    </x-slot:title>
    <div class="bg-[#F4F5F5] min-h-full mx-auto p-7">
       <h1 class="text-3xl lg:text-5xl flex justify-center font-bold min-h-full mt-10 text-gray-800">Let's begin our story.</h1>
            <h2 class="text-gray-500 flex justify-center font-light mt-5">Created of Tech:</h2>
            <div class="flex justify-center gap-4 mt-4">
                <a class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300" href="https://laravel.com/" target="__blank">
                <img class="h-14 w-14" src="{{ Vite::asset('resources/images/laravel.svg') }}"
                     alt="Company"></a>
                <a class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300" href="https://vitejs.dev/" target="__blank">
                <img class="h-14 w-14" src="{{ Vite::asset('resources/images/vite.svg') }}"
                     alt="Company"></a>
                <a class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300" href="https://tailwindcss.com/" target="__blank">
                <img class="h-16 w-16" src="{{ Vite::asset('resources/images/tailwind.svg') }}"
                     alt="Company"></a>
                <a class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300" href="https://quilljs.com/" target="__blank">
                <img class="h-16 w-16" src="{{ Vite::asset('resources/images/quil.svg') }}"
                     alt="Company"></a>
            </div>
        </div>
</x-layout>
