<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>

            <button onclick="toggleDarkMode()"
        class="fixed bottom-5 right-5 z-50 p-3 rounded-full shadow-lg bg-white dark:bg-gray-800
           border border-gray-300 dark:border-gray-700 hover:scale-105 hover:shadow-xl
           transition-all duration-300 ease-out cursor-pointer">
        <svg id="icon-light" class="w-5 h-5 text-black dark:hidden" xmlns="http://www.w3.org/2000/svg" width="20"
            height="20" viewBox="0 0 20 20">
            <path fill="currentColor" fill-rule="evenodd"
                d="M10 2a1 1 0 0 1 1 1v1a1 1 0 1 1-2 0V3a1 1 0 0 1 1-1m4 8a4 4 0 1 1-8 0a4 4 0 0 1 8 0m-.464 4.95l.707.707a1 1 0 0 0 1.414-1.414l-.707-.707a1 1 0 0 0-1.414 1.414m2.12-10.607a1 1 0 0 1 0 1.414l-.706.707a1 1 0 1 1-1.414-1.414l.707-.707a1 1 0 0 1 1.414 0M17 11a1 1 0 1 0 0-2h-1a1 1 0 1 0 0 2zm-7 4a1 1 0 0 1 1 1v1a1 1 0 1 1-2 0v-1a1 1 0 0 1 1-1M5.05 6.464A1 1 0 1 0 6.465 5.05l-.708-.707a1 1 0 0 0-1.414 1.414zm1.414 8.486l-.707.707a1 1 0 0 1-1.414-1.414l.707-.707a1 1 0 0 1 1.414 1.414M4 11a1 1 0 1 0 0-2H3a1 1 0 0 0 0 2z"
                clip-rule="evenodd" />
        </svg>
        <svg id="icon-dark" class="hidden dark:block w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg"
            width="20" height="20" viewBox="0 0 20 20">
            <path fill="currentColor" d="M17.293 13.293A8 8 0 0 1 6.707 2.707a8.001 8.001 0 1 0 10.586 10.586" />
        </svg>
    </button>
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const toast = document.getElementById("toast-success");

            if (toast) {
                const hasShown = sessionStorage.getItem("toastShown");

                if (!hasShown) {
                    sessionStorage.setItem("toastShown", "true");

                    setTimeout(() => {
                        toast.classList.remove("translate-x-20", "opacity-0");
                        toast.classList.add("translate-x-0", "opacity-100");
                    }, 100);

                    setTimeout(() => {
                        toast.classList.remove("translate-x-0", "opacity-100");
                        toast.classList.add("translate-x-20", "opacity-0");
                    }, 3000);

                    setTimeout(() => toast.remove(), 3600);
                } else {
                    toast.remove();
                }
            }

            window.addEventListener("pageshow", (event) => {
                if (event.persisted) return;
                sessionStorage.removeItem("toastShown");
            });
        });

        if (
            localStorage.theme === "dark" ||
            (!("theme" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)
        ) {
            document.documentElement.classList.add("dark");
        } else {
            document.documentElement.classList.remove("dark");
        }

        window.toggleDarkMode = function() {
            const isDark = document.documentElement.classList.toggle("dark");
            localStorage.theme = isDark ? "dark" : "light";
        };
    </script>
    </body>
</html>
