<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How It Works | CELZ5 DD Upload</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-gradient-to-br from-orange-50 via-white to-orange-100 text-gray-800 antialiased">

    @include('partials.navbar')

    <section class="max-w-7xl mx-auto px-6 py-20">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-12">How DD Uploads Works</h1>

        <div class="grid md:grid-cols-3 gap-10">
            <div class="p-6 text-center">
                <div class="w-12 h-12 mx-auto flex items-center justify-center bg-orange-100 rounded-full text-orange-600 font-bold mb-4">1</div>
                <h4 class="font-semibold text-gray-700 mb-2">Upload Your File</h4>
                <p class="text-gray-500 text-sm">Select your department and upload your Excel or CSV.</p>
            </div>

            <div class="p-6 text-center">
                <div class="w-12 h-12 mx-auto flex items-center justify-center bg-orange-100 rounded-full text-orange-600 font-bold mb-4">2</div>
                <h4 class="font-semibold text-gray-700 mb-2">Automatic Processing</h4>
                <p class="text-gray-500 text-sm">Your file is validated and processed instantly.</p>
            </div>

            <div class="p-6 text-center">
                <div class="w-12 h-12 mx-auto flex items-center justify-center bg-orange-100 rounded-full text-orange-600 font-bold mb-4">3</div>
                <h4 class="font-semibold text-gray-700 mb-2">Track & Download</h4>
                <p class="text-gray-500 text-sm">View status and download department templates anytime.</p>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
     <footer id="contact" class="bg-white border-t py-6">
        <div class="max-w-7xl mx-auto px-6 text-center text-sm text-gray-500">
            <p>© {{ date('Y') }} CELZ5 Database Upload. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
