<?php include_once("validador.php");
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$turma = $_POST['turma'];
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="../css/estilo.css">
    <title>Cadastrado</title>

    </head>

    <body>

            <h3>Colégio Wernecrk</h3>

            <span class="border-dark">
            <form method="post" action="cadastrado.php" class="border border-3">
            <br>
            <img src=" ../Imagem/img.jpeg" alt="" width="250" height="145">

            <h2>Cadastro Realizado</h2>
            <h4>Dados do Aluno</h4>

            <br>

            <p>Nome: <?php echo($nome)?> </p>

            <p>CPF: <?php echo($cpf)?> </p>

            <p>RG: <?php echo($rg)?> </p>

            <p>Turma: <?php echo($turma)?> </p>

            <br>

            <a href="index-restrita.php">  <button type="button" class="btn btn-primary" a href="index-restrita.php" >Voltar ao cadastro</button> </a>
            <br>
            <br>
            <a href="../logout.php"> <button type="button" class="btn btn-primary" >Sair</button> </a>
            <br>
            <br> 

            </form>
            </span>

            <br>
            <br>

            <h6>Sistema Acadêmico - 2022 - Colégio Wernecrk</h6>

    </body>
</html>