<?php
session_start();
require 'function.php';

if(empty($_SESSION['usuario'])   || $_SESSION['usuario']['tipo_user'] != 'empleado' ){
 header('Location: home.php');
}
$conn= conectarabd();
$pagina = "EVENTO";
$ind = 8;
$statement = obt_tabla($ind, $conn, $pagina);

require('view/admin-eventos.php');

?>