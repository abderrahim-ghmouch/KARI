<!DOCTYPE html>
<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Rental Property Details (Earthy Palette)</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200..800&amp;family=Noto+Sans:wght@300..800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
</head>
<body class="bg-cream dark:bg-background-dark text-deep-navy dark:text-gray-100 font-display transition-colors duration-200 antialiased">
$rental = new Rental();
$rentals = $rental->getByHostId($user_Id);

<main class="max-w-[1160px] mx-auto px-4 sm:px-10 py-6 pb-20">
<div class="mb-6">
<h1 class="text-deep-navy dark:text-white text-3xl sm:text-4xl font-extrabold leading-tight tracking-[-0.02em] mb-2">Oceanfront Villa in Bali with Private Pool</h1>
<div class="flex flex-wrap items-center justify-between gap-4">
<div class="flex items-center gap-2 text-sm sm:text-base font-medium text-deep-navy dark:text-gray-300 flex-wrap">
<span class="flex items-center gap-1">
<span class="material-symbols-outlined text-slate-blue text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span>4.92</span>
</span>
<span class="text-deep-navy dark:text-gray-400">·</span>
<a class="underline decoration-1 underline-offset-2" href="#reviews">200 reviews</a>
<span class="text-deep-navy dark:text-gray-400">·</span>
<span class="flex items-center gap-1 text-gray-500 dark:text-gray-400">
<span class="material-symbols-outlined text-[16px] text-slate-blue" style="font-variation-settings: 'FILL' 1;">verified</span>
<span>Superhost</span>
</span>
<span class="text-deep-navy dark:text-gray-400">·</span>
<a class="underline decoration-1 underline-offset-2 text-gray-600 dark:text-gray-400 font-semibold" href="#">Ubud, Bali, Indonesia</a>
</div>
<div class="flex gap-4">
<button class="flex items-center gap-2 text-sm font-semibold underline decoration-1 underline-offset-2 hover:bg-white/20 dark:hover:bg-gray-800 px-3 py-2 rounded-lg transition-colors">
<span class="material-symbols-outlined text-[18px]">ios_share</span>
                    Share
                </button>
<button class="flex items-center gap-2 text-sm font-semibold underline decoration-1 underline-offset-2 hover:bg-white/20 dark:hover:bg-gray-800 px-3 py-2 rounded-lg transition-colors">
<span class="material-symbols-outlined text-[18px]">favorite</span>
                    Save
                </button>
