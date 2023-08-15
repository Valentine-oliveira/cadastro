<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de cliente</title>
    <link rel="stylesheet" href="./css/cadastro.css">
</head>
<body>
    <div class="container">
        <div class="form-image">
        <img src="./img/undraw_shopping_re_hdd9.svg" alt="">        
        </div>
        <div class="form">
            <form action="verificaCadastro.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastro de Clientes</h1>
                    </div>
                </div>
                
                <div class="input-group">
                    <div class="input-box">
                        <label for="name">Nome: </label>
                        <input type="text" name="txtnome" placeholder="Digite nome">
                    </div>
                    <div class="input-box">
                        <label for="number">Telefone: </label>
                        <input type="text" name="txttel" placeholder="(xx) xxxxx-xxxx">
                    </div>
                    <div class="input-box">
                        <label for="name">Endereço: </label>
                        <input type="text" name="txtend" placeholder="Digite o endereço">
                    </div>
                    <div class="input-box">
                        <label for="email">Email: </label>
                        <input type="text" name="txtemail" placeholder="Digite o email">
                    </div>
                    <div class="input-box">
                        <label for="idade">Idade: </label>
                        <input type="text" name="txtidade" placeholder="Digite a idade">                    </div>
                    <div class="input-box">
                        <label for="salario">Salário: </label>
                        <input type="text" name="txtsal" placeholder="Digite o salario"><br>                    </div>
                </div>

                <div class="continue-button">
                    <input type="submit" value="Cadastrar" name="btn"><br>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
