<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

  <div class="flex min-h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-blue-700 text-white flex flex-col p-6">
      <h2 class="text-2xl font-bold mb-10">Dashboard</h2>
      <nav class="space-y-4">
        <a href="#" class="block px-4 py-2 rounded hover:bg-blue-800">🏠 Home</a>
        <a href="#" class="block px-4 py-2 rounded hover:bg-blue-800">🧑‍💻 Profil</a>
      </nav>
      <form action="/logout" method="POST" class="mt-auto">
        @csrf
        <button type="submit" class="w-full mt-10 bg-red-500 hover:bg-red-600 py-2 rounded text-white">
          Logout
        </button>
      </form>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-10">
      <!-- Header -->
      <div class="flex justify-between items-center mb-8 px-4 py-2 bg-white shadow rounded-xl">
        <h1 class="text-2xl font-semibold text-gray-800">
          Selamat datang, <span class="text-blue-600">{{ Auth::user()->name ?? 'User' }}</span>
        </h1>

        <div class="relative group">
          <div class="w-12 h-12 rounded-full bg-blue-600 text-white flex items-center justify-center text-lg font-bold cursor-pointer shadow hover:scale-105 transition-transform">
            {{ strtoupper(substr(Auth::user()->name ?? 'U', 0, 1)) }}
          </div>
          <div class="absolute right-0 mt-2 bg-gray-800 text-white text-sm rounded py-1 px-3 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
            {{ Auth::user()->email ?? 'user@example.com' }}
          </div>
        </div>
      </div>
      <!-- ✅ Form Pelaporan -->
      <div class="bg-white rounded-xl shadow p-8 w-full">
        <h2 class="text-xl font-bold mb-6 text-blue-600">Formulir Pelaporan</h2>
        
        {{-- Alert Sukses --}}
        @if(session('success'))
          <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-md">
            {{ session('success') }}
          </div>
        @endif

        <form action="/lapor" method="POST">
          @csrf

          <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-1" for="nama">Nama</label>
            <input type="text" name="nama" id="nama" placeholder="Nama pelapor"
              class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-500" />
          </div>

          <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-1" for="tanggal">Tanggal Melapor</label>
            <input type="date" name="tanggal_melapor" id="tanggal"
              class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-500" />
          </div>

          <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-1" for="lokasi">Lokasi Kerusakan</label>
            <input type="text" name="lokasi_kerusakan" id="lokasi" placeholder="Lokasi Kerusakan"
              class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-blue-500" />
          </div>

          <div class="mb-6">
            <label class="block text-sm font-medium text-gray-700 mb-1" for="deskripsi">Deskripsi Kerusakan</label>
            <textarea name="deskripsi_kerusakan" id="deskripsi" rows="3" placeholder="Deskripsi Kerusakan"
              class="w-full border border-gray-300 rounded-md p-3 resize-none focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
          </div>
          <button type="submit"
            class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 w-full rounded-md transition">
            Submit
          </button>
        </form>
      </div>

    </main>
  </div>

</body>
</html>
