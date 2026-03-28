<!DOCTYPE html>
<html>
    
    <link rel="stylesheet" href="navigate.css">
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="text_image.css">
    <link rel="stylesheet" href="effect.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="buttons.css">

    <header>

        <div class="BM">
            <div class="container1">
                <u style="text-decoration-color: #741010;"><h1 style="color:rgb(204, 228, 244); font-weight: bold; font-size: 40px; font-family:'Courier New', Courier, monospace;">PoppinVans</h1></u>
            </div>
        </div>
        
        <nav>
           
           <ul> 
            <img style="height: 95px; width:115px; float:left; background-blend-mode: overlay; " src="for project/logo (1).png" alt="logo">
            <li><a href="MAIN.html">  Home </a></li>
            <li><a href="menu.html">  Menu  </a></li>
            <li><a href="MAIN.html#about">About us</a></li>
            <li><a href="MAIN.html#contact">Contacts</a></li>
            <li style="font-size: 20px;  background-color:rgb(152, 111, 111);   opacity:0.9;  
        color:black;     
        border: rgb(255, 255, 255);
        cursor: pointer;
        "  class="log" onclick="show()">Login</li>
           </ul>
        </nav>
    </header>

    

    <body>
        

        <div>
        <div class="loginbg">
    
            <form style="display:none;" id="visual" action="logged.php" method="POST">  
                <h1>Login</h1>
                <div class="input-box">
                    Username:<input type="text" name="name" required>  
                         
                </div>

                <div class="input-box">
                    Password:<input type="password" name="password" required> 
                           
                </div>

                <!--<div class="remember-forget">
                    <label><input type="checkbox">Remember Me</label>          
                </div>-->

                <input type="submit" name="login" value="submit" class="loginSubmitbtn">
                <input type="reset" value="erase" class="loginSubmitbtn">
                
                <div class="registerlink">
                    <p style="text-shadow: 2px 2px 3px rgb(48, 69, 103);">Dont have an account? <a style="color: rgb(23, 26, 29);"  href="register.php">Register</a></p>
                </div>
            </form>
        </div>
        </div>
        
    </body>
    <script>
        function show(){
            document.getElementById('visual').style.display="block";
        }
    </script>

  

</html>