<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body class="bg-[#1a2e1f] flex items-center justify-center min-h-screen">

    <form method="POST" action="/register" class="bg-[#2e4d2f] p-10 rounded-2xl shadow-lg w-96">
        @csrf
        <h2 class="text-3xl font-bold mb-8 text-center text-white">Register</h2>
    
        <div class="mb-6">
            <label for="name" class="block text-sm font-medium text-white">Name:</label>
            <input type="text" name="name" id="name" class="mt-1 block w-full p-3 border border-[#4b8c4b] rounded-full focus:outline-none focus:ring focus:ring-[#6dbf6d] bg-white text-gray-800" required>
        </div>
        <div class="mb-6">
            <label for="email" class="block text-sm font-medium text-white">Email:</label>
            <input type="text" name="email" id="email" class="mt-1 block w-full p-3 border border-[#4b8c4b] rounded-full focus:outline-none focus:ring focus:ring-[#6dbf6d] bg-white text-gray-800" required>
        </div>
        <div class="mb-6">
            <label for="username" class="block text-sm font-medium text-white">Username:</label>
            <input type="text" name="username" id="username" class="mt-1 block w-full p-3 border border-[#4b8c4b] rounded-full focus:outline-none focus:ring focus:ring-[#6dbf6d] bg-white text-gray-800" required>
        </div>
        <div class="mb-6">
            <label for="password" class="block text-sm font-medium text-white">Password:</label>
            <input type="password" name="password" id="password" class="mt-1 block w-full p-3 border border-[#4b8c4b] rounded-full focus:outline-none focus:ring focus:ring-[#6dbf6d] bg-white text-gray-800" required>
        </div>
        <div class="mb-6">
            <label for="password_confirmation" class="block text-sm font-medium text-white">Confirm Password:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="mt-1 block w-full p-3 border border-[#4b8c4b] rounded-full focus:outline-none focus:ring focus:ring-[#6dbf6d] bg-white text-gray-800" required>
        </div>
    
        <button type="submit" class="w-full bg-[#4b8c4b] text-white font-semibold py-2 rounded-full hover:bg-[#3f7a3f] transition transform hover:scale-105 active:scale-95">REGISTER</button>
    </form>
    
</body>
</html>
