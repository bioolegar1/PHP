<?php
//Arquivo index responsável pela incialização do sistema
//declare(strict_types = 1);
require_once 'sistema/configuracao.php';
include_once 'sistema/helpers.php';

$texto = "Texto para Resumir";

echo "<hr>";

//echo saudacao();
//echo '<hr>';
echo resumirTexto($texto, 15);
?>
