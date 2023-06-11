<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title> Virtual communities Tutorial </title>
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
        <li> <a href="../virtual community/introduction.php" class="active">Virtual Community</a> </li>
        <li> <a href="../emoji/introduction.php">Emoji</a> </li>
        <li> <a href="../video conferences/introduction.php">Video Conferences</a> </li>
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
        <li class="titleLesson">Norms in virtual communities</li>
        <li><a href="introduction.php">Introduction</a></li>
        <li><a href="respectful_comm.php" class="active">Respectful Communication<span class="easy"> 🟢 </span></a></li>
        <li><a href="active_listening.php">Active Listening</a></li>
        <li><a href="privacy.php">Privacy and Consent</a></li>
        <li><a href="diversity.php">Diversity and Inclusion</a></li>
        <li><a href="conflicts.php">Conflict Resolution</a></li>
        <li><a href="plagiarism.php">Crediting and Plagiarism</a></li>
        <li><a href="sharing_content.php">Etiquette in Sharing Content</a></li>
        <li><a href="mods.php">Engaging with Moderators</a></li>
        <li><a href="good_com_member.php">Being a Good Community Member</a></li>
    </ul>
    <!-- The content of this page -->
    <div class="pageContent">
        <h1> Respectful Communication </h1> <br>
        <p>Respectful communication forms the cornerstone of virtual communities. When interacting with others, it's 
            essential to be mindful of your language, tone, and overall approach. Since online communication lacks 
            non-verbal cues like facial expressions and body language, it's important to pay extra attention to how
             you express yourself to avoid misunderstandings and unintended offense. </p> <br>
        <p>In virtual communities, everyone has the right to express their opinions and engage in discussions. However, 
            it is vital to do so in a respectful manner, even when disagreeing with others. Avoid resorting to offensive
             or derogatory language, personal attacks, or disrespectful behavior. Instead, focus on the ideas being discussed 
             and engage in constructive dialogue.</p> <br>
        <p>Actively listening to others is a key aspect of respectful communication in virtual communities. When someone is 
            speaking or expressing their thoughts, give them your full attention. Avoid interrupting or dismissing their viewpoints. 
            Instead, show genuine interest by asking clarifying questions or seeking further understanding. This demonstrates respect 
            for their perspectives and promotes a healthy exchange of ideas.</p> <br>
        <p>Remember that virtual communities consist of individuals from diverse backgrounds, cultures, and experiences.
             Embrace this diversity and practice empathy when communicating. Put yourself in others' shoes, try to understand
              their viewpoints, and be open to learning from different perspectives. By engaging in respectful communication,
               you contribute to a positive and inclusive community atmosphere.</p> <br>
        <h6>QUESTION</h6>
        <fieldset>
            <legend for="Q2"> What is the importance of respectful communication in virtual communities?</legend>
            <div>
                <input type="radio" id="A" name="option" value="wrong" checked>
                <label for="emoji">To have fun</label>
            </div>
            <div>
                <input type="radio" id="B" name="option" value="wrong" checked>
                <label for="emoticon">To showcase one's intelligence</label>
            </div>
            <div>
                <input type="radio" id="C" name="option" value="right" checked>
                <label for="emoticon">To foster understanding and prevent misunderstandings</label>
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