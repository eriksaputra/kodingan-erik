<html>
    <head>
        <title>Form Penggajian</title>
    </head>
    <body>
        <fieldset>
            <legend><h2>Form Penggajian Karyawan</h2></legend>
            <form action="erpe.php" method="post" name="input">
                <table>
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama" require></td>
                    </tr>
                    <tr>
                        <td>NIP</td>
                        <td><input type="number" name="nip" require></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td><input type="radio" name="jenkel" value="Laki - Laki" checked>Laki - Laki</td>
                        <td><input type="radio" name="jenkel" value="Perempuan">Perempuan</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><textarea name="alamat" id="" cols="30" rows="5" require></textarea></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td><select name="status" id="">
                                <option value="Menikah" checked>Menikah</option>
                                <option value="Belum Menikah">Belum Menikah</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Jabatan</td>
                        <td><select name="jabatan" id="">
                                <option value="HRD">HRD</option>
                                <option value="Manager">Manager</option>
                                <option value="Staff">Staff</option>
                                <option value="Karyawan">Karyawan</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Potongan</td>
                        <td><input type="checkbox" name="bpjs" value="BPJS" checked>BPJS</td>
                        <td><input type="checkbox" name="koperasi" value="Koperasi">Koperasi</td>
                        <td><input type="checkbox" name="jamsostek" value="Jamsostek">Jamsostek</td>
                    </tr>
                    <tr>
                        <td>Golongan</td>
                        <td><select name="golongan" id="">
                                <option value="A1">A1</option>
                                <option value="A2">A2</option>
                                <option value="A3">A3</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><button name="submit">Submit</button></td>
                        <td><button type="reset">Reset</button></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>