<?php
//Arquivo index responsável pela incialização do sistema
//declare(strict_types = 1);
require_once 'sistema/configuracao.php';
include_once 'sistema/helpers.php';

$texto = "Texto para Resumir";

$strig = 'Texto';
$int = 10;
$float = 3.1;
$bool = true; //ou false
$null = null; //diferente de vazio


//var_dump($int, $float, $bool, $null, $strig);


echo saudacao();
echo '<hr>';
echo resumirTexto($texto, 100, 'continue');
?>
