<!DOCTYPE html>
<html>

<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
</head>

<body>
    <nav class="bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 h-10"></nav>
    <br>

    <form method="POST" action="{{ route('register') }}" class="max-w-md mx-auto">
        @csrf
        <center>
            <h5 class="text-xl font-medium text-gray-900">Daftar</h5>
        </center>
        <br>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="list-disc">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <div class="relative z-0 w-full mb-5 group">
            <input type="email" name="email" id="email" value="{{ old('email') }}" autofocus="autofocus"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required />
            <label for="
                    email"
                class="
                    peer-focus:font-medium="peer-focus:font-medium" absolute="absolute"
                text-sm="text-sm" text-gray-500="text-gray-500" "dark:text-gray-400" duration-300="duration-300"
                transform="transform" -translate-y-6="-translate-y-6" scale-75="scale-75" top-3="top-3" -z-10="-z-10"
                origin-[0]="origin-[0]" peer-focus:left-0="peer-focus:left-0"
                peer-focus:text-blue-600="peer-focus:text-blue-600" peer-focus:dark:text-blue-500"="
                    peer-focus:dark:text-blue-500""=" peer-focus:dark:text-blue-500" "">Alamat email</label>
        </div>

        <div class="relative z-0 w-full mb-5 group">
            <input type="password" name="password" id="password"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " />
            <label for="
                password"
                class="
                peer-focus:font-medium="peer-focus:font-medium" absolute="absolute"
                text-sm="text-sm" text-gray-500="text-gray-500" "dark:text-gray-400" duration-300="duration-300"
                transform="transform" -translate-y-6="-translate-y-6" scale-75="scale-75" top-3="top-3" -z-10="-z-10"
                origin-[0]="origin-[0]" peer-focus:left-0="peer-focus:left-0"
                peer-focus:text-blue-600="peer-focus:text-blue-600" peer-focus:dark:text-blue-500"="
                peer-focus:dark:text-blue-500""=" peer-focus:dark:text-blue-500" "">Kata sandi</label>
        </div>

        <div class="relative z-0 w-full mb-5 group">
            <input type="password" name="password_confirmation" id="password_confirmation"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required />
            <label for="
                password_confirmation"
                class="
                peer-focus:font-medium="peer-focus:font-medium" absolute="absolute"
                text-sm="text-sm" text-gray-500="text-gray-500" "dark:text-gray-400" duration-300="duration-300"
                transform="transform" -translate-y-6="-translate-y-6" scale-75="scale-75" top-3="top-3" -z-10="-z-10"
                origin-[0]="origin-[0]" peer-focus:left-0="peer-focus:left-0"
                peer-focus:text-blue-600="peer-focus:text-blue-600" peer-focus:dark:text-blue-500"="
                peer-focus:dark:text-blue-500""=" peer-focus:dark:text-blue-500""">Konfirmasi kata sandi</label>
        </div>

        <div class="relative z-0 w-full mb-5 group">
            <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0
        border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0
        focus:border-blue-600 peer"
                placeholder=" " required />
            <label for="
            first_name" class="
            peer-focus:font-medium=" peer-focus:font-medium"
                absolute="
        absolute" text-sm="
        text-sm" text-gray-500="
        text-gray-500" "="
                text-gray-500" "" dark:text-gray-400" duration-300="
        duration-300"
                transform="
        transform" -translate-y-6="
        -translate-y-6" scale-75="
        scale-75"
                top-3="
        top-3" -z-10="
        -z-10" origin-[0]="
        origin-[0]"
                peer-focus:left-0="
        peer-focus:left-0"
                peer-focus:text-blue-600="
        peer-focus:text-blue-600" peer-focus:dark:text-blue-500"="
            peer-focus:dark:text-blue-500" "=" peer-focus:dark:text-blue-500""="peer-focus:dark:text-blue-500""" ">Nama depan</label>
</div>

<div class="relative z-0 w-full mb-5 group">
    <input
        type="text"
        name="last_name"
        id="last_name"
        value="{{ old('last_name') }}"
        class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
        placeholder=" " required />
            <label for="
        last_name" class="
        peer-focus:font-medium="peer-focus:font-medium"
                absolute="absolute" text-sm="text-sm" text-gray-500="text-gray-500" "dark:text-gray-400"
                duration-300="duration-300" transform="transform" -translate-y-6="-translate-y-6"
                scale-75="scale-75" top-3="top-3" -z-10="-z-10" origin-[0]="origin-[0]"
                peer-focus:left-0="peer-focus:left-0" peer-focus:text-blue-600="peer-focus:text-blue-600"
                peer-focus:dark:text-blue-500"="
        peer-focus:dark:text-blue-500""=" peer-focus:dark:text-blue-500" "">Nama belakang</label>
        </div>

        <div class="relative z-0 w-full mb-5 group">
            <input type="number" name="phone_number" id="phone_number" value="{{ old('phone_number') }}"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required />
            <label for="
    phone_number" class="
    peer-focus:font-medium="peer-focus:font-medium"
                absolute="absolute" text-sm="text-sm" text-gray-500="text-gray-500" "dark:text-gray-400"
                duration-300="duration-300" transform="transform" -translate-y-6="-translate-y-6"
                scale-75="scale-75" top-3="top-3" -z-10="-z-10" origin-[0]="origin-[0]"
                peer-focus:left-0="peer-focus:left-0" peer-focus:text-blue-600="peer-focus:text-blue-600"
                peer-focus:dark:text-blue-500"="
    peer-focus:dark:text-blue-500""=" peer-focus:dark:text-blue-500" "">Nomor telepon</label>
        </div>

        <div class="relative z-0 w-full mb-5 group">
            <input type="date" name="birthdate" id="birthdate" value="{{ old('birthdate') }}"
                class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required />
            <label for="
birthdate" class="
peer-focus:font-medium="peer-focus:font-medium" absolute="absolute"
                text-sm="text-sm" text-gray-500="text-gray-500" "dark:text-gray-400" duration-300="duration-300"
                transform="transform" -translate-y-6="-translate-y-6" scale-75="scale-75" top-3="top-3"
                -z-10="-z-10" origin-[0]="origin-[0]" peer-focus:left-0="peer-focus:left-0"
                peer-focus:text-blue-600="peer-focus:text-blue-600" peer-focus:dark:text-blue-500"="
peer-focus:dark:text-blue-500""=" peer-focus:dark:text-blue-500" "">Tanggal lahir</label>
        </div>

        <button type="submit"
            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Daftar</button>
    </form>
    </nav>
</body>

</html>
