<?php

$connection = connect(0);


if(isset($_POST["modificaUsuario"])){

    
    if($_POST["m_id"]=="" 
    || $_POST["m_tipo"]==""
    || $_POST["m_cat"]==""  
    || $_POST["m_nom"]=="" 
    || $_POST["m_apep"]=="" 
    || $_POST["m_apem"]=="" 
    || $_POST["m_tel"]=="" 
    || $_POST["m_email"]=="" ){
        echo "DATOS VACIOS";

    }
    else{

        $id=$_POST["m_id"];
        $tipo=$_POST["m_tipo"];
        $cat=$_POST["m_cat"]; 
        $nom=$_POST["m_nom"]; 
        $apep=$_POST["m_apep"];
        $apem=$_POST["m_apem"] ;
        $tel=$_POST["m_tel"];
        $email=$_POST["m_email"]; 
        $query = "UPDATE `usuario` SET 
        `id`=$id,
        `nombre`='$nom',
        `apPat`='$apep',
        `apMat`='$apem',
        `tel`='$tel',
        `tipo`='$tipo',
        `categoria`='$cat',
        `email`='$email' WHERE `id`=$id";
    
    if($connection->query($query) != TRUE){
        $_SESSION["message"] = '"Hubo un problema. Contacte al personal de CAADI.","Error: '.$connection->error.'","error"';
        disconnect($connection);
        header('Location:'.$url);
    }
    else {
        echo ("Si se hizo el query");
        header('Location: listaUsuarios.php');

    }

    }
   
    

}


?>