<?php

$bandas = [
    "Aerosmith",
    "Guns n' Roses",
    "Maroon 5",
    "Sorriso Maroto",
    "Aviões do Forró"
];

echo "<ul>";
foreach ($bandas as $cadaBanda) {
    echo "<li>{$cadaBanda}</li>";
}
echo "</ul>";