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
        <li><a href="diversity.php" class="active">Diversity and Inclusion<span class="medium"> 🟡 </span></a></li>
        <li><a href="conflicts.php">Conflict Resolution</a></li>
        <li><a href="plagiarism.php">Crediting and Plagiarism</a></li>
        <li><a href="sharing_content.php">Etiquette in Sharing Content</a></li>
        <li><a href="mods.php">Engaging with Moderators</a></li>
        <li><a href="good_com_member.php">Being a Good Community Member</a></li>
    </ul>
    <!-- The content of this page -->
    <div class="pageContent">
        <h1> Diversity and Inclusion </h1> <br>
        <p>Virtual communities thrive on diversity and inclusion. They bring together individuals from various backgrounds,
             cultures, experiences, and perspectives. Embracing and celebrating this diversity is essential for creating a 
             vibrant and enriching community environment.</p><br>
        <p>In a virtual community, diversity contributes to a more comprehensive and multifaceted understanding of different
             topics and issues. It allows for a broader range of ideas, insights, and solutions to be shared. By appreciating 
             and valuing the diverse perspectives within the community, you encourage meaningful discussions and foster a culture
              of inclusivity.</p><br>
        <p>To promote diversity and inclusion in virtual communities, it is important to respect and embrace the differences among 
            community members. Avoid discrimination or exclusion based on factors such as race, ethnicity, gender, sexual orientation, 
            religion, nationality, or any other characteristic. Treat all individuals with respect and fairness, regardless of their 
            background or beliefs.</p><br>
        <p>Encourage a welcoming environment where everyone feels comfortable expressing their thoughts and sharing their experiences. 
            Be open-minded and willing to learn from others, even if their perspectives differ from your own. Engage in constructive 
            dialogue and seek common ground to promote understanding and collaboration.</p><br>
        <p>By fostering diversity and inclusion in virtual communities, you contribute to the growth and development of a dynamic 
            and vibrant space that encourages mutual respect, empathy, and shared learning.</p><br>
        <h6>QUESTION</h6>
        <fieldset>
            <legend for="Q5"> Why is diversity important in virtual communities?</legend>
            <div>
                <input type="radio" id="A" name="option" value="wrong" checked>
                <label for="emoji">To encourage discrimination</label>
            </div>
            <div>
                <input type="radio" id="B" name="option" value="wrong" checked>
                <label for="emoticon">To create an echo chamber</label>
            </div>
            <div>
                <input type="radio" id="C" name="option" value="right" checked>
                <label for="emoticon">To foster a vibrant and inclusive environment</label>
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