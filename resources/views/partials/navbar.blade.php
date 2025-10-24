<header class="fixed top-4 left-1/2 -translate-x-1/2 z-50 w-[95%] max-w-3xl">
    <nav
        class="bg-white/80 dark:bg-gray-900/80 backdrop-blur-md border border-gray-200 dark:border-gray-800 rounded-2xl px-2 sm:px-5  py-2 flex items-center justify-between shadow-sm">
        <a href="/" class="flex items-center gap-2">
            <div class="w-6 h-6 ">
                <svg class="fill-black dark:fill-white" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24">
                    <path fill="currentColor" fill-rule="evenodd"
                        d="M5 1a4 4 0 0 0-4 4v14a4 4 0 0 0 4 4h14a4 4 0 0 0 4-4V5a4 4 0 0 0-4-4zm2.994 2.941a.63.63 0 0 0-.56 0L4.579 5.37a.63.63 0 0 0-.346.559v10.357c0 .226.122.434.319.544l5.714 3.215c.19.107.423.107.613 0l5.714-3.215a.63.63 0 0 0 .319-.544V13.1l2.511-1.256a.63.63 0 0 0 .346-.56v-3.57a.63.63 0 0 0-.346-.56l-2.857-1.428a.63.63 0 0 0-.559 0L13.15 7.155a.63.63 0 0 0-.345.56v3.205l-1.608.904V5.93a.63.63 0 0 0-.345-.56L7.994 3.942Zm6.06 6.958l1.607.804V9.529l-1.607-.803zm2.857.804V9.529l1.607-.803v2.173zm-.625-3.259l1.46-.73l-1.46-.73l-1.46.73zm-7.24 6.023l4.4-2.474l1.507.754l-4.399 2.474zm-1.611.592l2.511 1.256v2.116l-4.464-2.51V6.94l1.607.803V14.5c0 .237.134.453.346.559m3.761 1.235v2.137l4.465-2.51v-2.138zM7.714 6.658l-1.46-.73l1.46-.73l1.46.73zm.625 1.085l1.607-.803v5.587l-1.607.904z"
                        clip-rule="evenodd" />
                </svg>
            </div>
            <span class="font-medium">Laravel CRUD</span>
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
