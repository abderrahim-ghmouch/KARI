<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Sign Up - HouseHost</title>

<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;family=Noto+Sans:wght@400;500;700&amp;display=swap" rel="stylesheet"/>

<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#2b9dee",
                        "background-light": "#f6f7f8",
                        "background-dark": "#101a22",
                    },
                    fontFamily: {
                        "display": ["Plus Jakarta Sans", "sans-serif"],
                        "body": ["Noto Sans", "sans-serif"],
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        /* Custom scrollbar for cleaner look */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: transparent;
        }
        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-900 dark:text-white antialiased">
<div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden">
<!-- Header -->
<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#e7eef3] dark:border-slate-800 px-6 lg:px-10 py-4 bg-white dark:bg-[#15202b]">
<div class="flex items-center gap-3">
<div class="size-8 text-primary">
<svg class="w-full h-full" fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path d="M4 42.4379C4 42.4379 14.0962 36.0744 24 41.1692C35.0664 46.8624 44 42.2078 44 42.2078L44 7.01134C44 7.01134 35.068 11.6577 24.0031 5.96913C14.0971 0.876274 4 7.27094 4 7.27094L4 42.4379Z" fill="currentColor"></path>
</svg>
</div>
<h2 class="text-slate-900 dark:text-white text-xl font-bold leading-tight tracking-[-0.015em]">HouseHost</h2>
</div>
<div class="flex gap-2">
<span class="text-sm font-medium text-slate-600 dark:text-slate-400 self-center mr-2 hidden sm:block">Already have an account?</span>
<button class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-6 bg-[#e7eef3] dark:bg-slate-700 text-[#0d161b] dark:text-white text-sm font-bold leading-normal tracking-[0.015em] transition hover:bg-slate-200 dark:hover:bg-slate-600">
<span class="truncate">Log In</span>
</button>
</div>
</header>
<main class="flex-1 flex justify-center py-8 px-4 sm:px-6">
<div class="w-full max-w-[960px] flex flex-col gap-8">
<!-- Page Heading -->
<div class="flex flex-col gap-2 text-center sm:text-left">
<h1 class="text-slate-900 dark:text-white text-3xl sm:text-4xl font-black leading-tight tracking-[-0.033em]">Join our community</h1>
<p class="text-[#4c799a] dark:text-slate-400 text-base font-normal leading-normal">How will you use the platform today? Select an account type to get started.</p>
</div>
<!-- Account Type Selection Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<!-- Traveler Card (Selected State Example) -->
<div class="group relative cursor-pointer overflow-hidden rounded-xl border-2 border-primary bg-white dark:bg-[#15202b] shadow-md transition-all hover:shadow-lg">
<div class="absolute top-4 right-4 text-primary">
<span class="material-symbols-outlined filled text-2xl">check_circle</span>
</div>
<div class="flex flex-col h-full">
<div class="h-40 w-full bg-cover bg-center" data-alt="Abstract scenic landscape representing travel and adventure" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA6A5yfJlDeTm7RqlDpyADqczJ1pUEs73KUGe962KDkrHKIDla-8cCn1vi2zpSTKkMvh0DSh1rGahkUdGnQ9RI_qDc2Xpk75wY-32V-g36CPWgN1oxYV87deJGTS_zeL-A7ZC8IrM3cAhrHRLjQ-jo7ftntzIEeB2EkbItzBIFLoDCjbNA3goh34cxrdDSm-Rt2wCs3fxKTnFvzAbvrFkdAn6LU-SideACmwUowXWbA7FGCE7fy832RCtx2Uhrm2lEQvBDuaaiK-OJ3");'></div>
<div class="p-6 flex flex-col gap-2">
<h3 class="text-slate-900 dark:text-white text-lg font-bold leading-tight flex items-center gap-2">
<span class="material-symbols-outlined">flight</span>
                                I am a Traveler
                            </h3>
<p class="text-[#4c799a] dark:text-slate-400 text-sm font-normal leading-normal">Find unique places to stay, book experiences, and explore the world with local guides.</p>
</div>
</div>
</div>
<!-- Host Card (Unselected State) -->
<div class="group relative cursor-pointer overflow-hidden rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-[#15202b] shadow-sm transition-all hover:border-primary/50 hover:shadow-md">
<div class="absolute top-4 right-4 text-slate-300 dark:text-slate-600 group-hover:text-primary/50">
<span class="material-symbols-outlined text-2xl">radio_button_unchecked</span>
</div>
<div class="flex flex-col h-full">
<div class="h-40 w-full bg-cover bg-center" data-alt="Cozy interior living room representing hosting and comfort" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuArioq2CY5BvU7ZbVpV7DY-MM5IuJ-J7tGcWDA9qF8BzrU93xsZ_ME-ImoTD2XiN6oadE-UhxTgVJYQSjgamauyBiTTbTVrvugERO9etpmc_vZm8XuXqYj1m6qGkSx6h0DKepPosn-8wb6hnz41ceEYjfg2sAhupu7Kqj5auN3nNx1PPeQXPOtpOZfEU-gvBdEB6PVxvrxnciYH8rHMT-z5pS0OmqBZcEqVxCEpb28vlF3bxd3wCJQTmm9n9Lim49BxSsmnd_6J2GJC");'></div>
<div class="p-6 flex flex-col gap-2">
<h3 class="text-slate-900 dark:text-white text-lg font-bold leading-tight flex items-center gap-2">
<span class="material-symbols-outlined">home</span>
                                I am a Host
                            </h3>
<p class="text-[#4c799a] dark:text-slate-400 text-sm font-normal leading-normal">Earn extra income by renting out your extra space or hosting experiences for travelers.</p>
</div>
</div>
</div>
</div>
<!-- Sign Up Form Section -->
<div class="bg-white dark:bg-[#15202b] rounded-xl border border-slate-200 dark:border-slate-800 p-6 sm:p-8 shadow-sm mt-4">
<form class="flex flex-col gap-6 max-w-[600px] mx-auto">
<div class="flex flex-col sm:flex-row gap-4">
<label class="flex flex-col flex-1 gap-2">
<span class="text-slate-900 dark:text-slate-200 text-sm font-semibold">First Name</span>
<input class="form-input w-full rounded-lg border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white placeholder:text-slate-400 h-12 px-4 text-base focus:border-primary focus:ring-primary focus:ring-1 transition-all" placeholder="Jane" type="text"/>
</label>
<label class="flex flex-col flex-1 gap-2">
<span class="text-slate-900 dark:text-slate-200 text-sm font-semibold">Last Name</span>
<input class="form-input w-full rounded-lg border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white placeholder:text-slate-400 h-12 px-4 text-base focus:border-primary focus:ring-primary focus:ring-1 transition-all" placeholder="Doe" type="text"/>
</label>
</div>
<label class="flex flex-col gap-2">
<span class="text-slate-900 dark:text-slate-200 text-sm font-semibold">Email address</span>
<div class="relative">
<span class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 material-symbols-outlined text-[20px]">mail</span>
<input class="form-input w-full rounded-lg border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white placeholder:text-slate-400 h-12 pl-11 pr-4 text-base focus:border-primary focus:ring-primary focus:ring-1 transition-all" placeholder="name@example.com" type="email"/>
</div>
</label>
<label class="flex flex-col gap-2">
<span class="text-slate-900 dark:text-slate-200 text-sm font-semibold">Create Password</span>
<div class="relative">
<span class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400 material-symbols-outlined text-[20px]">lock</span>
<input class="form-input w-full rounded-lg border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 text-slate-900 dark:text-white placeholder:text-slate-400 h-12 pl-11 pr-12 text-base focus:border-primary focus:ring-primary focus:ring-1 transition-all" placeholder="Min. 8 characters" type="password"/>
<button class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-600 dark:hover:text-slate-300" type="button">
<span class="material-symbols-outlined text-[20px]">visibility_off</span>
</button>
</div>
</label>
<div class="flex items-start gap-3 mt-2">
<input class="rounded border-slate-300 dark:border-slate-600 text-primary focus:ring-primary mt-1 bg-slate-50 dark:bg-slate-800" id="terms" type="checkbox"/>
<label class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed" for="terms">
                            I agree to the <a class="text-primary hover:underline font-medium" href="#">Terms of Service</a> and <a class="text-primary hover:underline font-medium" href="#">Privacy Policy</a>, and consent to receive updates from HouseHost.
                        </label>
</div>
<button class="flex w-full cursor-pointer items-center justify-center rounded-lg bg-primary h-12 px-4 text-white text-base font-bold leading-normal tracking-[0.015em] transition hover:bg-blue-500 shadow-md hover:shadow-lg mt-2">
                        Create Account
                    </button>
<div class="relative flex items-center py-2">
<div class="flex-grow border-t border-slate-200 dark:border-slate-700"></div>
<span class="flex-shrink-0 mx-4 text-slate-400 text-sm font-medium">Or continue with</span>
<div class="flex-grow border-t border-slate-200 dark:border-slate-700"></div>
</div>
<div class="grid grid-cols-2 gap-4">
<button class="flex items-center justify-center gap-2 rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 h-12 px-4 text-slate-700 dark:text-white text-sm font-bold transition hover:bg-slate-50 dark:hover:bg-slate-700" type="button">
<svg class="size-5" fill="none" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M23.766 12.2764C23.766 11.4607 23.6999 10.6406 23.5588 9.83807H12.24V14.4591H18.7217C18.4528 15.9494 17.5885 17.2678 16.323 18.1056V21.1039H20.19C22.4608 19.0139 23.766 15.9274 23.766 12.2764Z" fill="#4285F4"></path><path d="M12.24 24.0008C15.4765 24.0008 18.2059 22.9382 20.1945 21.1039L16.3275 18.1055C15.2517 18.8375 13.8627 19.252 12.2445 19.252C9.11388 19.252 6.45946 17.1399 5.50705 14.2819H1.46997V17.4107C3.48665 21.4194 7.62946 24.0008 12.24 24.0008Z" fill="#34A853"></path><path d="M5.50253 14.2818C5.00397 12.8099 5.00397 11.1961 5.50253 9.7242V6.5954H1.46997C-0.171747 9.84624 -0.171747 14.1657 1.46997 17.4107L5.50253 14.2818Z" fill="#FBBC05"></path><path d="M12.24 4.74966C13.9509 4.7232 15.6044 5.36697 16.8434 6.54867L20.2695 3.12262C18.1001 1.0855 15.2208 -0.034466 12.24 0.000808666C7.62946 0.000808666 3.48665 2.58222 1.46997 6.5954L5.50705 9.7242C6.45502 6.86169 9.10937 4.74966 12.24 4.74966Z" fill="#EA4335"></path></svg>
                            Google
                        </button>
<button class="flex items-center justify-center gap-2 rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 h-12 px-4 text-slate-700 dark:text-white text-sm font-bold transition hover:bg-slate-50 dark:hover:bg-slate-700" type="button">
<svg class="size-5 dark:fill-white fill-slate-900" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M17.5 12.625c0-2.584 2.116-3.834 2.209-3.875-1.2-1.75-3.067-1.983-3.733-2.008-1.584-.167-3.092.933-3.892.933-.808 0-2.033-.908-3.35-.883-1.725.025-3.325 1.008-4.208 2.542-1.8 3.108-.458 7.7 1.3 10.25.858 1.225 1.875 2.608 3.217 2.558 1.283-.05 1.767-.833 3.308-.833 1.542 0 1.983.833 3.325.808 1.375-.025 2.25-1.25 3.1-2.492 1.008-1.35 1.4-2.675 1.433-2.733-.033-.017-2.75-1.05-2.708-4.267zM15.358 4.658c.708-.858 1.183-2.05 1.05-3.233-1.025.042-2.267.683-3.008 1.575-.642.767-1.208 2.025-1.05 3.167 1.133.091 2.292-.584 3.008-1.509z"></path></svg>
                            Apple
                        </button>
</div>
</form>
</div>
<footer class="text-center py-4">
<p class="text-xs text-slate-500 dark:text-slate-500">
                    © 2023 HouseHost Inc. All rights reserved.
                </p>
</footer>
</div>
</main>
</div>
</body></html>