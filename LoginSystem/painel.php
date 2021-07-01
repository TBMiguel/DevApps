<?php
session_start();
require "verifica_login.php";
require "resource/aluno.html";
?>
<h2><?php echo 'Olá, ', $_SESSION['usuario'];?></h2>
<h2><a href="logout.php">Sair</a></h2>