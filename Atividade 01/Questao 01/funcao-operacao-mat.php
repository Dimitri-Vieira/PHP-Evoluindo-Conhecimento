<?php

function operacaoMatematica (int $num1, int $num2, string $operacao) : float{
    return match ($operacao) {
        "soma" => $num1 + $num2,
        "subtração" => $num1 - $num2,
        "multiplicação" => $num1 * $num2,
        "divisão" => $num1 / $num2,
    };
}