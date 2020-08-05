<?php
## Estruturas de repetição

## For
for ($i=0; $i < 3; $i++) {  // for(variavel comparadora; Condição ; passo que a variavel ira pular)
    echo ("$i" . "<br>");
}

## foreach 
$meses = array(
"Janeiro","Fevereiro", "Março", "Abril",
"Maio","Junho", "Julho", "Agosto",
"Setembro","Outubro", "Novembro", "Dezembro"
);

foreach ($meses as $mes) {
     /* foreach(VariavelaPercorrer as VariavelRecebida)
     ou
     foreach(VariavelaPercorrer as VariavelContadora => VariavelRecebida)*/

    echo("O mês no momento é: ". $mes. "<br>");
}



?>
