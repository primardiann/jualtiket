<html>
    <head>
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"
            rel="stylesheet"/>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    </head>
    <body>

        <nav>
            <div class="p-4">

                <div
                    class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">
                    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                        <img src="images/Logo.jpg" class="h-8" alt="Logo Konser"/>
                        <span
                            class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Concert.tix</span>
                    </a>
                    <button
                        data-collapse-toggle="navbar-default"
                        type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
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
                            class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                            <li>
                                <button
                                    type="button"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tiket saya</button>
                            </li>
                            <li>
                                <div
                                    class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full dark:bg-gray-600">
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
            </nav>
            <div class="relative overflow-x-auto p-8 m-5">
                <table
                    class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead
                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Jenis Kategori
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Stok
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Harga per Tiket
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Kuantitas
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Total Harga
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th
                                scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Reguler
                            </th>
                            <td class="px-6 py-4">
                                100
                            </td>
                            <td class="px-6 py-4">
                                Rp. 1.000.000,-
                            </td>
                            <td>
                                <input
                                    type="number"
                                    id="first_product"
                                    class="bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="1"
                                    required="required"/>
                            </td>
                            <td class="px-6 py-4">
                                Rp. 2.000.000,-
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th
                                scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                VIP
                            </th>
                            <td class="px-6 py-4">
                                100
                            </td>
                            <td class="px-6 py-4">
                                Rp. 2.000.000,-
                            </td>
                            <td>
                                <input
                                    type="number"
                                    id="first_product"
                                    class="bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="1"
                                    required="required"/>
                            </td>
                            <td class="px-6 py-4">
                                Rp. 4.000.000,-
                            </td>
                        </tr>
                        <tr>
                            <div color="blue">
                                <th scope="col" class="px-6 py-3">
                                    TOTAL
                                </th>
                                <td></td>
                                <td></td>
                                <td class="px-6 py-4">
                                    4
                                </td>
                                <td class="px-6 py-4">
                                    Rp. 6.000.000,-
                                </td>
                            </div>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <center>
            <button
                type="button"
                class="text-sky-600 bg-blue-200 hover:bg-sky-200 focus:ring-4 focus:bg-sky-500 font-medium rounded-lg text-sm px-5 py-2.5 me-5 mb-5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                BUY
            </button>
        </center>
    </body>
</html>