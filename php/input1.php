<html>
<head><title>Pengolahan Form</title></head>
<body>
<FORM ACTION="" METHOD="POST" NAME="input">
Nama Saya : <input type="text" name="nama"><br>
<input type="submit" name="Input" value="Simpan">
</FORM>
</body>
</html>
<?php
if (isset($_POST['Input'])) {
$nama = $_POST['nama'];
echo "Nama Saya : <b>$nama</b>";
}
?>