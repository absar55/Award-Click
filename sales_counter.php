<?php


error_reporting(E_ERROR | E_PARSE);

$sales = explode(",", $_GET["sales"]);





if (!empty($sales))
{
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "award_click";
    // Create connection
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
        if (mysqli_connect_error())
        {
          die('Connect Error ('. mysqli_connect_errno() .') '
         . mysqli_connect_error());
        }
        else
        {






            $sql = "UPDATE sales SET sales_counter=(sales_counter+'$sales[1]') WHERE email='$sales[0]'";
            $run_sql = mysqli_query($conn, $sql);

            header("Location: done.php");





        }

}





    

         








   

?>





