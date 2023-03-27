<?php
 require("connection.php");
 require("services/generalPurpose_service.php");
 $ArrUsuarios = get_Usuarios();


 
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/registroUsuarios.css">
    <link rel="stylesheet" href="css/listaUsuarios.css">
</head>

<div class="d-flex p-2 bd-highlight" style="padding: 0 !important;">
    <?php include('sidebar.php'); ?>
   
    <temp>
        <div class="d-flex flex-column top-bar"><h2 class="page-title">Lista de Usuarios</h2></div>
        <div class="d-flex flex-column top-bar2"></div>
        <div class="d-flex flex-column top-bar3">
        <table class="table table-danger table-striped">
            <thead>
                <tr>
                <th scope="col">Id Usuario</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Tipo</th>
                <th scope="col">Categoria</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ( $ArrUsuarios as  $User ){
                        
                        echo "<tr>";
                        echo "<th scope='row'>".$User->uId."</th>";
                        echo "<td>".$User->uNombre."</td>";
                        echo "<td>".$User->uApeP."</td>";
                        echo "<td>".$User->uTipo."</td>";
                        echo "<td>"."PENDIENTE"."</td>";
                        echo " <td >
                        <i style='margin-left:5px;' class='fa fa-address-book i-info' aria-hidden='true'></i>
                        <i  style='margin-left:5px;' class='fa fa-wrench i-edit' aria-hidden='true'></i>
                        <i style='margin-left:5px;' class='fa fa-unlock-alt i-pwd' aria-hidden='true'></i>
                        <i style='margin-left:5px;' class='fa fa-trash i-delete' aria-hidden='true'></i></td>";
                        echo "</tr>";
                    }


                ?>
            
            
            
            </tbody>
        </table>

        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
            
        </div>
        
        
    </temp>
</div>

    
    
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