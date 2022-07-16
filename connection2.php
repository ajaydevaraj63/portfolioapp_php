<?php

$con = mysqli_connect("localhost", "root", "", "website1");
global $con;


 $username1 = $_POST['user'];  
$password1 = $_POST['pass']; 
$username=$username1;
 $password=$password1;
    //to prevent from mysqli injection  
    
  
    $sql = "select *from login where username = '$username' and password = '$password'";  
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
      
    if($count >= 1){  
        header("Location:dashboard1.php"); 
    }  
    else{  
        echo "<h1> Login failed. Invalid username or password.</h1>";
        echo "$username $password"  ;
    }     


?>
