<!-- Profile Page -->

<!DOCTYPE html>



<html>

<head>

    <!-- The Charset -->
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0" />

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

        <form class="profile-form" action="./profile_page_mv/updating.php" method="POST">

            <label for="first-name">First Name: </label>
            <input type="text" id="first-name" name="first-name" <?php if ($checkType['firstName']) {
                echo 'value="' . $info['firstName'] . '"';
            } else {
                echo 'placeholder="' . $info['firstName'] . '"';
            } ?>> <br />

            <label for="last-name">Last Name: </label>
            <input type="text" id="last-name" name="last-name" <?php if ($checkType['lastName']) {
                echo 'value="' . $info['lastName'] . '"';
            } else {
                echo 'placeholder="' . $info['lastName'] . '"';
            } ?>>

            <br />

            <label for="email">Email: </label>
            <input type="text" id="email" name="email" <?php if ($checkType['email']) {
                echo 'value="' . $info['email'] . '"';
            } else {
                echo 'placeholder="' . $info['email'] . '"';
            } ?>>

            <br />

            <label for="nationality">Nationality: </label>
            <input list="nationalities-list" id="nationality" name="nationality" <?php if ($checkType['nationality']) {
                echo 'value="' . $info['nationality'] . '"';
            } else {
                echo 'placeholder="' . $info['nationality'] . '"';
            } ?>>

            <datalist id="nationalities-list">
                <option value="Romanian">
                <option value="Hungarian">
                <option value="American">
                <option value="French">
                <option value="Other">
            </datalist>

            <br />

            <label for="country-of-residence">Country of Residence: </label>
            <input list="countries-list" id="country-of-residence" name="country-of-residence" <?php if ($checkType['countryResidence']) {
                echo 'value="' . $info['countryResidence'] . '"';
            } else {
                echo 'placeholder="' . $info['countryResidence'] . '"';
            } ?>>

            <datalist id="countries-list">
                <option value="Romania">
                <option value="Hungary">
                <option value="United States">
                <option value="France">
                <option value="Other">
            </datalist>

            <br />

            <label for="gender">Gender: </label>
            <input list="genders-list" id="gender" name="gender" <?php if ($checkType['gender']) {
                echo 'value="' . $info['gender'] . '"';
            } else {
                echo 'placeholder="' . $info['gender'] . '"';
            } ?>>

            <datalist id="genders-list">
                <option value="Male">
                <option value="Female">
            </datalist>

            <br />

            <label for="occupation">Occupation: </label>
            <input list="occupations-list" id="occupation" name="occupation" <?php if ($checkType['occupation']) {
                echo 'value="' . $info['occupation'] . '"';
            } else {
                echo 'placeholder="' . $info['occupation'] . '"';
            } ?>>

            <datalist id="occupations-list">
                <option value="Student">
                <option value="Employed">
                <option value="Unemployed">
                <option value="Other">
            </datalist>

            <br />

            <label for="social-status">Social Status: </label>
            <input list="social-statuses-list" id="social-status" name="social-status" <?php if ($checkType['socialStatus']) {
                echo 'value="' . $info['socialStatus'] . '"';
            } else {
                echo 'placeholder="' . $info['socialStatus'] . '"';
            } ?>>

            <datalist id="social-statuses-list">
                <option value="Lower Class">
                <option value="Middle Class">
                <option value="Upper Class">
            </datalist>

            <br />

            <label for="religion">Religion: </label>
            <input list="religions-list" id="religion" name="religion" <?php if ($checkType['religion']) {
                echo 'value="' . $info['religion'] . '"';
            } else {
                echo 'placeholder="' . $info['religion'] . '"';
            } ?>>

            <datalist id="religions-list">
                <option value="Christianity">
                <option value="Catholicism">
                <option value="Agnosticism">
                <option value="Atheism">
                <option value="Agnostic Atheism">
                <option value="Other">
            </datalist>

            <br />
            <p>
                <?php
                if (isset($_REQUEST['ok'])) {
                    $ok = $_GET['ok'];
                    if ($ok) {
                        echo 'The info got updated';
                    } else {
                        echo 'An error occurred';
                    }
                }
                ?>
            </p>
            <button type="submit">Save Details</button>
        </form>

    </section>

</body>

</html>