<?php

function kotak_prima ($x, $y){
	for($i=0;$i<$x;$i++){
		for($j=0;$j<$y;$j++){
			echo $bilangan = $_POST["bilangan"];
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
 
echo "<div style='width:500px;margin:0 auto 0 auto;background-color:#e1e1e1;padding:20px'>";
echo "<h1>Hasil Program</h1>";
echo $hasil."<br><br>";
echo "<a style='background-color:#F1D28D;padding:5px;text-decoration:none;' href='prima.php'>Ulangi</a>";
echo "</div>";";
		}
		echo ";
	}
}

kotak_prima(4,3);
?>