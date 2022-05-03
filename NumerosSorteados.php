<?php
    //Resposta da questão 3 "Programa de numeros sorteados"
    //Código criado por: Cristiano Simão dos Santos

    $sorteados = [];
    for($x = 0; $x <20; $x++){
        $sorteados[]= rand(1,10);
    }
    $quantidade = array_count_values($sorteados);
    
    echo "Array sorteado:[";
    foreach ($sorteados as $n){
        echo $n.",";
    }
    echo "]\n";
    
    echo "Os números que não se repetiram foram:";
    foreach ($quantidade as $numero => $valor){
        if($valor == 1){
            echo $numero.", ";
        }
    }
    
?>