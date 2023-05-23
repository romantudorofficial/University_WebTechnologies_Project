<!-- Profile Page -->

<!DOCTYPE html>



<html>

<head>

    <!-- The Charset -->
    <meta charset="UTF-8" />

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

            <div class="account-type">

                <label for="account-type-option">Account Type:</label>
                <br />

                <input type="radio" id="individual" name="account-type-option" value="individual" checked="checked" />
                <label for="individual">Individual</label>
                <br />

                <input type="radio" id="administrator" name="account-type-option" value="administrator" />
                <label for="administrator">Administrator</label>
                <br />

            </div>

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

            <input type="submit" value="Save Details" class="save-details-button" />

        </form>

    </section>

</body>

</html>