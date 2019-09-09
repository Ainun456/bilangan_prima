<?php
$bilangan = $_POST["bilangan"];
$hasil = "";

//echo $bilangan;
for($i=1; $i<=$bilangan; $i++){
    $p = 0; //total pembagi
 
    //mencari pembagi
    for($j=1; $j<=$i; $j++){
        if($i % $j == 0){
            $p += 1; //total pembagi bertambah
        }
    }
    
    //jika pembaginya kurang dari atau sama dengan 2.
    if($p <= 2){
        $hasil .= $i.", ";
    }
}
 
echo "<div style='width:500px;align:left;background-color:blue;padding:20px'>";
echo "<h1>Hasil Program</h1>";
echo $hasil."<br><br>";
echo "<center><a style='background-color:#F1D28D;padding:5px;text-decoration:none;' href='prima.php'>Ulangi</a></center>";
echo "</div>";



?>