<?php

session_start();

$_SESSION['nome'] = $_POST['nome'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['senha'] = $_POST['password'];
$_SESSION['turma'] = $_POST['turma'];
$_SESSION['matricula'] = $_POST['numero-matricula'];
$_SESSION['cpf'] = $_POST['cpf'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styler.css">
    <title>Painel</title>
</head>


<body>

    <?php

    include "header.html";

    ?>

    <div class="container-principal">
        <div class="box">
            <div class="form-box">
                <h2>Painel de acesso</h2>
                <br>
                <p> Aluno do: <?php echo $_SESSION['turma']; ?> </p>
                <div class="input-group">
                    <a href="index.php"><button class="sair">Sair</button></a>
                </div>
            </div>
        </div>
    </div>

    <?php

    include "footer.html";

    ?>

</body>

</html>