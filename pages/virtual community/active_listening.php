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
        <li><a href="respectful_comm.php">Respectful Communication</a></li>
        <li><a href="active_listening.php" class="active">Active Listening<span class="easy"> 🟢 </span></a></li>
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
        <h1> Active Listening </h1> <br>
        <p>Active listening is a crucial skill in virtual communities. It goes beyond simply hearing what someone is 
            saying or reading their messages. Active listening involves giving your full attention to the speaker or writer, 
            understanding their perspective, and responding in a thoughtful manner.</p> <br>
        <p>In virtual communities, active listening plays a significant role in fostering understanding and constructive dialogue. 
            It helps prevent misunderstandings and allows community members to engage in meaningful conversations. When actively 
            listening, you show respect for others' opinions, demonstrate empathy, and create an environment where everyone's voice 
            is heard.</p> <br>
        <p>To practice active listening, start by focusing on the speaker or writer's message without distractions. Give them 
            your undivided attention and refrain from interrupting or interjecting prematurely. Avoid making assumptions or jumping 
            to conclusions. Instead, seek clarification by asking questions to ensure that you understand their viewpoints accurately.</p> <br>
        <p>It's important to remember that virtual communication lacks non-verbal cues, such as facial expressions or body language. 
            To compensate for this, pay close attention to the tone and context of the message. If something seems unclear or ambiguous, 
            ask for clarification politely. By actively listening and seeking to understand, you contribute to a more inclusive and 
            respectful virtual community.</p> <br>
        <h6>QUESTION</h6>
        <fieldset>
            <legend for="Q3"> Why is active listening important in virtual communities?</legend>
            <div>
                <input type="radio" id="A" name="option" value="wrong" checked>
                <label for="emoji">To dominate conversations</label>
            </div>
            <div>
                <input type="radio" id="B" name="option" value="right" checked>
                <label for="emoticon">To encourage constructive dialogue and understanding</label>
            </div>
            <div>
                <input type="radio" id="C" name="option" value="wrong" checked>
                <label for="emoticon">To win arguments</label>
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