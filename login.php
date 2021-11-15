<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="box-login">
		<h3 style="font-size: 40px;color: white;"><center>LOGIN</center></h3>
		<form action="proses_login.php" method="post">
			<input type="text" name="email" placeholder="Masukkan Email" style="color: white;"><br>
			<input type="password" name="password" placeholder="Masukkan Password" style="color: white;"><br>
			<center><input type="submit" name="masuk" value="LOGIN" ><br></center>
			<p class="login_register-text" style="font-size: 15px; color: white;">Anda belum punya akun?<a href="register.php"> Register</a></p>
		</form>
		
	</div>
</body>
</html>