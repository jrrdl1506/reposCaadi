

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
        <div class="d-flex flex-column top-bar"><h2 class="page-title">Cursos del departamento de idiomas</h2></div>
        <div class="d-flex flex-column top-bar2"></div>
        <div class="d-flex flex-column top-bar3">
        <br>
        <div class="d-flex justify-content-center">
            <button class ="btn btn-danger"  data-bs-toggle='modal' data-bs-target='#exampleModal'>Agregar Cursos</button>
            <button class ="btn btn-warning">Agregar Alumnos</button>
        </div>

        <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div style="text-align:center">
        <br>
        <i class="fa fa-exclamation-triangle" style="font-size: 110px; color:rgba(188, 65, 79, 1)" aria-hidden="true"></i>
        <br>
        <h2>¿Está seguro?</h2>

            <h4 id="target-Modal">Está por eliminar al usuario: Jorge Romo</h4>
            <br>
            <div class="d-flex justify-content-center">
            <form id="user-Delete" action="" method="post">
            <button  type="submit" name="delUser" class="btn btn-danger">Eliminar Usuario</button>
            </form>
        </div>
        </div>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
            
        </div>
        
        
    </temp>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="js/listaUsuarios.js"></script>
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