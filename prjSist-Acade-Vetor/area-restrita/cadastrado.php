<?php include_once("validador.php");

$nome = $_POST['nome'];
;$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$turma = $_POST['turma'];

$vetorAluno = array(
       'nome' => $nome,
        'cpf' => $cpf,
       'rg' => $rg,
       'turma' => $turma,
   );
   date_default_timezone_set('America/Sao_Paulo');
   $day = date('d'); 
   $month = date('m');
   $Year = date('y');

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="../css/Cadastro.css">
    <title>Cadastrado</title>

    </head>

    <body>

    <div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
                    Cadastro Feito com Sucesso
					</span>

					<br><br>
					
					<a href="../logout.php"> <button type="button" class="btn btn-primary" >Sair</button> </a>

                    <br><br>
					

					<div class="wrap-input100 m-b-23" >
						<span class="label-input100">Nome: <?php echo($nome)?></span>
					</div>

                    <div class="wrap-input100 m-b-23">
						<span class="label-input100">CPF: <?php echo($cpf)?> </span>
					</div>

                    <div class="wrap-input100 m-b-23">
						<span class="label-input100">RG: <?php echo($rg)?> </span>
					</div>

                    <div class="wrap-input100 m-b-23">
						<span class='label-input100'>Turma: <?php echo($turma)?></span>
					</div>

					<?php 
					echo ("O aluno(a) " . $nome . " da turma " . $turma . " , foi cadastrado(a) com sucesso!");
   					echo (" <br> Cadastro concuído em " . date("d/m/Y") . ", ás " . date("H:i:s"));
					?>

                    <br><br>

                    <div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" a href="index-restrita.php">
                            <a href="index-restrita.php" > Voltar ao Cadastro</a>
							</button>
						</div>
					</div>

                    <br>

					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Redes Sociais 
						</span>
					</div>

					<div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>

					<br>
                    
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>

            

    </body>
</html>