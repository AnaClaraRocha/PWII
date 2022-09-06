<?php 
    include_once("validador.php"); 
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
        <br>

        <label><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
        </svg></label>
        <input type="text" name="nome" placeholder="Nome">
        <br>
        <br>

        <label><svg xmlns="http://www.w3.org/2000/svg"  width="25" height="25" fill="currentColor" class="bi bi-file-earmark-richtext-fill" viewBox="0 0 16 16">
        <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM7 6.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm-.861 1.542 1.33.886 1.854-1.855a.25.25 0 0 1 .289-.047l1.888.974V9.5a.5.5 0 0 1-.5.5H5a.5.5 0 0 1-.5-.5V9s1.54-1.274 1.639-1.208zM5 11h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
        </svg></label>
        <input type="text" name="cpf" placeholder="CPF">
        <br>
        <br>

        <label><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-badge-fill" viewBox="0 0 16 16">
        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-.245z"/>
        </svg></label>
        <input type="text" name="rg" placeholder="RG">
        <br>
        <br>
        
        <label><svg xmlns="http://www.w3.org/2000/svg"  width="25" height="25" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
        <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
        <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
        </svg></label>
        <select name="turma" require>
            <option value="" disabled selected></option>
            <option value="1DS-A">1DS-A</option> 
            <option value="1DS-B">1DS-B</option>
            <option value="2DS-A">2DS-A</option>
            <option value="2DS-B">2DS-B</option>
            <option value="3DS-A">3DS-A</option>
        </select>
        <br>
        <br>
        
        <input type="submit" value="Cadastrar">

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