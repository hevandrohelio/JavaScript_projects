<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas dos alunos</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
    <div class="w3-container w3-teal w3-center">
        <h2>8º ANO A</h2>
    </div>
    <?php

    $dados = array(
        array(
            "nome" => "Aline",
            "prim_se" => 10,
            "seg_se" => 9.5
        ),
        array(
            "nome" => "Alfredo",
            "prim_se" => 8,
            "seg_se" => 5
        ),
        array(
            "nome" => "Carla",
            "prim_se" => 5,
            "seg_se" => 6.5
        ),
        array(
            "nome" => "César",
            "prim_se" => 9,
            "seg_se" => 9
        ),
        array(
            "nome" => "Daniel",
            "prim_se" => 10,
            "seg_se" => 7
        ),
        array(
            "nome" => "Esnar",
            "prim_se" => 8,
            "seg_se" => 6
        ),
        array(
            "nome" => "Henzo",
            "prim_se" => 6,
            "seg_se" => 8
        ),
        array(
            "nome" => "Pablo",
            "prim_se" => 7,
            "seg_se" => 5
        ),
        array(
            "nome" => "Wallace",
            "prim_se" => 8,
            "seg_se" => 7
        ),
        array(
            "nome" => "Zulmira",
            "prim_se" => 10,
            "seg_se" => 6
        )
    );

    echo '<table class="w3-table-all w3-hoverable w3-text-black">';
    echo '<tr class="w3-teal ">';
    echo '<th class="w3-center"> Nome</th>';
    echo '<th class="w3-center"> Primeiro Semestre</th>';
    echo '<th class="w3-center"> Segundo Semestre</th>';
    echo '</tr>';
    foreach ($dados as $dado) {
        echo '<tr>';
        foreach ($dado as $item) {
            echo '<td class="w3-center">' . $item . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
    ?>
</body>

</html>