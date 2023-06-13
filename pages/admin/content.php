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

        <!-- The content of this page -->
        <div class="adminContent">
            <h1> Management Page. Adding lesson content </h1>
            <p class="info"> If you want to add more elements, click on one of those buttons below. You can choose from
                3 types of elements: question, image or content.</p>
            <p class="info"> Every lesson will start with content. Images and questions will be added later. Moreover ,
                the images will always be placed in the center.</p>
            <form action="" class="contentEditor">
                <label for="categoryName">Write the whole category name:</label>
                <input name="categoryName" id="categoryName"></input>
                <label for="title">Write the title:</label>
                <input name="title" id="title"></input>
                <label for="content">Write the content:</label>
                <textarea name="content" rows="10" cols="60"></textarea><br>

                <div class="helper"></div>

                <!-- To select questions or image or content -> then adding what is necesary-->
                <img class="adminPageIcons addMoreContent" src="../../assets/images/pen.png" onclick="addImage()">
                <img class="adminPageIcons addMoreImages" src="../../assets/images/picture.png">
            </form>
            <button type="submit">Add content</button>
            <button class="backButton"><a href="add.php">Back</a></button>
            <button class="backButton"><a href="menu.php">Admin Page</a></button>
        </div>
        <script>
            function addImage(){
                var div =document.getElementById("helper");
                alert("intra");
                const node1 =document.createElement("label");
                const text =document.createTextNode("Paste the URL below:");
                node1.appendChild(text);
                div.appendChild(node1);
            }
        </script>
    </body>

</php>