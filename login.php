<html>
<body>
<?php
$conn = mysqli_connect("localhost","root","","Pizzahut");
if (!$conn)
{
	die('Could not connect: ' . mysqli_error());
}
$user = "$_POST[username]";
$pwd = "$_POST[password]";
$sql = "SELECT Password
 	 FROM registration 
	 WHERE Username='$user'";
$result = mysqli_query($conn,$sql);
while ($row = $result->fetch_assoc()) {	
if ($pwd == $row['Password']) 
	{
		Session_start();
		$_SESSION["user"]=$user;
		$_SESSION["Password"]=$pwd;	
		echo "Session variables are set.";
		header("location: Pizzahut2.php");
	}
	if ($pwd != $row['Password'])
	{
		echo "<script>window.open('login.html','_self')</script>";
		echo "alert(Incorrect Username and password)";
	}
}
?>
< /body>
</html>