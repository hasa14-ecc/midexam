<?php
// views/login.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Game Kuis Temu 2</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        .pulse-hover:hover {
            animation: pulse 0.3s ease-in-out;
        }
    </style>
</head>
<body class="bg-gradient-to-r from-purple-600 to-blue-500 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-md">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Login</h2>
        <form method="post" action="/loginPost" class="space-y-4">
            <div>
                <input type="text" name="username" placeholder="Username" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200" required>
            </div>
            <div>
                <input type="password" name="password" placeholder="Password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200" required>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white font-semibold py-2 rounded-lg hover:bg-blue-600 transition duration-200 pulse-hover">Login</button>
        </form>
    </div>
</body>
</html>