<?php
$nome = $_POST['txtNome'];
$valor_compra = $_POST['txtValorCompra'];
$forma_pagamento = $_POST['cmbPag'];
$desconto = 0;
$valor_total;

/* if ($forma_pagamento == 'boleto') {
    $desconto = (8 / 100) * $valor_compra;
    $valor_total = $valor_compra - $desconto;
    echo "Promoção de Aniversário<br>
        $nome!<br>
        Valor da compra sem desconto: R$ $valor_compra<br>
        Forma de pagamento: $forma_pagamento<br>
        Desconto de 8%<br>
        Você economizou: R$ $desconto<br>
        Valor a pagar: R$ $valor_total";
} elseif ($forma_pagamento == 'deposito') {
    $desconto = (10 / 100) * $valor_compra;
    $valor_total = $valor_compra - $desconto;
    echo "Promoção de Aniversário<br>
        $nome!<br>
        Valor da compra sem desconto: R$ $valor_compra<br>
        Forma de pagamento: $forma_pagamento<br>
        Desconto de 10%<br>
        Você economizou: R$ $desconto<br>
        Valor a pagar: R$ $valor_total";
} else {
    $valor_total = $valor_compra;
    echo "$nome.<br>
        Valor a pagar: R$ $valor_total";
    echo 'Compra finalizada';
} */
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title><?php
            if ($forma_pagamento != 'cartaoCredito') {
                echo "Promoção de Aniversário!";
            } else {
                echo "Pagamento";
            }
            ?></title>
</head>

<body>
    <div class="w3-container w3-teal">

        <h2><?php
            if ($forma_pagamento != 'cartaoCredito') {
                echo "Promoção de Aniversário!";
            } else {
                echo "Pagamento";
            }
            ?></h2>
        <p>
            <?php
            if ($forma_pagamento == 'boleto') {
                $desconto = (8 / 100) * $valor_compra;
                $valor_total = $valor_compra - $desconto;
                echo "Promoção de Aniversário, $nome!<br>
                Valor da compra sem desconto: R$ $valor_compra<br>
                Forma de pagamento: Boleto<br>
                Desconto de 8%<br>
                Você economizou: R$ $desconto<br>
                Valor a pagar: R$ $valor_total";
            } elseif ($forma_pagamento == 'deposito') {
                $desconto = (10 / 100) * $valor_compra;
                $valor_total = $valor_compra - $desconto;
                echo "Promoção de Aniversário, $nome!<br>
                Valor da compra sem desconto: R$ $valor_compra<br>
                Forma de pagamento: Depósito<br>
                Desconto de 10%<br>
                Você economizou: R$ $desconto<br>
                Valor a pagar: R$ $valor_total";
            } else {
                $valor_total = $valor_compra;
                echo "$nome.<br>
                Valor a pagar: R$ $valor_total<br>
                Forma de pagamento: Crédito<br>";
                echo 'Compra finalizada';
            }
            ?>
        </p>

    </div>
</body>

</html>