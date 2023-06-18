<!DOCTYPE html>
<html>

<head>
	<title>Welcome to MaMa!</title>
	<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="../../styles/main_style.css" />
	<link rel="stylesheet" href="../../styles/index_style.css" />
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
		<?php
		include '../../db/getting_info.php';
		if (isset($_COOKIE['Email'])) {
			$type = returnTypeSign($_COOKIE['Email']);
		} else {
			$type = "Sign in";
		}
		?>


		<!-- end admin -->
		<li id="buttonLog"> <a href="../login_page.php?a=false">
				<?php echo $type; ?>
			</a> </li>
	</ul>

    <article class="categs">
        <h1>About Admins</h1><br>
        <p>
            An admin has several responsibilities. They are in charge of managing the site, and they are also in charge of approving 
            applications to become an admin. They are also in charge of creating new categories and lessons, as well as useful
            suggestions for other users to benefit from.
        </p>
        <p>
            If you are interested in becoming an admin, please click the "Apply" button below.
        </p>
    </article>

    <article class="categs">
        <h1>How will you know that your application has been approved?</h1><br>
        <p>
            After an admin has carefully reviewed your application and decided to approve it, your account will be upgraded to an admin account.
            Next to where you usually see the available categories, you will see an extra button that says "Admin Commands". By clicking it, you
            will be able to access the admin page, where you can create new categories and lessons, as well as approve applications to become an 
            admin.
        </p>
        <p>
            If you are interested in becoming an admin, please click the "Apply" button below.
        </p>
    </article>


    <?php
		if ($type != "Sign in") {
			echo '<article class="categs">
            <header>
                <form method="POST" action="applying.php">
                    <input class="goToPage" type="submit" value="Apply" />
                </form>
            </header>
            <p>
                Click this to apply to become an admin.
            </p>
        </article>';
		} else {
			echo '<article class="categs">Please sign in if you want to apply!</article>';
		}

    if (isset($_REQUEST['a'])){
        if ($_REQUEST['a'] == "true") {
            echo "You have successfully applied to become an admin! Please wait for an admin to review your application.";
        } else if ($_REQUEST['a'] == "false") {
            echo "You already are an admin!";
        } else if ($_REQUEST['a'] == "stop") {
            echo "You've already applied! Please be patient and wait for an admin to review your application.";
        } 
    }
 
	?>

</body>

</html>