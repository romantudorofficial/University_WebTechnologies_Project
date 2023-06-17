<!DOCTYPE php>
<php>

    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0" />
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

        <!-- The content of this page -->
        <div class="adminContent">
            <h1> Management Page. Deleting elemenets </h1>
            <p class="info"> If you want to delete a category:</p>
            <form action="./categories/deleting.php" method="post">
                <label for="category">Choose a category:</label>
                <select name="category" id="category">
                    <?php
                    foreach ($categories as $category) {
                        echo '<option name="category">' . $category . '</option>';
                    }
                    ?>
                </select>
                <br>
                <button type="submit">Delete Category</button>
            </form>


            <p class="info"> If you want to delete a lesson:</p>
            <form name="categoryLesson" action="./lessons/deleting.php" method="post">
                <label for="category">Choose this category's lesson:</label>
                <select name="category" onchange="callShowLessons()">
                    <?php
                    foreach ($categories as $category) {
                        echo '<option name="category">' . $category . '</option>';
                    }
                    ?>
                </select>
                <select name="lesson" id="lesson">
                    <?php
                    foreach ($lessons as $lesson) {
                        echo '<option name="lesson">' . $lesson . '</option>';
                    }
                    ?>
                </select>
                <br>
                <button type="submit">Deleting Elements</button>
            </form>



            <p class="info"> If you want to delete a suggestion:</p>
            <form name="categorySuggestion" action="./suggestions/addingSuggestion.php" method="POST">
                <label for="category">Choose the category's suggestion:</label>
                <select name="category_sug" onchange="callShowSuggestions()">
                    <?php
                    foreach ($categories_all as $category) {
                        echo '<option name="category">' . $category . '</option>';
                    }
                    ?>
                </select>
                <select name="suggestion" id="suggestion">
                    <?php
                    foreach ($suggestions as $suggestion) {
                        echo '<option value="suggestion">' . $suggestion . '</option>';
                    }
                    ?>
                </select>
                <br>
                <button type="submit">Delete Suggestion</button>
                <button class="backButton"><a href="menu.php">Back</a></button>
            </form>
        </div>
    </body>
    <script src="./delete_mvc/ajaxFunction.js"></script>
    <script src="./delete_mvc/forSuggestions.js"></script>
</php>