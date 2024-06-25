<html>
    <head>
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"
            rel="stylesheet"/>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    </head>
    <br>

    <center>
        <div class="mx-auto my-10 max-w-md">
            @if(session('error'))
            <p style="color: red;">{{ session('error') }}</p>
    @endif
            <div
                class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow sm:p-8 md:p-8">
                <form class="space-y-6" action="{{ route('login') }}" method="POST">
                    
                    @csrf
                    <h5 class="text-xl font-medium text-gray-900">Masuk</h5>

                    <div>
                        <label
                            for="email"
                            class="block mb-2 text-sm text-left font-medium text-gray-900">Email Anda</label>
                        <input
                            type="email"
                            name="email"
                            id="email"
                            required=""
                            autofocus="autofocus"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="name@company.com"/>
                    </div>
                    <div>
                        <label
                            for="password"
                            class="block mb-2 text-sm text-left font-medium text-gray-900">Kata sandi Anda</label>
                        <input
                            type="password"
                            name="password"
                            id="password"
                            placeholder="password"
                            required=""
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            required="required"/>
                    </div>
                    <div class="flex items-start">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input
                                    id="remember"
                                    type="checkbox"
                                    value=""
                                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300"/>
                            </div>
                            <label
                                for="remember"
                                class="ms-2 text-sm font-medium text-gray-900">Ingat saya</label>
                        </div>
                        <a
                            href="#"
                            class="ms-auto text-sm text-blue-700 hover:underline">Lupa kata sandi?</a>
                    </div>
                    <button
                        type="submit"
                        href="tampilan_awal"
                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Masuk ke akun anda</button>

                    <div class="text-sm font-medium text-gray-500">
                        Belum terdaftar?
                        <a href="sign_up" class="text-blue-700 hover:underline">Buat akun</a>
                    </div>
                </form>
            </div>
        </div>
    </center>
</html>