<?php 

function hipotenusa ($a , $b){
    $hip = sqrt(($a*$a) +($b*$b));
    return $hip;
}

print "Digite o cateto A:";
$a = (int) fgets(STDIN);

print "Digite o cateto B:";
$b = (int) fgets(STDIN);

$hip = hipotenusa($a, $b);

print "A soma dos quadrados desses catetos é igual a $hip";
