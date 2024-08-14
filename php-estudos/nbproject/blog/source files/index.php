<?php
//Arquivo index responsável pela incialização do sistema
require_once "./sistema/configuracao.php";
include_once "./helpers.php";
include_once "./sistema/Nucleo/Mensagem.php";




$msg = new Mensagem();
echo $msg-> renderizar();
echo '<hr>';
var_dump($msg);














//
//$cpf = '12..... .3456...78910';
//var_dump(validateCPF($cpf));






/*
$numero = 2;
//while($numero <= 10){
//    echo $numero ++;
//}
//var_dump($numero);

for($i = 0; $i <= 10; $i++){
//    echo ($i % 2 ? $i .' par' : $i . ' impar'). '<br>';
    echo $i. ' x '. $numero. ' = ' . $i*$numero . '<br>';
}

*/


//echo saudacao();




//echo slug("aqui dentro '' ");
//echo slug("Adão \" Negro \" - '2022' "). '<hr>';
//echo slug("Avatar 2: O Caminho da Água"). '<hr>';
//echo slug("Não! Não Olhe!"). '<hr>';
//echo slug("Sonic 2 - O filme"). '<hr>';
//echo slug("NOVA SÉRIE NO DISNEY +!"). '<hr>';
//echo slug("100 Melhores Filmes"). '<hr>';
//echo slug("!@#%#$%&%¨*&(@#$!!@#"). '<hr>';









//
//echo dataAtual();







//$meses =  [
//    'Janeiro',
//    'Fevereiro',
//    'Março'
//];
//
//foreach ($meses as $chave => $valor) {
//    echo $chave.'<br>';
//}
//echo '<hr>';
//
//
//echo $meses[0];
//echo '<hr>';
//
//
//var_dump($meses);
//
//
//echo '<hr>';
//echo $_SERVER['SCRIPT_NAME'];
//echo '<hr>';
//var_dump($_SERVER);
//echo '<hr>';















//var_dump(localhost());
//
//echo url('admin');
//
//
//
//
//
//
//
//echo SITE_NOME;
//echo '<hr>';
//echo constant("SITE_NOME");
//
//
//
//
//
//
//
//
//
//
//
//$url = 'http://unset.';
//echo '<hr>';
//
//var_dump(validarUrl($url));
//echo '<hr>';
//var_dump(validarUrlComFiltro($url));
//
//
//echo '<hr>';
//
//if(validarEmail('teste@gmail.com')) {
//    echo 'e-mail valido';
//}else {
//    echo 'e-mail inválido';
//}
//echo '<hr>';
//
//if(validarUrlComFiltro('teste@gmail.com')) {
//    echo 'URL válido';
//}else {
//    echo 'URL inválido';
//}
//
//
//
//
//var_dump(validarUrl('http://teste.com'));
//
//var_dump(validarEmail('bioolegari@gmail.com'));
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//echo contarTempo("2001-03-27 20:45:00");
//
//echo formatarValor();
//
//$texto = "<h1>Texto</h1> <p>para </p> Resumir";
//echo "<hr>";
//echo resumirTexto($texto, 8);
//echo "<hr>";
//
//echo '<hr>';
//echo formatarNumero(10000000000);
//echo '<hr>';
//$valor = 5;
//if($valor){
//    echo $valor;
//}else {
//    echo 0;
//}
//echo '<hr>';
//
////Resumindo a função com operador ternário
//echo ($valor ? $valor : 0);
//
//echo '<hr>';
////resumindo mais ainda o operador ternário
//echo $valor ?: 0;
//
//
//


?>
