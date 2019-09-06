<?php
if (isset($_POST['Input'])) {
$a = $_POST['nama'];
$b = $_POST['mapel1'];
$c = $_POST['mapel2'];
echo "Nama Saya : <b>$a</b><br>";
echo "Mapel 1 : <b>$b</b><br>";
echo "Mapel 2 : <b>$c</b><br>";
$d = ($b + $c) / 2;
echo "Rata-rata : <b>".$d."</b> <br>";
}if ($d >= 75) {
    echo "Status : <b>LULUS</b>";
}else{
    echo "Status : <b>TIDAK LULUS</b>";
}
?>