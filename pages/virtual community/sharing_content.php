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
        <li><a href="conflicts.php">Conflict Resolution</a></li>
        <li><a href="plagiarism.php">Crediting and Plagiarism</a></li>
        <li><a href="sharing_content.php" class="active">Etiquette in Sharing Content<span class="hard"> 🔴 </span></a></li>
        <li><a href="mods.php">Engaging with Moderators</a></li>
        <li><a href="good_com_member.php">Being a Good Community Member</a></li>
    </ul>
    <!-- The content of this page -->
    <div class="pageContent">
        <h1> Etiquette in Sharing Content </h1> <br>
        <h2 id="finished">
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    sendUsingAjax(-1);
                });
            </script>
        </h2>
        <p>Sharing content is a common practice in virtual communities, whether it be articles, images, 
            videos, or other forms of media. However, it is important to follow proper etiquette when sharing 
            content to maintain a respectful and engaging community environment.</p><br>
        <p>First and foremost, consider the relevance and accuracy of the content you share. Ensure that it 
            aligns with the purpose and interests of the community. Avoid sharing misleading or false information
             that may harm the community's trust or spread misinformation. By sharing relevant and accurate content, 
             you contribute to meaningful discussions and promote a reliable community space.</p><br>
        <p>Respect copyright laws when sharing content in virtual communities. If you are sharing work that is not your
             own, make sure you have the necessary permissions or that the content is licensed under appropriate terms. 
             Always give proper credit to the original creators or sources. This not only demonstrates respect for
              intellectual property rights but also encourages collaboration and appreciation for others' contributions.</p><br>
        <p>Consider the community guidelines and norms regarding content sharing. Some communities may have specific 
            rules or preferences, such as avoiding explicit or sensitive material. Familiarize yourself with these 
            guidelines and adhere to them to maintain a harmonious community environment.</p><br>
        <p>Finally, be mindful of the frequency and timing of content sharing. Avoid overwhelming the community with 
            excessive posts or dominating the conversation. Respect the space for others to share their content and 
            engage in discussions.</p><br>
        <p>By following proper etiquette in sharing content, you contribute to a virtual community that values relevance, 
            accuracy, respect for intellectual property, and an inclusive environment for all members.</p><br>
        <h6>QUESTION</h6>
        <fieldset>
            <legend for="Q8"> What should you consider when sharing content in virtual communities?</legend>
            <div>
                <input type="radio" id="A" name="option" value="right" checked>
                <label for="emoji">Relevance and accuracy</label>
            </div>
            <div>
                <input type="radio" id="B" name="option" value="wrong" checked>
                <label for="emoticon">Misleading and harmful information</label>
            </div>
            <div>
                <input type="radio" id="C" name="option" value="wrong" checked>
                <label for="emoticon">Violating copyright laws</label>
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