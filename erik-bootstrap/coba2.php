<div class="col-md-5" style="background:skyblue">
`       <div class="row justify-content-center">
            <div class="col-md-12" style="background:skyblue">
                <center><h2>HASIL FORMULIR NILAI SMK ASSALAAM</h2></center>
                    <div class="table-responsive">
                         <table class="table table-dark">
<?php
    if (isset($_POST['sbm'])) {
     $a = $_POST['nama'];
     $b = $_POST['kelas'];
     $c = $_POST['uts'];
     $d = $_POST['uas'];
     $e = $_POST['hari'];
     for ($i=0; $i < count($a); $i++) { 
        $akhir = ($e['hari'] * 0.6) + ($c['uts'] * 0.2) + ($d['uas'] * 0.2);
       ?>
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">UTS</th>
      <th scope="col">UAS</th>
      <th scope="col">Harian</th>
      <th scope="col">Nilai Akhir</th>
      <th scope="col">Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $a[$i]; ?></td>
      <td><?php echo $b;[$i] ?></td>
      <td><?php echo $c;[$i] ?></td>
      <td><?php echo $d;[$i] ?></td>
      <td><?php echo $e;[$i] ?></td>
      <td><?php echo $akhir; ?></td>
      <td><?php echo $ket   ; ?></td>
    </tr>
  </tbody>
    <?php } ?>
</table>
                </div>
           </div>
     </div>
</div>
    <?php } ?>