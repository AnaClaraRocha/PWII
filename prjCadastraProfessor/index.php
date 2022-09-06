<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Professores</title>
</head>
<body bgcolor = "#C7C6C1">

    <h1> <center> Cadastro de Professores para Vacinação </center> </h1>

    <form action="cadastra-professor.php" method="post">

    <label>Nome:</label>
     <input type="textNome" name="txtNome" id="txtNome">
     <br>

     <label>CPF:</label>
     <input type="text" name="txtCpf" id="txtCpf">
     <br>

     <label>Data de Nascimento:</label>
     <input type="date" name="dateNascto" id="dateNascto">
     <br>

     <label>Dose:</label>
        <input type="radio" name="rdDose" id="rdDose" value="1"> <label>1° Dose</label>
        <input type="radio" name="rdDose" id="rdDose" value="2"> <label>2° Dose</label>
        <input type="radio" name="rdDose" id="rdDose" value="3"> <label>3° Dose</label>
        <input type="radio" name="rdDose" id="rdDose" value="4"> <label>4° Dose</label>
     <br>

     <label>Selecione a escola Sede:</label>
      <select name="slEscola" id="slEscola">
        <option value="1">E.E. Enerstina Del Buono Trama</option>
        <option value="2">EMEF. Quirino Carneiro Rennó </option>
        <option value="3">Colegio Oliveira Telles</option>
        <option value="4">Colegio Palmarino Calabrez</option>
      </select>
    
      <br>
     <input type="submit" value="Cadastrar">
     
    </form>
    


</body>
</html>