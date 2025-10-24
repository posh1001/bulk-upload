<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     @vite('resources/css/app.css')
     <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body  class="bg-gradient-to-br from-orange-50 via-white to-orange-100 text-gray-800 antialiased">
      @include('partials.navbar')
    <section class="max-w-7xl mx-auto px-6 py-20">
    <h1 class="text-4xl font-bold text-center text-gray-800 mb-12">Powerful Features at a Glance</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
        <div class="p-6 bg-white rounded-xl shadow hover:shadow-lg transition text-center">
            <div class="flex justify-center mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-orange-600" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 7v10a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V7M3 7l7.89 5.26a2 2 0 0 0 2.22 0L21 7" />
                </svg>
            </div>
            <h2 class="text-lg font-semibold text-orange-600 mb-2">Seamless Uploads</h2>
            <p class="text-gray-600 text-sm">
                Upload Excel, CSV, or XLSX files effortlessly with error validation and structured import handling.
            </p>
        </div>

        <div class="p-6 bg-white rounded-xl shadow hover:shadow-lg transition text-center">
            <div class="flex justify-center mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-orange-600" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0z" />
                </svg>
            </div>
            <h2 class="text-lg font-semibold text-orange-600 mb-2">Real-Time Tracking</h2>
            <p class="text-gray-600 text-sm">
                Monitor uploads live — track pending, completed, or failed imports in seconds.
            </p>
        </div>

        <div class="p-6 bg-white rounded-xl shadow hover:shadow-lg transition text-center">
            <div class="flex justify-center mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-orange-600" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 15v2m-6 4h12a2 2 0 0 0 2-2v-7a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 12v7a2 2 0 0 0 2 2z" />
                </svg>
            </div>
            <h2 class="text-lg font-semibold text-orange-600 mb-2">Secure Data</h2>
            <p class="text-gray-600 text-sm">
                Built on Laravel’s robust validation and storage security best practices.
            </p>
        </div>
    </div>
</section>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
<footer class="bg-white border-t">
    <div class="max-w-7xl mx-auto px-6 text-center text-xs text-gray-500">
        <p>© {{ date('Y') }} CELZ5 Database Upload. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
