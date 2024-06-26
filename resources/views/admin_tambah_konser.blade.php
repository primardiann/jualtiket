<html>

<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
</head>

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

                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
                    type="button"
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
                                src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
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
<aside id="default-sidebar"
    class="fixed justify-items-center align-items-center top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-blue-500 border-r border-gray-400 sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto">
        <ul class="space-y-2 font-medium">

            <li>
                <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewbox="0 0 18 18">
                        <path
                            d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z" />
                    </svg>
                    <span
                        class="flex text-center justify-content-center align-items-center p-3 text-gray-900 rounded-lg group ms-3">Penambahan
                        konser Baru</span>
                    {{-- <span
                            class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full">Pro</span> --}}
                </a>
            </li>

            <br>

            <li></a>
            </li>
        </ul>
    </div>
</aside>

<body>
    <div class="p-4 sm:ml-64">
        <div class="container mx-auto px-4 py-12">
            <h1 class="text-3xl font-bold text-center">Tambah Konser Baru</h1>

            <form class="mt-8" action="{{ route('konser.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="namaKonser" class="block text-gray-700 text-sm font-medium mb-2">Nama Konser</label>
                    <input type="text" id="namaKonser" name="nama_konser" value="{{ old('nama_konser') }}"
                        class="form-input w-full rounded-md border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                        placeholder="Masukkan nama konser">
                    @error('nama_konser')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="tanggalKonser" class="block text-gray-700 text-sm font-medium mb-2">Tanggal
                        Konser</label>
                    <input type="date" name="tanggal" id="tanggalKonser" value="{{ old('tanggal') }}"
                        class="form-input w-full rounded-md border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                    @error('tanggal')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="waktuKonser" class="block text-gray-700 text-sm font-medium mb-2">Waktu Konser</label>
                    <input type="time" name="waktu" id="waktuKonser" value="{{ old('waktu') }}"
                        class="form-input w-full rounded-md border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                    @error('waktu')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="lokasiKonser" class="block text-gray-700 text-sm font-medium mb-2">Lokasi
                        Konser</label>
                    <input type="text" name="lokasi" id="lokasiKonser" value="{{ old('lokasi') }}"
                        class="form-input w-full rounded-md border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                        placeholder="Masukkan lokasi konser">
                    @error('lokasi')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="namaArtis" class="block text-gray-700 text-sm font-medium mb-2">Nama Panggung
                        Artis</label>
                    <input type="text" name="nama_artis" id="namaArtis" value="{{ old('nama_artis') }}"
                        class="form-input w-full rounded-md border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                        placeholder="Masukkan nama panggung artis">
                    @error('nama_artis')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="deskripsiKonser" class="block text-gray-700 text-sm font-medium mb-2">Deskripsi
                        Konser</label>
                    <textarea id="deskripsiKonser" name="deskripsi"
                        class="form-textarea w-full rounded-md border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                        rows="5" placeholder="Masukkan deskripsi konser">{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="fotoKonser" class="block text-gray-700 text-sm font-medium mb-2">Foto Konser</label>
                    <input type="file" name="foto_konser" id="fotoKonser"
                        class="form-input w-full rounded-md border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                    @error('foto_konser')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3 mt-4">
                    <label for="tanggalPeluncuran" class="block text-gray-700 text-sm font-medium mb-2">Tanggal
                        Peluncuran Tiket</label>
                    <input type="date" class="form-control" id="tanggalPeluncuran" name="tanggal_awal"
                        value="{{ old('tanggal_awal') }}">
                    @error('tanggal_awal')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="tanggalTutup" class="block text-gray-700 text-sm font-medium mb-2">Tanggal Tutup
                        Penjualan Tiket</label>
                    <input type="date" class="form-control" id="tanggalTutup" name="tanggal_akhir"
                        value="{{ old('tanggal_akhir') }}">
                    @error('tanggal_akhir')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <center>
                    <button type="submit"
                        class="flex items-center justify-center px-4 py-2.5 text-sm font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg">
                        Unggah
                    </button>
                </center>
            </form>

            <div class="mb-4">
                <center>
                    <label for="kategoriTiket" class="block text-gray-700 text-sm font-medium mb-2">Menambahkan
                        Kategori Tiket</label>
                </center>
            </div>
            <div class="mb-4">
                <label for="kategoriTiket" class="block text-gray-700 text-sm font-medium mb-2">Menambahkan Kategori
                </label>
            </div>
            <form class="mt-8" action="{{ route('tikets.store') }}" method="POST">
                @csrf

                <div
                    class="form-input w-full rounded-md border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                    <div class="mb-4 mt-4 ml-3 mr-3">
                        <label for="kateogri1" class="block text-gray-700 text-sm font-medium mb-2">Nama Jenis
                            Kategori</label>
                        <input type="text" id="kateogri1" name="category" value="{{ old('category') }}"
                            class="form-input w-full rounded-md border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500"
                            placeholder="Masukkan Jenis Kategori">
                    </div>
                    <div class="mb-4 mt-4 ml-3 mr-3">
                        <label for="hargaTiket1" class="block text-gray-700 text-sm font-medium mb-2">Harga
                            tiket</label>
                        <div class="input-group">
                            <span class="input-group-text">Rp</span>
                            <input type="number" name="price" id="hargaDasar" value="{{ old('price') }}"
                                class="form-input w-full rounded-md border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 ml-1 mr-1">
                        </div>
                        <div class="mb-4 mt-4 ">
                            <label for="stok1" class="block text-gray-700 text-sm font-medium mb-2">Stok Tiket
                                Kategori</label>
                        </div>
                        <div class="input-group">
                            <input type="number" id="stok1" name="stock"
                                class="form-input w-full rounded-md border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                        </div>
                    </div>
                </div>

                <center>
                    {{-- <button
                        type="submit"
                        class="flex items-center justify-center px-4 py-2.5 text-sm font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg">
                        <span class="mr-1">+</span>
                        <span>Tambah Kategori</span>
                    </button> --}}

                    <button type="submit"
                        class="flex items-center justify-center px-4 py-2.5 text-sm font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg">Unggah</button>

                </center>

            </form>
            <center>
                {{-- <button
                        type="submit"
                        class="flex items-center justify-center px-4 py-2.5 text-sm font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg">
                        <span class="mr-1">+</span>
                        <span>Tambah Kategori</span>
                    </button> --}}

                {{-- <button
                        type="submit"
                        class="flex items-center justify-center px-4 py-2.5 text-sm font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg">Unggah</button> --}}

            </center>

</body>

</html>
