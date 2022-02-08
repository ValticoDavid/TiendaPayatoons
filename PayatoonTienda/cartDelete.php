<?php 
$identificador = $_POST['identificador'];
setcookie($identificador,"");
$newItem = $_COOKIE['numItem'];
settype($newItem,"Integer");
$newItem--;
setcookie("numItem",$newItem);
?>