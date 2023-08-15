<!DOCTYPE html>
<?php
    include ("conexao.php");
    include ("banco_cliente.php");

?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de clientes</title>
</head>
<body>
    <center>
        <h1>Clientes cadastrados</h1>
            <table border="1">
                <tr>
                    <td>id</td>
                    <td>Nome</td>
                    <td>Telefone</td>
                    <td>Endereço</td>
                    <td>Email</td>
                    <td>Idade</td>
                    <td>Salario</td>
                    <td>Excluir</td>
                    <td>Alterar</td>
                </tr>

                <?php
                    $clientes=listarCliente($conexao);
                    foreach ($clientes as $cliente):
                ?>
                <tr>
                    <td><?php echo $cliente['cod_cliente']?></td>
                    <td><?php echo $cliente['nome']?></td>
                    <td><?php echo $cliente['telefone']?></td>
                    <td><?php echo $cliente['endereco']?></td>
                    <td><?php echo $cliente['email']?></td>
                    <td><?php echo $cliente['idade']?></td>
                    <td><?php echo $cliente['salario']?></td>

                    <td>
                        <a href="excluir_cliente.php?cod_cliente=
                        <?php echo $cliente['cod_cliente']?>">Excluir</a>

                    </td>
                    <td>
                        <a href="alterar_cliente.php?cod_cliente=
                        <?php echo $cliente['cod_cliente']?>">Alterar</a>

                    </td>
                </tr>
                <?php
                    endforeach;
                ?>

            </table>
    </center>
    
</body>
</html>