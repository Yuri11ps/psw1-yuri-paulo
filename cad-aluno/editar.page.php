<?php

session_start();

$nome = $_SESSION['nome'];
$email = $_SESSION['email'];
$senha = $_SESSION['senha'];
$turma = $_SESSION['turma'];
$matricula = $_SESSION['matricula'];
$cpf = $_SESSION['cpf'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styler.css">
    <title>editar</title>
</head>

<body>

    <?php

    include "header.html";

    ?>

    <div class="container-principal">
        <div class="box">
            <div class="form-box">
                <div class="caixa_resutado">
                    <h2>Esses são os seus dados:</h2>
                    <br>
                    <form action="painel.php" method="post">
                        <div class="linhas-forms">
                            <div class="input-group">
                                <label for="nome"> Nome Completo</label>
                                <input type="text" id="nome" name="nome" value="<?php echo $_SESSION['nome']; ?>" required>
                            </div>
                            <div class="input-group">
                                <label for="turma"> Turma</label>
                                <input type="text" id="turma" name="turma" value="<?php echo $_SESSION['turma']; ?>" required>
                            </div>
                        </div>
                        <div class="linhas-forms">
                            <div class="input-group">
                                <label for="numero-matricula"> Matricula</label>
                                <input type="text" id="numero-matricula" name="numero-matricula" value="<?php echo $matricula; ?>" required>
                            </div>
                            <div class="input-group">
                                <label for="cpf"> CPF </label>
                                <input type="number" id="cpf" name="cpf" placeholder="Digite o seu CPF" value="<?php echo $cpf; ?>" required>
                            </div>
                        </div>
                        <div class="linhas-forms">
                            <div class="input-group">
                                <label for="email">E-mail</label>
                                <input type="email" id="email" name="email" placeholder="Digite o seu email" value="<?php echo $email; ?>" required>
                            </div>
                            <div class="input-group w50">
                                <label for="senha">Senha</label>
                                <input type="password" id="senha" name="password" placeholder="Digite sua senha" value="<?php echo $senha; ?>" required>
                            </div>
                        </div>
                        <div class="input-group">
                            <button type="submit">Editar</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <?php

    include "footer.html";

    ?>

</body>

</html>