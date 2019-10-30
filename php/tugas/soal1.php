<?php
$a = 5;
$b = 10;
$c = true;
$d = false;
echo"($a >= $b) && ($b <=$a) : " .(($a >= $b) && ($b >=$a));
if ($c) {
    echo"<br> Hello PHP";
}elseif ($d) {
    echo "<br> Maaf kondisinya tidak sesuai";
}
?>