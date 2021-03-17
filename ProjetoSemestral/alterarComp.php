<?php include 'VerificarLoginAdm.php' ?>
    <head>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    </head>
    <body>
        <?php
        
        include 'Conectar.php';
        conectar();
        
        $cod = $_GET['codComp'];
        $computador = $_GET['Computador'];

        mysql_query("UPDATE computadores SET nome='$computador' WHERE codComp='$cod'");
        if (mysql_errno() != 0) {
            echo 'Erro ao Alterar';
            echo mysql_error();
        } else {
            echo '<center>Alterado com sucesso';
        }
        ?>
        <br/><a href="computadores.php" class="btn btn-primary">Voltar</a>
    </body>
</html>
