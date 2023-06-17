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
        <li><a href="time.php">Time Zone Considerations</a></li>
        <li><a href="taboos.php">Awareness of Taboos and Sensitive Topics</a></li>
        <li><a href="patience.php">Patience and Understanding</a></li>
        <li><a href="diversity.php" class="active">Embrace Diversity and Learn from Others<span class="easy"> 🟢 </span></a></li>
        <li><a href="collaboration.php">Collaboration and Cultural Exchange</a></li>

    </ul>
    <!-- The content of this page -->
    <div class="pageContent">
        <h1>Embrace Diversity and Learn from Others</h1> <br>
        <h2 id="finished">
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    sendUsingAjax(-1);
                });
            </script>
        </h2>
        <p>Cultural diversity in online communities offers an opportunity to learn from one another and broaden your perspectives. 
            Embrace diversity by actively seeking knowledge about different cultures, traditions, and practices. Engage in respectful 
            conversations and ask questions to gain insights from individuals with diverse backgrounds. By embracing diversity and 
            learning from others, you create an enriching and inclusive online environment.</p> <br>
            <img src="https://media.licdn.com/dms/image/C4D12AQEwM7lR8REVjw/article-cover_image-shrink_600_2000/0/1621781451466?e=2147483647&v=beta&t=3_yVBwv_VVlXrvh3wid7-HETjhZjEp2ENto4px56Z-w" alt="Picture!"
            class="picturesLessons">
        <h6>QUESTION</h6>
        <fieldset>
            <legend for="Q9">Why is it important to embrace diversity and learn from others in online communities?</legend>
            <div>
                <input type="radio" id="A" name="option" value="wrong" checked>
                <label for="emoji">To dismiss and ignore individuals with diverse backgrounds</label>
            </div>
            <div>
                <input type="radio" id="B" name="option" value="right" checked>
                <label for="emoticon">To create an enriching and inclusive online environment</label>
            </div>
            <div>
                <input type="radio" id="C" name="option" value="wrong" checked>
                <label for="emoticon">To avoid engaging in respectful conversations</label>
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