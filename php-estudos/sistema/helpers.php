    <?php
function saudacao(): string
{
    $hora = 15;

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

//function resumirTexto(string $texto, int $limite, string $continue = '...'): string
{
//    return $texto;
}

    ?>