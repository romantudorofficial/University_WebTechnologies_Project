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
        <li><a href="group_text.php" class="active">Group text message etiquette<span class="medium"> 🟡 </span></a>
        </li>
        <li><a href="FAQ.php">Frequently asked texting do’s and don’ts questions (FAQ)</a></li>
        <li><a href="rules.php">Texting etiquette: The 10 do’s and don’ts</a></li>
        <li><a href="abbreviation.php">Why abbreviate?</a></li>
    </ul>
    <!-- The content of this page -->
    <div class="pageContent">
        <h1> Group text message etiquette </h1>
        <p>
            Group text etiquette is a tricky thing. In professional contexts, I advise that you keep group texts to a
            minimum.
        </p>
        <p>
            This is because the mechanics of a group text aren’t inherently professional. People (myself included)
            generally don’t like being stuck in a group chat.
        </p>
        <p>
            The problem is that every contact in a group text sees every message and recipient. Everyone gets a
            notification when a new text gets added to the conversation.
        </p>
        <p>
            These constant notifications get annoying. This is especially annoying if you can’t mute the conversation or
            put your phone on silent.
        </p>
        <img src="https://uploads-ssl.webflow.com/6349fd438ecb3a3594605225/63e2a39dd38f433ab16855d5_messagedesk-shared-team-inbox-p-500.webp"
            alt="some img" class="picturesLessons">
        <p>
            If you find yourself in a group text, here’s some general group text etiquette:
        </p>
        <p>
            1.Don’t start conversations late at night. <br>
            2.Don’t use a group text to only text with one person in a group. <br>
            3.Include people in the group text who know each other. <br>
            4.Keep the conversation in the group text on the subject. <br>
            5.Announce when and if you’re leaving the conversation. <br>
            6.Don’t drag a group text out for longer than it needs to be. <br>
            7.Put your phone on silent to keep annoying notifications from buzzing. <br>
            8.Participate in the conversation, don’t just add to the noise. <br>
        </p>
        <p>
            If you need to send a text to more than 20 people, don’t send it as a group text. Send a mass text using a
            business text messaging software like MessageDesk instead.
        </p>
        <p>
            Mass texts are like BCC emails—they’re one-to-many text messages. Sometimes people refer to mass texts as
            “group text without reply all”.
        </p>
        <p>
            When someone responds to your mass text, that message starts a private, two-way message thread. This is an
            essential part of professional texting at scale.
        </p>
        <img src="https://uploads-ssl.webflow.com/6349fd438ecb3a3594605225/63e2d8ec2eb430ef6f7b970f_text-broadcast.webp"
            class="picturesLessons">
        <button class="completeLesson">Complete Lesson</button>
    </div>
</body>

</html>