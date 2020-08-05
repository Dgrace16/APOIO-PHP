<?php
### Variaveis Pré definidas ou Array Super global do PHP ###

$nome = $_GET["a"]; // Ele $_GET terá todas as variaveis obitidas da variavel
/*
 URL = localhost/pasta/ex.php?a=123
  ------ apartir do ponto de esclamação (?) e depois seu valor ------

 para mais variaveis a serem repassadas

  URL = localhost/pasta/ex.php?a=123&B=oi
 ------ apartir do E comercial (&) e depois o outro valor ------
 */

 $ip = $_SERVER["REMOTE_ADDR"]; // Para pegar o IP de provedor do /porovedor de acesso 
 // $_SERVER ele pega informacoes do ambiente (Usuario e Servidor)

 $ip2 = $_SERVER["SCRIPT_NAME"]; // Ele ira saber informações de log de acesso (Informações do usuario)

 
?>