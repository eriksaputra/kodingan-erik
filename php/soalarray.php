<?php
$a = array('Judul', 'Penulis');
$b = 2*4;
$aso = [
    [
        'Judul' => '<h1>Belajar PHP & MySQL untuk pemula'.$b.'</h1>',
        'Penulis' => 'Admin SMK',
    ],
    [
        'Judul' => '<h1>Tutorial PHP dari nol hingga Mahir</h1>',
        'Penulis' => 'Admin SMK',
    ],
    [
        'Judul' => '<h1>Membuat Aplikasi Web dengan PHP</h1>',
        'Penulis' => 'Admin SMK',
    ],
];
foreach ($aso as $data[0]) {
    echo $data["Judul"] ."<br>";
    echo $data["Penulis"] . "<br>";
    echo'<hr>';
}
?>