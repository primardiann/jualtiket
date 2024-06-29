<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
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





    <div class="mx-auto max-w-3xl mt-8 ml-2">

        <div class="col-span-1">
            @foreach ($orderDetails as $detail)
                <div class="w-full max-w-xl p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 mb-4">
                    <h3 class="mb-3 text-base font-bold text-gray-900 md:text-xl">
                        {{ $detail['category'] }}
                    </h3>
                    <table>
                        <tbody>
                            <tr>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    <b>Tiket (x{{ $detail['quantity'] }})</b>
                                </th>
                                <td class="px-3 py-1">
                                    Rp.{{ number_format($detail['total_price'], 2) }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            @endforeach
            <div class="w-full max-w-xl p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 mb-4">
                <tfoot>
                    <table>
                        <tbody>
                            <tr>
                                <th scope="row" class="px-6 py-4 font-bold text-gray-900 whitespace-nowrap">
                                    Total Harga :
                                </th>
                                <td class="px-3 py-1">
                                    Rp.{{ number_format($totalAmount, 2) }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </tfoot>
            </div>
        </div>
        {{-- <center>
                <button type="submit"
                    class="text-sky-600 bg-blue-200 hover:bg-sky-200 focus:ring-4 focus:bg-sky-500 font-medium rounded-lg text-sm px-5 py-2.5 me-5 mb-5 focus:outline-none">BELI</button>
            </center> --}}

    </div>



    <footer
        class="fixed bottom-0 left-0 z-20 w-full p-4 bg-white border-t border-gray-200 shadow md:flex md:items-center md:justify-between md:p-6">
        <span class="text-sm text-gray-500 sm:text-center">© 2023
            <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
        </span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 sm:mt-0">
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
