<?php
$array = array('erik <br>', 23);
$aso = [
    [
        'Nama' => 'Erik saputra',
        'Kelas' => 'XI RPL 2',
    ],
    [
        'Nama' => 'Priska Aprilia Anyasari',
        'Kelas' => 'XI RPL 2',
    ],
    [
        'Nama' => 'Irsyal Fauzan Sanad',
        'Kelas' => 'XI RPL 2',
    ],
    [
        'Nama' => 'Dinda amelia',
        'Kelas' => 'XI RPL 2',
    ],
    [
        'Nama' => 'Risky herdiansyah',
        'Kelas' => 'XI RPL 2',
    ]
];
foreach ($aso as $value) {
    echo $value["Nama"] . "<br>";
    echo $value["Kelas"] . "<br>";
}
echo '<hr>';
$countaso = count($aso);
for ($i=0; $i < $countaso; $i++) { 
    echo $aso[$i]["Nama"] . "<br>";
    echo $aso[$i]["Kelas"] . "<br>";
}
?>