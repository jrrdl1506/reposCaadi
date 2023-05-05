<?php
    require("classes/idioma.php");
    require("classes/curso.php");


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

    function alta_curso($idIdioma,$idProfesor,$nivel,$clave,$cupo){
        
        $connection = connect();
        $query = "INSERT INTO curso (idProfesor,idIdioma,nivel,clave,cupo)
        values ('$idProfesor', '$idIdioma','$nivel', '$clave', '$cupo')";
        if($connection->query($query)!=TRUE){
            echo("Error conectandose a la base de datos");
        }
        else{
           echo "Si se hizo el query";
        }
        

    }

    function get_cursos(){
        $ArrayCurso=array();
        $connection = connect();
        $query = "SELECT * FROM curso";
        if($connection -> query($query) != TRUE){
            echo("Error al conectarse a la base de datos");
        }
        else{
            $result=$connection->query($query);
            while($row = $result->fetch_assoc()){
            
            
                $ObjCurso = new Curso();
                $ObjCurso->constructor($row["idCurso"],
                $row["idProfesor"],
                $row["idIdioma"],
                $row["nivel"],
                $row["clave"],
                $row["cupo"]);
                

                array_push($ArrayCurso,$ObjCurso);
                
                
            };  
        }
        return $ArrayCurso;
    }


    function get_idioma($idIdioma){
        $connection = connect();
        $query = "SELECT * FROM idioma WHERE idIdioma='$idIdioma'";
        if($connection -> query($query) != TRUE){
            echo("Error al conectarse a la base de datos");
        }
        else{
            $result=$connection->query($query);
            $row = $result->fetch_assoc();
            $ObjIdioma = new Idioma();
            $ObjIdioma -> constructor($row["idIdioma"],$row["idioma"]);
                
            return $ObjIdioma -> iNombre;
        }

    }

    

    



?>