<!DOCTYPE html>
<html>

<head>
	<TITLE>User Login</TITLE>
	<link href="assets/css/phppot-style.css" type="text/css" rel="stylesheet" />
	<link href="assets/css/user-registration.css" type="text/css" rel="stylesheet" />
	<script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
</head>

<style>
	body {
		background-image: url("./assets/hmrs.png");
		background-position: center;
		/* Center the image */
		background-repeat: no-repeat;
		/* Do not repeat the image */
		background-size: cover;
		/* Resize the background image to cover the entire container */
	}

	.sign-up-container {
		width: fit-content;
		block-size: fit-content;
		background-image: linear-gradient(to right, #DBF3FA, #7AD7F0);
		float: left;
	}

	.form-label {
		color: darkblue !important;
	}

	#signup-btn {
		color: darkblue;
		font-weight: bold;
		background: #343a40;
	}
</style>

<body>

	<?php
	if (isset($_GET['pesan'])) {
		if ($_GET['pesan'] == "gagal") {
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}

	?>

	<div class="phppot-container" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ; padding:20px; margin-left:40px;">
		<div class="sign-up-container" style="padding:20px;">
			<div class="">
				<form style="padding:5px" action="login.php" method="post">
					<div class="signup-heading" style="color:darkblue">Login</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Username
							</div>
							<input style="width:350px; border-radius: 10px;" class="input-box-330" type="text" name="username" class="form_login" placeholder="Username .." required="required">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Password
							</div>
							<input style="width:350px; border-radius: 10px;" class="input-box-330" type="password" name="password" class="form_login" placeholder="Password .." required="required">
						</div>
					</div>
					<div class="row">
						<input style="width:150px;  border-radius: 20px;" class="btn" type="submit" value="LOGIN">
					</div>
					<br />
					<a href="mailto:@sisteminformasirsprognet@gmail.com" style="color:darkblue"><b>Forgot Password send email</b></a>
					<br />
				</form>
			</div>
		</div>
	</div>

</body>

</html>