<?php
require_once('banco.php');
require_once('tabelas.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $clientes = select_clientes();

    foreach ($clientes as $cliente) {
        
        $id = $cliente['id_cliente'];
        $nome = $cliente['nome'];
        $snome = $cliente['sobrenome'];
        $data = $cliente['data'];
        $cpf = $cliente['CPF'];
        $tele = $cliente['tel'];
        $roupa = $cliente['nome_roupas'];
    
        echo "<form action='deletar.php' method='POST'>";
        echo "Aqui estão os dados da sua compra:<br/>";
        echo "Nome: $nome<br/> Sobrenome: $snome<br/> Data de nascimento: $data<br/> CPF: $cpf<br/> Telefone: $tele </br> Roupa: $roupa <br/>";
        echo "<input type='hidden' name='id_cliente' id='id_cliente' value='{$id}'> <br/>";
        echo "<input type='submit' value='Deletar'> <br/> <br/>";
        echo "</form>";
        echo '-------------------------------------------- </br>';

    }

    ?>


</body>

</html>