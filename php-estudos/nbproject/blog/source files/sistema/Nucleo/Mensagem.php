<?php

/**
 * @author Vanderson H. Santos <bioolegari@gmail.com>
 */
class Mensagem
{
    private $texto;
    private $css;

    /**
     * Metodo responsavel pela renderização
     * @return string
     */
    public function renderizar() : string
    {
        return $this->texto = $this->filtrar('Mensagem de Teste');
    }

    private function filtrar(string $mensagem) : string
    {
        return filter_var($mensagem, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
}