</div>
</div>
</div>
<div class="relative w-full h-[300px] sm:h-[400px] md:h-[480px] grid grid-cols-4 grid-rows-2 gap-2 rounded-xl overflow-hidden mb-10 group">
<div class="col-span-4 md:col-span-2 row-span-2 bg-gray-200 relative cursor-pointer hover:brightness-95 transition-all">
<div class="absolute inset-0 bg-cover bg-center" data-alt="Large sunny living room overlooking the ocean" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCAVH9ECQInIehB11dqqP3zITXwEaJQxSlim7fAy0nRVg5HcR-wN6dD1qg-je-VRc-oZXSYchMA5WoGcQEn5jnDOaL-Jv5YY9CpKfTX_gDi9TuVyv4e5z06RfMFY6wztNJ346WVu6BZQ69EMZKLQKgRr2Vx3_8Ns1nbxJZdtSzZ0Z-FYs17GBk5WVCz6l3E4K9CIkSPhxkElAXkGVj8XE2sWN14CD37eZTeIHfjUEdWT5f52NPwmsV5pAbQTLJLK0WeM_Gps08Gyv2n');"></div>
</div>
<div class="hidden md:block col-span-1 row-span-1 bg-gray-200 relative cursor-pointer hover:brightness-95 transition-all">
<div class="absolute inset-0 bg-cover bg-center" data-alt="Modern bedroom with king size bed" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCXSIwFY7IaQFC_tQPX6diAV9Jt8AKE2GG_sGDJoX2aUp4-nm3tmixJU12rAQ8_4MNToYEEw691uuApOwZUf8zllgo8Jw0oFzRkY4-4Emm2ARLc_yOh-0VMtv4kjM03xFpWsTJ_ikn3KAWjiFBHgWTTgcS1HWXzqMcpFxj7KyYonnJ4oxDWmaYRPVxX01yckjb-RWsm_edkRdmtUhS9w46QSR4tgOcDdcc9Vg4fnNFERgwJXHI8uzmbaI4erQNeW5bRP3iHy95Cu9C1');"></div>
</div>
<div class="hidden md:block col-span-1 row-span-1 bg-gray-200 relative cursor-pointer hover:brightness-95 transition-all">
<div class="absolute inset-0 bg-cover bg-center" data-alt="Luxurious bathroom with stone tub" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBacnl9qGwPQc2C0MzbqR0yWL5ywxD4bprWTE3_m_1t3wegUTQlU3cPUnPZDgX1--y6oqUZieEmh99QvpwcL54bdAufUJ99jtwffWVoMhc8vhDUXfA6SL7BQ-TEd55IDRNrR09O1gWFdlJyqo7pssIFvG1h4mVUmqb6ycRUDmOOEnbZoES0eBq64GjJGyO0nkGteywMrqWsTAccdc79dEMy9oMpk47hWMDfLuBamUXZwPeOWc00nJW9Yxn3q7rA-XRM--FvHiM4QKIP');"></div>
</div>
<div class="hidden md:block col-span-1 row-span-1 bg-gray-200 relative cursor-pointer hover:brightness-95 transition-all">
<div class="absolute inset-0 bg-cover bg-center" data-alt="Outdoor infinity pool at sunset" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDjfNe-Z7fgWIteip0pQC0S8GHKjGVwZjcnrXojHKpu2rJPF-l1DklJ4PvRosESF2tomsPqbCXxPsNeEoDtYHIYAov_U6r9FS1Dqz1SeWVe_A5FZ2nxd9rvd7XOpo24X7Zxax9vBrK_o0a08d8rXA7DVWAN4oPR8DJ4wbAa5GyNo4U2DLSHc5Qwxv9U7klFmOtL75qyZ_p4YRCafu5bn9dKs5V5WN2M0NY-vHX-Zvdq7l-RgV_CTgjqNtpaL842PXB6GVBsWVVJl3n5');"></div>
</div>
<div class="hidden md:block col-span-1 row-span-1 bg-gray-200 relative cursor-pointer hover:brightness-95 transition-all">
<div class="absolute inset-0 bg-cover bg-center" data-alt="Open kitchen with island counter" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAUtD-lid28btw1bYvsooqSOlvhCMdQydQA1W7rmOmvl1rBdCaT4OtB74KgTdqt6gOhNi_Le3iFMPkCw7OjOTBV2YVKnSzeHeAYhNNXBgjCtpYAhEJXYQjiDEmvkdxmj2R5oOYKTl8B6QBqtXNNYc1rNnP8ODojFHe7XitVMQHcKpgUZHNB7I61p7HSYc8-UnDRarwg7wDLhZcj6HgyfSDSo76UB-QbV4YTh77kIRDCi5iHXQOT72f_gbw4b08DkhbDhq3SxSgrSuha');"></div>
<button class="absolute bottom-4 right-4 bg-cream/90 hover:bg-white text-deep-navy text-sm font-semibold py-1.5 px-3 rounded-lg border border-black shadow-sm flex items-center gap-2 transition-colors">
<span class="material-symbols-outlined text-[16px]">grid_view</span>
                Show all photos
            </button>
