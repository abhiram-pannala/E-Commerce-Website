<!-- PHP CODE -->


<?php


$uname=$_POST["username"];
$pass=$_POST["password"];

    if($uname=="abhi" && $pass=="123456")
    {
        header("location:view_products.php");
    }
    else
    {
        echo "<h1>Login Failed <br> Incorrect Password Or UserName</h1>
        <h3><a href='login.html' > Login Again</a></h3> " ;
    }


?>