<html>

<head>
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"
            rel="stylesheet"/>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    </head>

<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200">
  <div class="px-3 py-3 lg:px-5 lg:pl-3">
    <div class="flex items-center justify-between">
      <div class="flex items-center justify-start rtl:justify-end">
        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
               <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
         </button>
        <a href="https://flowbite.com" class="flex ms-2 md:me-24">
        <img class="w-12 h-12 rounded-full" src="images/Logo.jpg" alt="Rounded avatar">
                <span class=" text-4xl font-semibold whitespace-nowrap">Concert.tix</span>
            </a>
      </div>
      <div class="flex items-center">
          <div class="flex items-center ms-3">
            <div>
              <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
              </button>
            </div>
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow" id="dropdown-user">
              <div class="px-4 py-3" role="none">
                <p class="text-sm text-gray-900" role="none">
                  Neil Sims
                </p>
                <p class="text-sm font-medium text-gray-900 truncate" role="none">
                  neil.sims@flowbite.com
                </p>
              </div>
              <ul class="py-1" role="none">
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Dashboard</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Settings</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Earnings</a>
                </li>
                <li>
                  <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign out</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </div>
  </div>
</nav>
<body>
<div class="p-4 sm:ml-64">
  <div class="container mx-auto px-4 py-12">
    <form class="mt-8">
    <div class="mb-4">
        <label for="kelola" class="block text-gray-700 text-sm font-semibold mb-2">Kelola Pengguna</label>
      </div>
      <div class="mb-4">
        <label for="nama" class="block text-gray-700 text-sm font-medium mb-2">Nama</label>
        <input type="text" id="nama" class="form-input w-full rounded-md border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500" placeholder="Masukkan nama pengguna">
      </div>

      <div class="mb-4">
        <label for="email" class="block text-gray-700 text-sm font-medium mb-2">Email</label>
        <input type="text" id="email" class="form-input w-full rounded-md border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500" placeholder="Masukkan email pengguna">
      </div>

      <div class="mb-4">
        <label for="telepon" class="block text-gray-700 text-sm font-medium mb-2">Telepon</label>
        <input type="text" id="telepon" class="form-input w-full rounded-md border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500" placeholder="Masukkan nomor telepon">
      </div>
      <div class="mb-4">
        <label for="nik" class="block text-gray-700 text-sm font-medium mb-2">NIK [KTP] :</label>
        <input type="text" id="nik" class="form-input w-full rounded-md border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500" placeholder="Masukkan nik">
      </div>

      <div class="mb-4">
        <label for="alamat" class="block text-gray-700 text-sm font-medium mb-2">Alamat</label>
        <textarea id="alamat" class="form-textarea w-full rounded-md border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500" rows="5" placeholder="Masukkan alamat"></textarea>
      </div>
      <button type="button" class="flex items-center justify-center px-4 py-2.5 text-sm font-medium text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg">
      <span class="mr-1"></span>
      <span>Ubah Profil</span>
    </button>
    
      <div class="mb-4">
        <label for="fotopengguna" class="block text-gray-700 text-sm font-semibold mb-2">Foto Pengguna</label>
        <input type="file" id="fotopengguna" class="form-input w-full rounded-md border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
      </div>
      <div class="mb-4">
        <label for="ganti password" class="block text-gray-700 text-sm font-semibold mb-2">Ganti Password</label>
      </div>
      <form class="mt-8">
      <div class="form-input w-full rounded-md border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
        <div class="mb-4">
        <label for="username" class="block text-gray-700 text-sm font-medium mb-2">Username</label>
        <input type="text" id="username" class="form-input w-full rounded-md border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500" placeholder="Masukkan username">
      </div>
        <div class="mb-4 mt-4 ml-3 mr-3">
          <label for="password" class="block text-gray-700 text-sm font-medium mb-2">Password Baru</label>
          <input type="text" id="password" class="form-input w-full rounded-md border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500" placeholder="Masukkan password">
        </div>
        <div class="mb-4 mt-4 ml-3 mr-3">
          <div class="input-group">
        </div>
        <div class="input-group">
        </div>
        </div>
      </div>
    </form>
    <div class="container flex justify-content: flex-end">
      <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Ubah password</button>
    </div>

      
</body>          
  
</html>
