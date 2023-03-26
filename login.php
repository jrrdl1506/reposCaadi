<?php


  require("login_service.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">

    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>

    
     
    <div class="bar_blue  ">
        <img class="logo_idiomas" src="css/idiomas.png">


    </div>
    <div class="bar_red "></div>
   

    <div class="flex-container">
        <div class="log flex-item" >
            <form class="loginform d-flex justify-content-center" action="" method="post">
              
                <div class="d-flex flex-column">
                  <div class="logo_container">
                    <img class="uaa_logo" src="css/uaa.png">
                    <br><br>
                    <h2><strong>Bienvenido a CAADI </strong></h2>  
                    <br>
                    
                    <h3><strong>Ingresa tu id</strong></strong></h3>
                    <br>
                    <input type="text" name="user_id" class="input_form" placeholder="User id">
                    <br><br> 
                    <h3><strong>Ingresa tu contraseña</strong></strong></h3>
                    <br>
                    <input type="password" name="user_pwd" class="input_form" placeholder="Password">
                    <br><br><br><br>

                    <input type="submit" class="btn btn-danger login_btn" name="submit_login" value="Acceder"/>
                    
                  </div> 

                  
                    
                </div>
                

            </form>

        </div>
        <div class="bg flex-item">

        </div>


    </div> 
    
   
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>


