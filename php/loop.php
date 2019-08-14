
<!-- 
    $loop = 1 = "aku data ke- ".$i. "dan mendapat emas"
    $loop = 2 = "aku data ke- ".$i. "dan mendapat perak"
    $loop = 3 = "aku data ke- ".$i. "dan mendapat perunggu"
    $loop = 4 s/d 6 = "aku data ke- ".$i. "dan mendapat tas laptop"
    $loop = 7 s/d 9 = "aku data ke- ".$i. "dan mendapat tas karung"
    $loop >= 10 = "aku data ke- ".$i. "tidak mendapatkan apapun"


 -->

<?php
$loop = 10;
$num =1;
for ($i=0; $i <= $loop ; $i++) { 
    if ($i == 1) {
        echo "aku data ke- ".$num++." dan mendapatkan hadiah emas <br>";
    }elseif ($i == 2) {
        echo "aku data ke- ".$num++." dan aku mendapatkan hadiah perak <br>";
    }elseif ($i == 3) {
        echo "aku data ke-".$num++." dan aku mendapatkan hadiah perunggu <br>";
    }elseif ($i >= 4 && $i <= 6) {
        echo "aku data ke-".$num++." dan aku mendapatkan hadiah tas laptop <br>";
    }elseif ($i >= 7 && $i <= 9) {
        echo "aku data ke-".$num++." dan aku mendapatkan hadiah tas karung <br>";
    }else {
        echo "aku data ke-".$num++." dan tidak mendapatkan hadiah apapun <br>";
    }
}
?>