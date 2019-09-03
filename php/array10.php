<?php
$arrBuah = array ("Mangga", "Apel", "Pisang", "Kedondong",
"Jeruk");
if (in_array ("Pisang", $arrBuah)) {
echo "<b>Tersedia buah tersebut di sini</b>";
} else {
echo "<b>Tidak ada buah tersebut di sini</b>";
}
?>