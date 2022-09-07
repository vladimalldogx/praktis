<?php
include("database.php");
session_start();

    extract($_POST);
        $add = $dcn->query("INSERT into mallen(name,lname,nickname)VALUES('$fname','$lastn','$niname')");
        if($add){
            $_SESSION['message'] = "success";
           
        }else{
            $_SESSION['message'] = "gg";
           
        }
        header("Location: index.php");
        exit();



?>