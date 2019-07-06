<?php

function media ($n1, $n2){

    $media = ($n1+$n2)/2;
    
    if($media>6){
        $msg = $media;
        $msg1 = "PARABÉNS! Você foi aprovado!";
    }else{
        $msg = $media;
        $msg = "Você ficou em exame";
    }
    return "Sua média: $msg , situação: $msg1";
}

echo "Digite a primeira nota:";
$n1 = (int) fgets(STDIN);

echo "Digite a segunda nota:";
$n2 = (int) fgets(STDIN);

$media = media($n1, $n2);

echo $media;
