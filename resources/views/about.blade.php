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
			<a href="index.html"><img src="images/crunchiilogo.gif" alt=""></a>
		</div>
		<!---- header menu ---->
		<div class="headermenu">
			<nav>
				<div class="nav-links" id="navLinks">
				<i class="fa fa-times" onclick="hideMenu()"></i>
				<ul>
					<li><a href="./">HOME</a></li>
					<li><a href="novel">NOVEL</a></li>
					<li><a href="genre">GENRE</a></li>
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
					<input type="text" placeholder="Search novel" name="s">
					<button type="submit"><img src="images/search.png" alt=""></button>
				</form>
			</div>
		</div>
		<div class="login">
				<a href="login.html"><img src="images/personlogin.png" alt=""></a>
			</div>
<div class="text-box">
	  <h1>About us</h1>
	</div>
	</section>
	</header>

<section class="referensi">
	<h1>Referensi</h1>
	<p>kalimat</p>
	
	
</section>	
<!---- bawahcon section / content 2---->	
<section class="bawahcon">
	<h1>Contributor</h1>
	<p>people who are contribute to this website</p>
	<div class="row">
		<div class="bawahcon2-col">
			<img class="con1" src="images/contact1.png" alt="">
			<div class="layer2">
			</div>
		</div>
		<div class="bawahcon2-col">
			<img src="images/contact2.png" alt="">
			<div class="layer2">
			</div>
		</div>
	</div>
	<h1>Social Media</h1>
	<div class="sosmed">
		<div class="sosiconrow">
			<div class="sosicon">
				<a href="https://www.instagram.com/crunchill/">
				<i class="fa fa-github"> Mohizuki</i>
				</a>
			</div>
			<div class="sosicon">
				<a href="https://www.instagram.com/crunchill/">
				<i class="fa fa-instagram"> Crunchill</i>
				</a>
			</div>
			<div class="sosicon">
				<a href="https://www.instagram.com/crunchill/">
				<i class="fa fa-steam"> Mohizuki</i>
				</a>
			</div>
		</div>
		<div class="sosicon2row">
			<div class="sosicon2">
				<a href="https://www.instagram.com/crunchill/">
				<i class="fa fa-github"> Mohizuki</i>
				</a>
			</div>
			<div class="sosicon2">
				<a href="https://www.instagram.com/crunchill/">
				<i class="fa fa-instagram"> Crunchill</i>
				</a>
			</div>
			<div class="sosicon2">
				<a href="https://www.instagram.com/crunchill/">
				<i class="fa fa-steam"> Mohizuki</i>
				</a>
			</div>
		</div>
	</div>
</section>	
	
<!----- footer ----->	
	
<section class="footer">
	<p>both fadil and i, naufal trying to build this website for exam's purposes</p>
	<p>Made with <i class="fa fa-heart-o"></i> tears ;-;</p>
</section>

<!------JavaScript for Toggle Menu----->

<script>
	var navLinks = document.getElementById("navLinks");
	function showMenu(){
		navLinks.style.right = "0";
	}
	function hideMenu(){
		navLinks.style.right = "-155px";
	}
</script>
</body>
</html>
