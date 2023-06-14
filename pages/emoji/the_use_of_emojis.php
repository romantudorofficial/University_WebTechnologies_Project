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
        <li><a href="the_use_of_emojis.php" class="active">When (not) to use emojis<span class="easy"> 🟡 </span></a>
        </li>
        <li><a href="different_generations.php">Their meaning to different generations</a></li>
        <li><a href="rise_of_emoji.php">The new era of emojis</a></li>
        <li><a href="advice.php">Rules</a></li>
    </ul>
    <!-- The content of this page -->
    <div class="pageContent">
        <h1> When (not) to use emojis </h1>
        <h2 id="finished">
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    sendUsingAjax(-1);
                });
            </script>
        </h2>
        <p>
            When it comes to communication and socializing, there's a time and place for everything, even in the digital
            world. Let's go over the scenarios when it is (and isn't) OK to use emojis, and which ones to use...
        </p>
        <img src="https://get.twist.help/hc/article_attachments/360016641980/Screenshot_2020-09-18_at_15.40.44.png"
            class="picturesLessons"><br>
        <h3>Personal Text</h3>
        <p>
            In personal texts, anything goes when it comes to emojis. The type and amount of emojis you use will come
            down to your personal communication style, and the relationship you have with the recipient. In fact, this
            is the ideal time to use them, as even one emoji can make a difference in how the other person perceives
            your text.
            <br>

            For example, "I'm just too much" followed by a laughing or clown emoji will let them know it's just a joke.
            But the same text followed by a sad-face or heart-broken emoji will invoke a sympathetic response since it
            reads as a sad phrase.
        </p>
        <img src="https://www.shutterstock.com/image-vector/high-quality-vector-round-yellow-260nw-2098524778.jpg"
            class="picturesLessons"><br>
        <h3>
            Social Media
        </h3>
        <p>
            How you use emojis on social media will vary greatly depending on the platform, recipient, content, and
            agenda.
            With light-hearted posts, anything goes. While serious content warrants fewer emojis due to their cartoonish
            nature.<br>

            For example, you might want to leave a comment with a bunch of laughing emojis on a funny Instagram video.
            But
            if you're commenting about your experience at a restaurant on its Facebook page, anything other than a
            smiley-face or thumbs-up emoji might be out of place.
        </p>
        <img src="https://cdn.pixabay.com/photo/2015/11/13/10/07/smiley-1041796_1280.jpg" class="picturesLessons"><br>
        <h3>Semi-Formal Communication</h3>
        <p>Semi-formal communication includes things like inquiries, arrangements for an event, complaints, as well as
            texts
            with individuals you don't know personally.<br>

            Emojis should be used sparingly in these texts since they can make the recipient uncomfortable if they don't
            know you, or it might give them the impression that you're not taking the subject discussed seriously. But
            they're not entirely taboo either.<br>
            Similar to serious social media posts, stick to smiley-face and thumbs-up emojis should you include them. If
            your text consists of important information, the Symbols and Flags sections of emojis might help drive your
            point. For example, using the downwards arrow to highlight a document attached underneath.
        </p>
        <img src="https://53.fs1.hubspotusercontent-na1.net/hub/53/hubfs/emoji-data.jpg?width=595&height=400&name=emoji-data.jpg"
            class="picturesLessons"><br>
        <h3>Communication With Coworkers</h3>
        <p>
            While your first thought might be to entirely avoid emojis with anyone work-related, that's not always the
            case—it depends on the nature of the relationship and the subject of discussion.
        </p>
        <p>
            If you're having a friendly back-and-forth with a coworker, emojis are OK, as long as you don't use too many
            and
            match the emojis with the topic. Jokes can be followed by laughing emojis, regards to a sick family member
            can
            be sent with heart emojis, and relaying of an embarrassing story can be paired with the monkey covering
            their
            eyes.
        </p>
        <img src="https://www.scienceofpeople.com/wp-content/uploads/2021/01/896166_Emojis-Featured_111820.jpg"
            class="picturesLessons"><br>
        <h3>Clients and Customers</h3>
        <p>
            If your communication with a client or customer has always centered around business and nothing else, steer
            clear from emoji use, especially if you don't know them personally. Otherwise, light emoji use could be OK.
        </p>
        <p>
            A good rule is to wait for the client or customer to use them first, and you can follow their lead. Even
            then,
            consider the nature of the discussion and ensure that including an emoji in your response is appropriate.
            Simply
            because you've established friendly communication, doesn't mean emojis won't come off as unprofessional.
        </p>
        <p>
            And if you do use them, stick to the basic ones. There won't be any part of business-related communication
            that
            warrants the tongue-out emoji.
        </p>
        <img src="https://cdn.britannica.com/51/233851-050-1E355BE3/Yellow-thinking-face-emoji-icon.jpg"
            class="picturesLessons"><br>
        <h3>Communicating With Your Boss</h3>
        <p>
            When communicating with your boss or any higher-up, emoji use is ill-advised. Similar to clients and
            customers,
            follow their lead, with extra consideration to the nature of the discussion.
        </p>
        <p>
            If you have a good relationship with your boss, and they send an emoji, you've got the green light to
            include
            one in your response—only given the discussion leans to light-hearted. Under any other circumstances, it's
            safer
            to avoid emojis.
        </p>
        <h6>QUESTION</h6>
        <fieldset>
            <legend for="Q1"> Why is it not recommended to use emojis in Semi-Formal discussions?</legend>
            <div>
                <input type="radio" id="A" name="option" value="option" checked>
                <label for="option">they think it is too funny</label>
            </div>
            <div>
                <input type="radio" id="B" name="option" value="option" checked>
                <label for="option">they do not know what a joke is</label>
            </div>
            <div>
                <input type="radio" id="C" name="option" value="option" checked>
                <label for="option">it might give them the impression that you're not taking the subject discussed
                    seriously</label>
            </div>
            <button type="button" onclick="sendUsingAjax(0)">Check Answer</button>
            <div id="answer"></div>
        </fieldset>
        <button class="completeLesson" onclick="checkAnswer(answeredCorrectly)">Complete Lesson</button>
    </div>
    <script>
        function myFunction(validUser) {
            if (validUser != 1) {
                if (document.getElementById("C").checked) {
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