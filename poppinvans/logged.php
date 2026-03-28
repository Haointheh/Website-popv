
<?php

session_start();
include "connect.php";
if (isset($_POST['login'])){
    $uname=$_POST['name'];
    $pass=$_POST['password'];      //gets data from form and puts in login database

    $sql = "SELECT * FROM registerdata WHERE username='$uname' AND pword='$pass' LIMIT 1";

    $data=mysqli_query($conn, $sql);   //connection variable from connect.php and query variable
    $total= mysqli_num_rows($data);    
    echo "<br>";
    
    if($total==1)
    {
        $_SESSION['uname']= $uname;      //username in variable $user variable is stored in session variable
        header('location: order.php');
    }
    else 
    {
        echo "LOGIN FAILED";
        echo "<br>";
        echo "Error in the password or the username. Please try again";
    }
}   
?>

<DOCTYPE html>
    <html>
        <br>
        <br>
        <body>
            
            <p style="font-size=40px;" >Return to mainpage <a href="MAIN.html">home</a> </p>
            <p style="font-size=40px; color:grey;" >Try again? <a href="login.php">Login Page</a> </p>
        </body>
    </html>


