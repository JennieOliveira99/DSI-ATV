<?php
/*
2 - Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem crescente 
em relação aos seus valores. Exemplo, para A=5, B=4. Você deve imprimir na tela: "4 5". Dica, 
utilizem concatenação. 

*/


// Recebe os valores A e B
echo "Digite o valor de A: ";
$A = trim(fgets(STDIN));  // Recebe o valor de A
echo "Digite o valor de B: ";
$B = trim(fgets(STDIN));  // Recebe o valor de B

// Verifica qual é o maior e qual é o menor valor e imprime em ordem crescente
if ($A < $B) {
    echo $A . " " . $B . "\n";  // Se A é menor que B, imprime A e depois B
} else {
    echo $B . " " . $A . "\n";  // Se B é menor que A, imprime B e depois A
}

