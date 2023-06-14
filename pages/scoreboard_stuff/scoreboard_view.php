<!DOCTYPE html>
<html>

<head>
	<title>MaMa! Scoreboard</title>
	<link rel="stylesheet" href="../../styles/main_style.css" />
	<link rel="stylesheet" href="../../styles/index_style.css" />
	<link rel="stylesheet" href="../../styles/scoreboard_style.css" />
	<style>
		* {
			font-family: cambria;
			font-size: 17px;
		}

		label {
			display: block;
		}
	</style>
</head>

<body>
	<ul class="titles">
		<li><a href="../indexProj.php" id="logo"><img src="../../assets\images/newLogo.jpg" alt="logo icon"> </a></li>

		<!-- end admin -->
		<li id="buttonLog"> <a href="../login_page.php?a=false">
				<?php echo $type; ?>
			</a> </li>
	</ul>

	<article class="categTitle">
		MaMa! Scoreboard
	</article>

	<a href="scoreboard_rss.php">Subscribe to RSS Feed</a>

	<article class="categs">
		<?php
		$i = 1;
		foreach ($user_top as $user) {
			echo '<div class="userBox">';
			echo '<p class="userInfo">' . $i . '.</p>';
			echo '<p class="userInfo">' . $user["firstName"] . ' ' . $user["lastName"] . '</p>';
			echo '<p class="userInfo">' . $user["score"] . ' points</p>';
			echo '</div>';
			$i = $i + 1;
		}
		?>
		<?php
		echo '<div class="myBox">';
		if ($type == "Sign out") {
			echo '<p class="rank">' . $user_current["rank"] . '.</p>';
			echo '<p class="userInfo">' . $user_current["firstName"] . ' ' . $user_current["lastName"] . '</p>';
			echo '<p class="userInfo">' . $user_current["score"] . ' points</p>';
		} else {
			echo '<p class="userInfo"> - </p>';
			echo '<p class="userInfo"> - </p>';
			echo '<p class="userInfo"> No points </p>';
		}
		echo '</div>';
		?>
	</article>
</body>

</html>