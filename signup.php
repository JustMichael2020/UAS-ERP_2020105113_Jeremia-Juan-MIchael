<!DOCTYPE html>
<html>
<head>
	<title>CREATE NEW ACCOUNT</title>
	<link rel="stylesheet" type="text/css" href="style.css?v2">
</head>
<body>
          <form action="signup-check.php" method="post">
          	<h2 style="font-family:Courier New">CREATE NEW ACCOUNT</h2>
          	<?php if (isset($_GET['error'])) { ?>
          		<p class="error"><?php echo $_GET['error']; ?></p>
          	<?php } ?>

               <?php if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success']; ?></p>
               <?php } ?>

               
               <?php if (isset($_GET['name'])) { ?>
                    <input type="text" 
                           name="name" 
                           placeholder="Name"
                           value="<?php echo $_GET['name']; ?>"><br>
               <?php }else{ ?>
                    <input style="font-family:Courier New"
                           type="text" 
                           name="name" 
                           placeholder="Name"><br>
               <?php }?>

          
               <?php if (isset($_GET['uname'])) { ?>
                    <input type="text" 
                           name="uname" 
                           placeholder="User Name"
                           value="<?php echo $_GET['uname']; ?>"><br>
               <?php }else{ ?>
                    <input style="font-family:Courier New"
                           type="text" 
                           name="uname" 
                           placeholder="Username"><br>
               <?php }?>


          	
          	<input style="font-family:Courier New"
                      type="password" 
                      name="password" 
                      placeholder="Password"><br>

               
               <input style="font-family:Courier New"
                      type="password" 
                      name="re_password" 
                      placeholder="Re-Password"><br>

          	<button type="submit" style="font-family:Courier New">CREATE</button>
               <a href="index.php" class="ca" style="font-family:Courier New">Already have an account ?</a>
          </form>
</body>
</html>