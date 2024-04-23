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
            <div class="p-10 m-8">
                <div
                    class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
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
            </div>
        </nav>
        <p class=" text-2xl text-center">
            <b>Profil</b>
        </p>
        <nav>

            <form class="max-w-md mx-auto">
                <div class="relative z-0 w-full mb-5 group">
                    <input
                        type="email"
                        name="floating_email"
                        id="floating_email"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" "
                required />
            <label for="
                        floating_email" class="
                        peer-focus:font-medium="peer-focus:font-medium"
                        absolute="absolute"
                        text-sm="text-sm"
                        text-gray-500="text-gray-500"
                        dark:text-gray-400="dark:text-gray-400"
                        duration-300="duration-300"
                        transform="transform"
                        -translate-y-6="-translate-y-6"
                        scale-75="scale-75"
                        top-3="top-3"
                        -z-10="-z-10"
                        origin-[0]="origin-[0]"
                        peer-focus:start-0="peer-focus:start-0"
                        rtl:peer-focus:translate-x-1/4="rtl:peer-focus:translate-x-1/4"
                        rtl:peer-focus:left-auto="rtl:peer-focus:left-auto"
                        peer-focus:text-blue-600="peer-focus:text-blue-600"
                        peer-focus:dark:text-blue-500="peer-focus:dark:text-blue-500"
                        peer-placeholder-shown:scale-100="peer-placeholder-shown:scale-100"
                        peer-placeholder-shown:translate-y-0="peer-placeholder-shown:translate-y-0"
                        peer-focus:scale-75="peer-focus:scale-75"
                        peer-focus:-translate-y-6"="
                        peer-focus:-translate-y-6""="peer-focus:-translate-y-6"
                        "">Alamat email</label>
            </div>

            <div class="max-w-md mx-auto">
                <div class="relative z-0 w-full mb-5 group">
                    <input
                        type="text"
                        name="floating_first_name"
                        id="floating_first_name"
                        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                        placeholder=" " required maxlength="
                        50" /> <!-- Mengatur maksimum panjang menjadi 50 karakter -->
                    <label for="
                        floating_first_name" class="
                        peer-focus:font-medium="peer-focus:font-medium"
                        absolute="absolute"
                        text-sm="text-sm"
                        text-gray-500="text-gray-500"
                        dark:text-gray-400="dark:text-gray-400"
                        duration-300="duration-300"
                        transform="transform"
                        -translate-y-6="-translate-y-6"
                        scale-75="scale-75"
                        top-3="top-3"
                        -z-10="-z-10"
                        origin-[0]="origin-[0]"
                        peer-focus:start-0="peer-focus:start-0"
                        rtl:peer-focus:translate-x-1/4="rtl:peer-focus:translate-x-1/4"
                        peer-focus:text-blue-600="peer-focus:text-blue-600"
                        peer-focus:dark:text-blue-500="peer-focus:dark:text-blue-500"
                        peer-placeholder-shown:scale-100="peer-placeholder-shown:scale-100"
                        peer-placeholder-shown:translate-y-0="peer-placeholder-shown:translate-y-0"
                        peer-focus:scale-75="peer-focus:scale-75"
                        peer-focus:-translate-y-6"="
                        peer-focus:-translate-y-6""="peer-focus:-translate-y-6"
                        "">Nama Depan</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input
                    type="text"
                    name="floating_last_name"
                    id="floating_last_name"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required maxlength="
                    50" /> <!-- Mengatur maksimum panjang menjadi 50 karakter -->
                    <label for="
                    floating_last_name" class="
                    peer-focus:font-medium="peer-focus:font-medium"
                    absolute="absolute"
                    text-sm="text-sm"
                    text-gray-500="text-gray-500"
                    dark:text-gray-400="dark:text-gray-400"
                    duration-300="duration-300"
                    transform="transform"
                    -translate-y-6="-translate-y-6"
                    scale-75="scale-75"
                    top-3="top-3"
                    -z-10="-z-10"
                    origin-[0]="origin-[0]"
                    peer-focus:start-0="peer-focus:start-0"
                    rtl:peer-focus:translate-x-1/4="rtl:peer-focus:translate-x-1/4"
                    peer-focus:text-blue-600="peer-focus:text-blue-600"
                    peer-focus:dark:text-blue-500="peer-focus:dark:text-blue-500"
                    peer-placeholder-shown:scale-100="peer-placeholder-shown:scale-100"
                    peer-placeholder-shown:translate-y-0="peer-placeholder-shown:translate-y-0"
                    peer-focus:scale-75="peer-focus:scale-75"
                    peer-focus:-translate-y-6"="
                    peer-focus:-translate-y-6""="peer-focus:-translate-y-6"
                    "">Nama Belakang</label>
        </div>
    </div>

</div>
<div class="gmax-w-md mx-auto">
    <div class="relative z-0 w-full mb-5 group">
        <input
            type="number"
            name="floating_phone"
            id="floating_phone"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            placeholder=" "
                    required />
                <label for="
            floating_phone" class="
            peer-focus:font-medium="peer-focus:font-medium"
            absolute="absolute"
            text-sm="text-sm"
            text-gray-500="text-gray-500"
            dark:text-gray-400="dark:text-gray-400"
            duration-300="duration-300"
            transform="transform"
            -translate-y-6="-translate-y-6"
            scale-75="scale-75"
            top-3="top-3"
            -z-10="-z-10"
            origin-[0]="origin-[0]"
            peer-focus:start-0="peer-focus:start-0"
            rtl:peer-focus:translate-x-1/4="rtl:peer-focus:translate-x-1/4"
            peer-focus:text-blue-600="peer-focus:text-blue-600"
            peer-focus:dark:text-blue-500="peer-focus:dark:text-blue-500"
            peer-placeholder-shown:scale-100="peer-placeholder-shown:scale-100"
            peer-placeholder-shown:translate-y-0="peer-placeholder-shown:translate-y-0"
            peer-focus:scale-75="peer-focus:scale-75"
            peer-focus:-translate-y-6"="
            peer-focus:-translate-y-6""="peer-focus:-translate-y-6"
            "">Nomor telepon</label>
</div>
</div>
<br>

<div class="flex justify-end mt-4 space-x-4">

<button
    type="submit"
    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
<button
    type="button"
    class="text-white bg-gray-500 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray -800 ml-4">Kembali</button>
</div>
</form>

</div>

</body>
</html>