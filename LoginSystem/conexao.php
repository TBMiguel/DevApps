<?php

define('HOST','localhost:3306');
define('USUARIO','root');
define('SENHA','');
define('DB','teste');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel conectar!');
