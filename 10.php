<?php 

function maiorValor($a,$b){
    if($a>$b){
        $msg =  "$a é o maior valor.";
    }elseif($b>$a){
        $msg = "$b é o maior valor.";
    }elseif($b == $a){
        $msg = "$a é igual a $a";
    }else{}
    
    return $msg;
}




echo "Digite o primeiro número:";
$a = (float) fgets(STDIN);

echo "Digite o segundo número:";
$b = (float) fgets(STDIN);

$msg = maiorValor($a,$b);
echo $msg;