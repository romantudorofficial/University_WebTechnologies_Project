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
        <li><a href="active_listening.php">Active Listening</a></li>
        <li><a href="privacy.php" class="active">Privacy and Consent<span class="medium"> 🟡 </span></a></li>
        <li><a href="diversity.php">Diversity and Inclusion</a></li>
        <li><a href="conflicts.php">Conflict Resolution</a></li>
        <li><a href="plagiarism.php">Crediting and Plagiarism</a></li>
        <li><a href="sharing_content.php">Etiquette in Sharing Content</a></li>
        <li><a href="mods.php">Engaging with Moderators</a></li>
        <li><a href="good_com_member.php">Being a Good Community Member</a></li>
    </ul>
    <!-- The content of this page -->
    <div class="pageContent">
        <h1> Privacy and Consent </h1> <br>
        <h2 id="finished">
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    sendUsingAjax(-1);
                });
            </script>
        </h2>
        <p>Respecting privacy and obtaining consent are fundamental principles in virtual communities. As online 
            spaces where personal information can be easily shared and accessed, it's crucial to be mindful of others' 
            privacy and to seek explicit permission when sharing information or content.</p><br>
        <p>When interacting in virtual communities, always consider the privacy implications of your actions. Refrain 
            from sharing personal information about others without their consent. Recognize that individuals have different 
            comfort levels when it comes to privacy, and it's essential to respect their boundaries.</p><br>
        <p>Before sharing personal information or content belonging to someone else, seek explicit permission. This 
            applies to sharing photographs, videos, personal stories, or any other form of content that is not your own. 
            Be respectful and considerate, ensuring that you have received consent from the appropriate individuals.</p><br>
        <p>It's also essential to be mindful of the privacy settings and guidelines of the virtual community platform you are 
            using. Familiarize yourself with the platform's policies regarding privacy and adhere to them. These policies are 
            in place to protect users' personal information and maintain a safe environment for everyone.</p><br>
        <p>By practicing respect for privacy and consent, you contribute to the creation of a virtual community where individuals 
            feel safe, secure, and respected.</p><br>
        <h6>QUESTION</h6>
        <fieldset>
            <legend for="Q4"> What should you do before sharing personal information about someone in a virtual community?</legend>
            <div>
                <input type="radio" id="A" name="option" value="right" checked>
                <label for="emoji">Seek explicit permission</label>
            </div>
            <div>
                <input type="radio" id="B" name="option" value="wrong" checked>
                <label for="emoticon">Share it freely</label>
            </div>
            <div>
                <input type="radio" id="C" name="option" value="wrong" checked>
                <label for="emoticon">Assume it's already public</label>
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