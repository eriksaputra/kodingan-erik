<?php
$arrWarna = array ("Aqua","Blue","Red","Yellow","Green");
echo "Menampilkan isi array dengan for : <br>";
for ($i=0; $i<count($arrWarna); $i++) {
echo "Kamu suka warna <font color=$arrWarna[$i]>". $arrWarna[$i]
."</font> ?<br><hr>";
}
echo "<br>Menampilkan isi array dengan foreach : <br>";
foreach ($arrWarna as $warna) {
echo "Kamu suka warna  <font color=$warna>". $warna ."</font>
?<br><hr>";
}
?>