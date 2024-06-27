<html>

<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
</head>

<body>
    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-400">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="currentColor" viewbox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z"
                            clip-rule="evenodd" />
                    </svg>

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
                        <img class="w-12 h-12 rounded-full" src="images/Logo.jpg" alt="Rounded avatar">
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
        class="fixed justify-items-center align-items-center top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-blue-500 border-r border-gray-400 sm:translate-x-0"
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
                <li>
                    <a href="#"
                        class="flex items-center p-3 text-gray-900 rounded-lg border border-blue-400 hover:bg-gray-100 group">
                        <span class="text-center ms-3 whitespace-nowrap">
                            <b>Data Tiket</b>
                        </span>
                        <hr class="bg-secondary">
                    </a>
                </li>
                <br>
                <a href="data_pembeli"
                    class="flex justify-items-center align-items-center p-3 text-gray-900 border border-blue-400 rounded-lg hover:bg-gray-100 group">
                    <span class="text-center ms-3 whitespace-nowrap">
                        <b>Data Pembeli</b>
                    </span>
                    <hr class="bg-secondary">
                </a>
                </li>
            </ul>
        </div>
    </aside>


    <a href="{{ route('konser.create') }}"
        class="mb-2 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-500 rounded-lg hover:bg-blue-200">Tambah
        Tiket</a>
    @forelse ($konsers as $index => $data)
        <div class="p-8 pt-20 sm:ml-64 fixed-top"><br>
            <h3>
                <b>Data Tiket</b>
            </h3>

            <div class="pt-3 grid grid-cols-2 gap-4 mb-4">

                <class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <a href="#">
                    <img class="rounded-t-lg" src="images/taylor.jpg" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h3 class="mb-2 font-bold tracking-tight text-gray-900">{{ $data->nama_konser }}</h3>
                    </a>
                    <a href="#">
                        <h3 class="mb-2 font-normal tracking-tight text-gray-600">{{ $data->tanggal }}
                        </h3>
                    </a>

                    <form href="#"
                        class="mb-2 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-yellow-400 rounded-lg hover:bg-yellow-200">
                        edit
                    </form>
                    <a href="#"
                        class="mb-2 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-200">
                        batalkan
                    </a>
                </div>

                </br>
            </div>
        @empty
    @endforelse

    {{-- <div class="grid grid-cols-3 gap-4 mb-4">
        <div class="max-w-xs p-4 pt-2 bg-white border-2 border-black-200 rounded-lg">
            <a href="#">
                <h3 class="font-bold tracking-tight text-gray-900">VIP</h3>
            </a>
            <p class="font-normal">stok awal 100</p>
            <p class="font-normal">tiket terjual 30</p>
            <p class="mb-2 font-normal">sisa stok 70</p>
            <a
                href="#"
                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                edit
            </a>
        </div>

        <div
            class="max-w-xs p-4 pb-4 pt-2 bg-white border-2 border-black-200 rounded-lg">
            <a href="#">
                <h3 class="font-bold tracking-tight">Reguler</h3>
            </a>
            <p class="font-normal">stok awal 100</p>
            <p class="font-normal">tiket terjual 30</p>
            <p class="mb-2 font-normal">sisa stok 70</p>
            <a
                href="#"
                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                edit
            </a>
        </div>
    </div> --}}

    <a href="{{ route('tikets.create') }}"
        class="mb-2 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-500 rounded-lg hover:bg-blue-200">Tambah
        Tiket</a>
    @forelse ($tikets as $index => $data)
        <div class="grid grid-cols-3 gap-4 mb-4">
            <div class="max-w-xs p-4 pt-2 bg-white border-2 border-black-200 rounded-lg">
                <a href="#">
                    <h3 class="font-bold tracking-tight text-gray-900">{{ $data->category }}</h3>
                </a>
                <p class="font-normal">total stok {{ $data->stock }}</p>
                <p class="font-normal">stok awal 100</p>
                <p class="font-normal">tiket terjual 30</p>
                <p class="mb-2 font-normal">sisa stok 70</p>
                <a href="{{ route('tikets.edit', $data->id) }}"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    edit
                </a>
                <form action="{{ route('tikets.destroy', $data->id) }}" onsubmit="return confirm('Are you sure?')"
                    method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="px-5 py-2 text-sm font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Delete</button>
                </form>
            </div>
        </div>
    @empty
    @endforelse
</body>

</html>
