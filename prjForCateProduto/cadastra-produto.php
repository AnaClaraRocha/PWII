<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel='stylesheet' href='css/style.css'>
    <title>Cadatro Produto</title>
</head>
<body>
    <div class="container">

    <?php
    require_once "model/produto.php";
    require_once "controller/ProdutoController.php";
    require_once 'model/categoria.php';
    
    require_once 'dao/produtoDao.php';

    $produto = new Produto();

    $produto->setNomeProduto($_POST['txtnomeProduto']);
    $produto->setPrecoProduto($_POST['txtpreco']);

    $categoria = new Categoria();
    $categoria->setId($_POST['slCategoria']);

    $produto->setCategoria($categoria);

    $produtoController = new ProdutoController($produto);

   echo(" <center><h1>Cadastro do  Produto</h1> </center>");
   if($produtoController->cadastraProduto($produto)){
        (produtoDao::cadastrar($produto));
        echo("<div class='textoProduto'> <center><br> Produto ".$produto->getNomeProduto().", com ID de categoria ".$produto->getCategoria()->getId().", valendo ".$produto->getPrecoProduto()." cadastrado com sucesso.</center> </div>");
    }else{
    echo(" <div class='textoProduto'> <center>Não foi possivel cadastrar este produto pois o valor não é correto </center> </div>");
}
       

?>
    
    </div>

    
</body>
</html>

