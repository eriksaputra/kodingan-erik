<?php
$arrNilai = array ("Ani" => 80, "Erik" => 90, "Priska" => 75,
"Irsyal" => 85);
echo "Menampilkan isi array dengan foreach : <br>";
foreach ($arrNilai as $nama => $nilai) {
echo "Nilai $nama = $nilai<br>";
}
reset ($arrNilai);
echo "<br>Menampilkan isi array dengan while dan list : <br>";
while (list ($nama, $nilai) = each($arrNilai)) {
echo "Nilai $nama = $nilai<br>";
}
?>