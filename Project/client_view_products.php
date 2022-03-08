<!DOCTYPE html>
<html lang="en">

<head>
    <title>Client View Products</title>
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


    .bradius10px {
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;

    }

    .button {
        position: absolute;
        bottom: 15px;
        left: 20px;
    }


    .mybtn2 {
        font-size: 12px;
        background-color: #fc641b;
        color: white;
        border: none;
        font-weight: 500;

    }

    .mybtn {
        font-size: 12px;
        background-color: white;
        border: none;
        font-weight: 500;
    }

    .a {

        text-align: center;
        color: #421246;
        font-size: 500%;
        font-weight: bolder;
    }

    .b {
        text-align: center;
        color: rgba(201, 173, 96, 255);
        font-size: 170%;
        font-weight: 550;
        text-shadow: 2px 2px 0 rgba(220, 217, 213, 255);
    }

    span {
        color: #421246;
        text-shadow: none;
    }

    .ts {
        font-size: 8px;
    }

    a {
        color: white;
        font-size: 18px;

    }
    </style>
</head>

<body>
    <div class="ts">
        <h1 class="a">ACMEGRADE</h1>
        <h3 class="b">EXPERIENCE <span>|</span> EXCELLENCE <span>|</span> EXCEL</h3>
    </div>

    <div class="d-flex justify-content-around bg-primary py-3 ">

        <a href="home.php">Home</a>
        <a href="view orders.php">Orders</a>
        <a href="products.php">Products</a>
        <a href="client_view_cart.php">Cart</a>
        <a href="contact.php">Contact Us</a>
        <a href="expire_session.php">Log Out</a>

    </div>

</body>

</html>


<!-- PHP CODE -->


<?php


    session_start();

    if(isset($_SESSION['pids']))
    {
        $cart_count=count($_SESSION['pids']);
    }
    else
    {
        $cart_count=0;
    }

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

    // echo "
    // <div  class='d-flex justify-content-around' >
    //  <button class='btn'>View Cart  <span>$cart_count</span></button>
    
    // </div>";



    
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

                <div class='button'>
                <a href='client_addtocart.php?pid=$pid' >
                    <button class='mybtn' >ADD TO CART</button>
                </a>
                <a href='client_buynow.php?pid=$pid' >
                    <button class='mybtn2'>BUY NOW</button>
                </a>
                </div>

            </div>";

    }

    echo " </div> ";



?>