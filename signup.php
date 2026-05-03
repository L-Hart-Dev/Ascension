<?php
// signup.php – Guild / raid team application page.
// Logged-in users fill out a form with their character details. On POST the
// data is validated and inserted into the comments table via MySQLi prepared
// statements. A success or error message is shown after submission.

// session_start() must come before any output or header() calls.
session_start();

require "classes/components.php";
require "includes/credentials.php";

// $message is shown to the user after a form submission.
$message = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['charactername'])) {
    // Open a MySQLi connection using the shared credentials file.
    $conn = new mysqli($credentials["server"], $credentials["user"], $credentials["pass"], $credentials["dbName"]);

    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }

    // Escape each submitted value as a defence-in-depth measure.
    // The prepared statement below is the primary protection against SQL injection.
    $charactername = $conn->real_escape_string($_POST['charactername']);
    $playerid      = $conn->real_escape_string($_POST['playerid']);
    $classes       = $conn->real_escape_string($_POST['classes']);
    $spec          = $conn->real_escape_string($_POST['spec']);
    $additional    = $conn->real_escape_string($_POST['additional']);

    // A valid session user_id is required because comments.user_id is a
    // foreign key referencing users.user_id and cannot be NULL.
    if (!isset($_SESSION['user_id'])) {
        $message = "Error: You must be logged in to submit an application.";
    } else {
        $userId = (int) $_SESSION['user_id'];

        // Use a prepared statement to prevent SQL injection.
        // The ? placeholders are bound to the variables below.
        $stmt = $conn->prepare("INSERT INTO comments (user_id, character_name, battlenet_id, class, specialization, additional_info)
            VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("isssss", $userId, $charactername, $playerid, $classes, $spec, $additional);

        if ($stmt->execute() === TRUE) {
            $message = "Thank you for your application! We will be in touch shortly.";
        } else {
            $message = "Error: " . $stmt->error;
        }

        $stmt->close();
    }

    $conn->close();
}

// Output page header with a given title plus any stylesheets and scripts
Components::pageHeader("Apply", ["main"], []);
?>

<main class="page-wrapper page-content add-gap">

    <div class="hide-on-desk">
        <img src="Images/Asc.png" alt="">
    </div>

    <div class="introduction">
        <h1 class="heading">
            Apply for the team or the guild!
        </h1>

        <p>
            Welcome to our application page, please use this to join our team or our guild, there is also a general
            contact form for you to ask any questions you have and one of our leaders will be in touch with you as
            soon as possible.
        </p>
    </div>

    <?php if (!empty($message)): ?>
        <div class="message"
            style="padding: 10px; margin: 10px 0; border-radius: 4px; <?php echo strpos($message, 'Error') === false ? 'background-color: #d4edda; color: #155724;' : 'background-color: #f8d7da; color: #721c24;'; ?>">
            <?php echo htmlspecialchars($message); ?>
        </div>
    <?php endif; ?>

    <div class="contact-one">
        <form action="signup.php" method="POST">

            <label>Character Name</label>
            <input type="text" name="charactername" class="form-input" required>

            <label>Battle.Net ID</label>
            <input type="text" name="playerid" class="form-input" required>
            <div class="drop-down-one">
                <label>Class</label>
                <select name="classes" id="role-input" required>
                    <option value="">-- Select Class --</option>
                    <option>Death Knight</option>
                    <option>Demon Hunter</option>
                    <option>Druid</option>
                    <option>Evoker</option>
                    <option>Hunter</option>
                    <option>Mage</option>
                    <option>Monk</option>
                    <option>Paladin</option>
                    <option>Priest</option>
                    <option>Rogue</option>
                    <option>Shaman</option>
                    <option>Warlock</option>
                    <option>Warrior</option>
                </select>
            </div>
            <div>
                <label>Specialization</label>
                <select name="spec" id="spec-input" required>
                    <option value="">-- Select Specialization --</option>
                    <option>Tank</option>
                    <option>DPS</option>
                    <option>Healer</option>
                </select>
            </div>

            <div class="additional">
                <label>Additional class or specialization information</label>
                <textarea name="additional" id="form-input"></textarea>
            </div>

            <div>
                <input type="submit" value="Submit" class="submit-button button">
            </div>

        </form>
    </div>

</main>

<?php
Components::pageFooter();
?>