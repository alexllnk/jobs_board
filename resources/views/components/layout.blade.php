<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--<script src="https://cdn.tailwindcss.com"></script>--}}
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
        @auth
            <div>
                <a href="/offers/create"
                   class="bg-blue-400 hover:bg-blue-600 rounded text-white px-4 py-2 hover:border-amber-500/50 hover:border">post
                    an offer</a>
            </div>
        @endauth
        <div class="grid grid-cols-2 items-center gap-2 py-10">
            @if (Route::has('login'))
                <nav class="-mx-3 flex flex-1 justify-end font-bold">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-black/70 dark:hover:text-black/90 dark:focus-visible:ring-white"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-black/70 dark:hover:text-black/90 dark:focus-visible:ring-white"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-black/70 dark:hover:text-black/90 dark:focus-visible:ring-white"
                            >
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>
    </nav>
    <main class="mt-10 max-w-[986px] m-auto">
        {{ $slot }}
    </main>
</div>
</body>
</html>
