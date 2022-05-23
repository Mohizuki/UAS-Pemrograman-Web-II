<!doctype html>
<html>
<head>
	<meta name="viewport" content="with=device-width, initial-scale=1.0">
	<title>Crunchii Novel</title>
	<link rel="shortcut icon" type="image/icon" href="images/crunchiitopicon.ico" />
	<link rel="stylesheet" href="../style.css">
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
			<a href="index.html"><img src="../images/crunchiilogo.gif" alt=""></a>
		</div>
		<!---- header menu ---->
		<div class="headermenu">
			<nav>
				<div class="nav-links" id="navLinks">
				<i class="fa fa-times" onclick="hideMenu()"></i>
				<ul>
                    <li><a href="../">HOME</a></li>
					<li><a href="../novel">NOVEL</a></li>
					<li><a href="../genre">GENRE</a></li>
					<li><a href="../popular">POPULAR</a></li>
					<li><a href="../about">ABOUT</a></li>
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
					<button type="submit"><img src="../images/search.png" alt=""></button>
				</form>
			</div>
		</div>
		<div class="login">
				<a href="../login.html"><img src="../images/personlogin.png" alt=""></a>
			</div>
	<div class="text-box">
		<h1>Romance Genre</h1>
	  <p>Falling in love and struggling to progress towards—or maintain—a romantic relationship take priority,<br> while other subplots either take backseat or are designed to develop the main love story.</p>
	</div>
	</section>
	</header>
	
<!---- bawah lagi / content 3----->	
<section class="bawahlagi">
	<h1>Romance Novels</h1>
	<p>novels that are available</p>
	
	<div class="row">
		<div class="bawahlagi-col">
			<img src="../images/cover4.jpg" alt="">
			<h3>“Shuumatsu Nani Shitemasu ka?” series of books.d</h3>
			<p>Sukasuka Vol. EX officially on June 2020.</p>
		</div>
		<div class="bawahlagi-col">
			<img src="../images/cover5.jpg" alt="">
			<h3>“Shuumatsu Nani Shitemasu ka?” series of books.</h3>
			<p>Specifically, this is a story about an incident in spring. It dates back to the year of 415 in the common calendar of Regul Aire, almost 30 years before Feodor Jessman would meet four certain Leprechaun girls.</p>
		</div>
		<div class="bawahlagi-col">
			<img src="../images/cover6.jpg" alt="">
			<h3>“Shuumatsu Nani Shitemasu ka?” series of books.</h3>
			<p>[Sukamoka Vol. 4] A Self-Indulgent Fantasy</p>
		</div>
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