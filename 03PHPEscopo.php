<?php
// ESCOPO ate onde pode ser enchergada a variavel

$exNome = 'Douglas'; 

function teste(){

global $exNome; 
// sem o Global daria erro pois a variavel $exNome esta fora da funçao
echo $exNome;

}

function teste2(){
$exNome = 'Roberto';
// A variavel recebeu um novo valor ou seja deixou de ser a GLOBAL 
/*
mas se fosse preciso deveria ser passado 
 -- Global $exNome ---
caso fosse reutilizado o mesmo valor anterior (Douglas)
*/

echo $exNome;
}

teste();
echo "<br>";
teste2();

?>