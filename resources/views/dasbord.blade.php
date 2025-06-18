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
        <a href="/dasbord" class="block px-4 py-2 rounded hover:bg-blue-800">🏠 Home</a>
        <a href="#" class="block px-4 py-2 rounded hover:bg-blue-800">📸 Status</a>
        <a href="#" class="block px-4 py-2 rounded hover:bg-blue-800">👥 Pelapor</a>
        <a href="/home" class="block px-4 py-2 rounded hover:bg-blue-800">📝 Formulir</a>
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
      <div class="flex justify-between items-center mb-8">
        <h1 class="text-2xl font-bold text-gray-700">Selamat datang, {{ Auth::user()->name ?? 'User' }}</h1>
      </div>

      <!-- Cards -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-md">
          <h3 class="text-lg font-semibold text-blue-600">Jumlah Postingan</h3>
          <p class="text-2xl mt-2 font-bold">12</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-md">
          <h3 class="text-lg font-semibold text-green-600">Pengguna Aktif</h3>
          <p class="text-2xl mt-2 font-bold">5</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-md">
          <h3 class="text-lg font-semibold text-purple-600">Komentar Hari Ini</h3>
          <p class="text-2xl mt-2 font-bold">7</p>
        </div>
      </div>

    </main>
  </div>

</body>
</html>
