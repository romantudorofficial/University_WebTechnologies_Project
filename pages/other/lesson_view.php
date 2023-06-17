<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styles/main_style.css" />
    <link rel="stylesheet" href="../styles/lessons_style.css" />
    <link rel="stylesheet" href="../styles/lesson_rest_style.css" />
    <script src="../services/functionsForAjax.js"></script>
</head>

<body>
    <ul class="titles">
        <li><a href="./indexProj.php" id="logo"><img src="../assets\images/newLogo.jpg" alt="logo icon"> </a></li>
        <li><a href="./lessonsProj.php" id="home"> <img src="../assets\images/HomeLogo.png" alt="home icon"> </a> </li>
        <li> <a href="./messages/introduction.php">Messages</a> </li>
        <li> <a href="./virtual community/introduction.php">Virtual Community</a> </li>
        <li> <a href="./emoji/introduction.php">Emoji</a> </li>
        <li> <a href="./video conferences/introduction.php">Video Conferences</a> </li>
        <li> <a href="./culture/introduction.php">Culture</a> </li>
        <li> <a href="./multilingualism/introduction.php">Multilingualism</a> </li>
        <?php
        include '../db/getting_info.php';
        if (isset($_COOKIE['Email']) && isActive($_COOKIE['Email']) && isAdmin(($_COOKIE['Email']))) { ?>
            <li id="commands">
                <a href="./admin/menu.php">Admin Commands</a>
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
        <li id="buttonLog"> <a href="./login_page.php?a=false">
                <?php echo $type; ?>
            </a> </li>
    </ul>
    <!-- The navigation bar for lessons -->
    <ul class="lessons">
        <li class="titleLesson">
            <?php include_once '../db/getting_info.php';
            echo getNameCategory($id); ?>
        </li>
        <?php
        if ($lessons != null) {
            foreach ($lessons as $lesson) {
                $link = "./lesson.php?id=" . $id . "&id_les=";
                if (getIdLesson($id, $lesson[2]) == $id_lesson) {
                    switch ($lesson[3]) {
                        case 'easy':
                            $span = '<span class="easy"> 🟢 </span>';
                            break;
                        case 'medium':
                            $span = '<span class="medium"> 🟡 </span>';
                            break;
                        case 'hard':
                            $span = '<span class="medium"> 🔴 </span>';
                            break;
                        default:
                            $span = "";
                    }
                    echo "<li><a href='" . $link . $lesson[1] . "' class='active'>" . $lesson[2] . $span . "</a></li>"; //mai incolo si cu span
                } else {
                    echo "<li><a href='" . $link . $lesson[1] . "'>" . $lesson[2] . "</a></li>";
                }
            }
        }
        ?>
    </ul>
    <!-- The content of this page -->
    <div class="pageContent">
        <?php
        if ($content == null) {
            echo "<br><br><h1> SORRY, but it has not any content available  </h1><br><br>";
            echo "<img src='https://media.tenor.com/Uz5iy1iEKAoAAAAM/shikimoris-not-just-cute-shikimori.gif' class='picturesLessons'>";
        } else {
            $counter = 0;
            foreach ($content[0][3] as $type) {
                if ($type == "title") {
                    echo "<h1>" . $content[0][2][$counter] . "</h1>";
                } else if ($type == "content") {
                    echo "<p>" . $content[0][2][$counter] . "</p>";
                } else if ($type == "image") {
                    echo "<img src='" . $content[0][2][$counter] . "' alt='The link is invalid' class='picturesLessons'>";
                } else if ($type == "question") {
                    break;
                }
                $counter = $counter + 1;
                if ($counter == 1) {
                    ?>
                    <h2 id="finished">
                        <script>
                            document.addEventListener("DOMContentLoaded", function () {
                                sendUsingAjax(-1);
                            });
                        </script>
                    </h2>
                    <?php
                }
            }
            ?>
            <h6>QUESTION</h6>
            <fieldset>
                <legend for="Q1">
                    <?php echo $content[0][2][$counter];
                    $counter = $counter + 1; ?>
                </legend>
                <?php
                $id = 1;
                for ($counter; $counter < count($content[0][2]); $counter = $counter + 1) {
                    if ($content[0][3][$counter] == "option") {
                        ?>
                        <div>
                            <input type="radio" id=<?php echo $id; ?> name="option" value="option" checked>
                            <label for="option">
                                <?php echo $content[0][2][$counter]; ?>
                            </label>
                        </div>
                        <?php
                        $id = $id + 1;
                    } else {
                        $answer = $content[0][2][$counter];
                    }
                }
                ?>
                <input type="hidden" id="ans" value=<?php echo $answer; ?>>
                <button type="button" onclick="sendUsingAjax(0)">Check Answer</button>
                <div id="answer"></div>
            </fieldset>
            <button class="completeLesson" onclick="checkAnswer(answeredCorrectly)">Complete Lesson</button>
        </div>
    <?php } ?>
    <script type="text/javascript">
        function myFunction(validUser) {
            if (validUser != 1) {
                var ans = document.getElementById("ans").value;
                if (document.getElementById(ans).checked) {
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