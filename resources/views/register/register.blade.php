<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Crunchii</title>
	<link rel="stylesheet" href="login.css">
	<link rel="shortcut icon" type="image/icon" href="images/crunchiitopicon.ico" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
<section>
	<div class="form-container">
		<div class="logoform">
		<img src="images/crunchiilogo.gif" alt="" style="width: 200px; height: 100px; top:50%; left: 50%; margin-left:20%;">
		</div>
		<h1>Registration Form</h1>
		<form action="/register" method="post">
			@csrf
            <div class="control">
				<label for="name">Name</label>
				<input type="text" name="name" id="name" class="form-control @error('email') is-invalid @enderror" placeholder="Your Name" autofocus required>
			</div>
            <div class="control">
				<label for="username">Username</label>
				<input type="text" name="username" id="username" class="form-control @error('email') is-invalid @enderror" placeholder="Username" autofocus required>
			</div>
			<div class="control">
				<label for="email">Email</label>
				<input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="name@example.com" autofocus required>
			</div>
			<div class="control">
				<label for="password">Password</label>
				<input type="password" name="password" id="password" placeholder="Password">
			</div>
            <small>Already registered ? sigh <a href="login" style="color: red;">click here</a></small>
			<!-- <span><input type="checkbox"> Remember me.</span> -->
			<div class="control">
				<input type="submit" value="login">
			</div>
		</form>
		<!----- <div class="link">
			<a href="#">Forgot password ?</a>
		</div> ----->
	</div>
</section>	
</body>
</html>