<?php
    require("connection.php");
    require("services/usuarios_service.php");
    require("userInfo_service.php");
    $verUsuario=get_Usuario($_GET["userId"]);
    
    $red = rand(0, 255);
    $green = rand(0, 255);
    $blue = rand(0, 255);

    $rgb = "rgb($red, $green, $blue)";


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
    <link rel="stylesheet" href="css/userInfo.css">

</head>

<div class="d-flex p-2 bd-highlight" style="padding: 0 !important;">
    <?php include('sidebar.php'); ?>
   
    <temp>
        <div class="d-flex flex-column top-bar"><h2 class="page-title">
            <?php if ($_GET["action"]=="view"){echo "Ver Perfil Usuario";}else{echo "Editar Perfil Usuario";}?></h2></div>
        <div class="d-flex flex-column top-bar2"></div>
        <div class="d-flex flex-column top-bar3">
            <div class="formInfoUser" style='text-align:center;'>
                

            
                <div class="icon-circle" style=<?php echo "'background:$rgb'"?>>JJ</div>
                
            </div>
            <div class="user-info" style='text-align:center;'>
                <br>
                <h2><?php echo $verUsuario->uNombre ." ". $verUsuario->uApeP ?></h2>
                <br>
                <form action="" method="post" class="d-flex justify-content-around  bd-highlight" >
                    <div class="user-info-pad">
                        <h5>Información de Usuario</h5>

                            <h6>Id Usuario</h6>
                            <?php
                            if($_GET["action"]=="view"){
                                echo "<p>".$verUsuario->uId."</p>";
                            }
                            else{
                                echo "
                                <div class='d-flex justify-content-center' >
                                <input name='m_id' class='form-control' type='text'  style='width:300px;' value='".$verUsuario->uId."'>
                                </div>";

                            }
                            ?>
                            <br>

                            <h6>Tipo de Usuario</h6>
                            <?php
                            if($_GET["action"]=="view"){
                                echo "<p>".obtenerTipo($verUsuario->uTipo)."</p>";
                            }
                            else{
                                echo "
                                <div class='d-flex justify-content-center'>
                                <select name='m_tipo' class='form-select' style='width:300px;' aria-label='Default select example'>
                                        
                                    <option selected value='1'>Alumno</option>
                                    <option value='2'>Asesor</option>
                                    <option value='3'>Profesor</option>
                                    <option value='4'>Administrador</option>
                                
                                </select>
                                </div>";

                            }
                            ?>
                            <br>
                            <h6>Categoria</h6>
                            <?php
                            if($_GET["action"]=="view"){
                                echo "<p>".obtenerCategoria($verUsuario->uCategory)."</p>";
                            }
                            else{
                                echo "
                                <div class='d-flex justify-content-center'>
                                <select name='m_cat' class='form-select' style='width:300px;' aria-label='Default select example'>
                                        
                                    <option selected value='1'>Extensión</option>
                                    <option value='2'>DAFI</option>
                                    <option value='3'>Externos</option>
                                    <option value='4'>LDII</option>
                                    <option value='5'>FLE-ELE</option>
                                    <option value='6'>Formación de Profesores</option>
                                </select>
                                </div>";

                            }
                            ?>
                            <br>
                    </div>

                    
                    <div class="user-info-pad">
                        <h5>Información Personal</h5>
                        <h6>Nombre</h6>
                        <?php
                        if($_GET["action"]=="view"){
                            echo "<p>".$verUsuario->uNombre."</p>";
                        }
                        else{
                            echo "
                            <div class='d-flex justify-content-center' >
                            <input name='m_nom' class='form-control' type='text'  style='width:300px;' value='".$verUsuario->uNombre."'>
                            </div>";

                        }
                        ?>
                        <br>
                        <h6>Apellido Paterno</h6>
                        <?php
                        if($_GET["action"]=="view"){
                            echo "<p>".$verUsuario->uApeP."</p>";
                        }
                        else{
                            echo "
                            <div class='d-flex justify-content-center' >
                            <input name='m_apep' class='form-control' type='text'  style='width:300px;' value='".$verUsuario->uApeP."'>
                            </div>";

                        }
                        ?>
                        <br>
                        <h6>Apellido Materno</h6>
                        <?php
                        if($_GET["action"]=="view"){
                            echo "<p>".$verUsuario->uApeM."</p>";
                        }
                        else{
                            echo "
                            <div class='d-flex justify-content-center' >
                            <input name='m_apem' class='form-control' type='text'  style='width:300px;' value='".$verUsuario->uApeM."'>
                            </div>";

                        }
                        ?>
                    </div>

                    <div class="user-info-pad">
                        <h5>Información de Contacto</h5>
                        <h6>Teléfono</h6>
                        <?php
                        if($_GET["action"]=="view"){
                            echo "<p>".$verUsuario->uTel."</p>";
                        }
                        else{
                            echo "
                            <div class='d-flex justify-content-center' >
                            <input name='m_tel' class='form-control' type='text'  style='width:300px;' value='".$verUsuario->uTel."'>
                            </div>";

                        }
                        ?>
                        <br>
                        <h6>Email</h6>
                        <?php
                        if($_GET["action"]=="view"){
                            echo "<p>".$verUsuario->uEmail."</p>";
                        }
                        else{
                            echo "
                            <div class='d-flex justify-content-center' >
                            <input name='m_email' class='form-control' type='text'  style='width:300px;' value='".$verUsuario->uEmail."'>
                            </div>
                            <br><br>
                           <div class='d-flex justify-content-around'>
                
                                <button  type='submit' name='modificaUsuario' name='registraUsuario' class='btn btn-danger' class='btn btn-danger'>Confirmar Cambios</button>
                            </div>

                    
                        </div>
                            
                            ";

                        }
                        ?>

                        

                 
                </form>




 

              
                
                
               
  
            </div>
        
            
            
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