<!-- Profile Page -->

<!DOCTYPE html>



<html>

<head>

    <!-- The Charset -->
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- The Title of the Page -->
    <title>My Profile</title>

    <!-- The Stylesheet for the Page -->
    <link rel="stylesheet" href="../styles/main_style.css" />
    <link rel="stylesheet" href="../styles/index_style.css" />
    <link rel="stylesheet" href="../styles/profile_page_style.css" />

</head>


<body>

    <header>

        <ul class="titles">

            <li>
                <a href="./indexProj.php" id="logo">
                    <img src="../assets\images/newLogo.jpg" alt="logo icon" />
                </a>
            </li>

            <li id="buttonLog">
                <a href="login_page.php?a=false">Sign Out</a>
            </li>

        </ul>

    </header>

    <section class="profile-container">

        <!-- The Title of the Page -->
        <h1 class="title" style="margin-top: 3.2em;">My Profile</h1>

        <form class="profile-form" method="POST">

            <label for="first-name">First Name: </label>
            <input type="text" id="first-name" name="first-name" placeholder="Tudor" />

            <br />

            <label for="last-name">Last Name: </label>
            <input type="text" id="last-name" name="last-name" placeholder="Gălățan" />

            <br />

            <label for="email">Email: </label>
            <input type="text" id="email" name="email" placeholder="tudorgalatan@gmail.com" />

            <br />

            <label for="nationality">Nationality: </label>
            <input list="nationalities-list" id="nationality" name="nationality" placeholder="Romanian" />

            <datalist id="nationalities-list">
                <option value="Romanian">
                <option value="Hungarian">
                <option value="American">
                <option value="French">
                <option value="Other">
            </datalist>

            <br />

            <label for="country-of-residence">Country of Residence: </label>
            <input list="countries-list" id="country-of-residence" name="country-of-residence" placeholder="Romania" />

            <datalist id="countries-list">
                <option value="Romania">
                <option value="Hungary">
                <option value="United States">
                <option value="France">
                <option value="Other">
            </datalist>

            <br />

            <label for="gender">Gender: </label>
            <input list="genders-list" id="gender" name="gender" placeholder="Male" />

            <datalist id="genders-list">
                <option value="Male">
                <option value="Female">
            </datalist>

            <br />

            <label for="occupation">Occupation: </label>
            <input list="occupations-list" id="occupation" name="occupation" placeholder="Student" />

            <datalist id="occupations-list">
                <option value="Student">
                <option value="Employed">
                <option value="Unemployed">
                <option value="Other">
            </datalist>

            <br />

            <label for="social-status">Social Status: </label>
            <input list="social-statuses-list" id="social-status" name="social-status" placeholder="Middle Class" />

            <datalist id="social-statuses-list">
                <option value="Lower Class">
                <option value="Middle Class">
                <option value="Upper Class">
            </datalist>

            <br />

            <label for="religion">Religion: </label>
            <input list="religions-list" id="religion" name="religion" placeholder="Agnostic Atheism" />

            <datalist id="religions-list">
                <option value="Christianity">
                <option value="Catholicism">
                <option value="Agnosticism">
                <option value="Atheism">
                <option value="Agnostic Atheism">
                <option value="Other">
            </datalist>

            <br />

            <input type="submit" name = "submit" value="Save Details" class="save-details-button" />

        </form>

    </section>

</body>

</html>



