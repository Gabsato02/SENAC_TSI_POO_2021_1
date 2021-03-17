<?php include 'VerificarLoginAdm.php' ?>
<head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
     <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
</head>
<body>
<?php
    include "Conectar.php";

    conectar();

    $cod = $_GET["codUsu"];
    $sql = "DELETE FROM usuario WHERE codUsu= '$cod'";
    $rs = mysql_query($sql);

    if(mysql_errno()!=0){
        echo '<center>Erro ao Apagar<br>';
        echo mysql_error();
    }
    else{
        echo '<center>Apagado com sucesso';
    }
?>
<br/>
<a href='usu.php' class="btn btn-primary">Voltar</a>
</body>