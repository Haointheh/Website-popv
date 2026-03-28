
<?php
include "connect.php";
session_start();
$userprofile=$_SESSION['uname'];
echo "<br>";


   $cookie_name = 'last_visit';
    if(isset($_COOKIE[$cookie_name])){
        echo "<font color=\"white\" size=\"5\">Welcome ".$_SESSION["uname"]."</font>";
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
   $i=$result['id'];
   $user= $result['username'];
   $email= $result['email'];
   $num= $result['phone_no'];
   $pass= $result['pword'];
   echo "<br>";

?>

<!DOCTYPE html>
<html>

<link rel="stylesheet" href="menus.css">
<link rel="stylesheet" href="footer.css">
<link rel="stylesheet" href="account.css">
<link rel="stylesheet" href="buttons.css">



  <body style="background-color: #ABA9B2;">
  <h1 style="color:aliceblue; font-size:20px; text-align:left; padding:5px;"> ------- ORDER PAGE ------- </h1>
  <hr>
   <form>
      <h1 style="color:black;"><?php echo $user;?></h1>
    <h1 style="text-align: center; color: #e6e6ff; text-shadow: grey 1px 0 10px;">MY ACCOUNT</h1>

    <table>
      <tr>
         <th>ID</th>
         <td><?php echo $i;?></td>
      </tr>
      <tr>
         <th>Username</th>
         <td><?php echo $user;?></td>
      </tr>
      <tr>
         <th>Email</th>
         <td><?php echo $email;?></td>
      </tr>
      <tr>
         <th>Phone Number</th>
         <td><?php echo $num;?></td>
      </tr>
      <tr>
         <th>Password</th>
         <td><?php echo $pass;?></td>
      </tr>
   </table>
   <br>
   
   
   <br><br>
   <a style="font-size:20px; color:black" href="logout.php">logout</a>
   
   </form>
  <hr><br>
    <a href="editpfp.php"><button type="button" class="ordernow">Edit Profile</button> </a> 
    <a href="deletepfp.php"><button type="button" class="ordernow">Delete Profile</button> </a> <br>
   <br>
   <hr>
    <br><br>
    <h1 style="text-align: center; color: aliceblue; font-size: 40px">Menu</h1>
    <p style="text-align: center; color: aliceblue;">Logged in customers can order online</p>
    <br>
    <br><br>

  
    <head>
        <link rel="stylesheet" type="text/css" href="food.css">
        <link rel="stylesheet" href="menuimage">
    </head>
    <body>
        <h1 style="font-size: 50px;"> -- PoppinVans -- </h1>
        <section class="items">
            <div class="item">
                <img src="for project/icecream.jpg">
                <h4>Icecream</h4>
                <button class="ordernow">order</button>
            </div>
            <div class="item">
                <img src="for project/bento.webp">
                <h4>bento cake</h4>
                <button class="ordernow">order</button>
            </div>
            <div class="item">
                <img src="for project/boba.jpg">
                <h4>boba</h4>
                <button class="ordernow">order</button>
            </div>
            <div class="item">
                <img src="for project/cake.jpg">
                <h4>cake</h4>
                <button class="ordernow">order</button>
            </div>
            <div class="item">
                <img src="for project/coffee.jpg">
                <h4>coffee</h4>
                <button class="ordernow">order</button>
            </div>
            <div class="item">
                <img src="for project/milkshake.jpg">
                <h4>milkshake</h4>
                <button class="ordernow">order</button>
            </div>
            <div class="item">
                <img src="for project/momo.jpg">
                <h4>momo</h4>
                <button class="ordernow">order</button>
            </div>
            
        </section>
    

   <footer>
            <div class="footer-container">
              <div class="footer-links">
                <h4>Quick Links</h4>
                
                    <a style="color: rgb(189, 218, 243);" href="MAIN.html">Home</a><br>
                    <a style="color: rgb(189, 218, 243);"href="menu.html">Food items</a><br>
                    <a style="color: rgb(189, 218, 243);"href="about.html">About Us</a><br>
                    <a style="color: rgb(189, 218, 243);"href="contact.html">Contact Us</a><br>
                 
              </div>
              <div class="footer-info">
                <h4>Information</h4>
                <ul>
                  <a style="color: rgb(189, 218, 243);"href="#">Privacy Policy</a><br>
                  <a style="color: rgb(189, 218, 243);"href="#">Terms and Conditions</a><br>
                  <a style="color: rgb(189, 218, 243);"href="#">Shipping and Returns</a><br>
                </ul>
              </div>

              <div class="footer-contact">
                <h4>Contact Us</h4>
                <p>123 Main Street, vanland</p>
                <p>Phone: 01-696969</p>
                <p>Email: poppinvans@gmail.com</p>
                <a href=" "><i class="fa-brands fa-square-facebook" style="color: #dce5f4;"></i></a>
                <a href=" "><i class="fa-brands fa-instagram" style="color: #dce5f4;"></i></a>
                <a href=" "><i class="fa-brands fa-square-twitter" style="color: #dce5f4;"></i></a>
              </div>
            <!--  <div>

                 <button class="ordernow">Order Now</button> 
              </div>-->
              <div>
              
              <a style="font-size:30px; color:#e6e6ff" href="logout.php">LOGOUT</a>
              <p style="color:#e6e6ff;">You can login again later<p>
            </div>
        </footer>
   

</html>