<?php
session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])){
    header('Location: index.html');
    exit();
}

//usar usuário e senha teste1

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, md5($_POST['senha'])); //No cadastro já insere com md5

$query = "SELECT * FROM usuarios WHERE login =
'$usuario' AND senha = '$senha'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if ($row == 1){
    $_SESSION['usuario'] = $usuario;
    header('Location: painel.php');
    exit();
} else{
    header('Location: index.html');
    exit();
}
