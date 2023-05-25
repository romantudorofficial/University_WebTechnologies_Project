<!DOCTYPE html>
<html>
<head>
	<title>MaMa! Scoreboard</title>
	<link rel = "stylesheet" href = "../../styles/main_style.css" />
	<link rel = "stylesheet" href = "../../styles/index_style.css" />
	<link rel = "stylesheet" href = "../../styles/scoreboard_style.css" />
	<style>
	* { font-family: cambria; font-size: 17px; }
	label { display: block; }
	</style>
</head>
<body>
	<ul class="titles">
        <li><a href="../indexProj.php" id="logo"><img src="../../assets\images/newLogo.jpg" alt="logo icon"> </a></li>
        <li id="buttonLog"> <a href="login_page.php"> Sign Out </a> </li> 
    </ul>

	<article class="categTitle">
		MaMa! Scoreboard
	</article>

	<article class="categs">
        <?php
            $i = 1;
            foreach($user_top as $user){
                echo '<div class="userBox">';
                echo '<p class="userInfo">'.$i.'.</p>';
                echo '<p class="userInfo">'.$user["firstName"].' '.$user["lastName"].'</p>';
                echo '<p class="userInfo">'.$user["score"].' points</p>';
                echo '</div>';
                $i = $i + 1;
            }
        ?>
		<div class="myBox">
			<p class="userInfo">52.</p>
			<p class="userInfo">You</p>
			<p class="userInfo">15 points</p>
		</div>
	</article>
</body>
</html>