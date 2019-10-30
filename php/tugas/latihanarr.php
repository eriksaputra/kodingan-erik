<?php
$arrNilai = array 
("Ajeng" => 90, "Mamat" => 70, "Ucup" => 87,
"Aang" => 95 , "Syahrul" => 75);
foreach ($arrNilai as $nama => $nilai) {
    echo "<pre>";
if ($nilai > 85) {
    echo "Nama : $nama , Nilai : $nilai , Grade A <br><hr>";
}elseif ($nilai > 75) {
    echo "Nama : $nama , Nilai : $nilai , Grade B <br><hr>";
}elseif ($nilai > 65) {
    echo "Nama : $nama , Nilai : $nilai , Grade C <br><hr>";
}
}
echo"</pre";