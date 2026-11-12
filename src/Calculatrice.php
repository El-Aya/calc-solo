<?php

/**
 * Classe Calculatrice : les quatre operations de base.
 */
class Calculatrice
{
    public function additionner(float $a, float $b): float
    {
        return $a + $b;
    }

    public function soustraire(float $a, float $b): float
    {
        return $a - $b;
    }

    public function multiplier(float $a, float $b): float
    {
        return $a * $b;
    }

    /**
     * @throws Exception si le diviseur est zero
     */
    public function diviser(float $a, float $b): float
    {
        if ($b == 0) {
            throw new Exception("Division par zero impossible.");
        }
        return $a / $b;
    }
}