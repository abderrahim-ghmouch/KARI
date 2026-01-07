<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Login - HouseHost</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;family=Noto+Sans:wght@400;500;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#6366f1",
                        "primary-light": "#818cf8",
                        "background-light": "#fafbfc",
                        "background-dark": "#0f172a",
                    },
                    fontFamily: {
                        "display": ["Plus Jakarta Sans", "sans-serif"],
                        "body": ["Noto Sans", "sans-serif"],
                    },
                    borderRadius: {
                        "DEFAULT": "0.5rem",
                        "lg": "0.75rem",
                        "xl": "1rem",
                        "2xl": "1.5rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        
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

        @keyframes gradient-shift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .animate-gradient {
            background-size: 200% 200%;
            animation: gradient-shift 15s ease infinite;
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .dark .glass-effect {
            background: rgba(15, 23, 42, 0.7);
            border: 1px solid rgba(148, 163, 184, 0.1);
        }

        .input-glow:focus {
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
        }
    </style>
</head>
<body class="bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50 dark:from-slate-950 dark:via-indigo-950 dark:to-slate-900 font-display text-slate-900 dark:text-white antialiased animate-gradient">
    <div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden">
       
        <header class="fixed top-0 left-0 right-0 z-50 flex items-center justify-between px-6 lg:px-10 py-5 glass-effect">
            <div class="flex items-center gap-3">
                <div class="size-10 text-primary transform hover:scale-110 transition-transform duration-300">
                    <svg class="w-full h-full drop-shadow-lg" fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4 42.4379C4 42.4379 14.0962 36.0744 24 41.1692C35.0664 46.8624 44 42.2078 44 42.2078L44 7.01134C44 7.01134 35.068 11.6577 24.0031 5.96913C14.0971 0.876274 4 7.27094 4 7.27094L4 42.4379Z"
                            fill="currentColor"></path>
                    </svg>
                </div>
                <h2 class="text-slate-900 dark:text-white text-xl font-bold leading-tight tracking-tight">HouseHost</h2>
            </div>
            <div class="flex gap-3 items-center">
                <span class="text-sm font-medium text-slate-600 dark:text-slate-400 self-center hidden sm:block">Don't have an account?</span>
                <a href="/signup"
                    class="group relative overflow-hidden rounded-xl px-6 py-2.5 bg-white dark:bg-slate-800 text-slate-700 dark:text-slate-200 text-sm font-semibold transition-all hover:shadow-lg border border-slate-200 dark:border-slate-700">
                    <span class="relative z-10">Sign Up</span>
                    <div class="absolute inset-0 bg-gradient-to-r from-indigo-500/10 to-purple-500/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                </a>
            </div>
        </header>

        <main class="flex-1 flex justify-center items-center pt-20 pb-16 px-4 sm:px-6">
            <div class="w-full max-w-[480px] flex flex-col gap-8">
            
                <div class="flex flex-col gap-3 text-center">
                    <h1 class="text-slate-900 dark:text-white text-4xl sm:text-5xl font-black leading-tight tracking-tight bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 dark:from-indigo-400 dark:via-purple-400 dark:to-pink-400 bg-clip-text text-transparent">
                        Welcome back
                    </h1>
                    <p class="text-slate-600 dark:text-slate-400 text-lg font-medium">log to your account</p>
                </div>
                
        
                <div class="glass-effect rounded-2xl p-8 shadow-2xl transform hover:scale-[1.02] transition-transform duration-300">
                    <form action="../public/login.php" class="flex flex-col gap-5" method="POST">
                        <label class="flex flex-col gap-2.5 group">
                            <span class="text-slate-700 dark:text-slate-200 text-sm font-semibold flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary text-lg">email</span>
                                Email address
                            </span>
                            <input name="email"
                                class="input-glow form-input w-full rounded-xl border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800/80 text-slate-900 dark:text-white placeholder:text-slate-400 h-14 px-4 text-base focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all"
                                placeholder="name@example.com" type="email" />
                        </label>

                        <label class="flex flex-col gap-2.5 group">
                            <div class="flex items-center justify-between">
                                <span class="text-slate-700 dark:text-slate-200 text-sm font-semibold flex items-center gap-2">
                                    <span class="material-symbols-outlined text-primary text-lg">lock</span>
                                    Password
                                </span>
                                <a href="/forgot-password" class="text-sm font-semibold text-primary hover:text-primary-light transition-colors">
                                    Forgot password?
                                </a>
                            </div>
                            <div class="relative">
                                <input name="password"
                                    class="input-glow form-input w-full rounded-xl border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800/80 text-slate-900 dark:text-white placeholder:text-slate-400 h-14 px-4 pr-12 text-base focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all"
                                    placeholder="Enter your password" type="password" />
                                <button
                                    class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400 hover:text-primary transition-colors"
                                    type="button">
                                    <span class="material-symbols-outlined text-xl">visibility_off</span>
                                </button>
                            </div>
                        </label>

                        <label class="flex items-center gap-2 cursor-pointer group">
                            <input type="checkbox" name="remember" class="w-5 h-5 rounded-lg border-slate-300 text-primary focus:ring-primary focus:ring-2 focus:ring-offset-0 transition-all" />
                            <span class="text-sm text-slate-600 dark:text-slate-400 group-hover:text-slate-900 dark:group-hover:text-slate-200 transition-colors">Remember me for 30 days</span>
                        </label>
                    
                        <button
                            class="group relative overflow-hidden flex w-full cursor-pointer items-center justify-center rounded-xl bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 h-14 px-4 text-white text-base font-bold leading-normal tracking-wide transition-all shadow-lg hover:shadow-xl hover:scale-[1.02] mt-2">
                            <span class="relative z-10 flex items-center gap-2">
                                Sign In
                                <span class="material-symbols-outlined text-xl group-hover:translate-x-1 transition-transform">arrow_forward</span>
                            </span>
                            <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-pink-600 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        </button>

                        <div class="relative flex items-center py-4">
                            <div class="flex-grow border-t border-slate-300 dark:border-slate-700"></div>
                            <span class="flex-shrink-0 mx-4 text-slate-500 dark:text-slate-400 text-sm font-medium">Or continue with</span>
                            <div class="flex-grow border-t border-slate-300 dark:border-slate-700"></div>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <button
                                class="group flex items-center justify-center gap-2 rounded-xl border-2 border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800/80 h-12 px-4 text-slate-700 dark:text-white text-sm font-semibold transition-all hover:border-primary hover:shadow-lg hover:scale-105"
                                type="button">
                                <svg class="size-5 group-hover:scale-110 transition-transform" fill="none" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.766 12.2764C23.766 11.4607 23.6999 10.6406 23.5588 9.83807H12.24V14.4591H18.7217C18.4528 15.9494 17.5885 17.2678 16.323 18.1056V21.1039H20.19C22.4608 19.0139 23.766 15.9274 23.766 12.2764Z" fill="#4285F4"></path>
                                    <path d="M12.24 24.0008C15.4765 24.0008 18.2059 22.9382 20.1945 21.1039L16.3275 18.1055C15.2517 18.8375 13.8627 19.252 12.2445 19.252C9.11388 19.252 6.45946 17.1399 5.50705 14.2819H1.46997V17.4107C3.48665 21.4194 7.62946 24.0008 12.24 24.0008Z" fill="#34A853"></path>
                                    <path d="M5.50253 14.2818C5.00397 12.8099 5.00397 11.1961 5.50253 9.7242V6.5954H1.46997C-0.171747 9.84624 -0.171747 14.1657 1.46997 17.4107L5.50253 14.2818Z" fill="#FBBC05"></path>
                                    <path d="M12.24 4.74966C13.9509 4.7232 15.6044 5.36697 16.8434 6.54867L20.2695 3.12262C18.1001 1.0855 15.2208 -0.034466 12.24 0.000808666C7.62946 0.000808666 3.48665 2.58222 1.46997 6.5954L5.50705 9.7242C6.45502 6.86169 9.10937 4.74966 12.24 4.74966Z" fill="#EA4335"></path>
                                </svg>
                                Google
                            </button>
                            <button
                                class="group flex items-center justify-center gap-2 rounded-xl border-2 border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800/80 h-12 px-4 text-slate-700 dark:text-white text-sm font-semibold transition-all hover:border-primary hover:shadow-lg hover:scale-105"
                                type="button">
                                <svg class="size-5 dark:fill-white fill-slate-900 group-hover:scale-110 transition-transform" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.5 12.625c0-2.584 2.116-3.834 2.209-3.875-1.2-1.75-3.067-1.983-3.733-2.008-1.584-.167-3.092.933-3.892.933-.808 0-2.033-.908-3.35-.883-1.725.025-3.325 1.008-4.208 2.542-1.8 3.108-.458 7.7 1.3 10.25.858 1.225 1.875 2.608 3.217 2.558 1.283-.05 1.767-.833 3.308-.833 1.542 0 1.983.833 3.325.808 1.375-.025 2.25-1.25 3.1-2.492 1.008-1.35 1.4-2.675 1.433-2.733-.033-.017-2.75-1.05-2.708-4.267zM15.358 4.658c.708-.858 1.183-2.05 1.05-3.233-1.025.042-2.267.683-3.008 1.575-.642.767-1.208 2.025-1.05 3.167 1.133.091 2.292-.584 3.008-1.509z"></path>
                                </svg>
                                Apple
                            </button>
                        </div>
                    </form>
                </div>

                <footer class="text-center py-4">
                    <p class="text-sm text-slate-500 dark:text-slate-400 font-medium">
                        © 2026 KARI. All rights reserved.
                    </p>
                </footer>
            </div>
        </main>
    </div>
</body>
</html>