<?php

$url = $_SERVER['REQUEST_URI'];

$returnValue = match ($url) {
    '/' => "<h1>Página Inicial</h1>",
    '/login' => "<h1>Página de Login</h1>",
    '/cadastro' => "<h1>Página de Cadastro</h1>",
    default => "<h1>Página não encontrada</h1>",
};

echo $returnValue;