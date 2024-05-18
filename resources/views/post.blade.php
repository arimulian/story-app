<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="lg:px-8 flex justify-center">
        <div class="mx-auto py-16 max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">{{ $article->title }}</h1>
                <div class="flex my-3">
                    <p class="text-gray-500 text-sm">{{ $article->author }}</p>
                    <p class="text-sm mx-1">|</p>
                    <p class="text-gray-500 text-sm">{{ (new \Carbon\Carbon($article->created_at))->format('d M Y')
                    }}</p>
                </div>
                <p class="my-10">{{ $article->body }}</p>
                <a href="{{ route('blog') }}" class="hover:underline text-blue-600">Back</a>
            </div>
        </div>
    </div>
</x-layout>
