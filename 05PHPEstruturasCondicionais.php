<?php
## Estruturas de controle

## Operador ternario 
$a = 3;
$b = 2;
echo ($a == $b)?"Sao iguais":"Não são iguais"; 
//   (Condição)?"caso seja verdadeiro":"caso seja falso" 

echo "<br>";

## If -- ElseIf/ Else If -- Else
// Usados para condições eventuais e comparativas Ex:(maior, menor...etc)
$numero1 = 1;

if ($numero1 > 1) { // if (condição) 
    echo "A variavel numero1 é maior que 1";
}elseif ($numero1 < 1) { // elseif ou else if ---- elseif (condição) ou else if (condição)
    echo "A variavel numero1 é menor que 1";
} else { // else --- Casos as alternaticas anteriores não estejam corretas
 echo "a variavel numero1 é igual";
}
echo "<br>";

// pode se utilizar sem os cochetes

    if ($numero1 > 1)  echo "A variavel numero1 é maior que 1";
    elseif ($numero1 < 1) echo "A variavel numero1 é menor que 1";
    else echo "a variavel numero1 é igual";

echo "<br>";


## Switch case 
// Usados para quando os valores forem ja pré definifos
$numero2 = 3;
switch ($numero2) { // switch (VARIAVEL a ser comparada)
    case 1: // case "COMPARADOR" ----- se compara a VARIAVEL com o COMPARADOR
        echo ("numero2 é igual a 1");
        break; // BREAK é para que saia da condição e do switch 
    case 2:
        echo ("numero2 é igual a 2");
        break;
    default: // default caso não seja encontrado o valor
        echo ("Valor nao encontrado"); 
        break;
}
echo "<br>";
?>