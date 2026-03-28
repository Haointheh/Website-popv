<!-- <?php
echo "<font color=\"white\" size=\"5\">UPDATING PAGE<font>";
echo "<br>";

?>
<?php
include "connect.php";
session_start();
$userprofile=$_SESSION['uname'];
echo "<br>";

   $cookie_name = 'last_visit';
    if(isset($_COOKIE[$cookie_name])){
        echo "<font color=\"white\" size=\"5\">Welcome back ".$_SESSION["uname"]."</font>";
    }
    else{
        echo "<font color=\"white\" size=\"5\">Welcome ".$_SESSION["uname"]."</font>";
        setcookie($cookie_name, time(), time() + (2 * 24 * 60 * 60));    //2 days
    }
   
   $sql = "SELECT * FROM registerdata WHERE username='$userprofile'";
   $data=mysqli_query($conn, $sql);                 
   $result= mysqli_fetch_assoc($data);
   echo "<br>";
   echo "<br>";
  // echo "<font color=\"white\" size=\"4\">Your registered number: </font>";
  // echo $result['phone_no'];

   $user= $result['username'];
   $email= $result['email'];
   $num= $result['phone_no'];
   $pass= $result['pword'];
   $olduser= $result['username'];
   echo "<br>";


?>


<?php
include "connect.php";
//if(isset($_POST['updateuser'])){
    //$newuser=$_POST['username'];
   // $phno=$_POST['phone_no'];

    //$sql="UPDATE registerdata SET username='$newuser', phone_no='$phno'";
    //$res=mysqli_query($conn, $sql); 
    
    //if ($res){
      //  echo "Record updated sucessfully";
      //  header("location: order.php");
    //}
    //else{
    //    echo "Error " .$sql. "<br>" . mysqli_error($conn);
   // }
    //}
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Assuming you have a form with input fields named 'new_username', 'new_pword', 'new_phone_no', and a submit button named 'update'
      $newUsername = $_POST['new_username'];
      $newPhoneNo = $_POST['new_phone_no'];
  
      // Assuming you have a variable $userId that holds the user's ID
      // Replace 'user_id_column' with the actual column name where the user ID is stored
      $userId = $_POST['id'];
      
      // Update the database record
      $sql = "UPDATE registerdata 
              SET username = '$newUsername', phone_no = '$newPhoneNo' 
              WHERE id = $userId";
  
      if ($conn->query($sql) === TRUE) {
          echo "Record updated successfully.";
      } else {
          echo "Error updating record: " . mysqli_error($conn);
      }
  }
  
  // Close the database connection
  $conn->close();


?>

<!DOCTYPE html>
<html>

<link rel="stylesheet" href="menus.css">
<link rel="stylesheet" href="account.css">
<link rel="stylesheet" href="buttons.css">



  <body style="background-color: rgb(65, 80, 94);">
  <hr><br>
   <form method="GET" action="<php echo $_SERVER[''PHP_SELF];?">
      <h1 style="color:grey;"><?php echo $user;?><h1>
    <h1 style="text-align: center; color: #e6e6ff; text-shadow: grey 1px 0 10px; font-size:25px;">MY ACCOUNT</h1>

    <table>
      <tr>
         <th>Username</th>
         <td> "<?php echo $user;?>"</td>
      </tr>
      <tr>
         <th>Phone Number</th>
         <td> "<?php echo $num;?>"</td>
      </tr>
      
   </table>
<br>
</form>
<br><br>

<form method="POST" action="<php echo $_SERVER['PHP_SELF'];?">
      <h1 style="color:grey;"><?php echo $user;?><h1>
    <h1 style="text-align: center; color: #e6e6ff; text-shadow: grey 1px 0 10px; font-size:25px;">UPDATE MY ACCOUNT</h1>

        New Username:ㅤㅤ<input type="text" name="new_username"><br>
        New Phone Number: <input type="text" name="new_phone_no"><br>
        <input type="hidden" name="user_id" value="user_id_value">
        <br>
        <input type="submit" name="update" value="Update">
</form>

<br><br> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="buttons.css">
    <link rel="stylesheet" href="account.css">
</head>
<body style="background-color: #ABA9B2;">


    <hr>
    <div>
    <h2>
        Edit details 
    </h2>
    <p>
        tell us which user id you want to edit:
    </p>
    <form action="update.php" method="GET">
        <label for="id" style="color:grey; font-size:20px;">
            user id number
        </label>
        <input type="text" name="id" id="id" required>
        <input type="submit" class="loginSubmitbtn"value="edit">

    </form>
</div>
<hr>
    <?php

    $connect=mysqli_connect("localhost","root");

    if(!$connect){
        echo "<h2> ERROR!!! failed connecting to the server!</h2>";
        exit;

    }
    mysqli_select_db($connect,"poppinvans");
    $edit="SELECT * FROM registerdata";
    $results=mysqli_query($connect,$edit);
    $n_registered=mysqli_num_rows($results);
    echo "<h3> $n_registered users were found.</h3>";

    mysqli_close($connect);
    ?>

    
    <table style=" border: 2px solid block;">
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Password</th>
        </tr>
        <?php
            for ($i = 0; $i<$n_registered;$i++){
                $register=mysqli_fetch_assoc($results);
                echo "<tr>";
                echo "<td>".$register['id']."</td>";
                echo "<td>".$register['username']."</td>";
                echo "<td>".$register['email']."</td>";
                echo "<td>".$register['phone_no']."</td>";
                echo "<td>".$register['pword']."</td>";
                echo "<tr>";
            }
        ?>
    </table>

    <br>
    <p>Return back to the order page: <a href="order.php">OrderPage</a></p>
</body>
</html>