<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    <title>Admin</title>
    <style>
        /* Gaya CSS untuk tombol dan bagian tambahan */
        .addItemCard {
            background-color: #f1f1f1;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            text-align: center;
            margin-top: 20px;
        }

        .addItemButton {
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #000080;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .addItemButton:hover {
            background-color: #45a049;
        }

        .addItemText {
            margin-top: 5px;
            font-size: 14px;
            color: #333;
        }

        .addItemIcon {
            margin-right: 5px;
        }

        .carouselItem {
            display: none;
            text-align: center;
            padding: 20px;
            background-color: #f1f1f1;
            border-radius: 5px;
            margin-top: 20px;
        }

        .carouselItem img {
            max-width: 100%;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <nav class="flex items-center justify-between p-6 bg-gray-100 border-b border-gray-200">
        <div class="flex items-center space-x-4">
            <img class="w-12 h-12 rounded-full" src="{{ asset('images/tiket.jpg') }}" alt="Rounded avatar">
            <span class="text-4xl font-bold whitespace-nowrap">Concert.tix</span>
        </div>

        <form class="max-w-md mx-auto">
            <label for="default-search" class="sr-only">Search</label>
            <div class="relative">
                <input id="default-search" type="text"
                    class="block w-full py-2.5 pl-10 pr-4 text-sm rounded-lg bg-gray-50 border-gray-300 focus:border-blue-700 focus:ring focus:ring-blue-300 focus:ring-opacity-50"
                    placeholder="Search...">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" viewbox="0 0 20 20" fill="currentColor">
                        <!-- Icon pencarian -->
                    </svg>
                </div>
            </div>
        </form>

        <div class="ml-5">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 focus:outline-none">Logout</button>
            </form>
        </div>

        <div class="relative w-10 h-10 overflow-hidden bg-gray-200 rounded-full">
            <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewbox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd">
                </path>
            </svg>
        </div>

        <button data-collapse-toggle="mega-menu-icons" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
            aria-controls="mega-menu-icons" aria-expanded="false">
            <!-- Icon menu responsif -->
        </button>
        </div>

        <div id="mega-menu-icons" class="hidden md:flex md:w-auto md:space-x-8">
            <ul class="flex mt-4 md:flex-row md:mt-0 md:space-x-8">
                <!-- Menu navigasi -->
            </ul>
        </div>
    </nav>

    <div class="max-w-screen-xl mx-auto px-6 py-12">

        <h1 class="text-2xl font-bold mb-6">Konser Aktif</h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @forelse ($konsers as $index => $konser)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <a href="#" class="block">
                        <img class="object-cover w-full h-48"
                            src="{{ asset('storage/concerts/' . $konser->foto_konser) }}"
                            alt="{{ $konser->nama_konser }}" />
                    </a>
                    <div class="p-4">
                        <a href="#" class="block">
                            <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $konser->nama_konser }}</h3>
                        </a>
                        <div class="flex items-center text-gray-700 mb-2">
                            <svg class="w-4 h-4 mr-1.5" viewbox="0 0 24 24" stroke-width="2" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                            <p class="text-sm">{{ $konser->tanggal }}
                                |
                                {{ $konser->waktu }}</p>
                        </div>
                        <div class="flex items-center text-gray-700 mb-2">
                            <svg class="w-4 h-4 mr-1.5" viewbox="0 0 24 24" stroke-width="2" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                            <p class="text-sm">{{ $konser->lokasi }}</p>
                        </div>
                        <div class="flex items-center text-gray-700 mb-2">
                            <svg class="w-4 h-4 mr-1.5" viewbox="0 0 24 24" stroke-width="2" fill="none"
                                stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                            <p class="text-sm">{{ $konser->nama_artis }}</p>
                        </div>
                        <p class="text-gray-700">{{ $konser->deskripsi }}</p>
                        <div class="mt-4 flex justify-between items-center">
                            <p class="text-gray-700 font-medium">Penjualan Tiket di buka sampai:</p>

                        </div>
                        <p class="text-gray-700">{{ $konser->tanggal_awal }} - {{ $konser->tanggal_akhir }}
                        </p>
                        <br>
                        <button>
                            <a href="{{ route('admin_data_tiket') }}"
                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                Harga Tiket

                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />

                                </svg>
                            </a>
                    </div>
                </div>
            @empty
                <!-- Pesan jika tidak ada konser -->
            @endforelse
        </div>

        <!-- Card untuk tombol menambahkan tiket -->
        <div class="addItemCard text-white p-4 rounded-lg">
            <a href="{{ route('konser.create') }}">
                <span
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Menambahkan
                    Tiket Konser +</span>
            </a>
        </div>

    </div>

</body>

</html>
