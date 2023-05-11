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
            <form>
                <div style="text-align:center">
               <h2 style="margin-left:5%;">Clave del curso</h2>
               <br>
                </div>
                <div style="text-align:center">
                    <div class="d-flex justify-content-around">
                    <div>
                    <h5>Clave</h5>
                    <div class="d-flex justify-content-center">
                    <input type="text" class = "form-control w-100">
                    </div>
                </div>
                   
                <div>
                    <h5>Idioma</h5>
                    <div class="d-flex justify-content-center">
                        <select name='m_tipo' class='form-select' style='width:300px;' aria-label='Default select example'>                        
                            <option selected value='1'>Alumno</option>
                            <option value='2'>Asesor</option>
                            <option value='3'>Profesor</option>
                            <option value='4'>Administrador</option>
    
                        </select>
                    </div>
                    </div>    


                   <div>
                    <h5>Profesor</h5>
                        <div class="d-flex justify-content-center">
                            <select name='m_tipo' class='form-select' style='width:300px;' aria-label='Default select example'>                        
                                <option selected value='1'>Alumno</option>
                                <option value='2'>Asesor</option>
                                <option value='3'>Profesor</option>
                                <option value='4'>Administrador</option>
        
                            </select>
                        </div>
                    </div>

                    <div>
                    <button class="btn_eliminar" >Añadir Alumno</button>
                    </div>

                </div>
               </div>

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
                  
                        <tr>
                            <th>226959</th>
                            <td>Jorge</td>
                            <td>Romo</td>
                            <td><button class="btn_añadir fa fa-times" ></button></td>
                        </tr>
                        <?php
                            /*foreach ( $ArrUsuarios as  $User ){
                                
                                echo "<tr>";
                                echo "<th scope='row'>".$User->uId."</th>";
                                echo "<td>".$User->uNombre."</td>";
                                echo "<td>".$User->uApeP."</td>";
                                

                        
                                echo "<td >
                                <a href='userInfo.php?userId=".$User->uId."&action=view'><i  style='margin-left:5px;' class='fa fa-address-book i-info' ></i></a>
                                <a href='userInfo.php?userId=".$User->uId."&action=edit'><i  style='margin-left:5px;' class='fa fa-wrench i-edit' aria-hidden='true'></i></a>
                                <i  style='margin-left:5px;' class='fa fa-unlock-alt i-pwd' aria-hidden='true'></i>
                                <i id='".$User->uId."' onclick='viewUser(this.id)' data-bs-toggle='modal' data-bs-target='#exampleModal' style='margin-left:5px;' class='fa fa-trash i-delete' aria-hidden='true'></i></td>";
                            
                                echo "</tr>";
                            }

        */
                        ?>
                    
                    
                    
                    </tbody>
                </table>
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