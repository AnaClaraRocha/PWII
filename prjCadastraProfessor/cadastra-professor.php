<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados dos Professores</title>
</head>
<body bgcolor = "#C7C6C1">
    <?php


        $nomeProf = $_POST['txtNome'];
        $cpfProf = $_POST['txtCpf'];
        $doseProf = $_POST['rdDose'];
        $escola = $_POST['slEscola'];

        switch($doseProf){
            case 1:
                $doseProf = "1° Dose";
                break;
            case 2: 
                $doseProf = "2° Dose";
                break;
            case 3: 
                $doseProf = "3° Dose";
                break;
            case 4: 
                $doseProf = "4° Dose";
                break;
            }

            switch($escola){
                case 1:
                    $escola = "E.E. Enerstina Del Buono Trama";
                    break;
                case 2: 
                    $escola = "EMEF. Quirino Carneiro Rennó";
                    break;
                case 3: 
                    $escola =  "Colegio Oliveira Telles";
                    break;
                case 4: 
                    $escola = "Colegio Palmarino Calabrez";
                    break;
                }

        echo(" <h1> <center> Cadastro de Aluno </center> </h1>");
        echo("<br>");

        echo(" <h3> Nome Professor: </h3> " . $nomeProf);
        echo(" <h3> CPF Professor: </h3> " . $cpfProf);
        echo(" <h3> Dose Vacina: </h3> " . $doseProf);
        echo(" <h3> Escola: </h3> " . $escola);
        echo("<br>");
        echo("<br>");
       echo("<h3> O professor ".$nomeProf." da escola ".$escola." cujo seu CPF é ".$cpfProf." já tomou a ".$doseProf. ". </h3>")


        ?>
</body>
</html>

