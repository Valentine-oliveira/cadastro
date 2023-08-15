<!DOCTYPE html>


<html lang="pt-br">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de menu</title>
    <link rel="stylesheet" href="./css/menu.css">
    <script defer src="./js/app.js"></script>
</head>
<body>
    <header class="header">
        <nav class="nav">
            <h1 class="logo">Bem vindo ao sistema</h1>
            <button class="barras"></button>
        <ul class="nav-list">
            <li>
                <a href="cadastrar_cliente.php">Realize um cadastro</a>
            </li>
            <?php
                $_SESSION['verifica'] = 'ativo';
                ?>
        </ul>
        <ul class="nav-list">
            <li>
                <a href="listar_cliente.php">Controle de clientes</a>
            </li>
            <?php
                $_SESSION['verifica'] = 'ativo';
            ?>
        </ul>
        </nav>
    </header>
    <main class="hero">
        <center>
        <div class="ophp">
                    <?php
                        session_start();
                        if($_SESSION['log'] !="ativo")
                        {
                            session_destroy();
                            header ("Location: pag_login.php");
                    
                        }
                        echo "Ola, <b>". $_SESSION['nome']."</b>, Bem vindo ao sistema.";
                        echo "<a href='logout.php'> Sair.</a>";
                    ?>
        </center>
        </div>
   </main>
</body>
</html>