<?php
// --------------------------------------------------------------------------------------------------------------------
    /**
     * Calcula o Salário Anual a partir do Salário Mensal
     * 
     * @param float $salarioMensal -> Salário Mensal
     * @return float $salarioAnual -> Salário Anual
     */
    // Calculo do Salário Anual
    function calcularSalarioAnual(float $salarioMensal): string {
        // 13º Salário, + 1/3 de férias
        $tercoDeFerias = $salarioMensal / 3;

        $salarioAnual = ($salarioMensal * 13) + $tercoDeFerias;
        return converterNumberParaMonetario($salarioAnual);
    }
//----------------------------------------------------------------------------------------------------------------------

    // Quandos anos faltam para se aposentar
    /**
     * Calcula quantos anos faltam para a pessoa se aposentar
     * 
     * @param int $idade -> Idade da pessoa
     * @param string $sexo -> Sexo da pessoa
     * @return int $anos_necessarios_para_aposentar -> Anos necessários para se aposentar
    */
    function calcularAnosNecessariosParaAposentar(int $idade, string $sexo) {
        $anos_necessarios_para_aposentar = $sexo == "M" ? IDADE_APOSENTADORIA_MASCULINO : IDADE_APOSENTADORIA_FEMININO;
        return $anos_necessarios_para_aposentar - $idade;
    }

// --------------------------------------------------------------------------------------------------------------------
    /**
     * Recebe um valor número e retorna um valor monetário
     * 
     * @param float $number -> Valor Númerico
     * @return string $number -> Numero formatado - Valor Monetário
     * 
     */
    // Transformar um numero em valor monetário
    function converterNumberParaMonetario($number): string {
        return number_format($number, 2, ',', '.');
    }
// --------------------------------------------------------------------------------------------------------------------
?>