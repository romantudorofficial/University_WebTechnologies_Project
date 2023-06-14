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
        <li><a href="different_generations.php">Their meaning to different generations</a></li>
        <li><a href="rise_of_emoji.php" class="active">The new era of emojis<span class="hard"> 🔴 </span></a></li>
        <li><a href="advice.php">Rules</a></li>
    </ul>
    <!-- The content of this page -->
    <div class="pageContent">
        <h1> The new era of emojis </h1>
        <h2 id="finished">
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    sendUsingAjax(-1);
                });
            </script>
        </h2>
        <img src="https://static1.makeuseofimages.com/wordpress/wp-content/uploads/2021/05/emoji-stock-image.jpg"
            class="picturesLessons">
        <p>
            Emojis, the little colorful icons and pictures you can add to text messages, can represent a variety of
            things—from faces to sports, to nature, and transportation.
        </p>
        <p>
            With the rise of social media and smartphones, they are firmly entrenched in the way people communicate
            textually. So much so that many smartphone keyboards suggest emojis based on the words you type, saving you
            from having to search for the perfect one to use.
        </p>
        <p>
            This comes as no surprise since texting is a short form of communication, so it makes sense that people want
            to make their communication brief and simple. After all, people have used symbols to communicate for
            hundreds of years.
        </p>
        <p>
            Emojis have also moved into art and merchandise, where you can get your favorite emoji on everything from
            your slippers to your mug.
        </p>
        <img src="https://static1.makeuseofimages.com/wordpress/wp-content/uploads/2021/05/emoji-communication.jpg"
            class="picturesLessons">
        <p>
            Language adapts with time and emojis are one of the ways that online communication has evolved. It can be
            argued that emojis make online communication richer and more emotive. In text, they’re the substitute for
            gestures, tone of voice, and facial expressions.
        </p>
        <p>
            When it comes to using emojis, there aren't really grammatical rules to use as a guideline. It comes down to
            context.
        </p>
        <p>
            People have also transformed the meaning of certain emojis, allocating inferred or metaphorical meanings to
            them that are culturally understood. For example, the skull emoji can be used in response to something funny
            or embarrassing and people share the flames emoji when something is considered cool.
        </p>
        <p>
            Words can easily be misconstrued through text, but emojis can help make the distinction of intent clearer.
            For instance, emojis can be the difference between a message being understood as sarcastic or not. Emojis
            can also be repeated to show emphasis, a practice not usually done with English words.
        </p>
        <p>
            In today's age, emojis are being used in business emails, as part of annotations in professional online
            meetings, and for features on social media platforms, like Twitter's Twemojis.
        </p>
        <p>
            But we also have an effect on emojis. As we’ve seen, emojis have become more inclusive so that they no
            longer exclude the diverse ranges of people that use them.
        </p>
        <p>
            Some emojis have been adapted in line with sensitivities, like the gun emoji which was once a representation
            of a handgun and was later changed to a kids toy gun, which conveys a more harmless meaning.
        </p>
        <h6>QUESTION</h6>
        <fieldset>
            <legend for="Q1"> Are emoji used in business emails?</legend>
            <div>
                <input type="radio" id="A" name="option" value="option" checked>
                <label for="option">yes</label>
            </div>
            <div>
                <input type="radio" id="B" name="option" value="option" checked>
                <label for="option">no</label>
            </div>
            <button type="button" onclick="sendUsingAjax(0)">Check Answer</button>
            <div id="answer"></div>
        </fieldset>
        <button class="completeLesson" onclick="checkAnswer(answeredCorrectly)">Complete Lesson</button>
    </div>
    <script>
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