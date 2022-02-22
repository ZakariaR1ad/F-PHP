<?php
session_start();
include('includes/config.php');
if(isset($_POST['login']))
{
$uname = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$sql ="SELECT * FROM student WHERE UserName=:uname and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':uname', $uname, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
//$query-> bindParam(':role', $role, PDO::PARAM_STR);
$query-> execute();

if($query->rowCount() > 0)
{
	$_SESSION['alogin']=$_POST['username'];
	
	$results=$query->fetchAll(PDO::FETCH_OBJ);
	foreach($results as $result)
	{   
	$studentId = $result->StudentId;
	$roleId = $result->RollId;
    $un = $result->username;
	$_SESSION['sess_studentId'] = $studentId;
	$_SESSION['sess_username'] = $uname;
	$_SESSION['StudentRoleId'] = $roleId;
	
    }
	
	//session_regenerate_id();
	$_SESSION['sess_userrole'] = $_POST['role'];
	session_write_close();
	if( $role == "student"){
		header('Location: studentdashboard.php');
	}else {
	    echo "<script>alert('Invalid Details');</script>";
	}

} else{
    
    echo "<script>alert('Invalid Details');</script>";
}

}

?>
<html>
<head>
    <title> IDOR Vulnerability </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">   
</head>
    <body>
		
		<div class="login-box">
		<img src="images/avatar.png" class="avatar">
			<h1>Login Here</h1>
				<form method="POST">
				<p>Username</p>
				<input type="text" name="username" placeholder="Enter Username">
				<p>Password</p>
				<input type="password" name="password" placeholder="Enter Password">
				<p>Role</p>
				<div class="styled-select slate">
				<select name="role">
					<option value="student">Student</option>
				</select> </div><br>
				<input type="submit" name="login" value="Login">
				</form>
		</div>
		<script>
			alert("login with the credentials: abeni, abeni")
		</script>
    </body>
</html>
