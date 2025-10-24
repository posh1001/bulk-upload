<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{ config('app.name', 'Department Bulk Upload') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />
    @vite(["resources/css/app.css", "resources/js/app.js"])
    @livewireStyles
</head>
<body class="antialiased bg-gray-50 text-gray-900 min-h-screen flex flex-col font-inter">

    <main class="flex-1">
        <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
        <div x-data="{ show: false, message: '', type: 'success' }" @flash.window="show = true; message = $event.detail.message; type = $event.detail.type ?? 'success'; setTimeout(() => show = false, 3500)">
        <template x-if="show">
            <div x-transition class="fixed top-4 right-4 px-4 py-2 rounded shadow text-white"
                :class="{ 'bg-green-500': type === 'success', 'bg-red-500': type === 'error', 'bg-yellow-500': type === 'warning', 'bg-blue-500': type === 'info' }"
            >
                <span x-text="message"></span>
            </div>
        </template>
    </div>
    </main>

    @livewireScripts

    @if (session('flash'))
    <script>
        window.dispatchEvent(new CustomEvent('flash', {
            detail: @json(session('flash'))
        }));
    </script>
    @endif
</body>
</html>
