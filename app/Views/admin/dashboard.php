?>
<h2>Dashboard Admin</h2>
<h3>Data Pengguna</h3>
<ul>
<?php foreach ($users as $u) echo "<li>$u[username] - $u[role]</li>"; ?>
</ul>
<h3>Pertanyaan Game</h3>
<ul>
<?php foreach ($questions as $q) echo "<li>Level $q[level]: $q[question] (Phishing: $q[is_phishing])</li>"; ?>
</ul>
<?php
