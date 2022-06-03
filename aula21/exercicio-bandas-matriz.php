<?php

$bandas = [
    ["Aerosmith", 10],
    ["Guns n' Roses", 25],
    ["Maroon 5", 8],
    ["Sorriso Maroto", 14],
    ["Aviões do Forró", 20],
];

foreach ($bandas as [$cadaBanda, $musicas]) {
    echo "$cadaBanda - $musicas <br>";
}