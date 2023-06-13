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
        <li><a href="brief_history.php">Brief history</a></li>
        <li><a href="emoji_emoticon.php" class="active">Emoji vs Emoticon<span class="easy"> 🟢 </span></a></li>
        <li><a href="the_use_of_emojis.php">When (not) to use emojis</a></li>
        <li><a href="different_generations.php">Their meaning to different generations</a></li>
        <li><a href="rise_of_emoji.php">The new era of emojis</a></li>
        <li><a href="advice.php">Rules</a></li>
    </ul>
    <!-- The content of this page -->
    <div class="pageContent">
        <h1> Emoji vs Emoticon </h1>
        <h2 id="finished">
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    sendUsingAjax(-1);
                });
            </script>
        </h2>
        <p>
            This comes as no surprise since texting is a short form of communication, so it makes sense that people want
            to make their communication brief and simple. After all, people have used symbols to communicate for
            hundreds of years.
        </p>
        <p>
            Emoticons are the digital predecessors of emoji, starting out as smiley faces using punctuation marks. Some
            of the most well-known early emoticons, popularised in the 80s, include the ASCII smiley face emoticon:
            :-&rpar;.
        </p>
        <p>
            An emoticon is a sequence of keyboard characters used to illustrate a facial expression (or to render some
            kind of picture or symbol), such as : &rpar; for a smile, : &lpar; for a frown, XD for a laughing face, or
            O_O for
            surprise. An emoji is a small image used alongside or in place of text. Many depict facial expressions (such
            as 🙂 and 🙁), but there are many, many other kinds (such as 👍, 💙, and 🐈). Despite their similarity in
            form and meaning, the words are not etymologically related: emoticon comes from a combination of the words
            emotion and icon, while emoji comes from a Japanese term meaning “pictograph,” from e, “picture, drawing,”
            and moji, “(written) character, letter.”
        </p>
        <img src="https://www.callcentrehelper.com/images/stories/2016/07/emoji-emoticon-300x164.jpg"
            alt="A nice picture of emojis" class="picturesLessons">
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