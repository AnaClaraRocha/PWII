<?php

	require_once "model/conexaoCategoria.php";

	$conexao = Conexao::conectar();

	$selectCat = $conexao->query("SELECT nomeCategoria FROM tbCategoria")->fetchAll();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Cadastro</title>
  <link rel="stylesheet" href="style.css">
  <link rel='stylesheet' href='css/style.css'>

</head>

<body>



<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="cadastra-produto.php" method="post">
			<h1>Cadastre o Produto</h1>
			<span>preencha as informações abaixo</span>
			<input type="text" name="txtnomeProduto" placeholder="Nome do Produto" />
			<input type="text" name="txtpreco" placeholder="Preço do Produto" />
			<br>
			<select name="slCategoria">

				<?php

					for($i=0;$i<count($selectCat);$i++){
						$id = $conexao->query("SELECT idCategoria FROM tbCategoria WHERE nomeCategoria = '".$selectCat[$i][0]."'")->fetch();
						echo('<option value="'.$id[0].'">'.$selectCat[$i][0].'</option>');
					}

				?>
            </select>
			<br>
			<button action="cadastra-produto.php" >Cadastrar Produto</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="cadastra-categoria.php" method="post">
			<h1><strong>Cadatre a Categoria</strong></h1>
			<span>Preencha os campos abaixo</span>
			<input type="text" name="txtnomeCate" placeholder="Nome da Categoria" />
            <button action="cadastra-categoria.php">Cadastrar Categoria</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<strong><h1>Bem-Vindo Novamente</h1></strong>
				<p>Estamos felizes que você esteja de volta</p>
				<button class="ghost" id="signIn">Deseja Cadastrar Categoria</button>
			</div>
			<div class="overlay-panel overlay-right">
				<strong><h1>Bem-Vindo Novamente</h1></strong>
				<p>Estamos felizes que você esteja de volta</p>
				<button class="ghost" id="signUp">Deseja Cadastrar Produto</button>
			</div>
		</div>
	</div>
</div>



<script src="js/script.js" charset="utf-8"></script>
</body>

</html>