<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cuit App</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

  <!-- Header/Navbar -->
  <header class="bg-white shadow-md py-4 px-6 mb-10">
    <div class="max-w-4xl mx-auto flex justify-between items-center">
      <h1 class="text-2xl font-bold text-blue-700">P2k</h1>
      <div class="flex items-center space-x-4">
        <span class="text-gray-700 font-medium">Hallo, User 👋</span>
        <form action="/logout" method="post">
          @csrf
 <button onclick="window.location.href='/login'" 
        class="bg-red-500 text-white px-4 py-2 rounded-full hover:bg-red-600 transition">
  Logout
</button>
        </form>
      </div>
    </div>
  </header>

  <!-- Main Container -->
  <main class="max-w-2xl mx-auto px-4">

    <!-- Cuit Input -->
    <section class="bg-white p-6 rounded-xl shadow mb-10">
      <h2 class="text-lg font-semibold mb-4 text-blue-700">Keterangan</h2>
      <textarea
        class="w-full border border-gray-300 rounded-lg p-4 resize-none focus:outline-none focus:ring-2 focus:ring-blue-500"
        rows="4"
        placeholder="Apa yang sedang kamu pikirkan?"
      ></textarea>
      <div class="text-right mt-4">
        <button class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition">
          Send
        </button>
      </div>
    </section>

    <!-- Posts Section -->
    <section class="space-y-8">

      <!-- Post Card -->
      <article class="bg-white p-5 rounded-xl shadow hover:shadow-lg transition">
        <p class="text-gray-800">Just finished building a Tailwind CSS app and it looks amazing! 🚀</p>
        <div class="text-sm text-gray-400 mt-2">Posted just now</div>
        <button onclick="toggleReply(this)" class="mt-4 text-blue-600 hover:underline text-sm">Balas</button>
        <div class="mt-4 hidden">
          <textarea
            class="w-full border border-gray-300 rounded-lg p-3 resize-none focus:outline-none focus:ring-2 focus:ring-blue-500"
            rows="2"
            placeholder="Tulis balasan..."
          ></textarea>
          <div class="text-right mt-2">
            <button class="bg-green-600 text-white px-4 py-1 rounded-full hover:bg-green-700 transition">
              Kirim
            </button>
          </div>
        </div>
      </article>

      <!-- Another Post Card -->
      <article class="bg-white p-5 rounded-xl shadow hover:shadow-lg transition">
        <p class="text-gray-800">Tailwind makes styling so much fun!</p>
        <div class="text-sm text-gray-400 mt-2">Posted 10 mins ago</div>
        <button onclick="toggleReply(this)" class="mt-4 text-blue-600 hover:underline text-sm">Balas</button>
        <div class="mt-4 hidden">
          <textarea
            class="w-full border border-gray-300 rounded-lg p-3 resize-none focus:outline-none focus:ring-2 focus:ring-blue-500"
            rows="2"
            placeholder="Tulis balasan..."
          ></textarea>
          <div class="text-right mt-2">
            <button class="bg-green-600 text-white px-4 py-1 rounded-full hover:bg-green-700 transition">
              Kirim
            </button>
          </div>
        </div>
      </article>

    </section>
  </main>

  <!-- Toggle Reply Script -->
  <script>
    function toggleReply(button) {
      const replyBox = button.nextElementSibling;
      replyBox.classList.toggle("hidden");
    }
  </script>

</body>
</html>
