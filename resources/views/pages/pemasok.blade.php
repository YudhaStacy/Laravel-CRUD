@extends('layouts.main')

@section('title', 'Pemasok')

@section('content')
    <div class="mb-8">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
            <div>
                <h2 class="text-3xl font-bold mb-1">Daftar Pemasok</h2>
                <p class="text-sm text-gray-600 dark:text-gray-400">{{ $total }} pemasok tersedia</p>
            </div>
            <div class="md:flex gap-3 items-center">
                <el-dropdown class="inline-block">
                    <button
                        class="inline-flex w-full justify-center gap-x-1.5 rounded-lg bg-white dark:bg-gray-900
       border border-gray-300 dark:border-gray-700 px-4 py-2 text-sm font-medium
       text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                        Tampilkan {{ request('per_page', 6) }} Data
                        <svg viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                            class="-mr-1 size-5 text-gray-500 dark:text-gray-400">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" />
                        </svg>
                    </button>

                    <el-menu anchor="bottom end" popover
                        class="origin-top-right rounded-lg bg-white dark:bg-gray-900 border border-gray-200 dark:border-gray-700
       shadow-lg transition data-closed:scale-95 data-closed:opacity-0 data-enter:duration-100 data-leave:duration-75">
                        <div class="py-1">
                            @foreach ([6, 24, 48, 100] as $limit)
                                <a href="{{ route(
                                    'pemasok.index',
                                    array_filter([
                                        'search' => request('search'),
                                        'per_page' => $limit,
                                    ]),
                                ) }}"
                                    class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800
                   rounded-md transition-colors {{ request('per_page', 6) == $limit ? 'bg-gray-100 dark:bg-gray-800 font-semibold' : '' }}">
                                    {{ $limit }} data
                                </a>
                            @endforeach
                        </div>
                    </el-menu>
                </el-dropdown>
                <form method="GET" action="{{ route('pemasok.index') }}" class="relative">
                    <input type="text" id="search" name="search" value="{{ request('search') }}"
                        placeholder="Cari pemasok..."
                        class="w-full md:w-64 px-4 py-2 text-sm rounded-lg border border-gray-300 dark:border-gray-700
                   bg-white dark:bg-gray-900 text-gray-700 dark:text-gray-200
                   placeholder-gray-400 dark:placeholder-gray-500
                   focus:outline-none focus:ring-2 focus:ring-gray-900 dark:focus:ring-gray-100 transition">
                    <svg class="absolute right-3 top-2 size-5 text-gray-400 dark:text-gray-500"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-4.35-4.35M17 10.5A6.5 6.5 0 1 1 10.5 4a6.5 6.5 0 0 1 6.5 6.5Z" />
                    </svg>
                </form>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach ($pemasok as $p)
            <div class="relative group">
                <div
                    class="overflow-hidden rounded-xl bg-white dark:bg-gray-900/70 border border-gray-200 dark:border-gray-800 transition-all duration-300 group-hover:shadow-xl group-hover:border-gray-300 dark:group-hover:border-gray-700 relative z-10">
                    <div
                        class="absolute bottom-0 right-0 w-full pointer-events-none h-1/2 bg-linear-to-tl from-gray-300/20 dark:from-gray-700/20 via-transparent to-transparent rounded-tr-2xl">
                    </div>
                    <div class="gap-2.5 p-5">
                        <h1 class="font-semibold text-xl mb-3 line-clamp-2 text-gray-900 dark:text-gray-100">
                            {{ $p->nama }}
                        </h1>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    {{ $p->alamat }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <x-tombol-aksi :id="$p->id_pemasok" :show="route('pemasok.show', $p->id_pemasok)" :edit="route('pemasok.edit', $p->id_pemasok)" :delete="route('pemasok.destroy', $p->id_pemasok)" />
                </div>
            </div>
        @endforeach
    </div>
    <div class="mt-12">{{ $pemasok->links('vendor.pagination.tailwind') }}</div>
@endsection
