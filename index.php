<!DOCTYPE html>
<html>

<head>

	
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
    <title>Vinemaket-Login</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

	<div class="container">
		<h1>Welcom To Vinemaket</h1>
		<h3>Sign-In:</h3>
		<!-- cek pesan notifikasi -->
		<form method="post" action="cek_login.php">
			<table>
				<tr>
					<td>Username</td>
					<td>:</td>
					<td><input type="text" name="username" placeholder="Masukkan username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input type="password" name="password" placeholder="Masukkan password"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type="submit" value="Login"></td>
					
					
				</tr>
				<td><a href="register.php" style="color: white" >SignUp</a></td>

			</table>
		</form>
	</div>

</body>

</html>