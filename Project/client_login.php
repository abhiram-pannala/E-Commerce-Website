<?php

include_once 'connection.php';

$mailid=$_POST['mailid'];
$password=$_POST['password'];


$cmd="select * from clients where mailid='$mailid' and password='$password' ";

$res=mysqli_query($conn,$cmd);

    if (mysqli_num_rows($res)==1)
    {
        header("location:client_view_products.php");
    }
    else
    {
        echo "<h2> Login Failed <br> Something Went Wrong</h2>";
    }


    
?>