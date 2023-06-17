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
        <li class="titleLesson">Cultural Differences</li>
        <li><a href="introduction.php">Cultural Sensitivity in Online Communication</a></li>
        <li><a href="respect.php">Respect for Cultural Differences</a></li>
        <li><a href="stereotypes.php">Avoid Stereotyping and Generalizations</a></li>
        <li><a href="humour.php">Mindful Use of Humor and Sarcasm</a></li>
        <li><a href="communication.php">Adapting Communication Styles</a></li>
        <li><a href="time.php" class="active">Time Zone Considerations<span class="easy"> 🟢 </span></a></li>
        <li><a href="taboos.php">Awareness of Taboos and Sensitive Topics</a></li>
        <li><a href="patience.php">Patience and Understanding</a></li>
        <li><a href="diversity.php">Embrace Diversity and Learn from Others</a></li>
        <li><a href="collaboration.php">Collaboration and Cultural Exchange</a></li>

    </ul>
    <!-- The content of this page -->
    <div class="pageContent">
        <h1>Time Zone Considerations</h1> <br>
        <h2 id="finished">
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    sendUsingAjax(-1);
                });
            </script>
        </h2>
        <p>In online communities with members from different parts of the world, time zone differences can significantly 
            impact communication. Be mindful of time zone variations when scheduling meetings, sharing deadlines, or 
            expecting prompt responses. Use tools such as world clocks or time zone converters to accurately determine 
            suitable timings for all participants. By considering time zone differences, you demonstrate respect for 
            everyone's availability and enhance effective communication within the online community.</p> <br>
            <img src="https://c.tadst.com/gfx/1200x630/tz-map-1518922800.png?1" alt="Picture!"
            class="picturesLessons">
        <h6>QUESTION</h6>
        <fieldset>
            <legend for="Q6">Why is it important to consider time zone differences in online communication?</legend>
            <div>
                <input type="radio" id="A" name="option" value="wrong" checked>
                <label for="emoji">To impose your own preferred timing onto others</label>
            </div>
            <div>
                <input type="radio" id="B" name="option" value="wrong" checked>
                <label for="emoticon">To disregard everyone's availability and convenience</label>
            </div>
            <div>
                <input type="radio" id="C" name="option" value="right" checked>
                <label for="emoticon">To enhance effective communication within the online community</label>
            </div>
            <button type="button" onclick="sendUsingAjax(0)">Check Answer</button>
            <div id="answer"></div>
        </fieldset>
        <button class="completeLesson" onclick="checkAnswer(answeredCorrectly)">Complete Lesson</button>
    </div>
    <script type="text/javascript">
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
</body>

</html>