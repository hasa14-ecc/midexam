<?php
// views/game_result.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Kuis Temu 2 - Hasil</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        .bounce-hover:hover {
            animation: bounce 0.3s ease-in-out;
        }
    </style>
</head>
<body class="bg-gradient-to-r from-blue-500 to-purple-600 min-h-screen flex items-center justify-center py-8">
    <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-md text-center">
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Skor Anda: <?= htmlspecialchars($score) ?> dari <?= htmlspecialchars($total) ?> soal</h3>
        <?php if ($score == $total): ?>
            <p class="text-lg text-green-600 font-semibold mb-6">Selamat! Jawaban Anda semua benar! 🎉</p>
        <?php else: ?>
            <p class="text-lg text-gray-600 mb-6">Terima kasih telah bermain! Coba lagi untuk skor lebih baik!</p>
        <?php endif; ?>
        <a href="<?= base_url('/game/ending') ?>" class="inline-block bg-blue-500 text-white font-semibold py-3 px-8 rounded-full shadow-lg hover:bg-blue-600 transition duration-200 bounce-hover">Selesai</a>
    </div>
</body>
</html>