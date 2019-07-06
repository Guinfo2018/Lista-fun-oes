<?php 

function poligono($lados,$med){
    if($lados == 3){
        $peri = $med*3;
        $msg = "TRIÂNGULO " . $peri . "cm de perímetro";
    }elseif($lados == 4){
        $area = $med*$med;
        $msg = "QUADRADO " . $area . "cm²";
    }elseif($lados == 5){
        $msg = "PENTÁGONO";
    }
    return $msg;
}



echo "Quantos lados?";
$lados = (int) fgets(STDIN);

echo "Qual a medida do lado?";
$med = (float) fgets(STDIN);

$msg = poligono($lados, $med);
echo $msg;
