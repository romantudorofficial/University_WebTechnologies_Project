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

        <!-- The content of this page -->
        <div class="adminContent">
            <h1> Management Page. Adding lesson content </h1>
            <p class="info"> If you want to add more elements, click on one of those buttons below. You can choose from
                2 types of elements: image or content.</p>
            <p class="info"> Every lesson will start with content. Images will be added later. Moreover ,
                the images will always be placed in the center. Images use URL/link to attach them.</p>
            <p class="info"> Every lesson will end with a question that is displayed this way: 1-4 options, and at the end which one
                of those (1-4) is the correct answer.</p>
            <form action="" class="contentEditor">
                <label for="title">Write the header:</label>
                <input name="title" id="title"></input>
                <label for="content">Write the content:</label>
                <textarea name="content" rows="10" cols="60" maxlength="1000"></textarea><br>

                <div id="helper"></div>

                <!-- To select image or content -> then adding what is necesary-->
                <img class="adminPageIcons addMoreContent" src="../../assets/images/pen.png" onclick="addSection()">
                <img class="adminPageIcons addMoreImages" src="../../assets/images/picture.png" onclick="addImage()">

                <!-- FInal question-->
                <label for="question">Write the final question:</label>
                <input name="question"></input>
                <label for="options">Option 1:</label>
                <input name="options"></input>
                <label for="options">Option 2:</label>
                <input name="options"></input>
                <label for="options">Option 3:</label>
                <input name="options"></input>
                <label for="options">Option 4:</label>
                <input name="options"></input>
                <label for="answer">Correct Answer:</label>
                <input name="answer"></input>
            </form>
            <button class="backButton" type="submit">Add content</button>
            <button class="backButton"><a href="add.php">Back</a></button>
            <button class="backButton"><a href="menu.php">Admin Page</a></button>
        </div>
        <script>
            function addImage() {
                var div = document.getElementById("helper");
                const node1 = document.createElement("label");
                const textInput = document.createTextNode("Paste the URL below:");
                node1.appendChild(textInput);
                const node2 = document.createElement("input");
                node2.setAttribute("name", "image");
                const node3 = document.createElement("br");
                div.appendChild(node1).appendChild(node3);
                div.appendChild(node2).appendChild(node3);
            }
            function addSection() {
                var div = document.getElementById("helper");
                const node1 = document.createElement("label");
                const textInput = document.createTextNode("Write the header:");
                node1.appendChild(textInput);
                const node2 = document.createElement("input");
                node2.setAttribute("name", "title");
                const node3 = document.createElement("label");
                const textInput3 = document.createTextNode("Write the content:");
                node3.appendChild(textInput3);
                const node4 = document.createElement("textarea");
                node4.setAttribute("cols", "60");
                node4.setAttribute("rows", "10");
                node4.setAttribute("maxlength", "1000");
                const node5 = document.createElement("br");
                div.appendChild(node1).appendChild(node5);
                div.appendChild(node2).appendChild(node5);
                div.appendChild(node3).appendChild(node5);
                div.appendChild(node4).appendChild(node5);
            }
        </script>
    </body>

</php>