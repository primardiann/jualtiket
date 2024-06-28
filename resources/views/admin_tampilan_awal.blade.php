<html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    <title>Admin</title>
    <style>
        /* Gaya CSS untuk tombol dan bagian tambahan */
        .addItemButton {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #000080;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            position: relative;
        }

        .addItemButton:hover {
            background-color: #45a049;
        }

        .addItemText {
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
            font-size: 14px;
            margin-top: 5px;
        }

        .addItemIcon {
            position: relative;
            top: -2px;
        }

        .carouselItem {
            display: none;
            text-align: center;
            padding: 20px;
            background-color: #f1f1f1;
            border-radius: 5px;
            margin-top: 20px;
        }

        .carouselItem img {
            max-width: 100%;
            border-radius: 5px;
        }
    </style>
</head>

<body>


    <nav>

        <a href="https://flowbite.com" class="flex items-center space-x-4 rtl:space-x-reverse">
            <nav class="border-gray-200 bg-gray-100">
                <div class="max-w-screen-xm flex flex-wrap items-center justify-between mx-auto p-6"></svg>
                    <img class="w-12 h-12 rounded-full" src="{{ asset('images/tiket.jpg') }}" alt="Rounded avatar">
                    </td>
                    <span class=" text-4xl font-bold whitespace-nowrap">Concert.tix</span>
        </a>

        <form class="max-w-md mx-auto">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewbox="0 0 20 20"></svg>
                </div>
            </div>
        </form>

        <div class="flex items-center md:order-2 space-x-1 md:space-x-2 rtl:space-x-reverse">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 focus:outline-none">Logout</button>
            </form>

            <div class="relative w-10 h-10 overflow-hidden bg-gray-200 rounded-full">
                <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewbox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                        clip-rule="evenodd">
                    </path>
                </svg>
            </div>

            <button data-collapse-toggle="mega-menu-icons" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="mega-menu-icons" aria-expanded="false"></button>
        </div>
        <div id="mega-menu-icons" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
            <ul class="flex flex-col mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
                <li>

                    <div id="toast-top-left"
                        class="fixed  items-center w-full max-w-xs p-0  rounded-lg shadow top-100 left-5"
                        role="alert">
                </li>
            </ul>
        </div>
    </nav>

    

    <br>
    <ol>
        <span class=" text-2xl font-bold whitespace-nowrap" style="margin-left: 100px">Konser Aktif</span>
    </ol>
    <br>
    <div class="flex gap-5" style="margin-left: 100px">
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('images/taylor.jpg') }}" alt="Rounded image of Taylor">
            </a>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">The Eras Tour</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700">19 Februari 2024</p>
                <a href="{{ route('admin_data_tiket') }}"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Harga Tiket

                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 5h12m0 0L9 1m4 4L9 9" />

                    </svg>
                </a>
            </div>

        </div>



        <body>

            <!-- Tombol untuk menambahkan item baru -->
            <a href="{{ route('konser.create') }}" class="addItemButton">
                <span class="addItemIcon">
                    <ol>+</ol>
                    <ol>Menambahkan Tiket Konser</ol>
                </span>
            </a>

            <script>
                function addItem() {
                    // Buat element baru untuk item
                    var newItem = document.createElement('div');
                    newItem
                        .classList
                        .add('carouselItem');

                    // Tambahkan gambar default untuk item baru
                    var newImage = document.createElement('img');
                    newImage.src = 'default-jkt2.jpeg';
                    newImage.alt = 'New Slide';
                    newItem.appendChild(newImage);

                    // Tambahkan item baru ke dalam carousel
                    var carousel = document.querySelector('.carousel');
                    carousel.appendChild(newItem);
                }
            </script>

        </body>


</body>

</html>
