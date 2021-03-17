<?php include 'VerificarLoginAdm.php' ?>

    <head>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    </head>
    <body>
        <?php
     
        $computador = $_POST["Computador"];
        
        include 'Conectar.php';
        conectar();
        
        $sql = "INSERT INTO computadores (nome)
        VALUES(
        '$computador')";
        $rs = mysql_query($sql);
        
        
        if (mysql_errno() != 0) {
             echo '<center>Erro ao registrar reclamação';
        } 
        
        else {
            echo '<center>Reclamação registrada com sucesso';
        }
        ?>
        <br/><a href="computadores.php" class="btn btn-primary">Voltar</a>
    </body>
</html>