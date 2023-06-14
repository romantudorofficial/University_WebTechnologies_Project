<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title> Emoji Tutorial </title>
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
        <li> <a href="../virtual community/introduction.php">Virtual Community</a> </li>
        <li> <a href="../emoji/introduction.php" class="active">Emoji</a> </li>
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
        <li class="titleLesson">How to use emojis</li>
        <li><a href="introduction.php">Introduction</a></li>
        <li><a href="brief_history.php">Brief history</a></li>
        <li><a href="emoji_emoticon.php">Emoji vs Emoticon</a></li>
        <li><a href="the_use_of_emojis.php">When (not) to use emojis</a></li>
        <li><a href="different_generations.php" class="active">Their meaning to different generations<span
                    class="medium"> 🟡 </span></a></li>
        <li><a href="rise_of_emoji.php">The new era of emojis</a></li>
        <li><a href="advice.php">Rules</a></li>
    </ul>
    <!-- The content of this page -->
    <div class="pageContent">
        <h1> Their meaning to different generations </h1>
        <h2 id="finished">
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    sendUsingAjax(-1);
                });
            </script>
        </h2>
        <p>
            If you're using emojis in business-related communications, always stick to basic emojis or emojis that make
            sense in relation to the topic. When it comes to social media, however, you might have noticed strange
            emojis
            that don't seem to make any sense.
        </p>
        <p>
            This is because the younger generations and social media users continually adapt the meanings of these
            emojis
            and the ways we use them.
        </p>
        <p>
            It might be confusing to someone who doesn't understand these evolving meanings, and it'll probably result
            in
            some misinterpretations. Let's discuss some of the most common ones...
        </p>
        <img src="https://static1.makeuseofimages.com/wordpress/wp-content/uploads/2021/06/modern-emoji-use.jpeg"
            class="picturesLessons">
        <h4>1. Skull</h4>
        <p>
            If you use the laughing emoji, you may be considered to be out-of-the-loop. Instead, the skull emoji can now
            sometimes represent laughter, depending on the context.
        </p>
        <p>
            It relates to the slang term "I'm dead", meaning you've laughed so hard you can't breathe anymore.
        </p>
        <h4>2. Eyes, Lips, Eyes</h4>
        <p>
            The combination of these emojis looks like a strange face, which is the point. It signifies confusion,
            shock, or
            awkwardness. The person standing emoji means the same thing, like you're just standing there, not knowing
            how to
            react.
        </p>
        <h4>3. Clown</h4>
        <p>
            If you see a clown emoji following a statement, it means the author is poking fun at something or someone.
            It
            could either be the subject of the statement, or whoever it's directed at.
        </p>
        <h4>4. Stars</h4>
        <p>
            Star emojis are used to emphasize phrases or words. A word or phrase that's encased by star emojis means the
            author has highlighted that part of the sentence. It's typically used in a sarcastic manner.
        </p>
        <h4>5. Playing Sports</h4>
        <p>
            Emoji icons of avatars playing sports are used to represent extreme reactions. If you find something very
            funny, or just downright insane, these emojis are a good way to convey that.
        </p>
        <h6>QUESTION</h6>
        <fieldset>
            <legend for="Q1"> What does skull emoji represent?</legend>
            <div>
                <input type="radio" id="A" name="option" value="option" checked>
                <label for="option">emphasize phrases or words</label>
            </div>
            <div>
                <input type="radio" id="B" name="option" value="option" checked>
                <label for="option">represent laughter, depending on the context</label>
            </div>
            <div>
                <input type="radio" id="C" name="option" value="option" checked>
                <label for="option">poking fun at something or someone</label>
            </div>
            <button type="button" onclick="sendUsingAjax(0)">Check Answer</button>
            <div id="answer"></div>
        </fieldset>
        <button class="completeLesson" onclick="checkAnswer(answeredCorrectly)">Complete Lesson</button>
    </div>
    <script>
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