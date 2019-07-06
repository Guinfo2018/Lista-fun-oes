<?php 
 
 function mostrarMes($valor){
     $mes = ["","Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"];
     $msg = $mes[$valor];
     return $msg;
 }


echo "\n Digite um número do mês:";
$valor = (int) fgets(STDIN);


if($valor<1 or $valor>12){
    echo "Digite um valor entre 1 e 12!";
}else {
    $msg = mostrarMes($valor);
    echo $msg;
}