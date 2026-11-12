<?php

$c = new Calculatrice();

verifier($c->additionner(2, 3) === 5.0, 'additionner(2, 3) = 5');
verifier($c->soustraire(10, 4) === 6.0, 'soustraire(10, 4) = 6');
verifier($c->multiplier(3, 4) === 12.0, 'multiplier(3, 4) = 12');
verifier($c->diviser(10, 4) === 2.5, 'diviser(10, 4) = 2.5');

$exception = false;
try {
    $c->diviser(5, 0);
} catch (Exception $e) {
    $exception = true;
}
verifier($exception, 'diviser(5, 0) leve une exception');