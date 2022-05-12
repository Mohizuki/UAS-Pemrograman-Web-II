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
					<li><a href="index.php">HOME</a></li>
					<li><a href="">NOVEL</a></li>
					<li><a href="">GENRE</a></li>
					<li><a href="">POPULAR</a></li>
					<li><a href="">ABOUT</a></li>
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
	<div class="text-box">
	  <h1>About us</h1>
	</div>
	</section>
	</header>
	
<!---- bawahcon section / content 2---->	
<section class="bawahcon">
	<h1>Contributor</h1>
	<p>Most viewed novels for weeks</p>
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
</section>	
	
<!---- bawah lagi / content 3----->	
<section class="bawahlagi">
	<h1>Another Novels</h1>
	<p>more novels that are available</p>
	
	<div class="row">
		<div class="bawahlagi-col">
			<img src="images/cover4.jpg" alt="">
			<h3>“Shuumatsu Nani Shitemasu ka?” series of books.d</h3>
			<p>Sukasuka Vol. EX officially on June 2020.</p>
		</div>
		<div class="bawahlagi-col">
			<img src="images/cover5.jpg" alt="">
			<h3>“Shuumatsu Nani Shitemasu ka?” series of books.</h3>
			<p>Specifically, this is a story about an incident in spring. It dates back to the year of 415 in the common calendar of Regul Aire, almost 30 years before Feodor Jessman would meet four certain Leprechaun girls.</p>
		</div>
		<div class="bawahlagi-col">
			<img src="images/cover6.jpg" alt="">
			<h3>“Shuumatsu Nani Shitemasu ka?” series of books.</h3>
			<p>[Sukamoka Vol. 4] A Self-Indulgent Fantasy</p>
		</div>
	</div>
</section>

<!----- promoteabout ----->	
	
<section class="promoteabout">
	<h1>Please if you want to know more about us</h1>
	<a href="" class="hero-btn">ABOUT US</a>
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
