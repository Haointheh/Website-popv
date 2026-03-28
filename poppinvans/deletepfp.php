
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete users</title>
    <link rel="stylesheet" href="account.css">
    <link rel="stylesheet" href="buttons.css">
</head>
<body style="background-color: #ABA9B2;">
    <br>
    <h1> DELETE PAGE </h1>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>" onsubmit="return confirm('delete this user?')";>

        <fieldset>
            <legend>*** Delete user***</legend>
            <p>Select the user that you want to delete:</p>
            <label for="id" style="color:grey; font-size:20px;">User ID:</label>
            <input type="text" name="id" id="id" required>
            <input type="submit" class="loginSubmitbtn" value="delete" name="delete">
        </fieldset>
    </form> 

    <?php
        $msg="";

        $conn= mysqli_connect("localhost", "root");
        include "connect.php";

        if (!$conn){
            echo "<h2> ERROR!!! Couldn't connect to the server</h2>";
            exit;
        }

        mysqli_select_db($conn, "poppinvans");
        $delete = "SELECT * FROM registerdata";
        $results = mysqli_query($conn, $delete);
        $nregistered = mysqli_num_rows($results);
    ?>

    <hr>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>  
            <th>Phone number</th>
            <th>Password</th>
        </tr>
    
        <?php
        for ($i = 0; $i < $nregistered; $i++){
            $register = mysqli_fetch_assoc($results);
            echo "<tr>";
            echo "<td>".$register['id']."</td>";
            echo "<td>".$register['username']."</td>";
            echo "<td>".$register['email']."</td>";
            
            echo "<td>".$register['phone_no']."</td>";
            echo "<td>".$register['pword']."</td>";
            echo "<tr>";
            echo "</p>";
        }
        ?>
    </table>

    <?php
    if(isset($_POST["delete"])){
        $id = ($_POST["id"]);
        mysqli_select_db($conn, "poppinvans");
        $sql = "SELECT * FROM registerdata WHERE id='$id' LIMIT 1";
        $results = mysqli_query($conn, $sql);
        $nregistered = mysqli_num_rows($results);

        if ($nregistered > 0){
            $delete = "DELETE FROM registerdata WHERE id='".$id."'";
            $results = mysqli_query($conn, $delete);

            header("Location: " . $_SERVER["PHP_SELF"]);
        }else{
            $msg = "This user doesn't exist! Try again.";
        }
    }
    mysqli_close($conn);
    ?>

    <p style="background-color:black;color:red;text-align:center;">
        <?php
        echo $msg;
        ?>
    </p>

    <br><br>
    <p style="text-align:center;"><a href="editpfp.php">EDIT PAGE</a></p>
    
    <p style="text-align:center;"><a href="order.php">Return back to order page</a></p>
            
</body>
</html>
