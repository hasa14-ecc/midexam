<?php
// views/home.php
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Game Kuis Temu 2</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #2980b9, #6dd5fa, #ffffff);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            text-align: center;
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        }
        h1 {
            font-size: 36px;
            color: #2c3e50;
            margin-bottom: 20px;
        }
        a {
            display: inline-block;
            padding: 12px 24px;
            font-size: 18px;
            color: white;
            background-color: #27ae60;
            border-radius: 8px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        a:hover {
            background-color: #1e8449;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang di Game Kuis Temu 2!</h1>
        <a href="/login">🎮 Mulai Permainan</a>
    </div>
</body>
</html>
