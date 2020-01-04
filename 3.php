<?php
function validateColor($string){
$kodenya = explode("#",$string)[1];
return $kodenya;
}
 
echo "masukan color(harus diawali #) : ";
$string = trim(fgets(STDIN));
validateColor($string);
 if(ctype_xdigit($string) && strlen($string)>=3){
			echo "hex valid";
			}else{
			echo "hex no valid";
		}
?>