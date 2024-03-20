<html>
    <head>
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"
            rel="stylesheet"/>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    </head>
    <nav>
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="images/Logo.jpg" class="h-8" alt="Logo"/>
            <span
                class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Concert.tix</span>
        </a>
    </nav> <br>
    <body>

        <div class="relative overflow-x-auto">
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
                        <td align="center" class="px-6 py-4">
                            2
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
                        <td align="center" class="px-6 py-4">
                            2
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
                            <td align="center" class="px-6 py-4">
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
    </body>
    <center>
        <button
            type="button"
            class="text-sky-600 bg-blue-200 hover:bg-sky-200 focus:ring-4 focus:bg-sky-500 font-medium rounded-lg text-sm px-5 py-2.5 me-5 mb-5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            BUY
        </button>
    </center>
</html>