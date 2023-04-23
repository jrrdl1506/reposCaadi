<?php
    require("connection.php");
    require("registroUsuarios_service.php");
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sidebar.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <title>Sidebar menu with sub-menus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="css/registroUsuarios.css">

</head>

<div class="d-flex p-2 bd-highlight" style="padding: 0 !important;">
    <?php include('sidebar.php'); ?>
   
    <temp>
        <div class="d-flex flex-column top-bar"><h2 class="page-title">Registrar Usuario</h2></div>
        <div class="d-flex flex-column top-bar2"></div>
        <div class="d-flex flex-column top-bar3">
            <form action="" method="post">
                <div class="d-flex form-div">
                    <div class="form-section  flex-fill">
                        <h3>Datos Obligatorios</h3>
                        <h4>Información del usuario</h4>
                        <label>Id Usuario</label>
                        <input name="r_id" type="text" class="form-control w-75 " placeholder="Ingresa Id">
                        <br>
                        <label>Categoria</label>
                        <select name="r_cat" class="form-select w-75" aria-label="Default select example">
                            
                            <option selected value="1">Extensión</option>
                            <option value="2">DAFI</option>
                            <option value="3">Externos</option>
                            <option value="4">LDII</option>
                            <option value="5">FLE-ELE</option>
                            <option value="6">Formación de Profesores</option>
                        </select>
                        <br>
                        <label>Tipo de Usuario</label>
                        <select name="r_userType" class="form-select w-75" aria-label="Default select example">
                            
                            <option selected value="1">Alumno</option>
                            <option value="2">Profesor</option>
                            <option value="3">Asesor</option>
                            <option value="4">Administrador</option>
                            
                        </select>
                        <br>
                        <h4>Datos Personales</h4>
                        <label>Nombre</label>
                        <input name="r_nombre" type="text" class="form-control w-75" placeholder="Ingresa Nombre">
                        <br>
                        <label>Apellido Paterno</label>
                        <input name="r_apePat" type="text" class="form-control w-75" placeholder="Ingresa Apellido Pat.">
                        <br>
                        <label>Apellido Materno</label>
                        <input name="r_apeMat" type="text" class="form-control w-75" placeholder="Ingresa Apellido Mat.">
                        <br>
                    </div>
                    <div class="form-section w-50">
                    
                        <h3>Datos Opcionales</h3>
                        <h4>Información de Contacto</h4>
                        <label>Teléfono</label>
                        <input name="r_tel" type="text" class="form-control w-75 " placeholder="Ingresa Teléfono">
                        <br>
                        <label>Correo Electronico</label>
                        <input name="r_email" type="text" class="form-control w-75 " placeholder="Ingresa E-mail">
                        <br>
                        <h4>Foto de Perfíl</h4> 
                        <img src="css/user.png" style="width:140px; height:140px; margin-left: 15%; margin-top: 25px;"><br><br>
                        <div class="form-check form-switch">
                            <input class="form-check-input"  name="r_foto" type="checkbox" id="flexSwitchCheckDefault" value="1">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Tomar una foto de perfíl</label>
                        </div>
                        <br>
                        <button type="submit" name="registraUsuario" class="btn btn-danger" > Registrar </button>
                    </div>
                    </div>
                </div>
                
                

            </form>
            
        </div>
        
        
    </temp>
</div>

    
    
   

    <script type="text/javascript">
        $(document).ready(function(){
            $('.sub-btn').click(function(){
                $(this).next('.sub-menu').slideToggle();
                $(this).find('.dropdown').toggleClass('rotate');
            });

            $('.menu-btn').click(function(){
                $('.side-bar').addClass('active');
            });

            $('.close-btn').click(function(){
                $('.side-bar').removeClass('active');
            });

        });


    </script>
    

</html>