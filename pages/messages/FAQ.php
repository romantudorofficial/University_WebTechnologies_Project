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
        <li><a href="introduction.php">Introduction</a></li>
        <li><a href="first_time.php">How to text someone for the first time professionally</a></li>
        <li><a href="long_reply.php">When is it acceptable to take your sweet time to reply?</a></li>
        <li><a href="group_text.php">Group text message etiquette</a></li>
        <li><a href="FAQ.php" class="active">Frequently asked texting do’s and don’ts questions (FAQ)<span
                    class="medium"> 🟡 </span></a></li>
        <li><a href="rules.php">Texting etiquette: The 10 do’s and don’ts</a></li>
        <li><a href="abbreviation.php">Why abbreviate?</a></li>
    </ul>
    <!-- The content of this page -->
    <div class="pageContent">
        <h1> Frequently asked texting do’s and don’ts questions (FAQ) </h1>
        <p>
            Below are answers to frequently asked professional text message etiquette questions.
        </p>
        <h4>
            What’s considered good text response time etiquette?
        </h4>
        <p>
            What does good text response time etiquette look like? The maddening answer is, “It depends.”
        </p>
        <p>
            If you’re texting your boss or a colleague, a good text response time is as soon as possible.
        </p>
        <p>
            If you’re a business or organization texting customers or clients, then know that people increasingly expect
            instant response times.
        </p>
        <p>
            For inbound text messages from customers with sales questions, a good text response time should be around 90
            seconds or less.
        </p>
        <p>
            For other, less urgent text messages, you might be able to hold yourself to a different standard.
        </p>
        <p>
            Between 20 minutes and the end of the business day may be acceptable. That should keep you from breaking
            texting etiquette rules and offending the sender.
        </p>
        <img src="https://uploads-ssl.webflow.com/6349fd438ecb3a3594605225/63fa7a57f86571d011007525_sms_opt_in_compliance_81355b3ef5-p-500.webp"
            class="picturesLessons">
        <h4>
            Is it ok to use emojis in professional text messages?
        </h4>
        <p>
            Smiley faces and big red hearts may feel natural when texting friends and relatives. But when it comes to
            business, you need to be mindful of your emoji etiquette.
        </p>
        <p>
            In most cases, businesses and organizations should avoid casual or unnecessary emoji use. If you don’t nail
            the context, then emojis can cause confusion or even offend message recipients.
        </p>
        <p>
            However, emojis can also increase text message engagement and response rates. They’re a valuable tool as
            part of a conversational messaging strategy. But this all comes down to context and the types of messages
            you’re sending.
        </p>
        <p>
            When used correctly, emojis can help your business text messaging by:
        </p>
        <p>
            - Boosting the personal and positive aspects of a message <br>
            - Softening the tone of a message<br>
            - Humanizing your brand<br>
            - Encouraging engagement<br>
            -Creating humor and brevity
        </p>
        <p>
            As best practices, only use relevant emojis. Don’t overdo it. Pay attention, “read the room” and understand
            the context before you send a text message with an emoji.
        </p>
        <p>
            If your message recipient responds in a light-hearted tone, then emojis may work. But if they’re approaching
            your conversation more seriously, you may want to leave the emojis out.
        </p>
        <img src="https://uploads-ssl.webflow.com/63ab86222e85b374fbb5883f/63fa8d830e70bdb27b4a2851_2bafb4.webp"
            class="picturesLessons">
        <h4>
            Are texting acronyms like “LOL” acceptable in professional text messages?
        </h4>
        <p>
            You should always aim for clarity when it comes to business communication. This often means excluding text
            abbreviations from professional text messages.
        </p>
        <p>
            It's true that many text abbreviations like LOL have become mainstream. But when it comes to professional
            text messages you’re better off leaving them out.
        </p>
        <p>
            The exception to this rule may depend on your audience and context. If you’re texting amongst younger
            demographics, then acronyms might be acceptable.
        </p>
        <p>
            But there’s really no place for texting acronyms in your messages if you’re a business or organization.
        </p>
        <img src="https://uploads-ssl.webflow.com/6349fd438ecb3a3594605225/63cc8403d7632e24c8450c7c_comment-assign-teammates-550x550-p-500.webp"
            class="picturesLessons">
        <h4>
            Is it ok to not respond to a text?
        </h4>
        <p>
            Not responding to a text message could be considered rude, depending on the context of the situation. For
            people at businesses and organizations, it's slightly more acceptable to not respond to a text.
        </p>
        <p>
            This is because people are busy and they have things to do. Above all else, business communication always
            strives to respect everyone’s time.
        </p>
        <p>
            For personal communications, getting left on read is a strong signal. It’s often quite rude. Again, not
            responding to a text really comes down to your context and situation.
        </p>
        <img src="https://uploads-ssl.webflow.com/6349fd438ecb3a3594605225/63e2e8650033f9405b5881da_Automatic-out-of-office-text-messages-p-500.webp"
            class="picturesLessons">
        <h6>QUESTION</h6>
        <fieldset>
            <legend for="Q1"> What is the best time to response to a text?</legend>
            <div>
                <input type="radio" id="A" name="option" value="option" checked>
                <label for="option">5 minutes</label>
            </div>
            <div>
                <input type="radio" id="B" name="option" value="option" checked>
                <label for="option">it depends</label>
            </div>
            <div>
                <input type="radio" id="C" name="option" value="option" checked>
                <label for="option">immediately</label>
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
    </div>
</body>

</html>