<?php
// login.php – Login page.
// Displays a login form and processes credentials on POST.
// Redirects an already-logged-in user away from this page.

session_start();

require "classes/utils.php";

// Send logged-in users straight to the home page.
if (isset($_SESSION["username"])) {
    header("Location: " . Utils::$projectFilePath . "/index.php");
    exit;
}

// $output holds any HTML error message returned by User::loginUser().
$output = "";

// Handle the form submission.
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require "classes/user.php";

    $output = User::loginUser($_POST["username"], $_POST["password"]);

    // An empty string from loginUser() means success — redirect to home.
    if (!$output) {
        header("Location: " . Utils::$projectFilePath . "/index.php");
        exit;
    }
}

require "classes/components.php";

Components::pageHeader("Login", ["main"], []);

?>

<main class="page-wrapper page-content add-gap">

    <div class="introduction">
        <h1 class="heading">Login</h1>
    </div>


    <div class="contact-one">
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>" class="form">
            <label>Username</label>
            <input class ="form-input" type="text" name="username" value="<?php

            // Re-populate the username field after a failed login attempt
            // so the user doesn't have to retype it.
            if (isset($_POST["username"])) {
                echo Utils::escape($_POST["username"]);
            }

            ?>">

            <label>Password</label>
            <input class ="form-input" type="password" name="password">

            <input class="submit-button button" type="submit" name="loginButton" value="Log in">

            <!-- Only render the error paragraph when there is a message to show. -->
            <?php if ($output)
                echo $output; ?>
        </form>
    </div>
</main>
<?php

Components::pageFooter();

?>