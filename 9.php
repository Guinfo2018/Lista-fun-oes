<?php

function divisivel($x,$y){

    if($x%$y==0){
        $msg = 1;
    }else{
        $msg = 0;
    }
    return "$msg";
    
}

echo "Digite o valor de x:";
$x = (int) fgets(STDIN);

echo "Digite o valor de y:";
$y = (int) fgets(STDIN);

$msg = divisivel($x,$y);
echo $msg;