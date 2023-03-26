<?php
    require("../classes/usuario.php");

    function get_Usuarios(){
        $ArrayUsuarios=array();
    
        $connection=connect();
        $query = "SELECT * FROM usuario";
        if($connection->query($query) != TRUE){
            echo("Error al conectarse a la base de datos");
            
        }
        else{
            $result=$connection->query($query);
            while($row = $result->fetch_assoc()){
            
            
                $ObjUsuario = new Usuario();
                $ObjUsuario->constructor($row["id"],$row["nombre"],$row["apPat"],$row["apMat"],$row["tipo"],$row["tel"],$row["foto"],$row["email"]);
                

                array_push($ArrayUsuarios,$ObjUsuario);
                
                
            };  
        }   
        return $ArrayUsuarios;
    
    }


?>
