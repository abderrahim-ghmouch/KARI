<?php 






?>



<!DOCTYPE html>
<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Home - Rental Platform Index (Earthy Palette)</title>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
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
<body class="bg-background-light dark:bg-background-dark font-display text-text-main dark:text-white overflow-x-hidden antialiased">
<div class="relative flex min-h-screen w-full flex-col">
<header class="sticky top-0 z-50 flex items-center justify-between whitespace-nowrap border-b border-solid border-white/20 dark:border-gray-800 bg-background-light dark:bg-background-dark px-4 py-4 md:px-10 shadow-sm">
<div class="flex items-center gap-2 md:gap-4 text-primary">
<div class="size-8 md:size-10 flex items-center justify-center rounded-lg bg-white/30 text-primary">
<span class="material-symbols-outlined text-primary text-2xl md:text-3xl">travel_explore</span>
</div>
<h2 class="text-text-main dark:text-white text-lg md:text-xl font-bold leading-tight tracking-[-0.015em] hidden sm:block">Staycation</h2>
</div>
<div class="flex md:hidden flex-1 justify-center px-4">
<button class="flex items-center gap-2 rounded-full border border-gray-200 bg-white dark:bg-gray-800 dark:border-gray-700 py-2.5 px-4 shadow-sm w-full max-w-[280px]">
<span class="material-symbols-outlined text-text-main dark:text-white text-xl">search</span>
<span class="text-sm font-medium text-text-main dark:text-white">Where to?</span>
</button>
</div>
<div class="flex items-center justify-end gap-4 md:gap-8">
<div class="hidden md:flex items-center gap-6">
<a class="text-text-main dark:text-white text-sm font-medium leading-normal hover:bg-white/20 dark:hover:bg-gray-800 px-3 py-2 rounded-full transition-colors" href="#">Become a Host</a>
<button class="text-text-main dark:text-white hover:bg-white/20 dark:hover:bg-gray-800 p-2 rounded-full transition-colors">
<span class="material-symbols-outlined text-xl block">language</span>
</button>
</div>
<button class="flex items-center gap-2 rounded-full border border-white/40 dark:border-gray-700 p-1 pl-3 hover:shadow-md transition-shadow bg-white/80 dark:bg-gray-800 backdrop-blur-sm">
<span class="material-symbols-outlined text-text-main dark:text-white text-xl">menu</span>
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-8" data-alt="User profile avatar showing a smiling person" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAgSF6T2dKSkpH-fvSMhANXybgEX6JxJnlhH6rjo4FIBWoOKzKmzpbcmlZqb0X4pBC1uBPmtjzMm_Qq5kBH2OBBaljdNfVlh3lOjzspLNhWbRhqa7zq31ZhUrBvQ-SdLIXhiwq8sroHqAY3ACqu3VN2T2Wedw-M6DxLBcTnSOq__NmIc5Ad0zKy--jA3u18mdgK6cXcdD04MxBuRy_x-PJlh2Me4MhWkZukA1qm1KnNYw-8qAOXqzeJCFTRzpOtALrHVZzMPQuu29Gb");'></div>
</button>
</div>
</header>
<main class="flex-1">
<div class="hidden md:flex flex-col items-center justify-center pt-8 pb-6 px-4 md:px-10 bg-background-light dark:bg-background-dark">
<div class="w-full max-w-[850px]">
<div class="flex flex-col md:flex-row items-center bg-white dark:bg-gray-800 rounded-full border border-gray-200 dark:border-gray-700 shadow-lg hover:shadow-xl transition-shadow p-2">
<div class="flex-1 relative group px-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-full cursor-pointer border-r border-transparent md:border-gray-200 dark:md:border-gray-700">
<label class="block text-xs font-bold text-primary dark:text-white">Where</label>
<input class="w-full bg-transparent border-none p-0 text-sm text-text-secondary dark:text-gray-300 placeholder:text-text-secondary/70 focus:ring-0 truncate" placeholder="Search destinations" type="text"/>
</div>
<div class="flex-1 relative group px-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-full cursor-pointer border-r border-transparent md:border-gray-200 dark:md:border-gray-700">
<label class="block text-xs font-bold text-primary dark:text-white">Check in</label>
<input class="w-full bg-transparent border-none p-0 text-sm text-text-secondary dark:text-gray-300 placeholder:text-text-secondary/70 focus:ring-0 truncate" placeholder="Add dates" type="text"/>
</div>
<div class="flex-1 relative group px-6 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-full cursor-pointer border-r border-transparent md:border-gray-200 dark:md:border-gray-700">
<label class="block text-xs font-bold text-primary dark:text-white">Check out</label>
<input class="w-full bg-transparent border-none p-0 text-sm text-text-secondary dark:text-gray-300 placeholder:text-text-secondary/70 focus:ring-0 truncate" placeholder="Add dates" type="text"/>
</div>
<div class="flex-[1.2] relative flex items-center justify-between pl-6 pr-2 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-full cursor-pointer">
<div class="flex flex-col">
<label class="block text-xs font-bold text-primary dark:text-white">Who</label>
<input class="w-full bg-transparent border-none p-0 text-sm text-text-secondary dark:text-gray-300 placeholder:text-text-secondary/70 focus:ring-0 truncate" placeholder="Add guests" type="text"/>
</div>
<button class="bg-primary hover:bg-primary/90 text-white rounded-full size-12 flex items-center justify-center shadow-md transition-all transform active:scale-95">
<span class="material-symbols-outlined font-bold">search</span>
</button>
</div>
</div>
</div>
</div>
<div class="sticky top-[73px] z-40 bg-background-light/95 dark:bg-background-dark/95 backdrop-blur-sm border-b border-white/20 dark:border-gray-800">
<div class="max-w-[1920px] mx-auto px-4 md:px-10 py-4">
<div class="flex gap-8 overflow-x-auto pb-2 no-scrollbar scroll-smooth snap-x">
<div class="group flex flex-col items-center gap-2 min-w-16 cursor-pointer opacity-70 hover:opacity-100 transition-opacity border-b-2 border-transparent hover:border-primary/50 pb-2 snap-start">
<span class="material-symbols-outlined text-text-secondary dark:text-gray-400 group-hover:text-text-main dark:group-hover:text-white text-2xl">star</span>
<span class="text-xs font-medium text-text-secondary dark:text-gray-400 group-hover:text-text-main dark:group-hover:text-white whitespace-nowrap">OMG!</span>
</div>
<div class="group flex flex-col items-center gap-2 min-w-16 cursor-pointer opacity-100 border-b-2 border-text-main dark:border-white pb-2 snap-start">
<span class="material-symbols-outlined text-text-main dark:text-white text-2xl">waves</span>
<span class="text-xs font-medium text-text-main dark:text-white whitespace-nowrap">Beachfront</span>
</div>
<div class="group flex flex-col items-center gap-2 min-w-16 cursor-pointer opacity-70 hover:opacity-100 transition-opacity border-b-2 border-transparent hover:border-primary/50 pb-2 snap-start">
<span class="material-symbols-outlined text-text-secondary dark:text-gray-400 group-hover:text-text-main dark:group-hover:text-white text-2xl">cottage</span>
<span class="text-xs font-medium text-text-secondary dark:text-gray-400 group-hover:text-text-main dark:group-hover:text-white whitespace-nowrap">Cabins</span>
</div>
<div class="group flex flex-col items-center gap-2 min-w-16 cursor-pointer opacity-70 hover:opacity-100 transition-opacity border-b-2 border-transparent hover:border-primary/50 pb-2 snap-start">
<span class="material-symbols-outlined text-text-secondary dark:text-gray-400 group-hover:text-text-main dark:group-hover:text-white text-2xl">local_fire_department</span>
<span class="text-xs font-medium text-text-secondary dark:text-gray-400 group-hover:text-text-main dark:group-hover:text-white whitespace-nowrap">Trending</span>
</div>
<div class="group flex flex-col items-center gap-2 min-w-16 cursor-pointer opacity-70 hover:opacity-100 transition-opacity border-b-2 border-transparent hover:border-primary/50 pb-2 snap-start">
<span class="material-symbols-outlined text-text-secondary dark:text-gray-400 group-hover:text-text-main dark:group-hover:text-white text-2xl">pool</span>
<span class="text-xs font-medium text-text-secondary dark:text-gray-400 group-hover:text-text-main dark:group-hover:text-white whitespace-nowrap">Pools</span>
</div>
<div class="group flex flex-col items-center gap-2 min-w-16 cursor-pointer opacity-70 hover:opacity-100 transition-opacity border-b-2 border-transparent hover:border-primary/50 pb-2 snap-start">
<span class="material-symbols-outlined text-text-secondary dark:text-gray-400 group-hover:text-text-main dark:group-hover:text-white text-2xl">ac_unit</span>
<span class="text-xs font-medium text-text-secondary dark:text-gray-400 group-hover:text-text-main dark:group-hover:text-white whitespace-nowrap">Arctic</span>
</div>
<div class="group flex flex-col items-center gap-2 min-w-16 cursor-pointer opacity-70 hover:opacity-100 transition-opacity border-b-2 border-transparent hover:border-primary/50 pb-2 snap-start">
<span class="material-symbols-outlined text-text-secondary dark:text-gray-400 group-hover:text-text-main dark:group-hover:text-white text-2xl">landscape</span>
<span class="text-xs font-medium text-text-secondary dark:text-gray-400 group-hover:text-text-main dark:group-hover:text-white whitespace-nowrap">Views</span>
</div>
<div class="group flex flex-col items-center gap-2 min-w-16 cursor-pointer opacity-70 hover:opacity-100 transition-opacity border-b-2 border-transparent hover:border-primary/50 pb-2 snap-start">
<span class="material-symbols-outlined text-text-secondary dark:text-gray-400 group-hover:text-text-main dark:group-hover:text-white text-2xl">castle</span>
<span class="text-xs font-medium text-text-secondary dark:text-gray-400 group-hover:text-text-main dark:group-hover:text-white whitespace-nowrap">Mansions</span>
</div>
<div class="group flex flex-col items-center gap-2 min-w-16 cursor-pointer opacity-70 hover:opacity-100 transition-opacity border-b-2 border-transparent hover:border-primary/50 pb-2 snap-start">
<span class="material-symbols-outlined text-text-secondary dark:text-gray-400 group-hover:text-text-main dark:group-hover:text-white text-2xl">forest</span>
<span class="text-xs font-medium text-text-secondary dark:text-gray-400 group-hover:text-text-main dark:group-hover:text-white whitespace-nowrap">Forest</span>
</div>
<div class="group flex flex-col items-center gap-2 min-w-16 cursor-pointer opacity-70 hover:opacity-100 transition-opacity border-b-2 border-transparent hover:border-primary/50 pb-2 snap-start">
<span class="material-symbols-outlined text-text-secondary dark:text-gray-400 group-hover:text-text-main dark:group-hover:text-white text-2xl">rocket_launch</span>
<span class="text-xs font-medium text-text-secondary dark:text-gray-400 group-hover:text-text-main dark:group-hover:text-white whitespace-nowrap">Surreal</span>
</div>
</div>
</div>
</div>
<div class="max-w-[1920px] mx-auto px-4 md:px-10 py-6">
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-x-6 gap-y-10">
<div class="flex flex-col gap-3 group cursor-pointer relative">
<div class="relative w-full aspect-[20/19] rounded-xl overflow-hidden bg-gray-200 dark:bg-gray-700">
<div class="absolute top-3 right-3 z-10">
<span class="material-symbols-outlined text-white/70 hover:text-white text-2xl drop-shadow-md cursor-pointer transition-transform active:scale-90">favorite</span>
</div>
<div class="absolute top-3 left-3 z-10 bg-accent dark:bg-black/70 px-2 py-1 rounded text-xs font-bold text-text-main dark:text-white shadow-sm">Guest Favorite</div>
<div class="w-full h-full bg-center bg-no-repeat bg-cover transform group-hover:scale-105 transition-transform duration-500" data-alt="Modern downtown loft apartment interior with large windows" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAJWJwAxyl1xuCdgX3Us1jvH7LRRiY8P-KXiosgCbsMUdB0fNnzf6jfSQceAO79G3Kxo1r0m86iCVYkXE3bDjMqdvrckohVocdPr7-4ynPiMWFgMTezSSj2vWVKgFUD4GEDQdAjgOyR3cMl5xbtf0oL0HrkigiNJPb9rtbRvISWc4zKl0GvH_rYsXEvmK5S7tdV4PsUIFMiSBK_qFbR1KPwLZjk5sF6P4Kvn4lheH7qsWkUmUDMB6GSRr7UDA3FkelTmKs6Y07U0iTF");'></div>
</div>
<div class="flex flex-col gap-1">
<div class="flex justify-between items-start">
<h3 class="text-text-main dark:text-white font-semibold text-[15px] truncate">Seattle, Washington</h3>
<div class="flex items-center gap-1">
<span class="material-symbols-outlined text-sm text-text-main dark:text-white">star</span>
<span class="text-text-main dark:text-white text-[15px] font-light">4.98</span>
</div>
</div>
<p class="text-text-secondary dark:text-gray-400 text-[15px] font-light leading-snug">Downtown Loft Views</p>
<p class="text-text-secondary dark:text-gray-400 text-[15px] font-light leading-snug">Oct 15 - 20</p>
<div class="flex items-center gap-1 mt-1">
<p class="text-text-main dark:text-white text-[15px] font-semibold">$134</p>
<p class="text-text-main dark:text-white text-[15px] font-light">night</p>
</div>
</div>
</div>
<div class="flex flex-col gap-3 group cursor-pointer relative">
<div class="relative w-full aspect-[20/19] rounded-xl overflow-hidden bg-gray-200 dark:bg-gray-700">
<div class="absolute top-3 right-3 z-10">
<span class="material-symbols-outlined text-white/70 hover:text-white text-2xl drop-shadow-md cursor-pointer transition-transform active:scale-90">favorite</span>
</div>
<div class="w-full h-full bg-center bg-no-repeat bg-cover transform group-hover:scale-105 transition-transform duration-500" data-alt="Cozy wooden cabin nestled in a snowy forest" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuABskpmJnfw2gLxWDZ0xqRYnYqEwbaDpuIhzCH5mEHfRHGpl3HgVe_QWETW7twLyYZ2PkTFsgmXkUizm6WyrU8tMupxf0Ciwno9pfTt7e5gg3oMAs7van8bjv1LUFg2nELNbYqzgRMeaho94NG1bRmlX-PtuNcVpOnyPg4_FUaSivo_sO0_gr3crjUFFP_VlvET_D3QidKFCky9ixKRxuiUghCjw8YLS0ysmEujclZ3EuA7Iu4HoYnBY9mdg6NItoBNR3LDZjpwgNwf");'></div>
</div>
<div class="flex flex-col gap-1">
<div class="flex justify-between items-start">
<h3 class="text-text-main dark:text-white font-semibold text-[15px] truncate">Stowe, Vermont</h3>
<div class="flex items-center gap-1">
<span class="material-symbols-outlined text-sm text-text-main dark:text-white">star</span>
<span class="text-text-main dark:text-white text-[15px] font-light">5.0</span>
</div>
</div>
<p class="text-text-secondary dark:text-gray-400 text-[15px] font-light leading-snug">Cozy Cabin Retreat</p>
<p class="text-text-secondary dark:text-gray-400 text-[15px] font-light leading-snug">Nov 3 - 10</p>
<div class="flex items-center gap-1 mt-1">
<p class="text-text-main dark:text-white text-[15px] font-semibold">$250</p>
<p class="text-text-main dark:text-white text-[15px] font-light">night</p>
</div>
</div>
</div>
<div class="flex flex-col gap-3 group cursor-pointer relative">
<div class="relative w-full aspect-[20/19] rounded-xl overflow-hidden bg-gray-200 dark:bg-gray-700">
<div class="absolute top-3 right-3 z-10">
<span class="material-symbols-outlined text-white/70 hover:text-white text-2xl drop-shadow-md cursor-pointer transition-transform active:scale-90">favorite</span>
</div>
<div class="w-full h-full bg-center bg-no-repeat bg-cover transform group-hover:scale-105 transition-transform duration-500" data-alt="Modern beach house with glass windows facing the ocean" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD7364D41ttyyJLSBH_RSOUrXkDox7DZABtt8UClQWOTaKHV9_Iq0ldkb2fur2JZJRogmqqgBRaSlVJI9-6i-vLuI72uoHQqIOE4oqj43lQc-Um8iibvCEjORHEMSZo2X8-bW6LzY5TN-yaxJUYmE0B_rw8HBm1qa9z0HfWGW4_IOQAQO3wXqg7Am8mo1PQh-Ua1fdXc1DOx9BysLcNacGWESAKKqmKLtjvYziAFORNsfJqlPcaDsrg_bWvcMjzmVg1_ypSj8ycI-tZ");'></div>
</div>
<div class="flex flex-col gap-1">
<div class="flex justify-between items-start">
<h3 class="text-text-main dark:text-white font-semibold text-[15px] truncate">Malibu, California</h3>
<div class="flex items-center gap-1">
<span class="material-symbols-outlined text-sm text-text-main dark:text-white">star</span>
<span class="text-text-main dark:text-white text-[15px] font-light">4.85</span>
</div>
</div>
<p class="text-text-secondary dark:text-gray-400 text-[15px] font-light leading-snug">Beachfront Paradise</p>
<p class="text-text-secondary dark:text-gray-400 text-[15px] font-light leading-snug">Dec 1 - 7</p>
<div class="flex items-center gap-1 mt-1">
<p class="text-text-main dark:text-white text-[15px] font-semibold">$450</p>
<p class="text-text-main dark:text-white text-[15px] font-light">night</p>
</div>
</div>
</div>
<div class="flex flex-col gap-3 group cursor-pointer relative">
<div class="relative w-full aspect-[20/19] rounded-xl overflow-hidden bg-gray-200 dark:bg-gray-700">
<div class="absolute top-3 right-3 z-10">
<span class="material-symbols-outlined text-white/70 hover:text-white text-2xl drop-shadow-md cursor-pointer transition-transform active:scale-90">favorite</span>
</div>
<div class="w-full h-full bg-center bg-no-repeat bg-cover transform group-hover:scale-105 transition-transform duration-500" data-alt="Luxurious penthouse with city skyline view at night" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAcHG-c4paq2UNKSw6LvOEKNXI36_vPjoO2U3EKw-hgKc0JjkUKLjeRr-vkG5gDFhty61cHs95aeYFZg3k1gUOPTrexOJ6CmHwKUBHvCTcx5Tqp8ZMnL5uxsl9xrNfjregT0xLVe-kNedIYy-cbhrtWVpzlOvkGmkvby17zKLCXsa_SiutBHFYTYgYQYE8LSSPJ6ICuxIhiguyuHKYbxNcn4xy7_3H5a_2WuU7rB2QsrQ0v0lROJCwrnXyOAiWMHMsf-8oiHpqIlOH8");'></div>
</div>
<div class="flex flex-col gap-1">
<div class="flex justify-between items-start">
<h3 class="text-text-main dark:text-white font-semibold text-[15px] truncate">New York, New York</h3>
<div class="flex items-center gap-1">
<span class="material-symbols-outlined text-sm text-text-main dark:text-white">star</span>
<span class="text-text-main dark:text-white text-[15px] font-light">4.92</span>
</div>
</div>
<p class="text-text-secondary dark:text-gray-400 text-[15px] font-light leading-snug">Midtown Penthouse</p>
<p class="text-text-secondary dark:text-gray-400 text-[15px] font-light leading-snug">Jan 10 - 15</p>
<div class="flex items-center gap-1 mt-1">
<p class="text-text-main dark:text-white text-[15px] font-semibold">$300</p>
<p class="text-text-main dark:text-white text-[15px] font-light">night</p>
</div>
</div>
</div>
<div class="flex flex-col gap-3 group cursor-pointer relative">
<div class="relative w-full aspect-[20/19] rounded-xl overflow-hidden bg-gray-200 dark:bg-gray-700">
<div class="absolute top-3 right-3 z-10">
<span class="material-symbols-outlined text-white/70 hover:text-white text-2xl drop-shadow-md cursor-pointer transition-transform active:scale-90">favorite</span>
</div>
<div class="w-full h-full bg-center bg-no-repeat bg-cover transform group-hover:scale-105 transition-transform duration-500" data-alt="Unique bamboo treehouse in the middle of a lush jungle" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCwEF55nTcGnv1OOBOjkn4M_BPX9e6jim0T5Qd6V1cVPR_ZJlRMRIg7-4jIAWWev7jGv6zzY9tCnWbL3KSOfBlS1Bgl4l_0VExL2_xIf6trR13jOGW6RrwlJCHwjEJqNsWytqIMnmziNCTiBkdauLhkaRK0A9NVs_Ty9j5ZXmFGnfdmeDi9rWoAAjgZy1fMboCQgQXEhvB9sWilKYFnKVK_Xr-_DvpqkRfLWNwDBFmt76oNR7ACqBIQKj91MMMMsvMFvYuJi480Mx7W");'></div>
</div>
<div class="flex flex-col gap-1">
<div class="flex justify-between items-start">
<h3 class="text-text-main dark:text-white font-semibold text-[15px] truncate">Bali, Indonesia</h3>
<div class="flex items-center gap-1">
<span class="material-symbols-outlined text-sm text-text-main dark:text-white">star</span>
<span class="text-text-main dark:text-white text-[15px] font-light">4.99</span>
</div>
</div>
<p class="text-text-secondary dark:text-gray-400 text-[15px] font-light leading-snug">Jungle Treehouse</p>
<p class="text-text-secondary dark:text-gray-400 text-[15px] font-light leading-snug">Feb 14 - 20</p>
<div class="flex items-center gap-1 mt-1">
<p class="text-text-main dark:text-white text-[15px] font-semibold">$180</p>
<p class="text-text-main dark:text-white text-[15px] font-light">night</p>
</div>
</div>
</div>
<div class="flex flex-col gap-3 group cursor-pointer relative">
<div class="relative w-full aspect-[20/19] rounded-xl overflow-hidden bg-gray-200 dark:bg-gray-700">
<div class="absolute top-3 right-3 z-10">
<span class="material-symbols-outlined text-white/70 hover:text-white text-2xl drop-shadow-md cursor-pointer transition-transform active:scale-90">favorite</span>
</div>
<div class="w-full h-full bg-center bg-no-repeat bg-cover transform group-hover:scale-105 transition-transform duration-500" data-alt="Peaceful cottage sitting on the edge of a calm lake" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBiWxV8xT6HATv3MBI_KJ9XoGtP3m-ra4HzSVks6SXUNBXONzA7PGMn2rgDylPdB_quDLE0mX8UyyHT98fgGf_B-VCYhB1FySy3ibKvqxLrQOAqMND_aYIg1NfJU3BH2-JU49fPH38vJnnkLFJssmX-JISESb3T2vFisNnDmTHvXeC4bkX6EE2vwFpjJSI-xkBOc02Rj1tQ-IOP2Sy8mQcvwTnczp6aKjseZ8SKJQYcnc7DJjGDm-U5rEKhCJJprCp5H7UHiSeydRGp");'></div>
</div>
<div class="flex flex-col gap-1">
<div class="flex justify-between items-start">
<h3 class="text-text-main dark:text-white font-semibold text-[15px] truncate">Lake Tahoe, Nevada</h3>
<div class="flex items-center gap-1">
<span class="material-symbols-outlined text-sm text-text-main dark:text-white">star</span>
<span class="text-text-main dark:text-white text-[15px] font-light">4.75</span>
</div>
</div>
<p class="text-text-secondary dark:text-gray-400 text-[15px] font-light leading-snug">Lakeview Cottage</p>
<p class="text-text-secondary dark:text-gray-400 text-[15px] font-light leading-snug">Mar 5 - 10</p>
<div class="flex items-center gap-1 mt-1">
<p class="text-text-main dark:text-white text-[15px] font-semibold">$210</p>
<p class="text-text-main dark:text-white text-[15px] font-light">night</p>
</div>
</div>
</div>
<div class="flex flex-col gap-3 group cursor-pointer relative">
<div class="relative w-full aspect-[20/19] rounded-xl overflow-hidden bg-gray-200 dark:bg-gray-700">
<div class="absolute top-3 right-3 z-10">
<span class="material-symbols-outlined text-white/70 hover:text-white text-2xl drop-shadow-md cursor-pointer transition-transform active:scale-90">favorite</span>
</div>
<div class="w-full h-full bg-center bg-no-repeat bg-cover transform group-hover:scale-105 transition-transform duration-500" data-alt="Geodesic dome glamping tent in a desert landscape" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBYjNAlGJLNTsNRRoCPTXb1DTUpvlQvX18hr53ki2t2hif_xUp-YX4i3-bXg2qUJx3SKVVc9SHhcvbUIbuNsSWOMdZNpVRPfHY4nZvZe90uh1SemO7G-LL2Js351c571E64-cfFwWOuGWU5EtUa7Vh9HDfPEW38qyg00CA7vhADvyiamQ7a-WK59x9WUyvLBw6wjZjAoAzsXxDh2ktAbR-jGAT17kck17uf0tmqLZWi05DC5ayg9RFRIMOoQ9PaV7JrHZoYU61vTSvL");'></div>
</div>
<div class="flex flex-col gap-1">
<div class="flex justify-between items-start">
<h3 class="text-text-main dark:text-white font-semibold text-[15px] truncate">Joshua Tree, CA</h3>
<div class="flex items-center gap-1">
<span class="material-symbols-outlined text-sm text-text-main dark:text-white">star</span>
<span class="text-text-main dark:text-white text-[15px] font-light">4.90</span>
</div>
</div>
<p class="text-text-secondary dark:text-gray-400 text-[15px] font-light leading-snug">Desert Stargazing Dome</p>
<p class="text-text-secondary dark:text-gray-400 text-[15px] font-light leading-snug">Apr 12 - 18</p>
<div class="flex items-center gap-1 mt-1">
<p class="text-text-main dark:text-white text-[15px] font-semibold">$150</p>
<p class="text-text-main dark:text-white text-[15px] font-light">night</p>
</div>
</div>
</div>
<div class="flex flex-col gap-3 group cursor-pointer relative">
<div class="relative w-full aspect-[20/19] rounded-xl overflow-hidden bg-gray-200 dark:bg-gray-700">
<div class="absolute top-3 right-3 z-10">
<span class="material-symbols-outlined text-white/70 hover:text-white text-2xl drop-shadow-md cursor-pointer transition-transform active:scale-90">favorite</span>
</div>
<div class="w-full h-full bg-center bg-no-repeat bg-cover transform group-hover:scale-105 transition-transform duration-500" data-alt="A-frame ski chalet covered in snow in the mountains" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAXstXwsb5MhOQzdGLyREFgJpww-fy6Yi2JY2Hqxr_PbnvufvHGooO9NbLHupEqXJ1gFiQ-imjYpCP1dX3z-XsWXoSGQSXEhTKCsetfeY1J72bWoo66LR7UKGEhWBFOq-OgKgs-PWknON7qzr2-z6JF7HVyXWpz0ka52jXzeHxDcJ6NM0qj8gJKw7H3Y1tQhGCj4M4o1unOlyAl90vKJ1M4KrOXiKwja4IKwrtcmhZYimU_MxZffxMXi0FjhNavL0MOp0mpRQPu8TQN");'></div>
</div>
<div class="flex flex-col gap-1">
<div class="flex justify-between items-start">
<h3 class="text-text-main dark:text-white font-semibold text-[15px] truncate">Aspen, Colorado</h3>
<div class="flex items-center gap-1">
<span class="material-symbols-outlined text-sm text-text-main dark:text-white">star</span>
<span class="text-text-main dark:text-white text-[15px] font-light">4.88</span>
</div>
</div>
<p class="text-text-secondary dark:text-gray-400 text-[15px] font-light leading-snug">Mountain Chalet</p>
<p class="text-text-secondary dark:text-gray-400 text-[15px] font-light leading-snug">Dec 20 - 27</p>
<div class="flex items-center gap-1 mt-1">
<p class="text-text-main dark:text-white text-[15px] font-semibold">$400</p>
<p class="text-text-main dark:text-white text-[15px] font-light">night</p>
</div>
</div>
</div>
<div class="flex flex-col gap-3 group cursor-pointer relative">
<div class="relative w-full aspect-[20/19] rounded-xl overflow-hidden bg-gray-200 dark:bg-gray-700">
<div class="absolute top-3 right-3 z-10">
<span class="material-symbols-outlined text-white/70 hover:text-white text-2xl drop-shadow-md cursor-pointer transition-transform active:scale-90">favorite</span>
</div>
<div class="w-full h-full bg-center bg-no-repeat bg-cover transform group-hover:scale-105 transition-transform duration-500" data-alt="Modern house on a cliff overlooking the ocean" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBQfcmydIltzDeTw1w3qRyFwvDHLiv3MHP0--S2hW1NHVcnBbVP41q7jMfNdMm4WqkQ-ZNssHzfTHnA69zojDoiwSwt4KVno2nLyLHbBQBGHvO__dEstpsZjwfCVaO5LdddbmtGFCkM-f6IQHMxcUuv3fNlnAtWLyNRc8SYs7uhGwvygwOMcDCGlEnTWkoDiCruo3iW1Bv7EAeAX8SN9hs8eD9d6GKL1JpvgpdF3jkEtQ8fSimS9m63fyaE7WghKUdKTzUgoneHKwwi");'></div>
</div>
<div class="flex flex-col gap-1">
<div class="flex justify-between items-start">
<h3 class="text-text-main dark:text-white font-semibold text-[15px] truncate">Santorini, Greece</h3>
<div class="flex items-center gap-1">
<span class="material-symbols-outlined text-sm text-text-main dark:text-white">star</span>
<span class="text-text-main dark:text-white text-[15px] font-light">4.97</span>
</div>
</div>
<p class="text-text-secondary dark:text-gray-400 text-[15px] font-light leading-snug">Cliffside Villa</p>
<p class="text-text-secondary dark:text-gray-400 text-[15px] font-light leading-snug">Jul 5 - 12</p>
<div class="flex items-center gap-1 mt-1">
<p class="text-text-main dark:text-white text-[15px] font-semibold">$320</p>
<p class="text-text-main dark:text-white text-[15px] font-light">night</p>
</div>
</div>
</div>
<div class="flex flex-col gap-3 group cursor-pointer relative">
<div class="relative w-full aspect-[20/19] rounded-xl overflow-hidden bg-gray-200 dark:bg-gray-700">
<div class="absolute top-3 right-3 z-10">
<span class="material-symbols-outlined text-white/70 hover:text-white text-2xl drop-shadow-md cursor-pointer transition-transform active:scale-90">favorite</span>
</div>
<div class="w-full h-full bg-center bg-no-repeat bg-cover transform group-hover:scale-105 transition-transform duration-500" data-alt="Floating houseboat on a calm river" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDBTYf-pDjrstCXyOOxwcgElfE9RwgEDETZ7Ede9QPo9d5ZgxU_7b2QuAy3MtZfR0p4FhXBopLg_SfMocpmN4Rw-T79j6ESQG4h6vv_1dPjz6IPCrFOugNtR5hIDU9p2h-Gf5WFCSRbpFZv9vf4bycleTciiER03iNQWCw-16pxJVmo1bX_LBnxn909Qzx0UZZcMoFZsuejHH9isV99raXxqZaHViOv-MnYphZiEo5b97FSCTwXMvtiaFBF7iGvrV4XcPQ3mNNeipX1");'></div>
</div>
<div class="flex flex-col gap-1">
<div class="flex justify-between items-start">
<h3 class="text-text-main dark:text-white font-semibold text-[15px] truncate">Amsterdam, Netherlands</h3>
<div class="flex items-center gap-1">
<span class="material-symbols-outlined text-sm text-text-main dark:text-white">star</span>
<span class="text-text-main dark:text-white text-[15px] font-light">4.82</span>
</div>
</div>
<p class="text-text-secondary dark:text-gray-400 text-[15px] font-light leading-snug">Canal Houseboat</p>
<p class="text-text-secondary dark:text-gray-400 text-[15px] font-light leading-snug">May 10 - 15</p>
<div class="flex items-center gap-1 mt-1">
<p class="text-text-main dark:text-white text-[15px] font-semibold">$195</p>
<p class="text-text-main dark:text-white text-[15px] font-light">night</p>
</div>
</div>
</div>
</div>
</div>
<div class="fixed bottom-10 left-1/2 -translate-x-1/2 z-40">
<button class="bg-primary dark:bg-white text-white dark:text-background-dark px-5 py-3 rounded-full shadow-xl hover:scale-105 transition-transform flex items-center gap-2 font-semibold text-sm">
<span>Show map</span>
<span class="material-symbols-outlined text-[20px]">map</span>
</button>
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
</body></html>