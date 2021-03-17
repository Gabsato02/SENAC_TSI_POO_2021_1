<?php
    include 'Conectar.php';
    conectar();
$con=mysqli_connect("localhost","root", "", "php");
$usuario=$_POST["adm"];
$senha=$_POST["pass"];
$sql = "SELECT * FROM adm WHERE
    login = '$usuario' AND senha = '$senha'";     
$rs = mysqli_query($con,$sql);

if (mysqli_num_rows($rs)>0){
    session_start();
    $_SESSION["logadoADM"]=2;
    
    header ("Location:adm.php");    
}  else{
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