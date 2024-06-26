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
                    <a href="{{ route('admin_data_tiket') }}"
                        class="flex items-center p-3 text-gray-900 rounded-lg border border-blue-400 hover:bg-gray-100 group">
                        <span class="text-center ms-3 whitespace-nowrap">
                            <b>Data Tiket</b>
                        </span>
                        <hr class="bg-secondary">
                    </a>
                </li>
                <br>
                <a href="{{ route('data-pembeli') }}"
                    class="flex items-center p-3 text-gray-900 border border-blue-400 rounded-lg hover:bg-gray-100 group">
                    <span class="text-center ms-3 whitespace-nowrap">
                        <b>Data Pembeli</b>
                    </span>
                    <hr class="bg-secondary">
                </a>
                </li>
            </ul>
        </div>
    </aside>

    <div class="p-8 pt-20 sm:ml-64 fixed-top">
        <h3 class="text-3xl font-bold mb-4">Data Tiket</h3>

        <a href="{{ route('konser.create') }}"
            class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-500 rounded-lg hover:bg-blue-200 mb-4">
            Tambah Konser
        </a>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @forelse ($konsers as $index => $konser)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <a href="#">
                        <img class="object-cover w-full h-48"
                            src="{{ asset('storage/concerts/' . $konser->foto_konser) }}"
                            alt="{{ $konser->nama_konser }}" />
                    </a>
                    <div class="p-4">
                        <a href="#">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $konser->nama_konser }}</h3>
                        </a>
                        <div class="flex items-center text-gray-700 mb-2">
                            <svg class="w-4 h-4 mr-1.5" viewBox="0 0 24 24" stroke-width="2" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                            <p class="text-sm">{{ $konser->tanggal }} | {{ $konser->waktu }}</p>
                        </div>
                        <div class="flex items-center text-gray-700 mb-2">
                            <svg class="w-4 h-4 mr-1.5" viewBox="0 0 24 24" stroke-width="2" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                            <p class="text-sm">{{ $konser->lokasi }}</p>
                        </div>
                        <div class="flex items-center text-gray-700 mb-2">
                            <svg class="w-4 h-4 mr-1.5" viewBox="0 0 24 24" stroke-width="2" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                            <p class="text-sm">{{ $konser->nama_artis }}</p>
                        </div>
                        <p class="text-gray-700">{{ $konser->deskripsi }}</p>
                        <div class="mt-4 flex justify-between items-center">
                            <div>
                                <p class="text-gray-700 font-medium">Mulai dan Tutup Jual Tiket:</p>
                                <p class="text-gray-700">{{ $konser->tanggal_awal }} - {{ $konser->tanggal_akhir }}
                                </p>
                            </div>

                        </div>
                        <div>
                            <a href="{{ route('konser.show', $konser->id) }}"
                                class="ml-1 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-yellow-300 rounded-lg hover:bg-yellow-200">
                                Show
                            </a>
                            <a href="{{ route('konser.edit', $konser->id) }}"
                                class="ml-1 inline-flex items-center px-3 py-1.5 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                Edit
                            </a>
                            <form action="{{ route('konser.destroy', $konser->id) }}"
                                onsubmit="return confirm('Are you sure?')" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class=" ml-1 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-500 rounded-lg hover:bg-red-200">
                                    Hapus
                                </button>
                            </form>
                        </div>


                    </div>
                </div>
            @empty
                <!-- Pesan jika tidak ada konser -->
            @endforelse
        </div>

        <br>

        <a href="{{ route('tikets.create') }}"
            class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-500 rounded-lg hover:bg-blue-200 mb-4">
            Tambah Tiket
        </a>

        <br>

        @forelse ($tikets as $index => $data)
            <div class="grid grid-cols-3 gap-6 mb-6">
                <div class="bg-white border border-gray-200 rounded-lg p-4">
                    <a href="#">
                        <h3 class="font-bold text-gray-900">{{ $data->category }}</h3>
                    </a>
                    <p class="text-gray-700">Total Stok: {{ $data->stock }}</p>
                    <p class="text-gray-700">Harga Tiket: Rp. {{ $data->price }}</p>
                    <br>

                    <div>

                        <a href="{{ route('tikets.edit', $data->id) }}"
                            class="inline-flex items-center px-3 py-1.5 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            Edit
                        </a>
                        <form action="{{ route('tikets.destroy', $data->id) }}"
                            onsubmit="return confirm('Are you sure?')" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="inline-flex items-center px-3 py-1.5 text-sm font-medium text-white bg-red-500 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300">
                                Hapus
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        @empty
            <!-- Pesan jika tidak ada tiket -->
        @endforelse
    </div>


</body>

</html>
