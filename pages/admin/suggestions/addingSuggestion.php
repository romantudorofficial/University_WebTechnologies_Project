<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title> Emoji Tutorial </title>
        <link rel="stylesheet" href="../../../styles/main_style.css" />
        <link rel="stylesheet" href="../../../styles/lessons_style.css" />
        <link rel="stylesheet" href="../../../styles/admin_style.css" />
        <link rel="stylesheet" href="../../../styles/newstyle.css">
    </head>

    <body>
        <!-- The main navigation bar -->
        <ul class="titles">
            <li><a href="../../indexProj.php" id="logo"><img src="../../../assets\images/newLogo.jpg" alt="logo icon"> </a>
            </li>
            <li><a href="../../lessonsProj.php" id="home"> <img src="../../../assets\images/HomeLogo.png" alt="home icon">
                </a> </li>
            <li> <a href="../../messages/introduction.php">Messages</a> </li>
            <li> <a href="../../virtual community/introduction.php">Virtual Community</a> </li>
            <li> <a href="../../emoji/introduction.php">Emoji</a> </li>
            <li> <a href="../../video conferences/introduction.php">Video Conferences</a> </li>
            <li> <a href="../../culture/introduction.php">Culture</a> </li>
            <li> <a href="../../multilingualism/introduction.php">Multilingualism</a> </li>
            <li>
                <a href="../../other.php" id="other">Other</a>
            </li>
            <!-- Commands for admin: php for making them appear for admins, until then invisible, in our case is admin -->
            <li id="commands">
                <a href="../../admin/menu.php" class="active">Admin Commands</a>
            </li>
            <!-- end admin -->
            <li id="buttonLog"> <a href="../../login_page.php?a=false"> Sign Out </a> </li>
        </ul>

        <!-- The content of this page -->
        <div class="adminContent">
            <h1> Management Page. Adding suggestion content </h1>
            <p class="info"> Write the contents of your suggestion</p>
            <?php
                $suggestionDescription = $_POST["suggestion_description"];
                $category = $_POST["suggestion_category"];
                echo "<p class='info'>Suggestion description:" .  $suggestionDescription . "</p>";
                echo "<p class='info'>Suggestion category:" . $category . "</p>";
            ?>

            <form action="added_controller.php" method="POST">
                <h2 style="text-align:center">Informal context</h2>
                <h3>For females:</h3>
                <textarea name="informal_female" rows="10" cols="60" maxlength="1000"></textarea><br>
                <h3>For males:</h3>
                <textarea name="informal_male" rows="10" cols="60" maxlength="1000"></textarea><br>
                <h2 style="text-align:center">Formal context</h2>
                <h3>For females:</h3>
                <textarea name="formal_female" rows="10" cols="60" maxlength="1000"></textarea><br>
                <h3>For males:</h3>
                <textarea name="formal_male" rows="10" cols="60" maxlength="1000"></textarea><br>
                <input type="hidden" name="suggestion_description" value="<?php echo $suggestionDescription; ?>">
                <input type="hidden" name="suggestion_category" value="<?php echo $category; ?>">
                <button class="backButton" type="submit">Add suggestion</button>
            </form>
        </div>

    </body>

</html>