   @include('partials.navbar')
<br>
<br>
<x-layouts.app>

   <header class="flex flex-wrap md:flex-nowrap items-center justify-between gap-6 mb-8">
    <div class="flex flex-wrap sm:flex-nowrap items-center gap-4 flex-1 min-w-0">
        <div
            class="w-16 h-16 rounded-2xl flex items-center justify-center bg-gradient-to-tr from-orange-500 to-amber-600 shadow-lg shrink-0">
            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" stroke-width="1.5"
                stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M12 16V4m0 0L8 8m4-4 4 4" />
                <path d="M4 16v4h16v-4" />
            </svg>
        </div>

        <div class="min-w-0">
            <h1 class="text-2xl sm:text-3xl font-semibold text-gray-800 truncate">
                Departmental Bulk Upload
            </h1>
            <p class="text-sm text-gray-600">
                Upload any spreadsheet — preview recent uploads in real time.
            </p>
        </div>
    </div>

    @auth
<div class="flex items-center gap-4 w-full sm:w-auto justify-between sm:justify-end">
    <div class="text-right flex-1 sm:flex-none min-w-0">
        <div class="text-xs text-gray-400">Signed in as</div>
        <div class="font-medium text-gray-800 truncate">
            {{ auth()->user()->name }}
        </div>
    </div>

    <form method="POST" action="{{ route('logout') }}" class="shrink-0">
        @csrf
        <button type="submit"
            class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-orange-500 hover:bg-orange-600 text-white shadow-md transition">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 12h4" />
            </svg>
            <span class="text-sm font-medium">Logout</span>
        </button>
    </form>
</div>
@endauth

</header>

    {{-- toast --}}
    <x-toast />

    <div class="min-h-screen bg-gradient-to-br from-orange-50 to-orange-100 p-6" x-data="{ open: false, selected: null }"
        @keydown.escape.window="open = false; selected = null">
        <div class="max-w-6xl mx-auto">

            @if (session('success'))
                <div class="mb-4 p-3 rounded-lg bg-green-100 text-green-800 text-sm">
                    {{ session('success') }}
                </div>
            @endif

            <main class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                <!-- Upload card -->
                <section class="bg-white rounded-2xl shadow p-6">
                    <h2 class="text-lg font-semibold mb-4 flex items-center gap-2">
                        <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-2" />
                            <path d="M7 9l5-5 5 5M12 4v12" />
                        </svg>
                        Upload Department Data
                    </h2>

                    <form action="{{ route('bulk-upload.store') }}" method="POST" enctype="multipart/form-data"
                        class="space-y-4" x-data="{ fileName: '' }">
                        @csrf

                        <div>
                            <label class="text-sm text-gray-700">Department</label>
                            <input name="department" value="{{ old('department') }}" type="text"
                                placeholder="e.g., Finance"
                                class="mt-1 block w-full rounded-lg border-gray-200 shadow-sm p-3 focus:ring-orange-500 focus:border-orange-500">
                        </div>

                        <div>
                            <label class="text-sm text-gray-700">Your name</label>
                            <input name="uploader_name" value="{{ old('uploader_name') }}" type="text"
                                placeholder="e.g., Jane Doe"
                                class="mt-1 block w-full rounded-lg border-gray-200 shadow-sm p-3 focus:ring-orange-500 focus:border-orange-500">
                        </div>

                        {{-- Enhanced file upload UI --}}
                        <div>
                            <label class="text-sm text-gray-700">Upload File</label>

                            <label for="fileUpload"
                                class="flex items-center gap-3 px-4 py-3 mt-2 border border-dashed border-orange-400 rounded-xl cursor-pointer hover:bg-orange-50 transition">
                                <svg class="w-6 h-6 text-orange-500 flex-shrink-0" fill="none" stroke="currentColor"
                                    stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 4v12m0 0l-4-4m4 4l4-4m-6 8h8a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2h2" />
                                </svg>

                                <span class="text-sm text-gray-600 truncate"
                                    x-text="fileName || 'Click to choose a file (CSV / XLS / XLSX)'"></span>

                                {{-- Cancel button --}}
                                <button type="button" x-show="fileName" @click="fileName=''; $refs.fileInput.value=''"
                                    class="ml-auto text-xs text-red-500 hover:text-red-700">
                                    ✕
                                </button>
                            </label>

                            <input id="fileUpload" name="file" type="file" x-ref="fileInput"
                                @change="fileName = $event.target.files[0]?.name || ''" class="hidden">
                        </div>


                        <div class="flex items-center gap-3">
                            <button type="submit"
                                class="px-4 py-2 rounded-full bg-orange-500 hover:bg-orange-600 text-white font-semibold shadow transition text-sm">
                                Upload
                            </button>
                        </div>
                    </form>

                </section>

                <!-- Recent uploads -->
                <x-aside />
            </main>
        </div>
    </div>
</x-layouts.app>
 <footer class="bg-white py-6">
        <div class="max-w-7xl mx-auto px-6 text-center text-sm text-gray-500">
            <p>© {{ date('Y') }} CELZ5 Database Upload. All rights reserved.</p>
        </div>
    </footer>
