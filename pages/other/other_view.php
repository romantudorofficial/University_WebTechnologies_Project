<!DOCTYPE html>
<html>

<head>
    <title>MaMa! Lessons</title>
    <link rel="stylesheet" href="../styles/main_style.css" />
    <link rel="stylesheet" href="../styles/index_style.css" />
    <link rel="stylesheet" href="../styles/scoreboard_style.css" />
    <link rel="stylesheet" href="../styles/lessonspage_style.css" />
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
                <a href="../admin/menu.php">Admin Commands</a>
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
</body>

</html>