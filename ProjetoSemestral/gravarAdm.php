<?php include 'VerificarLoginAdm.php' ?>
    <head>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    </head>
    <body>
        <?php
     
        $login = $_POST["Usuario"];
        $senha = $_POST["Senha"];

        include 'Conectar.php';
        conectar();
        
        $sql = "INSERT INTO adm (login, senha)
        VALUES(
        '$login','$senha')";
        $rs = mysql_query($sql);
        
        
        if (mysql_errno() != 0) {
             echo '<center>Erro ao registrar administrador';
        } 
        
        else {
            echo '<center>Administrador registrado com sucesso';
        }
        ?>
        <br/><a href="adms.php" class="btn btn-primary">Voltar</a>
    </body>
</html>