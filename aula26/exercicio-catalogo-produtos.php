<?php

$p1 = [
    'nome' => "Camisa",
    'preco' => "R$70,00",
    'descricao' => "Camisa 100% algodão",
    'foto' =>   "Sem foto"
];

$p2 = [
    'nome' => "Calça",
    'preco' => "R$300,00",
    'descricao' => "Calça jeans regular",
    'foto' =>   "Sem foto"
];

$p3 = [
    'nome' => "Boné",
    'preco' => "R$120,00",
    'descricao' => "Boné New Era",
    'foto' =>   "Sem foto"
];

$p4 = [
    'nome' => "Meia",
    'preco' => "R$25,00",
    'descricao' => "Meias brancas de algodão",
    'foto' =>   "Sem foto"
];

$p5 = [
    'nome' => "Sapato",
    'preco' => "R$240,00",
    'descricao' => "Tênis",
    'foto' =>   "Sem foto"
];

$produtos = [
    $p1,
    $p2,
    $p3,
    $p4,
    $p5
];
?>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class="container">
    <h1 class="mt-5">CATÁLOGO DE PRODUTOS</h1>
    <hr>
    <table class="table table-hover table-striped mt-5">
        <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>Preço</th>
                <th>Descrição</th>
                <th>Foto</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($produtos as $cadaProduto) {
                echo '<tr>';
                echo "<td>{$cadaProduto['nome']}</td>";
                echo "<td>{$cadaProduto['preco']}</td>";
                echo "<td>{$cadaProduto['descricao']}</td>";
                echo "<td>{$cadaProduto['foto']}</td>";
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</div>