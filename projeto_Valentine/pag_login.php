<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login</title>

</head>
<body>
    <div class="wrapper">
        <form action="" method="POST">
            <h1>Tela de login</h1>
            <br>
            <h3>Espere aí, acesso restrito!✋</h3>
            <div class="input-box">
                <input type="text" name="txtu" placeholder="Nome de usuário">
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" name="txts" placeholder="Digite a senha">
                <i class='bx bxs-lock-alt'></i>
            </div>
            <input type="submit" class="btn" value="Logar"><br><br>

        </form>
    </div>
        <?php
        include ("conexao.php");
        include ("banco_usuario.php");

         if($_POST)
            {
                $login=$_POST['txtu'];
                $senha=$_POST['txts'];
                if (efetuarLogin($conexao,$login,$senha))
                {
                    session_start();
                    $_SESSION['nome']=$login;
                    $_SESSION['log']='ativo';
                    header("Location: pag_menu.php");
                    die();
                }else{
                    echo("Usuário não encontrado");
                }
            }
        ?>
    </center>
</body>
</html>