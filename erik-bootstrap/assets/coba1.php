<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="/assets/css/bootstrap.min.css" />
    <script src="main.js"></script>
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">SMK ASSALAAM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!-- Akhir header -->
<!-- content -->
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6" style="padding:35px;" style="background-color:black;">
                    <div class="card badge-primary">
                        <div class="card-header"><center>FORMULIR DATA NILAI SISWA</center></div>
                        <div class="card-body">
                        <form action="coba2.php" method="POST">
    <?php
        if (isset($_GET['simpan'])) {
           $jlm = $_GET['jumlah'];
            for ($a=0; $a < $jlm ; $a++) { ?>
                <div class="form-group">
                    <labe for="">Nama</labe>
                    <input type="text" name="nama[]" class="form-control">
                </div>
                <div class="form-group">
                    <labe for="">Kelas</labe>
                    <input type="text" name="kelas[]" class="form-control" >
                </div>
                <div class="form-group">
                    <labe for="">Jenis Kelamin</labe>
                    <input type="radio" name="jk[]" value="Laki-laki"/>Laki-laki
                    <input type="radio" name="jk[]" value="Perempuan" 
                    checked="checked"/>Perempuan
                </div>
                <div class="form-group">
                    <labe for="">Nilai UTS</labe>
                    <input type="number" min="1" max="100" name="uts[]" class="form-control">
                </div>
                <div class="form-group">
                    <labe for="">Nilai UAS</labe>
                    <input type="number" min="1" max="100" name="uas[]" class="form-control">
                </div>
                <div class="form-group">
                    <labe for="">Nilai Harian</labe>
                    <input type="number" min="1" max="100" name="hari[]" class="form-control">
                </div>
                 <?php } ?>
                 <center>   
            <input type="submit" name="sbm" class="btn btn-success" value="Simpan">
            <input type="reset" value="Reset" class="btn btn-danger">
            </center>
            </form>      
           <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
<!-- end content -->
<!-- footer -->
  <center>&copy; 2019 SMK ASSALAAM</center>
<!-- js -->
<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/bootstrap.bundle.js"></script>
<!-- end js -->
</body>
</html>