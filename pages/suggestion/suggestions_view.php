<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title> Emoji Tutorial </title>
    <link rel="stylesheet" href="../../styles/main_style.css" />
    <link rel="stylesheet" href="../../styles/lessons_style.css" />
    <link rel="stylesheet" href="../../styles/admin_style.css" />
    <script>
        function showDescriptions(category) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET","get_descriptions.php?q="+category,true);
            xmlhttp.send();
        }
    </script>
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

    <!-- The content of this page -->
    <div class="adminContent">
        <h1> Suggestion Page </h1>
        <p class="info"> If you want to search for a specific situation, please complete the following form:</p>
        <form action = "show_suggestion.php" method="post">
            <label> Choose in which category fits:</label>
            <select name="category" id="category" onchange="showDescriptions(this.value)"> 
                <?php
                    $i = 1;
                    foreach ($categories as $category) {
                        echo "<option value='$category'>$category</option>";
                        $i = $i + 1;
                    }
                ?>
            </select>
            <fieldset>
                <legend for="type"> What type of situation? </legend>
                <div>
                    <input type="radio" id="formal" name="type" value="formal" checked>
                    <label for="formal">formal</label>
                </div>
                <div>
                    <input type="radio" id="informal" name="type" value="informal">
                    <label for="informal">informal</label>
                </div>
            </fieldset>
            <fieldset>
                <legend>What words might describe it the best:</legend>
                <div id="txtHint"><b>Pick a category to see possible descriptions</b></div>
                
            </fieldset>
            <input type="submit" style="margin-left: 45%" value="Check Suggestion">
        </form>
    </div>
    <script>
        
    </script>
</body>

</html>