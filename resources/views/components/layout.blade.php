<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ Vite::asset('resources/images/logo.png') }}" sizes="60X60"/>
    {{-- font inter --}}
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    {{-- alpine.js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    {{-- tailwind & editor.js --}}
    @vite(['resources/css/app.css'])

    <title>{{ $title }}</title>
</head>

<body class="h-full">
    <div class="min-h-full">
        <x-navbar />
        <main>

            {{ $slot }}

        </main>
    </div>


</body>

</html>
