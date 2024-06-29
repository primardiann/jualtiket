<!-- resources/views/payment/success.blade.php -->

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Purchase</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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

    <div class="mx-auto max-w-2xl mt-8">

        <div class="max-w-4xl p-8 bg-white border border-gray-300 rounded-lg shadow-lg sm:p-6 mx-8">
            <div class="text-center">
                <h2 class="text-4xl font-bold text-gray-900 mb-8">Pembayaran Berhasil</h2>
                <p class="text-lg text-gray-700 mb-8">Terima kasih! Pembayaran Anda telah berhasil diproses.</p>
                <form action="{{ route('resi') }}"
                    method="GET
                    @csrf
                    <button type="submit"
                    class="block w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold text-center py-3 rounded-lg">
                    Tamplkan Resi Pembayaran
                </form></button>
            </div>
        </div>

    </div>

</body>

</html>
