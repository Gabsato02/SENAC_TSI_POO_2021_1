<?php include 'VerificarLoginAdm.php' ?>

    <head>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    </head>
    <body>

        <center>
        <h1>Registre o computador:</h1>
        <fieldset>
            <form action="gravarComp.php" method="POST" class="POST"> 
                <label for="Computador"> Nome do computador </label> 
                <input type="text" name="Computador"/><br/>
                
                <input type="submit" value="Gravar" class="btn btn-primary" />
        </fieldset>
    </form><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    

 <a href='Computadores.php' class='btn btn-primary'>Voltar</a> 

</body>

</html>
