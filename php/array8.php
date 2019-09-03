<?php
$arrNilai = array  ("Erik" => 100, "Priska" => 90, "Irsyal" => 75,
"Rizky" => 75);
echo "<b>Array sebelum pengurutan</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
ksort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah pengurutan dengan ksort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
krsort($arrNilai);
reset($arrNilai);
echo "<b>Array setelah pengurutan dengan krsort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
?>