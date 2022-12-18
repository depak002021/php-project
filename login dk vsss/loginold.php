<?php
session_start();
include("db_conn.php");
$error = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if (isset($_REQUEST['email']) && isset($_REQUEST['password'])) {
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];
		if (empty($email)) {
			$error = "Email is required";
		} else if (empty($password)) {
			$error = "Password is required";
		}

		$adminsJson = json_decode(file_get_contents("json/users.json"), true);
		if (isset($adminsJson[$email])) {
			if ($adminsJson[$email]['password'] == $password) {
				$_SESSION['email'] = $adminsJson[$email]['email'];
				$_SESSION['name'] = $adminsJson[$email]['name'];
				$_SESSION['phone'] = $adminsJson[$email]['phone'];
				$_SESSION['password'] = $adminsJson[$email]['password'];
				$_SESSION['course'] = $adminsJson[$email]['course'];
				header("Location: index.php");
			} else {
				$error = "Invalid password";
			}
		} else {
			$error = "Invalid email";
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<style>
		* {
			box-sizing: border-box;
		}

		body {
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: 100% 100%;
			overflow: hidden;
		}

		.logo {
			width: 100px;
		}

		.navbar-brand {
			position: relative;
			width: 170px;
			left: 15px;
		}

		.containers {
			position: relative;
			width: 50%;
		}

		.image {
			opacity: 1;
			display: block;
			width: 100%;
			height: auto;
			transition: .5s ease;
			backface-visibility: hidden;
		}

		.middle {
			transition: .5s ease;
			opacity: 0;
			position: absolute;
			top: 50%;
			left: 100%;
			transform: translate(-50%, -50%);
			-ms-transform: translate(-50%, -50%);
			text-align: center;
		}

		#social-fb:hover {
			color: #3B5998;
		}

		#social-tw:hover {
			color: #4099FF;
		}

		#social-gp:hover {
			color: #d34836;
		}

		#social-em:hover {
			color: #f39c12;
		}

		.containers:hover .image {
			opacity: 0.3;
		}

		.containers:hover .middle {
			opacity: 1;
		}

		.text {
			background-color: #4CAF50;
			color: white;
			font-size: 16px;
			padding: 16px 32px;
		}

		.container .text-animation {
			width: 100px;
			height: 100px;
			animation-name: example;
			animation-duration: 4s;
		}

		@keyframes example {
			from {
				opacity: 0;
			}

			to {
				opacity: 1;
			}
		}

		.index {
			background-color: rgb(255, 255, 255);
			background-image: url('img/banner.png');
			background-position: top;
			background-size: 100% 250px;
			background-repeat: no-repeat;
			height: 150vh;
			overflow-y: scroll;
		}

		.loginbox .inner {
			max-width: 450px;
			width: 90%;
			margin: 0 auto;
			background-color: white;
			position: relative;
			top: 175px;
			border-radius: 30px;
			box-sizing: border-box;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}

		p {
			text-align: center;
			font-family: Arial, Helvetica, sans-serif;

		}

		a:visited {
			color: rgb(70, 136, 3);
		}

		a:hover {
			color: rgb(70, 136, 3);
		}

		a:active {
			color: rgb(70, 136, 3);
		}

		form {
			padding: 20px 30px;
		}

		img {
			margin-top: 20px;
			margin-bottom: 20px;
			height: 150px;
			width: 150px;
		}


		input {
			margin-bottom: 20px;
			width: 100%;
			height: 50px;
			border-radius: 15px;
			border-color: rgb(70, 136, 3);
			outline: none;
			padding: 5px;
			font-size: large;
		}

		button {
			font-size: large;
			background-color: rgb(70, 136, 3);
			color: white;
			border-radius: 15px;
			height: 40px;
			width: 100%;
			padding: 2px;
			margin-bottom: 0px;
			font-family: Arial, Helvetica, sans-serif;
		}
	</style>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="./image/fav_icon.png" type="image/png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Student Login</title>
</head>

<body class="index">
	<div class="loginbox">
		<div class="inner">
			<div style="text-align: center;"><img src="img/avatar.png" alt="#"></div>
			<form action="login.php" method="post">
				<?php
				if ($error != "") {
					echo '<p style="color: red;background-color: #f2dede;padding: 10px;">' . htmlspecialchars($error) . '</p>';
				}
				?>
				<input type="email" placeholder="Email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" autocomplete="off" autofocus>
				<input type="password" placeholder="Password" name="password" required>
				<button type="submit">Login</button>
				<p> <a href="https://wa.me/+916380091001">Forgot password?</a></p>
			</form>
		</div>
	</div>
</body>

</html>