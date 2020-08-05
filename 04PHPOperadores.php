<?PHP
## Operadores 

$varNome = 'Douglas';// (=) -> siginifica recebe, ele é atribuidor
echo ($varNome . " ". "Aluno" );// (.) -> operador de Concatenação ------ Douglas Aluno 
echo "<br>"; // para pular linha 
$varNome .= ""."Estudante"; // (.=) -> Operador composto ele atibui a variavel dando a concatenação 
echo ($varNome); // DouglasEstudante
echo "<br>";

## Operadores de Atributos
echo 'Operadores de Atributos';
echo "<br>";
$n1=2;
$n2=5;
$n3=10;

$n1 += 5;// +=   -> 7 soma $n1 + 5 (2 + 5 = 7)
$n2 -= 2;// -=   -> 3 subtrai $n2 - 2 (5 - 2 = 3) 
$n3 *= 3;// *=   -> 30 multiplica $n3 * 3 (10 * 3 = 30)

echo($n1);

echo "<br>";
echo "<br>";

## Operadores aritimeticos
echo 'Operadores aritimeticos';
echo "<br>";
echo(2 + 1); // Adição  ---- + ----
echo "<br>";
echo(2 - 1); // Subtração ---- - ----
echo "<br>";
echo(2 * 1); // Multiplicação ---- * ----
echo "<br>";
echo(2 / 1); // Divisão ---- / ----
echo "<br>";
echo(2 % 1); // Modulo ou Resto da Divisão ---- % ----
echo "<br>";
echo(2 ** 1); // Exponemciação ---- ** ----

echo "<br>";
echo "<br>";

## Operadores de comparação
echo 'Operadores de comparação';
echo "<br>";
var_dump(2 > 1); // Maior ---- > ----
echo "<br>";
var_dump(2 >= 1); // Maior e Igual ---- >= ----
echo "<br>";
var_dump(2 < 1); // Menor ---- < ----
echo "<br>";
var_dump(2 <= 1); // Menor e Igual ---- <= ----
echo "<br>";
var_dump(2 == 1); // Igual ---- == ---- Igualdade de valor 
echo "<br>";
var_dump(2 === 1); // Identico ---- === ---- Identico de valor e tipo 
echo "<br>";
var_dump(2 != 1); // Difernete ---- != ----
echo "<br>";
var_dump(2 <> 1); // Difernete ---- <> ----
echo "<br>";
var_dump(2 != 1); // Identidade Difernete ---- !== ---- Diferernte de valor ou de tipo 
echo "<br>";
var_dump(3<=>8); // SPACESHIP ---- <=> ---- se for menor(<1), se for Igual (=0) e se for maior(>-1)
echo "<br>";

$a = NULL;
$b = NULL;
$c = 100;
var_dump($a ?? $b ?? $c); // Valores NULOS ---- ?? ---- ele ignora valores nulos e mostra o que tem valor
echo "<br>";
echo "<br>";

## Operadores de Incremento e decremento
echo 'Operadores de Incremento e decremento';
echo "<br>";
$n1 = 1;
echo ++$n1. " " ."++n1". " ". "Pré-incremento "; // Pré-incremento de 1
echo "<br>";
echo $n1++ . " " ."n1++". " ". "Incremento "; // Incremento de 1
echo "<br>";
echo $n1 . " " ."Incremento é feito "; 
echo "<br>";
echo --$n1. " " ."--n1". " ". "Pré-decremento "; // Pré-decremento de 1
echo "<br>";
echo $n1-- . " " ."n1++". " ". "Decremento "; // Decremento de 1
echo "<br>";
echo  $n1 . " " ."Decremento é feito "; 
echo "<br>";

## Operador ternario 
$a = 3;
$b = 2;
echo "<br>";
echo ($a == $b)?"Sao iguais":"Não são iguais"; // (Condição)?"caso verdadeiro":"caso falso" 
?>