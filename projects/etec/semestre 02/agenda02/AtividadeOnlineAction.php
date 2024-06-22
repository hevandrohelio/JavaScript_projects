<?php

    $nome = $_POST['txtNome'];
    $sb_nome = $_POST['txtSobrenome'];
    $email = $_POST['txtEmail'];
    $formacao = $_POST['txtFormacao'];
    $emprego = $_POST['txtEmprego'];
?>
<!DOCTYPE html>

<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>GET e POST</title>
    <style>
        p{
            margin: 20px;
        }
    </style>
</head>
<body>
    <div class="w3-container w3-teal">
        <h2>Cadastro Confirmado com Sucesso</h2>
    </div>
    <div>
            <p><?php echo "Nome: $nome"."<br>";?></p>
            <p><?php echo "Sobrenome: $sb_nome"."<br>";?></p>
            <p><?php echo "Email: $email"."<br>";?></p>
            <p><?php echo "Formação: $formacao"."<br>";?></p>
            <p><?php echo "Último emprego: $emprego"."<br>";?></p>
        
    </div>
</body>
</html>