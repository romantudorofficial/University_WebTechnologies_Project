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
        <h1> Your suggestions: </h1>

        <?php
            if (isset($_POST['type'])) {
                $type = $_POST['type'];
            }

            if (isset($_POST['description'])) {
                $selectedDescriptions = $_POST['description'];
            }
            else {
                $selectedDescriptions = null;
            }

            $xmlDoc = new DOMDocument();
            $xmlDoc->load("suggestionsFile.xml");

            $mysql = connect();
            if ($selectedDescriptions == null) {
                echo "<h2 style='text-align: center'>You didn't select any suggestions!</h2>";
                return false;
            }
            else{
            foreach ($selectedDescriptions as $description) {
                echo '<h2 style="text-align: center">' . $description . "</h2><br>";

                if (!($rez = $mysql->query("SELECT id_suggestion from suggestions WHERE description = '" . $description . "'"))) {
                    return false;
                }
                $inreg = $rez->fetch_assoc();
                $id_suggestion = $inreg["id_suggestion"];

                $x = $xmlDoc->documentElement;
                foreach ($x->childNodes AS $item1) {
                if ($item1->nodeName == "s" . $id_suggestion) {
                    $specificSuggestion = $item1->getElementsByTagName($type);
                    
                    foreach ($specificSuggestion as $item2) {
                        if ($item2->nodeName == $type) {
                            //print $item2->nodeValue . "<br>";
                            $infoByGender = $item2->getElementsByTagName("female");
                            
                            foreach ($infoByGender as $item3) {
                                print "<h3>For females: </h3>" . $item3->nodeValue . "<br><br>";
                            }

                            $infoByGender = $item2->getElementsByTagName("male");
                            
                            foreach ($infoByGender as $item4) {
                                print "<h3>For males: </h3>" . $item4->nodeValue . "<br><br>";
                            }
                        }
                    }
                    
                }
                
            }

            }}

            

            
            

            
        ?>
        
    </div>
    <script>
        
    </script>
</body>

</html>