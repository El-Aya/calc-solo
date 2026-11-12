<?php

require __DIR__ . '/../autoload.php';

$total = 0;
$echecs = 0;

function verifier(bool $condition, string $message): void
{
    global $total, $echecs;
    $total++;
    if ($condition) {
        echo "[OK] $message\n";
    } else {
        echo "[ECHEC] $message\n";
        $echecs++;
    }
}

foreach (glob(__DIR__ . '/test_*.php') as $fichier) {
    require $fichier;
}

echo "\n$total test(s), $echecs echec(s).\n";
exit($echecs === 0 ? 0 : 1);