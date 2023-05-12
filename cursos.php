<?php
 require("connection.php");
 require("services/usuarios_service.php");
 require("services/clubes_service.php");
 require("cursos_service.php");

 $ArrProfesores = get_Profesores();
 $ArrIdiomas = get_Idiomas();
 $ArrCursos = get_cursos();

 

 

 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sidebar.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>


    <title>Sidebar menu with sub-menus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/registroUsuarios.css">
    <link rel="stylesheet" href="css/listaUsuarios.css">
    <link rel="stylesheet" href="css/cursos.css">
</head>

<div class="d-flex p-2 bd-highlight" style="padding: 0 !important;">
    <?php include('sidebar.php'); ?>
   
    <temp>
        <div class="d-flex flex-column top-bar"><h2 class="page-title">Cursos del departamento de idiomas</h2></div>
        <div class="d-flex flex-column top-bar2"></div>
        <div class="d-flex flex-column top-bar3">
        <br>
        <div class="d-flex justify-content-center">
            <button onclick='viewCurso(0,0)' class ="btn btn-danger"  data-bs-toggle='modal' data-bs-target='#exampleModal'>Agregar Cursos</button>
            <button class ="btn btn-warning">Agregar Alumnos</button>
        </div>
        <br>
        <table class="table table-danger table-striped">
            <thead>
                <tr>
                <th scope="col">Clave</th>
                <th scope="col">Idioma</th>
                <th scope="col">Nivel</th>
                <th scope="col">Profesor</th>
                <th scope="col">Cupo</th>
                <th scope="col">Alumnos</th>
            
                
                </tr>
            </thead>
            <tbody>
                <?php
                
                    foreach ( $ArrCursos as  $Curso ){
                        
                        echo "<tr>";
                        echo "<th id='".$Curso -> cId."' scope='row'>". $Curso -> cClave ."</th>";
                        echo "<td>".get_idioma($Curso -> cIdIdioma) ."</td>";
                        echo "<td>".$Curso -> cNivel."</td>";
                        echo "<td>".get_usuario_value($Curso -> cIdProf,1)." ".get_usuario_value($Curso -> cIdProf,2)."</td>";
                        echo "<td>".$Curso -> cCupo ."</td>";
                        echo "<td >
                        <a href='cursos_config.php?cursoId=".$Curso -> cId ."'class='fa fa-wrench  btn_curso btn_añadir' class='sub-item'><i ></i></a>
                        <button id='".$Curso -> cId."' onclick='viewCurso(this.id,2)' data-bs-toggle='modal' data-bs-target='#exampleModal' class='fa fa-user-times btn_curso btn_eliminar'></button>
                        <button id='".$Curso -> cId."' onclick='viewCurso(this.id,3)' data-bs-toggle='modal' data-bs-target='#exampleModal' class='fa fa-wrench btn_curso btn_editar ' ></button>
                        </td>";
                        

                   
                      
                       
                        echo "</tr>";
                    }
                    

                ?>
            
            
            
            </tbody>
        </table>

        <!-- Button trigger modal -->


<!-- Modal 1 -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div style="text-align:center">
        <br>
            <i class="fa fa-graduation-cap" style="font-size: 110px; color:rgb(38, 64, 130);" aria-hidden="true"></i>
            <br>
        <br>
        <h6 id="id-curso" type="hidden">ID DE CURSO</h6>
        <h2>Agregar un curso</h2>
            <br>
            <form id="user-Delete" action="" method="post">
            <h6>Elija un idioma</h6>
            <select name="r_idioma" class="form-select w-75" aria-label="Default select example">
            <?php
                foreach($ArrIdiomas as $Idioma){
                    echo "<option value='".$Idioma->iId."'>".$Idioma->iNombre."</option>";
                }
                ?>
                
            </select>
                    
            <br>
            <h6>Elija un profesor</h6>
            <select name="r_prof" class="form-select w-75" aria-label="Default select example">
                <?php
                foreach($ArrProfesores as $Prof){
                    echo "<option value='".$Prof->uId."'>".$Prof->uNombre." ".$Prof->uApeP."</option>";
                }
                ?>
                
            </select>
            
            <br>
            <h6>Seleccione un nivel</h6>
            <select name="r_nivel" class="form-select w-75" aria-label="Default select example">
                <option selected value="1-2">1-2</option>
                <option value="3-4">3-4</option>
                <option value="5+">5+</option>
            </select>
            <br>
            <div class="d-flex justify-content-around">
                
                <input name="r_clave" type="text" class ="form-control w-25"  placeholder="Clave">
                <input name="r_cupo" type="text" class ="form-control w-25" placeholder="Cupo">
            </div>
            <br>
            <div class="d-flex justify-content-center">
            
            <button  type="submit" name="registraCurso" class="btn btn-danger">Añadir Curso</button>
            </form>
        </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>



  
<!-- Modal Add-->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModal" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div style="text-align:center">
        <br>
            <i class="fa fa-graduation-cap" style="font-size: 110px; color:rgb(38, 64, 130);" aria-hidden="true"></i>
            <br>
        <br>
        <h2>Agregar un alumno</h2>
            <br>
            <form id="user-Delete" action="" method="post">
            <h6>Elija un idioma</h6>
            <select name="r_idioma" class="form-select w-75" aria-label="Default select example">
            <?php
                foreach($ArrIdiomas as $Idioma){
                    echo "<option value='".$Idioma->iId."'>".$Idioma->iNombre."</option>";
                }
                ?>
                
            </select>
                    
            <br>
            <h6>Elija un profesor</h6>
            <select name="r_prof" class="form-select w-75" aria-label="Default select example">
                <?php
                foreach($ArrProfesores as $Prof){
                    echo "<option value='".$Prof->uId."'>".$Prof->uNombre." ".$Prof->uApeP."</option>";
                }
                ?>
                
            </select>
            
            <br>
            <h6>Seleccione un nivel</h6>
            <select name="r_nivel" class="form-select w-75" aria-label="Default select example">
                <option selected value="1-2">1-2</option>
                <option value="3-4">3-4</option>
                <option value="5+">5+</option>
            </select>
            <br>
            <div class="d-flex justify-content-around">
                
                <input name="r_clave" type="text" class ="form-control w-25"  placeholder="Clave">
                <input name="r_cupo" type="text" class ="form-control w-25" placeholder="Cupo">
            </div>
            <br>
            <div class="d-flex justify-content-center">
            
            <button  type="submit" name="registraCurso" class="btn btn-danger">Añadir Curso</button>
            </form>
        </div>
        </div>
      </div>
      <div class="modal-footer">
        
        
    </temp>
</div>






<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="js/cursos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

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