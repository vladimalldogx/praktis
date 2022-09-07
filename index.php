<?php
session_start();
include("database.php");

    if(isset($_SESSION['message'])){
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <div style="padding-left: 350px;">
    <?php
        if(empty($_GET['id'])){

        }else{
            $vid = $_GET['id'];
            $view = $dcn->query("SELECT * from mallen WHERE id = '$vid'");
            if($view->rowCount()>0){
                while($sdata = $view->fetch(PDO::FETCH_ASSOC)){?>
                        <label> Personal Info:<label>
                            Name: <?=$sdata['name']?>
                            <br>
                            LName: <?=$sdata['lname']?>
                            <br>
                            Nickname: <?=$sdata['nickname']?>
                            <br>
                            <a href="index.php">Clear</a>
               <?php }}}?>
            
                
        
    
    
    
    

    </div>
    <a href="addNew.php">Add Data</a>
        <table>
        <thead>
        <tr>
        <th>name</th>
        <th>lname</th>
        <th>nickname</th>
        <th>actions</th>
        </tr>
        </thead>
        <tbody>
            <?php 
                $retdata =$dcn ->query("SELECT * FROM mallen");
                if($retdata->rowCount()>0){
                    while($name = $retdata->fetch(PDO::FETCH_ASSOC)){?>
                        <tr>
                        <td><?=$name['name']?></td>
                        <td><?=$name['lname']?></td>
                        <td><?=$name['nickname']?></td>
                        <td> 
                        <a href="#">Update</a>
                        <a href="#">Delete</a>
                        <a href="index.php?id=<?=$name['id']?>">View</a>
                        </td>
                        </tr>
                 <?php } }else{?>


                    echo "No data";
             <?php   }
            ?>
        <tbody>
        </table>
</body>
</html>