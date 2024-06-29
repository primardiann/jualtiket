<html>

<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
</head>

<nav class="border-gray-200 bg-gray-50">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">

            <img class="w-10 h-10 rounded-full" src="images/Logo.jpg" alt="Rounded avatar">

            <span class="self-center text-2xl font-inter whitespace-nowrap">
                <b>Concert.tix</b>
            </span>
        </a>

    </div>

</nav>

<body>
    <div class="mx-auto max-w-2xl">
        <br>
        <h2>
            <b>Nota Pesanan</b>
        </h2>
        <p>
            <b>Nama Pembeli :
            </b>
            Aminah Munaroh
        </p>
        <p>
            <b>Email Pembeli :</b>
            munarohxx@gmail.com
        </p>
        <p>
            <b>No. Handphone Pembeli :</b>
            081234567xx
        </p>
        <br>

        <table class="transparent-table">
            <thead>
                <tr>
                    <th scope="col" class="px-6 py-3">
                        <b>No. Pesanan</b>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <b>Waktu Pembayaran</b>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <b>Metode Pembayaran</b>
                    </th>
                </tr>

            </thead>

            <tr class="bg-white">
                <td class="px-6 py-4">
                    XXXX123XX
                </td>
                <td class="px-6 py-4">
                    22/01/24
                </td>
                <td class="px-6 py-4">
                    Virtual Acccount BCA
                </td>
        </table>
        <br>

        <h2>
            <b>Rincian Pemesanan</b>
        </h2>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No.
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kategori Tiket
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kode Tiket
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kuantitas
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga Tiket
                        </th>

                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white">
                        <td class="px-6 py-4">
                            1
                        </td>
                        <td class="px-6 py-4">
                            Reguler
                        </td>
                        <td class="px-6 py-4">
                            REG001
                        </td>
                        <td class="px-6 py-4">
                            2
                        </td>
                        <td class="px-6 py-4">
                            Rp.1.000.000,-
                        </td>
                    </tr>
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4">
                            2
                        </td>
                        <td class="px-6 py-4">
                            Reguler
                        </td>
                        <td class="px-6 py-4">
                            REG002
                        </td>
                        <td class="px-6 py-4">
                            2
                        </td>
                        <td class="px-6 py-4">
                            Rp.1.000.000,-
                        </td>
                    </tr>
                    <tr class="bg-white">
                        <td class="px-6 py-4">
                            3
                        </td>
                        <td class="px-6 py-4">
                            VIP
                        </td>
                        <td class="px-6 py-4">
                            VIP001
                        </td>
                        <td class="px-6 py-4">
                            2
                        </td>
                        <td class="px-6 py-4">
                            Rp.2.000.000,-
                        </td>
                    </tr>
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4">
                            4
                        </td>
                        <td class="px-6 py-4">
                            VIP
                        </td>
                        <td class="px-6 py-4">
                            VIP002
                        </td>
                        <td class="px-6 py-4">
                            2
                        </td>
                        <td class="px-6 py-4">
                            Rp.2.000.000,-
                        </td>
                    </tr>
                    <tr class="bg-white">
                        <td class="px-6 py-4"></td>
                        <td class="px-6 py-4"></td>
                        <td class="px-6 py-4"></td>
                        <td class="px-6 py-4">
                            <b>Subtotal</b>
                        </td>
                        <td class="px-6 py-4">
                            <b>Rp.6.000.000,-</b>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>

    <br>

    <div class="mx-auto max-w-2xl">
        <div class="w-full max-w-xl p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 mb-4">
            <h5 class="mb-3 text-base font-bold text-gray-900 md:text-xl">
                Metode Pembayaran
            </h5>
            {{-- <p class="text-sm font-normal text-gray-500">Pembayaran Dilanjutkan disni:</p> --}}
            <ul class="my-4 space-y-3">
                <li>
                    <form action="{{ route('process_virtual_account_payment') }}" method="POST">
                        @csrf
                        <button type="submit"
                            class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow">
                            <span class="flex-1 ms-3 whitespace-nowrap">Virtual Account</span>
                        </button>
                    </form>
                </li>
                <li>
                    <p class=class="text-sm font-normal text-gray-500">
                        Pembayaran di lanjutkan disini :
                    </p>
                    <form action="{{ route('process_virtual_account_payment') }}" method="POST">
                        @csrf
                        <button type="submit"
                            class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow">
                            <span class="flex-1 ms-3 whitespace-nowrap">BELI</span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>

</body>

</html>
