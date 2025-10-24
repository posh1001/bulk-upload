<aside class="bg-white rounded-2xl shadow p-6 w-full">
    <div class="flex flex-wrap items-center justify-between mb-4">
        <h3 class="text-lg font-semibold flex items-center gap-2 min-w-0">
            <svg class="w-5 h-5 text-orange-500 shrink-0" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                <path d="M3 5h18M3 12h18M3 19h18" />
            </svg>
            <span class="truncate">Recent Uploads</span>
        </h3>
    </div>

    <div class="space-y-3">
        @forelse($recentUploads as $up)
            <div class="flex flex-wrap sm:flex-nowrap items-center justify-between p-3 rounded-lg border border-gray-100 bg-gray-50">
                <div class="flex-1 mr-3 overflow-hidden min-w-0 max-w-full">
                    <div class="font-semibold text-gray-800 truncate">
                        {{ $up->original_filename ?? 'Uploaded file' }}
                    </div>
                    <div class="text-xs text-gray-500 mt-1 truncate">
                        {{ $up->department }} • {{ $up->uploader_name ?? 'Unknown' }}
                    </div>
                    <div class="text-[11px] text-gray-400 mt-1">
                        {{ optional($up->uploaded_at ?? $up->created_at)->diffForHumans() }}
                    </div>
                </div>

                @auth
                    <a href="{{ route('bulk-upload.download', $up->id) }}"
                        class="inline-flex items-center p-2 rounded-lg hover:bg-orange-100 transition shrink-0 mt-2 sm:mt-0"
                        title="Download file">
                        <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-2M7 9l5-5 5 5M12 4v12" />
                        </svg>
                    </a>
                @else
                    <a href="{{ route('login') }}"
                        class="inline-flex items-center p-2 rounded-lg hover:bg-orange-100 transition shrink-0 mt-2 sm:mt-0"
                        title="Login required to download">
                        <svg class="w-5 h-5 text-orange-500" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 11c1.657 0 3-1.343 3-3V7a3 3 0 10-6 0v1c0 1.657 1.343 3 3 3z" />
                            <rect x="5" y="11" width="14" height="10" rx="2" ry="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                @endauth
            </div>
        @empty
            <div class="text-sm text-gray-500 italic">No uploads yet.</div>
        @endforelse
    </div>

    @if ($recentUploads->hasPages())
        <div class="flex flex-wrap justify-between items-center text-xs text-gray-500 mt-3">
            @if ($recentUploads->onFirstPage())
                <span class="opacity-50 mb-2 sm:mb-0">« Prev</span>
            @else
                <a href="{{ $recentUploads->previousPageUrl() }}" class="hover:text-orange-600 transition mb-2 sm:mb-0">« Prev</a>
            @endif

            @if ($recentUploads->hasMorePages())
                <a href="{{ $recentUploads->nextPageUrl() }}" class="hover:text-orange-600 transition">Next »</a>
            @else
                <span class="opacity-50">Next »</span>
            @endif
        </div>
    @endif
</aside>
