<?php

if(isset($_POST["registraCurso"])){
    
    if($_POST["r_idioma"]=="" 
    || $_POST["r_prof"]=="" 
    || $_POST["r_nivel"]=="" 
    || $_POST["r_clave"]=="" 
    || $_POST["r_cupo"]=="" 
    ){
        echo "DATOS INCOMPLETOS";

    }
    else{
        $idioma = $_POST["r_idioma"];
        $prof   = $_POST["r_prof"];
        $nivel  = $_POST["r_nivel"];
        $clave  = $_POST["r_clave"];
        $cupo   = $_POST["r_cupo"];
        echo $idioma . " " . $prof ." ". $nivel ." ". $clave ." ". $cupo;
        alta_curso($idioma,$prof,$nivel,$clave,$cupo);
    }
}




?>