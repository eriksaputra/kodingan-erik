<?php
    class Siswa{       

    public $nama;
    public $alamat;
    public $usia , $hobi;

    public function Data_diri($nama=null , $alamat=null , $usia=null){
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->usia = $usia;
        return "Nama : $nama<br> Alamat : $alamat<br> Usia : $usia";
    }

    public function Hobi($hobi){
        $this->hobi = $hobi;
        return $this->Data_diri( $this->nama,$this->alamat,$this->usia)."<br>Hobby : $hobi";
    }
}
$siswa1 = new Siswa();
$siswa1->Data_diri('Erick Saputra' , 'Amsterdam,Belanda' , 17);
echo $siswa1->Hobi(Futsal);
?>