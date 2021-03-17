<?php include 'VerificarLoginAdm.php' ?>
    <head>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    </head>
    <body>
        <?php
        include 'Conectar.php';
        conectar();

        $cod = $_GET["codForm"];
        $sql = "SELECT * FROM form WHERE codForm=$cod";
        $rs = mysql_query($sql);
        $computador = mysql_result($rs, $i=0, "Computador");
        $problema = mysql_result($rs, $i, "Problema");
        $data = mysql_result($rs, $i, "Data");
        $dataRes = mysql_result($rs, $i, "DataRes");
        $status = mysql_result($rs, $i, "Status");
        
       
        
        ?>

            <center>
            <form action="alterar.php" method="GET" class="GET"> 
                
                <label for="codForm"> Código </label>
                <input type="text" name="codForm" value="<?php echo $cod?>" readonly/><br/>
                
                <label for="Computador"> Computador </label>
                <input type="text" name="Computador" value="<?php echo $computador?>" readonly/><br/>
                  
                <label for="Data"> Data </label> 
                <input type="date" name="Data" value="<?php echo $data?>" readonly/><br/>

                <label for="Problema"> Problema</label> 
                <input type="text" name="Problema" value="<?php echo $problema?>"/><br/>
                
                <label for="Status"> Status </label>
                <input type="text" name="Status" value="<?php echo $status?>" /><br/>
              
                <label for="DataRes"> Data de Resolução</label> 
                <input type="date" name="DataRes" value="<?php echo $dataRes?>" /><br/>
  
                <input type="submit" value="Editar" class="btn btn-primary" />
    </form><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    

 <a href='Index.php' class='btn btn-primary'>Voltar</a>         
</body>

</html>