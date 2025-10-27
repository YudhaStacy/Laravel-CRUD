@extends('layouts.main', ['withNavbar' => false])

@section('content')
    <!-- Page Header -->
    <section class="mb-8">
        <h1 class="mb-2 text-3xl font-semibold">Dashboard</h1>
        <p class="text-sm text-gray-600 dark:text-gray-400">Ringkasan data dan navigasi menu</p>
    </section>

    <!-- Stats Grid -->
    <section class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">

        <!-- Card Barang -->
        <a href="{{ route('barang.index') }}" class="group relative">
            <div
                class="overflow-hidden rounded-xl bg-white dark:bg-gray-900/70 border border-gray-200 dark:border-gray-800 p-6 transition-all duration-300 group-hover:shadow-xl group-hover:scale-[1.02] group-hover:border-blue-300 dark:group-hover:border-blue-700">

                <!-- Icon -->
                <div class="mb-4 inline-flex p-3 rounded-lg bg-blue-100 dark:bg-blue-900/30">
                    <svg class="w-8 h-8 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                </div>

                <!-- Content -->
                <div class="mb-2">
                    <h3 class="text-sm font-medium text-gray-600 dark:text-gray-400 mb-1">Total Barang</h3>
                    <p class="text-4xl font-bold text-gray-900 dark:text-white">{{ $totalBarang ?? 24 }}</p>
                </div>

                <!-- Detail -->
                <div class="flex items-center justify-between pt-4 border-t border-gray-200 dark:border-gray-800">
                    <span class="text-xs text-gray-500 dark:text-gray-400">Lihat semua</span>
                    <svg class="w-4 h-4 text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </div>
            </div>
        </a>

        <!-- Card Kategori -->
        <a href="{{ route('kategori.index') }}" class="group relative">
            <div
                class="overflow-hidden rounded-xl bg-white dark:bg-gray-900/70 border border-gray-200 dark:border-gray-800 p-6 transition-all duration-300 group-hover:shadow-xl group-hover:scale-[1.02] group-hover:border-green-300 dark:group-hover:border-green-700">

                <!-- Icon -->
                <div class="mb-4 inline-flex p-3 rounded-lg bg-green-100 dark:bg-green-900/30">
                    <svg class="w-8 h-8 text-green-600 dark:text-green-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                        </path>
                    </svg>
                </div>

                <!-- Content -->
                <div class="mb-2">
                    <h3 class="text-sm font-medium text-gray-600 dark:text-gray-400 mb-1">Total Kategori</h3>
                    <p class="text-4xl font-bold text-gray-900 dark:text-white">{{ $totalKategori ?? 8 }}</p>
                </div>

                <!-- Detail -->
                <div class="flex items-center justify-between pt-4 border-t border-gray-200 dark:border-gray-800">
                    <span class="text-xs text-gray-500 dark:text-gray-400">Lihat semua</span>
                    <svg class="w-4 h-4 text-gray-400 group-hover:text-green-600 dark:group-hover:text-green-400 transition-colors"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </div>
            </div>
        </a>

        <!-- Card Pemasok -->
        <a href="{{ route('pemasok.index') }}" class="group relative">
            <div
                class="overflow-hidden rounded-xl bg-white dark:bg-gray-900/70 border border-gray-200 dark:border-gray-800 p-6 transition-all duration-300 group-hover:shadow-xl group-hover:scale-[1.02] group-hover:border-purple-300 dark:group-hover:border-purple-700">

                <!-- Icon -->
                <div class="mb-4 inline-flex p-3 rounded-lg bg-purple-100 dark:bg-purple-900/30">
                    <svg class="w-8 h-8 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                        </path>
                    </svg>
                </div>

                <!-- Content -->
                <div class="mb-2">
                    <h3 class="text-sm font-medium text-gray-600 dark:text-gray-400 mb-1">Total Pemasok</h3>
                    <p class="text-4xl font-bold text-gray-900 dark:text-white">{{ $totalPemasok ?? 12 }}</p>
                </div>

                <!-- Detail -->
                <div class="flex items-center justify-between pt-4 border-t border-gray-200 dark:border-gray-800">
                    <span class="text-xs text-gray-500 dark:text-gray-400">Lihat semua</span>
                    <svg class="w-4 h-4 text-gray-400 group-hover:text-purple-600 dark:group-hover:text-purple-400 transition-colors"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </div>
            </div>
        </a>

    </section>

    <!-- Quick Actions -->
    <section class="mt-8">
        <h2 class="mb-4 text-xl font-semibold">Quick Actions</h2>
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">

            <a href="{{ route('barang.form') }}"
                class="group flex items-center gap-4 p-4 rounded-xl bg-white dark:bg-gray-900/70 border border-gray-200 dark:border-gray-800 hover:border-blue-300 dark:hover:border-blue-700 hover:shadow-lg transition-all">
                <div class="p-2 rounded-lg bg-blue-100 dark:bg-blue-900/30">
                    <svg class="w-5 h-5 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-sm font-medium text-gray-900 dark:text-white">Tambah Barang</h3>
                    <p class="text-xs text-gray-500 dark:text-gray-400">Tambahkan barang baru</p>
                </div>
            </a>

            <a href="{{ route('kategori.form') }}"
                class="group flex items-center gap-4 p-4 rounded-xl bg-white dark:bg-gray-900/70 border border-gray-200 dark:border-gray-800 hover:border-green-300 dark:hover:border-green-700 hover:shadow-lg transition-all">
                <div class="p-2 rounded-lg bg-green-100 dark:bg-green-900/30">
                    <svg class="w-5 h-5 text-green-600 dark:text-green-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                        </path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-sm font-medium text-gray-900 dark:text-white">Tambah Kategori</h3>
                    <p class="text-xs text-gray-500 dark:text-gray-400">Buat kategori baru</p>
                </div>
            </a>

            <a href="{{ route('pemasok.form') }}"
                class="group flex items-center gap-4 p-4 rounded-xl bg-white dark:bg-gray-900/70 border border-gray-200 dark:border-gray-800 hover:border-purple-300 dark:hover:border-purple-700 hover:shadow-lg transition-all">
                <div class="p-2 rounded-lg bg-purple-100 dark:bg-purple-900/30">
                    <svg class="w-5 h-5 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-sm font-medium text-gray-900 dark:text-white">Tambah Pemasok</h3>
                    <p class="text-xs text-gray-500 dark:text-gray-400">Daftarkan pemasok baru</p>
                </div>
            </a>
        </div>
    </section>
@endsection
