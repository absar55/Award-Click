

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sigup</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" method="POST" enctype="multipart/form-data" action="merchant_connector.php">
					<span class="login100-form-title p-b-49">
					CREATE MERCHANT ACCOUNT
					</span>






					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" pattern="[A-Za-z0-9\s]{1,30}" title="Don't use Special Characters & max limit is 30 Letters" name="username" placeholder="Type your Username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>





					<div class="wrap-input100 validate-input m-b-23" data-validate = "Email is reauired">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Like xyz@gmail.com (Small Letters)" name="email" placeholder="Type your Email">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" pattern="[A-Za-z0-9@!_.]{8,30}" title="Don't use Space & Special Characters excpet ( @ ! _ .) & Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" name="password" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Confirm Password</span>
						<input class="input100" type="password" pattern="[A-Za-z0-9@!_.]{8,30}" title="Don't use Space & Special Characters excpet ( @ ! _ .) & Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" name="confirm_password" placeholder="Retype your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>


					<div class="wrap-input100 validate-input m-b-23" data-validate="Phone Number is required">
						<span class="label-input100">Phone Number</span>
						<input class="input100" type="tel"   pattern="+[0-9]{12}" title="Like +923012345678 with countery code" name="phone_number" placeholder="Enter Your Phone Number">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>



					<div class="wrap-input100 validate-input m-b-23" data-validate="Your Website is Required">
						<span class="label-input100">Website</span>
						<input class="input100" type="text"   pattern="^www\.[a-zA-Z0-9]+\.(com)$" title="Like www.yourwebname.com" name="website" placeholder="Enter Your Website">
						<span class="focus-input100" data-symbol="&#169;"></span>
					</div>




					<div class="text-right p-t-8 p-b-31">
											<!--===============================================================================================

						<a href="#">
							Forgot password?
						</a>
											-->

					</div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="submit">
								SIGN UP
							</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20">
					<a href="merchant_login.php" class="txt2">
							Login
						</a>
					</div>

			

					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>

