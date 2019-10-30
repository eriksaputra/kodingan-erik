<html>
    <body>
        <fieldset style="border-color: red" >
            
            <legend><h1>PEMBELIAN</h1></legend> 
            <form action="Akhir_Ulangan.php" method="post" accept-charset="utf-8">
             <input type="hidden" name="nama" value=" <?php echo $_POST['nama'] ?> " id="nama">
            <input type="hidden" name="alamat" value=" <?php echo $_POST['alamat'] ?> " id="alamat">
            <input type="hidden" name="jenis" value=" <?php echo $_POST['jenis'] ?> " id="jenis">
            <input type="hidden" name="date" value=" <?php echo $_POST['date'] ?> " id="date">
            <input type="hidden" name="jml" value=" <?php echo $_POST['jml'] ?> " id="jml">
                <table>
                    <?php
                    if (isset($_POST['submit'])) {
                        $jml_form = $_POST['jml'];
                        for ($a = 0; $a < $jml_form; $a++) { ?> 
                            <tr>
                                <td>
                                    <label for="">Judul Buku</label>
                                </td>
                                <td>
                                    <input type="text" name="judul[]" id="" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">Kode Buku</label>
                                </td>
                                <td>
                                    <input type="text" name="kode[]" id="" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">Pengarang</label>
                                </td>
                                <td> 
                                    <input type="text" name="pengarang[]" id="" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">Jenis Buku</label>
                                </td>
                                <td>
                                    <select name="buku[]" id="">
                                        <option value="Novel">Novel</option>
                                        <option value="Fiksi">Fiksi</option>
                                        <option value="Horror">Horror</option>
                                        <option value="Cergam">Cergam</option>
                                        <option value="Komik">Komik</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">Harga Buku</label><br><br>
                                </td>
                                <td>
                                    <input type="number" name="harga[]" id="" required><br><br>
                                </td>    
                            </tr>
                        <?php } ?>
                        <tr>
                            <td>
                                <br><input type="submit" name="spn" value="Simpan">
                            </td>
                            <td>
                                <br><input type="reset" value="Reset">
                             </td>
                        </tr>
                    <?php } ?>
                </table>
            </form>
        </form>
        </fieldset>
    </body>
</html>    
<!--                 <input type="hidden" name="nama" value=" <?php echo $_POST['nama'] ?> " id="nama">
                <input type="hidden" name="alamat" value=" <?php echo $_POST['alamat'] ?> " id="alamat">
                <input type="hidden" name="jenis" value=" <?php echo $_POST['jenis'] ?> " id="jenis">
                <input type="hidden" name="date" value=" <?php echo $_POST['date'] ?> " id="date">
                <input type="hidden" name="jml" value=" <?php echo $_POST['jml'] ?> " id="jml"> -->