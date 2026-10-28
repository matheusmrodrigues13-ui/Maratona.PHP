<?php

$peso = 102;
$altura = 1.70;

    $imc = (($altura * $altura)/$peso)*1000 ;

        if ($imc < 18.5) {
            echo "$imc: Abaixo do peso";
        } elseif ($imc < 25) {
            echo "$imc: Peso adequado";
        } elseif ($imc < 30) {
            echo "$imc:Sobrepeso ";
        } elseif ($imc < 35) {
            echo "$imc: grau I ";
        } elseif ($imc < 40) {
            echo "$imc:Obesidade grau II";
        } else {
            echo "$imc:Obesidade grau III";
        }

?>

