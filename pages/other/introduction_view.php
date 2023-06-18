<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styles/main_style.css" />
    <link rel="stylesheet" href="../styles/lessons_style.css" />
    <link rel="stylesheet" href="../styles/lesson_rest_style.css" />
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
    <!-- The navigation bar for lessons -->
    <ul class="lessons">
        <li class="titleLesson">
            <?php include_once '../db/getting_info.php';
            echo getNameCategory($id); ?>
        </li>
        <?php
        if ($lessons != null) {
            $link = "./lesson.php?id=" . $id . "&id_les=";
            foreach ($lessons as $lesson) {
                echo "<li><a href='" . $link . $lesson[1] . "'>" . $lesson[2] . "</a></li>";
            }
        }
        ?>
    </ul>
    <!-- The content of this page -->
    <div class="pageContent">
        <?php
        if ($lessons == null) {
            echo "<br><br><h1> SORRY, but there are NOT any available lessons YET  </h1><br><br>";
            echo "<img src='https://giffiles.alphacoders.com/773/77358.gif' class='picturesLessons'>";
        } else {
            echo "<br><br><h1> Choose a lesson that you would like to read</h1><br><br>";
            echo "<img src='https://media.tenor.com/_1KIbt_V2owAAAAC/fake-smile-forced-smile.gif' class='picturesLessons'>";
        } ?>
</body>

</html>