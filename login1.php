<html>
<head>
    <title> Login </title>
    <link rel="stylesheet" type="text/css" href="style1.css">   
</head>
    <body>
	<section>
		<div class = "full-width navbar">
			<img class = "g" src = "p2.png" width = "300" height = "50">
			<ul id = "main-nav">
			<li><a class = "active" href = "Pizzahutm.html">Home</a></li>
		</ul> 
		<div style = "clear:both"></div>
		<div class = "divider1"></div>
		</div>
	</section>
    <div class="login-box">
        <h1>Login</h1>
            <img src="av.png" class="avatar">
			<form action="login.php" method="Post">
            <b><font>Username</font></b>
            <input type="text" name="username" placeholder="Enter Username" required>
            <i><b><font>Password</font></b></i>
            <input type="password" name="password" placeholder="Enter Password" required>
			<input type="submit" name="submit"/>
            <b><pre> Don't have an account? <a href="reg.html">Sign Up </a></pre></b>	
	</form>
       </div>
    </body>
</html>