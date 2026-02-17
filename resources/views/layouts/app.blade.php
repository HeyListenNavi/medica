<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body class="min-h-screen flex flex-col relative bg-slate-100/50">
    <header class="px-6 pt-12 pb-6 flex justify-between items-end shrink-0 bg-white rounded-b-4xl">
        <div>
            <p class="text-[10px] font-bold text-emerald-500 uppercase tracking-widest mb-0.5">Domingo, 15 Feb</p>
            <h1 id="view-title" class="text-2xl font-bold tracking-tight">Agenda</h1>
        </div>
        <div class="flex items-center gap-3">
            <button
                class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center text-slate-400 border border-slate-100">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </button>
            <div
                class="w-10 h-10 rounded-full bg-emerald-500 flex items-center justify-center text-white text-[10px] font-bold ring-4 ring-emerald-50">
                HV
            </div>
        </div>
    </header>

    <main class="flex-1 overflow-y-auto px-6 pt-6 no-scrollbar pb-32 space-y-8">
        {{ $slot }}
    </main>

    <nav
        class="fixed bottom-0 left-0 right-0 bg-white border-t border-slate-50 px-6 py-6 flex justify-between items-center z-50">
        <!-- Left Side -->
        <div class="flex flex-1 justify-around">
            <a href="{{ route('home') }}" wire:navigate
                class="data-current:text-emerald-500 text-slate-200 transition-colors duration-200" id="nav-home">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                </svg>
            </a>
            <a href="{{ route('patients') }}" wire:navigate
                class="data-current:text-emerald-500 text-slate-200 transition-colors duration-200" id="nav-patients">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                </svg>
            </a>
        </div>

        <!-- Center FAB -->
        <div class="flex shrink-0 px-4">
            <button
                class="w-12 h-12 bg-emerald-500 rounded-2xl flex items-center justify-center text-white shadow-lg shadow-emerald-200 -mt-2 btn-animate">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                        d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                </svg>
            </button>
        </div>

        <!-- Right Side -->
        <div class="flex flex-1 justify-around">
            <a href="{{ route('quotes') }}" wire:navigate
                class="data-current:text-emerald-500 text-slate-200 transition-colors duration-200" id="nav-quotes">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z" />
                    <path fill-rule="evenodd"
                        d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"
                        clip-rule="evenodd" />
                </svg>
            </a>
            <a href="{{ route('management') }}" wire:navigate
                class="data-current:text-emerald-500 text-slate-200 transition-colors duration-200" id="nav-profile">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                        clip-rule="evenodd" />
                </svg>

            </a>
        </div>
    </nav>
    @livewireScripts
</body>

</html>
