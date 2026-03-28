<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updated details</title>
    <link rel="stylesheet" href="buttons.css">
    <link rel="stylesheet" href="account.css">

</head>
<body style="background-color:#CBC3C7 ;">

    <h1 stlye="text-align:center;">Updating Complete......</h1>
    <hr>
    <form>
    <h2>
        *** Updated details ***
    </h2>
    <?php
    include "connect.php";
        $id=$_GET["id"];
        $name=$_POST["username"];
        $email=$_POST["email"];
        $password=$_POST["password"];
        $phone=$_POST["phone_no"];

        if (!$name || !$email || !$phone || !$password){
            echo "Empty boxes. go back and fill it again!";
            exit;
        }

        $conn=mysqli_connect("localhost","root");

        if(!$conn){
            "echo <h2> ERROR!!! failed connecting to the server!</h2>;";
            exit;

        }

        mysqli_select_db($conn,"poppinvans");

        $updates="UPDATE registerdata SET username='".$name."',email='".$email."',phone_no='".$phone."', pword='".$password."' WHERE id='".$id."'";

        $results=mysqli_query($conn,$updates);

        mysqli_close($conn);

        if($results==1){
            echo "Id: $id <br>";
            echo "Name: $name <br>";
            echo "Email: $email <br>";
            echo "Password: $password <br>";
            echo "Phone number: $phone <br>";
            echo "<h2> details updated succefully! </h2>";

        }else{
            echo "<h2> ERROR!!! Details couldnt be updated!! </h2>";

        }
    ?>
    </form>
    <br>
    <p style="text-align:center;"><a  href="editpfp.php">Return to Editing page</a></p> 
    <p style="text-align:center;"><a href="order.php">Return to order page</a></p>
</body>
</html>