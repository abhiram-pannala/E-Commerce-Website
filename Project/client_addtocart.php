<?php


    $pid=$_GET['pid'];

    session_start();

        if (isset($_SESSION['pids']))
        {
            // push an element
            //  Second time adding to cart
            echo "Next Time Adding To Cart";

            if(array_search($pid, $_SESSION['pids'])!==false)
            {
               echo "<script> alert('Item Already In Cart'); </script>";
            }
            else
            {
                array_push($_SESSION['pids'],$pid);
                header('location:client_view_products.php');
            }
            // array_push($_SESSION['pids'],$pid);
            // header ('location:client_view_products.php');
            print_r($_SESSION['pids']);

        }
        else
        {
            echo "First time adding to cart";
            $_SESSION['pids']=array($pid);
            header ('location:client_view_products.php');
            // print_r($_SESSION['pids']);
        }


// create an array - array()
// push element to array - array_push(array_var, new_value);
// search element inside a array - array_search(search_elements, array_var);
// length of an array - count(array-var)


?>




<?php


    //    if(isset($pid)) 
    //    {
       
    //    $pid=$_GET['pid'];

    //    }

       
       
    //    if(isset($_SESSION))
    //    {
    //     session_start();
    //    }
       


    //     if(isset($_SESSION['pids']))
    //     {
    //         array_push($_SESSION['pids'],$pid);
    //     }
    //     else
    //     {
    //         $_SESSION['pids']=array($pid);
    //     }

        ?>