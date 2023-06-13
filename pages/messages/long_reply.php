<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
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
        <li><a href="introduction.php">Introduction</a></li>
        <li><a href="first_time.php">How to text someone for the first time professionally</a></li>
        <li><a href="long_reply.php" class="active">When is it acceptable to take your sweet time to reply?<span
                    class="easy"> 🟢 </span></a></li>
        <li><a href="group_text.php">Group text message etiquette</a></li>
        <li><a href="FAQ.php">Frequently asked texting do’s and don’ts questions (FAQ)</a></li>
        <li><a href="rules.php">Texting etiquette: The 10 do’s and don’ts</a></li>
        <li><a href="abbreviation.php">Why abbreviate?</a></li>
    </ul>
    <!-- The content of this page -->
    <div class="pageContent">
        <h1> When is it acceptable to take your sweet time to reply? </h1>
        <h2 id="finished">
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    sendUsingAjax(-1);
                });
            </script>
        </h2>
        <p>
            An anxiety-inducing but widespread claim online is that the average text response time is 90 seconds—but
            there’s reason to be skeptical. Many places repeating this factoid vaguely cite a wireless industry trade
            association as their source, but when I contacted them to fact check, that organization’s research team was
            unsure as to the claim’s basis or origin.
        </p>
        <p>
            Okay, so maybe the average isn’t 90 seconds. Maybe a non-response officially becomes rude after 20 minutes.
            That’s what some folks took from a 2018 study by Google, but it’s not exactly what the researchers wrote.
            Rather, they said the people they studied “felt pressure to respond immediately or within a reasonable
            amount of time, typically between 20 minutes to the end of that day, to avoid breaking etiquette and
            offending the sender.”
        </p>
        <p>
            So how quickly should you answer texts? The answer might seem like a maddeningly subjective “it depends,”
            but we have a few texting rules that can help clarify, starting with:
        </p>
        <h2>Text unto others as you would have them text unto you.</h2>
        <p>
            This goes for content as well as timing. If you’d feel weird getting a dancing hot dog sticker from your
            boss or a John Cena GIF from your mom, don’t send them one. If you’re not sure where the boundaries are,
            consider the perspective of the person you’re texting.
        </p>
        <p>
            Consider also whomever you’re texting near:
        </p>
        <h2>Mind your surroundings.</h2>
        <p>
            Wordlessly pulling out your phone to field a text in the middle of a face-to-face conversation tends to read
            as “I don’t care much about this interaction.” Likewise, texting at the movies is a nonverbal invitation for
            strangers to hiss at you. And the reasons to avoid doing so while driving extend far beyond decorum, but you
            get the idea.
        </p>
        <h2>Slow replies can be rude, but double texting is sometimes worse.</h2>
        <p>
            The asynchronous nature of texting—that you don’t have to drop what you’re doing and reply this second—is
            part of its appeal. You’re texting so as to be unobtrusive, right?
        </p>
        <p>
            Say you text a colleague to ask an after-hours work question. They might love to give you a quick reply, but
            they might also be reading their kid a bedtime story—in which case texting them again a few minutes later is
            not a kind look. In this example, the breach of etiquette comes not from the lack of immediate response but
            from the seeming demand for one.
        </p>
        <p>
            Exceptions to this rule exist, but many are hectic and raise this question: why not talk on the phone?
        </p>
        <h2>Not everything should be said via text.</h2>
        <p>
            If a dog has done something amusing on the internet, please text me the link. If your car just got
            rear-ended, maybe call me instead. If someone in the family’s water broke and you’re headed to the hospital,
            a phone call is warranted, but if you just need a copy of Aunt Kate’s recipe for lemon bars, texting is
            preferable.
        </p>
        <p>
            Oh, and if you’re ending a relationship, doing it via text decidedly sends a message, albeit not a
            sympathetic one.
        </p>
        <h2>
            Not every text merits a response immediately. Or maybe ever.
        </h2>
        <p>
            There are three arguments here. First, some messages don’t necessitate a reply. (“I’m on my way” and “sorry,
            I’m running a few minutes late” are fine examples.)
        </p>
        <p>
            Secondly, some replies take time, like when you need to check your calendar, bank account, or horoscope
            before responding to an invitation. That said, to be polite, it might be worthwhile to dash off some quick
            variant of “Let me get back to you” while you’re deciding.
        </p>
        <p>
            Lastly, expecting instantaneous responses will make you crazy any time one is not forthcoming. Breathe. Your
            phone will most likely buzz again soon enough.
        </p>
        <img src="https://contenthub-static.grammarly.com/blog/wp-content/uploads/2019/04/thumbnail-3d9165d85fe52a7d82c02152151088dc.jpeg"
            class="picturesLessons">
        <h6>QUESTION</h6>
        <fieldset>
            <legend for="Q1"> What is the average text respond?</legend>
            <div>
                <input type="radio" id="A" name="option" value="option" checked>
                <label for="option">10 minutes</label>
            </div>
            <div>
                <input type="radio" id="B" name="option" value="option" checked>
                <label for="option">1 minute and 30 seconds</label>
            </div>
            <div>
                <input type="radio" id="C" name="option" value="option" checked>
                <label for="option">2 hours</label>
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