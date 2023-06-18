<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title> Emoji Tutorial </title>
    <link rel="stylesheet" href="../../styles/main_style.css" />
    <link rel="stylesheet" href="../../styles/lessons_style.css" />
    <script src="../../services/functionsForAjax.js"></script>
</head>

<body>
    <!-- The main navigation bar -->
    <ul class="titles">
        <li><a href="../indexProj.php" id="logo"><img src="../../assets\images/newLogo.jpg" alt="logo icon"> </a></li>
        <li><a href="../lessonsProj.php" id="home"> <img src="../../assets\images/HomeLogo.png" alt="home icon"> </a>
        </li>
        <li> <a href="../messages/introduction.php">Messages</a> </li>
        <li> <a href="../virtual community/introduction.php">Virtual Community</a> </li>
        <li> <a href="../emoji/introduction.php" class="active">Emoji</a> </li>
        <li> <a href="../video conferences/introduction.php">Video Conferences</a> </li>
        <li> <a href="../culture/introduction.php">Culture</a> </li>
        <li> <a href="../multilingualism/introduction.php">Multilingualism</a> </li>
        <li>
            <a href="../other.php" id="other">Other</a>
        </li>
        <!-- Commands for admin: php for making them appear for admins, until then invisible, in our case is admin -->
        <?php
        include '../../db/getting_info.php';
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
        <li id="buttonLog"> <a href="../login_page.php?a=false">
                <?php echo $type; ?>
            </a> </li>
    </ul>
    <!-- The navigation bar for lessons -->
    <ul class="lessons">
        <li class="titleLesson">How to use emojis</li>
        <li><a href="introduction.php" class="active">Introduction<span class="easy"> 🟢 </span></a></li>
        <li><a href="brief_history.php">Brief history</a></li>
        <li><a href="emoji_emoticon.php">Emoji vs Emoticon</a></li>
        <li><a href="the_use_of_emojis.php">When (not) to use emojis</a></li>
        <li><a href="different_generations.php">Their meaning to different generations</a></li>
        <li><a href="rise_of_emoji.php">The new era of emojis</a></li>
        <li><a href="advice.php">Rules</a></li>
    </ul>
    <!-- The content of this page -->
    <div class="pageContent">
        <h1> Introduction </h1>
        <h2 id="finished">
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    sendUsingAjax(-1);
                });
            </script>
        </h2>
        <p>
            Let's clear up some confusion first off:
            An "emoticon" is a typographic display of a facial expression, for example :-&par;.
        </p>
        <p>
            They've been around since the 1980s. Whereas, "Emojis", introduced just before the new millennium,
            by NTT DoCoMo (a Japanese corporation) are small digital pictures.
        </p>
        <p>
            It's now possible to have entire conversations, flirt, argue and debate using
            cute little digital icons, but, they're easily misunderstood and misconstrued.
        </p>
        <p>
            Despite this, once the preserve of lovers and best friends, their general use is on the rise.
            For example, Tyler Schnoebelen, an Emojis oracle, discovered that 10 per cent of all tweets now contained an
            Emoji.
        </p>
        <p>
            So, in the following lessons we will talk about emoji etiquette
        </p>
        <img src="../../assets\images/emojis.jpg" alt="A nice picture of emojis" class="picturesLessons">
        <h6>QUESTION</h6>
        <fieldset>
            <legend for="Q1"> Which one of the following is an emoji?</legend>
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
    </div>
    <!-- Just for demo -->
    <script>
        function myFunction(validUser) {
            if (validUser != 1) {
                if (document.getElementById("emoji").checked) {
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