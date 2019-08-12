<html>
<body>
<?php
$conn = mysqli_connect("localhost","root","","Pizzahut");
if (!$conn)
  {
  die('Could not connect: ' . mysqli_error());
  }
$sql="INSERT INTO registration (f_name, l_name,email,username,password)
VALUES
('$_POST[f_name]','$_POST[l_name]','$_POST[email]','$_POST[username]','$_POST[psw1]')";
if (!mysqli_query($conn,$sql))
  {
  die('Error: ');
  }
else {
header("Location: Login.html");
}
mysqli_close($conn);
?>
</body>
</html>