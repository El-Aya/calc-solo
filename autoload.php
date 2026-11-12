<?php

// Charge automatiquement une classe depuis src/ quand PHP en a besoin.
spl_autoload_register(function (string $classe): void {
    $fichier = __DIR__ . '/src/' . $classe . '.php';
    if (file_exists($fichier)) {
        require $fichier;
    }
});