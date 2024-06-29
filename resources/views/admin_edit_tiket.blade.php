<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    <title>Concert.tix</title>
</head>

<body class="bg-gray-100">
    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-400">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <a href="{{ route('admin_tampilan_awal') }}"
                        class="flex items-center p-2 text-gray-800 hover:text-blue-600">
                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="ml-2">Home</span>
                    </a>

                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                        aria-controls="logo-sidebar" type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                    <a href="https://flowbite.com" class="flex ms-2 md:me-24">
                        <img class="w-12 h-12 rounded-full" src="/images/Logo.jpg" alt="Rounded avatar">

                        <span class=" text-4xl font-semibold whitespace-nowrap">Concert.tix</span>
                    </a>
                </div>
                <div class="flex items-center">
                    <div class="flex items-center ms-3">
                        <div>
                            <button type="button"
                                class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300"
                                aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full"
                                    src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                    alt="user photo">
                            </button>
                        </div>
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow"
                            id="dropdown-user">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm text-gray-900" role="none">
                                    Neil Sims
                                </p>
                                <p class="text-sm font-medium text-gray-900 truncate" role="none">
                                    neil.sims@flowbite.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- ini adalah sidebar -->
    <aside id="default-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-blue-500 border-r border-gray-400 sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto">
            <ul class="space-y-2 font-medium">
                <li>
                    <span
                        class="flex text-center justify-content-center align-items-center p-3 text-gray-900 rounded-lg group ms-3">
                        <b>THE ERAS TOUR</b>
                    </span>
                    <hr class="bg-secondary">
                </li><br>
            </ul>
        </div>
    </aside>

    <div class="container mt-10 mx-auto max-w-2xl ">
        <div class="mb-2">
            <label for="kategoriTiket" class="block text-gray-900 text-sm font-medium mb-2 text-center">Menambahkan
                Kategori Tiket</label>
        </div>

        <div class="mb-2">
            <form class="mt-8" action="{{ route('tikets.update', $tiket->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div
                    class="w-full border border-gray-500 focus:border-indigo-500 focus:ring-indigo-500 p-4 bg-white rounded-md shadow-md">
                    <div class="mb-4">
                        <label for="kateogri2" class="block text-gray-500 text-sm font-medium mb-2">Nama Jenis
                            Kategori</label>
                        <input type="text" id="kateogri2" name="category" value="{{ $tiket->category }}"
                            class="form-input w-full rounded-md border border-gray-400 focus:border-indigo-500 focus:ring-indigo-500"
                            placeholder="Masukkan jenis kategori">
                    </div>
                    <div class="mb-4">
                        <label for="hargaTiket1" class="block text-gray-500 text-sm font-medium mb-2">Harga
                            tiket</label>
                        <input type="number" id="hargaDasar" name="price" value="{{ $tiket->price }}"
                            class="form-input w-full rounded-md border border-gray-400 focus:border-indigo-500 focus:ring-indigo-500"
                            placeholder="Rp">
                    </div>
                    <div class="mb-4">
                        <label for="stok1" class="block text-gray-500 text-sm font-medium mb-2">Stok</label>
                        <input type="number" id="stok1" name="stock" value="{{ $tiket->stock }}"
                            class="form-input w-full rounded-md border border-gray-400 focus:border-indigo-500 focus:ring-indigo-500">
                    </div>
                    <div class="text-center">
                        <button type="submit"
                            class="flex items-center justify-center px-4 py-2.5 text-sm font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg">
                            <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d=" m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                            </svg>
                            <span class="ml-2">Unggah</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
