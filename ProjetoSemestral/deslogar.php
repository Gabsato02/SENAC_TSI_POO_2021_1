<?php
session_start();
$_SESSION["logado"] = array();
$_SESSION["logadoADM"] = array();
session_destroy();
header("Location: Login.php");
?>