</div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-12 relative">
<div class="lg:col-span-2 flex flex-col gap-8">
<div class="flex justify-between items-center border-b border-cream-border dark:border-gray-800 pb-8">
<div>
<h2 class="text-xl sm:text-2xl font-bold mb-1 text-deep-navy">Entire villa hosted by Sarah</h2>
<p class="text-gray-600 dark:text-gray-400 text-base">2 guests · 1 bedroom · 1 bed · 1 bath</p>
</div>
<div class="h-14 w-14 rounded-full bg-gray-200 overflow-hidden border border-cream-border dark:border-gray-700 bg-cover bg-center" data-alt="Host Sarah portrait" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDD4HErdUZnIAxszF68qVz8DGcOpBmG4pB12TD_kXnlGzYZdAV9vhtItA9YH7368ZYosrE4gpDrxmKIEeZuT8oom2p4OjXnJj892Hn6vNRfaWPwsxEG1ihWMt76_xoJOWUMsYsNMq1EnzbYV535BtSiCl3lXX6RVP0nHkAuKetoy7WIh4_6DwGNvGmiZeh0g2uc-X6wPnaTWW9H_CXSrRT_dcUWHhwHurcCV7bZDZiqZXfDFgAGKJEWHW9RSMGqQ9FCnfchzdos1SYj');"></div>
</div>
<div class="flex flex-col gap-6 border-b border-cream-border dark:border-gray-800 pb-8">
<div class="flex gap-4 items-start">
<span class="material-symbols-outlined text-2xl text-slate-blue dark:text-gray-300 mt-1">workspace_premium</span>
<div>
<h3 class="font-bold text-base mb-0.5 text-deep-navy">Sarah is a Superhost</h3>
<p class="text-gray-500 dark:text-gray-400 text-sm">Superhosts are experienced, highly rated hosts.</p>
</div>
</div>
<div class="flex gap-4 items-start">
<span class="material-symbols-outlined text-2xl text-slate-blue dark:text-gray-300 mt-1">location_on</span>
<div>
<h3 class="font-bold text-base mb-0.5 text-deep-navy">Great location</h3>
<p class="text-gray-500 dark:text-gray-400 text-sm">100% of recent guests gave the location a 5-star rating.</p>
</div>
</div>
<div class="flex gap-4 items-start">
<span class="material-symbols-outlined text-2xl text-slate-blue dark:text-gray-300 mt-1">calendar_month</span>
<div>
<h3 class="font-bold text-base mb-0.5 text-deep-navy">Free cancellation for 48 hours</h3>
<p class="text-gray-500 dark:text-gray-400 text-sm">Get a full refund if you change your mind.</p>
</div> 
</div>
</div>
<div class="border-b border-cream-border dark:border-gray-800 pb-8">
<h2 class="text-2xl font-bold mb-4 text-deep-navy">About this space</h2>
<div class="text-gray-700 dark:text-gray-300 leading-relaxed space-y-4">
<p>
                        Relax in this stunning oceanfront villa, perfectly positioned to capture the breathtaking sunset views of Bali. Designed with a blend of modern luxury and traditional Balinese architecture, our villa offers a tranquil escape from the bustling city life.
                    </p>
<p>
                        The open-concept living area flows seamlessly into the infinity pool deck, creating an indoor-outdoor living experience that is second to none. The master bedroom features a king-sized canopy bed, an en-suite bathroom with a rainfall shower, and direct access to a private garden.
                    </p>
<p class="truncate">
                        Guests will enjoy full access to the property, including a fully equipped kitchen, high-speed Wi-Fi, and daily housekeeping services. Our dedicated concierge team is available 24/7 to assist with any requests...
                    </p>
</div>
<button class="mt-4 flex items-center gap-1 font-bold underline decoration-1 underline-offset-2 hover:text-gray-600 dark:hover:text-gray-400 transition-colors text-deep-navy">
                    Show more <span class="material-symbols-outlined text-[18px]">chevron_right</span>
</button>
</div>
<div class="border-b border-cream-border dark:border-gray-800 pb-8">
<h2 class="text-2xl font-bold mb-6 text-deep-navy">What this place offers</h2>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<div class="flex items-center gap-3 text-slate-blue dark:text-gray-300">
<span class="material-symbols-outlined text-2xl">wifi</span>
<span class="text-gray-700 dark:text-gray-300">Fast Wifi</span>
</div>
<div class="flex items-center gap-3 text-slate-blue dark:text-gray-300">
<span class="material-symbols-outlined text-2xl">pool</span>
<span class="text-gray-700 dark:text-gray-300">Private pool</span>
</div>
<div class="flex items-center gap-3 text-slate-blue dark:text-gray-300">
<span class="material-symbols-outlined text-2xl">soup_kitchen</span>
<span class="text-gray-700 dark:text-gray-300">Kitchen</span>
</div>
<div class="flex items-center gap-3 text-slate-blue dark:text-gray-300">
<span class="material-symbols-outlined text-2xl">ac_unit</span>
<span class="text-gray-700 dark:text-gray-300">Air conditioning</span>
</div>
<div class="flex items-center gap-3 text-slate-blue dark:text-gray-300">
<span class="material-symbols-outlined text-2xl">local_parking</span>
<span class="text-gray-700 dark:text-gray-300">Free parking on premises</span>
</div>
<div class="flex items-center gap-3 text-slate-blue dark:text-gray-300">
<span class="material-symbols-outlined text-2xl">deck</span>
<span class="text-gray-700 dark:text-gray-300">Patio or balcony</span>
</div>
<div class="flex items-center gap-3 text-slate-blue dark:text-gray-300">
<span class="material-symbols-outlined text-2xl">local_laundry_service</span>
<span class="text-gray-700 dark:text-gray-300">Washer</span>
</div>
<div class="flex items-center gap-3 text-gray-400 line-through">
<span class="material-symbols-outlined text-2xl">smoke_free</span>
<span>Carbon monoxide alarm</span>
</div>
</div>
<button class="mt-8 border border-deep-navy dark:border-gray-200 rounded-lg px-6 py-3 font-semibold hover:bg-white/20 dark:hover:bg-gray-800 transition-colors text-deep-navy dark:text-white">
                    Show all 32 amenities
                </button>
