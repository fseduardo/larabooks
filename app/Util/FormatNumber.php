<?php

namespace App\Util;

class FormatNumber
{
    /**
     * Converte um valor monetário do formato brasileiro para um decimal.
     * Exemplo: '1.234,56' se torna '1234.56'.
     *
     * @param string $value Valor monetário no formato brasileiro.
     * @return string Valor em formato decimal.
     */
    public static function formatDecimal($value)
    {
        // Remove os pontos de milhar e substitui a vírgula por ponto.
        return str_replace(',', '.', str_replace('.', '', $value));
    }

    /**
     * Formata um valor decimal para o formato monetário brasileiro.
     * Exemplo: '1234.56' se torna '1.234,56'.
     *
     * @param float $value Valor decimal.
     * @return string Valor formatado no padrão monetário brasileiro.
     */
    public static function formatReal($value)
    {
        // Formata o número com duas casas decimais, separador de milhar e vírgula para decimal.
        return number_format($value, 2, ',', '.');
    }
}

// Exemplos de uso:
// echo Util::formatDecimal('2.500,99'); // Retorna '2500.99'
// echo Util::formatReal(2500.99); // Retorna '2.500,99'
