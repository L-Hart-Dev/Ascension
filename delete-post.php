<?php
// delete-post.php – Comment deletion confirmation page.
// Loads the comment identified by ?id=, checks the user has permission to
// delete it, then shows a confirmation prompt on GET and performs the delete
// on POST before redirecting back to the home page.

session_start();

require_once "classes/utils.php";

// Only logged-in users can delete comments.
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// A valid ?id= parameter is required to know which comment to delete.
if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: index.php");
    exit();
}

// Load the comment to verify it exists and check permissions.
require "classes/comments.php";

$post = Comments::getSingleComment($_GET['id']);

// Redirect if the comment doesn't exist.
if (empty($post)) {
    header("Location: index.php");
    exit();
// Redirect if the session user is neither the owner nor an admin.
} else if ($post['user_id'] != $_SESSION['user_id'] && empty($_SESSION['is_admin'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // POST confirms the deletion — delete the row and return to home.
    Comments::deleteComment($_GET['id']);
    header('Location: user-panel.php');
    exit();
}

// Escape the character name for safe display in the page heading.
$title = Utils::escape($post['character_name']);

require "classes/components.php";

Components::pageHeader("Home", ["main"], []);

?>

<h2 class="heading">Delete Comment: <?php echo $title; ?></h2>

<div class="btn-group">
    <form method="POST" action="delete-post.php?id=<?php echo $_GET['id']; ?>" class="introduction">
        <p>Are you sure you want to delete this comment?</p>
        <button type="submit" >Delete</button>
        <button type="submit">Cancel</button>
    </form>
</div>
<?php
Components::pageFooter();
?>