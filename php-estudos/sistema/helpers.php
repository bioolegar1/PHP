    <?php
        function formatarValor(float $valor = null): string
        {
            return 'R$ '. number_format(($valor ? $valor : 0), 2, ',', '.');
        }

        function formatarNumero(string $numero = null): string
        {
            return number_format(($numero ? $numero : 0), 0, '.' . '.');
        }

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
/**
 *Resume um texto
 *
 * @param string $texto texto para resumir
 * @param int $limite quantidad de caracteres
 * @param string $continue opcional - o que deve ser exibido ao final do resumo
 * @return string texto resumido
 */
function resumirTexto(string $texto, int $limite, string $continue = '...'): string
{
    $textoLimpo = trim(strip_tags($texto));
    if(mb_strlen($textoLimpo) <= $limite) {
        return $textoLimpo;
    }

    $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos(mb_substr($textoLimpo, 0, $limite), ''));

    return $resumirTexto.$continue;
}

    ?>