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
        <li><a href="taboos.php" class="active">Awareness of Taboos and Sensitive Topics<span class="easy"> 🟢 </span></a></li>
        <li><a href="patience.php">Patience and Understanding</a></li>
        <li><a href="diversity.php">Embrace Diversity and Learn from Others</a></li>
        <li><a href="collaboration.php">Collaboration and Cultural Exchange</a></li>

    </ul>
    <!-- The content of this page -->
    <div class="pageContent">
        <h1>Awareness of Taboos and Sensitive Topics</h1> <br>
        <h2 id="finished">
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    sendUsingAjax(-1);
                });
            </script>
        </h2>
        <p>Cultural taboos and sensitive topics vary across different cultures. Be aware of potential subjects that may be 
            considered inappropriate or offensive in certain cultural contexts. Avoid discussing controversial or sensitive 
            issues unless they are directly relevant to the online community's purpose. Show respect for diverse beliefs and 
            customs by refraining from engaging in discussions that may lead to misunderstandings or conflicts. By being aware 
            of taboos and sensitive topics, you contribute to a harmonious and inclusive online environment.</p> <br>
            <img src="https://www.newsanyway.com/wp-content/uploads/2020/04/Canva-Forbidden-or-Taboo-Concept.jpg" alt="Picture!"
            class="picturesLessons">
        <h6>QUESTION</h6>
        <fieldset>
            <legend for="Q7">Why is it important to be aware of cultural taboos and sensitive topics in online communication?</legend>
            <div>
                <input type="radio" id="A" name="option" value="wrong" checked>
                <label for="emoji">To engage in controversial discussions that may lead to conflicts</label>
            </div>
            <div>
                <input type="radio" id="B" name="option" value="right" checked>
                <label for="emoticon">To contribute to a harmonious and inclusive online environment</label>
            </div>
            <div>
                <input type="radio" id="C" name="option" value="wrong" checked>
                <label for="emoticon">To disregard diverse beliefs and customs</label>
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