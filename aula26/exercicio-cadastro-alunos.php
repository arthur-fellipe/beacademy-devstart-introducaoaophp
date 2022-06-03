<?php

$a1 = [
    'nome' => "Danilo",
    'email' => "danilo@email.com",
    'telefone' => "71 99999-0001"
];

$a2 = [
    'nome' => "Douglas",
    'email' => "douglas@email.com",
    'telefone' => "71 99999-0002"
];

$a3 = [
    'nome' => "Ignacio",
    'email' => "ignacio@email.com",
    'telefone' => "71 99999-0003"
];

$a4 = [
    'nome' => "Luiz Otávio",
    'email' => "luizotavio@email.com",
    'telefone' => "71 99999-0004"
];

$alunos = [
    $a1,
    $a2,
    $a3,
    $a4
];
?>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class="container">
    <h1 class="mt-5">ALUNOS</h1>
    <hr>
    <table class="table table-hover table-striped mt-5">
        <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($alunos as $cadaAluno) {
                echo '<tr>';
                echo "<td>{$cadaAluno['nome']}</td>";
                echo "<td>{$cadaAluno['email']}</td>";
                echo "<td>{$cadaAluno['telefone']}</td>";
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
</div>