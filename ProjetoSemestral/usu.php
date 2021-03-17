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
        <th>Usuário</th>
        <th>Senha</th>
    </tr>
    <?php
    include 'Conectar.php';
    conectar();
    $sql = "SELECT * FROM usuario";
    $rs = mysql_query($sql);
    for ($i = 0; $i < mysql_num_rows($rs); $i++) {
        $cod = mysql_result($rs, $i, "codUsu");
        $usuario = mysql_result($rs, $i, "login");
        $senha = mysql_result($rs, $i, "senha");

        echo 
        "<tr>
 <td>$cod</td>
 <td>$usuario</td>
 <td>$senha</td>
 <td><a href='apagarU.php?codUsu=$cod' class='btn btn-danger'>Apagar</a></td>
 
 </tr>";
    }
    ?>
    
</table>
<center>
   <a href='novoU.php?codUsu=$cod' class='btn btn-primary'>Novo usuário</a>