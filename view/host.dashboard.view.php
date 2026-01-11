<?php
session_start();
if (isset($_SESSION['user_id'])) {
    $user_Id = $_SESSION['user_id'];
} else {
    header("location: ./login.view.php");
    exit();
}


include __DIR__ . "/../src/Database.php";
include __DIR__ . "/../src/rentale.php";

$rental = new Rental();
$rentals = $rental->getByHostId($user_Id);

?>

<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "earth-nav": "#AD8B73",
                        "earth-bg": "#aa7b35ff",
                        "earth-accent": "#CEAB93",
                        "earth-text": "#5C4033",
                        "background-light": "#E3CAA5",
                        "background-dark": "#1a100a",
                    },
                    fontFamily: {
                        "display": ["Plus Jakarta Sans", "sans-serif"]
                    },
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
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
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: #AD8B73;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #8c6b53;
        }
    </style>
</head>

<body
    class="bg-[#E3CAA5] dark:bg-[#1a100a] text-[#5C4033] dark:text-[#E3CAA5] font-display min-h-screen flex flex-col overflow-x-hidden">

    <header
        class="sticky top-0 z-50 flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#CEAB93] dark:border-b-stone-800 bg-[#AD8B73] px-4 md:px-10 py-3 shadow-md">
        <div class="flex items-center gap-8">
            <div class="flex items-center gap-4 text-white">
                <div class="size-8 text-[#E3CAA5]">
                    <span class="material-symbols-outlined text-4xl text-[#E3CAA5]">holiday_village</span>
                </div>
                <h2 class="text-xl font-bold leading-tight tracking-[-0.015em] text-[#fdfbf7]">KARI</h2>
            </div>
            <nav class="hidden md:flex items-center gap-6">
                <a class="text-white font-semibold text-sm leading-normal border-b-2 border-[#E3CAA5] pb-0.5"
                    href="#">Dashboard</a>
                <a class="text-[#E3CAA5]/80 text-sm font-medium leading-normal hover:text-white transition-colors"
                    href="#">Inbox</a>
            </nav>
        </div>

        <div class="flex items-center gap-4">
            <form action="../controllers/logout.php" method="POST">
                <button type="submit"
                    class="flex items-center gap-2 bg-[#8c6b53] hover:bg-[#5C4033] text-white px-4 py-2 rounded-lg text-sm font-semibold transition-colors shadow-sm">
                    <span class="material-symbols-outlined text-[18px]">logout</span>
                    Logout
                </button>
            </form>
        </div>
    </header>

    <main
        class="flex-1 flex flex-col items-center py-8 px-4 md:px-8 lg:px-12 w-full max-w-[1440px] mx-auto bg-[#E3CAA5] dark:bg-[#1a100a]">

        <div class="w-full flex flex-col md:flex-row justify-between items-start md:items-center gap-4 mb-8">
            <div class="flex flex-col gap-1">
                <h1 class="text-[#AD8B73] dark:text-[#E3CAA5] text-3xl font-bold tracking-tight">My Properties</h1>
                <p class="text-[#8c6b53] dark:text-[#CEAB93] text-sm md:text-base font-normal">Manage your listings,
                    update details, and track performance.</p>
            </div>
            <button onclick="toggleModal('addRentalModal', true)"
                class="flex items-center justify-center gap-2 rounded-lg bg-[#AD8B73] hover:bg-[#8c6b53] text-white px-5 py-2.5 text-sm font-bold shadow-md shadow-[#AD8B73]/20 transition-all active:scale-95">
                <span class="material-symbols-outlined text-[20px]">add</span>
                <span class="truncate">Add New Rental</span>
            </button>
        </div>

        <div
            class="w-full bg-white dark:bg-[#2a201a] rounded-t-xl border border-b-0 border-[#CEAB93] dark:border-stone-700 p-4 flex flex-col md:flex-row gap-4 justify-between items-center shadow-sm">
            <div class="relative w-full md:w-96">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <span class="material-symbols-outlined text-[#CEAB93]">search</span>
                </div>
                <input
                    class="block w-full pl-10 pr-3 py-2.5 border border-[#CEAB93]/50 dark:border-stone-600 rounded-lg leading-5 bg-[#fdfbf7] dark:bg-[#1a100a] text-[#5C4033] dark:text-white placeholder-[#CEAB93] focus:outline-none focus:bg-white focus:ring-1 focus:ring-[#AD8B73] focus:border-[#AD8B73] sm:text-sm transition-colors"
                    placeholder="Search properties..." type="text" />
            </div>
        </div>

        <div
            class="w-full overflow-hidden rounded-b-xl border border-[#CEAB93] dark:border-stone-700 bg-white dark:bg-[#2a201a] shadow-sm">
            <div class="overflow-x-auto">
                <table class="w-full text-left text-sm text-stone-500 dark:text-stone-400">
                    <thead
                        class="bg-[#fdfbf7] dark:bg-[#1a100a] text-xs uppercase text-[#AD8B73] dark:text-[#E3CAA5] border-b border-[#CEAB93] dark:border-stone-700">
                        <tr>
                            <th class="px-6 py-4 font-semibold tracking-wider w-16" scope="col">Image</th>
                            <th class="px-6 py-4 font-semibold tracking-wider" scope="col">Property</th>
                            <th class="px-6 py-4 font-semibold tracking-wider" scope="col">City</th>
                            <th class="px-6 py-4 font-semibold tracking-wider" scope="col">Address</th>
                            <th class="px-6 py-4 font-semibold tracking-wider" scope="col">Price/Night</th>
                            <th class="px-6 py-4 font-semibold tracking-wider text-right" scope="col">Actions</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-[#CEAB93]/20 dark:divide-stone-800">
                        <?php foreach ($rentals as $rental): ?>
                            <tr class="hover:bg-[#E3CAA5]/10 dark:hover:bg-[#1a100a]/50 transition-colors group">
                                <td class="whitespace-nowrap px-6 py-4">
                                    <div class="h-12 w-16 overflow-hidden rounded-lg bg-stone-200">
                                        <img alt="Property"
                                            class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-110"
                                            src="../images/<?= $rental->getImage() ?>" />
                                    </div>
                                </td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    <div class="flex flex-col">
                                        <span
                                            class="font-semibold text-[#AD8B73] dark:text-white text-base"><?= $rental->getTitle() ?></span>
                                    </div>
                                </td>
                                <td class="whitespace-nowrap px-6 py-4 text-stone-600 dark:text-stone-300">
                                    <?= $rental->getCity() ?></td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    <span
                                        class="font-medium text-[#AD8B73] dark:text-white"><?= $rental->getAddress() ?></span>
                                </td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    <span
                                        class="inline-flex items-center gap-1.5 rounded-full bg-[#AD8B73]/10 dark:bg-[#E3CAA5]/20 px-2.5 py-0.5 text-xs font-medium text-[#AD8B73] dark:text-[#E3CAA5]">
                                        <?= $rental->getPrice() ?>$
                                    </span>
                                </td>
                                <td class="whitespace-nowrap px-6 py-4 text-right">
                                    <div class="flex justify-end gap-2">
                                        <button onclick="openUpdateModal(this)" data-id="<?= $rental->getId() ?>"
                                            data-title="<?= $rental->getTitle() ?>" data-price="<?= $rental->getPrice() ?>"
                                            data-city="<?= $rental->getCity() ?>"
                                            data-address="<?= $rental->getAddress() ?>"
                                            data-desc="<?= $rental->getDescription() ?>"
                                            class="rounded-md p-2 text-[#CEAB93] hover:bg-[#CEAB93]/10 transition-colors"
                                            title="Edit">
                                            <span class="material-symbols-outlined text-[20px]">edit</span>
                                        </button>

                                        <form action="/../controllers/delete_rental.php" method="POST">
                                            <input type="hidden" name="rental_id" value="<?= $rental->getId() ?>">
                                            <button type="submit"
                                                class="rounded-md p-2 text-stone-400 hover:bg-red-50 hover:text-red-600 dark:hover:bg-red-900/20 dark:hover:text-red-400 transition-colors"
                                                title="Delete">
                                                <span class="material-symbols-outlined text-[20px]">delete</span>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div
                class="flex items-center justify-between border-t border-[#CEAB93] dark:border-stone-700 bg-white dark:bg-[#2a201a] px-4 py-3 sm:px-6">
                <div class="flex flex-1 justify-between sm:hidden">
                    <a class="relative inline-flex items-center rounded-md border border-stone-300 bg-white px-4 py-2 text-sm font-medium text-stone-700 hover:bg-stone-50"
                        href="#">Previous</a>
                    <a class="relative ml-3 inline-flex items-center rounded-md border border-stone-300 bg-white px-4 py-2 text-sm font-medium text-stone-700 hover:bg-stone-50"
                        href="#">Next</a>
                </div>
                <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                    <div>
                        <p class="text-sm text-stone-700 dark:text-stone-400">
                            Showing <span class="font-medium text-[#AD8B73] dark:text-white">1</span> to <span
                                class="font-medium text-[#AD8B73] dark:text-white">5</span> of <span
                                class="font-medium text-[#AD8B73] dark:text-white">12</span> results
                        </p>
                    </div>
                    <div>
                        <nav aria-label="Pagination" class="isolate inline-flex -space-x-px rounded-md shadow-sm">
                            <a class="relative inline-flex items-center rounded-l-md px-2 py-2 text-stone-400 ring-1 ring-inset ring-stone-300 dark:ring-stone-700 hover:bg-stone-50 dark:hover:bg-stone-800 focus:z-20 focus:outline-offset-0"
                                href="#">
                                <span class="sr-only">Previous</span>
                                <span class="material-symbols-outlined text-[20px]">chevron_left</span>
                            </a>
                            <a aria-current="page"
                                class="relative z-10 inline-flex items-center bg-[#AD8B73] px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#AD8B73]"
                                href="#">1</a>
                            <a class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-[#AD8B73] dark:text-stone-300 ring-1 ring-inset ring-stone-300 dark:ring-stone-700 hover:bg-stone-50 dark:hover:bg-stone-800 focus:z-20 focus:outline-offset-0"
                                href="#">2</a>
                            <a class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-[#AD8B73] dark:text-stone-300 ring-1 ring-inset ring-stone-300 dark:ring-stone-700 hover:bg-stone-50 dark:hover:bg-stone-800 focus:z-20 focus:outline-offset-0"
                                href="#">3</a>
                            <a class="relative inline-flex items-center rounded-r-md px-2 py-2 text-stone-400 ring-1 ring-inset ring-stone-300 dark:ring-stone-700 hover:bg-stone-50 dark:hover:bg-stone-800 focus:z-20 focus:outline-offset-0"
                                href="#">
                                <span class="sr-only">Next</span>
                                <span class="material-symbols-outlined text-[20px]">chevron_right</span>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div id="addRentalModal" class="fixed inset-0 z-[60] hidden" aria-labelledby="modal-title" role="dialog"
        aria-modal="true">
        <div class="fixed inset-0 bg-stone-900/60 backdrop-blur-sm transition-opacity"
            onclick="toggleModal('addRentalModal', false)"></div>
        <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <div
                    class="relative transform overflow-hidden rounded-2xl bg-white dark:bg-[#2a201a] text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-2xl border border-[#CEAB93] dark:border-stone-700">
                    <div
                        class="bg-[#fdfbf7] dark:bg-[#1a100a] px-6 py-4 border-b border-[#CEAB93]/30 flex justify-between items-center">
                        <h3 class="text-xl font-bold text-[#AD8B73] dark:text-[#E3CAA5]">Add New Property</h3>
                        <button type="button" onclick="toggleModal('addRentalModal', false)"
                            class="text-[#CEAB93] hover:text-[#AD8B73] transition-colors p-1 rounded-full hover:bg-[#E3CAA5]/20"><span
                                class="material-symbols-outlined">close</span></button>
                    </div>
                    <form action="../controllers/add_rental.php" method="POST" enctype="multipart/form-data"
                        class="p-6 space-y-6">
                        <div
                            class="flex justify-center rounded-xl border border-dashed border-[#CEAB93] px-6 py-8 bg-[#fdfbf7] dark:bg-[#1a100a] group hover:bg-[#E3CAA5]/10 transition-colors cursor-pointer relative">
                            <div class="text-center">
                                <span
                                    class="material-symbols-outlined mx-auto h-12 w-12 text-[#CEAB93] group-hover:text-[#AD8B73] transition-colors text-4xl mb-2">add_photo_alternate</span>
                                <div class="mt-2 flex text-sm leading-6 text-stone-600 dark:text-stone-400">
                                    <label for="add-file-upload"
                                        class="relative cursor-pointer rounded-md font-semibold text-[#AD8B73] hover:underline">
                                        <span>Upload a file</span>
                                        <input id="add-file-upload" name="image" type="file" class="sr-only" required>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="col-span-2 md:col-span-1">
                                <label
                                    class="block text-sm font-medium leading-6 text-[#5C4033] dark:text-[#E3CAA5]">Title</label>
                                <input type="text" name="title"
                                    class="mt-2 block w-full rounded-lg border border-[#CEAB93] px-4 py-2.5 bg-white dark:bg-[#1a100a] text-[#5C4033] dark:text-white placeholder:text-[#CEAB93] focus:ring-2 focus:ring-[#AD8B73] outline-none"
                                    required>
                            </div>
                            <div class="col-span-2 md:col-span-1">
                                <label
                                    class="block text-sm font-medium leading-6 text-[#5C4033] dark:text-[#E3CAA5]">Price</label>
                                <input type="number" name="price"
                                    class="mt-2 block w-full rounded-lg border border-[#CEAB93] px-4 py-2.5 bg-white dark:bg-[#1a100a] text-[#5C4033] dark:text-white placeholder:text-[#CEAB93] focus:ring-2 focus:ring-[#AD8B73] outline-none"
                                    required>
                            </div>
                            <div class="col-span-2">
                                <label
                                    class="block text-sm font-medium leading-6 text-[#5C4033] dark:text-[#E3CAA5]">City</label>
                                <input type="text" name="city"
                                    class="mt-2 block w-full rounded-lg border border-[#CEAB93] px-4 py-2.5 bg-white dark:bg-[#1a100a] text-[#5C4033] dark:text-white placeholder:text-[#CEAB93] focus:ring-2 focus:ring-[#AD8B73] outline-none"
                                    required>
                            </div>
                            <div class="col-span-2">
                                <label
                                    class="block text-sm font-medium leading-6 text-[#5C4033] dark:text-[#E3CAA5]">Address</label>
                                <input type="text" name="address"
                                    class="mt-2 block w-full rounded-lg border border-[#CEAB93] px-4 py-2.5 bg-white dark:bg-[#1a100a] text-[#5C4033] dark:text-white placeholder:text-[#CEAB93] focus:ring-2 focus:ring-[#AD8B73] outline-none"
                                    required>
                            </div>
                            <div class="col-span-2">
                                <label
                                    class="block text-sm font-medium leading-6 text-[#5C4033] dark:text-[#E3CAA5]">Description</label>
                                <textarea name="description" rows="3"
                                    class="mt-2 block w-full rounded-lg border border-[#CEAB93] px-4 py-2.5 bg-white dark:bg-[#1a100a] text-[#5C4033] dark:text-white placeholder:text-[#CEAB93] focus:ring-2 focus:ring-[#AD8B73] outline-none"
                                    required></textarea>
                            </div>
                        </div>
                        <div class="mt-6 flex items-center justify-end gap-x-4 border-t border-[#CEAB93]/30 pt-6">
                            <button type="button" onclick="toggleModal('addRentalModal', false)"
                                class="text-sm font-semibold text-[#5C4033] dark:text-[#E3CAA5] hover:text-[#AD8B73]">Cancel</button>
                            <button type="submit"
                                class="rounded-lg bg-[#AD8B73] hover:bg-[#8c6b53] text-white px-6 py-2.5 text-sm font-bold shadow-md transition-all active:scale-95">Save
                                Property</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="updateRentalModal" class="fixed inset-0 z-[60] hidden" aria-labelledby="modal-title" role="dialog"
        aria-modal="true">
        <div class="fixed inset-0 bg-stone-900/60 backdrop-blur-sm transition-opacity"
            onclick="toggleModal('updateRentalModal', false)"></div>
        <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <div
                    class="relative transform overflow-hidden rounded-2xl bg-white dark:bg-[#2a201a] text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-2xl border border-[#CEAB93] dark:border-stone-700">
                    <div
                        class="bg-[#fdfbf7] dark:bg-[#1a100a] px-6 py-4 border-b border-[#CEAB93]/30 flex justify-between items-center">
                        <h3 class="text-xl font-bold text-[#AD8B73] dark:text-[#E3CAA5]">Update Property</h3>
                        <button type="button" onclick="toggleModal('updateRentalModal', false)"
                            class="text-[#CEAB93] hover:text-[#AD8B73] transition-colors p-1 rounded-full hover:bg-[#E3CAA5]/20"><span
                                class="material-symbols-outlined">close</span></button>
                    </div>

                    <form action="/../controllers/update_rental.php" method="POST" enctype="multipart/form-data"
                        class="p-6 space-y-6">
                        <input type="hidden" name="rental_id" id="update_rental_id">


                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="col-span-2 md:col-span-1">
                                <label
                                    class="block text-sm font-medium leading-6 text-[#5C4033] dark:text-[#E3CAA5]">Title</label>
                                <input type="text" name="title" id="update_title"
                                    class="mt-2 block w-full rounded-lg border border-[#CEAB93] px-4 py-2.5 bg-white dark:bg-[#1a100a] text-[#5C4033] dark:text-white placeholder:text-[#CEAB93] focus:ring-2 focus:ring-[#AD8B73] outline-none"
                                    required>
                            </div>

                            <div class="col-span-2 md:col-span-1">
                                <label
                                    class="block text-sm font-medium leading-6 text-[#5C4033] dark:text-[#E3CAA5]">Price
                                    per Night</label>
                                <input type="number" name="price" id="update_price"
                                    class="mt-2 block w-full rounded-lg border border-[#CEAB93] px-4 py-2.5 bg-white dark:bg-[#1a100a] text-[#5C4033] dark:text-white placeholder:text-[#CEAB93] focus:ring-2 focus:ring-[#AD8B73] outline-none"
                                    required>
                            </div>

                            <div class="col-span-2">
                                <label
                                    class="block text-sm font-medium leading-6 text-[#5C4033] dark:text-[#E3CAA5]">City</label>
                                <input type="text" name="city" id="update_city"
                                    class="mt-2 block w-full rounded-lg border border-[#CEAB93] px-4 py-2.5 bg-white dark:bg-[#1a100a] text-[#5C4033] dark:text-white placeholder:text-[#CEAB93] focus:ring-2 focus:ring-[#AD8B73] outline-none"
                                    required>
                            </div>

                            <div class="col-span-2">
                                <label
                                    class="block text-sm font-medium leading-6 text-[#5C4033] dark:text-[#E3CAA5]">Address</label>
                                <input type="text" name="address" id="update_address"
                                    class="mt-2 block w-full rounded-lg border border-[#CEAB93] px-4 py-2.5 bg-white dark:bg-[#1a100a] text-[#5C4033] dark:text-white placeholder:text-[#CEAB93] focus:ring-2 focus:ring-[#AD8B73] outline-none"
                                    required>
                            </div>

                            <div class="col-span-2">
                                <label
                                    class="block text-sm font-medium leading-6 text-[#5C4033] dark:text-[#E3CAA5]">Description</label>
                                <textarea name="description" id="update_description" rows="3"
                                    class="mt-2 block w-full rounded-lg border border-[#CEAB93] px-4 py-2.5 bg-white dark:bg-[#1a100a] text-[#5C4033] dark:text-white placeholder:text-[#CEAB93] focus:ring-2 focus:ring-[#AD8B73] outline-none"
                                    required></textarea>
                            </div>

                            <div class="col-span-2">
                                <label
                                    class="block text-sm font-medium leading-6 text-[#5C4033] dark:text-[#E3CAA5]">New
                                    Image (Optional)</label>
                                <input type="file" name="image"
                                    class="mt-2 block w-full text-sm text-stone-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-[#AD8B73]/10 file:text-[#AD8B73] hover:file:bg-[#AD8B73]/20">
                            </div>
                        </div>

                        <div class="mt-6 flex items-center justify-end gap-x-4 border-t border-[#CEAB93]/30 pt-6">
                            <button type="button" onclick="toggleModal('updateRentalModal', false)"
                                class="text-sm font-semibold text-[#5C4033] dark:text-[#E3CAA5] hover:text-[#AD8B73]">Cancel</button>
                            <button type="submit"
                                class="rounded-lg bg-[#AD8B73] hover:bg-[#8c6b53] text-white px-6 py-2.5 text-sm font-bold shadow-md transition-all active:scale-95">Update
                                Property</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleModal(modalID, show) {
            const modal = document.getElementById(modalID);
            if (show) {
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            } else {
                modal.classList.add('hidden');
                document.body.style.overflow = '';
            }
        }

        function openUpdateModal(button) {
            const id = button.getAttribute('data-id');
            const title = button.getAttribute('data-title');
            const price = button.getAttribute('data-price');
            const city = button.getAttribute('data-city');
            const address = button.getAttribute('data-address');
            const desc = button.getAttribute('data-desc');

            document.getElementById('update_rental_id').value = id;
            document.getElementById('update_title').value = title;
            document.getElementById('update_price').value = price;
            document.getElementById('update_city').value = city;
            document.getElementById('update_address').value = address;
            document.getElementById('update_description').value = desc;

            toggleModal('updateRentalModal', true);
        }
    </script>
</body>

</html>