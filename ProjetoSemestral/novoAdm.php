<?php include 'VerificarLoginAdm.php' ?>
    <head>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    </head>
    <body>

        <center>
            <h3>Cadastre o novo usuário:</h3>
        <fieldset>
            <form action="gravarAdm.php" method="POST" class="POST"> 
                <label for="Usuario"> Usuário </label> 
                <input type="text" name="Usuario"/><br/>
                
                <label for="Senha"> Senha </label>
                <input type="text" name="Senha" /><br/>
                
                <input type="submit" value="Gravar" class="btn btn-primary" />
        </fieldset>
    </form><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    

 <a href='adms.php' class='btn btn-primary'>Voltar</a> 

</body>

</html>
