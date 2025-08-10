<?php
$username1 = filter_input(INPUT_POST, 'username');
$email1 = filter_input(INPUT_POST, 'email');
$password1 = filter_input(INPUT_POST, 'password');
$confirm_password1 = filter_input(INPUT_POST, 'confirm_password');
$phone_number1 = filter_input(INPUT_POST, 'phone_number');
$website = filter_input(INPUT_POST, 'website');

if ($password1!=$confirm_password1)
{

  echo "Both Passwords Does not Matched";
  die();

}



if ((!empty($email1)) && (!empty($username1)) && (!empty($password1)) && (!empty($phone_number1)) && (!empty($website)))
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




            $sql = "SELECT * FROM merchant_account WHERE email='$email1'";
            $results = mysqli_query($conn, $sql);
            if (mysqli_num_rows($results) > 0) 
            {
              echo "Email already exists";
            }




            else 
            {







                $sql = "INSERT INTO merchant_account (email,username, password, phone_number,website)
                values ('$email1','$username1','$password1', '$phone_number1', '$website')";
                $conn->query($sql);
                $key=1;
           


    
             

              if ($key == 1)
              {
                header("Location: merchant_login.php");
              }

              else
              {

                echo "Contact to Admin";
              }



            }

            
        }
}


else
{
    echo "Missing Information....Please Fill all the Information again.";
    die();
}
?>





