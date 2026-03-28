<?php
    include "connect.php";
    IF(isset($_POST['submit'])){
        $user=$_POST['name'];
        $email=$_POST['mail'];
        $number=$_POST['number'];
        $password=$_POST['password'];
        if(!empty($user) && !empty($email) && !empty($password)){
            $sql="SELECT * FROM `registerdata` WHERE email='$email'";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0)
            {
                echo "The email is already taken.";
            }
            else{
                $sql="INSERT INTO `registerdata`(username,email,phone_no,pword) values('$user','$email','$number','$password')";
                $result=mysqli_query($conn,$sql);
                if($result){
                    setcookie("user",$user,time()+86400*2,'/');      //2 days session timeout
                    setcookie("password",$password,time()+86400*2,'/');
                    echo "Registration successful";
                    echo "Return to login page";
                    header("location:login.php");
                }
            }
        }
    }
?>




<!DOCTYPE html>
<html>
    <script defer src="rfv.js"></script>
    <head>
    <link rel="stylesheet" href="navigate.css">
    <link rel="stylesheet" href="text_image.css">
    <link rel="stylesheet" href="effect.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="buttons.css">
    

    </head>

    <body>
        <div class="BM1">
            <div class="container1">
                <u style="text-decoration-color: #741010;"><h1 style="color:rgb(55, 58, 82); font-weight: bold; font-size: 40px; font-family:'Courier New', Courier, monospace; text-align: center; padding:5px;">PoppinVans</h1></u>
            </div>
        </div>
        
        <nav>
           
           <ul> 
            <img style="height: 95px; width:115px; float:left; background-blend-mode: overlay; " src="for project/logo (1).png" alt="logo">
            <li><a href="MAIN.html">  Home </a></li>
            <li><a href="menu.html">  Menu  </a></li>
            <li><a href="MAIN.html#about">About us</a></li>
            <li><a href="MAIN.html#contact">Contacts</a></li>
            <li><a href="login.php">Login</a></li>
           </ul>
        </nav>

        <div id="error"> </div>
        <div class="position">
        <div  class="registerbg">
            <form id="rform" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <h1>Register</h1>
                <div class="input-box">
                    <input type="text" id="name" name="name" placeholder="Username" required>  
                
                </div>

                <div class="input-box">
                    <input type="email" id="email" name="mail" placeholder="email" required>  
                           
                </div>

                <div class="input-box">
                    <input type="text" id="phonenumber" name="number" placeholder="Phone Number" required>  
                           
                </div>

                <div class="input-box">
                    <input type="password" id="password" name="password" placeholder="Enter Password"> 
                           
                </div>             

                <input type="submit" name="submit" value="register" class="loginSubmitbtn">
                <input type="reset" value="erase" class="loginSubmitbtn">
                <br>
                
                <div class="resisterlink">
                    <br>
                    <p style="text-shadow: 2px 2px 3px rgb(48, 69, 103);">Return to login page:ㅤ<a style="color: rgb(23, 26, 29);"  href="login.php">Login</a></p>
                    <p style="text-shadow: 2px 2px 3px rgb(48, 69, 103);">Return back to home page:ㅤ<a style="color: rgb(23, 26, 29);"  href="MAIN.html">Home</a></p>
                    
                </div>
<br>              

            </form>
        </div>
        </div>


    </body>
</html>