<?php

$con = new mysqli('localhost','root','','php-crud-operation');
if(!$con){
    echo die(mysqli_error($con));
}

?>