<?php session_start();
if($_SESSION["logado"] !=1){
    echo"<center>Você deve estar logado<br>";
    echo"<a href='login.php' class='btn btn-primary'>Logar</a>";
    exit();
}
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
</head>




