<?php
function validatecolor($string)
{
$hex = trim($string, "#");
If (!ctype_xdigit($hex) and strlen($hex) !== 3 or strlen($hex) !== 6){
     return "Bukan hex";
}else{
    return "BENAR #".$hex;
}
}
echo "Masukan nilai hex diawali # : ";
$string = trim(fgets(STDIN));
echo validatecolor($string);
?>
