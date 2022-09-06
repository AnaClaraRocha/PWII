<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel='stylesheet' href='css/style.css'>
    <title>Cadastro Categoria</title>
</head>
<body>
    <div class="container">
        
        <?php
            require_once "model/categoria.php";
            require_once "controller/CategoriaController.php";
            require_once 'dao/categoriaDao.php';

            $categoria = new Categoria();

            $categoria->setNome($_POST['txtnomeCate']);

            categoriaDao::cadastrar($categoria);
            echo(" <center><h1>Cadastro da Categoria</h1> </center>");

            echo("<div class='textoProduto'> <center><br> Categoria ".$categoria->getNome()." cadastrada com sucesso!</center> </div>");
            
        ?>
    </div>
    
</body>
</html>

