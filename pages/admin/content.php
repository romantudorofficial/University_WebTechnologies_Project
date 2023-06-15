<!DOCTYPE php>
<php>

    <head>
        <meta charset="UTF-8" />
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

        <?php
        $error_type = "";
        if (!empty($_REQUEST["error"])) {
            $ok = $_GET["error"]; // -1 -not completed all required spaces , 
            // -2 -identical options , 
            // -3 -the answer does not match the number of options, 
            // 0 - the file got sent blank , 1 - correct
            if ($ok == 0) {
                $error_type = "Do not send the file blank!";
            } else if ($ok == -1) {
                $error_type = "You did not complete the required fields!";
            } else if ($ok == -2) {
                $error_type = "You have identical options!";
            } else if ($ok == -3) {
                $error_type = "Your answer does not match the number of options!";
            } else {
                $error_type = "The lesson got saved!";
            }
        }

        $id = $_GET["id"];
        ?>

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
            <form action=<?php echo "./content_all/check_data.php?id=" . $id ?> class="contentEditor" method="post">
                <label for="title">Write the header:</label>
                <input name="title[]" id="title" maxlength="100"></input>
                <input type="hidden" name="elements[]" value="title">
                <label for="content">Write the content:</label>
                <textarea name="content[]" rows="10" cols="60" maxlength="1000"></textarea><br>
                <input type="hidden" name="elements[]" value="content">
                <label for="image">Paste the URL of the image:</label>
                <input name="image[]" id="image" maxlength="100"></input>
                <input type="hidden" name="elements[]" value="image">

                <div id="helper"></div>

                <!-- To select image or content -> then adding what is necesary-->
                <img class="adminPageIcons addMoreContent" src="../../assets/images/pen.png" onclick="addSection()">
                <img class="adminPageIcons addMoreImages" src="../../assets/images/picture.png" onclick="addImage()">
                <p id='msg'>10 times left</p>
                <br>

                <!-- FInal question-->
                <label for="question">Write the final question:</label>
                <input name="question" maxlength="100"></input>
                <input type="hidden" name="elements[]" value="question">
                <label for="options">Option 1:</label>
                <input name="options[]" maxlength="100"></input>
                <input type="hidden" name="elements[]" value="option">
                <label for="options">Option 2:</label>
                <input name="options[]" maxlength="100"></input>
                <input type="hidden" name="elements[]" value="option">
                <label for="options">Option 3:</label>
                <input name="options[]" maxlength="100"></input>
                <input type="hidden" name="elements[]" value="option">
                <label for="options">Option 4:</label>
                <input name="options[]" maxlength="100"></input>
                <input type="hidden" name="elements[]" value="option">
                <label for="answer">Correct Answer:</label>
                <input name="answer" maxlength="100"></input>
                <input type="hidden" name="elements[]" value="answer">
                <br>
                <p>
                    <?php echo $error_type; ?>
                </p>
                <button class="backButton" type="submit">Add content</button>
                <button class="backButton"><a href="add.php">Back</a></button>
                <button class="backButton"><a href="menu.php">Admin Page</a></button>
            </form>
        </div>
        <script>
            var x = 10;
            function addImage() {
                if (x) {
                    var div = document.getElementById("helper");
                    const node1 = document.createElement("label");
                    const textInput = document.createTextNode("Paste the URL below:");
                    node1.appendChild(textInput);
                    const node2 = document.createElement("input");
                    node2.setAttribute("name", "image[]");
                    node2.setAttribute("maxlength", "100");
                    const node3 = document.createElement("br");

                    //elements for order
                    const node4 = document.createElement("input");
                    node4.setAttribute("type", "hidden");
                    node4.setAttribute("name", "elements[]");
                    node4.setAttribute("value", "image");


                    div.appendChild(node1).appendChild(node3);
                    div.appendChild(node2).appendChild(node3);
                    div.appendChild(node4);
                    x--;
                    var p = document.getElementById('msg');
                    if (!x) {
                        p.style.color = "red";
                        p.innerHTML = "No more times left";
                    }
                    else {
                        p.innerHTML = x + " times left";
                    }
                }

            }
            function addSection() {
                if (x) {
                    var div = document.getElementById("helper");
                    const node1 = document.createElement("label");
                    const textInput = document.createTextNode("Write the header:");
                    node1.appendChild(textInput);
                    const node2 = document.createElement("input");
                    node2.setAttribute("name", "title[]");
                    node2.setAttribute("maxlength", "100");
                    const node3 = document.createElement("label");
                    const textInput3 = document.createTextNode("Write the content:");
                    node3.appendChild(textInput3);
                    const node4 = document.createElement("textarea");
                    node4.setAttribute("cols", "60");
                    node4.setAttribute("rows", "10");
                    node4.setAttribute("maxlength", "1000");
                    node4.setAttribute("name", "content[]");
                    const node5 = document.createElement("br");

                    //elements for order
                    const node6 = document.createElement("input");
                    node6.setAttribute("type", "hidden");
                    node6.setAttribute("name", "elements[]");
                    node6.setAttribute("value", "title");
                    const node7 = document.createElement("input");
                    node7.setAttribute("type", "hidden");
                    node7.setAttribute("name", "elements[]");
                    node7.setAttribute("value", "content");


                    div.appendChild(node1).appendChild(node5);
                    div.appendChild(node2).appendChild(node5);
                    div.appendChild(node3).appendChild(node5);
                    div.appendChild(node4).appendChild(node5);
                    div.appendChild(node6);
                    div.appendChild(node7);
                    x--;
                    var p = document.getElementById('msg');
                    if (!x) {
                        p.style.color = "red";
                        p.innerHTML = "No more times left";
                    }
                    else {
                        p.innerHTML = x + " times left";
                    }
                }
            }
        </script>
    </body>

</php>