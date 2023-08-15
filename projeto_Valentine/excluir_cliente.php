<?php
    include ("conexao.php");
    include ("banco_cliente.php");

    $id=$_GET['cod_cliente'];
    if(excluir($conexao, $id)){
        header("Location: listar_cliente.php");
        die();
    }
?>