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
        <a href="{{ route('home') }}" class="block px-4 py-2 rounded hover:bg-blue-800">🏠 Home</a>
        <a href="#" class="block px-4 py-2 rounded hover:bg-blue-800">📝 Postingan</a>
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
<!-- Header -->
<div class="flex justify-between items-center mb-8 px-4 py-2 bg-white shadow rounded-xl">
  <!-- Teks Selamat Datang -->
  <h1 class="text-2xl font-semibold text-gray-800">
    Selamat datang, <span class="text-blue-600">{{ Auth::user()->name ?? 'User' }}</span>
  </h1>

  <!-- Profil Lingkaran (dengan hover dan inisial nama) -->
  <div class="relative group">
    <div class="w-12 h-12 rounded-full bg-blue-600 text-white flex items-center justify-center text-lg font-bold cursor-pointer shadow hover:scale-105 transition-transform">
      {{ strtoupper(substr(Auth::user()->name ?? 'U', 0, 1)) }}
    </div>

    <!-- Tooltip saat hover -->
    <div class="absolute right-0 mt-2 bg-gray-800 text-white text-sm rounded py-1 px-3 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
      {{ Auth::user()->email ?? 'user@example.com' }}
    </div>
  </div>
</div>

<!-- Cards -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

  <a href="../login" class="block">
    <div class="bg-white p-6 rounded-lg shadow hover:shadow-md hover:bg-gray-50">
      <h3 class="text-lg font-semibold text-blue-600">Jumlah Postingan</h3>
      <p class="text-2xl mt-2 font-bold">12</p>
    </div>
  </a>

  <a href="/pengguna" class="block">
    <div class="bg-white p-6 rounded-lg shadow hover:shadow-md hover:bg-gray-50">
      <h3 class="text-lg font-semibold text-green-600">Pengguna Aktif</h3>
      <p class="text-2xl mt-2 font-bold">5</p>
    </div>
  </a>

  <a href="/komentar" class="block">
    <div class="bg-white p-6 rounded-lg shadow hover:shadow-md hover:bg-gray-50">
      <h3 class="text-lg font-semibold text-purple-600">Komentar Hari Ini</h3>
      <p class="text-2xl mt-2 font-bold">7</p>
    </div>
  </a>

</div>

    </main>
  </div>

</body>
</html>
