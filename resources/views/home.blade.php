<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>P3K</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

  <div class="max-w-2xl mx-auto px-4 py-10">

    <!-- Header -->
    <div class="flex justify-between items-center mb-8">
      <h1 class="text-xl font-bold text-blue-700">Hallo, Eshi Aulia</h1>
      <form action="/" method="post">
        @csrf
      </form>
    </div>

    <!-- Cuit Input -->
    <div class="bg-white p-6 rounded-xl shadow mb-8">
      <h1>Nama</h1>
      <textarea
        class="w-full border border-gray-300 rounded-lg p-4 resize-none focus:outline-none focus:ring-2 focus:ring-blue-500"
        rows="1"
        placeholder="nama pelaporan"
      ></textarea>
    </div>

      <!-- Post Card -->
      <div class="bg-white p-5 rounded-xl shadow mb-8"> 
        <h1>Lokasi Kerusakan</h1>
        <textarea
          class="w-full border border-gray-300 rounded-lg p-4 resize-none focus:outline-none focus:ring-2 focus:ring-blue-500"
          rows="1"
          placeholder="Lokasi Kerusakan"
          ></textarea>
      </div>

      <!-- Another Post Card -->
      <div class="bg-white p-5 rounded-xl shadow"> 
       <h1>Deskripsi Kerusakan</h1>
          <textarea
          class="w-full border border-gray-300 rounded-lg p-4 resize-none focus:outline-none focus:ring-2 focus:ring-blue-500"
          rows="1"
         placeholder="Deskripsi Kerusakan"
          ></textarea>
      </div>

      <button class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition text-align-center w-full mt-4">
          Submit
        </button>
    </div>
  </div>

  <!-- Toggle Reply Script -->
  <script>
    function toggleReply(button) {
      const replyBox = button.nextElementSibling;
      replyBox.classList.toggle("hidden");
    }
  </script>
  
</body>
</html>
