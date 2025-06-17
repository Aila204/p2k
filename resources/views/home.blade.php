<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cuit App</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

  <div class="max-w-2xl mx-auto px-4 py-10">

    <!-- Header -->
    <div class="flex justify-between items-center mb-8">
      <h1 class="text-xl font-bold text-blue-700">Hallo, User</h1>
      <form action="/" method="post">
        @csrf
        <button type="submit" class="bg-blue-600 text-white px-5 py-2 rounded-full hover:bg-blue-700 transition">
          Logout
        </button>
      </form>
    </div>

    <!-- Cuit Input -->
    <div class="bg-white p-6 rounded-xl shadow mb-8">
      <textarea
        class="w-full border border-gray-300 rounded-lg p-4 resize-none focus:outline-none focus:ring-2 focus:ring-blue-500"
        rows="4"
        placeholder="What's on your mind?"
      ></textarea>
      <div class="text-right mt-4">
        <button class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition">
          Cuit
        </button>
      </div>
    </div>

    <!-- Posts Section -->
    <div class="space-y-6">

      <!-- Post Card -->
      <div class="bg-white p-5 rounded-xl shadow">
        <p class="text-gray-700">Just finished building a Tailwind CSS app and it looks amazing! 🚀</p>
        <div class="text-sm text-gray-400 mt-2">Posted just now</div>
        <button onclick="toggleReply(this)" class="mt-4 text-blue-600 hover:underline text-sm">Reply</button>
        <div class="mt-4 hidden">
          <textarea
            class="w-full border border-gray-300 rounded-lg p-3 resize-none focus:outline-none focus:ring-2 focus:ring-blue-500"
            rows="2"
            placeholder="Write a reply..."
          ></textarea>
          <div class="text-right mt-2">
            <button class="bg-green-600 text-white px-4 py-1 rounded-full hover:bg-green-700 transition">
              Send
            </button>
          </div>
        </div>
      </div>

      <!-- Another Post Card -->
      <div class="bg-white p-5 rounded-xl shadow">
        <p class="text-gray-700">Tailwind makes styling so much fun!</p>
        <div class="text-sm text-gray-400 mt-2">Posted 10 mins ago</div>
        <button onclick="toggleReply(this)" class="mt-4 text-blue-600 hover:underline text-sm">Reply</button>
        <div class="mt-4 hidden">
          <textarea
            class="w-full border border-gray-300 rounded-lg p-3 resize-none focus:outline-none focus:ring-2 focus:ring-blue-500"
            rows="2"
            placeholder="Write a reply..."
          ></textarea>
          <div class="text-right mt-2">
            <button class="bg-green-600 text-white px-4 py-1 rounded-full hover:bg-green-700 transition">
              Send
            </button>
          </div>
        </div>
      </div>

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
