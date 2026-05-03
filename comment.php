<?php
// comment.php – Admin comments management page.
// Lists every comment submitted to the site. Admins can reply to or delete
// any comment from this page. Non-admins and guests are redirected away.

session_start();

require "classes/components.php";
require "classes/comments.php";

// Only logged-in users can access this page.
if (!isset($_SESSION["username"])) {
    header("Location: " . Utils::$projectFilePath . "/login.php");
    exit;
}

// Only admins can access this page; regular users are sent to the home page.
if (!isset($_SESSION["is_admin"]) || !$_SESSION["is_admin"]) {
    header("Location: " . Utils::$projectFilePath . "/index.php");
    exit;
}

// $message holds a success or error string shown after a form action.
$message = "";

// Handle admin actions submitted via the comment action forms.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Delete action: triggered when the admin submits the delete form.
    if (isset($_POST['delete_comment_id']) && isset($_SESSION['is_admin']) && $_SESSION['is_admin']) {
        $commentId = intval($_POST['delete_comment_id']);
        Comments::deleteComment($commentId);
        $message = "<p class='success'>Comment deleted successfully.</p>";
    }

    // Reply action: triggered when the admin submits a reply form.
    if (isset($_POST['reply_comment_id']) && isset($_SESSION['is_admin']) && $_SESSION['is_admin']) {
        $commentId = intval($_POST['reply_comment_id']);
        $replyText = trim($_POST['admin_reply'] ?? '');
        if ($replyText !== '') {
            Comments::replyComment($commentId, $replyText);
            $message = "<p class='success'>Admin reply saved successfully.</p>";
        } else {
            $message = "<p class='error'>Reply text cannot be empty.</p>";
        }
    }
}

Components::pageHeader("Comments", ["main"], []);

// Fetch every comment ordered newest-first.
$comments = Comments::getAllComments(SQL::$getAllComments);
$heading = "All Comments";
?>

<!-- Introduction section with dynamic heading -->
<div class="introduction">
    <h1 class="heading"><?php echo $heading; ?></h1>

    <!-- Show message if there is one (success or error) -->
    <?php if (!empty($message)): ?>
        <div class="message" style="padding: 10px; margin: 10px 0; border-radius: 4px; <?php echo strpos($message, 'error') === false ? 'background-color: #d4edda; color: #155724;' : 'background-color: #f8d7da; color: #721c24;'; ?>">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>

    <!-- Welcome message about the guild -->
    <p>
        Welcome to the Ascension, a guild and raiding team in the game World of Warcraft, we work primarily on
        the Terokkar EU server, we are currently welcoming all players new and old to join us in our community,
        if you are looking for a social and casual team to get started with how the raids work then we are the
        team for you, we currently have two raid leaders overseeing two teams both working though Normal
        difficulty and working their way to Heroic with the hope of gaining the "Ahead of the Curve" achievment,
        please feel free to have a look at our <a href="guides.html">raid guides</a>, <a href="loot.html">loot tables</a> and <a href="events.html">events</a>, please also
        <a href="signup.html">sign up</a> with our guild or raid teams, and if you have any questions then feel free to leave a message!
    </p>

</div>

<?php
// Display all the retrieved comments
Comments::displayAllComments($comments);
// Display the page footer
Components::pageFooter();
?>