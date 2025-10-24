<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CELZ5 Database Upload</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gradient-to-br from-orange-50 via-white to-orange-100 text-gray-800 antialiased">

    <!-- Navbar -->
    <nav class="flex items-center justify-between max-w-7xl mx-auto px-6 py-4">
        <a href="/">
        <div class="flex items-center space-x-2">
             <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-orange-600" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 4v16m8-8H4" />
            </svg>
            <h1 class="text-2xl font-bold text-orange-600">CELZ5</h1>

        </div>
          </a>
        <div class="hidden md:flex space-x-8 text-sm font-medium">
            <a href="#features" class="hover:text-orange-600 transition">Features</a>
            <a href="#how" class="hover:text-orange-600 transition">How It Works</a>
            <a href="#contact" class="hover:text-orange-600 transition">Contact</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between px-6 py-20">
        <div class="max-w-xl space-y-6">
            <h2 class="text-4xl md:text-5xl font-extrabold text-gray-800 leading-tight">
                Simplify Your <span class="text-orange-600">Department Data Uploads</span>
            </h2>
            <p class="text-gray-600 text-lg">
                CELZ5 DD Upload is a powerful and elegant tool for managing department data
                with ease. Upload, process, and monitor your department databases in one seamless dashboard.
            </p>
            <div class="flex space-x-4">
                <a href="/bulk-upload"
                    class="bg-orange-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-orange-700 transition shadow-md">
                    Get Started
                </a>
                <a href="#features"
                    class="border border-orange-500 text-orange-600 px-6 py-3 rounded-lg font-semibold hover:bg-orange-50 transition">
                    Learn More
                </a>
            </div>
        </div>

        <div class="mt-10 md:mt-0">
            <img src="/images/db.png"
                alt="Database Upload Illustration" class="w-full max-w-md mx-auto">
        </div>
    </section>

    <!-- Features -->
    <section id="features" class="bg-white py-16">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h3 class="text-3xl font-bold text-gray-800 mb-10">Why Choose DD Uploads?</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="p-6 bg-orange-50 rounded-xl shadow hover:shadow-lg transition">
                    <div class="flex justify-center mb-4">
                        <svg class="w-10 h-10 text-orange-600" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 20h9M12 4h9m-9 8h9M3 4h.01M3 12h.01M3 20h.01" />
                        </svg>
                    </div>
                    <h4 class="text-lg font-semibold mb-2 text-gray-700">Seamless Uploads</h4>
                    <p class="text-gray-500 text-sm">
                        Upload Excel, CSV, or XLSX files effortlessly. Your data is processed and stored securely.
                    </p>
                </div>

                <div class="p-6 bg-orange-50 rounded-xl shadow hover:shadow-lg transition">
                    <div class="flex justify-center mb-4">
                        <svg class="w-10 h-10 text-orange-600" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 7h18M3 12h18m-7 5h7" />
                        </svg>
                    </div>
                    <h4 class="text-lg font-semibold mb-2 text-gray-700">Real-Time Tracking</h4>
                    <p class="text-gray-500 text-sm">
                        See upload status instantly—whether your file is pending, processed, or failed.
                    </p>
                </div>

                <div class="p-6 bg-orange-50 rounded-xl shadow hover:shadow-lg transition">
                    <div class="flex justify-center mb-4">
                        <svg class="w-10 h-10 text-orange-600" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13 16h-1v-4h-1m1-4h.01M12 2a10 10 0 1 1-10 10A10 10 0 0 1 12 2z" />
                        </svg>
                    </div>
                    <h4 class="text-lg font-semibold mb-2 text-gray-700">Secure & Reliable</h4>
                    <p class="text-gray-500 text-sm">
                        Your data is stored securely using modern Laravel encryption and validation techniques.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section id="how" class="py-20 bg-gradient-to-r from-orange-50 via-white to-orange-100">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h3 class="text-3xl font-bold text-gray-800 mb-10">How It Works</h3>
            <div class="grid md:grid-cols-3 gap-10">
                <div class="p-6">
                    <div class="flex justify-center mb-4">
                        <div class="w-12 h-12 flex items-center justify-center bg-orange-100 rounded-full text-orange-600 font-bold">1</div>
                    </div>
                    <h4 class="font-semibold text-gray-700 mb-2">Upload Your File</h4>
                    <p class="text-gray-500 text-sm">Choose your department and upload your Excel or CSV file securely.</p>
                </div>
                <div class="p-6">
                    <div class="flex justify-center mb-4">
                        <div class="w-12 h-12 flex items-center justify-center bg-orange-100 rounded-full text-orange-600 font-bold">2</div>
                    </div>
                    <h4 class="font-semibold text-gray-700 mb-2">Automatic Processing</h4>
                    <p class="text-gray-500 text-sm">DD Uploads processes your data instantly using built-in Excel import tools.</p>
                </div>
                <div class="p-6">
                    <div class="flex justify-center mb-4">
                        <div class="w-12 h-12 flex items-center justify-center bg-orange-100 rounded-full text-orange-600 font-bold">3</div>
                    </div>
                    <h4 class="font-semibold text-gray-700 mb-2">Track & Download</h4>
                    <p class="text-gray-500 text-sm">Monitor upload progress and download templates anytime.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="bg-white border-t py-6">
        <div class="max-w-7xl mx-auto px-6 text-center text-sm text-gray-500">
            <p>© {{ date('Y') }} CELZ5 Database Upload. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
