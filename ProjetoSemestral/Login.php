<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
</head><center>
<h2>Usuário</h2>
<form action="Logar.php" method="POST" class="POST"> 
  
    
    <label for="usuario"> Login </label>
    <input type="text" name="usuario" placeholder="Login" /><br/>
    <label for="senha"> Senha </label>
    <input type="password" name="senha" placeholder="Senha" /><br/>
    <input type="submit" value="Entrar" class="btn btn-primary" />
</form><br>

<h2>Administrador</h2>
<form action="LogarAdm.php" method="POST" class="POST"> 
    
    <label for="adm"> Login </label>
    <input type="text" name="adm" placeholder="Login" /><br/>
    <label for="pass"> Senha </label>
    <input type="password" name="pass" placeholder="Senha" /><br/>
    <input type="submit" value="Entrar" class="btn btn-primary" /></center>
</form>