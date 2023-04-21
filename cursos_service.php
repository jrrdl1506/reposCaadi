<?php

if(isset($_POST["registraCurso"])){
    
    if($_POST["r_id"]=="" 
    || $_POST["r_tipo"]=="" 
    || $_POST["r_nombre"]=="" 
    || $_POST["r_apePat"]=="" 
    || $_POST["r_apeMat"]=="" 
    || $_POST["r_userType"]=="" ){
        echo "DATOS INCOMPLETOS";

    }
    else{
        /*
    echo    $_POST["r_id"] . "</br>";
    echo    $_POST["r_tipo"] . "</br>"; 
    echo    $_POST["r_nombre"] . "</br>"; 
    echo    $_POST["r_apePat"] . "</br>"; 
    echo    $_POST["r_apeMat"] . "</br>";
    */

    $id    = $_POST["r_id"] ;
    $pwd = "12345";
    $tipo   = $_POST["r_userType"];           
    $nombre =   $_POST["r_nombre"] ; 
    $apePat =   $_POST["r_apePat"] ; 
    }
}


?>