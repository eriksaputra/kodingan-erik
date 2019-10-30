<?php
$transport =  [
    ["nama :" => "Ujang" , "kelas :" => "XI RPL 1" , "Alamat :" => "BMI"],
    ["nama :" => "Mahmud" , "kelas :" => "XI RPL 2" , "Alamat :" => "Boma"],
    ["nama :" => "Ucok" , "kelas :" => "XI RPL 3" , "Alamat :" => "Bosay"]
];
            echo "<pre>";
            print_r ($transport);
            echo "</pre>";
            $mode = current($transport[2]);
            echo $mode."<br>";
            $mode = current($transport[1]);
            echo $mode."<br>";
            next($transport); 
            $mode = key($transport);
            echo $mode."<br>"; 
            reset($transport);
            $mode = current($transport[0]);
            echo $mode."<br>";

            