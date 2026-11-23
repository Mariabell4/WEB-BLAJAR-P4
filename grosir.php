<?php
echo "<table border='1'><tr><th>Pcs</th><th>Total</th></tr>";
for ($i = 1; $i <= 10; $i++) {
    // Lewati jika pcs ganjil
    if ($i % 2 == 1) {
        continue;
    }

  $total = $i * 3000;

  //Hentikan loop jika total melebihi 20000
  if ($total > 20000) {
    break;
  }

  echo "<tr><td>$i</td><td>Rp " . number_format($total, 0, ',', '.') . "</td></tr>";
}
echo "</table>";
?>
