    <?php
function saudacao(): string
{
    $hora = 19;
    $saudacao = '';

    if($hora >= 0 && $hora <= 5){
        $saudacao = 'Boa Madrugada';
    }
    if($hora >= 6 && $hora <= 17){
        $saudacao = 'Bom dia';
    }

    if($hora >= 18 && $hora <= 24){
        $saudacao = 'Boa Noite';
    }

    return "$saudacao";
}

function resumirTexto(string $texto, int $limite, string $continue = '...'): string
{
    return $texto;
}

    ?>