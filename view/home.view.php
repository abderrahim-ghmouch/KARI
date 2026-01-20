<?php
session_start();

include __DIR__ . "/../src/Database.php";
include __DIR__ . "/../src/rentale.php";
include __DIR__ . "/../src/favorite.php";

$rental = new Rental();
$rentals = $rental->getAll();

?>



<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>KARI</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#AD8B73",
                        "background-light": "#E3CAA5",
                        "background-dark": "#2C1810",
                        "text-main": "#2C1810",
                        "text-secondary": "#5D4037",
                        "accent": "#CEAB93",
                    },
                    fontFamily: {
                        "display": ["Plus Jakarta Sans", "sans-serif"]
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    }
</style>
</head>

<body
    class="bg-background-light dark:bg-background-dark font-display text-text-main dark:text-white overflow-x-hidden antialiased">
    <div class="relative flex min-h-screen w-full flex-col">

        <header
            class="flex items-center justify-between whitespace-nowrap border-b border-solid border-black/5 bg-white/80 backdrop-blur-md px-10 py-3 sticky top-0 z-50">
            <div class="flex items-center gap-8">
                <div class="flex items-center gap-4 text-primary">
                    <div class="size-6">
                        <svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M44 11.2727C44 14.0109 39.8386 16.3957 33.69 17.6364C39.8386 18.877 44 21.2618 44 24C44 26.7382 39.8386 29.123 33.69 30.3636C39.8386 31.6043 44 33.9891 44 36.7273C44 40.7439 35.0457 44 24 44C12.9543 44 4 40.7439 4 36.7273C4 33.9891 8.16144 31.6043 14.31 30.3636C8.16144 29.123 4 26.7382 4 24C4 21.2618 8.16144 18.877 14.31 17.6364C8.16144 16.3957 4 14.0109 4 11.2727C4 7.25611 12.9543 4 24 4C35.0457 4 44 7.25611 44 11.2727Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                    <h2 class="text-[#151413] text-xl font-black leading-tight tracking-tight">KARI</h2>
                </div>
                <label class="flex flex-col min-w-40 h-10 max-w-64 hidden md:flex">
                    <div class="flex w-full flex-1 items-stretch rounded-full h-full">
                        <div
                            class="text-[#7b746f] flex border-none bg-[#f3f2f2] items-center justify-center pl-4 rounded-l-full">
                            <span class="material-symbols-outlined text-xl">search</span>
                        </div>
                        <input
                            class="form-input flex w-full min-w-0 flex-1 border-none bg-[#f3f2f2] focus:ring-0 rounded-r-full text-sm font-normal placeholder:text-[#7b746f] px-4"
                            placeholder="Search trips" value="" />
                    </div>
                </label>
                </div>
                 <div class="flex flex-1 justify-end gap-6 items-center">
    <div class="hidden lg:flex items-center gap-8">

        <a class="text-primary text-sm font-bold leading-normal border-b-2 border-primary"
            href="#">home</a>

        <a class="text-[#151413] text-sm font-semibold leading-normal hover:text-primary transition-colors"
            href="favoris.view.php">Wishlists</a>

        <a class="text-[#151413] text-sm font-semibold leading-normal hover:text-primary transition-colors"
            href="resirvation.view.php">Trips</a>

        <a class="text-[#151413] text-sm font-semibold leading-normal hover:text-primary transition-colors"
            href="profile.view.php">profile</a>

    </div>
