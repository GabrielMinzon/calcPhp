<?php

namespace APP\model;

class Calculadora
{
    public static function soma (int $a, int $b): int
    {
        return $a + $b;
    }

    public static function subtracao (int $a, int $b): int
    {
        return $a - $b;
    }

    public static function multiplicacao (int $a, int $b): int
    {
        return $a * $b;
    }

    public static function divisao (int $a, int $b): float
    {   

        if ($b == 0) {
            throw new \InvalidArgumentException('Division by zero');
        }
        return $a / $b;
    }

}
