<?php
    class Pro{
        public $nama, $alamat, $umur;

        public function __construct($a, $b, $c){
            $this->nama = $a;
            $this->alamat = $b;
            $this->umur = $c;
    }
    public function data(){
        return "Assalamualaikum<br>";
    }
}
$satu = new Pro('Erick saputra','nata endah',17);
echo $satu->data()."Nama Saya : $satu->nama<br>Alamat saya : $satu->alamat<br>Umur saya : $satu->umur Tahun";
?>