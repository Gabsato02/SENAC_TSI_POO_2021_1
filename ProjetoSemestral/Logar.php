<?php
    include 'Conectar.php';
    conectar();
$usuario=$_POST["usuario"];
$senha=$_POST["senha"];
$sql = "SELECT * FROM usuario WHERE
    login = '$usuario' AND senha = '$senha'";     

$rs = mysql_query($sql);
if (mysql_num_rows($rs)>0){
    session_start();
    $_SESSION["logado"]=1;
    
    header ("Location:registrar.php");    
}else{
    ?>

 <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
</head>   

   <center>Login Inválido<br>
<a href = 'login.php' class='btn btn-primary btn-small'>Voltar</a>

<?php   
}
?>
