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

            <h3>Colégio Wernecrk</h3>

            <span class="border-dark">
            <form method="post" action="autenticaSessao.php" class="border border-3">
            <br>
            <img src=" Imagem/img.jpeg" alt="" width="250" height="145">
            <br>

            <label><svg xmlns="http://www.w3.org/2000/svg"  width="25" height="25" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg></label>
            <input type="text" name="txtlogin">
            <br>
            <br>
            <label><svg xmlns="http://www.w3.org/2000/svg"  width="25" height="25" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
            </svg></label>
            <input type="password" name="txtsenha">
            <br>
            <br>
           <input type="submit" value="Acessar">
           <br>
           <br>
        </form>
    </span>

    <br>
    <br>

    <h6>Sistema Acadêmico - 2022 - Colégio Wernecrk</h6>

</body>
</html>