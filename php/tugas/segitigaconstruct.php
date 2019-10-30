<?php
if (isset($_POST['Input'])) {
$alas = $_POST['alas'];
$tinggi = $_POST['tinggi'];
}
    class Erik{
        public $alas , $tinggi;

        public function __construct($alas,$tinggi){
            $this->alas = $alas;
            $this->tinggi = $tinggi;
        }
        public function data(){
            $a = 0.5* $this->alas *$this->tinggi;
            return "1/2 * $this->alas * $this->tinggi = $a <br>";
        }
    }

$satu = new Erik($alas,$tinggi);
echo $satu->data()."Alas : $satu->alas <br>tinggi : $satu->tinggi<br>";
echo "Hasilnya : ".$satu->data();
?>