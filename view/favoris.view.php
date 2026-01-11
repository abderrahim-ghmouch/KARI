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
            /* Requested specific background */
        }
    </style>
</head>

<body class="font-display">
    <div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
        <div class="layout-container flex h-full grow flex-col">
   
        <header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#D4B59D] dark:border-b-[#4A3B32] bg-[#FDF6E9] dark:bg-[#3D322C] px-4 md:px-10 py-3 sticky top-0 z-50">
<div class="flex items-center gap-4 md:gap-8">
<div class="flex items-center gap-2 text-primary">
<div class="size-8 flex items-center justify-center">
<span class="material-symbols-outlined text-4xl">travel_explore</span>
</div>
<h2 class="text-text-dark dark:text-[#E3CAA5] text-lg font-bold leading-tight tracking-[-0.015em] hidden sm:block">KARI</h2>
</div>

</div>
<div class="flex flex-1 justify-end gap-4 md:gap-8 items-center">
<div class="hidden md:flex items-center gap-6 lg:gap-9" >
<a class="text-text-dark dark:text-[#E3CAA5] text-sm font-medium leading-normal hover:text-primary transition-colors" href="home.view.php">Home</a>
<a class="text-primary text-sm font-bold leading-normal" href="#">Favoris</a>

</div>
<div class="flex items-center gap-2">

