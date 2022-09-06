<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="css/estilo.css">
    <title>Login</title>
</head>

<body>

        <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="Imagem/img.jpeg" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post" action="autenticaSessao.php">
					<span class="login100-form-title">
                    Colégio Wernecrk
					</span>

					<div class="wrap-input100 ">
						<input class="input100" type="text" name="txtlogin" placeholder="Login">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 " >
						<input class="input100" type="password" name="txtsenha" placeholder="Senha">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<br>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" method="post" action="autenticaSessao.php">
							Login
						</button>
					</div>
<br>
					<div class="text-center p-t-12">
						<span class="txt1">
                        Esqueceu 
						</span>
					
						<a class="txt2" href="#">
                        Nome de usuário / Senha?
						</a>
					</div>
					<br>
					<div class="text-center p-t-136">
						<a class="txt2" href="#">
                        Crie sua conta 
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div> 
	</div>

</body>
</html>