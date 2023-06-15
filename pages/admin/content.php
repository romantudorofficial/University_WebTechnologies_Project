<!DOCTYPE php>
<php>

    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0" />
        <title> Emoji Tutorial </title>
        <link rel="stylesheet" href="../../styles/main_style.css" />
        <link rel="stylesheet" href="../../styles/lessons_style.css" />
        <link rel="stylesheet" href="../../styles/admin_style.css" />
        <link rel="stylesheet" href="../../styles/newstyle.css">
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
            <h1> Management Page. Adding lesson content </h1>
            <p class="info"> If you want to add more elements, click on one of those buttons below. You can choose from
                2 types of elements: image or content.</p>
            <p class="info"> Every lesson will start with content. Images will be added later. Moreover ,
                the images will always be placed in the center. Images use URL/link to attach them.</p>
            <p class="info"> Every lesson will end with a question that is displayed this way: 1-4 options, and at the
                end which one
                of those (1-4) is the correct answer. You must write a number between 1 and 4.</p>
            <p class="info">You have got 10 times for adding a specific type of content: header & section OR image.</p>
            <p class="info">Remember: header & image URL = 100 characters at most ; section has a max of 500 characters.
            </p>
            <p class="info">YOU have to write at least in: a header section, a content section, the question, at least 2
                options and the answer.
            </p>
            <p class="info">The options must be different. You will receive an error if you do not respect these
                conditions.
            </p>
            <form action="" class="contentEditor" method="">
                <label for="title">Write the header:</label>
                <input name="title[]" class="title" maxlength="100"></input>
                <input type="hidden" name="elements[]" value="title" class="element">
                <label for="content">Write the content:</label>
                <textarea name="content[]" class="content" rows="10" cols="60" maxlength="1000"></textarea><br>
                <input type="hidden" name="elements[]" value="content" class="element">
                <label for="image">Paste the URL of the image:</label>
                <input name="image[]" class="image" id="image" maxlength="100"></input>
                <input type="hidden" name="elements[]" value="image" class="element">

                <div id="helper"></div>

                <!-- To select image or content -> then adding what is necesary-->
                <img class="adminPageIcons addMoreContent" src="../../assets/images/pen.png" onclick="addSection()">
                <img class="adminPageIcons addMoreImages" src="../../assets/images/picture.png" onclick="addImage()">
                <p id='msg'>10 times left</p>
                <br>

                <!-- FInal question-->
                <label for="question">Write the final question:</label>
                <input name="question" id="question" maxlength="100"></input>
                <input type="hidden" name="elements[]" value="question" class="element">
                <label for="options">Option 1:</label>
                <input name="options[]" class="option" maxlength="100"></input>
                <input type="hidden" name="elements[]" value="option" class="element">
                <label for="options">Option 2:</label>
                <input name="options[]" class="option" maxlength="100"></input>
                <input type="hidden" name="elements[]" value="option" class="element">
                <label for="options">Option 3:</label>
                <input name="options[]" class="option" maxlength="100"></input>
                <input type="hidden" name="elements[]" value="option" class="element">
                <label for="options">Option 4:</label>
                <input name="options[]" class="option" maxlength="100"></input>
                <input type="hidden" name="elements[]" value="option" class="element">
                <label for="answer">Correct Answer:</label>
                <input name="answer" id="answer" maxlength="100"></input>
                <input type="hidden" name="elements[]" value="answer" class="element">
                <br>
                <p id="error_type"> </p>
                <button class="backButton" type="button" onclick="postDataUsingAjax()">Add content</button>
                <button class="backButton"><a href="add.php">Back</a></button>
                <button class="backButton"><a href="menu.php">Admin Page</a></button>
            </form>
        </div>
        <script src="./content_all/jsFile_content.js"> </script>
    </body>

</php>