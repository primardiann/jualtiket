<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ticket Purchase</title>
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"
            rel="stylesheet"/>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <nav>
            <div class="p-4">
                <div
                    class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">
                    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                        <img src="images/Logo.jpg" class="h-8" alt="Logo Konser"/>
                        <span class="self-center text-2xl font-semibold whitespace-nowrap">Concert.tix</span>
                    </a>
                    <button
                        data-collapse-toggle="navbar-default"
                        type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                        aria-controls="navbar-default"
                        aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg
                            class="w-5 h-5"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewbox="0 0 17 14">
                            <path
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15"/>
                        </svg>
                    </button>
                    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                        <ul
                            class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white md:dark:bg-gray-900">
                            <li>
                                <button
                                    type="button"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">Tiket saya</button>
                            </li>
                            <li>
                                <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full">
                                    <svg
                                        class="absolute w-12 h-12 text-gray-400 -left-1"
                                        fill="currentColor"
                                        viewbox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            fill-rule="evenodd"
                                            d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <div class="relative overflow-x-auto p-8 m-5">
            <form id="ticketForm" action="{{ route('tickets.calculate') }}" method="POST">
                @csrf
                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">Jenis Kategori</th>
                            <th scope="col" class="px-6 py-3">Stok</th>
                            <th scope="col" class="px-6 py-3">Harga per Tiket</th>
                            <th scope="col" class="px-6 py-3">Kuantitas</th>
                            <th scope="col" class="px-6 py-3">Total Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">Reguler</th>
                            <td class="px-6 py-4">100</td>
                            <td class="px-6 py-4">Rp. 1.000.000,-</td>
                            <td>
                                <input
                                    type="number"
                                    name="regular_quantity"
                                    id="regular_quantity"
                                    class="bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1"
                                    value="{{ $regularQuantity ?? 1 }}"
                                    required="required"/>
                            </td>
                            <td id="regular_total" class="px-6 py-4">Rp.
                                {{ number_format($regularTotal ?? 1000000, 0, ',', '.') }},-</td>
                        </tr>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">VIP</th>
                            <td class="px-6 py-4">100</td>
                            <td class="px-6 py-4">Rp. 2.000.000,-</td>
                            <td>
                                <input
                                    type="number"
                                    name="vip_quantity"
                                    id="vip_quantity"
                                    class="bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1"
                                    value="{{ $vipQuantity ?? 1 }}"
                                    required="required"/>
                            </td>
                            <td id="vip_total" class="px-6 py-4">Rp.
                                {{ number_format($vipTotal ?? 2000000, 0, ',', '.') }},-</td>
                        </tr>
                        <tr class="bg-white border-b">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">TOTAL</th>
                            <td></td>
                            <td></td>
                            <td id="total_quantity" class="px-6 py-4">{{ $totalQuantity ?? 2 }}</td>
                            <td id="total_price" class="px-6 py-4">Rp.
                                {{ number_format($totalPrice ?? 3000000, 0, ',', '.') }},-</td>
                        </tr>
                    </tbody>
                </table>
                <center>
                    <button
                        type="submit"
                        class="text-sky-600 bg-blue-200 hover:bg-sky-200 focus:ring-4 focus:bg-sky-500 font-medium rounded-lg text-sm px-5 py-2.5 me-5 mb-5 focus:outline-none">HITUNG TOTAL</button>
                </center>
            </form>
            <center>
                <a
                    href="{{ route('login') }}"
                    type="button"
                    class="text-sky-600 bg-blue-200 hover:bg-sky-200 focus:ring-4 focus:bg-sky-500 font-medium rounded-lg text-sm px-5 py-2.5 me-5 mb-5 focus:outline-none">BELI</a>
            </center>
        </div>

        <footer
            class="fixed bottom-0 left-0 z-20 w-full p-4 bg-white border-t border-gray-200 shadow md:flex md:items-center md:justify-between md:p-6">
            <span class="text-sm text-gray-500 sm:text-center">© 2023
                <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
            </span>
            <ul
                class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 sm:mt-0">
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">About</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Contact</a>
                </li>
            </ul>
        </footer>
    </body>
</html>