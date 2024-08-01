<?php
//Arquivo index responsável pela incialização do sistema
require_once 'sistema/configuracao.php';
include_once 'sistema/helpers.php';

$texto = "<h1>Texto</h1> <p>para </p> Resumir";
echo "<hr>";
echo resumirTexto($texto, 100);
echo "<hr>"
?>
