<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title> Emoji Tutorial </title>
    <link rel="stylesheet" href="../../styles/main_style.css" />
    <link rel="stylesheet" href="../../styles/lessons_style.css" />
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
        <li><a href="eye_contact.php" class="active">Establish and Maintain Eye Contact<span class="easy"> 🟢 </span></a></li>
        <li><a href="listening.php">Use Active Listening Skills</a></li>
        <li><a href="interruptions.php">Respect Speaking Turns and Avoid Interruptions</a></li>
        <li><a href="engaging.php">Engage and Participate Actively</a></li>
        <li><a href="language.php">Use Clear and Concise Language</a></li>
        <li><a href="end_meeting.php">Wrap Up the Meeting Appropriately</a></li>
    </ul>
    <!-- The content of this page -->
    <div class="pageContent">
        <h1> Establish and Maintain Eye Contact </h1> <br>
        <p>Establishing and maintaining eye contact is essential during video conferences, as it conveys 
            attentiveness and engagement. Although it may feel unnatural, try to look directly into the camera 
            lens when speaking or listening. This creates the illusion of eye contact for other participants, 
            simulating a face-to-face interaction.</p> <br>
        <p>Remember that it is common to glance at the participants on the screen while listening or speaking. 
            However, whenever possible, direct your attention towards the camera to maintain a sense of connection. 
            By doing so, you convey active participation and establish a stronger rapport with other participants.</p> <br>
        <h6>QUESTION</h6>
        <fieldset>
            <legend for="Q5"> Why is maintaining eye contact and positive body language important during video conferences?</legend>
            <div>
                <input type="radio" id="A" name="option" value="wrong" checked>
                <label for="emoji">To show disinterest and distraction</label>
            </div>
            <div>
                <input type="radio" id="B" name="option" value="wrong" checked>
                <label for="emoticon">To focus on your own image on the screen</label>
            </div>
            <div>
                <input type="radio" id="C" name="option" value="right" checked>
                <label for="emoticon">To create a connection and show attentiveness</label>
            </div>
            <button type="submit" onclick="myFunction()">Check Answer</button>
            <div id="answer"></div>
        </fieldset>
        <button class="completeLesson">Complete Lesson</button>
    </div>
    <script>
        function myFunction() {
            if (document.getElementById("C").checked) {
                document.getElementById("answer").innerHTML = "Your answer is correct";
            }
            else {
                document.getElementById("answer").innerHTML = "Your answer is wrong";
            }
        }
    </script>
</body>

</html>