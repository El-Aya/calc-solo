<?php

require __DIR__ . '/autoload.php';

function lire(string $invite): ?string
{
    echo $invite;
    $ligne = fgets(STDIN);
    return $ligne === false ? null : trim($ligne);
}

$calc = new Calculatrice();

while (true) {
    echo "\n=== Calculatrice ===\n";
    echo "1. Additionner\n2. Soustraire\n3. Multiplier\n4. Diviser\n0. Quitter\n";
    $choix = lire("Choix : ");

    if ($choix === null || $choix === '0') {
        break;
    }
    if (!in_array($choix, ['1', '2', '3', '4'], true)) {
        echo "Choix invalide.\n";
        continue;
    }

    $a = (float) lire("a : ");
    $b = (float) lire("b : ");

    try {
        $resultat = match ($choix) {
            '1' => $calc->additionner($a, $b),
            '2' => $calc->soustraire($a, $b),
            '3' => $calc->multiplier($a, $b),
            '4' => $calc->diviser($a, $b),
        };
        echo "Resultat : $resultat\n";
    } catch (Exception $e) {
        echo "Erreur : " . $e->getMessage() . "\n";
    }
}

echo "Au revoir.\n";