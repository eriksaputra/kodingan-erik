<?php
    class Siswa{
        public function __destruct(){
            echo"<br> Ini adalah Destruct";
        }
        public function halo(){
            return"<br> Hello PHP";
        }
        public function __construct(){
            echo "Ini adalah Construct";
        }
    }

    $hello = new Siswa();
    echo $hello->halo();    