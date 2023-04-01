<?php
    require("classes/usuario.php");

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
                $ObjUsuario->constructor($row["id"],$row["nombre"],$row["apPat"],$row["apMat"],$row["tipo"],$row["tel"],$row["foto"],$row["email"],$row["categoria"]);
                

                array_push($ArrayUsuarios,$ObjUsuario);
                
                
            };  
        }   
        return $ArrayUsuarios;
    
    }

    function get_Usuario($userId){
        $connection = connect();
        $query = "SELECT * FROM usuario WHERE id=$userId";
        if($connection->query($query)!=TRUE){
            echo("Error conectandose a la base de datos");
        }
        else{
            $result=$connection->query($query);
            $row = $result->fetch_assoc();
            
            $ObjUsuario = new Usuario();
            $ObjUsuario->constructor($row["id"],$row["nombre"],$row["apPat"],$row["apMat"],$row["tipo"],$row["tel"],$row["foto"],$row["email"],$row["categoria"]);

        }
        return $ObjUsuario;
    }

    function obtenerTipo($tipo){
        $uType="";
        switch($tipo){
            case 1:{
                $uType="Alumno";
                break;
            }
            case 2:{
                $uType="Profesor";
                break;
            }
            case 3:{
                $uType="Asesor";
                break;
            }
            case 4:{
                $uType="Administrador";
                break;
            }
            
        }

        return $uType;

    }

    function obtenerCategoria($cat){
        $uCat="";
        switch($cat){
            case 1:{
                $uCat="Extension";
                break;
            }
            case 2:{
                $uCat="DAFI";
                break;
            }
            case 3:{
                $uCat="Externos";
                break;
            }
            case 4:{
                $uCat="LDII";
                break;
            }
            case 5:{
                $uCat="FLE-ELE";
                break;
            }
            case 6:{
                $uCat="Formacion de Profesores";
                break;
            }
            
        }

        return $uCat;

    }


?>
