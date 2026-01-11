<?php 

session_start();

include __DIR__ . "/../src/Database.php";
include __DIR__ . "/../src/rentale.php";
include __DIR__ . "/../src/favorite.php";

$favorite = new Favorite();

$favorites = $favorite->getAllFavoritesByUser($_SESSION['user_id']);

?>

<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>User Favorites - KARI</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap"
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
                        "primary": "#ac8a72",
                        "background-light": "#f7f7f6",
                        "background-dark": "#1c1916",
                        "earthy-beige": "#E3CAA5",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }

        .fill-primary {
            font-variation-settings: 'FILL' 1;
            color: #ac8a72;
        }

        body {
            background-color: #E3CAA5;
          
        }
    </style>
</head>

<body class="font-display">
    <div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
        <div class="layout-container flex h-full grow flex-col">

     
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
                        <a class="text-[#151413] text-sm font-semibold leading-normal hover:text-primary transition-colors"
                            href="home.view.php">home</a>
                        <a class="text-[#151413] text-sm font-semibold leading-normal hover:text-primary transition-colors"
                            href="#">Wishlists</a>
                        <a class="text-primary text-sm font-bold leading-normal border-b-2 border-primary"
                            href="reservation.view.php">Trips</a>
                    </div>
                    <button
                        class="flex items-center justify-center rounded-full size-10 bg-[#f3f2f2] text-[#151413] hover:bg-kari-earth/20 transition-all">
                        <span class="material-symbols-outlined">notifications</span>
                    </button>
                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border-2 border-primary/20"
                        data-alt="User profile avatar"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC2FR_ShPg2PeLCg0_Ry7DKHrKwTGkJlIdMZkP5xuelzcRNkD6kP3XepG2Weo6tTl4Y6kIBKwxUhOV9iO79Hj7xJbtUwxfEDDIy4yz_ugh2xNc0DfEzcUoAbl39sk5aP-I1aHiH0IDR3Wi1FLxkHNUbCsVq2r5XujR5gmtjW2iGzAhb69hVx2frbz4rXLevqi2DV7fjcZA-EKv_5_D6ub3Kx7OocGxMpq-_2N05EN2EO8l3Z_9u1g-ypRPF8_t2zoKTgi7KXUVdgq9m");'>
                    </div>
                </div>
            </header>
            <main class="flex-1 flex flex-col items-center">
                <div class="w-full max-w-[1200px] px-6 lg:px-10 py-10">
                
                    <div class="flex flex-wrap justify-between items-end gap-3 mb-8">
                        <div class="flex flex-col gap-2">
                            <h1 class="text-[#151413] text-4xl font-black leading-tight tracking-[-0.033em]">Your
                                Favorites</h1>
                            <p class="text-[#5c5652] text-lg font-medium">8 properties saved to your list</p>
                        </div>
                        <div class="flex gap-2">
                            <button
                                class="flex items-center gap-2 px-4 py-2 bg-white rounded-lg border border-black/5 text-sm font-bold shadow-sm hover:bg-white/50">
                                <span class="material-symbols-outlined text-lg">share</span>
                                Share List
                            </button>
                        </div>
                    </div>
                    <!-- Tabs/Filters -->
                    <div class="pb-8 overflow-x-auto">
                        <div class="flex border-b border-black/10 gap-8 min-w-max">
                            <a class="flex flex-col items-center justify-center border-b-[3px] border-primary text-[#151413] pb-4 pt-2"
                                href="#">
                                <p class="text-sm font-bold leading-normal tracking-[0.015em]">All stays</p>
                            </a>
                            <a class="flex flex-col items-center justify-center border-b-[3px] border-transparent text-[#7b746f] pb-4 pt-2 hover:text-primary transition-colors"
                                href="#">
                                <p class="text-sm font-bold leading-normal tracking-[0.015em]">Beachfront</p>
                            </a>
                            <a class="flex flex-col items-center justify-center border-b-[3px] border-transparent text-[#7b746f] pb-4 pt-2 hover:text-primary transition-colors"
                                href="#">
                                <p class="text-sm font-bold leading-normal tracking-[0.015em]">Mountain View</p>
                            </a>
                            <a class="flex flex-col items-center justify-center border-b-[3px] border-transparent text-[#7b746f] pb-4 pt-2 hover:text-primary transition-colors"
                                href="#">
                                <p class="text-sm font-bold leading-normal tracking-[0.015em]">Urban Lofts</p>
                            </a>
                        </div>
                    </div>
                    <!-- Image Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-10">
                        <?php foreach ($favorites as $favorite): 
                            $rental = new Rental();
                            $rental = $rental->getById($favorite->getRentalId());
                        ?>
                            <div class="flex flex-col gap-3 group cursor-pointer">
                                <div class="relative w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl shadow-sm overflow-hidden"
                                    data-alt="Modern house with beach view"
                                    style='background-image: url("/images/<?= $rental->getImage() ?>");'>
                                    <div
                                        class="absolute top-3 right-3 bg-white/30 backdrop-blur-md rounded-full p-2 flex items-center justify-center">
                                        <?php 
                                            $isFavorited = $favorite->isFavorite($_SESSION['user_id'], $rental->getId());
                                        ?>
                                        <?php if($isFavorited): ?>
                                            <form action="../controllers/remove_favorite.php" method="post">
                                                <input type="hidden" name="rental_id" value="<?= $rental->getId() ?>">
                                                <button type="submit" class="material-symbols-outlined text-red-500/70 hover:text-red-500 text-2xl drop-shadow-md cursor-pointer transition-transform active:scale-90">favorite</button>
                                            </form>
                                        <?php else: ?>
                                            <form action="../controllers/add_favorite.php" method="post">
                                                <input type="hidden" name="rental_id" value="<?= $rental->getId() ?>">
                                                <button type="submit" class="material-symbols-outlined text-white/70 hover:text-white text-2xl drop-shadow-md cursor-pointer transition-transform active:scale-90">favorite</button>
                                            </form>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="px-1">
                                    <div class="flex justify-between items-start">
                                        <p class="text-[#151413] text-base font-bold leading-normal"><?= $rental->getTitle() ?></p>
                                        <div class="flex items-center gap-1">
                                            <span class="material-symbols-outlined text-sm fill-primary">star</span>
                                            <span class="text-sm font-medium">4.9</span>
                                        </div>
                                    </div>
                                    <p class="text-[#7b746f] text-sm font-normal leading-normal"><?= $rental->getCity() ?>, <?= $rental->getAddress() ?></p>
                                    <p class="text-[#151413] text-sm font-bold leading-normal mt-1">$<?= $rental->getPrice() ?> <span
                                            class="font-normal text-[#7b746f]">/ night</span></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- Pagination -->
                    <div class="flex items-center justify-center py-12 gap-2">
                        <a class="flex size-10 items-center justify-center rounded-full hover:bg-white/40" href="#">
                            <span class="material-symbols-outlined">chevron_left</span>
                        </a>
                        <a class="text-sm font-bold flex size-10 items-center justify-center text-white rounded-full bg-primary"
                            href="#">1</a>
                        <a class="text-sm font-normal flex size-10 items-center justify-center text-[#151413] rounded-full hover:bg-white/40"
                            href="#">2</a>
                        <a class="text-sm font-normal flex size-10 items-center justify-center text-[#151413] rounded-full hover:bg-white/40"
                            href="#">3</a>
                        <a class="flex size-10 items-center justify-center rounded-full hover:bg-white/40" href="#">
                            <span class="material-symbols-outlined">chevron_right</span>
                        </a>
                    </div>
                </div>
            </main>
            <!-- Footer -->
            <footer class="bg-white border-t border-black/5 py-12 px-10">
                <div class="max-w-[1200px] mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="flex flex-col gap-4">
                        <div class="flex items-center gap-2 text-[#151413]">
                            <div class="size-5 text-primary">
                                <svg fill="currentColor" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M44 11.2727C44 14.0109 39.8386 16.3957 33.69 17.6364C39.8386 18.877 44 21.2618 44 24C44 26.7382 39.8386 29.123 33.69 30.3636C39.8386 31.6043 44 33.9891 44 36.7273C44 40.7439 35.0457 44 24 44C12.9543 44 4 40.7439 4 36.7273C4 33.9891 8.16144 31.6043 14.31 30.3636C8.16144 29.123 4 26.7382 4 24C4 21.2618 8.16144 18.877 14.31 17.6364C8.16144 16.3957 4 14.0109 4 11.2727C4 7.25611 12.9543 4 24 4C35.0457 4 44 7.25611 44 11.2727Z">
                                    </path>
                                </svg>
                            </div>
                            <h2 class="text-[#151413] text-lg font-bold">KARI</h2>
                        </div>
                        <p class="text-[#7b746f] text-sm">Find your perfect stay anywhere in the world.</p>
                    </div>
                    <div>
                        <h4 class="font-bold text-sm mb-4">Support</h4>
                        <ul class="text-sm text-[#7b746f] flex flex-col gap-2">
                            <li>Help Center</li>
                            <li>AirCover</li>
                            <li>Anti-discrimination</li>
                            <li>Disability support</li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-bold text-sm mb-4">Hosting</h4>
                        <ul class="text-sm text-[#7b746f] flex flex-col gap-2">
                            <li>List your home</li>
                            <li>AirCover for Hosts</li>
                            <li>Hosting resources</li>
                            <li>Community forum</li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-bold text-sm mb-4">Newsletter</h4>
                        <div class="flex flex-col gap-2">
                            <input class="form-input rounded-lg border-black/10 text-sm"
                                placeholder="Enter your email" />
                            <button class="bg-primary text-white font-bold py-2 rounded-lg text-sm">Subscribe</button>
                        </div>
                    </div>
                </div>
                <div
                    class="max-w-[1200px] mx-auto mt-12 pt-8 border-t border-black/5 flex flex-col md:flex-row justify-between text-xs text-[#7b746f]">
                    <div class="flex gap-4">
                        <p>© 2024 Kari, Inc.</p>
                        <p>· Privacy</p>
                        <p>· Terms</p>
                        <p>· Sitemap</p>
                    </div>
                    <div class="flex gap-4 mt-4 md:mt-0 font-bold text-[#151413]">
                        <p>English (US)</p>
                        <p>$ USD</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>

</html>