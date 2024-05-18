<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class=" bg-[#F4F5F5] h-screen">
        <div class="inline-block max-w-full">
            <div class="mx-14 lg:mx-64 md:mx-32 min-w-full sm:max-w-screen-md mt-24">
                <div class="bg-white p-7 shadow-lg border rounded-lg">
                    <x-form></x-form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
