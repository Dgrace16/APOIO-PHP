<?php // Para inicio da execução da escrita PHP

// Para comentario pode se utilizar ( // ou # ou /* */ )
## Sempre deve ser utilizado PONTO e VIRGULA (;)

// TIPOS DE VARIAVEIS 
/*
---------- para ser uma variavel utilizamos $NOMEVARIAVEL = Valor ou $_NOMEVARIAVEL = Valo
*/

// Basicas
$varString = "hello word"; // Variaveis STRING pode se utilizar '' ou "" 
$varInteger = 2; // Variaveis INTEGER números interios ex:(1, 2, 3, 4, 5, 6)
$varFloat = 2.5; // Variaveis FLOAT números ponto flutuante real ex:(1.0, 1.2, 1.4, 1.6, 1.8, 2.0)
$varBooleano = true; //  Variaveis  BOOLEAN Pode ser TRUE ou FALSE (Verdadeiro ou Falso)

// Compostas
$varVETOR = array(1,2); // Variavel ARRAY simples. Podese utilizar [] ou ()

$varOBJETO = (object)[]; // Variavel OBJECT Objeto array ou Matriz
$obj1 = new \stdClass; // Variavel classe vazia
$obj2 = new class{}; // variavel Classe anonima

// Especiais 
$varNulo = NULL; // variavel NULA sem valor ou ausente de valor
$arquivo = fopen("02PHPPreDefinidas.php","r"); // Variavel de leitura de arquivo ----- r é o tipo de leitura

// Existem variaveis pre definidas 

// tipo de escritas
echo "$vString"; // ECHO para ser escrito na tela
print "$varBooleano"; // PRINT tambem é utilizado para mpstrar informações
var_dump("$varInteger"); // mostra o tipo de variavel e seu valor
isset($varFloat); // para ver se a variavel existe

// = -> siginifica recebe, ele é atribuidor
// . -> operador de Concatenação
// .= -> Operador composto ele atibui a variavel dando a concatenação


// para finalizar a escrita PHP
?> 