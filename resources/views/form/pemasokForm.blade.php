@extends('layouts.main')

@section('content')
    <div class="max-w-2xl mx-auto">
        <div class="mb-8">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
                <div>
                    <h2 class="text-3xl font-bold mb-1">
                        {{ isset($pemasok) ? 'Edit pemasok' : 'Tambah pemasok baru' }}
                    </h2>
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        {{ isset($pemasok) ? 'Ubah informasi pemasok yang sudah ada' : 'Lengkapi informasi pemasok yang akan ditambahkan' }}
                    </p>
                </div>
            </div>
        </div>

        <div class="rounded-xl bg-white dark:bg-gray-900/70 border border-gray-200 dark:border-gray-800">
            <form action="{{ isset($pemasok) ? route('pemasok.update', $pemasok->id_pemasok) : route('pemasok.store') }}"
                method="POST" enctype="multipart/form-data" class="p-6 md:p-8">
                @csrf
                @if (isset($pemasok))
                    @method('PUT')
                @endif

                <div class="mb-6">
                    <label for="nama" class="block text-sm font-medium mb-2 text-gray-900 dark:text-gray-100">
                        Nama Pemasok <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="nama" name="nama" required
                        class="w-full px-4 py-2.5 text-sm border border-gray-300 dark:border-gray-700 rounded-lg
                        bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:outline-none
                        focus:ring-2 focus:ring-gray-900 dark:focus:ring-gray-100 transition-all placeholder:text-gray-100/30"
                        placeholder="Masukkan nama pemasok" value="{{ old('nama', $pemasok->nama ?? '') }}">
                </div>
                <div class="mb-6">
                    <label for="no_tlp" class="block text-sm font-medium mb-2 text-gray-900 dark:text-gray-100">
                        No Telepon <span class="text-red-500">*</span>
                    </label>
                    <input type="tel" id="no_tlp" name="no_tlp" required
                        class="w-full px-4 py-2.5 text-sm border border-gray-300 dark:border-gray-700 rounded-lg
                        bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:outline-none
                        focus:ring-2 focus:ring-gray-900 dark:focus:ring-gray-100 transition-all placeholder:text-gray-100/30"
                        placeholder="Masukkan no telepon" value="{{ old('no_tlp', $pemasok->no_tlp ?? '') }}">
                </div>
                <div class="mb-6">
                    <label for="alamat" class="block text-sm font-medium mb-2 text-gray-900 dark:text-gray-100">
                        Alamat <span class="text-red-500">*</span>
                    </label>
                    <textarea name="alamat" id="alamat" name="alamat" rows="5"
                        class="w-full px-4 py-2.5 text-sm border border-gray-300 dark:border-gray-700 rounded-lg
                        bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:outline-none
                        focus:ring-2 focus:ring-gray-900 dark:focus:ring-gray-100 transition-all placeholder:text-gray-100/30"
                        placeholder="Masukkan alamat">{{ old('alamat', $pemasok->alamat ?? '') }}</textarea>
                </div>
                <div class="flex flex-col-reverse md:flex-row gap-3 pt-6 border-t border-gray-200 dark:border-gray-800">
                    <a href="{{ url()->previous() }}"
                        class="flex-1 px-6 py-2.5 text-sm font-medium rounded-lg border border-gray-300 dark:border-gray-700
                        hover:bg-gray-50 dark:hover:bg-gray-900 transition-colors text-center">
                        Batal
                    </a>
                    <button type="submit"
                        class="flex-1 px-6 py-2.5 text-sm font-medium rounded-lg
                        bg-black dark:bg-white text-white dark:text-black hover:bg-gray-800 dark:hover:bg-gray-100 transition-colors">
                        {{ isset($pemasok) ? 'Update pemasok' : 'Simpan pemasok' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
