<?php
function valid($email){
   return preg_match('/^([0-9][A-Za-z\-\.\_]*)\@([A-Za-z][A-Za-z0-9\-\_]*)(\.[A-Za-z][A-Za-z0-9\-\_]*)+$/',$email);
	}

echo "masukan Email :";
$email=trim(fgets(STDIN));

if(valid($email)){
		echo "Email Is Valid\n";
} else {
		echo "Email Is Invalid";
		die;
}

echo "Masukan Password :";
$pass=trim(fgets(STDIN));
$uppercase = preg_match('@[A-Z]@', $pass);
$lowercase = preg_match('@[a-z]@', $pass);
$number = preg_match('@[0-9]@', $pass);
$symbol = preg_match("/[`'\"~!@# $*()<>,:;{}\|]/",$pass);
if(!$uppercase || !$lowercase || !$number || !$symbol || strlen($pass)<=9){
		echo "password harus lebih dari 8 karakter, mengandung huruf BESAR, huruf kecil dan angka";
	}else{
		echo "password is valid";
}
?>