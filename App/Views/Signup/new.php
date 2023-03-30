<!DOCTYPE html>
<html lang="en">
<head>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="/css/signup.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@800&display=swap" rel="stylesheet">
		<title>Sign up Page</title>
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
          <div >
            <form class="form" action="/Signup/create" method="post">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="fname" required><br>

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lname" required><br>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required><br>

            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" value="+91" required><br>

            <label for="interest">Interest</label>
            <select id="interest" name="interest" required>
              <option value="science">Science</option>
              <option value="technology">Technology</option>
              <option value="entertainment">Entertainment</option>
            </select><br>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required><br>

            <label for="confirmpassword">Confirm Password</label>
            <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm your password" required><br>
            <div>
              <a href="/Login/new">Already registered?</a>
              <input type="submit" value="Signup" class="signup">
            </div>
            </form>
            <script src="/js/signup-page.js"></script>
          </div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
