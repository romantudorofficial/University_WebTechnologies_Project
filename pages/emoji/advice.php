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
        <li><a href="rise_of_emoji.php">The new era of emojis</a></li>
        <li><a href="advice.php" class="active">Rules<span class="hard"> 🔴 </span></a></li>
    </ul>
    <!-- The content of this page -->
    <div class="pageContent">
        <h1> Rules </h1>
        <p>
            This is fast moving ground. Early adopters were teenagers (particularly girls), but now most adults have
            used them “at least once”. On the whole, they’re still a “no-no” at work. That especially includes your
            boss, who will almost certainly mistakenly think you’re flirting with him/her.
        </p>
        <p>
            Emojis are frivolous, quirky, cute and fun—great for pre-evening-out banter. Not so good when it’s time to
            be serious or when sad times are afoot.
        </p>
        <img src="https://www.readersdigest.co.uk/media/images/Anna/emoji-keyboard.jpg" alt="A nice picture of emojis"
            class="picturesLessons">
        <h3>
            Bear these simple rules in mind when using Emojis:
        </h3>
        <p> - Emojis come at the end of the sentence if they’re conveying an emotion</p>
        <p> - They can appear in the middle of a sentence too, but only if they’re replacing a word</p>
        <p> - Emojis are not full stops. Don’t use them as full stops</p>
        <p> - If you’re using a string of Emojis the order matters. For example, we weep first and then we have a
            broken heart. And make sure the barrel of the Emoji gun is pointing the right direction.</p>
        <p> - Another point of order: A single Emoji reply says, “I’m too busy for you” or “I can’t be bothered to
            reply”. That might be fine, but bear it in mind</p>
        <h6>QUESTION</h6>
        <fieldset>
            <legend for="Q1"> Does the order of emojis matter?</legend>
            <div>
                <input type="radio" id="A" name="option" value="option" checked>
                <label for="option">yes</label>
            </div>
            <div>
                <input type="radio" id="B" name="option" value="option" checked>
                <label for="option">no</label>
            </div>
            <button type="submit" onclick="myFunction()">Check Answer</button>
            <div id="answer"></div>
        </fieldset>
        <button class="completeLesson">Complete Lesson</button>
        <p>
            <?php checking_email(); ?>
        </p>
    </div>
    <script type="text/javascript">
        function myFunction() {
            if (document.getElementById("A").checked) {
                document.getElementById("answer").innerHTML = "Your answer is correct";
            }
            else {
                document.getElementById("answer").innerHTML = "Your answer is wrong";
            }
            returnPair();
        }
        function returnPair() {
            var results = document.getElementsByClassName("active");
            var ceva = [];
            var i = 0;
            for (i = 0; i < results.length; i++) {
                ceva[i] = results.item(i).innerHTML;
            }
            return ceva;
        }
    </script>
    <?php
    function gettingJson()
    {
        $file = file_get_contents("../../files/checker.json");
        $jsonFile = json_decode($file, true);
        //echo var_dump($jsonFile);
        return $jsonFile;
    }
    function checking_email()
    {
        $jsonArray=decodingJSON();
        existCategoryLessonEmail($jsonArray,'Emoji','Rules');
    }
    function decodingJSON()
    {
        $jsonFile = gettingJson();
        $i = 0;
        foreach ($jsonFile as $element) {
            $array = (array) $element;
            $result[$i]['category'] = $array['nameCategory'];
            //for getting the lessons
            $j = 0;
            foreach ($array['lessons'] as $lesson) {
                $arrayForLessons = (array) $lesson;
                $result[$i]['lesson'][$j] = $arrayForLessons['nameLesson'];
                $j = $j + 1;
                //for getting the emails
                $k = 0;
                foreach ($arrayForLessons['email'] as $email) {
                    $arrayForEmails = (array) $email;
                    $result[$i]['lesson'][$j][$k] = $arrayForEmails[$k];
                    $k = $k + 1;
                }
            }
            $i = $i + 1;
        }
        //echo var_dump($result);
        return $result;
    }
    function existCategoryLessonEmail($jsonFile,$category,$lesson)
    {
        //checks category
        $ok=-2;
        foreach($jsonFile as $test){
            var_dump($test);
            echo "YOLO<br>";
            if($test['category']==$category){
                echo "YES, category <br>";
                $ok=-1;
                //now checking lessons
                foreach($test['lesson'] as $lesson){
                    if($lesson['nameLesson']==$lesson)
                }
            }
        }
    }
    ?>
    </div>
    </div>
</body>

</html>