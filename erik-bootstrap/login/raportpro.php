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
            <div class="col-md-3" style="padding:20px;">
                <div class="card badge-dark">
                    <div class="card-header">Latihan</div>
                    <div class="card-body">
                        <?php
                        if (isset($_POST['save'])) {
                            $jml = $_POST['jumlah'];
                            $nama = $_POST['nama'];
                            $kelas = $_POST['kelas'];
                            $n_harian = $_POST['n_harian'];
                            $n_uts = $_POST['n_uts'];
                            $n_uas = $_POST['n_uas'];
                        }
                        ?>
                        <form action="" method="post">
                            <div class="form-group">
                                <label>Jumlah Siswa</label>
                                <input type="text" readonly name="jumlah" class="form-control" value="<?php echo $jml; ?>">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-9" style="padding:20px;">
                <div class="card badge-light">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Nilai Harian</th>
                                    <th>Nilai UTS</th>
                                    <th>Nilai UAS</th>
                                    <th>Nilai Akhir</th>
                                    <th>Status</th>
                                </tr>

                                <?php
                                $n_akhir = 0;
                                for ($i = 0; $i < count($nama); $i++) {
                                    $n_akhir = ($n_harian[$i] * 0.6) + ($n_uts[$i] * 0.2) + ($n_uas[$i] * 0.2);
                                    // var_dump($n_akhir);
                                    ?>
                                    <tr>
                                        <td><?php echo $nama[$i]; ?></td>
                                        <td><?php echo $kelas[$i]; ?></td>
                                        <td><?php echo $n_harian[$i]; ?></td>
                                        <td><?php echo $n_uts[$i]; ?></td>
                                        <td><?php echo $n_uas[$i]; ?></td>
                                        <td><?php echo $n_akhir; ?></td>
                                        <td>
                                            <?php if ($n_akhir > 75) {
                                                    echo "Lulus";
                                                } else {
                                                    echo "Remedial";
                                                } ?>
                                        </td>
                                    </tr>
                                <?php }
                                ?>
                            </table>
                        </div>
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