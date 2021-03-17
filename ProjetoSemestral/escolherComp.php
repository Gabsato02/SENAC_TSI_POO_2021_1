<?php include 'VerificarLogin.php' ?>

<head>
   
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
</head>

<table class="table">
    <tr>
        <th>Código</th>
        <th>Computador</th>
    </tr>
    <?php
    include 'Conectar.php';
    conectar();
    $sql = "SELECT * FROM computadores";
    $rs = mysql_query($sql);
    for ($i = 0; $i < mysql_num_rows($rs); $i++) {
        $cod = mysql_result($rs, $i, "codComp");
        $nome = mysql_result($rs, $i, "nome");
        
        echo 
        "<tr>
 <td>$cod</td>
 <td>$nome</td>
 <td><a href='novoForm.php?nome=$nome' class='btn btn-primary'>Selecionar</a></td>
 </tr>";
    }
    ?>
</table>
<center>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    

 <a href='registrar.php' class='btn btn-primary'>Voltar</a> 

