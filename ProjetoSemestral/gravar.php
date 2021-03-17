<?php include 'VerificarLogin.php' ?>

    <head>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    </head>
    <body>
        <?php
     
        $computador = $_POST["Computador"];
        $problema = $_POST["Problema"];
        $data = $_POST["Data"];
        $status = "Pendente";
        
        include 'Conectar.php';
        conectar();
        
        $sql = "INSERT INTO form (Computador, Problema, Data, Status)
        VALUES(
        '$computador','$problema','$data', 'Pendente')";
        $rs = mysql_query($sql);
        
        
        if (mysql_errno() != 0) {
             echo '<center>Erro ao registrar reclamação';
        } 
        
        else {
            echo '<center>Reclamação registrada com sucesso';
        }
        ?>
        <br/><a href="registrar.php" class="btn btn-primary">Voltar</a>
    </body>
</html>