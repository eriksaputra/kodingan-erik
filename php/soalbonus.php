<?php
$aso = [
    [
        'data' => '<b> Data Mobil 0</b>',
        'Jenis' => '<b>*</b> Volvo',
        'no' => '<b>*</b> 22',
        'no2' => '<b>*</b> 18',
    ],
    [
        'data' => '<b> Data Mobil 1</b>',
        'Jenis' => '<b>*</b> BMW',
        'no' => '<b>*</b> 15',
        'no2' => '<b>*</b> 13',
    ],
    [
        'data' => '<b> Data Mobil 2</b>',
        'Jenis' => '<b>*</b> Saab',
        'no' => '<b>*</b> 5',
        'no2' => '<b>*</b> 2',
    ],
    [
        'data' => '<b> Data Mobil 3</b>',
        'Jenis' => '<b>*</b> Land Rover',
        'no' => '<b>*</b> 17',
        'no2' => '<b>*</b> 15',
    ],
];
foreach ($aso as $data) {
    echo $data["data"] ."<br>";
    echo $data["Jenis"] . "<br>";
    echo $data["no"] . "<br>";
    echo $data["no2"] . "<br>";
}
?>