</div>
<div class="border-b border-cream-border dark:border-gray-800 pb-8" id="reviews">
<div class="flex items-center gap-2 mb-8">
<span class="material-symbols-outlined text-slate-blue text-2xl" style="font-variation-settings: 'FILL' 1;">star</span>
<h2 class="text-2xl font-bold text-deep-navy">4.92 · 200 reviews</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-10">
<div>
<div class="flex items-center gap-3 mb-3">
<div class="w-10 h-10 bg-gray-200 rounded-full bg-cover bg-center" data-alt="Reviewer avatar 1" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAubprqLheooyV3J8dhMCQcguYLisBIe_qhigvzx8Y-HLuM75RPVwUNr90IiPmmNR6WNv3UMNi9CCiElVh9h0Em3Gc6gVVee7pn2zf9WwO1OkAUxoxnBR8HXGHzr3ClVI_vM0UQ9Z2_7ngfStqwt6YOk6ZxmoueOuSKKQIXsOIhUUOk5iSaPzLbTBBr23P3MNi2vFD3IcHUH5wEDi-LftFouJYzP_eBwEtDhXzHBb7PnP7s-b5y4aJzwW_6ueQft1OqWfjuhbYRe3tg');"></div>
<div>
<h4 class="font-bold text-base text-deep-navy dark:text-white">James</h4>
<p class="text-sm text-gray-500">October 2023</p>
</div>
</div>
<p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                            Absolutely stunning place! The view is even better than in the photos. Sarah was a fantastic host, very responsive and helpful.
                        </p>
</div>
<div>
<div class="flex items-center gap-3 mb-3">
<div class="w-10 h-10 bg-gray-200 rounded-full bg-cover bg-center" data-alt="Reviewer avatar 2" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCEkbNlUHLqaMqkmn2H5eO27DliopIfeN4rHcsp2moLrqBkZamFiyfAVcVRTSDx4fFadWzKXfa5-qGiyqovq4ePJPPRB-DNwd_NYWoamg9boEW5uD1TRzdQROEr3U1JFwXW2bJ-I5H601c4da2o7bBhDNHLHIPWptHjbzq2qGoXNoUCmZBku9RKXgtbCJvXkKn7q6aXpV-N9Nhboyw9Q0X1iVQysTYy6EnCWyOFfSAltfaiN9HYRFbGXDGg7w94p2ZKjmKkeJi77GxD');"></div>
<div>
<h4 class="font-bold text-base text-deep-navy dark:text-white">Emily</h4>
<p class="text-sm text-gray-500">September 2023</p>
</div>
</div>
<p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                            A perfect getaway. The pool is amazing and the location is quiet yet close to everything. Highly recommended!
                        </p>
</div>
<div>
<div class="flex items-center gap-3 mb-3">
<div class="w-10 h-10 bg-gray-200 rounded-full bg-cover bg-center" data-alt="Reviewer avatar 3" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAXTaMM4tZ7EB6mztFrRYxRWDjhxbZdnrQNm1LBuVee6hE7NN5fvo6dfSRTshF1FiKEW4RPkE5_RpJxnAknvzwo_VMUnz6CZGQ1Tcf3rOm727MQWtBc1_i9T0cqgo1E6y1s-VUJGR81k_HRdFqhmbt32juD8Qszg_sPiMdydMCzZzE-O9eAJU02Ncz7qlmHOnQWhoASTW54VpylWTV6EszbYqhTq2HFSueMQmpCz37CNUuwQ8aJGKCM0rqBqq7iy9r427Op_ibQYkkM');"></div>
<div>
<h4 class="font-bold text-base text-deep-navy dark:text-white">Michael</h4>
<p class="text-sm text-gray-500">August 2023</p>
</div>
</div>
<p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                            The design of the villa is beautiful. We loved the open kitchen and the outdoor shower. Will definitely be back.
                        </p>
