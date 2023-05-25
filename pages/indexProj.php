<!DOCTYPE html>
<html>
<head>
	<title>Welcome to MaMa!</title>
	<link rel = "stylesheet" href = "../styles/main_style.css" />
	<link rel = "stylesheet" href = "../styles/index_style.css" />
	<style>
	* { font-family: cambria; font-size: 17px;}
	label { display: block; }
	</style>
</head>
<body>
	<ul class="titles">
        <li><a href="./indexProj.php" id="logo"><img src="../assets\images/newLogo.jpg" alt="logo icon"> </a></li>
        <li id="buttonLog"> <a href="./login_page.php"> Sign Out </a> </li> 
    </ul>

	<article class="presentPage">
		<div>
			<img src="../assets\images/newLogo.jpg" alt="MaMa! Logo" width=450px, height=auto>
		</div>
		<div>
			<header class="presentationTitle">
				MaMa! - Manners Matter
			</header>
			<p class="presentationBody">
				Welcome to MaMa - Manners Matter! Our site is dedicated to teaching you 
				the essential manners and etiquette for virtual contexts such as online 
				meetings and social media interactions. With our expert guidance, you'll 
				learn how to use emojis, communicate effectively, and make a great impression 
				in any virtual setting. Join us on the journey to becoming a polite and 
				well-mannered virtual citizen today!
			</p>
		</div>
	</article>

	<article class="categs">
		<header>
			<form method="POST" action="./profile_page.php">
    			<input class="goToPage" type="submit" value="My Account"/>
  			</form>
		</header>
		<p>
			This is where you can see information about your account.
		</p>
	</article>

	<article class="categs">
		<header>
			<form method="POST" action="lessonsProj.php">
    			<input class="goToPage" type="submit" value="Go To Lessons"/>
  			</form>
		</header>
		<p>
			This is where you can start learning.
		</p>
	</article>

	<article class="categs">
		<header>
			<form method="POST" action="./suggestion/suggestion.php">
    			<input class="goToPage" type="submit" value="Suggestions For You"/>
  			</form>
		</header>
		<p>
			This is where you can get information about manners based on your needs.
		</p>
	</article>

	<article class="categs">
		<header>
			<form method="POST" action="scoreboard_stuff/scoreboard_controller.php">
    			<input class="goToPage" type="submit" value="Scoreboard"/>
  			</form>
		</header>
		<p>
			This is where you can see the leaderboard.
		</p>
	</article>
</body>
</html>
