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
        
        $sql2 = "select (DataRes-Data) from form where codForm=$cod"; 
        $rs = mysql_query($sql2);
        $rsp = mysql_result($rs,0);
        
        echo "<center>$rsp dias"
        
        ?>
        <br/><a href="Index.php" class="btn btn-primary">Voltar</a>
    </body>
</html>



