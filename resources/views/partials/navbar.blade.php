@auth
    @php
        $user = Auth::user();
        // $initials = collect(explode(' ', $user->name))
        //     ->map(fn($part) => strtoupper(substr($part, 0, 1)))
        //     ->take(2)
        //     ->join('');
    @endphp
@endauth
<header class="fixed top-4 left-1/2 -translate-x-1/2 z-50 w-[95%] max-w-3xl">
    <nav
        class="bg-white/80 dark:bg-gray-900/80 backdrop-blur-md border border-gray-200 dark:border-gray-800 rounded-2xl px-2 sm:px-5  py-2 flex items-center justify-between shadow-sm">
        <a href="{{ route('dashboard') }}" class="flex items-center gap-2">
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

        <!-- Settings Dropdown -->
        <div class="hidden sm:flex sm:items-center sm:ms-6">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button
                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-xl text-gray-500 dark:text-black bg-gray-200/50 dark:bg-white hover:text-neutral-950 dark:hover:text-neutral-600 dark:hover:bg-neutral-200 focus:outline-none transition ease-in-out duration-150">
                        <div>{{ Auth::user()->name }}</div>

                        <div class="ms-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-dropdown-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>
    </nav>
</header>
{{-- <!-- Profile dropdown -->
        <el-dropdown class="relative ml-3">
            <button
                class="relative flex items-center justify-center size-8 rounded-md bg-gray-800 text-gray-200 font-medium focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                <span class="absolute -inset-1.5"></span>
                <span class="sr-only">Open user menu</span>
                <span class="z-10">{{ $initials }}</span>
            </button>
            <el-menu anchor="bottom end" popover
                class="m-0 w-48 origin-top-right rounded-md bg-gray-800 p-0 py-1 outline outline-1 -outline-offset-1 outline-white/10 transition [--anchor-gap:theme(spacing.2)] [transition-behavior:allow-discrete] data-[closed]:scale-95 data-[closed]:transform data-[closed]:opacity-0 data-[enter]:duration-100 data-[leave]:duration-75 data-[enter]:ease-out data-[leave]:ease-in">
                <a href="{{ route('profile.edit') }}"
                    class="block px-4 py-2 text-sm text-gray-300 focus:bg-white/5 focus:outline-none">Your
                    profile</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="block px-4 py-2 text-sm text-gray-300 focus:bg-white/5 focus:outline-none w-full text-left">Sign
                        out</button>
                </form>
            </el-menu>
        </el-dropdown> --}}
