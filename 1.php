<?php 

function temperatura ($F){
    $C = ($F - 32) * 5/9;
    return $C;
}

print "Digite a temperatura em Farenheit: ";
$F = (float) fgets(STDIN);
$C = temperatura($F);

print "$F Farenheit equivale a $C  Celsius";