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

    <br>


    <div class="p-4 sm:ml-64">
        <div class="container mx-auto px-4 py-12 mt-3">
            <h1 class="text-3xl font-bold text-center">Data Pembeli</h1>
            <br>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">USER ID</th>
                            <th scope="col" class="px-6 py-3">NAMA PEMBELI</th>
                            <th scope="col" class="px-6 py-3">EMAIL</th>
                            <th scope="col" class="px-6 py-3">NO TELP</th>
                            <th scope="col" class="px-6 py-3">METODE PEMBAYARAN</th>
                            <th scope="col" class="px-6 py-3">AKSI</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b">
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{ $user->id }}
                                </td>
                                <td class="px-6 py-4">{{ $user->first_name }} {{ $user->last_name }}</td>
                                <td class="px-6 py-4">{{ $user->email }}</td>
                                <td class="px-6 py-4">{{ $user->phone_number }}</td>
                                <td class="px-6 py-4"> Virtual Account </td>
                                <td class="px-6 py-4">
                                    <form action="{{ route('hapus-data', ['id' => $user->id]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            onclick="return confirm('Apakah Anda yakin untuk menghapus data ini?')"
                                            class="font-medium text-red-600 hover:underline">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</body>

</html>
