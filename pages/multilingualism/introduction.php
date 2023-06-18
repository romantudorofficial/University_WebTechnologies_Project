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
        <li><a href="introduction.php" class="active">The Power of Multilingualism in Online Communities<span class="easy"> 🟢 </span></a></li>
        <li><a href="diversity.php">Respecting Language Diversity</a></li>
        <li><a href="translation.php">Effective Translation and Interpretation</a></li>
        <li><a href="inclusive.php">Language Selection and Inclusive Communication</a></li>
        <li><a href="learning.php">Language Exchange and Learning Opportunities</a></li>
        <li><a href="understanding.php">Cultural Understanding through Language</a></li>
        <li><a href="empathy.php">Empathy and Patience in Multilingual Communication</a></li>

    </ul>
    <!-- The content of this page -->
    <div class="pageContent">
        <h1> The Power of Multilingualism in Online Communities </h1> <br>
        <h2 id="finished">
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    sendUsingAjax(-1);
                });
            </script>
        </h2>
        <p>Multilingualism is a valuable asset in online communities, enabling effective communication and fostering inclusivity. 
            Having members who speak different languages expands the reach and impact of the community, allowing for a diverse range 
            of perspectives and experiences. Multilingual individuals can bridge language barriers, facilitate understanding, and 
            encourage collaboration among community members. Embracing and celebrating multilingualism enriches the online community, 
            creating a global platform for exchange and learning.</p> <br>
            <img src="https://i0.wp.com/epthinktank.eu/wp-content/uploads/2019/09/eprs-briefing-642207-multilingualism-language-eu-final.jpg?fit=1000%2C693&ssl=1" alt="Picture!"
            class="picturesLessons">
        <h6>QUESTION</h6>
        <fieldset>
            <legend for="Q1"> Why is multilingualism valuable in online communities?</legend>
            <div>
                <input type="radio" id="A" name="option" value="wrong" checked>
                <label for="emoji">To create language barriers and exclude certain individuals</label>
            </div>
            <div>
                <input type="radio" id="B" name="option" value="right" checked>
                <label for="emoticon">To expand the reach and impact of the community, fostering inclusivity and collaboration</label>
            </div>
            <div>
                <input type="radio" id="C" name="option" value="wrong" checked>
                <label for="emoticon">To limit perspectives and experiences within the community</label>
            </div>
            <button type="button" onclick="sendUsingAjax(0)">Check Answer</button>
            <div id="answer"></div>
        </fieldset>
        <button class="completeLesson" onclick="checkAnswer(answeredCorrectly)">Complete Lesson</button>
    </div>
    <script type="text/javascript">
        function myFunction(validUser) {
            if (validUser != 1) {
                if (document.getElementById("B").checked) {
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