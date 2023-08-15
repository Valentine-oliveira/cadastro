<?php 
    include ("conexao.php");
    if (!$conexao){
        echo ("não foi possível conectar ao banco");
        exit;
    }else {
        echo ("Conexão criada com sucesso");
    }
?>