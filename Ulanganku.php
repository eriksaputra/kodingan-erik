<html>
    <body>
        <fieldset style="border-color: red">
            <legend><h1>DAFTAR</h1></legend> 
            <form action="Proses_Ulangan.php" method="post">
                <table>
                    <tr>
                        <td>
                            <label for="">Nama</label>
                        </td>
                        <td>
                            <input type="text" name="nama" value="" id="nama" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Alamat</label>
                        </td>
                        <td>
                            <input type="text" name="alamat" value="" id="alamat" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Jenis Kelamin</label>
                        </td>
                        <td>
                            <input type="radio" name="jenis" value="Laki-Laki" id="jenis" checked>Laki - Laki
                            <input type="radio" name="jenis" value="Perempuan" id="jenis">Perempuan
                        </td>
                    </tr>
                    <tr>    
                        <td>
                            <label for="">Tanggal Beli</label>
                        </td>
                        <td>
                            <input type="date" name="date" value="" id="date" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Jumlah Pembelian</label>
                        </td>
                        <td>
                            <input type="number" name="jml" min="1" value="" id="jml" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br><br><input type="submit" name="submit" value="Simpan">
                        </td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>