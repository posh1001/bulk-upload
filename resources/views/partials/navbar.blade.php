<!-- resources/views/partials/navbar.blade.php -->
<nav x-data="{ open: false }"
     x-init="$watch('open', v => { if(v) document.body.style.overflow = 'hidden'; else document.body.style.overflow = '' })"
     @keydown.escape.window="open = false"
     class="relative max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">

    <!-- Brand -->
    <a href="/" class="flex items-center space-x-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-orange-600" fill="none"
             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
        </svg>
        <h1 class="text-2xl font-bold text-orange-600">CELZ5</h1>
    </a>

    <!-- Desktop Links -->
    <div class="hidden md:flex space-x-8 text-sm font-medium">
        <a href="/features" class="hover:text-orange-600 transition">Features</a>
        <a href="/how" class="hover:text-orange-600 transition">How It Works</a>
    </div>

    <!-- Mobile Button -->
    <div class="md:hidden flex items-center">
        <button @click="open = !open" type="button"
                class="inline-flex items-center justify-center p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-400"
                :aria-expanded="open.toString()" aria-controls="mobile-menu">
            <span class="sr-only">Open main menu</span>

            <!-- Hamburger -->
            <svg x-show="!open" x-cloak xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-orange-600"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true"
                 x-transition:enter="transition ease-out duration-150"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-100"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>

            <!-- Close -->
            <svg x-show="open" x-cloak xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-orange-600"
                 fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true"
                 x-transition:enter="transition ease-out duration-150"
                 x-transition:enter-start="opacity-0 scale-95"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-100"
                 x-transition:leave-start="opacity-100 scale-100"
                 x-transition:leave-end="opacity-0 scale-95">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open"
         x-cloak
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         @click.away="open = false"
         id="mobile-menu"
         class="md:hidden absolute left-0 right-0 top-full mt-2 z-50 bg-white px-6 py-4 shadow-lg border-t"
         style="backdrop-filter: blur(4px);">
        <div class="flex flex-col space-y-4 text-sm font-medium">
            <a href="/features" class="block text-gray-700 hover:text-orange-600 transition">Features</a>
            <a href="/how" class="block text-gray-700 hover:text-orange-600 transition">How It Works</a>
        </div>
    </div>
</nav>
