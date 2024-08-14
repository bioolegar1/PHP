<?php

/**
 * Validador de CPF
 * @param $number
 * @return bool
 */
function validateCPF($number) {
    // Remove qualquer caractere que não seja número
    $cpf = preg_replace('/[^0-9]/', "", $number);

    // Verifica se o CPF tem 11 dígitos ou é uma sequência de dígitos repetidos
    if (strlen($cpf) != 11 || preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }
        
    // Validação do primeiro dígito verificador
    for ($t = 9; $t < 11; $t++) {
        $sum = 0;
        for ($i = 0; $i < $t; $i++) {
            $sum += $cpf[$i] * (($t + 1) - $i);
        }
        $result = ($sum * 10) % 11;
        $result = ($result == 10 || $result == 11) ? 0 : $result;

        if ($cpf[$t] != $result) {
            return false;
        }
    }

    return true;
}

