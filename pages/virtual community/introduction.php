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
        <li><a href="introduction.php" class="active">Introduction<span class="easy"> 🟢 </span></a></li>
        <li><a href="respectful_comm.php">Respectful Communication</a></li>
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
        <h1> Introduction </h1> <br>
        <h2 id="finished">
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    sendUsingAjax(-1);
                });
            </script>
        </h2>
        <p>Welcome to the world of virtual communities! In these online spaces, individuals from diverse 
            backgrounds come together to share ideas, collaborate, and connect. However, to ensure a positive 
            and respectful environment for everyone involved, it is crucial to understand and abide by certain norms. 
            Let's explore some key aspects of virtual community norms. </p> <br>
        <p>Virtual communities are vibrant ecosystems where people interact, share information, and build 
            relationships through online platforms. These communities can be centered around various topics such 
            as hobbies, professional interests, social causes, or even specific fandoms. They offer a space for 
            individuals to connect with like-minded people, engage in discussions, and contribute their unique perspectives.</p> <br>
        <p>To maintain a healthy and thriving virtual community, it is important to establish and follow certain norms or guidelines. 
            These norms serve as a framework for behavior and interaction within the community, fostering respect, inclusivity, and
             productive engagement.</p> <br>
        <p>One of the fundamental purposes of virtual community norms is to foster a positive and respectful environment. 
            Online platforms often lack the face-to-face interactions that provide context and non-verbal cues, making it 
            crucial to set clear expectations for communication and behavior. These norms help create a sense of safety and 
            trust among community members, enabling constructive dialogue and discouraging toxic or harmful behavior.</p> <br>
        <p> Virtual community norms are not meant to stifle freedom of expression but rather to strike a balance between
             freedom and responsibility. They encourage individuals to express their opinions, ideas, and creativity while
              respecting the rights and boundaries of others. By adhering to these norms, members can build a community that
               values diversity, encourages collaboration, and promotes personal growth.</p> <br>
        <h6>QUESTION</h6>
        <fieldset>
            <legend for="Q1"> What is the purpose of virtual community norms?</legend>
            <div>
                <input type="radio" id="A" name="option" value="wrong" checked>
                <label for="emoji">To restrict freedom of expression</label>
            </div>
            <div>
                <input type="radio" id="B" name="option" value="right" checked>
                <label for="emoticon">To foster a positive and respectful environment</label>
            </div>
            <div>
                <input type="radio" id="C" name="option" value="wrong" checked>
                <label for="emoticon">To promote anonymity</label>
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