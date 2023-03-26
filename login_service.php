<?php

    if(!empty($_POST['submit_login'])){
        if($_POST["user_id"]=="" || $_POST["user_pwd"]==""){
            echo "Error";
        }
        else{
            $id = $_POST["user_id"];
            $pwd = $_POST["user_pwd"];
            echo $id . " " . $pwd;
        }
    }



?>