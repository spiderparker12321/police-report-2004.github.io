<?php
// Password Validator

$length =false;
$upper =false;
$lower=false;
$num=false;
$sym_in =false;
$sym_out=true;

$message = '';
$in_ar = ["!","%","-","_"];
$out_ar=["@","$","."];

echo "Enter password: ";
$pswd = fgets(STDIN);

if (strlen($pwrd))
    $length = true;

for ($i=0; $i<strlen($pswd);$i++){
    $ch = $pswd[$i];
    if (ctype_upper($ch))
       $upper =true;
    elseif (ctype_lower($ch))
        $lower =true;
    elseif (is_numeric($ch))
        $num = true;
    elseif (in_array ($ch, $in_ar))
        $sym_in = true;
    elseif (in_array ($ch, $out_ar))
        $sym_out = false;
    
       

   
}//for


if (!$length){
    $mesage;
}





echo $mesage;












?>
