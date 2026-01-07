<?php
require __DIR__ . "/../src/Database.php";
require __DIR__ . "/../src/User.php";

session_start();

if(isset($_SESSION['user_id']))
    {

    $user_Id=$_SESSION['user_id'];

}else{

    header("location: ./login.view.php");
}

$conn=new Database;
$user = new User(null,null,null,null,null);
$pdo=$conn->getconnection();

$stmt = $pdo->query("SELECT * FROM USERS where ID=$user_Id ");

$row=$stmt->fetch();


?>
<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Profile - KARI</title>
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

        .tab-active {
            border-bottom: 2px solid #6366f1;
            color: #6366f1;
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
                <h2 class="text-slate-900 dark:text-white text-xl font-bold leading-tight tracking-tight">KARI</h2></h2>
            </div>
           <div class="flex gap-3 items-center">
    <button class="p-2 rounded-xl hover:bg-white/50 dark:hover:bg-slate-800/50 transition-all">
        <span class="material-symbols-outlined text-slate-700 dark:text-slate-200">notifications</span>
    </button>
    
    <button class="p-2 rounded-xl hover:bg-white/50 dark:hover:bg-slate-800/50 transition-all">
        <span class="material-symbols-outlined text-slate-700 dark:text-slate-200">settings</span>
    </button>

    <div href="logout.php" class="p-2 rounded-xl hover:bg-red-50 dark:hover:bg-red-900/20 group transition-all" title="Logout">
        <span class="material-symbols-outlined text-slate-700 dark:text-slate-200 group-hover:text-red-600 dark:group-hover:text-red-400">logout</span>
    </div>

    <div class="w-10 h-10 rounded-full bg-gradient-to-br from-indigo-500 to-purple-500 flex items-center justify-center text-white font-bold cursor-pointer hover:scale-110 transition-transform">
        JD
    </div>
</div>
        </header>

        <main class="flex-1 pt-28 pb-16 px-4 sm:px-6">
            <div class="max-w-6xl mx-auto flex flex-col gap-6">
                
                
                <div class="glass-effect rounded-2xl p-8 shadow-xl relative overflow-hidden">
                    <div class="absolute top-0 left-0 right-0 h-32 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 opacity-20"></div>
                    <div class="relative flex flex-col sm:flex-row gap-6 items-start sm:items-center">
                        <div class="relative group">
                            <div class="w-28 h-28 rounded-2xl bg-gradient-to-br from-indigo-500 to-purple-500 flex items-center justify-center text-white text-4xl font-bold shadow-lg">
                                
                            </div>
                           
                                </div>
                        <div class="flex-1">
                            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                                <div>
                                    <h1 class="text-3xl font-bold text-slate-900 dark:text-white mb-2"><?= $row["name"] ." ".$row["lastname"] ?></h1>
                                    <p class="text-slate-600 dark:text-slate-400 flex items-center gap-2 mb-1">
                                        <span class="material-symbols-outlined text-lg">email</span>
                                        <?=$row["email"]?>
                                    </p>

                                </div>
                                <button class="group relative overflow-hidden rounded-xl px-6 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold shadow-lg hover:shadow-xl hover:scale-105 transition-all">
                                    <span class="relative z-10 flex items-center gap-2">
                                        <span class="material-symbols-outlined text-xl">edit</span>
                                        Edit Profile
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-4 mt-8 pt-6 border-t border-slate-200 dark:border-slate-700">
                        <div class="text-center">
                            <div class="text-2xl font-bold text-primary mb-1">12</div>
                            <div class="text-sm text-slate-600 dark:text-slate-400">Bookings</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-primary mb-1">8</div>
                            <div class="text-sm text-slate-600 dark:text-slate-400">Reviews</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold text-primary mb-1">4.8</div>
                            <div class="text-sm text-slate-600 dark:text-slate-400">Rating</div>
                        </div>
                    </div>
                </div>

                
                <div class="glass-effect rounded-2xl p-2 shadow-lg">
                    <div class="flex gap-2 overflow-x-auto">
                        <button class="tab-active px-6 py-3 rounded-xl font-semibold text-sm transition-all whitespace-nowrap">
                            Personal Info
                        </button>
                        <button class="px-6 py-3 rounded-xl font-semibold text-sm text-slate-600 dark:text-slate-400 hover:text-primary hover:bg-white/50 dark:hover:bg-slate-800/50 transition-all whitespace-nowrap">
                            Security
                        </button>
                        <button class="px-6 py-3 rounded-xl font-semibold text-sm text-slate-600 dark:text-slate-400 hover:text-primary hover:bg-white/50 dark:hover:bg-slate-800/50 transition-all whitespace-nowrap">
                            Preferences
                        </button>
                        <button class="px-6 py-3 rounded-xl font-semibold text-sm text-slate-600 dark:text-slate-400 hover:text-primary hover:bg-white/50 dark:hover:bg-slate-800/50 transition-all whitespace-nowrap">
                            Notifications
                        </button>
                    </div>
                </div>

                <!-- Personal Info Form -->
                <div class="glass-effect rounded-2xl p-8 shadow-xl">
                    <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">person</span>
                        Personal Information
                    </h2>
                    <form class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <label class="flex flex-col gap-2.5">
                            <span class="text-slate-700 dark:text-slate-200 text-sm font-semibold">name</span>
                            <input name="firstname" value="<?= $row["name"] ?>"
                                class="input-glow form-input w-full rounded-xl border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800/80 text-slate-900 dark:text-white h-12 px-4 text-base focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all"
                                type="text" />
                        </label>
                        <label class="flex flex-col gap-2.5">
                            <span class="text-slate-700 dark:text-slate-200 text-sm font-semibold">last name</span>
                            <input name="lastname" value="<?= $row["lastname"] ?>"
                                class="input-glow form-input w-full rounded-xl border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800/80 text-slate-900 dark:text-white h-12 px-4 text-base focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all"
                                type="text" />
                        </label>
                        <label class="flex flex-col gap-2.5 md:col-span-2">
                            <span class="text-slate-700 dark:text-slate-200 text-sm font-semibold">Email Address</span>
                            <input name="email" value= <?=$row["email"]?>
                                class="input-glow form-input w-full rounded-xl border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800/80 text-slate-900 dark:text-white h-12 px-4 text-base focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all"
                                type="email"/>
                        </label>

                    </form>

                    <div class="flex flex-col sm:flex-row gap-4 mt-8 pt-6 border-t border-slate-200 dark:border-slate-700">
                        <button class="group relative overflow-hidden flex-1 rounded-xl px-6 py-3 bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-semibold shadow-lg hover:shadow-xl hover:scale-[1.02] transition-all">
                            <span class="relative z-10 flex items-center justify-center gap-2">
                                <span class="material-symbols-outlined text-xl">save</span>
                                Save Changes
                            </span>
                        </button>
                        <button class="flex-1 rounded-xl px-6 py-3 border-2 border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-200 font-semibold hover:bg-white/50 dark:hover:bg-slate-800/50 transition-all">
                            Cancel
                        </button>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="glass-effect rounded-2xl p-6 shadow-lg hover:scale-105 transition-transform cursor-pointer">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-blue-500 to-cyan-500 flex items-center justify-center mb-4">
                            <span class="material-symbols-outlined text-white text-2xl">security</span>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Security Settings</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">Manage your password and authentication</p>
                    </div>
                    <div class="glass-effect rounded-2xl p-6 shadow-lg hover:scale-105 transition-transform cursor-pointer">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-purple-500 to-pink-500 flex items-center justify-center mb-4">
                            <span class="material-symbols-outlined text-white text-2xl">payment</span>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Payment Methods</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">Add or update payment information</p>
                    </div>
                    <div class="glass-effect rounded-2xl p-6 shadow-lg hover:scale-105 transition-transform cursor-pointer">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-orange-500 to-red-500 flex items-center justify-center mb-4">
                            <span class="material-symbols-outlined text-white text-2xl">shield_person</span>
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Privacy Controls</h3>
                        <p class="text-sm text-slate-600 dark:text-slate-400">Control who can see your information</p>
                    </div>
                </div>

            </div>
        </main>
    </div>
</body>
</html>