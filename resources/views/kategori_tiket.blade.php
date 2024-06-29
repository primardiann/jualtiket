<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket Purchase</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <nav>
        <div class="p-4">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img class="w-12 h-12 rounded-full" src="/images/Logo.jpg" alt="Rounded avatar">
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


    <div class="relative overflow-x-auto p-8 m-5">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">Category</th>
                    <th scope="col" class="px-6 py-3">Stock</th>
                    <th scope="col" class="px-6 py-3">Price</th>
                    <th scope="col" class="px-6 py-3">Kuantitas</th>
                    <th scope="col" class="px-6 py-3">Total Harga</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($tikets as $index => $data)
                    <tr>
                        <td class="px-6 py-3">{{ $data->category }}</td>
                        <td class="px-6 py-3">{{ $data->stock }}</td>
                        <td class="px-6 py-3">{{ $data->price }}</td>
                        <td class="px-6 py-3">
                            <input type="number" min="0" max="{{ $data->stock }}" value="1"
                                class="kuantitas border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                data-price="{{ $data->price }}" />
                        </td>
                        <td class="px-6 py-3 total-harga">{{ $data->price }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-3 text-center">No data available</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                document.querySelectorAll('.kuantitas').forEach(function(input) {
                    input.addEventListener('input', function() {
                        const price = parseFloat(this.getAttribute('data-price'));
                        const quantity = parseInt(this.value);
                        const totalHargaElement = this.closest('tr').querySelector('.total-harga');
                        totalHargaElement.textContent = (price * quantity).toFixed(2);
                    });

                    // Initialize the total price for default quantity
                    const price = parseFloat(input.getAttribute('data-price'));
                    const totalHargaElement = input.closest('tr').querySelector('.total-harga');
                    totalHargaElement.textContent = (price * input.value).toFixed(2);
                });
            });
        </script>
    </div>


    <center>
        <a href="{{ route('login') }}" type="button"
            class="text-sky-600 bg-blue-200 hover:bg-sky-200 focus:ring-4 focus:bg-sky-500 font-medium rounded-lg text-sm px-5 py-2.5 me-5 mb-5 focus:outline-none">BELI</a>
    </center>

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
