<?php


$conn= new mysqli("localhost", "x-men", "123456", "feb_project");

if($conn->connect_error)
{
    echo "Connection Failed";
    die;
}



?>