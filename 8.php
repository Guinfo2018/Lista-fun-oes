<?php 

function mostraDia ($valor){
    $dia = ["","DOM","SEG","TER","QUA","QUI","SEX","SAB"];
    $msg = $dia[$valor];
    return $msg;
}

echo "Digite um número do dia da semana:";
$valor = (int) fgets(STDIN);

if($valor<1 or $valor>7){
    echo "Número não correspondente ao um dia da semana";
}else{
    $msg = mostraDia($valor);
    echo $msg;
}