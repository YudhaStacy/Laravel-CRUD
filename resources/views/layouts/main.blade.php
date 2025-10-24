<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LazyRead</title>
    @vite('resources/css/app.css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Geist:wght@100..900&display=swap');

        html,
        * {
            font-family: 'Geist', sans-serif;
            scroll-behavior: smooth
        }
    </style>
</head>

<body class="bg-white dark:bg-[#05060b] text-gray-900 dark:text-white">
    @include('partials.navbar')

    @if (session('success'))
        <div id="toast-success"
            class="fixed top-5 right-5 z-50 translate-x-20 opacity-0 
               transition-all duration-500 ease-out">
            <div
                class="flex items-center gap-3 px-4 py-3 rounded-lg shadow-lg 
                    bg-green-500 text-white border border-green-400">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
                <span>{{ session('success') }}</span>
            </div>
        </div>
    @endif

    <main class="pt-32 pb-16 px-6">
        <div class="max-w-4xl mx-auto">
            @yield('content')
        </div>
    </main>

    <script src="//unpkg.com/alpinejs" defer></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const toast = document.getElementById("toast-success");
            setTimeout(() => {
                toast.classList.remove("translate-x-20", "opacity-0");
                toast.classList.add("translate-x-0", "opacity-100");
            }, 100);

            setTimeout(() => {
                toast.classList.remove("translate-x-0", "opacity-100");
                toast.classList.add("translate-x-20", "opacity-0");
            }, 3000);

            setTimeout(() => toast.remove(), 3600);
        });
    </script>

    @stack('scripts')
</body>

</html>
