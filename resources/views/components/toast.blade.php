@php
    $flash = session('flash');
@endphp

@if ($flash && isset($flash['message']))
    <div
        x-data="{ show: true }"
        x-show="show"
        x-init="setTimeout(() => show = false, 3000)"   {{-- 3 seconds (as you selected) --}}
        class="mb-4 px-4 py-3 rounded-lg flex items-center gap-3 shadow bg-orange-100 text-orange-700 text-sm"
    >
        @if ($flash['type'] === 'success')
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
            </svg>
        @elseif ($flash['type'] === 'error')
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        @else
            <svg class="w-5 h-5 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="10"/>
            </svg>
        @endif

        <span>{{ $flash['message'] }}</span>
    </div>
@endif
