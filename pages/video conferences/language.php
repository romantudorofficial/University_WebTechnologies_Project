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
        <li> <a href="../emoji/introduction.php">Emoji</a> </li>
        <li> <a href="../video conferences/introduction.php" class="active">Video Conferences</a> </li>
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
        <li class="titleLesson">Behaviour during Video Conferences</li>
        <li><a href="introduction.php">Introduction</a></li>
        <li><a href="test_tech.php">Prepare and Test Your Technology</a></li>
        <li><a href="dress_n_backgr.php">Dress Professionally and Consider Your Background</a></li>
        <li><a href="environment.php">Find a Suitable Environment</a></li>
        <li><a href="eye_contact.php">Establish and Maintain Eye Contact</a></li>
        <li><a href="listening.php">Use Active Listening Skills</a></li>
        <li><a href="interruptions.php">Respect Speaking Turns and Avoid Interruptions</a></li>
        <li><a href="engaging.php">Engage and Participate Actively</a></li>
        <li><a href="language.php" class="active">Use Clear and Concise Language<span class="medium"> 🟡 </span></a></li>
        <li><a href="end_meeting.php">Wrap Up the Meeting Appropriately</a></li>
    </ul>
    <!-- The content of this page -->
    <div class="pageContent">
        <h1> Use Clear and Concise Language </h1> <br>
        <h2 id="finished">
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    sendUsingAjax(-1);
                });
            </script>
        </h2>
        <p>In a video conference, effective communication relies on using clear and concise language. Express 
            your thoughts and ideas in a manner that is easy for others to understand. Avoid using excessive 
            jargon, acronyms, or technical terms that may confuse participants who are not familiar with the 
            terminology.</p> <br>
        <p>Be mindful of the pace of your speech and articulate your words clearly. Take pauses when necessary 
            to allow others to process the information or ask for clarification if something is not clear. By 
            using clear and concise language, you ensure that your message is effectively conveyed to all 
            participants.</p> <br>
        <h6>QUESTION</h6>
        <fieldset>
            <legend for="Q9"> Why is it important to use professional language and tone during video conferences?</legend>
            <div>
                <input type="radio" id="A" name="option" value="right" checked>
                <label for="emoji">To maintain a respectful and productive atmosphere</label>
            </div>
            <div>
                <input type="radio" id="B" name="option" value="wrong" checked>
                <label for="emoticon">To use jargon and informal expressions</label>
            </div>
            <div>
                <input type="radio" id="C" name="option" value="wrong" checked>
                <label for="emoticon">To disregard the need for clear communication</label>
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