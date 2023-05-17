<?php
require("connection.php");
require("services/usuarios_service.php");
require("services/clubes_service.php");

$Curso=get_curso($_GET["cursoId"]);
$Idioma=get_idioma($Curso->cIdIdioma);
$Prof=get_Usuario($Curso->cIdProf);
$ArrIdiomas=get_Idiomas();
$ArrProfesores=get_Profesores();
$Alumnos_curso=get_usuarios_curso($_GET["cursoId"]);





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
    <link rel="stylesheet" href="css/formStyles.css">

</head>

<div class="d-flex p-2 bd-highlight" style="padding: 0 !important;">
    <?php include('sidebar.php'); ?>
   
    <temp>
        <div class="d-flex flex-column top-bar"><h2 class="page-title">Configurar Curso</h2></div>
        <div class="d-flex flex-column top-bar2"></div>
        <div class="d-flex flex-column top-bar3">
            <br>    
            <form action="cursos_config_service.php" method="POST">
                <div style="text-align:center">
               <h2 style="margin-left:5%;"><?php echo $Curso->cClave ?></h2>
               <br>
                </div>
                <div style="text-align:center">
                    <div class="d-flex justify-content-around">
                    
               
                   
                <div>
                    <h5>Idioma</h5>
                    <div class="d-flex justify-content-center">
                        <select name='m_tipo' class='form-select' style='width:300px;' aria-label='Default select example'>                        
                            <option disabled selected value="0"><?php echo $Idioma ?></option>
                            <?php
                                 foreach ( $ArrIdiomas as  $Idioma ){
                                    echo "<option value='".$Idioma->iId."'>".$Idioma->iNombre."</option>";
                                 }
                            ?>
                            
    
                        </select>
                    </div>
                    </div>
                        


                   <div>
                    <h5>Profesor</h5>
                    <div class="d-flex justify-content-center">
                        <select name='m_tipo' class='form-select' style='width:300px;' aria-label='Default select example'>                        
                            <option disabled selected value="0"><?php echo $Prof->uNombre . " ". $Prof->uApeP ?></option>
                            <?php
                                 foreach ( $ArrProfesores as  $Profesor ){
                                    echo "<option value='".$Profesor->uId."'>".$Profesor->uNombre." ".$Profesor->uApeP."</option>";
                                 }
                            ?>
                            
    
                        </select>
                    </div>
                    </div>

                    <div>
                        
                    <button class="btn_eliminar" type="submit" name="modificarCurso">Modificar</button>
                    </div>

                </div>
               </div>
               <br><br>
               <input type="hidden" value="<?php echo $Curso->cId; ?>" name="id_curso">
               <h4 style="margin-left:35px;">Añadir Alumnos</h4>
               <div class="d-flex ">
                
               <input type="text" class = "form-control "  
               style="width:300px; height:40px; margin-top:30px; margin-right:10px; margin-left:35px;" 
               placeholder="Id Alumno a Añadir" name="id_alumno">
                    <div>
                        <button class="btn_eliminar" type="submit" name="altaAlumnoCurso">Añadir Alumno</button>
                    </div>       
               </div>
               </form>
               <br>
               <br>
               <h4 style="margin-left:5%;">Alumnos en el curso</h4>
               <br>
               <div class="container">
                    <table class="table table-secondary table-striped ">
                    <thead>
                        <tr>
                        <th scope="col">Id Usuario</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                      
                        <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                  
                       
                        <?php
                            foreach ( $Alumnos_curso as  $User ){
                                
                                echo "<tr>";
                                echo "<th scope='row'>".$User->uId."</th>";
                                echo "<td>".$User->uNombre."</td>";
                                echo "<td>".$User->uApeP."</td>";
                                echo "<td><button id=".$User->uId." onclick='borrarAlumno(this.id,".$_GET["cursoId"].")' class='btn_añadir fa fa-times' ></button></td>";

                        
                              
                                echo "</tr>";
                            }

        
                        ?>
                    
                    
                    
                    </tbody>
                </table>
        </div>

           
            
            
        </div>
        
        
    </temp>
</div>
    <script src="js/cursos_config.js"></script>
    
    
   

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