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
            <tr>
                    <th scope="row">226959</th>
                    <td>Jorge</td>
                    <td>Romo</td>
                    <td>Profesor</td>
                    <td>Extensión</td>
                    <td>
                        <i class="fa fa-address-book i-info" aria-hidden="true"></i>
                        <i class="fa fa-wrench i-edit" aria-hidden="true"></i>
                        <i class="fa fa-unlock-alt i-pwd" aria-hidden="true"></i>
                        <i class="fa fa-trash i-delete" aria-hidden="true"></i>
                    </td>
                </tr>
                <tr>
                    <th scope="row">226959</th>
                    <td>Jorge</td>
                    <td>Romo</td>
                    <td>Profesor</td>
                    <td>Extensión</td>
                    <td>
                        <i class="fa fa-address-book i-info" aria-hidden="true"></i>
                        <i class="fa fa-wrench i-edit" aria-hidden="true"></i>
                        <i class="fa fa-unlock-alt i-pwd" aria-hidden="true"></i>
                        <i class="fa fa-trash i-delete" aria-hidden="true"></i>
                    </td>
                </tr>
                <tr>
                    <th scope="row">226959</th>
                    <td>Jorge</td>
                    <td>Romo</td>
                    <td>Profesor</td>
                    <td>Extensión</td>
                    <td>
                        <i class="fa fa-address-book i-info" aria-hidden="true"></i>
                        <i class="fa fa-wrench i-edit" aria-hidden="true"></i>
                        <i class="fa fa-unlock-alt i-pwd" aria-hidden="true"></i>
                        <i class="fa fa-trash i-delete" aria-hidden="true"></i>
                    </td>
                </tr>
                <tr>
                    <th scope="row">226959</th>
                    <td>Jorge</td>
                    <td>Romo</td>
                    <td>Profesor</td>
                    <td>Extensión</td>
                    <td>
                        <i class="fa fa-address-book i-info" aria-hidden="true"></i>
                        <i class="fa fa-wrench i-edit" aria-hidden="true"></i>
                        <i class="fa fa-unlock-alt i-pwd" aria-hidden="true"></i>
                        <i class="fa fa-trash i-delete" aria-hidden="true"></i>
                    </td>
                </tr>
            </tbody>
        </table>
            
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