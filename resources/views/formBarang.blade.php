@extends('layouts.main')

@section('content')
    <div class="max-w-2xl mx-auto">
        <div class="mb-8">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
                <div>
                    <h2 class="text-3xl font-bold mb-1">
                        {{ isset($barang) ? 'Edit Barang' : 'Tambah Barang Baru' }}
                    </h2>
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        {{ isset($barang) ? 'Ubah informasi produk yang sudah ada' : 'Lengkapi informasi produk yang akan ditambahkan' }}
                    </p>
                </div>
                <a href="{{ route('barang.index') }}"
                    class="px-4 py-2 text-sm font-medium rounded-lg border border-gray-300 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-900 transition-colors">
                    Kembali
                </a>
            </div>
        </div>
        <div class="rounded-xl dark:bg-gray-900/70 border border-gray-200 dark:border-gray-800">
            <form action="{{ isset($barang) ? route('barang.update', $barang->id_barang) : route('barang.store') }}"
                method="POST" enctype="multipart/form-data" class="p-6 md:p-8">
                @csrf
                @if (isset($barang))
                    @method('PUT')
                @endif

                <div class="mb-6">
                    <label for="nama" class="block text-sm font-medium mb-2 text-gray-900 dark:text-gray-100">
                        Nama Barang <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="nama" name="nama" required
                        class="w-full px-4 py-2.5 text-sm border border-gray-300 dark:border-gray-700 rounded-lg 
                        bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:outline-none 
                        focus:ring-2 focus:ring-gray-900 dark:focus:ring-gray-100 transition-all"
                        placeholder="Masukkan nama barang" value="{{ old('nama', $barang->nama ?? '') }}">
                </div>
                <div class="mb-6">
                    <label for="id_kategori" class="block text-sm font-medium mb-2 text-gray-900 dark:text-gray-100">
                        Kategori <span class="text-red-500">*</span>
                    </label>
                    <select id="id_kategori" name="id_kategori" required
                        class="w-full px-4 py-2.5 text-sm border border-gray-300 dark:border-gray-700 rounded-lg 
                        bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:outline-none 
                        focus:ring-2 focus:ring-gray-900 dark:focus:ring-gray-100 transition-all">
                        <option value="">Pilih Kategori</option>
                        @foreach ($kategori as $k)
                            <option value="{{ $k->id_kategori }}"
                                {{ old('id_kategori', $barang->id_kategori ?? '') == $k->id_kategori ? 'selected' : '' }}>
                                {{ $k->nama }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-6">
                    <label for="id_pemasok" class="block text-sm font-medium mb-2 text-gray-900 dark:text-gray-100">
                        Pemasok <span class="text-red-500">*</span>
                    </label>
                    <select id="id_pemasok" name="id_pemasok" required
                        class="w-full px-4 py-2.5 text-sm border border-gray-300 dark:border-gray-700 rounded-lg 
                        bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:outline-none 
                        focus:ring-2 focus:ring-gray-900 dark:focus:ring-gray-100 transition-all">
                        <option value="">Pilih Pemasok</option>
                        @foreach ($pemasok as $p)
                            <option value="{{ $p->id_pemasok }}"
                                {{ old('id_pemasok', $barang->id_pemasok ?? '') == $p->id_pemasok ? 'selected' : '' }}>
                                {{ $p->nama }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="harga" class="block text-sm font-medium mb-2 text-gray-900 dark:text-gray-100">
                            Harga <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <span
                                class="absolute left-4 top-1/2 -translate-y-1/2 text-sm text-gray-500 dark:text-gray-400">Rp</span>
                            <input type="number" id="harga" name="harga" required min="0"
                                class="w-full pl-10 pr-4 py-2.5 text-sm border border-gray-300 dark:border-gray-700 rounded-lg 
                                bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:outline-none 
                                focus:ring-2 focus:ring-gray-900 dark:focus:ring-gray-100 transition-all"
                                placeholder="0" value="{{ old('harga', $barang->harga ?? '') }}">
                        </div>
                    </div>
                    <div>
                        <label for="stok" class="block text-sm font-medium mb-2 text-gray-900 dark:text-gray-100">
                            Stok <span class="text-red-500">*</span>
                        </label>
                        <input type="number" id="stok" name="stok" required min="0"
                            class="w-full px-4 py-2.5 text-sm border border-gray-300 dark:border-gray-700 rounded-lg 
                            bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:outline-none 
                            focus:ring-2 focus:ring-gray-900 dark:focus:ring-gray-100 transition-all"
                            placeholder="0" value="{{ old('stok', $barang->stok ?? '') }}">
                    </div>
                </div>
                <div class="mb-6">
                    <label for="path_image" class="block text-sm font-medium mb-2 text-gray-900 dark:text-gray-100">
                        Gambar {{ isset($barang) ? '' : '*' }}
                    </label>

                    @if (isset($barang) && $barang->path_image)
                        <div class="mb-3">
                            <img src="{{ asset('storage/' . $barang->path_image) }}" alt="Preview"
                                class="w-40 h-28 object-cover rounded-lg border border-gray-200 dark:border-gray-700">
                        </div>
                    @endif

                    <input type="file" id="path_image" name="path_image" {{ isset($barang) ? '' : 'required' }}
                        accept="image/*"
                        class="w-full px-4 py-2.5 text-sm border border-gray-300 dark:border-gray-700 rounded-lg 
                        bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 focus:outline-none 
                        focus:ring-2 focus:ring-gray-900 dark:focus:ring-gray-100 transition-all">
                </div>
                <div class="flex flex-col-reverse md:flex-row gap-3 pt-6 border-t border-gray-200 dark:border-gray-800">
                    <a href="{{ route('barang.index') }}"
                        class="flex-1 px-6 py-2.5 text-sm font-medium rounded-lg border border-gray-300 dark:border-gray-700 
                        hover:bg-gray-50 dark:hover:bg-gray-900 transition-colors text-center">
                        Batal
                    </a>
                    <button type="submit"
                        class="flex-1 px-6 py-2.5 text-sm font-medium rounded-lg 
                        bg-black dark:bg-white text-white dark:text-black hover:bg-gray-800 dark:hover:bg-gray-100 transition-colors">
                        {{ isset($barang) ? 'Perbarui Barang' : 'Simpan Barang' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
