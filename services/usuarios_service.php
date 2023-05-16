<?php
    require("classes/usuario.php");

    //Regresa todos los usuarios
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


    //Regresa un usuario
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

    function busca_usuario($userId){
        $connection = connect();
        $query = "SELECT * FROM usuario WHERE id=$userId";
        $result = $connection->query($query);
    
        if ($result && $result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    
    /*
        Esta funcion va a restornar distintos valores dependiendo del numero que se le mande
        0- Retorna el id
        1- Retorna el nombre
        2- Retorna el apeP
        3- Retorna el apeM
        4- Retorna  el tipo
        5- Retorna el telefono
        6- Retorna el email
        7- Retorna la categoria
    */

    function get_usuario_value($idUsuario,$valor){
        
        $Usuario=get_Usuario($idUsuario);
        switch($valor){
            case 0:{
                return $Usuario->uId;
            }
            case 1:{
                return $Usuario->uNombre;
            }
            case 2:{
                return $Usuario->uApeP;
            }
            case 3:{
                return $Usuario->uApeM;
            }
            case 4:{
                return $Usuario->uTipo;
            }
            case 5:{
                return $Usuario->uTel;
            }
            case 6:{
                return $Usuario->uEmail;
            }
            case 7:{
                return $Usuario->uCategory;
            }
        }
       
       
      
    }

    //Borra un usuario
    function deleteUsuario($userId){
        $connection = connect();
        $query="DELETE FROM  WHERE id;=$userId";
        if($connection->query($query)!=TRUE){
            echo("Error conectandose a la base de datos");
        }
        else{
            echo "Si se hizo el query";
        }


    }

    //Regresa el tipo del usuario
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

    //Regresa la categoria del usuario
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

    //Obtener todos los profesores
    function get_Profesores(){
        
        $ArrayUsuarios=array();
    
        $connection=connect();
        $query = "SELECT * FROM usuario WHERE tipo=2";
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















    //Elimina un usuario desde un form
    if(isset($_POST["delUser"])){
        $connection = connect(0);
        $idUser=$_POST["id-Del"];
        echo $idUser;
        $query="DELETE FROM usuario WHERE id=$idUser";
    
    if($connection->query($query) != TRUE){
        $_SESSION["message"] = '"Hubo un problema. Contacte al personal de CAADI.","Error: '.$connection->error.'","error"';
        disconnect($connection);
        //header('Location:'.$url);
    }
    else {
        echo ("Si se hizo el query");
        header('Location: listaUsuarios.php?swalSuccess=true');

    }

    }




?>
