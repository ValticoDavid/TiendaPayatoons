<?php 
    foreach($_COOKIE as $lista){
        $producto = explode(",",$lista);
        if($producto[0]=="cart"){
            setcookie($producto[8],"");
        }
    }
    setcookie("numItem","0");
?>