<!-- Login Page -->

<!DOCTYPE html>



<html>

    <head>

        <!-- The Charset -->
        <meta charset = "UTF-8" />

        <!-- The Title of the Page -->
        <title>Temporary Page</title>

        <!-- The Stylesheet for the Page -->
        <link rel = "stylesheet" href = "../styles/main_style.css" />
        <link rel = "stylesheet" href = "../styles/index_style.css" />
        <link rel = "stylesheet" href = "../styles/login_page_style.css" />

        <?php
	        include '../services/logout.php';
	        $email = $_COOKIE["Email"];
            if(isset($_GET['a'])){
                logout($email);
            }
	    ?>

    </head>


    <body>

        <header>

            <ul class = "titles">

                <li>
                    <a href = "./indexProj.php" id = "logo">
                        <img src = "../assets\images/newLogo.jpg" alt = "logo icon" />
                    </a>
                </li>
                 
            </ul>
            
        </header>

        <section class = "login-container">

        <?php
        if(!empty($_REQUEST["msg"])){
            echo '<p style="color:blue;"> Congratulations! You have got registered! </p>';
            echo '<p style="color:blue;"> Now try to log in! </p>';
        }
        ?>
            <!-- The Title of the Page -->
            <h1 class = "title">Login</h1>

            <form action="../services/account_checker.php" class = "login-form" method = "POST">

                <label for = "email">Email: </label>
                <input type = "text" id = "email" name = "email" />
                
                <br />
    
                <label for = "password">Password: </label>
                <input type = "password" id = "password" name = "password" />
    
                <br />
    
                <input type = "submit" value = "Login" class = "login-button">
    
            </form>

            <?php
                if(!empty($_REQUEST["error"])){
                    $error = $_REQUEST["error"];
                    if($error == 1){
                        echo '<p style="color:red;"> Please check the error: write the email or the password! </p>';
                    }
                    else{
                        echo '<p style="color:red;"> Please check the error: wrong email or wrong password! </p>';
                    }
                }
            ?>

            <p>
                Don't have an account yet? 
                <a href = "./create_account_page.php">Create one right now!</a>
            </p>

        </section>


    </body>

</html>