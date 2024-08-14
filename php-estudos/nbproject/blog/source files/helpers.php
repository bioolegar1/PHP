    <?php

//    function valitadecpf3(string $cpf): bool
//    {
//        if (strlen($cpf) != 11 ||preg_match('/(\d)\1{10}/', $cpf)){
//            return false;
//        }
//            return true;
//    }


    function validateCPF(string $cpf): bool
    {
        $cpf = limparNumero($cpf);

        if (strlen($cpf) != 11 or preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }
        return true;
    }

    function limparNumero(string $numero): string
    {
        return preg_replace('/[^0-9]/', '', $numero);
    }
//    function validateCPF(string $cpf): bool
//    {
//        if (strlen($cpf) != 11 || preg_match('/(\d)\1{10}/', $cpf)) {
//            return false;
//        }
//
//        return true; // Se passou nas verificações, o CPF é válido
//    }


    /**
     * limpa um texto substituindo os caracteres especiais
     * @param $string
     * @return string
     */
    function slug($string) {
        // Substitui os caracteres de nova linha e tabulação por espaço
        $string = preg_replace('/[\t\n\r]/', ' ', $string);

        // Substitui múltiplos espaços por um único espaço
        $string = preg_replace('/\s{2,}/', ' ', $string);

        // Lista de substituições de caracteres especiais
        $list = array(
            'Š' => 'S',
            'š' => 's',
            'Đ' => 'Dj',
            'đ' => 'dj',
            'Ž' => 'Z',
            'ž' => 'z',
            'Č' => 'C',
            'č' => 'c',
            'Ć' => 'C',
            'ć' => 'c',
            'À' => 'A',
            'Á' => 'A',
            'Â' => 'A',
            'Ã' => 'A',
            'Ä' => 'A',
            'Å' => 'A',
            'Æ' => 'A',
            'Ç' => 'C',
            'È' => 'E',
            'É' => 'E',
            'Ê' => 'E',
            'Ë' => 'E',
            'Ì' => 'I',
            'Í' => 'I',
            'Î' => 'I',
            'Ï' => 'I',
            'Ñ' => 'N',
            'Ò' => 'O',
            'Ó' => 'O',
            'Ô' => 'O',
            'Õ' => 'O',
            'Ö' => 'O',
            'Ø' => 'O',
            'Ù' => 'U',
            'Ú' => 'U',
            'Û' => 'U',
            'Ü' => 'U',
            'Ý' => 'Y',
            'Þ' => 'B',
            'ß' => 'Ss',
            'à' => 'a',
            'á' => 'a',
            'â' => 'a',
            'ã' => 'a',
            'ä' => 'a',
            'å' => 'a',
            'æ' => 'a',
            'ç' => 'c',
            'è' => 'e',
            'é' => 'e',
            'ê' => 'e',
            'ë' => 'e',
            'ì' => 'i',
            'í' => 'i',
            'î' => 'i',
            'ï' => 'i',
            'ð' => 'o',
            'ñ' => 'n',
            'ò' => 'o',
            'ó' => 'o',
            'ô' => 'o',
            'õ' => 'o',
            'ö' => 'o',
            'ø' => 'o',
            'ù' => 'u',
            'ú' => 'u',
            'û' => 'u',
            'ý' => 'y',
            'þ' => 'b',
            'ÿ' => 'y',
            '/' => '-',
            ' ' => '-',
            '.' => '-',
            '!' => '-',
            '$' => '-',
            '%' => '-',
            '&' => '-',
            '@' => '-',
            '#' => '-',
            ':' => '-',
            '"' => '',
            "'" => '',
            '(' => '',
            ')' => '',
            '[' => '',
            ']' => '',
            '{' => '',
            '}' => '',
            '\\' => '',
            '+' => '-',
            '=' => '-',
            ';' => '-',
            ',' => '-',
            '?' => '-',
            '^' => '-',
            '~' => '-',
            '`' => '-'
        );

        // Substitui caracteres especiais
        $string = strtr($string, $list);

        // Substitui múltiplos hífens por um único hífen
        $string = preg_replace('/-{2,}/', '-', $string);

        // Remove hífens no início e no final da string
        $string = trim($string, ' ');

        // Converte para minúsculas
        $string = strtolower($string);

        return $string;
    }






    /**
     * Formata uma data usando Arrays
     * @return string
     */
        function dataAtual() : string
        {
            $diaMes = date("d");
            $diaSemana = date("w");
            $mes = date("n")-1;
            $ano = date("Y");

            $nomesDiasDaSemana = [
                'domingo',
                'segunda-feira',
                'terça-feira',
                'quarta-feira',
                'quinta-feira',
                'sexta-feira',
                'sábado'
        ];
            $nomesDosMeses = [
            'janeiro',
                'fevereiro',
                'março',
                'abril',
                'maio',
                'junho',
                'julho',
                'agosto',
                'setembro',
                'outubro',
                'novembro',
                'dezembro'
        ];

            $dataFormatada = $nomesDiasDaSemana [$diaSemana]. ', '. $diaMes. ' '. $nomesDosMeses[$mes]. ' de '. $ano;
            return $dataFormatada;


        }







    /**
     * @param string $url
     * @return string
     */
    function url(string $url): string
    {
        $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');
        $ambiente = ($servidor == 'localhost') ? 'URL_DESENVOLVIMENTO' : 'URL_PRODUCAO';

        if(str_starts_with($url, '/')){
            return $ambiente . $url;
        }

        return $ambiente . '/' .$url;
    }

    /**
     * @return bool
     */
    function localhost(): bool
    {
        $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');
        if ($servidor == "localhost") {
            return true;
        }
        return false;
    }





    /**
     * valida uma url usando os padrões determinado nos filtros determinados
     * @param string $url
     * @return bool
     */
    function validarUrl(string $url): bool
    {
        if(mb_strlen($url) < 10){
            return false;
        }
        if(!str_contains($url, '.')){
            return false;
        }
        if (str_contains($url, 'http://')  or str_contains($url, 'https://')) {
            return true;
        }
        return false;
    }



    /**
     * valida se é uma url mesmo
     * @param string $url
     * @return bool
     */
    function validarUrlComFiltro(string $url) :bool
    {
        return filter_var($url, FILTER_VALIDATE_URL);
    }

    /**
     * valida se o email é válido ou não.
     * @param string $email
     * @return bool
     */
    function validarEmail(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }



    /**
     * conta o tempo decorrido de uma data
     * @param string $data carrega a data informada pelo sistema
     * @param return string|void
     * @param $differenca string calcula a diferença da data inserida pelo sistema e a atual
     * @param $agora converte o valor da data fornecida pelo sistema de agora atraves do srtotime em int
     * @param $tempo data ate o tempod e agora convertido em int
     * @param $contarTempo recebe o tempo informado no arquiv index.php
     */
        function contarTempo(string $data)
        {
            $agora = strtotime(date('Y-m-d H:i:s')); ;
            $tempo = strtotime($data);
            $diferenca = $agora - $tempo;

            $segundos = $diferenca;
            $minutos = round($diferenca / 60);
            $horas = round($diferenca / 3600);
            $dias = round($diferenca / 86400);
            $semanas = round($diferenca / 604800);
            $meses = round($diferenca / 2600640);
            $anos = round($diferenca / 31207680);
            $decadas = round($diferenca / 312076800);

            if($segundos <= 60){
                return 'agora';
            }elseif ($minutos <= 60) {
                return $minutos == 1 ? 'há 1 minuto' : 'há ' . $minutos . ' minutos';
            }elseif ($horas <= 24) {
                return $horas == 1 ? 'há 1 hora' : 'há ' . $horas . ' horas';
            } elseif ($dias <= 7) {
                return $dias == 1 ? 'ontem' : 'há ' . $dias . ' dias';
            }elseif ($semanas <= 4) {
                return $semanas == 1 ? 'há 1 semana' : 'há ' . $semanas . ' semanas';
            }elseif ($meses <= 12) {
                return $meses == 1 ? 'há 1 mês' : 'há ' . $meses . ' meses';
            } elseif ($anos <= 10) {
                return $anos == 1 ? 'há 1 ano' : 'há ' . $anos . ' anos';
            }elseif ($decadas <= 100) {
                return $decadas == 1 ? 'decada' : 'há ' . $decadas . ' decadas';
            }
        }


    /**
     * Formata um valor com ponto e virgula
     * @param float $valor
     * @return string
     */


    function formatarValor(float $valor = null): string
        {
            return 'R$ '. number_format(($valor ? $valor : 0), 2, ',', '.');
        }

    /**
     * @param int $numero
     * @return string
     */
        function formatarNumero(int $numero = null): string
        {
            return number_format(($numero ? $numero : 0), 0, '.' . '.');
        }

function saudacao(): string
{
    $hora = date('H'); //date recebe a data/hora atual
//
//    if($hora >= 0 && $hora <= 5){
//        $saudacao = 'Boa Madrugada';
//    }elseif ($hora >= 6 && $hora <= 12) {
//        $saudacao = 'Bom Dia';
//    }elseif ($hora >= 13 && $hora <= 18) {
//        $saudacao = 'Boa Tarde';
//    }
//    else {
//        $saudacao = 'Boa noite!';
//    }
//
//    switch ($hora){
//        case $hora >= 0 && $hora <= 5 :
//            $saudacao = 'Boa Madrugada';
//            break;
//
//        case $hora >= 6 && $hora <= 12:
//            $saudacao = 'Bom Dia';
//            break;
//
//        case $hora >= 13 && $hora <= 18 :
//            $saudacao = 'Boa Tarde';
//            break;
//        default:
//            $saudacao = 'Boa noite!';
//    }

    $saudacao = match (true){
        $hora >= 0 and $hora <= 5 => 'Boa Madrugada',
        $hora >= 6 and $hora <= 12 => 'Bom Dia',
        $hora >= 13 and $hora <= 18 => 'Boa tarde',
        default =>'Boa noite'
    };


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