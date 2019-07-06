<?php 

function pesoIdeal($height, $sex) {
    if ($sex == "2"){
        $peso = (72.7 * $height)-58;
    }elseif ($sex=="1"){
        $peso = (62.1 * $height)-44.7;
    }else{
    }
    return $peso;
}

echo "Calculo de peso ideal\n";
echo "1- Feminino\n";
echo "2- Masculino\n";
echo "Qual o seu sexo?\n";
$sex = (float) fgets(STDIN);
echo "Qual a sua altura?\n";
$height = (float) fgets(STDIN);

$peso = pesoIdeal($height, $sex);
echo "$peso";
