<html>

<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
</head>

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
                    <button type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">Tiket
                        saya</button>
                </li>
                <li>
                    <div class="relative w-10 h-10 overflow-hidden bg-gray-100 rounded-full">
                        <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewbox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<br>

<div class="flex gap-4">

    <div class="w-full max-w-xl p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 mb-4">
        <h5 class="mb-3 text-base font-bold text-gray-900 md:text-xl">
            Metode Pembayaran
        </h5>
        <p class="text-sm font-normal text-gray-500">pilih metode pembayaran di bawah ini.</p>
        <ul class="my-4 space-y-3">
            <li>
                <a href="#"
                    class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow">
                    <svg aria-hidden="true" class="h-4" viewbox="0 0 40 38" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <span class="flex-1 ms-3 whitespace-nowrap">Credit / Debit Card</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow">
                    <svg aria-hidden="true" class="h-5" viewbox="0 0 292 292" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <span class="flex-1 ms-3 whitespace-nowrap">Virtual Account</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow">
                    <svg aria-hidden="true" svg="svg" class="h-5" viewbox="0 0 75.591 75.591"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <lineargradient id="a" gradienttransform="matrix(0 -54.944 -54.944 0 23.62 79.474)"
                            gradientunits="userSpaceOnUse" x2="1">
                            <stop offset="0" stop-color="#ff1b2d" />
                            <stop offset=".3" stop-color="#ff1b2d" />
                            <stop offset=".614" stop-color="#ff1b2d" />
                            <stop offset="1" stop-color="#a70014" />
                        </lineargradient>
                        <lineargradient id="b" gradienttransform="matrix(0 -48.595 -48.595 0 37.854 76.235)"
                            gradientunits="userSpaceOnUse" x2="1">
                            <stop offset="0" stop-color="#9c0000" />
                            <stop offset=".7" stop-color="#ff4b4b" />
                            <stop offset="1" stop-color="#ff4b4b" />
                        </lineargradient>
                        <g transform="matrix(1.3333 0 0 -1.3333 0 107.2)">
                            <span class="flex-1 ms-3 whitespace-nowrap">Wallet</span>
                </a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow">
                    <svg aria-hidden="true" class="h-5" viewbox="0 0 512 512" version="1.1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <defs>
                            <span class="flex-1 ms-3 whitespace-nowrap">Installment</span>
                </a>
            </li>
        </ul>

    </div>


    <div class="col-span-1">
        <div class="w-full max-w-xl p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 mb-4">
            <h5 class="mb-3 text-base font-bold text-gray-900 md:text-xl">
                Detail Pembayaran
            </h5>
            @if (session()->has('orderDetails'))
                @php
                    $orderDetails = session('orderDetails');
                    $totalAmount = array_sum(array_column($orderDetails, 'total_price'));
                @endphp

                <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">Category</th>
                            <th scope="col" class="px-6 py-3">Quantity</th>
                            <th scope="col" class="px-6 py-3">Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orderDetails as $order)
                            <tr>
                                <td class="px-6 py-3">{{ $order['category'] }}</td>
                                <td class="px-6 py-3">{{ $order['quantity'] }}</td>
                                <td class="px-6 py-3">Rp {{ number_format($order['total_price'], 0, ',', '.') }},-</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th scope="row" class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap">TOTAL</th>
                            <td class="px-6 py-4"></td>
                            <td class="px-6 py-4">Rp {{ number_format($totalAmount, 0, ',', '.') }},-</td>
                        </tr>
                    </tfoot>
                </table>
            @endif
            <div class="mt-4 text-center">
                <form action="'{{ route('detail') }}" method="GET">
                    <button type="button"
                        class="text-sky-600 bg-blue-200 hover:bg-sky-200 focus:ring-4 focus:bg-sky-500 font-medium rounded-lg text-sm px-5 py-2.5 me-5 mb-5 focus:outline-none">
                        BELI
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

</html>
