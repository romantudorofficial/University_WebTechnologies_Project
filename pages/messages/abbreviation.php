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
        <li><a href="long_reply.php">When is it acceptable to take your sweet time to reply?</a></li>
        <li><a href="group_text.php">Group text message etiquette</a></li>
        <li><a href="FAQ.php">Frequently asked texting do’s and don’ts questions (FAQ)</a></li>
        <li><a href="rules.php">Texting etiquette: The 10 do’s and don’ts</a></li>
        <li><a href="abbreviation.php" class="active">Why abbreviate?<span class="hard"> 🔴 </span></a></li>
    </ul>
    <!-- The content of this page -->
    <div class="pageContent">
        <h1> Why abbreviate? </h1>
        <h2 id="finished">
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    sendUsingAjax(-1);
                });
            </script>
        </h2>
        <p>
            In the olden days before “unlimited talk and text” data plans, text messages were expensive to send and
            receive, and because they were limited to 160 characters per message, every character was precious.
        </p>
        <p>
            Texting using a standard telephone keypad was also a laborious process, requiring multiple key presses per
            character. So mobile phone users adapted to clunky keypads and character limits by abbreviating common words
            and phrases.
        </p>
        <p>
            As texting became popular, a new language of acronyms and texting abbreviations evolved and became embedded
            in texting and internet culture. Despite our smartphones having full keyboards, texting abbreviations are
            still convenient shortcuts and remain a staple in communications worldwide.
        </p>
        <p>
            Read on for our essential list of common texting abbreviations so you don’t make the mistake of sending an
            “LOL” when “my deepest condolences” is the appropriate response.
        </p>
        <h5>
            BC
        </h5>
        <p>
            BC: Because
        </p>
        <h5>
            BTW
        </h5>
        <p>
            BTW: By the way
        </p>
        <h5>
            CYA
        </h5>
        <p>
            CYA: See ya
        </p>
        <p>
            “C” is often used as a stand-in for “see,” such as “CYT” (“see you tomorrow”) and “CU” (“see you”).
        </p>
        <h5>
            DM
        </h5>
        <p>
            DM: Direct message
        </p>
        <p>
            On social media platforms such as Twitter and Instagram, a “direct message” is a private message that only
            the recipient can access, rather than a post that’s publicly visible.
        </p>
        <p>
            The phrase “sliding into her/his/their DMs” (which has inspired many memes) typically refers to an admirer
            sending a bold or suave direct message to a stranger in order to spark a flirtation.
        </p>
        <h5>
            FTW
        </h5>
        <p>
            FTW: For the win
        </p>
        <p>
            The exact origins of this phrase are debated—Hollywood Squares, rugby, and World of Warcraft have all been
            cited as popularizing it. It’s typically used as a rallying cry or as an exclamation of celebration,
            sometimes ironically.
        </p>
        <h5>
            FWIW
        </h5>
        <p>
            FWIW: For what it’s worth
        </p>
        <h5>
            IDK
        </h5>
        <p>
            IDK: I don’t know
        </p>
        <p>
            Similar abbreviations include “DK” (“don’t know”) and “IDC” (“I don’t care”).
        </p>
        <h5>
            ILY
        </h5>
        <p>
            ILY: I love you
        </p>
        <h5>
            IMO
        </h5>
        <p>
            IMO: in my opinion
        </p>
        <p>
            “IMHO” (“in my humble opinion”) is another common variation.
        </p>
        <h5>
            IRL
        </h5>
        <p>
            IRL: In real life
        </p>
        <p>
            This phrase is typically used to differentiate between online (or media) personas, and how things are in
            reality.
        </p>
        <h5>
            JK
        </h5>
        <p>
            JK: Just kidding
        </p>
        <p>
            You might genuinely use this texting abbreviation while joking around, but it’s also frequently used to
            indicate sarcasm.
        </p>
        <h5>
            LMK
        </h5>
        <p>
            LMK: Let me know
        </p>
        <h5>
            LOL
        </h5>
        <p>
            LOL: Laughing out loud
        </p>
        <p>
            Occasionally mistaken for “Lots Of Love,” LOL is one of the most widely known texting abbreviations and has
            been around for almost 30 years.
        </p>
        <p>
            Originally it was used in texting and chatting to communicate that you found something so funny that you
            were literally moved to laughter. Over time LOL has evolved from its original meaning and is now typically
            used to signal that you’re amused or even just tracking with what the other person is saying (like a virtual
            nod).
        </p>
        <h5>
            NBD
        </h5>
        <p>
            NBD: No big deal
        </p>
        <p>
            Can be used to genuinely say that something isn’t that important, but can also be used to downplay a brag or
            sarcastically to show what a big deal something actually is.
        </p>
        <h5>
            NP
        </h5>
        <p>
            NP: No problem
        </p>
        <h5>
            NSFW
        </h5>
        <p>
            NSFW: Not safe for work
        </p>
        <h5>
            NVM
        </h5>
        <p>
            NVM: Nevermind
        </p>
        <h5>
            OMG
        </h5>
        <p>
            OMG: Oh my God
        </p>
        <p>
            A popular and long-used abbreviation, the Oxford English Dictionary has traced usage of “OMG” back to the
            early 1900s, but this exclamation didn’t come into common use on the internet until the 1990s.
        </p>
        <h5>
            OTOH
        </h5>
        <p>
            OTOH: On the other hand
        </p>
        <p>
            This phrase is used to compare the two sides of an argument.
        </p>
        <h5>
            OMW
        </h5>
        <p>
            OMW: On my way
        </p>
        <h5>
            ROFL
        </h5>
        <p>
            ROFL: Rolling on floor laughing
        </p>
        <p>
            This acronym is typically used when responding to something especially funny—so funny that “LOL” and “LMAO”
            are not enough to convey how hilarious you think it is.
        </p>
        <h5>
            SO
        </h5>
        <p>
            SO: Significant other
        </p>
        <h5>
            TBH
        </h5>
        <p>
            TBH: To be honest
        </p>
        <p>
            This phrase is used to indicate that you’re expressing your true opinion.
        </p>
        <h5>
            THX
        </h5>
        <p>
            THX: Thanks
        </p>
        <h5>
            TMI
        </h5>
        <p>
            TMI: Too much information
        </p>
        <p>
            Usually used when someone reveals information that is shocking or unpleasant in some way.
        </p>
        <h5>
            TTYL
        </h5>
        <p>
            TTYL: Talk to you later
        </p>
        <p>
            Similar variations include “TTYT” (“talk to you tomorrow”) and “TTFN (“ta-ta for now”).
        </p>
        <h5>
            YOLO
        </h5>
        <p>
            YOLO: You only live once
        </p>
        <p>
            Life is short, so why not live it up? Seize the day. Step outside of your comfort zone. Take risks. Do
            what’s exciting, silly, fun, or even a little dangerous.
        </p>
        <img src="https://contenthub-static.grammarly.com/blog/wp-content/uploads/2023/06/Birthday_Message-235x124.png"
            class="picturesLessons">
        <h6>QUESTION</h6>
        <fieldset>
            <legend for="Q1"> What does FTW stand for?</legend>
            <div>
                <input type="radio" id="A" name="option" value="option" checked>
                <label for="option">funny to wait</label>
            </div>
            <div>
                <input type="radio" id="B" name="option" value="option" checked>
                <label for="option">for the win</label>
            </div>
            <div>
                <input type="radio" id="C" name="option" value="option" checked>
                <label for="option">feeling too worried</label>
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
    </div>
</body>

</html>