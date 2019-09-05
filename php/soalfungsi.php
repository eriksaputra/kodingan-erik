<!-- // buat 2 fungsi
// luas segitiga -> alas, tinggi, luas
// luas & keliling lingkaran -> jari", luas, keliling -->

<?php
function soal ($Alas = "12", $tinggi = "4") {
    echo "Alas saya : " .$Alas. "<br>";
    echo "Tinggi saya : ".$tinggi."<br>";
    echo "jadi, luas segitiga tersebut adalah : ".($Alas * $tinggi)/ 2;
}
$a = 12;
$b = 100;
soal();
?>