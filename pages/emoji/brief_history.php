<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
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
        <li><a href="introduction.php">Introduction</a></li>
        <li><a href="brief_history.php" class="active">Brief history<span class="easy"> 🟢 </span></a></li>
        <li><a href="emoji_emoticon.php">Emoji vs Emoticon</a></li>
        <li><a href="the_use_of_emojis.php">When (not) to use emojis</a></li>
        <li><a href="different_generations.php">Their meaning to different generations</a></li>
        <li><a href="rise_of_emoji.php">The new era of emojis</a></li>
        <li><a href="advice.php">Rules</a></li>
    </ul>
    <!-- The content of this page -->
    <div class="pageContent">
        <h1> Brief history </h1>
        <h2 id="finished">
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    sendUsingAjax(-1);
                });
            </script>
        </h2>
        <p>
            Emojis originated with emoticons. If you can recall being online back in the day, you might remember
            characters like :&par; and &lt;3. Since modern emoji icons didn't exist yet, people had to get creative with
            letters, numbers, and punctuation marks to convey feelings in text. The emojis we know today rose to
            prominence in Japan in the late 90s and early 2000s. The word "emoji" comes from the combination of the
            Japanese words for "picture" (e) and "character" (moji). Its similarity to the word "emoticon" wasn't
            intentional, but simply a coincidence. Emojis act as a pictographic form of communication, ultimately
            simplifying our mode of relaying information.
        </p>
        <img src="https://static1.makeuseofimages.com/wordpress/wp-content/uploads/2021/06/emojis-and-emoticons.jpg"
            class="picturesLessons">
        <p>
            Emojis slowly spread from Japan to the rest of the world, and eventually, Google had them recognized by the
            Unicode Consortium to ensure their universal inclusion in all digital devices.
            <br>

            The use of emoticons isn't entirely outdated, but today, the majority of people prefer using emoji icons
            since there are now over 3,000 to choose from. They include avatars with different genders and skin tones,
            symbols, locations, random miscellaneous objects, and the classic face emojis with human expressions.
        </p>
        <h6>QUESTION</h6>
        <fieldset>
            <legend for="Q1"> Where did emojis appear for the first time?</legend>
            <div>
                <input type="radio" id="A" name="option" value="option" checked>
                <label for="option">Japan</label>
            </div>
            <div>
                <input type="radio" id="B" name="option" value="option" checked>
                <label for="option">The US</label>
            </div>
            <div>
                <input type="radio" id="C" name="option" value="option" checked>
                <label for="option">Romania</label>
            </div>
            <button type="button" onclick="sendUsingAjax(0)">Check Answer</button>
            <div id="answer"></div>
        </fieldset>
        <button class="completeLesson" onclick="checkAnswer(answeredCorrectly)">Complete Lesson</button>
    </div>
    <script>
        function myFunction(validUser) {
            if (validUser != 1) {
                if (document.getElementById("A").checked) {
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