<html>

<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
</head>

<nav>
    <div class="p-4">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img class="w-12 h-12 rounded-full" src="{{ asset('images/Logo.jpg') }}" alt="Rounded avatar">
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

                    <li>
                        <a href="{{ route('keranjang.index') }}"
                            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 18 20">
                                <path
                                    d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                            </svg>
                            <span class="flex-1 ms-3 whitespace-nowrap">Keranjang</span>
                        </a>
                    </li>

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
    </div>
</nav>

<br>

<div class="mx-auto max-w-2xl mt-8">

    <div class="w-full max-w-xl p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 mb-4">
        <h5 class="mb-3 text-base font-bold text-gray-900 md:text-xl">
            Metode Pembayaran
        </h5>
        <p class="text-sm font-normal text-gray-500">Pembayaran yang dipilih metode : </p>
        <ul class="my-4 space-y-3">
            <li>

                <button type="submit"
                    class="flex items-center p-3 text-base font-bold text-gray-900 rounded-lg bg-gray-50 hover:bg-gray-100 group hover:shadow">
                    <span class="flex-1 ms-3 whitespace-nowrap">Virtual Account</span>
                </button>

            </li>
        </ul>
    </div>


    <div class="col-span-1">
        <div class="w-full max-w-xl p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 mb-4">
            <h5 class="mb-3 text-base font-bold text-gray-900 md:text-xl">
                Detail Pembayaran
            </h5>
            @foreach ($orderDetails as $detail)
                <tr>
                    <br>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        <b>{{ $detail['category'] }} </b> (x{{ $detail['quantity'] }})
                    </th>
                    <br>
                    <td class="px-3 py-1">
                        Rp.{{ number_format($detail['total_price'], 2) }}
                    </td>
                </tr>
            @endforeach
            <tfoot>
                <br>
                <tr>
                    <th scope="row" class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap">
                        <b>TOTAL : </b>
                    </th>
                    <td class="px-3 py-1">
                        Rp.{{ number_format($totalAmount, 2) }}
                    </td>
                </tr>
            </tfoot>
            </tbody>
            </table>

            <div class="mt-4 text-center">
                <form action="{{ route('payment_success') }}" method="GET">
                    <button type="submit"
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
