<?php
if (isset($_POST['Input'])) {
$jari = $_POST['jari'];
}
    class Aku{
        public $jari;

        public function __construct($jari){
            $this->jari = $jari;
        }
        public function data(){
            $a = 3.14 * $this->jari *$this->jari;
            return "3.14 * $this->jari * $this->jari = $a <br>";
        }
        public function data1(){
            $a = 2 * 3.14 * $this->jari ;
            return "2 * 3.14 * $this->jari = $a <br>";
        }
    }

$satu = new Aku($jari);
echo $satu->data()."Phi : 3.14 <br>Jari-jari : $satu->jari<br>";
echo "Hasilnya luas lingkaran: ".$satu->data();
echo "<hr>";
$satu1 = new Aku($jari);
echo $satu1->data1()."Phi : 3.14 <br>Jari-jari : $satu1->jari<br>";
echo "Hasilnya keliling lingkaran: ".$satu1->data1();
?>