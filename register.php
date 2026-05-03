<?php
// register.php – Account registration page.
// Displays a registration form and creates a new user account on POST.
// Automatically logs the new user in and redirects to their panel on success.

session_start();

require "classes/utils.php";

// Already-logged-in users have no reason to be here.
if (isset($_SESSION["username"])) {
    header("Location: " . Utils::$projectFilePath . "/index.php");
    exit;
}

// $output holds any HTML error string returned by User::registerUser().
$output = "";

// Handle the form submission.
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require "classes/user.php";

    $output = User::registerUser();

    // An empty string means registration succeeded and the session was set.
    if (!$output) {
        header("Location: " . Utils::$projectFilePath . "/user-panel.php");
        exit;
    }
}

require "classes/components.php";

Components::pageHeader("Register", ["main"], []);

?>

<main class="page-wrapper page-content add-gap">

    <div class="introduction">
        <h1 class="heading">Register</h1>
    </div>

    <div class="contact-one">
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>" class="form">
            <label>Username</label>
            <input class="form-input" type="text" name="username" value="<?php

            // Re-populate the username field on a failed submission so the user
            // doesn't have to retype it.
            if (isset($_POST["username"])) {
                echo Utils::escape($_POST["username"]);
            }

            ?>">

            <label>Email address</label>
            <input class="form-input" type="email" name="email" value="<?php

            if (isset($_POST["email"])) {
                echo Utils::escape($_POST["email"]);
            }

            ?>">

            <label>Password</label>
            <input class="form-input" type="password" name="passwordOne">

            <label>Password (Try again)</label>
            <input class="form-input" type="password" name="passwordTwo">

            <input class="register-button button" type="submit" name="registerButton" value="Register account">

            <!-- Only render the error paragraphs when there is a message to show. -->
            <?php if ($output) echo $output; ?>
        </form>
    </div>
</main>

<?php

Components::pageFooter();

?>