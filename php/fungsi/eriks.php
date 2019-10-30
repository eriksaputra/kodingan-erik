<html>
<head>
    <title>Erik Ganteng</title>
</head>
<body> 
    <FORM ACTION="saputra.php" METHOD="POST" NAME="input">
    <center><h2>Tugas</h2></center>
    <table>
    <tr>
    <td>Nama</td>
    <td><input type="text" name="nama"><br></td>
    </tr>   
    <tr>
    <td>NIS</td>
    <td><input type="number" name="nis"><br></td>
    </tr>      
    <tr>
    <td>Alamat</td>
    <td><textarea name="alamat" cols"50" rows"5"></textarea><br></td>
    </tr>
    <tr>
    <td>Jenis Kelamin</td>
    <td><input type="radio" name="jenis" value="Laki-laki" checked>
    Laki-laki
    <input type="radio" name="jenis" value="Perempuan">Perempuan<br></td>
    </tr>
    <tr>
    <td>Agama</td>
    <td><select name="agama">
<option value="Islam">Islam</option>
<option value="Kristen">Kristen</option>
<option value="Budha">Budha</option>
<option value="Hindu">Hindu</option></td>
    </tr>
    <tr>
    <td>Asal Sekolah</td>
    <td><input type="text" name="asal"</td>
    </tr>
    <tr>
    <td>Nama orang tua/Wali</td>
    <td><input type="text" name="orang"></td>
    </tr>
    <tr>
    <td>Mata pelajaran yang di sukai</td>
    <td><input type="checkbox" name="jurusan1" value="Mtk" checked>Matematika<br>
<input type="checkbox" name="jurusan2" value="Ipa">Ilmu pengetahuan alam<br>
<input type="checkbox" name="jurusan3" value="Ips"> Ilmu pengetahuan sosial<br>
<input type="checkbox" name="jurusan4" value="Pai">Pendidikan agama islam<br>
<input type="checkbox" name="jurusan5" value="B.Indonesia">Bahasa Indonesia<br></td>
    </tr>
    <tr>
    <td>Total nilai Ijasah SMK</td>
    <td><input type="number" name="nilai"</td>
    </tr>
    <td>Email</td>
    <td><input type"email" name="email"</td>
    </tr>
    </table>
    <input type="submit" name="Pilih" value="Input data">    
</body>
</html>