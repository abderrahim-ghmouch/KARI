<?php
session_start();

include __DIR__ . "/../src/rentale.php";
include __DIR__ . "/../src/host.php";

$rental = new Rental();

$rental_details = $rental->getById($_GET['rental_id']);

$host = new Host();

$host_details = $host->getById($rental_details->getHostId());

?>



<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Rental Property Details (Earthy Palette)</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200..800&amp;family=Noto+Sans:wght@300..800&amp;display=swap"
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
                        "deep-navy": "#AD8B73",
                        "slate-blue": "#CEAB93",
                        "cream": "#E3CAA5",
                        "cream-border": "#CEAB93",
                        "background-dark": "#101c22",
                    },
                    fontFamily: {
                        "display": ["Plus Jakarta Sans", "Noto Sans", "sans-serif"],
                        "body": ["Plus Jakarta Sans", "Noto Sans", "sans-serif"]
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
</head>

<body
    class="bg-cream dark:bg-background-dark text-deep-navy dark:text-gray-100 font-display transition-colors duration-200 antialiased">

    <main class="max-w-[1160px] mx-auto px-4 sm:px-10 py-6 pb-20">

        <div class="mb-6">
            <h1
                class="text-deep-navy dark:text-white text-3xl sm:text-4xl font-extrabold leading-tight tracking-[-0.02em] mb-2">
                <?= $rental_details->getTitle();
                ?>
            </h1>
            <div class="flex flex-wrap items-center justify-between gap-4">
                <div
                    class="flex items-center gap-2 text-sm sm:text-base font-medium text-deep-navy dark:text-gray-300 flex-wrap">
                    <span class="flex items-center gap-1">
                        <span class="material-symbols-outlined text-slate-blue text-[18px]"
                            style="font-variation-settings: 'FILL' 1;">star</span>
                        <span>4.92</span>
                    </span>
                    <span class="text-deep-navy dark:text-gray-400">·</span>
                    <a class="underline decoration-1 underline-offset-2" href="#reviews">200 reviews</a>
                    <span class="text-deep-navy dark:text-gray-400">·</span>
                    <span class="flex items-center gap-1 text-gray-500 dark:text-gray-400">
                        <span class="material-symbols-outlined text-[16px] text-slate-blue"
                            style="font-variation-settings: 'FILL' 1;">verified</span>
                        <span>Superhost</span>
                    </span>
                    <span class="text-deep-navy dark:text-gray-400">·</span>
                    <a class="underline decoration-1 underline-offset-2 text-gray-600 dark:text-gray-400 font-semibold"
                        href="#"> <?= $rental_details->getAddress() ?> </a>
                </div>

            </div>
        </div>
        <div
            class="relative w-full h-[300px] sm:h-[400px] md:h-[480px] grid grid-cols-4 grid-rows-2 gap-2 rounded-xl overflow-hidden mb-10 group">
            <div class="col-span-4 row-span-2 bg-gray-200 relative cursor-pointer hover:brightness-95 transition-all">
                <div class="absolute inset-0 bg-cover bg-center"
                    data-alt="Large sunny living room overlooking the ocean"
                    style="background-image: url('/images/<?= $rental_details->getImage() ?>');">
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 relative">
            <div class="lg:col-span-2 flex flex-col gap-8">
                <div class="flex justify-between items-center border-b border-cream-border dark:border-gray-800 pb-8">
                    <div>
                        <h2 class="text-xl sm:text-2xl font-bold mb-1 text-deep-navy">Entire propety in
                            <?= $rental_details->getCity() ?>
                        </h2>

                    </div>
                </div>
                <div class="border-b border-cream-border dark:border-gray-800 pb-8">
                    <h2 class="text-2xl font-bold mb-6 text-deep-navy">About this space</h2>
                    <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                        <?= $rental_details->getDescription() ?>
                    </p>
                </div>
                <div class="border-b border-cream-border dark:border-gray-800 pb-8" id="reviews">
                    <div class="flex items-center gap-2 mb-8">
                        <span class="material-symbols-outlined text-slate-blue text-2xl"
                            style="font-variation-settings: 'FILL' 1;">star</span>
                        <h2 class="text-2xl font-bold text-deep-navy">4.92 · 200 reviews</h2>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-10">
                        <div>
                            <div class="flex items-center gap-3 mb-3">
                                <div class="w-10 h-10 bg-gray-200 rounded-full bg-cover bg-center"
                                    data-alt="Reviewer avatar 1"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAubprqLheooyV3J8dhMCQcguYLisBIe_qhigvzx8Y-HLuM75RPVwUNr90IiPmmNR6WNv3UMNi9CCiElVh9h0Em3Gc6gVVee7pn2zf9WwO1OkAUxoxnBR8HXGHzr3ClVI_vM0UQ9Z2_7ngfStqwt6YOk6ZxmoueOuSKKQIXsOIhUUOk5iSaPzLbTBBr23P3MNi2vFD3IcHUH5wEDi-LftFouJYzP_eBwEtDhXzHBb7PnP7s-b5y4aJzwW_6ueQft1OqWfjuhbYRe3tg');">
                                </div>
                                <div>
                                    <h4 class="font-bold text-base text-deep-navy dark:text-white">James</h4>
                                    <p class="text-sm text-gray-500">October 2023</p>
                                </div>
                            </div>
                            <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                                Absolutely stunning place! The view is even better than in the photos. Sarah was a
                                fantastic host, very responsive and helpful.
                            </p>
                        </div>
                        <div>
                            <div class="flex items-center gap-3 mb-3">
                                <div class="w-10 h-10 bg-gray-200 rounded-full bg-cover bg-center"
                                    data-alt="Reviewer avatar 2"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCEkbNlUHLqaMqkmn2H5eO27DliopIfeN4rHcsp2moLrqBkZamFiyfAVcVRTSDx4fFadWzKXfa5-qGiyqovq4ePJPPRB-DNwd_NYWoamg9boEW5uD1TRzdQROEr3U1JFwXW2bJ-I5H601c4da2o7bBhDNHLHIPWptHjbzq2qGoXNoUCmZBku9RKXgtbCJvXkKn7q6aXpV-N9Nhboyw9Q0X1iVQysTYy6EnCWyOFfSAltfaiN9HYRFbGXDGg7w94p2ZKjmKkeJi77GxD');">
                                </div>
                                <div>
                                    <h4 class="font-bold text-base text-deep-navy dark:text-white">Emily</h4>
                                    <p class="text-sm text-gray-500">September 2023</p>
                                </div>
                            </div>
                            <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                                A perfect getaway. The pool is amazing and the location is quiet yet close to
                                everything. Highly recommended!
                            </p>
                        </div>
                        <div>
                            <div class="flex items-center gap-3 mb-3">
                                <div class="w-10 h-10 bg-gray-200 rounded-full bg-cover bg-center"
                                    data-alt="Reviewer avatar 3"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAXTaMM4tZ7EB6mztFrRYxRWDjhxbZdnrQNm1LBuVee6hE7NN5fvo6dfSRTshF1FiKEW4RPkE5_RpJxnAknvzwo_VMUnz6CZGQ1Tcf3rOm727MQWtBc1_i9T0cqgo1E6y1s-VUJGR81k_HRdFqhmbt32juD8Qszg_sPiMdydMCzZzE-O9eAJU02Ncz7qlmHOnQWhoASTW54VpylWTV6EszbYqhTq2HFSueMQmpCz37CNUuwQ8aJGKCM0rqBqq7iy9r427Op_ibQYkkM');">
                                </div>
                                <div>
                                    <h4 class="font-bold text-base text-deep-navy dark:text-white">Michael</h4>
                                    <p class="text-sm text-gray-500">August 2023</p>
                                </div>
                            </div>
                            <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                                The design of the villa is beautiful. We loved the open kitchen and the outdoor shower.
                                Will definitely be back.
                            </p>
                        </div>
                        <div>
                            <div class="flex items-center gap-3 mb-3">
                                <div class="w-10 h-10 bg-gray-200 rounded-full bg-cover bg-center"
                                    data-alt="Reviewer avatar 4"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAd_hwVBsHqJE0tz8v-la20s3SV_ooyni6ilRajHmRcfQ_KFw3uWrkDpdWBACIQxyi3qFHQFai2dgngYG7vFnS4ncFmlo24xjSq0yHuSDnJTspvtGx5aaMeFffeFCqnfj05JK5PSO1hQ3TKlyZSSRAzm6xRoobx9CQvnEiaOQ0xqyw96LAFsRwCovah6sGh6BNbNdI5o7CfZgbY0EUiyGkZwOKK18V94NTHzUk4ID6YBqkKfraEocpyH6sCx5DQzvWyHU8lA713qHUi');">
                                </div>
                                <div>
                                    <h4 class="font-bold text-base text-deep-navy dark:text-white">Jessica</h4>
                                    <p class="text-sm text-gray-500">July 2023</p>
                                </div>
                            </div>
                            <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                                Great value for money. The host provided excellent local tips which made our trip even
                                better.
                            </p>
                        </div>
                    </div>
                    <button
                        class="mt-8 border border-deep-navy dark:border-gray-200 rounded-lg px-6 py-3 font-semibold hover:bg-white/20 dark:hover:bg-gray-800 transition-colors text-deep-navy dark:text-white">
                        Show all 200 reviews
                    </button>
                </div>
                <div class="pb-8">
                    <h2 class="text-2xl font-bold mb-6 text-deep-navy">Hosted by <?= $host_details->getFullName() ?>
                    </h2>
                    <div class="flex flex-col md:flex-row gap-8 items-start">
                        <div class="flex flex-col gap-2 min-w-[300px]">
                            <div class="flex items-center gap-4 mb-2">
                                <div class="h-16 w-16 rounded-full bg-gray-200 overflow-hidden bg-cover bg-center"
                                    data-alt="Host Sarah portrait large"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCC5HJqPEPG3q9S6bQvi9E_NKLr0_OxYvbyZnVeAC6kpoqlG7EoOdi3UegiYKZsQfYykcSwHlt7FImaCstWGkdaj_7hu7OfLyNa6KpwoeLyMoBiXA4oZ4zsLynp7Sc_M94gqWD1QWmq47CEE7AFMR5WMfMg0YuKOLTobU7Ow7r4k0YUl5wyU_C3DN1w6nOXgNHSGmfmGAfxFkpVLffKz0J0y1zvMlaVXcuctOhSt4ah5Q48uZeSyswe7v1uF7MxmdYfQhonyYfDmzA8');">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-2">
                <form method="post" action="../controllers/add_reservation.php" ;
                    class="sticky top-28 bg-cream dark:bg-background-dark border border-cream-border dark:border-gray-700 rounded-xl shadow-[0_6px_16px_rgba(0,0,0,0.12)] p-6">
                    <input type="hidden" name="rental_id" value="<?= $rental_details->getId() ?>" />
                    <input type="hidden" name="price" value="<?= $rental_details->getPrice() ?>" />
                    <div class="flex justify-between items-end mb-6">
                        <div class="flex items-baseline gap-1">
                            <span
                                class="text-2xl font-bold text-deep-navy dark:text-white">$<?= $rental_details->getPrice() ?></span>
                            <span class="text-gray-600 dark:text-gray-400 font-normal">/ night</span>
                        </div>
                        <div class="flex items-center gap-1 text-sm font-medium">
                            <span class="material-symbols-outlined text-slate-blue text-[16px]"
                                style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="text-deep-navy dark:text-gray-300">4.92</span>
                            <span class="text-gray-400">·</span>
                            <span class="text-gray-500 underline">200 reviews</span>
                        </div>
                    </div>
                    <div class="border border-gray-400 rounded-lg overflow-hidden mb-4 bg-white dark:bg-gray-900">
                        <div class="flex border-b border-gray-400">
                            <div
                                class="flex-1 p-3 border-r border-gray-400 hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer relative group">
                                <label
                                    class="block text-[10px] font-bold uppercase tracking-wider text-deep-navy dark:text-gray-200">Check-in</label>
                                <input type="datetime-local" class="w-full text-sm text-gray-600 dark:text-gray-400"
                                    placeholder="Add date" name="date_debut" />
                            </div>
                            <div
                                class="flex-1 p-3 hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer relative group">
                                <label
                                    class="block text-[10px] font-bold uppercase tracking-wider text-deep-navy dark:text-gray-200">Check-out</label>
                                <input type="datetime-local" class="w-full text-sm text-gray-600 dark:text-gray-400"
                                    placeholder="Add date" name="date_fin" />
                            </div>
                        </div>
                        <div
                            class="p-3 hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer flex justify-between items-center relative group">
                            <div>
                                <label
                                    class="block text-[10px] font-bold uppercase tracking-wider text-deep-navy dark:text-gray-200">Nights</label>
                                <input type="number" name="nightnumber" class="w-full text-sm text-gray-600 dark:text-gray-400"
                                    placeholder="Nights number" />
                            </div>
                            <span class="material-symbols-outlined text-gray-600 text-xl">keyboard_arrow_down</span>
                        </div>
                    </div>
                    <button
                        class="w-full bg-deep-navy hover:opacity-90 text-white font-bold py-3.5 rounded-lg text-lg transition-all mb-4 shadow-sm">
                        Reserve
                    </button>
                </form>
                <div class="mt-4 flex justify-center gap-2 text-gray-500 text-sm items-center">
                    <span class="material-symbols-outlined text-[16px]">flag</span>
                    <a class="underline hover:text-gray-800" href="#">Report this listing</a>
                </div>
            </div>
        </div>
    </main>
</body>

</html>