<?php
@session_start();
if(!isset($_SESSION["user_name"])) header("Location: login.php");
/*
Pagina para los administradores
*/
 include 'include/layout/header.php';
?>