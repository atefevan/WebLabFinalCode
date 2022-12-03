<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'pweb';

$con = mysqli_connect($host,$user,$password,$db);

if(!$con){
    echo 'Error in connection';
}else{
    // echo 'Connection Established';
}
?>