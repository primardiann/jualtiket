<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $konser->nama_konser }}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            /* Membuat konten minimal setinggi viewport */
        }

        main {
            flex: 1;
            /* Menarik main untuk mengisi ruang yang tersedia */
        }

        footer {
            margin-top: auto;
            /* Footer akan tetap di bagian bawah */
            background-color: #ffffff;
            /* Warna latar belakang footer */
            border-top: 1px solid #e5e7eb;
            /* Garis tepi atas footer */
            box-shadow: 0 -2px 8px rgba(0, 0, 0, 0.1);
            /* Bayangan bawah footer */
            padding: 1rem;
            /* Padding dalam footer */
        }
    </style>
</head>

<body class="bg-gray-100">

    <a href="https://flowbite.com" class="flex items-center space-x-4 rtl:space-x-reverse">
        <nav class="border-white-200 bg-white-100">
            <div class="max-w-screen-xm flex flex-wrap items-center justify-between mx-auto p-6">
                <img class="w-12 h-12 rounded-full" src="/images/Logo.jpg" alt="Rounded avatar">
                <span class=" text-4xl font-semibold whitespace-nowrap">Concert.tix</span>
    </a>
    <div class="flex items-center md:order-2 space-x-1 md:space-x-2 rtl:space-x-reverse">
        <button data-collapse-toggle="mega-menu-icons" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
            aria-controls="mega-menu-icons" aria-expanded="false"></button>
    </div>
    </nav>


    <!-- Main Content -->
    <main class="max-w-screen-xl mx-auto mt-8 p-4">

        <!-- Concert Details -->
        <section class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Left Column - Concert Image and Description -->
            <div class="max-w-lg mx-auto">
                <img src="{{ asset('storage/concerts/' . $konser->foto_konser) }}" alt="{{ $konser->nama_konser }}"
                    class="rounded-lg">
                <div class="mt-4">
                    <h2 class="text-2xl font-bold mb-2">{{ $konser->nama_konser }}</h2>
                    <p class="text-gray-700">{{ $konser->deskripsi }}</p>
                </div>
            </div>

            <!-- Right Column - Concert Details -->
            <div>
                <h2 class="text-2xl font-bold mb-4">{{ $konser->nama_artis }}</h2>
                <ul class="space-y-4">
                    <li>
                        <svg class="inline-block w-5 h-5 text-blue-700" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0ZM4 10A6 6 0 0 1 4 4a6 6 0 0 1 6-6 5.927 5.927 0 0 1 4 1.465 6.037 6.037 0 0 1 10 10a6.037 6.037 0 0 1 1.465-4 5.927 5.927 0 0 1-4-1.465V6a2 2 0 1 1 4 0v1.535A5.927 5.927 0 0 1 15.535 10 6.037 6.037 0 0 1 10 15.535 5.927 5.927 0 0 1 5.465 14 6.037 6.037 0 0 1 4 10Z">
                            </path>
                        </svg>
                        <span class="ml-2 text-gray-700">{{ $konser->tanggal }}</span>
                    </li>
                    <li>
                        <svg class="inline-block w-5 h-5 text-blue-700" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0ZM4 10A6 6 0 0 1 4 4a6 6 0 0 1 6-6 5.927 5.927 0 0 1 4 1.465 6.037 6.037 0 0 1 10 10a6.037 6.037 0 0 1 1.465-4 5.927 5.927 0 0 1-4-1.465V6a2 2 0 1 1 4 0v1.535A5.927 5.927 0 0 1 15.535 10 6.037 6.037 0 0 1 10 15.535 5.927 5.927 0 0 1 5.465 14 6.037 6.037 0 0 1 4 10Z">
                            </path>
                        </svg>
                        <span class="ml-2 text-gray-700">{{ $konser->waktu }} WIB</span>
                    </li>
                    <li>
                        <svg class="inline-block w-5 h-5 text-blue-700" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0ZM4 10A6 6 0 0 1 4 4a6 6 0 0 1 6-6 5.927 5.927 0 0 1 4 1.465 6.037 6.037 0 0 1 10 10a6.037 6.037 0 0 1 1.465-4 5.927 5.927 0 0 1-4-1.465V6a2 2 0 1 1 4 0v1.535A5.927 5.927 0 0 1 15.535 10 6.037 6.037 0 0 1 10 15.535 5.927 5.927 0 0 1 5.465 14 6.037 6.037 0 0 1 4 10Z">
                            </path>
                        </svg>
                        <span class="ml-2 text-gray-700">{{ $konser->lokasi }}</span>
                    </li>
                    <h5 class="mb-5 text-2xl font-bold tracking-tight text-gray-900">Syarat dan Ketentuan

                </ul>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 shadow p-4">
        <div class="max-w-screen-xl mx-auto flex items-center justify-between">
            <span class="text-sm text-gray-500">&copy; 2023 <a href="https://flowbite.com/"
                    class="hover:underline">Concert.tix™</a>. All Rights Reserved.</span>
            <ul class="flex flex-wrap items-center space-x-4 text-sm font-medium text-gray-500">
                <li><a href="#" class="hover:underline">About</a></li>
                <li><a href="#" class="hover:underline">Privacy Policy</a></li>
                <li><a href="#" class="hover:underline">Licensing</a></li>
                <li><a href="#" class="hover:underline">Contact</a></li>
            </ul>
        </div>
    </footer>

</body>

</html>
