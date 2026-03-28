<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="account.css">
    <link rel="stylesheet" href="buttons.css">

</head>
<body>
<div>
    <hr>
    <h1 style="text-align:center;">   Update   </h1>
    <?php
        $id=$_GET["id"];

        $connect=mysqli_connect("localhost","root");

        if (!$connect){
            echo "<h2> ERROR!!! failed connecting to the server!</h2>";
            exit;
        }

        mysqli_select_db($connect,"poppinvans");

        $update="SELECT * FROM registerdata WHERE id='".$id."'";
        $results=mysqli_query($connect,$update);
        $register=mysqli_fetch_array($results);

        if($register==0){
            echo "User id $id not found!";
            exit;
        }
        mysqli_close($connect);
    ?>
    <hr>
    <br>

    <form action="updated.php?id=<?php echo $id;?>" method="POST">
        <table style="width:70%">
            <tr>
                <td>ID</td>
                <td><?php echo $id; ?></td>
            </tr>
            <tr>
                <td>
                    name
                </td>
                <td><input type="text" name="username" value='<?php echo $register["username"]; ?>'></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value='<?php echo $register["email"]; ?>'></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" value='<?php echo $register["pword"]; ?>'></td>
            </tr>
            <tr>
                <td>Phone number</td>
                <td><input type="text" name="phone_no" value='<?php echo $register["phone_no"]; ?>' maxlength="9"></td>
            </tr>
            
        </table><br>
        <input type="submit" class="loginSubmitbtn" value="update">
    </form>

    </div>
</body>

</html>