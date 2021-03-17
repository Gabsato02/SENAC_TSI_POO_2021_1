<?php include 'VerificarLogin.php' ?>

    <head>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    </head>
    <body>

        <center>
        <h1>Informe o seu problema:</h1>
        <?php
        $nome = $_GET["nome"];
        ?>
        
        <fieldset>
            <form action="gravar.php" method="POST" class="POST"> 
                <label for="Computador"> Computador </label> 
                <input type="text" name="Computador" value="<?php echo $nome ?>"readonly/><br/>
                
                <label for="Data"> Data </label>
                <input type="date" name="Data" /><br/>
                
                <label for="Problema"> Problema </label>
                <textarea name="Problema" cols="50" rows="8"></textarea><br/>
                
                <input type="submit" value="Gravar" class="btn btn-primary" />
        </fieldset>
    </form><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    

 <a href='registrar.php' class='btn btn-primary'>Voltar</a> 

</body>

</html>