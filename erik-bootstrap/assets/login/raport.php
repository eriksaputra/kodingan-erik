<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan 1</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Assalaam</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Raport Siswa</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!-- End Header -->

    <!-- Content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4" style="padding:20px;">
                <div class="card badge-dark">
                    <div class="card-header">Latihan</div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label>Masukan Jumlah Siswa</label>
                                <input type="number" name="jumlah" required class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="simpan" class="btn btn-primary">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8" style="padding:20px;">
                <div class="card">
                    <div class="card-header badge-primary">Data Siswa</div>
                    <div class="card-body">
                        <form action="raportpro.php" method="post">
                            <?php
                            if (isset($_POST['simpan'])) {
                                $jml = $_POST['jumlah'];
                                $no = 1;
                                for ($a = 0; $a < $jml; $a++) {
                                    ?>
                                    <div class="card badge-primary">
                                        <div class="card-header badge-danger">Data ke - <?php echo $no++; ?></div>
                                        <div class="card-body">
                                            <div class="row" style="padding-bottom:20px;">
                                                <div class="col">
                                                    <input type="text" class="form-control" name="nama[]" placeholder="Nama" required>
                                                </div>
                                                <div class="col">
                                                    <input type="text" class="form-control" name="kelas[]" placeholder="Kelas" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <input type="number" min="1" max="100" class="form-control" name="n_harian[]" placeholder="Nilai Harian">
                                                </div>
                                                <div class="col">
                                                    <input type="number" min="1" max="100" class="form-control" name="n_uts[]" placeholder="Nilai UTS">
                                                </div>
                                                <div class="col">
                                                    <input type="number" min="1" max="100" class="form-control" name="n_uas[]" placeholder="Nilai UAS">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                <?php
                                    }
                                    ?>
                                <div class="form-group">
                                    <input type="hidden" name="jumlah" value="<?php echo $jml; ?>">
                                    <button class="btn btn-success btn-block" type="submit" name="save">Simpan</button>
                                </div>
                            <?php }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->

    <!-- Footer -->
    <footer>
        <center>&copy; 2019 SMK Assalaam</center>
    </footer>
    <!-- End Footer -->

    <!-- JS -->
    <!-- Jquery, bebas.js -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <!-- End JS -->
</body>

</html>