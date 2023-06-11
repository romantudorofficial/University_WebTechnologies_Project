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
        <li><a href="active_listening.php">Active Listening</a></li>
        <li><a href="privacy.php">Privacy and Consent</a></li>
        <li><a href="diversity.php">Diversity and Inclusion</a></li>
        <li><a href="conflicts.php">Conflict Resolution</a></li>
        <li><a href="plagiarism.php">Crediting and Plagiarism</a></li>
        <li><a href="sharing_content.php">Etiquette in Sharing Content</a></li>
        <li><a href="mods.php">Engaging with Moderators</a></li>
        <li><a href="good_com_member.php" class="active">Being a Good Community Member<span class="hard"> 🔴 </span></a></li>
    </ul>
    <!-- The content of this page -->
    <div class="pageContent">
        <h1> Being a Good Community Member </h1> <br>
        <p>Being a good member of a virtual community entails actively contributing in positive ways. By practicing 
            good citizenship, you can foster a welcoming and supportive environment where everyone feels valued and 
            respected.</p><br>
        <p>One way to be a good community member is to actively participate and contribute your knowledge and experiences. 
            Share insights, ask questions, and engage in meaningful discussions. Contribute to the community's growth and 
            learning by sharing valuable resources or offering guidance to others.</p><br>
        <p>Supporting fellow community members is another vital aspect of being a good member. Be kind, respectful, and 
            inclusive in your interactions. Offer encouragement, help, and constructive feedback when appropriate. Celebrate 
            the achievements and contributions of others, fostering a sense of camaraderie within the community.</p><br>
        <p>Respect the community's guidelines and norms. Familiarize yourself with the rules and adhere to them. Be mindful 
            of your language, tone, and behavior, ensuring they align with the community's expectations. If you notice any 
            violations or inappropriate behavior, report it to the moderators in a timely and respectful manner.</p><br>
        <p>Lastly, foster a culture of appreciation and gratitude. Acknowledge and express gratitude for the contributions 
            and efforts of others. Recognize the value they bring to the community and the positive impact they have.</p><br>
        <p>By embodying the principles of good citizenship, you contribute to the growth, positivity, and sustainability of 
            the virtual community you are a part of.</p><br>
        <h6>QUESTION</h6>
        <fieldset>
            <legend for="Q10"> What is an important aspect of being a good community member?</legend>
            <div>
                <input type="radio" id="A" name="option" value="wrong" checked>
                <label for="emoji">Engaging in conflicts and arguments</label>
            </div>
            <div>
                <input type="radio" id="B" name="option" value="right" checked>
                <label for="emoticon">Actively participating and contributing</label>
            </div>
            <div>
                <input type="radio" id="C" name="option" value="wrong" checked>
                <label for="emoticon">Ignoring community guidelines</label>
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