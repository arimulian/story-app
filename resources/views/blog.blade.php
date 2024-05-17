<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="py-10 sm:py-16 bg-[#F4F5F5]">
        <div class="lg:px-8">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0">
                    <h2 class="flex items-center text-2xl sm: font-bold tracking-tight text-gray-900 sm:text-4xl ">From the story</h2>
                    <p class="mt-2 text-lg leading-8 text-gray-600">let's begin our journey.
                    </p>
                    <div class="flex mt-6 sm:justify-center">
                        <div class="flex-shrink-0">
                            <img class="h-14 w-14 border shadow rotate-90 bg-white mr-2 rounded-full" src="{{ Vite::asset('resources/images/logoV3.png') }}"
                                 alt="Company">
                        </div>
                            {{--card--}}
                        <div class="flex mb-10 sm:m-0 items-start gap-2.5">
                            <div class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 border-gray-200 bg-white rounded-e-xl rounded-l-3xl rounded-es-xl shadow-md">
                                <div class="flex items-center space-x-2 rtl:space-x-reverse">
                                    <span class="text-sm font-semibold text-gray-400">Just for information</span>
                                </div>
                                <p class="text-sm font-normal py-2.5 text-gray-700">Let's make a connection, for fun👋.
                                </p>
                            </div>
                        </div>
                    </div>
                        <div class="flex gap-4 mb-5 lg:mt-5 justify-center  lg:justify-end">
                            <a href="https://github.com/arimulian" class="border-2 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300 bg-[#F0EFEA] hover:bg-white shadow p-1 rounded-full" target="__blank">
                                <img class="h-10 w-10" src="{{ Vite::asset('resources/images/github.svg') }}" alt="github images">
                            </a>
                            <a href="https://medium.com/@arimul" class="border-2 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300 bg-[#F0EFEA] hover:bg-white shadow p-1 rounded-full" target="__blank">
                                <img class="h-10 w-10" src="{{ Vite::asset('resources/images/medium.svg') }}" alt="medium images">
                            </a>
                            <a href="https://www.linkedin.com/in/arimuliansyahmanurung/" class="border-2 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300 bg-[#F0EFEA] hover:bg-white shadow p-1 rounded-full" target="__blank">
                                <img class="h-10 w-10" src="{{ Vite::asset('resources/images/linkedin.svg') }}" alt="linkedin images">
                            </a>
                        </div>
                </div>
                <div
                    class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-10 border-t  pt-10  border-gray-300 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                    @foreach ($posts as $post)
                        <article class="flex max-w-xl flex-col items-start justify-between bg-white p-3 rounded-lg shadow-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                            <div class="flex items-center gap-x-4 text-xs">
                                <time  class="text-gray-500 text-xs">{{ $post->created_at->format('d M Y') }}</time>
                            </div>
                            <div class="group relative">
                                <h3
                                    class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                    <a href="article/{{ $post->slug }}">
                                        <span class="absolute inset-0"></span>
                                        {{ $post->title }}
                                    </a>
                                </h3>
                                <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">
                                    {{ $post->body }}
                                </p>
                            </div>
                            <div class="relative mt-8 flex items-center gap-x-4">
{{--                                <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"--}}
{{--                                    alt="" class="h-10 w-10 rounded-full bg-gray-50">--}}
                                <div class="text-sm leading-6">
                                    <p class="font-semibold text-gray-900">
                                        <a href="article/{{ $post->slug }}">
                                            <span class="absolute inset-0"></span>
                                            {{ $post->author }}
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</x-layout>
