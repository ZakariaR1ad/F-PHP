<?php      
    $host = "localhost";  
    $user = "root";  
    $password = 'insert_ur_password_here';  
    $db_name = "sqlin";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
     
    $username = $_POST['UserName'];  
    $password = $_POST['Password'];  
      
     
      
    $sql = "select * from users_login where username = '$username' and password = '$password'"; 
    $result = mysqli_query($con, $sql);  
    
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
        
    if($count != 0){  
        echo "<h1><center> congrat here's your flag :
        flag{M1nd_UR_L0G1ns_U_R_n0t_S1w_guy} </center></h1>";  
    }  
    else{  
        echo "<h1> Login failed. Invalid username or password.</h1>";  
    }     
    // the payload ' OR '1
?> 
