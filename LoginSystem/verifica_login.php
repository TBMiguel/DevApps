<?php
session_start();
if($_SESSION['usuario'] == ""){
    header('Location: index.html');
    exit();
}