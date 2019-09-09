<html>
<head>
    <title>Tugas Form Erik saputra</title>
</head>
<body>
    <FORM ACTION="" METHOD="POST">
    Masukan Bilangan : <input type="number" name="angka"><br>
    <input type="submit" name="Pilih" value="Input angka">    
</body>
</html>
<br><br>
<?php
if (isset($_POST['Pilih'])) {
    $a = $_POST['angka'];
    echo "Total Bintang : $a<br>";
for ($r=1; $r <= $a;$r++) { 
    for ($b=1; $b <= $a - $r ; $b++) {
            echo"&nbsp;&nbsp;";
            
        } 
        for ($z=1; $z <= $r; $z++) { 
            echo"*&nbsp;&nbsp;";
        }
    echo"<br>";
}
}
?>