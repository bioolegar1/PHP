<?php

/** Comando return nas funções calculo do triplo
 * @param $numero
 * @return float|int
 */
function triplo($numero)
{
    $x=$numero * 3;
    return $x;
}
$valor =5;
echo "O triplo de $valor é: ".triplo($valor);

echo '<hr>';


/** Comando return nas funções Array de capitais
 * @return array
 */
function capitais()
{
    $capitais [] = "Natal";
    $capitais [] = "Belo Horizonte";
    $capitais [] = "Rio de Janeiro";
    $capitais [] = "Goiânia";
    $capitais [] = "Brasília";
    return $capitais;
}
//inicio do programa principal
$nome = capitais();

for($i = 0; $i<sizeof($nome);$i++){
    echo"\$nome[$i] vale $nome[$i] <br>";
}
echo '<hr>';


/** Mostra a data atual por extenso
 * @return void
 */
function retorna_data()
{
    $agora = time();
    $data = getdate($agora);

    if($data ["wday"]==0){echo "Domingo";}
    elseif($data ["wday"]==1){echo "Segunda-feira, ";}
    elseif ($data["wday"]==2){echo "Terça-feira, ";}
    elseif ($data["wday"]==3){echo "Quarta-feira, ";}
    elseif ($data["wday"]==4){echo "Quinta-feira, ";}
    elseif ($data["wday"]==5){echo "Sexta-feira, ";}
    elseif ($data ["mday"]==6){echo "Sabado, ";}
    if ($data ["mon"]==1){$mes = "Janeiro";}
    elseif ($data ["mon"]==2){$mes = "Fevereiro";}
    elseif ($data["mon"]==3){$mes = "Março";}
    elseif ($data["mon"]==4){$mes = "Abril";}
    elseif ($data["mon"]==5){$mes = "Maio";}
    elseif ($data["mon"]==6){$mes = "Junho";}
    elseif ($data["mon"]==7){$mes = "Julho";}
    elseif ($data["mon"]==8){$mes =  "Agosto";}
    elseif ($data["mon"]==9){$mes = "Setembro";}
    elseif ($data["mon"]==10){$mes = "Outubro";}
    elseif ($data["mon"]==11){$mes = "Novembro";}
    elseif ($data["mon"]==12){$mes = "Dezembro";}
    $data_atual = $data ["mday"] . " de " . $mes. " de " . $data["year"];
    return $data_atual;

}
$hoje = retorna_data();
echo $hoje;

echo '<hr>';


/*
 * Passagem de parâmetros: valor e referência
 */
function dobro($valor)
{
    $valor = 2 * $valor;
}
function duplica(&$valor)
{
    $valor = 2 * $valor;
}

$valor = 5;
dobro($valor);
echo $valor . "<br>";
duplica($valor);
echo $valor . "<br>";

echo '<hr>';


/**
 * retora valores predefinidos como valor e referencia.
 * @param $capital
 * @param $estado
 * @return void
 */
function capital($capital, $estado = "Um estado Brasileiro")
{
    echo"$estado, capital : $capital<br>";
}
capital("Natal", "RN");
capital("Belo Horizonte", "MG");
capital ("Goiânia");

echo "<hr>";




/**Função recursiva
 * @param $valor
 * @return void
 */
function recursiva($valor)
{
    if ($valor != 0){
        echo "Foia chamada a função recursiva passando o valor $valor <br>";
        recursiva($valor -1);
    }
}
recursiva(8);
echo "<hr>";



function fatorial($numero)
{
    if($numero < 0){
        return -1;
    }
    if($numero <= 1){
        return 1;
    }
    return $numero * fatorial($numero - 1);
}
echo "O fatorial de 3 é " . fatorial(3);
echo "O fatorial de 4 é " . fatorial(4);
echo "O fatorial de 5 é " . fatorial(5);

echo "<hr>";

//Exemplo de Classe no PHP

class Loja {
    var $itens;
    function adiciona($codigo,$quantidade){
        if(isset($this->itens[$codigo]))
            $this->itens[$codigo] += $quantidade;
        else
            $this->itens[$codigo] = $quantidade;
}
function remove($codigo, $quantidade)
    {

    }
}