<?php
    require_once "banco.php";
    require_once "tabelas.php";

    inserir();

    header("Location: dados_do_pedido.php");
?>