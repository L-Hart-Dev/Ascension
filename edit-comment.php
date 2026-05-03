<?php
// edit-comment.php – Edit an existing comment.
// Loads the comment identified by the ?id= query parameter, verifies that the
// logged-in user owns it, and then either shows the pre-filled edit form (GET)
// or processes the submitted changes (POST).

session_start();

require_once "classes/utils.php";

// Only logged-in users can edit comments.
if (!isset($_SESSION["user_id"])) {
    header("Location: " . Utils::$projectFilePath . "/login.php");
    exit;
}

// A valid ?id= parameter is required to know which comment to edit.
if (!isset($_GET["id"]) || empty($_GET["id"])) {
    header("Location: " . Utils::$projectFilePath . "/user-panel.php");
    exit;
}

require_once "classes/comments.php";
require_once "classes/components.php";

$commentId = (int) $_GET["id"];
$comment = Comments::getSingleComment($commentId);

// Redirect if the comment doesn't exist or belongs to a different user.
// This prevents users from editing other people's comments by guessing IDs.
if (empty($comment) || (int) $comment["user_id"] !== (int) $_SESSION["user_id"]) {
    header("Location: " . Utils::$projectFilePath . "/user-panel.php");
    exit;
}

// $message holds any validation error text shown above the form.
$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Run server-side validation before touching the database.
    $message = Comments::validateComment();

    if ($message === "") {
        // Validation passed — persist the changes then return to the user panel.
        Comments::updateComment(
            $commentId,
            trim($_POST["character_name"]),
            trim($_POST["battlenet_id"]),
            trim($_POST["class"]),
            trim($_POST["specialization"]),
            trim($_POST["additional_info"] ?? "")
        );

        header("Location: " . Utils::$projectFilePath . "/user-panel.php");
        exit;
    }

    // Validation failed — merge the submitted values back into $comment so the
    // form re-populates with what the user typed rather than the old DB values.
    $comment = array_merge($comment, [
        "character_name" => $_POST["character_name"],
        "battlenet_id"   => $_POST["battlenet_id"],
        "class"          => $_POST["class"],
        "specialization" => $_POST["specialization"],
        "additional_info" => $_POST["additional_info"] ?? ""
    ]);
}

// Escape each value before passing it to the template to prevent XSS.
$characterName  = Utils::escape($comment["character_name"]);
$battlenetId    = Utils::escape($comment["battlenet_id"]);
$class          = Utils::escape($comment["class"]);
$specialization = Utils::escape($comment["specialization"]);
$additionalInfo = Utils::escape($comment["additional_info"] ?? "");

Components::pageHeader("Edit Comment", ["main"], []);
?>

<main class="page-wrapper page-content add-gap">
    <div class="introduction">
        <h1 class="heading">Edit Your Comment</h1>
        <p>Update your application details below.</p>

        <?php if (!empty($message)): ?>
            <?php echo $message; ?>
        <?php endif; ?>
    </div>

    <div class="contact-one">
        <form method="POST" action="edit-comment.php?id=<?php echo $commentId; ?>">
            <label>Character Name</label>
            <input type="text" name="character_name" class="form-input" value="<?php echo $characterName; ?>" required>

            <label>Battle.Net ID</label>
            <input type="text" name="battlenet_id" class="form-input" value="<?php echo $battlenetId; ?>" required>

            <label>Class</label>
            <select name="class" id="role-input" required>
                <option value="">-- Select Class --</option>
                <option <?php echo $class === "Death Knight" ? "selected" : ""; ?>>Death Knight</option>
                <option <?php echo $class === "Demon Hunter" ? "selected" : ""; ?>>Demon Hunter</option>
                <option <?php echo $class === "Druid" ? "selected" : ""; ?>>Druid</option>
                <option <?php echo $class === "Evoker" ? "selected" : ""; ?>>Evoker</option>
                <option <?php echo $class === "Hunter" ? "selected" : ""; ?>>Hunter</option>
                <option <?php echo $class === "Mage" ? "selected" : ""; ?>>Mage</option>
                <option <?php echo $class === "Monk" ? "selected" : ""; ?>>Monk</option>
                <option <?php echo $class === "Paladin" ? "selected" : ""; ?>>Paladin</option>
                <option <?php echo $class === "Priest" ? "selected" : ""; ?>>Priest</option>
                <option <?php echo $class === "Rogue" ? "selected" : ""; ?>>Rogue</option>
                <option <?php echo $class === "Shaman" ? "selected" : ""; ?>>Shaman</option>
                <option <?php echo $class === "Warlock" ? "selected" : ""; ?>>Warlock</option>
                <option <?php echo $class === "Warrior" ? "selected" : ""; ?>>Warrior</option>
            </select>

            <label>Specialization</label>
            <select name="specialization" id="spec-input" required>
                <option value="">-- Select Specialization --</option>
                <option <?php echo $specialization === "Tank" ? "selected" : ""; ?>>Tank</option>
                <option <?php echo $specialization === "DPS" ? "selected" : ""; ?>>DPS</option>
                <option <?php echo $specialization === "Healer" ? "selected" : ""; ?>>Healer</option>
            </select>

            <label>Additional class or specialization information</label>
            <textarea name="additional_info" id="form-input"><?php echo $additionalInfo; ?></textarea>

            <div class="btn-group">
                <input type="submit" value="Save Changes" class="submit-button button">
            </div>
        </form>
    </div>
</main>

<?php
Components::pageFooter();
?>
