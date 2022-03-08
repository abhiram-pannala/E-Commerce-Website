 <?php


/*
include_once "connection.php";

$pid=$_GET['pid'];

echo "I'm Ready To Delete $pid ";


$cmd="delete from products where PID=$pid";

$res=mysqli_query($conn,$cmd);

if($res)
{
    header("location:view_products.php");
}
else
{
    echo "Delete Product Is Failed";
}


*/




include_once "connection.php";

    $pid=$_GET['pid'];

    echo "I'm Ready To Delete $pid";

    $cmd="delete from products where PID=$pid";

    $sql_res=mysqli_query($conn,$cmd);    

    if($sql_res)
    {
        header("location:view_products.php");
    }
    else
    {
        echo "Delete Products Is Failed Try Again";
        echo "<a href='view_products.php'>View Products</a>";
    }


















?>