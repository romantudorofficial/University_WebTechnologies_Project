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
        <li> <a href="../messages/introduction.php" class="active">Messages</a> </li>
        <li> <a href="../virtual community/introduction.php">Virtual Community</a> </li>
        <li> <a href="../emoji/introduction.php">Emoji</a> </li>
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
        <li class="titleLesson">How to write messages</li>
        <li><a href="introduction.php">Introduction</a></li>
        <li><a href="first_time.php" class="active">How to text someone for the first time professionally<span
                    class="easy"> 🟢 </span></a></li>
        <li><a href="long_reply.php">When is it acceptable to take your sweet time to reply?</a></li>
        <li><a href="group_text.php">Group text message etiquette</a></li>
        <li><a href="FAQ.php">Frequently asked texting do’s and don’ts questions (FAQ)</a></li>
        <li><a href="rules.php">Texting etiquette: The 10 do’s and don’ts</a></li>
        <li><a href="abbreviation.php">Why abbreviate?</a></li>
    </ul>
    <!-- The content of this page -->
    <div class="pageContent">
        <h1> How to text someone for the first time professionally </h1>
        <h2 id="finished">
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    sendUsingAjax(-1);
                });
            </script>
        </h2>
        <p>
            Consider the tools you’re using to send text messages before you actually text someone for the first time
            professionally.
        </p>
        <p>
            Are you using your personal phone for work? Are you just sending a personal 1-on-1 text message to your
            boss, a manager, or another employee?
        </p>
        <p>
            Your personal phone number and iPhone or Android device are fine for this kind of texting. You’ll just want
            to be mindful of the professional texting rules and etiquette I’ve listed below.
        </p>
        <p>
            But are you a manager or someone at a business trying to mass text employees? Or maybe you’re an employee or
            staff member texting for sales or customer service?
        </p>
        <p>
            This kind of professional text messaging requires a business text messaging service, like MessageDesk. Group
            texts won’t work.
        </p>
        <p>
            Business text messaging services come with advanced software and professional texting features. These
            texting platforms help you text at scale and manage tricky things like privacy, opt-in lists, TCPA
            compliance, and more.
        </p>
        <img src="https://broadview.sacredsf.org/wp-content/uploads/2020/12/emailingetiquette.png"
            class="picturesLessons">
        <h6>QUESTION</h6>
        <fieldset>
            <legend for="Q1"> Why would you use a business text messaging service?</legend>
            <div>
                <input type="radio" id="A" name="option" value="option" checked>
                <label for="option">because I want this</label>
            </div>
            <div>
                <input type="radio" id="B" name="option" value="option" checked>
                <label for="option">for messaging someone</label>
            </div>
            <div>
                <input type="radio" id="C" name="option" value="option" checked>
                <label for="option">for a professional text message</label>
            </div>
            <button type="button" onclick="sendUsingAjax(0)">Check Answer</button>
            <div id="answer"></div>
        </fieldset>
        <button class="completeLesson" onclick="checkAnswer(answeredCorrectly)">Complete Lesson</button>
    </div>
    <script>
        function myFunction(validUser) {
            if (validUser != 1) {
                if (document.getElementById("C").checked) {
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
    </div>
</body>

</html>