</div>
<div>
<div class="flex items-center gap-3 mb-3">
<div class="w-10 h-10 bg-gray-200 rounded-full bg-cover bg-center" data-alt="Reviewer avatar 4" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAd_hwVBsHqJE0tz8v-la20s3SV_ooyni6ilRajHmRcfQ_KFw3uWrkDpdWBACIQxyi3qFHQFai2dgngYG7vFnS4ncFmlo24xjSq0yHuSDnJTspvtGx5aaMeFffeFCqnfj05JK5PSO1hQ3TKlyZSSRAzm6xRoobx9CQvnEiaOQ0xqyw96LAFsRwCovah6sGh6BNbNdI5o7CfZgbY0EUiyGkZwOKK18V94NTHzUk4ID6YBqkKfraEocpyH6sCx5DQzvWyHU8lA713qHUi');"></div>
<div>
<h4 class="font-bold text-base text-deep-navy dark:text-white">Jessica</h4>
<p class="text-sm text-gray-500">July 2023</p>
</div>
</div>
<p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                            Great value for money. The host provided excellent local tips which made our trip even better.
                        </p>
</div>
</div>
<button class="mt-8 border border-deep-navy dark:border-gray-200 rounded-lg px-6 py-3 font-semibold hover:bg-white/20 dark:hover:bg-gray-800 transition-colors text-deep-navy dark:text-white">
                    Show all 200 reviews
                </button>
</div>
<div class="pb-8">
<h2 class="text-2xl font-bold mb-6 text-deep-navy">Hosted by Sarah</h2>
<div class="flex flex-col md:flex-row gap-8 items-start">
<div class="flex flex-col gap-2 min-w-[300px]">
<div class="flex items-center gap-4 mb-2">
<div class="h-16 w-16 rounded-full bg-gray-200 overflow-hidden bg-cover bg-center" data-alt="Host Sarah portrait large" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCC5HJqPEPG3q9S6bQvi9E_NKLr0_OxYvbyZnVeAC6kpoqlG7EoOdi3UegiYKZsQfYykcSwHlt7FImaCstWGkdaj_7hu7OfLyNa6KpwoeLyMoBiXA4oZ4zsLynp7Sc_M94gqWD1QWmq47CEE7AFMR5WMfMg0YuKOLTobU7Ow7r4k0YUl5wyU_C3DN1w6nOXgNHSGmfmGAfxFkpVLffKz0J0y1zvMlaVXcuctOhSt4ah5Q48uZeSyswe7v1uF7MxmdYfQhonyYfDmzA8');"></div>
<div>
<h3 class="text-xl font-semibold text-deep-navy">Sarah</h3>
<p class="text-gray-500 text-sm">Joined May 2018</p>
</div>
</div>
<div class="flex gap-4 text-sm text-gray-700 dark:text-gray-300">
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-[18px] text-slate-blue" style="font-variation-settings: 'FILL' 1;">star</span> 482 Reviews</span>
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-[18px] text-slate-blue" style="font-variation-settings: 'FILL' 1;">verified</span> Identity verified</span>
</div>
<div class="flex gap-4 text-sm text-gray-700 dark:text-gray-300 mt-1">
<span class="flex items-center gap-1"><span class="material-symbols-outlined text-[18px] text-slate-blue" style="font-variation-settings: 'FILL' 1;">workspace_premium</span> Superhost</span>
</div>
</div>
<div class="flex flex-col gap-4">
<p class="text-gray-700 dark:text-gray-300">
                            Hi, I'm Sarah! I love traveling and meeting new people. I've lived in Bali for 10 years and know all the best hidden spots. I'm happy to help you plan your perfect vacation.
                        </p>
<p class="text-gray-700 dark:text-gray-300 text-sm">
<strong>Response rate:</strong> 100%<br/>
<strong>Response time:</strong> within an hour
                        </p>
<button class="self-start border border-deep-navy dark:border-gray-200 rounded-lg px-6 py-3 font-semibold hover:bg-white/20 dark:hover:bg-gray-800 transition-colors mt-2 text-deep-navy dark:text-white">
                            Contact Host
                        </button>
