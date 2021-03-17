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
        <th>Problema</th>
        <th>Data</th>
        <th>Status</th>
        <th>Data de Resolução</th>
    </tr>
    <?php
    include 'Conectar.php';
    conectar();
    $sql = "SELECT * FROM form";
    $rs = mysql_query($sql);
    for ($i = 0; $i < mysql_num_rows($rs); $i++) {
        $cod = mysql_result($rs, $i, "codForm");
        $computador = mysql_result($rs, $i, "Computador");
        $problema = mysql_result($rs, $i, "Problema");
        $data = mysql_result($rs, $i, "Data");
        $dataRes = mysql_result($rs, $i, "DataRes");
        $status = mysql_result($rs, $i, "Status");

        echo 
        "<tr>
 <td>$cod</td>
 <td>$computador</td>
 <td><textarea name='Problema' readonly>$problema</textarea></td>
 <td>$data</td>
 <td>$status</td>
 <td>$dataRes</td>
 <td><a href='Tempo.php?codForm=$cod' class='btn btn-primary'>Tempo de resolução</a></td>
 <td><a href='editar.php?codForm=$cod' class='btn btn-primary'>Editar</a></td>
 </tr>";
    }
    ?>
</table>

