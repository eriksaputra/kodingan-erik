<?php
$a = array('Ahmad', 23, true , 3.19, 'erik');
//menampilkan array menggunakan echo
echo"Array menggunakan echo <br>";
echo $a[1] ."<br>";
echo $a[4] . "<br>";

echo "<br>";
echo"Array menggunakan looping for <br>";
for ($i=0; $i < count($a) ; $i++) { 
    echo"Array -> " .$a[$i] . "<br>";
}

echo"<br>";
echo"Array menggunakan foreach  <br>";
foreach ($a as $tugas) {
    echo"Array -> " .$tugas . "<br>";
}
?>