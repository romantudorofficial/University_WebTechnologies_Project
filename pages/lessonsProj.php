<!DOCTYPE html>
<html>

<head>
    <title>MaMa! Lessons</title>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="../styles/main_style.css" />
    <link rel="stylesheet" href="../styles/index_style.css" />
    <link rel="stylesheet" href="../styles/scoreboard_style.css" />
    <link rel="stylesheet" href="../styles/lessonspage_style.css" />
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
        <li><a href="./indexProj.php" id="logo"><img src="../assets\images/newLogo.jpg" alt="logo icon"> </a></li>
        <li><a href="./lessonsProj.php" id="home"> <img src="../assets\images/HomeLogo.png" alt="home icon"> </a> </li>
        <li> <a href="./messages/introduction.php">Messages</a> </li>
        <li> <a href="./virtual community/introduction.php">Virtual Community</a> </li>
        <li> <a href="./emoji/introduction.php">Emoji</a> </li>
        <li> <a href="./video conferences/introduction.php">Video Conferences</a> </li>
        <li> <a href="./culture/introduction.php">Culture</a> </li>
        <li> <a href="./multilingualism/introduction.php">Multilingualism</a> </li>
        <li>
            <a href="./other.php" id="other">Other</a>
        </li>
        <!-- Commands for admin: php for making them appear for admins, until then invisible, in our case is admin -->

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
        <li id="buttonLog"> <a href="login_page.php?a=false">
                <?php echo $type; ?>
            </a> </li>
    </ul>

    <article class="categTitle">
        About MaMa!'s Lessons
    </article>

    <article class="presentPage">
        <div>
            <img src="../assets\images/newLogo.jpg" alt="MaMa! Logo" width=300px, height=auto>
        </div>
        <div>
            <header class="sectionTitle">
                How to get started
            </header>
            <p class="sectionBody">
                So you've found yourself in a virtual context and you don't know how to properly behave?
                Perhaps you have to take part in a virtual meeting and you're not quite sure when to
                open your mic or if you should leave your camera on or off, or you're just texting
                some friends but are unsure when and how to use emojis. Regardless of your specific situation,
                MaMa is here to help!
                Just select a category you're interested in from the options on top of the page and get
                started with your learning journey.
            </p>
            <p class="sectionBody">
                Politeness always pays off - just let MaMa show you how!
            </p>
        </div>
    </article>

    <article class="presentPage">
        <div>
            <header class="sectionTitle">
                A Short Guide to the Lessons
            </header>
            <p class="sectionBody">
                After you've chosen the category you'd like to learn more about, you'll be able
                to see the available lessons for it. Each of them has a set difficulty, suggested
                by a coloured circle next to their title. A green circle means an easy lesson, an
                orange circle means the lesson will be slightly more difficult, while a red circle
                means the highest difficulty.
            </p>
            <p class="sectionBody">
                Don't be afraid to approach a tougher lesson, though,
                because the higher the difficulty, the more points you'll get for completing it!
                And who knows, maybe that'll even earn you a place on MaMa's leaderboard!
            </p>
        </div>

        <div>
            <img src="../assets\images/stairs.png" alt="MaMa! Logo" width=525px, height=auto>
        </div>
    </article>

    <article class="presentPage">
        <div>
            <header class="sectionTitle">
                More About This Site
            </header>
            <p class="sectionBody">
                If you'd like to read a more in-depth description of this project and its purpose and functionalities,
                feel free to check out our System Requirements Specification document
                by clicking <a class="sectionBody" href="software_requirements_specification.html"> here</a>.
            </p>
        </div>
    </article>

</body>

</html>