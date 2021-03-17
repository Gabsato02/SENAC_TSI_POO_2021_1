<?php include 'VerificarLoginAdm.php' ?>

<head>
   
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
</head>
<ul class="nav nav-tabs">
    
          <li><a href='adm.php' class='btn btn-sucess'>Início</a></li>
          <li><a href='Index.php' class='btn btn-sucess'>Reclamações</a></li>
          <li><a href='usu.php' class='btn btn-sucess'>Usuários</a></li>
          <li><a href='adms.php' class='btn btn-sucess'>Administradores</a></li>
          <li><a href='Computadores.php' class='btn btn-sucess'>Computadores</a></li>
          <li><a href='deslogar.php' class='btn btn-sucess'>Deslogar</a></li>      
    
</ul>

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
 <td><a href='editarComp.php?codComp=$cod' class='btn btn-primary'>Editar</a></td>
 <td><td><a href='apagarComp.php?codComp=$cod' class='btn btn-danger'>Apagar</a></td>
 </tr>";
    }
    ?>
</table>
<center>
<a href='novoComp.php?codComp=$cod' class='btn btn-primary'>Novo computador</a>