<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 border-2 border-[#CEAB93] dark:border-[#4A3B32] shadow-sm cursor-pointer" data-alt="User profile picture showing a smiling person" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCFUNzflqZC7CNajROQ59zef0LwTWhcl316b6Yrg_VMi1vOBjWlHZGqstO6yUAIrsg2Jx1Y5mC3z4ZRRR7ABUF0q5fN_qi0_Jp2sUgC_RChaXtdxS3twCI6fNER7L8iyxTxZ8G3A20ZHtpbx9HRxQHJMU2HTe3mrE6Rtdc1dAbP9ekN0O8N6Ve36lfls8GulUAmhhXkhYUenkNLmmpvJGlC3M6DGD2GKzkuPyx49ydm_hEkbXnG30zQAT9iM7HTIxkTidNlmww2aKxP");'></div>
</div>
</div>
</header>
            <main class="flex-1 flex flex-col items-center">
                <div class="w-full max-w-[1200px] px-6 lg:px-10 py-10">
                    <!-- Page Heading -->
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
                        <!-- Card 1 -->
                        <div class="flex flex-col gap-3 group cursor-pointer">
                            <div class="relative w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl shadow-sm overflow-hidden"
                                data-alt="Modern house with beach view"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCD0TttucWWWb_lPIZcortCmgxxnp56xFv2omCwdr8T8AUZ6T-70A_aytqcMR7dwVd2NWrjMQ9YldtLm7XjkmfG3hp7AW11DiqJUbP14JBHCHRWNUBipgQCF1dI7uLbkjvrVrngH61StgqYR6btWlBm9Sc-vEYLxWJYVRipSDWxrJzmfKwepaZ6d7mBeYYupvf25pbIjju1ik_HCnQonES6cPt3nSw1PZQY2awQ9mIjOBSRhTKAd_hQslMmzZYXYh4nixlTm3s4TqWL");'>
                                <div
                                    class="absolute top-3 right-3 bg-white/30 backdrop-blur-md rounded-full p-2 flex items-center justify-center">
                                    <span class="material-symbols-outlined fill-primary text-2xl">favorite</span>
                                </div>
                            </div>
                            <div class="px-1">
                                <div class="flex justify-between items-start">
                                    <p class="text-[#151413] text-base font-bold leading-normal">Coastal Retreat in
                                        Malibu</p>
                                    <div class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-sm fill-primary">star</span>
                                        <span class="text-sm font-medium">4.9</span>
                                    </div>
                                </div>
                                <p class="text-[#7b746f] text-sm font-normal leading-normal">Malibu, California</p>
                                <p class="text-[#151413] text-sm font-bold leading-normal mt-1">$350 <span
                                        class="font-normal text-[#7b746f]">/ night</span></p>
                            </div>
                        </div>
                        <!-- Card 2 -->
                        <div class="flex flex-col gap-3 group cursor-pointer">
                            <div class="relative w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl shadow-sm overflow-hidden"
                                data-alt="Cozy wooden cabin in snowy mountains"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAs3jPzYBSLluPp3q7NguYNbLVRLs_R-_x9xnlf_a58D80G5GfY7YNocDzijGJZPXoV7kdLWfs6qqa_de6pT0_2T9W6_GgnqjriXoF9d5Wp_B_mWxLDs1mv6-tO9u50Zgg9kmTfBubMhpEPxgAvknyrRLrkweUoeaUNShOesuLeIy7pmZIpwaUgUDF7fWnRuvf3Kl8LB2ULBhOqBBo7_WLyx-QYl8g7C8_Rv23fuipiCCB8VGbFjEZz59xVSj90Ghrwl7nmTtnbAXkq");'>
                                <div
                                    class="absolute top-3 right-3 bg-white/30 backdrop-blur-md rounded-full p-2 flex items-center justify-center">
                                    <span class="material-symbols-outlined fill-primary text-2xl">favorite</span>
                                </div>
                            </div>
                            <div class="px-1">
                                <div class="flex justify-between items-start">
                                    <p class="text-[#151413] text-base font-bold leading-normal">Mountain Escape</p>
                                    <div class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-sm fill-primary">star</span>
                                        <span class="text-sm font-medium">4.8</span>
                                    </div>
                                </div>
                                <p class="text-[#7b746f] text-sm font-normal leading-normal">Aspen, Colorado</p>
                                <p class="text-[#151413] text-sm font-bold leading-normal mt-1">$420 <span
                                        class="font-normal text-[#7b746f]">/ night</span></p>
                            </div>
                        </div>
                        <!-- Card 3 -->
                        <div class="flex flex-col gap-3 group cursor-pointer">
                            <div class="relative w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl shadow-sm overflow-hidden"
                                data-alt="Desert modern villa in Joshua Tree"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAsVdWg7r5Zvb4UeYN0OhJ5rsF33U66ym4i-2iDjzweHLKbLsGM71l7UeQ4BIztgz5VyvEPYBuPUOxkDAPB3ml2rpQT7xrPQy7cg3tI0UkfBOhVqSa8gyWdA8rYKhpZ4Jcr838yYi3c6fDzZaqGxZ_QMbDwDR1xVUj7CU0bpGjDa5b_8da-V347qmtmPF7y7pyQoIZwoCvorS32H0GhfOlZriEHoJapTPR_QvIVtymUns0p7jBYrmTcPAGyfk-6OiSpRfy0Tj_j5-MF");'>
                                <div
                                    class="absolute top-3 right-3 bg-white/30 backdrop-blur-md rounded-full p-2 flex items-center justify-center">
                                    <span class="material-symbols-outlined fill-primary text-2xl">favorite</span>
                                </div>
                            </div>
                            <div class="px-1">
                                <div class="flex justify-between items-start">
                                    <p class="text-[#151413] text-base font-bold leading-normal">Desert Oasis</p>
                                    <div class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-sm fill-primary">star</span>
                                        <span class="text-sm font-medium">5.0</span>
                                    </div>
                                </div>
                                <p class="text-[#7b746f] text-sm font-normal leading-normal">Joshua Tree, California</p>
                                <p class="text-[#151413] text-sm font-bold leading-normal mt-1">$280 <span
                                        class="font-normal text-[#7b746f]">/ night</span></p>
                            </div>
                        </div>
                        <!-- Card 4 -->
                        <div class="flex flex-col gap-3 group cursor-pointer">
                            <div class="relative w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl shadow-sm overflow-hidden"
                                data-alt="Modern penthouse interior"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB_obAjXZqAa4ozciWbrYd1KmVI7yO8PovijBxPNuegRpmQAeANMR_J0trABN20wb8goOi0m1A-kI2ZJAfyhj8PZoyMPHC9FuQSSwuovXBZ-eQAvMv5kduNkoLUGjG0G-oozfuePiMl5eY9nVV3phIXZP9FmFp--1_HK6HcCNViXxIRFgrJKZgEVS2Q2jIhDfOS96KtfIhk4YREFSSVyQ2I1qyPl-STxzaNEw-FyaC1xUJoBaT4o4ytA0q5ML_mPw6tAOhVAC5WbOEB");'>
                                <div
                                    class="absolute top-3 right-3 bg-white/30 backdrop-blur-md rounded-full p-2 flex items-center justify-center">
                                    <span class="material-symbols-outlined fill-primary text-2xl">favorite</span>
                                </div>
                            </div>
                            <div class="px-1">
                                <div class="flex justify-between items-start">
                                    <p class="text-[#151413] text-base font-bold leading-normal">Urban Loft</p>
                                    <div class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-sm fill-primary">star</span>
                                        <span class="text-sm font-medium">4.7</span>
                                    </div>
                                </div>
                                <p class="text-[#7b746f] text-sm font-normal leading-normal">New York, New York</p>
                                <p class="text-[#151413] text-sm font-bold leading-normal mt-1">$210 <span
                                        class="font-normal text-[#7b746f]">/ night</span></p>
                            </div>
                        </div>
                        <!-- Card 5 -->
                        <div class="flex flex-col gap-3 group cursor-pointer">
                            <div class="relative w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl shadow-sm overflow-hidden"
                                data-alt="Rustic cabin by the lake"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA07XSpoNG_H3-RQ1T1h92xBCmZA9inotPCDqqsRxlLO69NAsBSRVInfSkI6y04G1svYRd8dgA2ehMqzHO0gLkEyWUJPNAo-N621iloly164vuLmbnUfbH7LmnW2IupdiFtKm-HDuFozYjv98RK7V31EQFJFs1MxZr0wQ54nDrzzeZe0XpV5lH30uaApOeMQOGMoFgAUopfeKMJea-nUtFlMPf3PRln1DpIvfwX9DzMRhuJ3t1lORXgQxhS467Mg_X3QYmTcF7mz42s");'>
                                <div
                                    class="absolute top-3 right-3 bg-white/30 backdrop-blur-md rounded-full p-2 flex items-center justify-center">
                                    <span class="material-symbols-outlined fill-primary text-2xl">favorite</span>
                                </div>
                            </div>
                            <div class="px-1">
                                <div class="flex justify-between items-start">
                                    <p class="text-[#151413] text-base font-bold leading-normal">Lakeside Cabin</p>
                                    <div class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-sm fill-primary">star</span>
                                        <span class="text-sm font-medium">4.9</span>
                                    </div>
                                </div>
                                <p class="text-[#7b746f] text-sm font-normal leading-normal">Lake Tahoe, California</p>
                                <p class="text-[#151413] text-sm font-bold leading-normal mt-1">$195 <span
                                        class="font-normal text-[#7b746f]">/ night</span></p>
                            </div>
                        </div>
                        <!-- Card 6 -->
                        <div class="flex flex-col gap-3 group cursor-pointer">
                            <div class="relative w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl shadow-sm overflow-hidden"
                                data-alt="Luxurious villa with pool"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCxHjkXK7Q9Qw2estZ-PCi1jaTQMREKWUpwDqKZZ9e3vin0NCmukZ-gfIOlauEsBiEoyJnNfGGDnnzei3V4hF9argsTEimr0a8JAl905F9RmWGX0Fuh4tGbRt_p_-9UP1_C5I6pEMGaApwGIQolljjsiazCzN-evHxBkH4E_6xlMH4MuLSwVypdqMDeVoVO02XsyUl94EDvlaZAJJ96uiIYQjSCcBuTs_1VYG_Xmx6-9uwa5QkpFtOL7z5IFEdpEV2M5_ctdRqaij2D");'>
                                <div
                                    class="absolute top-3 right-3 bg-white/30 backdrop-blur-md rounded-full p-2 flex items-center justify-center">
                                    <span class="material-symbols-outlined fill-primary text-2xl">favorite</span>
                                </div>
                            </div>
                            <div class="px-1">
                                <div class="flex justify-between items-start">
                                    <p class="text-[#151413] text-base font-bold leading-normal">Modern Villa</p>
                                    <div class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-sm fill-primary">star</span>
                                        <span class="text-sm font-medium">5.0</span>
                                    </div>
                                </div>
                                <p class="text-[#7b746f] text-sm font-normal leading-normal">Miami, Florida</p>
                                <p class="text-[#151413] text-sm font-bold leading-normal mt-1">$550 <span
                                        class="font-normal text-[#7b746f]">/ night</span></p>
                            </div>
                        </div>
                        <!-- Card 7 -->
                        <div class="flex flex-col gap-3 group cursor-pointer">
                            <div class="relative w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl shadow-sm overflow-hidden"
                                data-alt="Traditional Japanese house"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAXenKoFqx1s_Qiyc2IcCCj9sBGygY2m9smDSX5vvVzikOx4PCmFa4b05vefVnh954FdAL96qaUKr6Uv6I2GMLwE-86-boIiiydPVyfaA8px0HblSUwGN2t42o0plAMoB-0M279lETS13Fmbi7idQFLkx6UKceoWTQeH4Ou04fN6W2msVfHAmgAPsHCejenrcF1ylSXJWgvO2D6psWcTbfJC5sh29qvf24SpPYLA3wYlYCToI69lowJaSqHcDU9EEvjOAmwpk8KMXvo");'>
                                <div
                                    class="absolute top-3 right-3 bg-white/30 backdrop-blur-md rounded-full p-2 flex items-center justify-center">
                                    <span class="material-symbols-outlined fill-primary text-2xl">favorite</span>
                                </div>
                            </div>
                            <div class="px-1">
                                <div class="flex justify-between items-start">
                                    <p class="text-[#151413] text-base font-bold leading-normal">Kyoto Zen Stay</p>
                                    <div class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-sm fill-primary">star</span>
                                        <span class="text-sm font-medium">4.9</span>
                                    </div>
                                </div>
                                <p class="text-[#7b746f] text-sm font-normal leading-normal">Kyoto, Japan</p>
                                <p class="text-[#151413] text-sm font-bold leading-normal mt-1">$220 <span
                                        class="font-normal text-[#7b746f]">/ night</span></p>
                            </div>
                        </div>
                        <!-- Card 8 -->
                        <div class="flex flex-col gap-3 group cursor-pointer">
                            <div class="relative w-full bg-center bg-no-repeat aspect-square bg-cover rounded-xl shadow-sm overflow-hidden"
                                data-alt="Nordic style minimalist cabin"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB8ecMDyRaWNjBrSSXYwwRVSl7AFf_1kNG4VXBi7iYNugGnmg-YB92EfnVuEjPcixQSX98A2b6n3w8emZmQBQ0X5RGiA2pUSjVxgjZXtdBKNdGfAu4_na4etrE97Mr0iAD6D74UcPXGtew_AJySkJRh2bGWqzyqmUe2lDc-YwMWA_nUBeato2Z5eNXGTEsdmvZLFMGT6jYxdGL_icxOQdnqoX_v35s5a7NXYYPmcIWSkcBtaeo30aSxbKHy-BBGW871AE0UM_9XaFzt");'>
                                <div
                                    class="absolute top-3 right-3 bg-white/30 backdrop-blur-md rounded-full p-2 flex items-center justify-center">
                                    <span class="material-symbols-outlined fill-primary text-2xl">favorite</span>
                                </div>
                            </div>
                            <div class="px-1">
                                <div class="flex justify-between items-start">
                                    <p class="text-[#151413] text-base font-bold leading-normal">Nordic Hideaway</p>
                                    <div class="flex items-center gap-1">
                                        <span class="material-symbols-outlined text-sm fill-primary">star</span>
                                        <span class="text-sm font-medium">4.8</span>
                                    </div>
                                </div>
                                <p class="text-[#7b746f] text-sm font-normal leading-normal">Oslo, Norway</p>
                                <p class="text-[#151413] text-sm font-bold leading-normal mt-1">$310 <span
                                        class="font-normal text-[#7b746f]">/ night</span></p>
                            </div>
                        </div>
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