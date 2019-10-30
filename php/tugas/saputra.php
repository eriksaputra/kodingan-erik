<?php

if (isset($_POST['Pilih'])) {
    $a = $_POST ['nama'];
    $b = $_POST ['nis'];
    $c = $_POST ['alamat'];
    $d = $_POST ['jenis'];
    $e = $_POST ['agama'];
    $f = $_POST ['asal'];
    $g = $_POST ['orang'];
    $h = $_POST ['jurusan'];
    $i = $_POST ['nilai'];
    $j = $_POST ['email'];
    echo "Nama : $a<br>";
    echo "Nis : $b<br>";
    echo "Alamat : $c<br>";
    echo "Jenis kelamin : $d<br>";
    echo "Agama : $e<br>";
    echo "Asal sekolah : $f<br>";
    echo "Nama orang tua/wali : $g<br>";
    echo "Mata pelajaran yang di sukai : $h<br>";
    echo "Total nilai ijasah SMK : $i<br>";
    echo "Email : $j<br>";
}if ($i > 23) {
        echo "Data anda di terima";
    }else {
        echo "Data anda tidak di terima";
    }

?>