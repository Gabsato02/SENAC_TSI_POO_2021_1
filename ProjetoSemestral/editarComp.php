<?php include 'VerificarLoginAdm.php' ?>
    <head>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    </head>
    <body>
        <?php
        include 'Conectar.php';
        conectar();

        $cod = $_GET["codComp"];
        $sql = "SELECT * FROM computadores WHERE codComp=$cod";
        $rs = mysql_query($sql);
        $computador = mysql_result($rs, $i=0, "nome");

        ?>

            <center>
            <form action="alterarComp.php" method="GET" class="GET"> 
                
                <label for="codComp"> Código </label>
                <input type="text" name="codComp" value="<?php echo $cod?>" readonly/><br/>
                
                <label for="Computador"> Nome </label>
                <input type="text" name="Computador" value="<?php echo $computador?>"/><br/>
  
                <input type="submit" value="Editar" class="btn btn-primary" />
    </form></form><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    

 <a href='Computadores.php' class='btn btn-primary'>Voltar</a>    
               
</body>

</html>