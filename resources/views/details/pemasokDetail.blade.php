@extends('layouts.main')

@section('content')
    <div class="max-w-2xl m-auto">
        <div class="mb-8 mx-auto">
            <nav class="flex mb-6" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ route('pemasok.index') }}"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                </path>
                            </svg>
                            Pemasok
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
                    <h2 class="text-3xl font-bold mb-1 text-gray-900 dark:text-gray-100">Detail Pemasok</h2>
                    <p class="text-sm text-gray-600 dark:text-gray-400">Informasi pemasok</p>
                </div>
            </div>
        </div>
        <div>
            <div
                class="bg-white dark:bg-gray-900/70 border border-gray-200 dark:border-gray-800 rounded-xl overflow-hidden shadow-sm">
                <div class="p-6 space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-500 dark:text-gray-400 mb-2">
                            Nama Pemasok
                        </label>
                        <p class="text-lg font-semibold text-gray-900 dark:text-gray-100">
                            {{ $pemasok->nama }}
                        </p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-500 dark:text-gray-400 mb-2">
                            No Telepon
                        </label>
                        <p class="text-lg font-semibold text-gray-900 dark:text-gray-100">
                            {{ $pemasok->no_tlp }}
                        </p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-500 dark:text-gray-400 mb-2">
                            Alamat
                        </label>
                        <p class="text-lg font-semibold text-gray-900 dark:text-gray-100">
                            {{ $pemasok->alamat }}
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
