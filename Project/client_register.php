<?php


include_once "connection.php";


$mailid=$_POST['mailid'];
$password=$_POST['password'];
$mobile=$_POST['mobile'];

// search_res=mysqli_query($conn,"select * from clients where mailid='$mailid'");

//     if(mysqli_num_rows(search_res)>0)
//     {
//         echo "User Is Already Exists Or Something Went Wrong";
//         die;
//     }
    

$cmd="insert into clients(mailid, password, mobile) values('$mailid', '$password', '$mobile')";


$res=mysqli_query($conn,$cmd);

    if($res)
    {
        echo "Registration Success";
        echo "<h2><a href='client_login.html'>Proceed To Login</a></h2>";
    }
    else
    {
        echo "User Or Password Is Already Exists ";
    }

?>