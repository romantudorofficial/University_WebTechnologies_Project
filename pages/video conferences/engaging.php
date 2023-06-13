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
        <li><a href="engaging.php" class="active">Engage and Participate Actively<span class="medium"> 🟡 </span></a></li>
        <li><a href="language.php">Use Clear and Concise Language</a></li>
        <li><a href="end_meeting.php">Wrap Up the Meeting Appropriately</a></li>
    </ul>
    <!-- The content of this page -->
    <div class="pageContent">
        <h1> Engage and Participate Actively </h1> <br>
        <h2 id="finished">
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    sendUsingAjax(-1);
                });
            </script>
        </h2>
        <p>Active engagement and participation are key to a successful video conference. Contribute to the discussion
             by sharing your insights, asking relevant questions, and providing valuable input. Show enthusiasm and 
             interest in the topic being discussed. Your active participation not only adds value to the conversation
              but also encourages others to engage more actively.</p> <br>
        <p>If you are attending a larger video conference with numerous participants, you may need to use non-verbal 
            cues, such as raising your hand or using the chat function, to indicate your desire to speak. Be respectful 
            of the facilitator or moderator's guidance regarding the participation process. By actively engaging, you 
            contribute to a dynamic and productive video conference environment.</p> <br>
        <h6>QUESTION</h6>
        <fieldset>
            <legend for="Q8"> Why is it important to pay attention and stay engaged during a video conference?</legend>
            <div>
                <input type="radio" id="A" name="option" value="right" checked>
                <label for="emoji">To demonstrate active listening and effective communication</label>
            </div>
            <div>
                <input type="radio" id="B" name="option" value="wrong" checked>
                <label for="emoticon">To multitask and engage in unrelated activities</label>
            </div>
            <div>
                <input type="radio" id="C" name="option" value="wrong" checked>
                <label for="emoticon">To ignore the meeting and remain passive</label>
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