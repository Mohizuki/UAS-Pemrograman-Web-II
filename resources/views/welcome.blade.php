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
		<h1>くるんちい - Cruncii</h1>
	  <p>A personal novel website<br>There are 3 pages at the moment you can try all of those</p>
		<a href="novel" class="hero-btn">Novel</a>
		<a href="genre" class="hero-btn">Genre</a>
		<a href="popular" class="hero-btn">Popular</a>
	</div>
	</section>
	</header>
	
<!----tengah / content 1---->
<section class="course">
	<h1>Novels Featured</h1>
	<p>Some of novels that are available</p>	
	<div class="row">
	<div class="course-col">
		<h3>Shuumatsu Nani Shitemasu ka</h3>
		<img src="images/s1.jpg" alt="">
		<p>The story follows Willem Kmetsch, the last surviving human, 500 years after the end of the world at the hands...</p>
	</div>
	<div class="course-col">
		<h3>Touhou fanfiction</h3>
		<img src="images/s2.jpg" alt="">
		<p>Touhou fiction, which includes both the original stories and the various fan works.</p>
	</div>
	<div class="course-col">
		<h3>Fate Grand/Order fanfiction</h3>
		<img src="images/s3.jpg" alt="">
		<p>fate grand ordere fanfiction stories,  stories include: Grand Ancestral Bloodlines, ...</p>
	</div>
	</div>
</section>
<!---- bawahcon section / content 2---->	
<section class="bawahcon">
	<h1>Popular Novels</h1>
	<p>Most viewed novels for weeks</p>
	<div class="row">
		<div class="bawahcon-col">
			<img src="images/cover1.jpg" alt="">
			<div class="layer">
				<h3>Volume 1<br>Shuumatsu Nani Shitemasu ka? Iden: Leila Asprey</h3>
			</div>
		</div>
		<div class="bawahcon-col">
			<img src="images/cover2.jpg" alt="">
			<div class="layer">
				<h3>Volume 1<br>Shuumatsu Nani Shitemasu ka? Mou Ichido dake, Aemasu ka?</h3>
			</div>
		</div>
		<div class="bawahcon-col">
			<img src="images/cover3.jpg" alt="">
			<div class="layer">
				<h3>Volume 2<br>Shuumatsu Nani Shitemasu ka? Mou Ichido dake, Aemasu ka?</h3>
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
			<h3>“Shuumatsu Nani Shitemasu ka?” series of books.</h3>
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
	<a href="about" class="hero-btn">ABOUT US</a>
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
