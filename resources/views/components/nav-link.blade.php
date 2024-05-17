    <!-- An unexamined life is not worth living. - Socrates -->
    {{-- <a {{ $attributes }}
        class="{{ $attributes['active'] ? 'bg-zinc-700 text-white block rounded-md px-3 py-2 text-sm font-medium' : 'text-gray-300 hover:bg-zinc-700 hover:text-white block rounded-md px-3 py-2 text-sm font-medium' }}"
        aria-current="{{ $attributes['active'] ? 'page' : false }}">{{ $slot }}</a> --}}
    <a {{ $attributes }}
        class="{{ request()->fullUrlIs(url($attributes['href'])) ? 'bg-[#F0EFEA] text-gray-800 block rounded-md px-3 py-2 text-sm font-medium' : 'text-gray-800 hover:bg-[#F0EFEA] block rounded-md px-3 py-2 text-sm font-medium' }}"
        aria-current="{{ $attributes['active'] ? 'page' : false }}">{{ $slot }}</a>
