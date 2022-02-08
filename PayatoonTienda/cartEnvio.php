<?php

    // Recolectar las variables
    
    $tallaH = explode(",",$_POST['tallaH']);
    $tallaM = explode(",",$_POST['tallaM']);
    $tallaN = explode(",",$_POST['tallaN']);
    $tallaSelect="";
    $genero="";

    $newItem = $_COOKIE['numItem'];
    
    if($tallaH[0]!=""){
        $tallaSelect=$tallaH[0];
        $genero=$tallaH[1];
        $identificador = identificador();

        // Arreglo de producto 
        $producto = "cart,".$tallaSelect.",".$_POST['id'].",".$_POST['cantidad'].","
        .$_POST['imagen'].",".$_POST['titulo'].",".$_POST['precio'].",".$genero.",".$identificador;
        setcookie($identificador,$producto);
        $newItem++;
    }
    
    if($tallaM[0]!=""){
        $tallaSelect=$tallaM[0];
        $genero=$tallaM[1];
        $identificador = identificador();

        // Arreglo de producto 
        $producto = "cart,".$tallaSelect.",".$_POST['id'].",".$_POST['cantidad'].","
        .$_POST['imagen'].",".$_POST['titulo'].",".$_POST['precio'].",".$genero.",".$identificador;
        setcookie($identificador,$producto);
        $newItem++;
    }

    if($tallaN[0]!=""){
        $tallaSelect=$tallaN[0];
        $genero=$tallaN[1];
        $identificador = identificador();

        // Arreglo de producto 
        $producto = "cart,".$tallaSelect.",".$_POST['id'].",".$_POST['cantidad'].","
        .$_POST['imagen'].",".$_POST['titulo'].",".$_POST['precio'].",".$genero.",".$identificador;
        setcookie($identificador,$producto);
        $newItem++;
    }

    // Se comprueba el envio de datos desde el formulario de productos
    if(isset($_COOKIE['numItem']) && $_POST['numItem']){
        settype($newItem,"Integer");
        setcookie("numItem",$newItem);
    }
    else if(!isset($_COOKIE['numItem'])){
        setcookie("numItem",1);
    }

    function identificador(){
        $str1 = str_shuffle("0123456789ABCDEF");
        $str2 = str_shuffle("0123456789ABCDEF");
        return substr($str1,0,4).substr($str2,0,4);
    }
?>