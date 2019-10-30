<?php
    class Aritmatika{
        public $bil1 , $bil2;

        public function data1($var, $var1){
            $a = $var+$var1;
            return "Hasil Dari Perhitungan : ".$var. " + " .$var1. " = " .$a;
        }
        public function data2($var, $var1){
            $a = $var-$var1;
            return "Hasil Dari Pengurangan : ".$var. " - " .$var1. " = " .$a;
        }
        public function data3($var, $var1){
            $a = $var*$var1;
            return "Hasil Dari Perkalian : ".$var. " * " .$var1. " = " .$a;
        }
        public function data4($var, $var1){
            $a = $var/$var1;
            return "Hasil Dari Pembagian : ".$var. " / " .$var1. " = " .$a;
        }
    }

    $hitung = new Aritmatika();
    echo $hitung->data1(23,10);
    echo "<br>".$hitung->data2(23,10);
    echo "<br>".$hitung->data3(23,10);
    echo "<br>".$hitung->data4(23,10);
    echo"<hr>";
    $hitung2 = new Aritmatika();
    echo $hitung->data1(20,10);
    echo "<br>".$hitung->data2(40,10);
    echo "<br>".$hitung->data3(10,10);
    echo "<br>".$hitung->data4(50,10);