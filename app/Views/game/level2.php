<?php
// views/game_level2.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Kuis Temu 2 - Level 2</title>
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
<body class="bg-gradient-to-r from-indigo-600 to-purple-700 min-h-screen flex items-center justify-center py-8">
    <div class="bg-white p-8 rounded-2xl shadow-xl w-full max-w-2xl">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Penerapan Teknis STRIDE</h2>
        <form method="post" action="/game/level2/submit" class="space-y-6">
            <?php foreach ($questions as $q): ?>
                <div class="p-4 bg-gray-50 rounded-lg shadow-sm">
                    <p class="text-lg font-semibold text-gray-700 mb-4"><?= htmlspecialchars($q['question']) ?></p>
                    <div class="space-y-2">
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="answer[<?= $q['id'] ?>]" value="1" class="form-radio h-5 w-5 text-purple-500" required>
                            <span class="text-gray-600">Ancaman</span>
                        </label>
                        <label class="flex items-center space-x-2">
                            <input type="radio" name="answer[<?= $q['id'] ?>]" value="0" class="form-radio h-5 w-5 text-purple-500">
                            <span class="text-gray-600">Bukan Ancaman</span>
                        </label>
                    </div>
                </div>
            <?php endforeach; ?>
            <button type="submit" class="w-full bg-purple-500 text-white font-semibold py-3 rounded-lg hover:bg-purple-600 transition duration-200 pulse-hover">Kirim Jawaban</button>
        </form>
    </div>
</body>
</html>