<?php 
    header("Location: index.php");

    $joia = $_GET['slcJoia'];

    setcookie('codJoia' , $joia , time()+60);

?>

<div id="logo"><img src="imagem/Logo.jpeg"></div>