<?php

    ### Update the profile information.

    include_once '../db/getting_info.php';
    include_once '../db/adding_data.php';
    
    $mysql = connect();

    $initialEmail = 'tudorgalatan@gmail.com';

    $userId = getId($initialEmail);

    # Get the initial data from the database.

    $firstNameDB = $mysql->query('SELECT firstName FROM users WHERE id_user LIKE "'.$userId.'"');
    $lastNameDB = $mysql->query('SELECT lastName FROM users WHERE id_user LIKE "'.$userId.'"');
    $emailDB = $mysql->query('SELECT email FROM users WHERE id_user LIKE "'.$userId.'"');
    $nationalityDB = $mysql->query('SELECT nationality FROM user_info WHERE id_user LIKE "'.$userId.'"');
    $countryOfResidenceDB = $mysql->query('SELECT countryResidence FROM user_info WHERE id_user LIKE "'.$userId.'"');
    $genderDB = $mysql->query('SELECT gender FROM user_info WHERE id_user LIKE "'.$userId.'"');
    $occupationDB = $mysql->query('SELECT occupation FROM user_info WHERE id_user LIKE "'.$userId.'"');
    $socialStatusDB = $mysql->query('SELECT socialStatus FROM user_info WHERE id_user LIKE "'.$userId.'"');
    $religionDB = $mysql->query('SELECT religion FROM user_info WHERE id_user LIKE "'.$userId.'"');

    $firstNameDB = mysqli_fetch_array($firstNameDB)[0];
    $lastNameDB = mysqli_fetch_array($lastNameDB)[0];
    $emailDB = mysqli_fetch_array($emailDB)[0];
    $nationalityDB = mysqli_fetch_array($nationalityDB)[0];
    $countryOfResidenceDB = mysqli_fetch_array($countryOfResidenceDB)[0];
    $genderDB = mysqli_fetch_array($genderDB)[0];
    $occupationDB = mysqli_fetch_array($occupationDB)[0];
    $socialStatusDB = mysqli_fetch_array($socialStatusDB)[0];
    $religionDB = mysqli_fetch_array($religionDB)[0];


    if (isset($_POST['submit']))
    {
        # Get the input from the user.

        $firstName = $_POST['first-name'];
        $lastName = $_POST['last-name'];
        $email = $_POST['email'];
        $nationality = $_POST['nationality'];
        $countryOfResidence = $_POST['country-of-residence'];
        $gender = $_POST['gender'];
        $occupation = $_POST['occupation'];
        $socialStatus = $_POST['social-status'];
        $religion = $_POST['religion'];


        # Keep only the new changes.

        if ($firstName == null)
            $firstName = $firstNameDB;

        if ($lastName == null)
            $lastName = $lastNameDB;

        if ($email == null)
            $email = $emailDB;

        if ($nationality == null)
            $nationality = $nationalityDB;

        if ($countryOfResidence == null)
            $countryOfResidence = $countryOfResidenceDB;

        if ($gender == null)
            $gender = $genderDB;

        if ($occupation == null)
            $occupation = $occupationDB;

        if ($socialStatus == null)
            $socialStatus = $socialStatusDB;

        if ($religion == null)
            $religion = $religionDB;


        # Update the database with the new data.
        
        if (!updateUserBasicInformation($mysql, $initialEmail, $email, $firstName, $lastName))
            die("Error - Update User's Basic Information");
        else
            $initialEmail = $email;

        if (!updateUserExtendedInformation($mysql, $initialEmail, $nationality, $countryOfResidence, $gender, $occupation, $socialStatus, $religion))
            die("Error - Update User's Extended Information");
    }

?>



<?php
    
    ### Display the data of the fields in the database.


    # Get the data from the database.

    include_once '../db/connection.php';
    include_once '../db/getting_info.php';

    $database = connect();

    $email = 'tudorgalatan@gmail.com';      # ?
    $userId = getId($email);

    $firstName = $database->query('SELECT firstName FROM users WHERE id_user LIKE "'.$userId.'"');
    $lastName = $database->query('SELECT lastName FROM users WHERE id_user LIKE "'.$userId.'"');
    $email = $database->query('SELECT email FROM users WHERE id_user LIKE "'.$userId.'"');
    $nationality = $database->query('SELECT nationality FROM user_info WHERE id_user LIKE "'.$userId.'"');
    $countryOfResidence = $database->query('SELECT countryResidence FROM user_info WHERE id_user LIKE "'.$userId.'"');
    $gender = $database->query('SELECT gender FROM user_info WHERE id_user LIKE "'.$userId.'"');
    $occupation = $database->query('SELECT occupation FROM user_info WHERE id_user LIKE "'.$userId.'"');
    $socialStatus = $database->query('SELECT socialStatus FROM user_info WHERE id_user LIKE "'.$userId.'"');
    $religion = $database->query('SELECT religion FROM user_info WHERE id_user LIKE "'.$userId.'"');


    # Display the data from the database on the page.

    
?>