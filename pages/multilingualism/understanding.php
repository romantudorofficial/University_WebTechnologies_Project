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
        <li><a href="translation.php">Effective Translation and Interpretation</a></li>
        <li><a href="inclusive.php">Language Selection and Inclusive Communication</a></li>
        <li><a href="learning.php">Language Exchange and Learning Opportunities</a></li>
        <li><a href="understanding.php" class="active">Cultural Understanding through Language<span class="easy"> 🟢 </span></a></li>
        <li><a href="empathy.php">Empathy and Patience in Multilingual Communication</a></li>

    </ul>
    <!-- The content of this page -->
    <div class="pageContent">
        <h1> Cultural Understanding through Language </h1> <br>
        <h2 id="finished">
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    sendUsingAjax(-1);
                });
            </script>
        </h2>
        <p>Language is deeply intertwined with culture, and multilingualism provides a gateway to understanding different cultures 
            within an online community. When engaging with others in their native language, take the opportunity to learn about their 
            cultural customs, traditions, and perspectives. Be respectful and open-minded, recognizing that language reflects unique
             cultural identities. Avoid making assumptions or stereotypes based on language use. By embracing language as a means to 
             cultural understanding, you foster a community that appreciates and celebrates diverse cultures.</p> <br>
            <img src="https://www.northeastohioparent.com/wp-content/uploads/2021/03/iStock-1215705539-copy.jpg" alt="Picture!"
            class="picturesLessons">
        <h6>QUESTION</h6>
        <fieldset>
            <legend for="Q6">Why is language important for cultural understanding in multilingual online communities?</legend>
            <div>
                <input type="radio" id="A" name="option" value="right" checked>
                <label for="emoji">To foster a community that appreciates and celebrates diverse cultures</label>
            </div>
            <div>
                <input type="radio" id="B" name="option" value="wrong" checked>
                <label for="emoticon">To make assumptions and stereotypes based on language use</label>
            </div>
            <div>
                <input type="radio" id="C" name="option" value="wrong" checked>
                <label for="emoticon">To limit interactions to a single language</label>
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