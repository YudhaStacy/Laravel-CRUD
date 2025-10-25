@extends('layouts.main')

@section('content')
    <div class="max-w-2xl m-auto">
        <div class="mb-8 mx-auto">
            <nav class="flex mb-6" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ route('kategori.index') }}"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                </path>
                            </svg>
                            Kategori
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Detail</span>
                        </div>
                    </li>
                </ol>
            </nav>
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
                <div>
                    <h2 class="text-3xl font-bold mb-1 text-gray-900 dark:text-gray-100">Detail Kategori</h2>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Informasi kategori</p>
                </div>
            </div>
        </div>
        <div>
            <div
                class="bg-white dark:bg-gray-900/70 border border-gray-200 dark:border-gray-800 rounded-xl overflow-hidden shadow-sm">
                <div class="p-6 space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-500 dark:text-gray-400 mb-2">
                            Nama Kategori
                        </label>
                        <p class="text-lg font-semibold text-gray-900 dark:text-gray-100">
                            {{ $kategori->nama }}
                        </p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-500 dark:text-gray-400 mb-2">
                            Keterangan
                        </label>
                        <div class="text-gray-700 dark:text-gray-300 leading-relaxed">
                            @if ($kategori->keterangan)
                                <p class="whitespace-pre-line">{{ $kategori->keterangan }}</p>
                            @else
                                <p class="text-gray-400 dark:text-gray-500 italic">Tidak ada keterangan</p>
                            @endif
                        </div>
                    </div>
                    <div
                        class="flex items-center gap-3 p-4 bg-gray-50 dark:bg-gray-800/50 rounded-lg border border-gray-200 dark:border-gray-700">
                        <div class="p-2 bg-blue-100 dark:bg-blue-900/30 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-6 text-blue-600 dark:text-blue-400"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Total Produk</p>
                            <p class="text-xl font-bold text-gray-900 dark:text-gray-100">
                                {{ $kategori->barang_count ?? 0 }} produk
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
