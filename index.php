
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css?v2">
</head>
<body>
     <form action="login.php" method="post">
     	<h2 style="font-family:Courier New" >LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<input style="font-family:Courier New" type="text" name="uname" placeholder="Username"><br>

     	
     	<input style="font-family:Courier New" type="password" name="password" placeholder="Password"><br>

     	<button style="font-family:Courier New" type="submit">LOGIN</button>
          <a href="signup.php" class="ca" style="font-family:Courier New">Don't have an account ?</a>
          
          <a href="change-password.php" class="ca" style="font-family:Courier New"> Forgot my password</a>

     </form>

</body>
</html>
