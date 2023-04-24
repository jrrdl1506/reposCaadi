<?php

$connection = connect(0);


if(isset($_POST["registraUsuario"])){
    
    if($_POST["r_id"]=="" 
    || $_POST["r_cat"]=="" 
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
    $apeMat =   $_POST["r_apeMat"] ;
    $email = "---";
    $tel=0;
    $cat=$_POST["r_cat"];
    if ($_POST["r_tel"] != ""){
        $tel=$_POST["r_tel"];
    }
    if ($_POST["r_email"] != ""){
        $email=$_POST["r_email"];
    }
    if(isset($_POST["r_foto"])){
        //echo "SIN FOTO";
        $foto = "default.jpg";
    }
    else{
        //echo "CON FOTO";
        $foto = "default.jpg";
    }

    $query = "INSERT INTO usuario (id,nombre,apPat,apMat,tel,pwd,tipo,foto,email,categoria)
    values ('$id', '$nombre', '$apePat', '$apeMat', '$tel', '$pwd', '$tipo', '$foto','$email','$cat')";
    
    if($connection->query($query) != TRUE){
         echo "Hubo un problema. Contacte al personal de CAADI.";
    
    }
    else {
        echo ("Si se hizo el query");

    }

    }
   
    

}

?>