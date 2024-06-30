<!-- resources/views/resi.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    <title>Nota Pesanan</title>
</head>

<body class="bg-gray-100">


    <nav class="bg-white border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="/images/Logo.jpg" class="h-8 w-8 rounded-full" alt="Flowbite Logo" />

                <span class="self-center text-2xl font-semibold whitespace-nowrap">Concert.tix</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewbox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white md:dark:bg-gray-900">
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">Logout</button>
                        </form>
                    </li>
                    <br>

                    <li>
                        <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full">
                            <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor"
                                viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="mx-auto max-w-2xl mt-2">
        <h2 class="text-2xl font-bold">Resi Hasil Pesanan</h2> <br>
        <p><b>Nama Pembeli:</b> {{ $user->first_name }} {{ $user->last_name }}</p>
        <p><b>Email Pembeli:</b> {{ $user->email }}</p>
        <p><b>No. Handphone Pembeli:</b> {{ $user->phone_number }}</p>
        <br>

        <center>
            <table class="transparent-table">
                <thead>
                    <tr>

                        <th scope="col" class="px-6 py-3">
                            No. Pesanan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Metode Pembayaran
                        </th>
                    </tr>

                </thead>

                <tr>

                    <td class="px-6 py-4">
                        1552531881772
                    </td>
                    <td class="px-6 py-4">
                        Virtual Acccount
                    </td>
            </table>
        </center>
        <br>


        <h2 class="text-2xl font-bold">Rincian Pemesanan</h2>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">No.</th>
                        <th scope="col" class="px-6 py-3">Kategori Tiket</th>

                        <th scope="col" class="px-6 py-3">Kuantitas</th>
                        <th scope="col" class="px-6 py-3">Harga Tiket</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orderDetails as $index => $detail)
                        <tr class="bg-white">
                            <td class="px-6 py-4">{{ $index + 1 }}</td>
                            <td class="px-6 py-4">{{ $detail['category'] }}</td>
                            <td class="px-6 py-4">{{ $detail['quantity'] }}</td>
                            <td class="px-6 py-4">Rp.{{ number_format($detail['total_price'], 2) }}</td>
                        </tr>
                    @endforeach
                    <tr class="bg-white">
                        <td class="px-6 py-4"></td>
                        <td class="px-6 py-4"></td>
                        <td class="px-6 py-4"><b>Subtotal</b></td>
                        <td class="px-6 py-4"><b>Rp. {{ number_format($totalAmount, 2) }}</b></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
