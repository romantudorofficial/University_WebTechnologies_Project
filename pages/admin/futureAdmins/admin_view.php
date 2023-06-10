<!DOCTYPE php>
<php>

    <head>
        <meta charset="UTF-8" />
        <title> Emoji Tutorial </title>
        <link rel="stylesheet" href="../../../styles/main_style.css" />
        <link rel="stylesheet" href="../../../styles/lessons_style.css" />
        <link rel="stylesheet" href="../../../styles/admin_style.css" />
        <link rel="stylesheet" href="../../../styles/pictures_admin.css" />
    </head>

    <body>
        <!-- The main navigation bar -->
        <ul class="titles">
            <li><a href="../../indexProj.php" id="logo"><img src="../../../assets\images/newLogo.jpg" alt="logo icon">
                </a>
            </li>
            <li><a href="../../lessonsProj.php" id="home"> <img src="../../../assets\images/HomeLogo.png"
                        alt="home icon">
                </a> </li>
            <li> <a href="../../messages/introduction.php">Messages</a> </li>
            <li> <a href="../../virtual community/introduction.php">Virtual Community</a> </li>
            <li> <a href="../../emoji/introduction.php">Emoji</a> </li>
            <li> <a href="../../video conferences/introduction.php">Video Conferences</a> </li>
            <li> <a href="../../culture/introduction.php">Culture</a> </li>
            <li> <a href="../../multilingualism/introduction.php">Multilingualism</a> </li>
            <li>
                <a href="../../other.php" id="other">Other</a>
            </li>
            <!-- Commands for admin: php for making them appear for admins, until then invisible, in our case is admin -->
            <li id="commands">
                <a href="../../admin/menu.php" class="active">Admin Commands</a>
            </li>
            <!-- end admin -->
            <li id="buttonLog"> <a href="../../login_page.php?a=false"> Sign Out </a> </li>
        </ul>

        <!-- The content of this page -->
        <div class="adminContent">
            <h1> Management Page. Checking future admins </h1>
            <p class="info"> Here are the following candidates: </p>
            <br>
            <div id="theResult">
                <?php
                include '../../../db/getting_info.php';
                if ($futureAdmins != null) {
                    foreach ($futureAdmins as $checker) {
                        ?>
                        <p class="result">
                            <?php echo $checker['firstName'] . ' ' . $checker['lastName'] . ' , id: ' . getId($checker['email']) ?>
                        </p>
                        <a href="acceptin_removing.php?ok=1&e=<?php echo $checker['email'] ?>"><img
                                src="../../../assets\images/img_accept.png" class="imagesAcc" alt="img_accept"></a>
                        <a href="acceptin_removing.php?ok=0&e=<?php echo $checker['email'] ?>"><img
                                src="../../../assets\images/img_reject.png" class="imagesRej" alt="img_reject"></a>
                    <?php }
                }else{
                    echo '<p class="info"> There is none.</p> ';
                }
                ?>
            </div>
            <br>
            <button class="backButton"><a href="../menu.php">Back</a></button>
        </div>
    </body>

</php>