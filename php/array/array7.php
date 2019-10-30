<?php
$arrNilai = array  ("Erik" => 100, "Priska" => 90, "Irsyal" => 75,
"Rizky" => 75);
echo "<b>Array sebelum pengurutan</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
asort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah pengurutan dengan asort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
arsort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah pengurutan dengan arsort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
?>