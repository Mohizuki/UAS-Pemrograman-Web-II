<!doctype html>
<html>
<head>
	<meta name="viewport" content="with=device-width, initial-scale=1.0">
	<title>Crunchii Novel</title>
	<link rel="shortcut icon" type="image/icon" href="images/crunchiitopicon.ico" />
	<link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
	<header>
	<section class="header">
		<!---- header left ---->
		<div class="headerleft">
			<a href="./"><img src="images/crunchiilogo.gif" alt=""></a>
		</div>
		<!---- header menu ---->
		<div class="headermenu">
			<nav>
				<div class="nav-links" id="navLinks">
				<i class="fa fa-times" onclick="hideMenu()"></i>
				<ul>
					<li><a href="./">HOME</a></li>
					<li><a href="novel">NOVEL</a></li>
					<li><a href="genres">GENRE</a></li>
					<li><a href="popular">POPULAR</a></li>
					<li><a href="about">ABOUT</a></li>
				</ul>
				</div>	
				<i class="fa fa-bars" onclick="showMenu()"></i>	
			</nav>
		</div>
		<!---- header right ---->
		<div class="headerright">
			<div class="searchbutton">
				<form action="https://www.google.com/search" method="get" class="search-bar">
					<input type="text" placeholder="Search novel" name="">
					<button type="submit"><img src="images/search.png" alt=""></button>
				</form>
			</div>
		</div>
		<div class="login">
			<a href="profile"><img src="images/santa.png" alt=""></a>
		</div>
	<div class="text-box">
		<h1>Novel List</h1>
	  	<p>Find available novels that are available in our website.</p>
	</div>
	</section>
	</header>
	

<!---- list novel ----->
<section class="novelsec">
	<div class="container">
	@yield('content')
	</div>
</section>	
	
<!----- footer ----->	
	
<section class="footer">
	<h4>About Us</h4>
	<p>both fadil and i, naufal trying to build this website for exam's purposes</p>
	<div class="icons">
	<i class="fa fa-github"></i>
	<i class="fa fa-instagram"></i>
	<i class="fa fa-steam"></i>
	</div>
	<p>Made with <i class="fa fa-heart-o"></i> tears ;-;</p>
</section>

<!------JavaScript for Toggle Menu----->

<script>
	function showMenu(){
		var navLinks = document.getElementById("navLinks");
		navLinks.style.right = "0";
	}
	function hideMenu(){
		var navLinks = document.getElementById("navLinks");
		navLinks.style.right = "-155px";
	}
	
	let userSection = document.querySelectorAll(".delbutdiv")
	let isShow = true
	function deleteFunction(){
		for (var i = 0; i < userSection.length; i++) {
			if (isShow === true) {
				userSection[i].style.display = "none";
				isShow = false;
			}
			else {
				userSection[i].style.display = "block";
				isShow = true;
			}
		}
	}
</script>

</body>
</html>