<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="poppinvans";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
?>

<?php 
    $sql="CREATE TABLE IF NOT EXISTS `registerdata` (
        id INT PRIMARY KEY AUTO_INCREMENT,
        username VARCHAR(255) NOT NULL UNIQUE,
        email VARCHAR(255) NOT NULL UNIQUE,
        phone_no VARCHAR(255) NOT NULL UNIQUE,
        pword VARCHAR(255) NOT NULL 
    )";
    $result=mysqli_query($conn,$sql);
?>
