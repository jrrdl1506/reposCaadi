<?php
    require("classes/idioma.php");

    //Obtiene todos los idiomas
    function get_Idiomas(){
        $ArrayIdiomas=array();
    
        $connection=connect();
        $query = "SELECT * FROM idioma";
        if($connection->query($query) != TRUE){
            echo("Error al conectarse a la base de datos");
            
        }
        else{
            $result=$connection->query($query);
            while($row = $result->fetch_assoc()){
            
            
                $ObjIdioma = new Idioma();
                $ObjIdioma->constructor($row["idIdioma"],$row["idioma"]);
                

                array_push($ArrayIdiomas,$ObjIdioma);
                
                
            };  
        }   
        return $ArrayIdiomas;
    }

    function alta_curso($idCurso,$idProfesor,$idIdioma,$clave,$cupo){
        $connection = connect();
        $query = "INSERT INTO curso (idProfesor,idIdioma,clave,cupo)
        values ('$idProfesor', '$idIdioma', '$clave', '$cupo')";
        if($connection->query($query)!=TRUE){
            echo("Error conectandose a la base de datos");
        }
        else{
           echo "Si se hizo el query";
        }
        

    }



?>