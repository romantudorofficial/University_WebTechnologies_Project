<!-- Create Account Page -->

<!DOCTYPE html>



<html>

    <head>

        <!-- The Charset -->
        <meta charset = "UTF-8" />

        <!-- The Title of the Page -->
        <title>Create Account</title>

        <!-- The Stylesheet for the Page -->
        <link rel = "stylesheet" href = "../styles/main_style.css" />
        <link rel = "stylesheet" href = "../styles/index_style.css" />
        <link rel = "stylesheet" href = "../styles/create_account_page_style.css" />

    </head>


    <body>

        <header>

            <ul class = "titles">

                <li>
                    <a href = "./indexProj.php" id = "logo">
                        <img src = "../assets\images/newLogo.jpg" alt = "logo icon" />
                    </a>
                </li>

                <li id = "buttonLog">
                    <a href = "login_page.php">Sign Out</a>
                </li>
                 
            </ul>
            
        </header>

        <section class = "create-account-container">

            <!-- The Title of the Page -->
            <h1 class = "title">Create Account</h1>

            <form action="../services/creating_account.php" class = "create-account-form" method = "POST">

                <label for = "first-name">First Name: </label>
                <input type = "text" id = "first-name" name = "first-name" />
                
                <br />

                <label for = "last-name">Last Name: </label>
                <input type = "text" id = "last-name" name = "last-name" />
                
                <br />

                <label for = "email">Email: </label>
                <input type = "text" id = "email" name = "email" />
                
                <br />
    
                <label for = "password">Password: </label>
                <input type = "password" id = "password" name = "password" />
    
                <br />

                <div class = "account-type">

                    <label for = "account-type-option">Account Type:</label>
                    <br />

                    <input type = "radio" id = "individual" name = "account-type-option" value = "individual" />
                    <label for = "individual">Individual</label>
                    <br />

                    <input type = "radio" id = "administrator" name = "account-type-option" value = "administrator" />
                    <label for = "administrator">Administrator</label>
                    <br />

                </div>
    
                <br />
    
                <input type = "submit" value = "Create Account" class = "create-account-button">
    
            </form>

            <?php
                if(!empty($_REQUEST["error"])){
                    $error = $_REQUEST["error"];
                    if($error == 1){
                        echo '<p style="color:red;"> Please check the error: write the email, the first name , the last name or the password! Or check an option! </p>';
                    }
                    else{
                        echo '<p style="color:red;"> Please check the error: the email already exists! </p>';
                    }
                }
            ?>

        </section>


    </body>

</html>