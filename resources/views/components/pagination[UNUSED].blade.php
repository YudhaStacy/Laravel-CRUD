@props(['data'])

@if ($data->hasPages())
    <div class="mt-12 flex justify-center items-center gap-2 select-none">
        {{-- Tombol Previous --}}
        @if ($data->onFirstPage())
            <span
                class="px-4 py-2 text-sm font-medium rounded-lg border border-gray-300 dark:border-gray-700 text-gray-400 cursor-not-allowed">
                Previous
            </span>
        @else
            <a href="{{ $data->previousPageUrl() }}"
                class="px-4 py-2 text-sm font-medium rounded-lg border border-gray-300 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-900 transition-colors">
                Previous
            </a>
        @endif

        {{-- Nomor Halaman --}}
        @foreach ($data->getUrlRange(1, $data->lastPage()) as $page => $url)
            @if ($page == $data->currentPage())
                <span class="px-4 py-2 text-sm font-medium rounded-lg bg-black dark:bg-white text-white dark:text-black">
                    {{ $page }}
                </span>
            @else
                <a href="{{ $url }}"
                    class="px-4 py-2 text-sm font-medium rounded-lg border border-gray-300 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-900 transition-colors">
                    {{ $page }}
                </a>
            @endif
        @endforeach

        {{-- Tombol Next --}}
        @if ($data->hasMorePages())
            <a href="{{ $data->nextPageUrl() }}"
                class="px-4 py-2 text-sm font-medium rounded-lg border border-gray-300 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-900 transition-colors">
                Next
            </a>
        @else
            <span
                class="px-4 py-2 text-sm font-medium rounded-lg border border-gray-300 dark:border-gray-700 text-gray-400 cursor-not-allowed">
                Next
            </span>
        @endif
    </div>
@endif
