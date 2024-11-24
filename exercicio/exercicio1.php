<?php
/*
1- Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor 
é positivo, negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual 
a Zero".

*/

//usando STDIN para reeber o que o user digita
echo "Digite um número: ";
$numero = trim(fgets(STDIN));  


if ($numero > 0) {
    echo "Valor Positivo\n";
} elseif ($numero < 0) {
    echo "Valor Negativo\n";
} else {
    echo "Igual a Zero\n";
}


