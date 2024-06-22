<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas Alunos</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .main_container {
            width: 100vw;
            height: 100vh;
            background: #02022e;

        }

        .universal_container {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        .box {
            width: 800px;
            height: 700px;
            background: #fff;
            border-radius: 10px;
        }

        body {
            margin: 0px;
        }
    </style>
</head>

<body>
    <div class="main_container universal_container">
        <div class="box">
            <h1 class="w3-center w3-dark-grey w3-round-large w3-margin">Alunos Concluintes</h1>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "pwii";
            $conexao = new mysqli($servername, $username, $password, $dbname);
            if ($conexao->connect_error) {
                die("Connection failed: " . $conexao->connect_error);
            }
            echo '
                <table class="w3-table-all w3-centered">
                <thead>   
                    <tr class="w3-center w3-dark-grey">
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Nota 01</th>
                        <th>Nota 02</th>
                        <th>Nota 03</th>
                        <th>Nota 04</th>
                    </tr>
                <thead>
                ';
            $sql = "SELECT * FROM alunoconcluinte";
            $resultado = $conexao->query($sql);
            if ($resultado != null)
                foreach ($resultado as $linha) {
                    echo '<tr>';
                    echo '<td>' . $linha['idalunoconcluinte'] . '</td>';
                    echo '<td>' . $linha['nome'] . '</td>';
                    echo '<td>' . $linha['nota1'] . '</td>';
                    echo '<td>' . $linha['nota2'] . '</td>';
                    echo '<td>' . $linha['nota3'] . '</td>';
                    echo '<td>' . $linha['nota4'] . '</td>';
                    echo '</tr>';
                }
            echo '
                    </table>
                </div>';
            $conexao->close();
            ?>
        </div>
    </div>
</body>

</html>