</div>
        </header>
        <main class="flex-1">
            <div
                class="hidden md:flex flex-col items-center justify-center pt-8 pb-6 px-4 md:px-10 bg-background-light dark:bg-background-dark">
                <div class="w-full max-w-[850px]">
                    <div
                        class="flex flex-col md:flex-row items-center bg-white dark:bg-gray-800 rounded-full border border-gray-200 dark:border-gray-700 shadow-lg hover:shadow-xl transition-shadow p-2">
                        <div
                            class="flex-1 relative group px-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-full cursor-pointer border-r border-transparent md:border-gray-200 dark:md:border-gray-700">
                            <label class="block text-xs font-bold text-primary dark:text-white">Where</label>

                        </div>
                        <div
                            class="flex-1 relative group px-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-full cursor-pointer border-r border-transparent md:border-gray-200 dark:md:border-gray-700">
                            <label class="block text-xs font-bold text-primary dark:text-white">Check in</label>
                            <input
                                class="w-full bg-transparent border-none p-0 text-sm text-text-secondary dark:text-gray-300 placeholder:text-text-secondary/70 focus:ring-0 truncate"
                                placeholder="Add dates" type="text" />
                        </div>
                        <div
                            class="flex-1 relative group px-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-full cursor-pointer border-r border-transparent md:border-gray-200 dark:md:border-gray-700">
                            <label class="block text-xs font-bold text-primary dark:text-white">Check out</label>
                            <input
                                class="w-full bg-transparent border-none p-0 text-sm text-text-secondary dark:text-gray-300 placeholder:text-text-secondary/70 focus:ring-0 truncate"
                                placeholder="Add dates" type="text" />
                        </div>
                        <div
                            class="flex-[1.2] relative flex items-center justify-between pl-6 pr-2 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-full cursor-pointer">
                            <div class="flex flex-col">
                                <label class="block text-xs font-bold text-primary dark:text-white">Who</label>
                                <input
                                    class="w-full bg-transparent border-none p-0 text-sm text-text-secondary dark:text-gray-300 placeholder:text-text-secondary/70 focus:ring-0 truncate"
                                    placeholder="Add guests" type="text" />
                            </div>
                            <button
                                class="bg-primary hover:bg-primary/90 text-white rounded-full size-12 flex items-center justify-center shadow-md transition-all transform active:scale-95">
                                <span class="material-symbols-outlined font-bold">search</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="max-w-[1920px] mx-auto px-4 md:px-10 py-6">
                <div
                    class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-x-6 gap-y-10">
                    <?php foreach ($rentals as $rental): ?>
                        <a class="flex flex-col gap-3 group cursor-pointer relative"
                            href="/view/details.view.php?rental_id=<?= $rental->getId() ?>">
                            <div
                                class="relative w-full aspect-[20/19] rounded-xl overflow-hidden bg-gray-200 dark:bg-gray-700">
                                <?php if (isset($_SESSION["user_id"])): ?>
                                    <div class="absolute top-3 right-3 z-10">
                                        <?php
                                        $favorite = new Favorite();

                                        $isFavorited = $favorite->isFavorite($_SESSION['user_id'], $rental->getId());
                                        ?>
                                        <?php if ($isFavorited): ?>
                                            <form action="../controllers/remove_favorite.php" method="post">
                                                <input type="hidden" name="rental_id" value="<?= $rental->getId() ?>">
                                                <button type="submit"
                                                    class="material-symbols-outlined text-red-500/70 hover:text-red-500 text-2xl drop-shadow-md cursor-pointer transition-transform active:scale-90">favorite</button>
                                            </form>
                                        <?php else: ?>
                                            <form action="../controllers/add_favorite.php" method="post">
                                                <input type="hidden" name="rental_id" value="<?= $rental->getId() ?>">
                                                <button type="submit"
                                                    class="material-symbols-outlined text-white/70 hover:text-white text-2xl drop-shadow-md cursor-pointer transition-transform active:scale-90">favorite</button>
                                            </form>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>

                                <div class="w-full h-full bg-center bg-no-repeat bg-cover transform group-hover:scale-105 transition-transform duration-500"
                                    data-alt="Modern downtown loft apartment interior with large windows"
                                    style='background-image: url("/images/<?= $rental->getImage() ?>");'>
                                </div>
                            </div>
                            <div class="flex flex-col gap-1">
                                <div class="flex justify-between items-start">
                                    <h3 class="text-text-main dark:text-white font-semibold text-[15px] truncate">
                                        <?= $rental->getTitle() ?>
                                    </h3>
                                    <div class="flex items-center gap-1">
                                        <span
                                            class="material-symbols-outlined text-sm text-text-main dark:text-white">star</span>
                                        <span class="text-text-main dark:text-white text-[15px] font-light">4.98</span>
                                    </div>
                                </div>
                                <p class="text-text-secondary dark:text-gray-400 text-[15px] font-light leading-snug">
                                    <?= $rental->getCity() ?>
                                </p>

                                <div class="flex items-center gap-1 mt-1">
                                    <p class="text-text-main dark:text-white text-[15px] font-semibold">
                                        <?= $rental->getPrice() ?>$
                                    </p>
                                    <p class="text-text-main dark:text-white text-[15px] font-light">night</p>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

        </main>
        <footer class="bg-white dark:bg-background-dark border-t border-accent/20 dark:border-gray-800 pb-20 md:pb-6">
            <div class="max-w-[1920px] mx-auto px-4 md:px-10 py-10">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="flex flex-col gap-4">
                        <h4 class="font-bold text-text-main dark:text-white text-sm">Support</h4>
                        <ul class="flex flex-col gap-3 text-sm text-text-secondary dark:text-gray-400">
                            <li><a class="hover:underline" href="#">Help Center</a></li>
                            <li><a class="hover:underline" href="#">AirCover</a></li>
                            <li><a class="hover:underline" href="#">Anti-discrimination</a></li>
                            <li><a class="hover:underline" href="#">Disability support</a></li>
                        </ul>
                    </div>
                    <div class="flex flex-col gap-4">
                        <h4 class="font-bold text-text-main dark:text-white text-sm">Hosting</h4>
                        <ul class="flex flex-col gap-3 text-sm text-text-secondary dark:text-gray-400">
                            <li><a class="hover:underline" href="#">Staycation your home</a></li>
                            <li><a class="hover:underline" href="#">AirCover for Hosts</a></li>
                            <li><a class="hover:underline" href="#">Hosting resources</a></li>
                            <li><a class="hover:underline" href="#">Community forum</a></li>
                        </ul>
                    </div>
                    <div class="flex flex-col gap-4">
                        <h4 class="font-bold text-text-main dark:text-white text-sm">Staycation</h4>
                        <ul class="flex flex-col gap-3 text-sm text-text-secondary dark:text-gray-400">
                            <li><a class="hover:underline" href="#">Newsroom</a></li>
                            <li><a class="hover:underline" href="#">New features</a></li>
                            <li><a class="hover:underline" href="#">Careers</a></li>
                            <li><a class="hover:underline" href="#">Investors</a></li>
                        </ul>
                    </div>
                    <div class="flex flex-col gap-4">
                        <div class="flex items-center gap-2 text-primary">
                            <div class="size-6 flex items-center justify-center">
                                <span class="material-symbols-outlined text-primary text-2xl">travel_explore</span>
                            </div>
                            <span class="font-bold text-text-main dark:text-white">Staycation</span>
                        </div>
                        <p class="text-sm text-text-secondary dark:text-gray-400">© 2023 Staycation, Inc.</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>

<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Guest Personal Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#AD8B73", // Main navigation links, buttons (mapped from darker earthy tone)
                        "secondary": "#CEAB93", // Card backgrounds, favorite icons
                        "canvas": "#E3CAA5", // Canvas/Background
                        "status-badge": "#AD8B73", // Booking status badges
                        "text-dark": "#4A3B32", // Darker text for contrast on earthy background
                        "text-light": "#6D5446", // Secondary text
                        "background-light": "#E3CAA5", // Using the requested canvas color
                        "background-dark": "#2C241F",
                    },
                    fontFamily: {
                        "display": ["Plus Jakarta Sans", "sans-serif"]
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>