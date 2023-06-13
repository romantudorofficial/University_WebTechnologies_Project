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
        <li><a href="privacy.php">Privacy and Consent</a></li>
        <li><a href="diversity.php">Diversity and Inclusion</a></li>
        <li><a href="conflicts.php" class="active">Conflict Resolution<span class="medium"> 🟡 </span></a></li>
        <li><a href="plagiarism.php">Crediting and Plagiarism</a></li>
        <li><a href="sharing_content.php">Etiquette in Sharing Content</a></li>
        <li><a href="mods.php">Engaging with Moderators</a></li>
        <li><a href="good_com_member.php">Being a Good Community Member</a></li>
    </ul>
    <!-- The content of this page -->
    <div class="pageContent">
        <h1> Conflict Resolution </h1> <br>
        <h2 id="finished">
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    sendUsingAjax(-1);
                });
            </script>
        </h2>
        <p>Conflict is inevitable in any community, including virtual ones. Disagreements and differences of 
            opinion can arise, and it is essential to address them in a respectful and constructive manner. 
            Conflict resolution skills play a crucial role in maintaining harmony and a positive atmosphere 
            within virtual communities.</p><br>
        <p>When conflicts arise, it is important to engage in calm and respectful discussions. Avoid resorting 
            to personal attacks, insults, or inflammatory language. Instead, focus on the issues being discussed 
            and present your viewpoints in a clear and logical manner.</p><br>
        <p>Listen actively to the perspectives of others involved in the conflict. Seek to understand their viewpoints 
            and the underlying reasons for their positions. By demonstrating empathy and respect, you can create an 
            environment that encourages open dialogue and collaboration.</p><br>
        <p>Look for common ground and areas of agreement. Find ways to work towards a mutually beneficial solution or 
            compromise. It may be helpful to identify shared goals or values that can be the basis for finding 
            common understanding.</p><br>
        <p>In situations where conflicts escalate or become unmanageable, it is advisable to seek the assistance of 
            community moderators or administrators. They can provide guidance and facilitate the resolution process. 
            It is important to follow the guidelines and procedures established by the community to address conflicts 
            effectively.</p><br>
        <p>By actively participating in conflict resolution with a respectful and constructive mindset, you contribute 
            to a healthier and more positive virtual community environment.</p><br>
        <h6>QUESTION</h6>
        <fieldset>
            <legend for="Q6"> What is an important aspect of conflict resolution in virtual communities?</legend>
            <div>
                <input type="radio" id="A" name="option" value="wrong" checked>
                <label for="emoji">Personal attacks and insults</label>
            </div>
            <div>
                <input type="radio" id="B" name="option" value="right" checked>
                <label for="emoticon">Calm and constructive discussions</label>
            </div>
            <div>
                <input type="radio" id="C" name="option" value="wrong" checked>
                <label for="emoticon">Ignoring conflicts and avoiding them</label>
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