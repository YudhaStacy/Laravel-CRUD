<!-- Floating Navbar -->
<header class="fixed top-4 left-1/2 -translate-x-1/2 z-50 w-[95%] max-w-3xl">
    <nav
        class="bg-white/80 dark:bg-gray-900/80 backdrop-blur-md border border-gray-200 dark:border-gray-800 rounded-2xl px-2 sm:px-5  py-2 flex items-center justify-between shadow-sm">
        <a href="/" class="flex items-center gap-2">
            <div class="w-6 h-6 ">
                <svg class="fill-black dark:fill-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24">
                    <path fill="currentColor" d="m12 1l9.5 5.5v11L12 23l-9.5-5.5v-11zM4.5 7.658v8.689l7.5 4.342V12z" />
                </svg>
            </div>
            <span class="font-medium">Box</span>
        </a>

        <div class="hidden md:flex items-center gap-2">
            <a href="{{ route('barang.index') }}"
                class="text-sm px-4 py-3 rounded-xl hover:text-gray-900 hover:bg-gray-200/50 dark:hover:bg-gray-600/20 dark:hover:text-white  hover:scale-[1.05] active:scale-[0.95] transition">Barang</a>
            <a href="{{ route('kategori.index') }}"
                class="text-sm px-4 py-3 rounded-xl hover:text-gray-900 hover:bg-gray-200/50 dark:hover:bg-gray-600/20 dark:hover:text-white  hover:scale-[1.05] active:scale-[0.95] transition">Kategori</a>
            <a href="{{ route('pemasok.index') }}"
                class="text-sm px-4 py-3 rounded-xl hover:text-gray-900 hover:bg-gray-200/50 dark:hover:bg-gray-600/20 dark:hover:text-white  hover:scale-[1.05] active:scale-[0.95] transition">Pemasok</a>
        </div>

        <a href="{{ route('barang.form') }}"
            class="px-4 py-1.5 bg-black dark:bg-white text-white dark:text-black text-sm  rounded-xl hover:opacity-80 hover:scale-[1.05] active:scale-[0.95] transition cursor-pointer">
            Tambah
        </a>
    </nav>
</header>
