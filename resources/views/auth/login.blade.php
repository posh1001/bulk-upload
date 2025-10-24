<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Celz5 Database Upload</title>
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="min-h-screen bg-gradient-to-br from-orange-100 via-orange-50 to-white flex flex-col pt-24">

    <!-- Fixed Navbar -->
    <nav class="fixed top-0 left-0 w-full bg-white/70 backdrop-blur-md border-b border-orange-100 z-50">
        <div class="flex items-center justify-between max-w-7xl mx-auto px-6 py-4">
            <a href="/" class="flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-orange-600" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                </svg>
                <h1 class="text-2xl font-bold text-orange-600">CELZ5</h1>
            </a>
        </div>
    </nav>

    <!-- Login Container -->
    <div class="flex flex-1 items-center justify-center p-6">
        <div class="bg-white/80 backdrop-blur-xl shadow-2xl border border-orange-100 rounded-2xl p-10 w-full max-w-md space-y-8">

            <!-- Logo -->
            <div class="text-center space-y-2">
                <div class="flex justify-center mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 text-orange-500"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.5 10.5V7a4.5 4.5 0 10-9 0v3.5m-1.25 0h11.5A1.25 1.25 0 0120 11.75v7.5A1.75 1.75 0 0118.25 21H5.75A1.75 1.75 0 014 19.25v-7.5A1.25 1.25 0 015.25 10.5z" />
                    </svg>
                </div>
                <h2 class="text-3xl font-semibold text-gray-800">Sign in</h2>
                <p class="text-sm text-gray-500">
                    Access the <span class="text-orange-600 font-semibold">Celz5 Upload System</span>
                </p>
            </div>

            <!-- Form -->
            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" name="email" required autofocus
                        class="w-full px-4 py-2 border-gray-300 rounded-lg focus:ring-orange-400 focus:border-orange-500 text-sm"
                        placeholder="you@example.com" />
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div x-data="{ show: false }">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <div class="relative">
                        <input :type="show ? 'text' : 'password'" name="password" required
                            class="w-full px-4 py-2 border-gray-300 rounded-lg focus:ring-orange-400 focus:border-orange-500 text-sm"
                            placeholder="••••••••" />
                        <button type="button" @click="show = !show"
                            class="absolute inset-y-0 right-3 flex items-center text-gray-400 hover:text-gray-600 text-sm">
                            <span x-text="show ? 'Hide' : 'Show'"></span>
                        </button>
                    </div>
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Button -->
                <button type="submit"
                    class="w-full bg-orange-500 hover:bg-orange-600 text-white py-2 rounded-lg font-semibold shadow transition">
                    Sign In
                </button>
            </form>
        </div>
    </div>

</body>

</html>
