<!DOCTYPE html>
<html>

<head>
    <title>MaMa! Lessons</title>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styles/main_style.css" />
    <link rel="stylesheet" href="../styles/index_style.css" />
    <link rel="stylesheet" href="../styles/scoreboard_style.css" />
    <link rel="stylesheet" href="../styles/lessonspage_style.css" />
    <link rel="stylesheet" href="../styles/style_other.css" />
</head>

<body>
    <ul class="titles">
        <li><a href="./indexProj.php" id="logo"><img src="../assets\images/newLogo.jpg" alt="logo icon"> </a></li>
        <li><a href="./lessonsProj.php" id="home"> <img src="../assets\images/HomeLogo.png" alt="home icon"> </a> </li>
        <li> <a href="./messages/introduction.php">Messages</a> </li>
        <li> <a href="./virtual community/introduction.php">Virtual Community</a> </li>
        <li> <a href="./emoji/introduction.php">Emoji</a> </li>
        <li> <a href="./video conferences/introduction.php">Video Conferences</a> </li>
        <li> <a href="./culture/introduction.php">Culture</a> </li>
        <li> <a href="./multilingualism/introduction.php">Multilingualism</a> </li>
        <?php
        include '../db/getting_info.php';
        if (isset($_COOKIE['Email']) && isActive($_COOKIE['Email']) && isAdmin(($_COOKIE['Email']))) { ?>
            <li id="commands">
                <a href="./admin/menu.php">Admin Commands</a>
            </li>
        <?php } ?>
        <?php
        if (isset($_COOKIE['Email'])) {
            $type = returnTypeSign($_COOKIE['Email']);
        } else {
            $type = "Sign in";
        }
        ?>


        <!-- end admin -->
        <li id="buttonLog"> <a href="./login_page.php?a=false">
                <?php echo $type; ?>
            </a> </li>
    </ul>
    <img id="down" src="../assets\images/newLogo.jpg" alt="logo icon">
    <h1>Here are the available categories:</h1>
    <div class="pageOther">
        <?php
        $letter = null;
        $link = "./introduction.php?id_cat=";
        foreach ($categories as $category) {
            if (strtoupper($category[1][0]) != $letter) {
                $letter = strtoupper($category[1][0]);
                echo "<h2> - " . $letter . " - </h2><br>";
            }
            echo "<p> <a href='".$link.$category[0]."'> " . $category[1] . "</a></p><br>";
        }
        ?>
    </div>
</body>

</html>