<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700&display=swap">
</head>
<body>
	<div class="section">
		<div class="container login-container">
			<h1 class="login-title">Create an Account</h1>

			<form action="contact.php" method="POST" class="form login-form" >

				<div class="input-container">
					<input type="text" id="fullname" name="fullname" required=""  autocomplete="off"><br>
			   	 	<label for="fullname">Full Name</label>
				</div>
			    

				<div class="input-container">
					<input type="email" id="email" name="email" required=""  autocomplete="off"><br>
			   	 	<label for="fname">Email</label>
				</div>
			    
			    <div class="input-container">
			    	<input type="password" id="password" name="password" required="" ><br>
			    	<label for="password">Password</label>
			    </div>

			    <div class="input-container">
			    	<input type="password" id="confpass" name="confpass" required="" ><br>
			    	<label for="confpass">Confirm Password</label>
			    </div>

			    <input type="submit" value="sign up" class="button">
			</form>

			<p class="register">Already have an account? <a href="login.php" class="register">Login now</a></p>
	</div>
	</div>
	
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>