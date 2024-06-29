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

    <nav class="border-gray-200 bg-gray-50">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img class="w-10 h-10 rounded-full" src="/images/Logo.jpg" alt="Rounded avatar">
                <span class="self-center text-2xl font-inter whitespace-nowrap">
                    <b>Concert.tix</b>
                </span>
            </a>
        </div>
    </nav>

    <div class="mx-auto max-w-2xl mt-8">
        <h2 class="text-2xl font-bold">Resi Hasil Pesanan</h2> <br>
        <p><b>Nama Pembeli:</b> {{ $user->first_name }} {{ $user->last_name }}</p>
        <p><b>Email Pembeli:</b> {{ $user->email }}</p>
        <p><b>No. Handphone Pembeli:</b> {{ $user->phone_number }}</p>
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
