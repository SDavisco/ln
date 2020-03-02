<?php
@session_start();
if(!isset($_SESSION["user_name"])) header("Location: login.php");
/*
Pagina para los alumnos
*/
include 'include/layout/header.php';
?>