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
            </ul>
        </div>
    </aside>


    <form class="mt-8" action="{{ route('konser.update', $konser->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')


        <div class="p-8 pt-20 sm:ml-64 fixed-top">
            <div class="pt-3 grid grid-cols-2 gap-4 mb-4">
                <div class="max-w-sm items-center justify-center border border-gray-500">
                    <div>
                        <p class="p-1 mb-4 text-center text-gray-500 bg-gray-200 shadow">Foto</p>
                        <img class="h-300 w-500" src="{{ asset('storage/concerts/' . $konser->foto_konser) }}"
                            alt="Foto Konser">
                    </div>
                    <div class="p-2 mt-4 bg-gray-200">
                        <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Upload file</label>
                        <input
                            class="block w-full text-sm mb-2 text-gray-500 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                            id="file_input" type="file" name="foto_konser">
                    </div>
                </div>

                <!-- Konten sebelahnya -->
                <div class="items-center justify-center border border-gray-500 shadow">
                    <p class="p-1 mb-4 text-center text-gray-500 bg-gray-200">Kelola Konser</p>

                    <div class="mb-4">


                        <label for="namaKonser" class="block text-gray-500 text-sm font-medium mb-2">Judul
                            Konser</label>
                        <input type="text" id="namaKonser" name="nama_konser" value="{{ $konser->nama_konser }}"
                            class="form-input w-full rounded-md border border-gray-400 focus:border-indigo-500 focus:ring-indigo-500"
                            placeholder="Masukkan nama konser">
                    </div>

                    <div class="mb-4">
                        <label for="tanggalKonser" class="block text-gray-500 text-sm font-medium mb-2">Tanggal
                            Konser</label>
                        <input type="date" id="tanggalKonser" name="tanggal" value="{{ $konser->tanggal }}"
                            class="form-input w-full rounded-md border border-gray-400 focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    <div class="mb-4">
                        <label for="lokasiKonser" class="block text-gray-500 text-sm font-medium mb-2">Lokasi
                            Konser</label>
                        <input type="text" id="lokasiKonser" name="lokasi" value="{{ $konser->lokasi }}"
                            class="form-input w-full rounded-md border border-gray-400 focus:border-indigo-500 focus:ring-indigo-500"
                            placeholder="Masukkan lokasi konser">
                    </div>

                    <div class="mb-4">
                        <label for="waktuKonser" class="block text-gray-500 text-sm font-medium mb-2">Waktu
                            Konser</label>
                        <input type="time" id="waktuKonser" name="waktu" value="{{ $konser->waktu }}"
                            class="form-input w-full rounded-md border border-gray-400 focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    <div class="mb-4">
                        <label for="namaArtis" class="block text-gray-500 text-sm font-medium mb-2">Nama Panggung
                            Artis</label>
                        <input type="text" id="namaArtis" name="nama_artis" value="{{ $konser->nama_artis }}"
                            class="form-input w-full rounded-md border border-gray-400 focus:border-indigo-500 focus:ring-indigo-500"
                            placeholder="Masukkan nama panggung artis">
                    </div>

                    <div class="mb-4">
                        <label for="deskripsiKonser" class="block text-gray-500 text-sm font-medium mb-2">Deskripsi
                            Konser</label>
                        <textarea id="deskripsiKonser" name="deskripsi"
                            class="form-textarea w-full rounded-md border border-gray-400 focus:border-indigo-500 focus:ring-indigo-500"
                            rows="5" placeholder="">{{ $konser->deskripsi }}</textarea>
                    </div>
                    <div class="">


                        <div class="pt-3 grid grid-cols-2 gap-4">
                            <div class="m-2">
                                <label for="tanggalPeluncuran"
                                    class="block text-gray-500 text-sm font-medium mb-2">Tanggal Peluncuran
                                    Tiket</label>
                                <input type="date" class="form-control" id="tanggalPeluncuran"
                                    name="tanggal_awal" value="{{ $konser->tanggal_awal }}">
                            </div>

                            <div class="m-2">
                                <label for="tanggalTutup" class="block text-gray-500 text-sm font-medium mb-2">Tanggal
                                    Tutup Penjualan Tiket</label>
                                <input type="date" class="form-control" id="tanggalTutup" name="tanggal_akhir"
                                    value="{{ $konser->tanggal_akhir }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <center>

            <button type="submit"
                class="flex items-center justify-center px-4 py-2.5 text-sm font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg">
                <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewbox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d=" m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0
                    0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565
                    6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                </svg>
                <span>Unggah</span>
            </button>
        </center>
        </div>
    </form>
    {{-- <div class="mb-4">
                        <label for="deskripsiKonser" class="block text-gray-500 text-sm font-medium mb-2">Syarat dan
                            Ketentuan Konser</label>
                        <textarea id="deskripsiKonser"
                            class="form-textarea w-full rounded-md border border-gray-400 focus:border-indigo-500 focus:ring-indigo-500"
                            rows="5" placeholder=""></textarea>
                    </div><br> --}}

    {{-- <div class="mb-2">
                <!-- <center> -->
                <label for="kategoriTiket" class="block text-gray-900 text-sm font-medium mb-2">Menambahkan
                    Kategori Tiket</label>
                <!-- </center> -->
            </div> --}}

    {{-- <!-- untuk kategori 1 -->
                <div class="mb-2">
                    <label for="kategoriTiket" class="block text-gray-500 text-sm font-medium mb-2">
                        Kategori 1</label>
                </div>
                <div class="form-input w-full border border-gray-500 focus:border-indigo-500 focus:ring-indigo-500">
                    <div class="mb-4 mt-4 ml-3 mr-3">
                        <label for="kateogri1" class="block text-gray-500 text-sm font-medium mb-2">Nama Jenis
                            Kategori</label>
                        <input type="text" id="kateogri1"
                            class="form-input w-full rounded-md border border-gray-400 focus:border-indigo-500 focus:ring-indigo-500"
                            placeholder="Masukkan Jenis Kategori">
                    </div>
                    <div class="mb-4 mt-4 ml-3 mr-3">
                        <label for="hargaTiket1" class="block text-gray-500 text-sm font-medium mb-2">Harga
                            tiket</label>
                        <div class="input-group">
                            <input type="number" id="hargaDasar"
                                class="form-input w-full rounded-md border border-gray-400 focus:border-indigo-500 focus:ring-indigo-500 ml-1 mr-1"
                                placeholder="Rp">
                        </div>
                        <div class="mb-4 mt-4">
                            <label for="stok1" class="block text-gray-500 text-sm font-medium mb-2">Stok</label>
                        </div>
                        <div class="input-group">
                            <input type="number" id="stok1"
                                class="form-input w-full rounded-md border border-gray-400 focus:border-indigo-500 focus:ring-indigo-500">
                        </div>
                    </div>
                </div><br> --}}
    <div>
        {{-- <!-- untuk kategori 2 -->
                <div class="mb-2 item-center">
                    <label for="kategoriTiket" class="block text-gray-500 text-sm font-medium mb-2">
                        Kategori </label>
                </div> --}}
        <form class="mt-8" action="{{ route('tikets.update', $tiket->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-input w-full border border-gray-500 focus:border-indigo-500 focus:ring-indigo-500">
                <div class="mb-4 mt-4 ml-3 mr-3">
                    <label for="kateogri1" class="block text-gray-500 text-sm font-medium mb-2">Nama
                        Jenis Kategori</label>
                    <input type="text" id="kateogri2" name="category" value="{{ $tiket->category }}"
                        class="
                                            form-input="form-input" w-full="w-full"
                        rounded-md="rounded-md" border="border" border-gray-400="border-gray-400"
                        focus:border-indigo-500="focus:border-indigo-500" focus:ring-indigo-500"
                        placeholder="
                                            masukkan="Masukkan" jenis="Jenis"
                        kategori"="Kategori"">
                                    </div>
                                    <div class="mb-4 mt-4 ml-3 mr-3">
                                        <label for="hargaTiket1" class="block text-gray-500 text-sm font-medium mb-2">Harga tiket</label>
                                        <div class="input-group">
                                            <input
                                                type="number"
                                                id="hargaDasar"
                                                name="price"
                                                value="{{ $tiket->price }}"
                                                class="
                                                form-input="form-input"
                        w-full="w-full" rounded-md="rounded-md" border="border" border-gray-400="border-gray-400"
                        focus:border-indigo-500="focus:border-indigo-500"
                        focus:ring-indigo-500="focus:ring-indigo-500" ml-1="ml-1" mr-1"
                        placeholder="
                                                rp"="Rp"">
                                        </div>
                                        <div class="mb-4 mt-4">
                                            <label for="stok1" class="block text-gray-500 text-sm font-medium mb-2">Stok</label>
                                        </div>
                                        <div class="input-group">
                                            <input
                                                type="number"
                                                id="stok1"
                                                name="stock"
                                                value="{{ $tiket->stock }}"
                                                class="
                                                form-input="form-input"
                        w-full="w-full" rounded-md="rounded-md" border="border" border-gray-400="border-gray-400"
                        focus:border-indigo-500="focus:border-indigo-500"
                        focus:ring-indigo-500"="focus:ring-indigo-500"">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                <center>

                                <button
                                    type="submit"
                                    class="flex items-center justify-center px-4 py-2.5 text-sm font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg">
                                    <svg
                                        class="w-6 h-6 text-gray-800"
                                        aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        fill="none"
                                        viewbox="0 0 24 24">
                                        <path
                                            stroke="currentColor"
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d=" m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0
                        0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015
                        2.015 0 0 1 2.852 0Z" />
                    </svg>
                    <span>Unggah</span>
                    </button>
                    </center>
                </div>
        </form>
    </div>

    {{-- <div class="">
                        <div class="pt-3 grid grid-cols-2 gap-4">
                            <div class="m-2">
                                <label for="tanggalPeluncuran"
                                    class="block text-gray-500 text-sm font-medium mb-2">Tanggal Peluncuran
                                    Tiket</label>
                                <input type="date" class="form-control" id="tanggalPeluncuran">
                            </div>

                            <div class="m-2">
                                <label for="tanggalTutup" class="block text-gray-500 text-sm font-medium mb-2">Tanggal
                                    Tutup Penjualan Tiket</label>
                                <input type="date" class="form-control" id="tanggalTutup">
                            </div>
                        </div>
                    </div> --}}
    {{-- <button type="submit" class="btn btn-primary">Update Tiket</button>

                <div class="mb-5 mt-5 justify-content">
                    <center>
                        <button type="button"
                            class="flex items-center justify-center px-4 py-2.5 text-sm font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg">
                            <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewbox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                            </svg>
                            <span>Unggah</span>
                        </button>
                    </center> --}}
    </div>
    </div>
    </div>

</body>

</body>

</html>
