<!DOCTYPE html>
<html lang="en">
<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="/css/login.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@800&display=swap" rel="stylesheet">
		<title>Login Page</title>
</head>
<body>
	<div class="bg">
		<div class="d1">
			<div class="container">
				<div class="mainbox">
					<div class="top">
						<div class="heading">
								<div class="quora">SQuora</div>
								<h5>A place to share knowledge and better understand the world</h5>
						</div>
					</div>
					<div class="middle">
						<div class="right">
							<div class="r1">
									<div id="login">Login</div>
							</div>
							<div class="r2">
								<form class="login-form" action="/Login/create" method="POST">
									<label class="bold" for="email">Email</label>
									<input type="text" name="username" placeholder="Enter your email" required>
									<label class="bold" for="password">Password</label>
									<input type="password" name="password" placeholder="Enter your password" required>
									<button type="submit" id="loginbutton">Login</button>
								</form>
							</div>
							<div class="r4">
									<a href="/Password/forget">Forgot password?</a>
									<div>New User? <a class="create-account" href="/Signup/new">Create an account</a></div>
							</div>
						</div>
					</div>
					<div class="hindi">
							<a id="hindi" href="#">हिन्दी </a> >
					</div>
					<div class="bottom">
							<a class="last" href="#">About.</a>
							<a class="last" href="#">Careers.</a>
							<a class="last" href="#">Privacy.</a>
							<a class="last" href="#">Terms.</a>
							<a class="last" href="#">Contact.</a>
							<a class="last" href="#">Languages.</a>
							<a class="last" href="#">Your Ad Choices.</a>
							<a class="last" href="#">Press.</a>
							<a class="last" href="#">© SQuora,Inc.2023</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
