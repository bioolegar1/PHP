<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    //recupera os npumeros enviados pelo formulário
    $numero1 = isset($_GET['numero1']) ? (int)$_GET['numero1'] : 0;
    $numero2 = isset($_GET['numero2']) ? (int)$_GET['numero2'] : 0;

    //calcula a multiplicação
    $resultado = $numero1 * $numero2;

    //Exibi o resultado
    echo "<h2>Resultado:</h2>";
    echo "<p>$numero1 X $numero2 = $resultado</p>";
        }else {

    //Caso o formulário não tenha sido enviado
    echo "<p>Por favor, envie os números através do formulário.</p>";
}
    {
}
?>

