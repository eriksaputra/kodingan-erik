<html>
    <head>
        <title>CheckOut Pembelian</title>
    </head>
    <body>
    <fieldset style="border-color:red">
    <legend><h3>Checkout Pembelian</h3></legend>
    <div class="we">
    <table>
    <?php
    echo "<h3 align='right'>".date("d/m/Y H:i:s")."</h3>";
    if (isset($_GET['input'])) {
        $a = $_GET['a'];
        echo $a; 
    }   
    if (isset($_POST['sbm'])) {
        $judul = $_POST['judul'];
        $kode = $_POST['kode'];
        $pengarang = $_POST['pengarang'];
        $buku = $_POST['buku'];
        $harga = $_POST['harga'];
        foreach ($judul as $data => $x) {
            echo "- Judul Buku : " .$judul[$data].
                "<br>- Kode Buku : " .$kode[$data].
                "<br>- Pengarang Buku : " .$pengarang[$data].
                "<br>- Jenis Buku : " .$buku[$data].
                "<br>- Harga Buku :Rp . " .$harga[$data].
                 "<hr>";
           
        }
    
    }
?>          
            </table>
</div>
        </fieldset>
    </body>
</html>