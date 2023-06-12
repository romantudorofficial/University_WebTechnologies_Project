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
        <li> <a href="../messages/introduction.php" class="active">Messages</a> </li>
        <li> <a href="../virtual community/introduction.php">Virtual Community</a> </li>
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
        <li class="titleLesson">How to write messages</li>
        <li><a href="introduction.php" class="active">Introduction<span class="easy"> 🟢 </span></a></li>
        <li><a href="first_time.php">How to text someone for the first time professionally</a></li>
        <li><a href="long_reply.php">When is it acceptable to take your sweet time to reply?</a></li>
        <li><a href="group_text.php">Group text message etiquette</a></li>
        <li><a href="FAQ.php">Frequently asked texting do’s and don’ts questions (FAQ)</a></li>
        <li><a href="rules.php">Texting etiquette: The 10 do’s and don’ts</a></li>
        <li><a href="abbreviation.php">Why abbreviate?</a></li>
    </ul>
    <!-- The content of this page -->
    <div class="pageContent">
        <h1> Introduction </h1>
        <p>
            There’s anxiety around texting etiquette. When I talk to individuals and teams who text I always hear
            questions like:
        </p>
        <p>
            - What’s considered good text response time etiquette?
        </p>
        <p>
            - Is it ok to use emojis in my professional messages?
        </p>
        <p>
            - Are texting acronyms like “LOL” acceptable?
        </p>
        <h3>
            What is Texting Etiquette?
        </h3>
        <p>
            Professional texting etiquette is a set of texting rules and guidelines. Text etiquette describes how
            employees and staff at businesses and organizations should text colleagues, customers, and clients.
            Professional texting etiquette is also about being mindful of your word choice, tone, and manners when
            texting for business communication.
        </p>
        <h3>Here’s what you’ll learn:</h3>
        <p>
            How to text someone for the first time professionally ;
            When is it acceptable to take your sweet time to reply? ;
            Group text message etiquette ;
            Frequently asked texting do’s and don’ts questions (FAQ);
            Texting etiquette: The 10 do’s and don’ts;
            Why abbreviate?
        </p>
        <p> So, in the following lessons we will talk about messages etiquette</p>
        <img src="https://i.insider.com/528559a46da811e1525c86ed?width=800&format=jpeg" alt="A nice picture of emojis"
            class="picturesLessons">
            <h6>QUESTION</h6>
        <fieldset>
            <legend for="Q1"> Why learning it?</legend>
            <div>
                <input type="radio" id="A" name="option" value="option" checked>
                <label for="option">being mindful of your word choice, tone, and manners when
            texting for business communication</label>
            </div>
            <div>
                <input type="radio" id="B" name="option" value="option" checked>
                <label for="option">getting to be loved for how you write texts</label>
            </div>
            <button type="submit" onclick="myFunction()">Check Answer</button>
            <div id="answer"></div>
        </fieldset>
        <button class="completeLesson">Complete Lesson</button>
    </div>
    <script>
        function myFunction() {
            if (document.getElementById("A").checked) {
                document.getElementById("answer").innerHTML = "Your answer is correct";
            }
            else {
                document.getElementById("answer").innerHTML = "Your answer is wrong";
            }
        }
    </script>
    </div>
</body>

</html>