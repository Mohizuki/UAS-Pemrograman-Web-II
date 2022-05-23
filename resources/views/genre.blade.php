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
		<h1>Genres</h1>
	  <p>Find yourself your fitted genre for novels</p>
	</div>
	</section>
	</header>
	
<!----tengah / content 1---->
<section class="course">
	<h1>Novels Featured</h1>
	<p>Some of novels that are available</p>	
	<div class="rowgenre">
	<div class="course-col">
		<a href="genre/fantasy.html" style="color:black;text-decoration: none; background-color: none;">
		<div class="imagegenre">
		<img src="images/s1.jpg" alt="" style="position: absolute; width: 357px; margin-top: 1px;">
		<img src="images/cloud2.gif" alt="" style="opacity: 0.5; margin: auto;">
		</div>
		<div class="textgenre">
		<h1>Fantasy</h1>
		</div>
		</a>
		<p>Fantasy novels are speculative fiction stories with imaginary characters set in imaginary universes with mythology, folklore and Magic.</p>
	</div>
	<div class="course-col">
		<a href="genre/action" style="color:black;text-decoration: none; background-color: none;">
		<div class="imagegenre">
		<img src="images/s2.jpg" alt="" style="position: absolute; width: 357px; margin-top: 1px;">
		<img src="images/cloud2.gif" alt="" style="opacity: 0.5; margin: auto;">
		</div>
		<div class="textgenre">
		<h1>Action</h1>
		</div>
		</a>	
		<p>Exciting action sequences take priority and significant conflicts between characters are usually resolved with one's physical power.</p>
	</div>
	<div class="course-col">
		<a href="genre/drama.html" style="color:black;text-decoration: none; background-color: none;">
		<div class="imagegenre">
		<img src="images/s3.jpg" alt="" style="position: absolute; width: 357px; margin-top: 1px;">
		<img src="images/cloud2.gif" alt="" style="opacity: 0.5; margin: auto;">
		</div>
		<div class="textgenre">
		<h1>Drama</h1>
		</div>
		</a>
		<p>Plot-driven stories focused on realistic characters experiencing human struggle.</p>
	</div>
	<div class="course-col">
		<a href="genre/sci-fi.html" style="color:black;text-decoration: none; background-color: none;">
	  <div class="imagegenre">
		<img src="images/s1.jpg" alt="" style="position: absolute; width: 357px; margin-top: 1.7px;">
		<img class="toplayer" src="images/cloud2.gif" alt="" style="opacity: 0.5;">
		</div>
		<div class="textgenre">
		<h1>Sci-fi</h1>
		</div>
		</a>
		<p>Imagined technological advancements settings which are currently unreal in the present day but could be invented by future's science.</p>
	</div>
	<div class="course-col">
		<a href="genre/romance.html" style="color:black;text-decoration: none; background-color: none;">
		<div class="imagegenre">
		<img src="images/s2.jpg" alt="" style="position: absolute; width: 357px; margin-top: 1px;">
		<img src="images/cloud2.gif" alt="" style="opacity: 0.5; margin: auto;">
		</div>
		<div class="textgenre">
		<h1>Romance</h1>
		</div>
		</a>
		<p>Falling in love and struggling to progress towards—or maintain—a romantic relationship take priority...</p>
	</div>
	<div class="course-col">
		<a href="genre/adventure.html" style="color:black;text-decoration: none; background-color: none;">
		<div class="imagegenre">
		<img src="images/s3.jpg" alt="" style="position: absolute; width: 357px; margin-top: 1px;">
		<img src="images/cloud2.gif" alt="" style="opacity: 0.5; margin: auto;">
		</div>
		<div class="textgenre">
		<h1>Adventure</h1>
		</div>
		</a>
		<p>Whether aiming for a specific goal or just struggling to survive, the main character is thrust into unfamiliar situations or lands..</p>
	</div>	
	</div>
</section>

<!----- promoteabout ----->	
	
<section class="promoteabout">
	<h1>Please if you want to know more about us</h1>
	<a href="about.html" class="hero-btn">ABOUT US</a>
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
