<?php include 'VerificarLoginAdm.php' ?>
    <head>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    </head>
    <body>
        <?php
        
        include 'Conectar.php';
        conectar();
        
        $cod = $_GET['codForm'];
        $computador = $_GET['Computador'];
        $problema = $_GET['Problema'];
        $data = $_GET['Data'];
        $status = $_GET['Status'];
        $dataRes = $_GET['DataRes'];
       
        

        mysql_query("UPDATE form SET Computador='$computador',Problema='$problema',Data='$data', Status='$status', DataRes='$dataRes' WHERE codForm='$cod'");
        if (mysql_errno() != 0) {
            echo 'Erro ao Alterar';
            echo mysql_error();
        } else {
            echo '<center>Alterado com sucesso';
        }
        ?>
        <br/><a href="Index.php" class="btn btn-primary">Voltar</a>
    </body>
</html>
