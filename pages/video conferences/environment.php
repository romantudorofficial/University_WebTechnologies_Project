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
        <li><a href="environment.php" class="active">Find a Suitable Environment<span class="easy"> 🟢 </span></a></li>
        <li><a href="eye_contact.php">Establish and Maintain Eye Contact</a></li>
        <li><a href="listening.php">Use Active Listening Skills</a></li>
        <li><a href="interruptions.php">Respect Speaking Turns and Avoid Interruptions</a></li>
        <li><a href="engaging.php">Engage and Participate Actively</a></li>
        <li><a href="language.php">Use Clear and Concise Language</a></li>
        <li><a href="end_meeting.php">Wrap Up the Meeting Appropriately</a></li>
    </ul>
    <!-- The content of this page -->
    <div class="pageContent">
        <h1> Find a Suitable Environment </h1> <br>
        <p>Selecting a suitable environment for your video conference is crucial for maintaining focus and 
            minimizing distractions. Find a quiet and well-lit space where you can engage in the conversation 
            without interruptions. Inform those around you about the importance of minimizing noise during the 
            conference. If possible, use headphones or a headset with a built-in microphone to enhance audio 
            clarity.</p> <br>
        <p>In addition to sound, lighting plays a significant role in video conferences. Position yourself in a 
            well-lit area, preferably facing a natural light source, such as a window. Adequate lighting allows 
            other participants to see you clearly and facilitates non-verbal communication. Be mindful of strong 
            backlighting, which can create a silhouette effect, making it difficult for others to see your facial 
            expressions.</p> <br>
        <p>By finding a suitable environment, you create an atmosphere that fosters focused discussions and effective communication.</p> <br>
        <h6>QUESTION</h6>
        <fieldset>
            <legend for="Q4"> Why is it important to find a suitable environment for a video conference?</legend>
            <div>
                <input type="radio" id="A" name="option" value="wrong" checked>
                <label for="emoji">To create background noise and distractions</label>
            </div>
            <div>
                <input type="radio" id="B" name="option" value="right" checked>
                <label for="emoticon">To minimize distractions and focus on the conversation</label>
            </div>
            <div>
                <input type="radio" id="C" name="option" value="wrong" checked>
                <label for="emoticon">To ignore the need for a well-lit space</label>
            </div>
            <button type="submit" onclick="myFunction()">Check Answer</button>
            <div id="answer"></div>
        </fieldset>
        <button class="completeLesson">Complete Lesson</button>
    </div>
    <script>
        function myFunction() {
            if (document.getElementById("B").checked) {
                document.getElementById("answer").innerHTML = "Your answer is correct";
            }
            else {
                document.getElementById("answer").innerHTML = "Your answer is wrong";
            }
        }
    </script>
</body>

</html>