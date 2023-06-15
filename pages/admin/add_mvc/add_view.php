<!DOCTYPE php>
<php>

    <head>
        <meta charset="UTF-8" />
        <title> Emoji Tutorial </title>
        <link rel="stylesheet" href="../../styles/main_style.css" />
        <link rel="stylesheet" href="../../styles/lessons_style.css" />
        <link rel="stylesheet" href="../../styles/admin_style.css" />
    </head>

    <body>
        <!-- The main navigation bar -->
        <ul class="titles">
            <li><a href="../indexProj.php" id="logo"><img src="../../assets\images/newLogo.jpg" alt="logo icon"> </a>
            </li>
            <li><a href="../lessonsProj.php" id="home"> <img src="../../assets\images/HomeLogo.png" alt="home icon">
                </a> </li>
            <li> <a href="../messages/introduction.php">Messages</a> </li>
            <li> <a href="../virtual community/introduction.php">Virtual Community</a> </li>
            <li> <a href="../emoji/introduction.php">Emoji</a> </li>
            <li> <a href="../video conferences/introduction.php">Video Conferences</a> </li>
            <li> <a href="../culture/introduction.php">Culture</a> </li>
            <li> <a href="../multilingualism/introduction.php">Multilingualism</a> </li>
            <li>
                <a href="../other.php" id="other">Other</a>
            </li>
            <!-- Commands for admin: php for making them appear for admins, until then invisible, in our case is admin -->
            <li id="commands">
                <a href="../admin/menu.php" class="active">Admin Commands</a>
            </li>
            <!-- end admin -->
            <li id="buttonLog"> <a href="../login_page.php?a=false"> Sign Out </a> </li>
        </ul>

        <!-- Some warnings in case of something -->
        <?php
        $category = "";
        if (!empty($_REQUEST["cat"])) {
            $ok = $_GET["cat"];
            if ($ok) {
                $category = "The category already exists or is empty!";
            }
        }

        $lesson = "";
        if (!empty($_REQUEST["les"])) {
            $check = $_GET['les'];
            if ($check) {
                $lesson = "The lesson already exists or is empty!";
            }
        }
        ?>

        <!-- The content of this page -->
        <div class="adminContent">
            <h1> Management Page. Adding elements </h1>
            <p class="info"> If you want to add a category:</p>
            <form action="./categories/adding.php" method="post">
                <label for="category">Choose a category:</label>
                <input name="category" id="category"></input>
                <p>
                    <?php echo $category; ?>
                </p>
                <button type="submit">Add Category</button>
            </form>



            <p class="info"> If you want to add a lesson:</p>
            <form action="./lessons/adding.php" method="post">
                <label for="category">Choose a lesson:</label>
                <input name="lesson" id="lesson"></input>
                <label> for the category:</label>
                <select name="category" id="category">
                    <?php
                    foreach ($categories as $category) {
                        echo '<option name="category">' . $category . '</option>';
                    }
                    ?>
                </select>
                <label for="difficulty">of difficulty:</label>
                <select name="difficulty" id="difficulty">
                    <option name="difficulty">easy</option>
                    <option name="difficulty">medium</option>
                    <option name="difficulty">hard</option>
                </select>
                <p>
                    <?php echo $lesson; ?>
                </p>
                <br>
                <button type="submit">Add Lesson</button>
                <button class="backButton"><a href="menu.php">Back</a></button>
            </form>
        </div>
    </body>

</php>