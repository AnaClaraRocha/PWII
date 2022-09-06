<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/estilo.css">
    <title>Formulario</title>
</head>
<body>

             <form class="login100-form validate-form" method="post" action="cadastra-produto.php">
					<span class="login100-form-title">
                    Cadastro de Produto
					</span>

					<div class="wrap-input100 ">
						<input class="input100" type="text" name="txtDesc" placeholder="Descrição">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 " >
						<input class="input100" type="text" name="txtPreco" placeholder="Preço">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<br>
					
                    <center>
					<div class="container-login100-form-btn">
                        
						<button class="login100-form-btn" method="post" action="cadastra-produto.php">
							Cadastrar
						</button>
                        
					</div>
                    </center>
<br>
				</form>

</body>
</html>