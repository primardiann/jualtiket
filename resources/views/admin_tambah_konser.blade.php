<html>

<head>
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"
            rel="stylesheet"/>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    </head>

   

<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
  <div class="px-3 py-3 lg:px-5 lg:pl-3">
    <div class="flex items-center justify-between">
      <div class="flex items-center justify-start rtl:justify-end">
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
               <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
         </button>
        <a href="https://flowbite.com" class="flex ms-2 md:me-24">
        <img class="w-12 h-12 rounded-full" src="images/Logo.jpg" alt="Rounded avatar">
                <span class=" text-4xl font-semibold whitespace-nowrap dark:text-white">Concert.tix</span>
            </a>
      </div>
      <div class="flex items-center">
          <div class="flex items-center ms-3">
            <div>
              <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
              </button>
            </div>
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
              <div class="px-4 py-3" role="none">
                <p class="text-sm text-gray-900 dark:text-white" role="none">
                  Neil Sims
                </p>
                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                  neil.sims@flowbite.com
                </p>
              </div>
              <ul class="py-1" role="none">
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Settings</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Earnings</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </div>
  </div>
</nav>

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
   <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
      <ul class="space-y-2 font-medium">
         <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                  <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                  <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
               </svg>
               <span class="ms-3">Dashboard</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                  <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">Penambahan konser Baru</span>
               <span class="inline-flex items-center justify-center px-2 ms-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>
            </a>
         </li>
         
         <li>
            </a>
         </li>
      </ul>
   </div>
</aside>
<body>
<div class="p-4 sm:ml-64">
  <div class="container mx-auto px-4 py-12">
    <h1 class="text-3xl font-bold text-center">Tambah Konser Baru</h1>

    <form class="mt-8">
      <div class="mb-4">
        <label for="namaKonser" class="block text-gray-700 text-sm font-medium mb-2">Nama Konser</label>
        <input type="text" id="namaKonser" class="form-input w-full rounded-md border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500" placeholder="Masukkan nama konser">
      </div>

      <div class="mb-4">
        <label for="tanggalKonser" class="block text-gray-700 text-sm font-medium mb-2">Tanggal Konser</label>
        <input type="date" id="tanggalKonser" class="form-input w-full rounded-md border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
      </div>
      <div class="mb-4">
        <label for="waktuKonser" class="block text-gray-700 text-sm font-medium mb-2">Waktu Konser</label>
        <input type="time" id="waktuKonser" class="form-input w-full rounded-md border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
      </div>

      <div class="mb-4">
        <label for="lokasiKonser" class="block text-gray-700 text-sm font-medium mb-2">Lokasi Konser</label>
        <input type="text" id="lokasiKonser" class="form-input w-full rounded-md border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500" placeholder="Masukkan lokasi konser">
      </div>

      <div class="mb-4">
        <label for="namaArtis" class="block text-gray-700 text-sm font-medium mb-2">Nama Panggung Artis</label>
        <input type="text" id="namaArtis" class="form-input w-full rounded-md border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500" placeholder="Masukkan nama panggung artis">
      </div>

      <div class="mb-4">
        <label for="deskripsiKonser" class="block text-gray-700 text-sm font-medium mb-2">Deskripsi Konser</label>
        <textarea id="deskripsiKonser" class="form-textarea w-full rounded-md border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500" rows="5" placeholder="Masukkan deskripsi konser"></textarea>
      </div>

      <div class="mb-4">
        <label for="fotoKonser" class="block text-gray-700 text-sm font-medium mb-2">Foto Konser</label>
        <input type="file" id="fotoKonser" class="form-input w-full rounded-md border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
      </div>

      <div class="mb-4"><center>
        <label for="kategoriTiket" class="block text-gray-700 text-sm font-medium mb-2">Menambahkan Kategori Tiket</label></center>
      </div>
      <div class="mb-4">
        <label for="kategoriTiket" class="block text-gray-700 text-sm font-medium mb-2">Menambahkan Kategori 1</label>
      </div>
      <form class="mt-8">
      <div class="form-input w-full rounded-md border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
        <div class="mb-4 mt-4 ml-3 mr-3">
          <label for="kateogri1" class="block text-gray-700 text-sm font-medium mb-2">Nama Jenis Kategori</label>
          <input type="text" id="kateogri1" class="form-input w-full rounded-md border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500" placeholder="Masukkan Jenis Kategori">
        </div>
        <div class="mb-4 mt-4 ml-3 mr-3">
          <label for="hargaTiket1" class="block text-gray-700 text-sm font-medium mb-2">Harga tiket</label>
          <div class="input-group">
          <span class="input-group-text">Rp</span>
          <input type="number" id="hargaDasar" class="form-input w-full rounded-md border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 ml-1 mr-1">
        </div>
        <div class="mb-4 mt-4 ">
          <label for="stok1" class="block text-gray-700 text-sm font-medium mb-2">Stok Tiket Kategori 1</label>
        </div>
        <div class="input-group">
          <input type="number" id="stok1" class="form-input w-full rounded-md border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
        </div>
        </div>
      </div>
    </form>
    <center> <button type="button" class="flex items-center justify-center px-4 py-2.5 text-sm font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
      <span class="mr-1">+</span>
      <span>Tambah Kategori</span>
    </button> </center>
    <div class="mb-3 mt-4">
            <label for="tanggalPeluncuran" class="block text-gray-700 text-sm font-medium mb-2">Tanggal Peluncuran Tiket</label>
            <input type="date" class="form-control" id="tanggalPeluncuran">
          </div>
          <div class="mb-3">
            <label for="tanggalTutup" class="block text-gray-700 text-sm font-medium mb-2">Tanggal Tutup Penjualan Tiket</label>
            <input type="date" class="form-control" id="tanggalTutup">
          </div>
    <div class="container flex justify-content: flex-end">
      <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Unggah</button>
    </div>

      
</body>          
  
</html>
