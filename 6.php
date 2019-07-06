<?php
function soma($n1, $n2){  
    
    for ($i= 1; $i <= $n2 ; $i++) { 
        $n1 = $n1 + $i;
    }
    
    $n1 = $n1 -1;
    
    return $n1;
    
}

echo "Digite o primeiro número:";
$n1 = (int) fgets(STDIN);

echo "Digite o segundo número:";
$n2 = (int) fgets(STDIN);

$msg = soma($n1,$n2);
echo $msg;