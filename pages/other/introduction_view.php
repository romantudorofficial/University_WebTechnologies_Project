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
            foreach ($lessons as $lesson) {
                echo "<li><a href=''>" . $lesson[2] . "</a></li>";
            }
        }
        ?>
    </ul>
    <!-- The content of this page -->
    <div class="pageContent">
        <?php
        if ($lessons == null) {
            echo "<h1> SORRY, but  </h1><br>";
            echo "<h1> there are  </h1><br>";
            echo "<h1> NOT </h1><br>";
            echo "<h1> any available lessons </h1><br>";
            echo "<h1> YET </h1><br>";
            echo "<img src='https://giffiles.alphacoders.com/773/77358.gif' class='picturesLessons'>";
        } else { ?>
            <h1> Emoji vs Emoticon </h1>
            <h2 id="finished">
                <script>
                    document.addEventListener("DOMContentLoaded", function () {
                        sendUsingAjax(-1);
                    });
                </script>
            </h2>
            <h6>QUESTION</h6>
            <fieldset>
                <legend for="Q1"> Which one of the following is an emoticon?</legend>
                <div>
                    <input type="radio" id="emoji" name="option" value="emoji" checked>
                    <label for="emoji">🦚</label>
                </div>
                <div>
                    <input type="radio" id="emoticon" name="option" value="emoticon" checked>
                    <label for="emoticon">:P</label>
                </div>
                <button type="button" onclick="sendUsingAjax(0)">Check Answer</button>
                <div id="answer"></div>
            </fieldset>
            <button class="completeLesson" onclick="checkAnswer(answeredCorrectly)">Complete Lesson</button>
        <?php } ?>
    </div>
    <script>
        function myFunction(validUser) {
            if (validUser != 1) {
                if (document.getElementById("emoticon").checked) {
                    document.getElementById("answer").innerHTML = "Your answer is correct";
                    answeredCorrectly = true;
                }
                else {
                    document.getElementById("answer").innerHTML = "Your answer is wrong";
                    answeredCorrectly = false;
                }
            }
            else {
                document.getElementById("answer").innerHTML = "You already answered this question";
            }
        }
    </script>
</body>

</html>