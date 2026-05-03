<?php
// user-panel.php – Logged-in user's personal dashboard.
// Shows the user's account details and all comments they have submitted,
// with options to edit or delete each one.

session_start();

require "classes/utils.php";

// Guests cannot access this page.
if (!isset($_SESSION["username"])) {
    header("Location: " . Utils::$projectFilePath . "/login.php");
    exit;
}

require "classes/components.php";
require "classes/comments.php";

Components::pageHeader("User Panel", ["main"], []);

?>

<main class="page-wrapper page-content add-gap">

    <div class="introduction">
        <h1 class="heading">User Panel</h1>
    </div>

    <div class="contact-one">
        <!-- Display the session data set when the user logged in or registered. -->
        <p>Logged in as: <?php echo Utils::escape($_SESSION["username"]); ?></p>
        <p>Joined: <?php echo Utils::escape($_SESSION["date_joined"]); ?></p>
        <a href="logout.php" class="button">Logout</a>
    </div>

    <div class="introduction">
        <h2 class="heading">My Comments</h2>
        <p>Here you can view, edit or delete any comments you've made on the site.</p>


        <?php
        // Fetch only this user's comments so they see their own applications.
        $comments = Comments::getUserComments($_SESSION["user_id"]);
        if (empty($comments)) {
            // Show the fallback message if the user hasn't submitted anything yet.
            require "components/no-comments-found.php";
        } else {
            Comments::displayAllComments($comments);
        }
        ?>
    </div>

</main>

<?php

Components::pageFooter();

?>