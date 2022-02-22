<?php

session_start();
$pdo = new PDO("mysql:host=localhost;dbname=sqlin","root","zakizaki");

$flag = $_REQUEST["flag"];

    
    
// $sql = "UPDATE flags SET isSolved = where flag = '$username' and password = '$password'"; 


$stmt = $pdo->prepare("SELECT * FROM flags WHERE flag=:flag");
$stmt->execute(['flag' => $flag]);
$count = $stmt->rowCount();
$result = $stmt->fetch();

// $result = mysqli_query($con, $sql);  

// $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  

    
if($count != 0){ 
    echo $result[0];
}  
else{  
    echo "failed";
}     




?>