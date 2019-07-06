<?php 


function conversao($pol){
    $cm = $pol*2.54;
    return $cm;
}

echo "Quantas polegadas?";
$pol = (float) fgets(STDIN);

$msg = conversao($pol);
echo $msg;