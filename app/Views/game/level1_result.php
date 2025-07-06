?>
<h3>Skor Anda: <?= $score ?> dari <?= $total ?> soal</h3>
<?php if ($score == $total): ?>
  <p>Selamat! Jawaban Anda semua benar!</p>
<?php else: ?>
  <p>Coba lagi untuk meningkatkan skor Anda.</p>
<?php endif; ?>

<a href="<?= base_url('/game/level2') ?>">Lanjut ke Level 2</a>
<?php