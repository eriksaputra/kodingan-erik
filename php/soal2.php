<?php
$a = 90;
$b = 90;
$d =75;
$c = ($a + $b)/2;
echo "Nama : Erik Saputra<br>";
echo "Kelas :X RPL 2";
echo"<br>";
echo"<hr>";
echo "Nilai B.Indonesia : ".$a."<br>";
echo "Nilai matematika : ".$b."<br>";
echo"Nilai rata-rata : ".$d."<br>";
echo "Keterangan: <b>Lulus</b><br>";
echo "Grade : <b>B</b><br>";
echo "<br>";
if ($c > 85) {
    echo"Grade A , nilai rata-rata > 85";
}elseif ($c = 75) {
    echo"Grade B , nilai rata-rata = 75";
}elseif ($c > 60) {
    echo"Grade C , nilai rata-rata > 60";
}elseif ($c < 60) {
    echo "Grade D , nilai rata-rata < 60";
}elseif ($c > 100) {
    echo"Nilai yang anda masukan tidak sesuai";
}

?>