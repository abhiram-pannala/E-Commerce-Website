<?php

$name=$_POST['name'];
$details=$_POST['details'];
$price=$_POST['price'];


$conn= new mysqli("localhost", "x-men", "123456", "feb_project");

if($conn->connect_error)
{
    echo "Connection Failed";
    die;
}

// Image Location



date_default_timezone_set('Asia/Kolkata');
$unique_file_name=date('d-m-y-h-i-s').'.jpg';

move_uploaded_file($_FILES['imdata']['tmp_name'],$unique_file_name );

// Image Location



$cmd="insert into products(Name, Details, Price, IMLocation) value('$name', '$details', $price, '$unique_file_name' )";

$sql_res=mysqli_query($conn,$cmd);

if($sql_res)
{
    echo " <h3 style= 'color:green' > Uploaded Successfully </h3>
    <p> Want To Upload Products
    Click Below Link </p>
    <a href='upload_products.html'>Upload Products</a> 
    <p></p>
    <a href='view_products.php'>View Products</a> "; 

}
else
{
    echo " <h3 style= 'color:red' > Failed To Upload </h3>
    <p> Want To Upload Products
    Click Below Link </p>
    <a href='upload_products.html' >Upload Products</a>";
    
}

?>