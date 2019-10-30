<?php
function lingkaran($jari = "8" , $v = "3.14"){
    echo "<b>Luas lingkaran</b><br>";
    echo "Jari-jari saya : ".$jari. "<br>";
    echo "V saya : ".$v. "<br>";
    echo "Luas lingkaran nya adalah : 
    ". 3.14 * $jari * $jari."<hr>";
    }
$b = 30;
$d = 10;
lingkaran();


function kel($V = "3.14" , $diameter = "6"){
    echo "<b>Keliling lingkaran</b><br>";
    echo "V saya : ".$V."<br>";
    echo "Diameter : ".$diameter."<br>";
    echo "Jadi, Keliling lingkaran adalah :
    ".$V * $diameter;
    }
    $r = 12;
    $t = 13;
    kel();
?>