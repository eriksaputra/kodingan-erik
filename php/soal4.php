<?php
$array = array('Barang','Harga','Berat');
$aso = [
    [
        'barang' => 'Buku Tulis',
        'harga' => '4000',
        'berat' => '100 Gram',
    ]
];
foreach ($aso as $data) {
    echo $array[0].' : '.$data["barang"] ."<br>";
    echo $array[1].' : '.$data["harga"] . "<br>";
    echo $array[2].' : '.$data["berat"] . "<br>";
}
?>