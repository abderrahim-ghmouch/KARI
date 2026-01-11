<?php
session_start();

include __DIR__ . "/../src/Database.php";
include __DIR__ . "/../src/reservation.php";
include __DIR__ . "/../src/rentale.php";

$reservation = new Reservation();
$reservations = $reservation->getallresrvation($_SESSION['user_id']);

?>




<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Guest Reservations Management - KARI</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap"
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
                        "kari-cream": "#E3CAA5",
                        "kari-earth": "#AD8B73",
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
        body {
            font-family: 'Inter', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body class="bg-kari-cream dark:bg-background-dark min-h-screen font-display">
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
                            href="favoris.view.php">Wishlists</a>
                        <a class="text-primary text-sm font-bold leading-normal border-b-2 border-primary"
                            href="#">Trips</a>
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
            <main class="flex-1 flex justify-center py-10 px-4 md:px-10 lg:px-40">
                <div class="layout-content-container flex flex-col max-w-[1024px] flex-1">
                   
                    <div class="flex flex-wrap justify-between items-end gap-3 px-4 pb-6">
                        <h1 class="text-[#151413] text-4xl font-black leading-tight tracking-[-0.033em]">Trips</h1>
                    </div>
                    <!-- Tabs -->
                    <div class="pb-6">
                        <div class="flex border-b border-black/10 px-4 gap-8">
                            <a class="flex flex-col items-center justify-center border-b-[3px] border-primary text-primary pb-[13px] pt-4 transition-all"
                                href="#">
                                <p class="text-sm font-bold leading-normal tracking-wide">reserved</p>
                            </a>
                         
                        </div>
                    </div>
                    <!-- Reservation List -->
                    <div class="flex flex-col gap-6 px-4">
                        <!-- Reservation Card 1 -->
                        <?php foreach($reservations as $reservation): ?>
                            <?php 
                                $rental = new Rental();
                                $rental_details = $rental->getById($reservation->getRentalId());    
                            ?>
                            <div
                                class="flex flex-col md:flex-row items-stretch justify-between gap-6 rounded-xl bg-white p-6 shadow-sm border border-black/5 hover:shadow-md transition-shadow">
                                <div class="w-full md:w-64 bg-center bg-no-repeat aspect-video md:aspect-square bg-cover rounded-lg"
                                    data-alt="Serene lakeside cabin with mountain view"
                                    style='background-image: url("/images/<?= $rental_details->getImage() ?>");'>
                                </div>
                                <div class="flex flex-1 flex-col justify-between py-1">
                                    <div class="flex flex-col gap-2">
                                        <div class="flex items-center gap-2">
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-primary text-white">
                                                <?= $reservation->getstatus() ?>
                                            </span>

                                            <span class="text-[#7b746f] text-xs font-medium">Reservation #KA-29482</span>
                                        </div>
                                        <h3 class="text-[#151413] text-xl font-black leading-tight">
                                        </h3>
                                        <div class="flex items-center gap-1 text-[#7b746f] text-sm">
                                            <span class="material-symbols-outlined text-base">location_on</span>
                                            <p><?=$rental_details->getAddress()?>, <?=$rental_details->getcity()?>,</p>
                                        </div>
                                        <div class="flex items-center gap-1 text-primary font-semibold text-sm mt-1">
                                            <span class="material-symbols-outlined text-base">calendar_today</span>
                                            <p><?=  $reservation->getStart_date() ?> – <?=  $reservation->getend_date() ?></p>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div
                                    class="flex flex-col justify-center gap-3 md:border-l md:border-black/5 md:pl-6 min-w-[180px]">
                                    <?php if($reservation->getstatus() !== "canceled"): ?>
                                        <form action="../controllers/cancel_reservation.php" method="post">
                                            <input type="hidden" name="id" value="<?= $reservation->getId() ?>">
                                            <button type="submit"
                                                class="flex items-center justify-center rounded-lg h-10 px-4 bg-transparent text-[#7b746f] hover:text-red-600 hover:bg-red-50 text-sm font-bold transition-all w-full">
                                                <span class="truncate">Cancel Reservation</span>
                                            </button>
                                        </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach;?>
                    </div>
                </div>       
            </main>
            <!-- Footer for consistency -->
            <footer class="mt-auto border-t border-black/5 bg-white py-10 px-10 text-center">
                <div class="flex flex-col items-center gap-4">
                    <div class="flex items-center gap-2 text-primary opacity-50">
                        <span class="material-symbols-outlined">eco</span>
                        <p class="text-sm font-bold tracking-widest">KARI RENTALS</p>
                    </div>
                    <p class="text-[#7b746f] text-sm">© 2023 Kari short-term rental platform. All rights reserved.</p>
                </div>
            </footer>
        </div>
    </div>
</body>

</html>