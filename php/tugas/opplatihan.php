<?php
    class Manusia{
        public $kulit ="Putih";
        public $jlm_tangan = 2;
        public $jlm_kaki = 2;

        public function Makan()
        {
            return "Nasi sama air";
        }
        public function Tuang($var , $var2){
        return "Manusia suka makan : " .$var ." dan " .$var2;
    }
}
    $manusia_asli = new Manusia();
    echo "Warna Kulit : " .$manusia_asli->kulit;
    echo "<br>Jumlah Tangan : " .$manusia_asli->jlm_tangan;
    echo "<br>Jumlah Kaki : " .$manusia_asli->jlm_kaki;
    echo "<br>Manusia suka makan : " .$manusia_asli->Makan();

    echo"<hr>";
    $manusia_palsu = new Manusia();
    echo "Warna Kulit : " .$manusia_asli->kulit ="Hitam";
    echo "<br>Jumlah Tangan : " .$manusia_asli->jlm_tangan =1;
    echo "<br>Jumlah Kaki : " .$manusia_asli->jlm_kaki=4;
    echo "<br>Manusia suka makan : " .$manusia_asli->Tuang("Nasi","Susu");

?>
<!-- setter : 
$this-> harga = $harga;
getter  -->