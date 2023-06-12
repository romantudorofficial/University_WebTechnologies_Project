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
        <li><a href="FAQ.php">Frequently asked texting do’s and don’ts questions (FAQ)</a></li>
        <li><a href="rules.php" class="active">Texting etiquette: The 10 do’s and don’ts<span class="hard"> 🔴
                </span></a></li>
        <li><a href="abbreviation.php">Why abbreviate?</a></li>
    </ul>
    <!-- The content of this page -->
    <div class="pageContent">
        <h1> Texting etiquette: The 10 do’s and don’ts </h1>
        <h4>
            1. Do reply promptly
        </h4>
        <p>
            When you receive a text, try to respond in a prompt fashion. “There is a certain etiquette to being timely
            with texting and an expectation that the replies will come as soon as possible,” says Post Senning. “At the
            same time, you’re not beholden to your device. If it’s not an appropriate time to reply, just wait and do it
            later.” And speaking of waiting…
        </p>
        <h4>
            2. Don’t text during inappropriate moments
        </h4>
        <p>
            We’ve all witnessed it — hard-core texters typing messages in movie theatres, during plays, funerals, and
            religious services. And we all have that friend who cannot sit through a meal without whipping off a quick
            text from the table. “The biggest mistake people make is not thinking about where and when they’re texting,”
            says Post Senning. Texting during public gatherings can be considered rude, insensitive and annoying. Would
            you make a phone call in such a setting? Probably not, so the same rule applies to texting. If you simply
            cannot wait, excuse yourself from the movie, event or dinner table and text outside where you won’t disturb
            others.
        </p>
        <h4>
            3. Do keep texts short
        </h4>
        <p>
            “Texts are a shorter medium of communication, a little bit like an answering machine message,” says Post
            Senning. “If it gets too long, the text becomes a burden to the person on the receiving end.” If you have a
            lot to say, break up the message into several texts, so it’s easier for the receiver to read.
        </p>
        <h4>
            4. Don’t text sensitive news
        </h4>
        <p>
            It’s not fun (or polite) to be told via text that your husband wants a divorce. Just ask Katy Perry. In
            2011, the singer’s then-husband Russell Brand chose the medium to dissolve their marriage. Similarly, other
            life-changing news such as being laid off from work, or a death in the family shouldn’t be sent by text
            either. “Messages with emotional content are better delivered by phone, or in person. You get more
            information from the tone and inflection of voice, facial expressions, and body language than you do from
            the written word, and there’s less chance your message can be misinterpreted, or cause hurt,” says Post
            Senning.
        </p>
        <h4>
            5. Do re-read your texts before sending
        </h4>
        <p>
            They’re fun to giggle at when they’re posted to Facebook, but autocorrect errors aren’t always a laughing
            matter when they happen to you. “Save yourself some embarrassment and show some care for the person you’re
            communicating with by taking the time to re-read your message before you hit send,” says Post Senning.
        </p>
        <h4>
            6. Don’t send too many attachments
        </h4>
        <p>
            It’s fine to send an important photo or link, but texting too many — especially if they’re risqué or boring
            — and you might be going too far. “You don’t want to be the person who floods people with baby photos or
            lunch pictures. You don’t want to overwhelm people with stuff they’re not interested in, or send anything
            that might shock or offend them,” says Post Senning.
        </p>
        <h4>
            7. Don’t forget to double-check the recipient
        </h4>
        <p>
            Be extra careful with the autofill function in the text’s ‘send’ field. Typing in the first letters of
            someone’s name and relying on autofill to do the rest could result in an awkward situation when the wrong
            James, or Jill receives your message.
        </p>
        <h4>
            8. Do use proper grammar
        </h4>
        <p>
            Your friends, family and co-workers might be in the dark about the latest texting abbreviations, so err on
            the side of caution and use correct spelling and punctuation. “Not everyone interprets shorthand well, and
            you want to make sure that you’re understood,” says Post Senning. It’s fine to add emoticons or emojis to
            convey your feelings — just don’t go overboard with their use. Too many emojis can turn your text from
            endearing to annoying.
        </p>
        <h4>
            9. Don’t text too early or late
        </h4>
        <p>
            Some people use their cell phone as an alarm clock, while others have a tone that goes off every time a text
            is received. To avoid waking someone up, don’t text too early or late. “The rule is 7am to 9pm, but if you
            know the person well, you can probably push that range out a little bit,” says Post Senning.
        </p>
        <h4>
            10. Don’t text while driving — ever!
        </h4>
        <p>
            Drivers distracted by texting often cause fatal car accidents. If you have an urgent need to text, find a
            parking lot and send your text from there.
        </p>
        <h2>Further information: <a href="https://emilypost.com/advice/texting-manners"
                style="text-decoration:none; color: #333;">Texting Guidelines</a></h2>
        <img src="https://messagemedia.com/nz/wp-content/uploads/sites/6/2022/03/Text-messaging-etiquette_-dos-and-donts-Blog-header-1024x325px.jpg"
            class="picturesLessons">
        <button class="completeLesson">Complete Lesson</button>
    </div>
</body>

</html>