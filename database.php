<?php
$host = "localhost";
$dsn ="hiyoca";
$usr  = "root";
$pw = "";
$dcn = null;
try{
    $dcn = new PDO("mysql: host={$host}; dbname={$dsn};",$usr , $pw);
}catch(exception $e){

}
 


?>