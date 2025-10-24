@props(['show' => null, 'edit' => null, 'delete' => null])

<div class="px-5 py-5 border-t border-gray-200 bg-gray-100/30 dark:border-gray-800 dark:bg-gray-900">
    <div class="flex items-center gap-2">
        @if ($show)
            <a href="{{ $show }}"
                class="flex-1 inline-flex items-center justify-center gap-2 px-4 py-1.5 text-sm font-medium rounded-lg 
                   bg-white border border-gray-200 dark:bg-gray-800 text-gray-700 dark:text-gray-300 
                   hover:bg-gray-100 dark:border-gray-700 dark:hover:bg-gray-700 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>
                Detail
            </a>
        @endif

        @if ($edit)
            <a href="{{ $edit }}"
                class="inline-flex items-center justify-center p-2 rounded-lg 
                   bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 
                   hover:bg-blue-200 dark:hover:bg-blue-900/50 transition-colors"
                title="Edit">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                </svg>
            </a>
        @endif

        @if ($delete)
            <form action="{{ $delete }}" method="POST"
                onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');" class="inline-block">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="inline-flex items-center justify-center p-2 rounded-lg 
                       bg-red-100 dark:bg-red-900/30 text-red-600 dark:text-red-400 
                       hover:bg-red-200 dark:hover:bg-red-900/50 transition-colors"
                    title="Hapus">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </button>
            </form>
        @endif
    </div>
</div>
