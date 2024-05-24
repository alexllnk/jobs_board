<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>JBoard</title>
</head>
<body class="bg-gray-200 min-h-screen">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b-amber-500/50 border-b-2">
            <div><a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" class="max-w-20">
                </a></div>
            <div class="font-bold space-x-4">
                <x-nav-link href="/offers">Offers</x-nav-link>
                <x-nav-link href="/about">About</x-nav-link>
            </div>
            <div>
                <a href="/offers/create" class="bg-blue-400 hover:bg-blue-600 rounded text-white px-4 py-2 hover:border-amber-500/50 hover:border">post an offer</a>
            </div>
        </nav>
        <main class="mt-10 max-w-[986px] m-auto">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
