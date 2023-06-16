<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title> Virtual communities Tutorial </title>
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
        <li> <a href="../emoji/introduction.php">Emoji</a> </li>
        <li> <a href="../video conferences/introduction.php">Video Conferences</a> </li>
        <li> <a href="../culture/introduction.php">Culture</a> </li>
        <li> <a href="../multilingualism/introduction.php" class="active">Multilingualism</a> </li>
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
        <li class="titleLesson">Multilingualism</li>
        <li><a href="introduction.php">The Power of Multilingualism in Online Communities</a></li>
        <li><a href="diversity.php">Respecting Language Diversity</a></li>
        <li><a href="translation.php" class="active">Effective Translation and Interpretation<span class="easy"> 🟢 </span></a></li>
        <li><a href="inclusive.php">Language Selection and Inclusive Communication</a></li>
        <li><a href="learning.php">Language Exchange and Learning Opportunities</a></li>
        <li><a href="understanding.php">Cultural Understanding through Language</a></li>
        <li><a href="empathy.php">Empathy and Patience in Multilingual Communication</a></li>

    </ul>
    <!-- The content of this page -->
    <div class="pageContent">
        <h1> Effective Translation and Interpretation </h1> <br>
        <h2 id="finished">
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    sendUsingAjax(-1);
                });
            </script>
        </h2>
        <p>Translation and interpretation play crucial roles in facilitating multilingual communication within online 
            communities. When sharing important information or engaging in discussions, ensure that accurate translations 
            are provided to allow everyone to fully participate. Rely on professional translators or translation tools to 
            maintain the integrity and clarity of the content. Respect the work of translators and interpreters, as they 
            enable seamless communication among members. By ensuring effective translation and interpretation, you enhance 
            understanding and promote inclusivity within the community.</p> <br>
            <img src="https://www.ccjk.com/wp-content/uploads/2021/05/Difference-between-Translator-and-Interpreter.png" alt="Picture!"
            class="picturesLessons">
        <h6>QUESTION</h6>
        <fieldset>
            <legend for="Q3"> Why is effective translation and interpretation important in online communities?</legend>
            <div>
                <input type="radio" id="A" name="option" value="right" checked>
                <label for="emoji">To enhance understanding and promote inclusivity within the community</label>
            </div>
            <div>
                <input type="radio" id="B" name="option" value="wrong" checked>
                <label for="emoticon">To exclude non-English speakers from participating</label>
            </div>
            <div>
                <input type="radio" id="C" name="option" value="wrong" checked>
                <label for="emoticon">To rely solely on machine translations for accuracy</label>
            </div>
            <button type="button" onclick="sendUsingAjax(0)">Check Answer</button>
            <div id="answer"></div>
        </fieldset>
        <button class="completeLesson" onclick="checkAnswer(answeredCorrectly)">Complete Lesson</button>
    </div>
    <script type="text/javascript">
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