</div>
</div>
</div>
<div>
<h2 class="text-2xl font-bold mb-6 text-deep-navy">Where you'll be</h2>
<div class="w-full h-80 rounded-xl bg-gray-200 bg-cover bg-center overflow-hidden relative" data-alt="Map view of Ubud area" data-location="Bali, Indonesia" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAepDH2MF3VBcu3XS_8kNXRgAhizMVKtJIbz9E4tpSdSoJ3eXTm1owgX33clHwUFPD4RsTdFd46WPZvcvXbo3NTfpFTgNHd7hHE-UuIZlfFNBhHRYmRm6v4R8ge7ufrIjMsg-KlmngX8z-b7QxG1e76HLw9R1c5Ibm_S4utmQlRPxHdZyZDi6sAWSoxN92qpRUDbLv9wC1ir2FoQKTtZiQd4JA8jlsOitWxU8b2600FB0AS_JAfQv1ir8L5UgVD9ghJ-ZmmLu6DHo-r');">
<div class="absolute inset-0 bg-black/10 flex items-center justify-center">
<div class="bg-white dark:bg-gray-900 p-4 rounded-full shadow-lg">
<span class="material-symbols-outlined text-deep-navy text-3xl" style="font-variation-settings: 'FILL' 1;">home_pin</span>
</div>
</div>
</div>
<p class="mt-4 text-gray-700 dark:text-gray-300">
                    Ubud is the cultural heart of Bali. You'll be close to the Monkey Forest, Tegalalang Rice Terrace, and many amazing restaurants and cafes.
                </p>
</div>
</div>
<div class="lg:col-span-1">
<div class="sticky top-28 bg-cream dark:bg-background-dark border border-cream-border dark:border-gray-700 rounded-xl shadow-[0_6px_16px_rgba(0,0,0,0.12)] p-6">
<div class="flex justify-between items-end mb-6">
<div class="flex items-baseline gap-1">
<span class="text-2xl font-bold text-deep-navy dark:text-white">$150</span>
<span class="text-gray-600 dark:text-gray-400 font-normal">/ night</span>
</div>
<div class="flex items-center gap-1 text-sm font-medium">
<span class="material-symbols-outlined text-slate-blue text-[16px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="text-deep-navy dark:text-gray-300">4.92</span>
<span class="text-gray-400">·</span>
<span class="text-gray-500 underline">200 reviews</span>
</div>
</div>
<div class="border border-gray-400 rounded-lg overflow-hidden mb-4 bg-white dark:bg-gray-900">
<div class="flex border-b border-gray-400">
<div class="flex-1 p-3 border-r border-gray-400 hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer relative group">
<label class="block text-[10px] font-bold uppercase tracking-wider text-deep-navy dark:text-gray-200">Check-in</label>
<div class="text-sm text-gray-600 dark:text-gray-400">Add date</div>
</div>
<div class="flex-1 p-3 hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer relative group">
<label class="block text-[10px] font-bold uppercase tracking-wider text-deep-navy dark:text-gray-200">Check-out</label>
<div class="text-sm text-gray-600 dark:text-gray-400">Add date</div>
</div>
</div>
<div class="p-3 hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer flex justify-between items-center relative group">
<div>
<label class="block text-[10px] font-bold uppercase tracking-wider text-deep-navy dark:text-gray-200">Guests</label>
<div class="text-sm text-gray-600 dark:text-gray-400">1 guest</div>
</div>
<span class="material-symbols-outlined text-gray-600 text-xl">keyboard_arrow_down</span>
</div>
</div>
<button class="w-full bg-deep-navy hover:opacity-90 text-white font-bold py-3.5 rounded-lg text-lg transition-all mb-4 shadow-sm">
                    Reserve
                </button>
<p class="text-center text-sm text-gray-500 mb-6">You won't be charged yet</p>
<div class="space-y-4 text-gray-600 dark:text-gray-300">
<div class="flex justify-between">
<span class="underline decoration-1 cursor-pointer">$150 x 5 nights</span>
<span>$750</span>
</div>
<div class="flex justify-between">
<span class="underline decoration-1 cursor-pointer">Cleaning fee</span>
<span>$60</span>
</div>
<div class="flex justify-between">
<span class="underline decoration-1 cursor-pointer">Service fee</span>
<span>$110</span>
</div>
</div>
<hr class="my-6 border-cream-border dark:border-gray-700"/>
<div class="flex justify-between font-bold text-lg text-deep-navy dark:text-white">
<span>Total</span>
<span>$920</span>
</div>
</div>
<div class="mt-4 flex justify-center gap-2 text-gray-500 text-sm items-center">
<span class="material-symbols-outlined text-[16px]">flag</span>
<a class="underline hover:text-gray-800" href="#">Report this listing</a>
</div>
</div>
</div>
</main>
</body></html>