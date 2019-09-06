<?php
if (isset($_POST['Input'])) {
$a = $_POST['nama'];
$b = $_POST['kls'];
$c = $_POST['alamat'];
$d = $_POST['hobi'];
echo "<pre>";
echo "<b>Nama Saya : $a</b><br>";
echo "<b>Kelas Saya : $b</b><br>";
echo "<b>Alamat Saya : $c</b><br>";
echo "<b>Hobby Saya : $d</b><br>";
echo "</pre>";
}
?>