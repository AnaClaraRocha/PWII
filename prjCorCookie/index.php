<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cor Pagina</title>
</head>

    <?php

    if (isset($_COOKIE['corCookie'])){
            $cor = $_COOKIE['corCookie'];
            echo("<body bgcolor=".$cor.">");
        }
        else {
            echo("<body bgcolor='pink'>");
        }



    ?>

    <form id="form1" name="form1" method="post" action="cor.php">
                <label> <h1> Selecione a cor da pagina: </h1> </ label>
                <select name="corSelect">
                    <option value="##5FE1F5">Azul Claro</option>
                    <option value="#F755FF">Roxo</option>
                    <option value="#00FFFF">Ciano</option>
                    <option value="#FF4582">Rosa</option>
                </select>
                <br />
                <br />

                <input type="submit" name="Submit" value="Aplicar"/>
            </form>

    </body>
</html>