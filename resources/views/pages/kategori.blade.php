@extends('layouts.main')

@section('title', 'Kategori')

@section('content')
    <div class="mb-8">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
            <div>
                <h2 class="text-3xl font-bold mb-1">Daftar Kategori</h2>
                <p class="text-sm text-gray-600 dark:text-gray-400">{{ $total }} kategori tersedia</p>
            </div>
            <div class="md:flex gap-3 items-center">
                <form method="GET" action="{{ route('kategori.index') }}" class="relative">
                    <input type="text" id="search" name="search" value="{{ request('search') }}"
                        placeholder="Cari kategori..."
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
        @foreach ($kategori as $k)
            <div class="relative group">
                <div
                    class="overflow-hidden rounded-xl bg-white dark:bg-gray-900/70 border border-gray-200 dark:border-gray-800 transition-all duration-300 group-hover:shadow-xl group-hover:border-gray-300 dark:group-hover:border-gray-700 relative z-10">
                    <div
                        class="absolute bottom-0 right-0 w-full pointer-events-none h-1/2 bg-linear-to-tl from-gray-300/20 dark:from-gray-700/20 via-transparent to-transparent rounded-tr-2xl">
                    </div>
                    <a href="{{ route('barang.index', ['kategori' => $k->id_kategori]) }}" class="block p-5 cursor-pointer">
                        <div class="gap-2.5">
                            <h1 class="font-semibold text-xl mb-3 line-clamp-2 text-gray-900 dark:text-gray-100">
                                {{ $k->nama }}
                            </h1>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5 text-gray-500 dark:text-gray-400"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                    </svg>
                                    <p class="text-sm text-gray-600 dark:text-gray-400">
                                        {{ $k->barang_count ?? 0 }} produk
                                    </p>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="size-4 text-gray-400 dark:text-gray-500  transition-colors" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                        </div>
                    </a>
                    <x-tombol-aksi :show="route('kategori.show', $k->id_kategori)" :edit="route('kategori.edit', $k->id_kategori)" :delete="route('kategori.destroy', $k->id_kategori)" />
                </div>
            </div>
        @endforeach
    </div>
    <div class="mt-12">{{ $kategori->links('vendor.pagination.tailwind') }}</div>
@endsection
