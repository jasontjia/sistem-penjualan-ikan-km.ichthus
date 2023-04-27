<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
	<link rel="stylesheet" type="text/css" href="./assets/styles/style.css">
</head>
<body>
     <form action="login.php" method="post">
     <center>
	 <img src="./assets/images/km.ichthus.png" alt="" width="100" height="100">
	 </center>
     	<h2>LOGIN KM.ICHTHUS</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Buat Akun</a>
     </form>
</body>
</html>