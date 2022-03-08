<?php
include "acmegrade.html";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin View Products</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
    .parent {
        width: 200px;
        height: 300px;
        box-shadow: 5px 5px 5px 0px rgba(0, 0, 255, .2);
        border-radius: 10px;
        position: relative;

    }

    .currency {
        color: #46734;
    }

    /* 
    #padding {
        padding-bottom: 25px;
        padding-top: 25px;
        padding-left: 35px;
        padding-right: 35px;
    }
     */

    .bradius10px {
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;

    }

    .delete_button {
        position: absolute;
        bottom: 10px;
        left: 5px;
        padding: 5px;

    }

    .mybtn {
        font-size: 9px;
        background-color: #2b3739;

    }
    </style>
</head>

<body>

</body>

</html>


<!-- PHP CODE -->


<?php

include_once "connection.php";

$cmd="select * from products";

$sql_result=mysqli_query($conn, $cmd);


    if(mysqli_num_rows($sql_result)==0)
    {
        echo "<h4 class='text-center'>Upload Products To View</h4>";

    }
    else
    {

    }

    echo " <div class='d-flex  justify-content-start flex-wrap ' > ";

    while($row=mysqli_fetch_assoc($sql_result))
    {
        $pid=$row['PID'];
        $name=$row['Name'];
        $details=$row['Details'];
        $price=$row['Price'];
        $imlocation=$row['IMLocation'];


        echo "<div class='bg-info parent mt-5 mx-3'>

                <div class='d-flex bradius10px justify-content-around align-items-center  bg-warning ' >
                    <h3 class='' >$name</h3>
                    <h4 class='text-danger'> <span class='currency' >₹</span>$price</h4>
                </div>

                <img src='$imlocation' class='w-100 h-50'>
                
                <p class='text-center'>$details</p>

                <div class='delete_button'>
                     <a href='delete_products.php?pid=$pid'>
                    <button class='mybtn btn btn-danger'> <i class=' text-white fa fa-trash'></i> </button>
                </a>
                </div>

               

            </div>";

    }

    echo " </div> ";

?>

