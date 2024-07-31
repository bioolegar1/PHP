    <?php
function saudacao(): string
{
    $hora = date('H'); //date recebe a data/hora atual

    if($hora >= 0 && $hora <= 5){
        $saudacao = 'Boa Madrugada';
    }elseif ($hora >= 6 && $hora <= 12) {
        $saudacao = 'Bom Dia';
    }elseif ($hora >= 13 && $hora <= 18) {
        $saudacao = 'Boa Tarde';
    }
    else {
        $saudacao = 'Boa noite!';
    }


    return "$saudacao";
}

function resumirTexto(string $texto, int $limite, string $continue = '...'): string
{
    $textoLimpo = trim($texto);
    if(mb_strlen($textoLimpo) <= $limite) {
        return $textoLimpo;
    }

    $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos(mb_substr($textoLimpo, 0, $limite), ''));

    return $resumirTexto.$continue;
}

    ?>