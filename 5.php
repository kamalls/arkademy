<?php

function hitung($kalimat, $huruf){
		$hitung = substr_count($kalimat, $huruf);
		if($hitung == 0){
			echo  "Dari kata '".$kalimat."' jumlah karakter '".$huruf."' tidak ada\n";
			}else{
		  echo "Dari kata '".$kalimat."' jumlah karakter '".$huruf."' adalah ".$hitung."\n";
			}
	 }

$a = hitung("arkademy","a");
echo $a;
$b = hitung("javascript","x");
echo $b;
$c = hitung("peace!","!");
echo $c;
?>