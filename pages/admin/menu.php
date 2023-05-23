<!DOCTYPE html>
<html>

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
        <li><a href="../indexProj.php" id="logo"><img src="../../assets\images/newLogo.jpg" alt="logo icon"> </a></li>
        <li><a href="../lessonsProj.php" id="home"> <img src="../../assets\images/HomeLogo.png" alt="home icon"> </a>
        </li>
        <li> <a href="../messages/introduction.php">Messages</a> </li>
        <li> <a href="../virtual community/introduction.php">Virtual Community</a> </li>
        <li> <a href="../emoji/introduction.php">Emoji</a> </li>
        <li> <a href="../video conferences/introduction.php">Video Conferences</a> </li>
        <li> <a href="../culture/introduction.php">Culture</a> </li>
        <li> <a href="../multilingualism/introduction.php">Multilingualism</a> </li>
        <li>
            <div id="other">Other</div>
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
        <h1> Management Page </h1>
        <p class="info"> If you want to add a category or a new lesson to an exitent category please click the following
            button:</p>
        <button><a href="add.php">ADD</a></button>
        <p class="info"> If you want to delete a category or a lesson to an exitent category please click the following
            button:</p>
        <button><a href="delete.php">DELETE</a></button>
    </div>
</body>

</html>