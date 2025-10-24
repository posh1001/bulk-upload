<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | CELZ5 DD Upload</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gradient-to-br from-orange-50 via-white to-orange-100 text-gray-800 antialiased">

    @include('partials.navbar')

    <section class="max-w-4xl mx-auto px-6 py-20">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-12">Contact Us</h1>

        <form action="#" method="POST" class="bg-white p-8 rounded-xl shadow-md space-y-6">
            @csrf
            <div>
                <label class="block text-gray-700 font-medium">Name</label>
                <input type="text" class="mt-2 w-full border rounded-lg p-3 focus:outline-none focus:border-orange-500">
            </div>

            <div>
                <label class="block text-gray-700 font-medium">Email</label>
                <input type="email" class="mt-2 w-full border rounded-lg p-3 focus:outline-none focus:border-orange-500">
            </div>

            <div>
                <label class="block text-gray-700 font-medium">Message</label>
                <textarea rows="5" class="mt-2 w-full border rounded-lg p-3 focus:outline-none focus:border-orange-500"></textarea>
            </div>

            <button type="submit" class="w-full bg-orange-600 text-white py-3 rounded-lg font-semibold hover:bg-orange-700 transition">
                Send Message
            </button>
        </form>
    </section>

    @include('partials.footer')

</body>
</html>
