<?php

// Handles user authentication and account registration.
// Methods interact with the users table via PDO prepared statements and
// store the logged-in user's data in the $_SESSION superglobal.

require_once "classes/connection.php";
require_once "classes/sql.php";
require_once "classes/utils.php";

class User {
    /**
     * Attempt to log in with the supplied credentials.
     *
     * Returns an HTML error string on failure, or an empty string on success.
     * On success, session variables are populated for use across the site.
     */
    public static function loginUser($username, $password)
    {
        if (Utils::postValuesAreEmpty(["username", "password"])) {
            return "<p class='error'>Please fill in all fields.</p>";
        }

        $conn = Connection::create();

        // Attempt to get users name and password
        $stmt = $conn->prepare(SQL::$getUser);
        $stmt->execute([$username]);
        $user = $stmt->fetch();

        // Null the connection object to release the database resource.
        $conn = null;

        // Return an error if the user does not exist
        if (empty($user)) {
            return "<p class='error'>ERROR: User does not exist.</p>";
        }

        // Use PHP's built-in constant-time comparison to verify the password.
        if (!password_verify($password, $user["password"])) {
            return "<p class='error'>ERROR: Incorrect password.</p>";
        }

        // Persist the user's identity in the session so every page can access it.
        $_SESSION["user_id"] = $user["user_id"];
        $_SESSION["username"] = $username;
        $_SESSION["is_admin"] = (bool)$user["is_admin"];
        $_SESSION["date_joined"] = $user["date_joined"];

        // Return an empty string to signal success to the calling page.
        return "";
    }

    /**
     * Validate POST data and register a new user account.
     *
     * Returns an HTML error string on failure, or an empty string on success.
     * On success, the new user is automatically logged in via session variables.
     */
    public static function registerUser()
    {
        // Validate that all four required fields have been submitted.
        if (Utils::postValuesAreEmpty(["username", "email", "passwordOne", "passwordTwo"])) {
            return "<p class='error'>ERROR: Please fill in all fields.</p>";
        }

        $errors = "";
        $username = $_POST["username"];
        $email = $_POST["email"];
        $passwordOne = $_POST["passwordOne"];
        $passwordTwo = $_POST["passwordTwo"];

        // Validate username length before querying the database.
        if (strlen($username) < 4 || strlen($username) > 32) {
            $errors .= "<p class='error'>ERROR: Username must be between 4 and 32 characters.</p>";
        } else {
            $conn = Connection::create();

            // Query by username to check if the name is already registered.
            $stmt = $conn->prepare(SQL::$getUser);
            $stmt->execute([$username]); // THIS IS LINE 68
            $user = $stmt->fetch();

            // A non-empty result means the username is taken.
            if (!empty($user)) {
                $errors .= "<p class='error'>ERROR: Username is already taken.</p>";
            }
        }

        // Use PHP's built-in email filter to validate the format.
        $filteredEmail = filter_var($email, FILTER_VALIDATE_EMAIL);

        if (!$filteredEmail) {
            $errors .= "<p class='error'>ERROR: Please enter a valid email address.</p>";
        }

        // Both passwords must match and meet the minimum length requirement.
        if ($passwordOne !== $passwordTwo) {
            $errors .= "<p class='error'>ERROR: Passwords do not match.</p>";
        } elseif (strlen($passwordOne) < 12) {
            $errors .= "<p class='error'>ERROR: Password must be at least 12 characters long.</p>";
        }

        // Return accumulated validation errors before touching the database.
        if ($errors) {
            return $errors;
        }

        // Hash the password with bcrypt before storing it.
        // PASSWORD_BCRYPT automatically generates a secure salt.
        $hashedPassword = password_hash($_POST["passwordOne"], PASSWORD_BCRYPT);

        // Insert the new user row into the database.
        $stmt = $conn->prepare(SQL::$createUser);
        $stmt->execute([$username, $filteredEmail, $hashedPassword
        ]);

        // Grab the auto-incremented ID so we can populate the session.
        $insertedId = $conn->lastInsertId();

        // Release the database connection.
        $conn = null;

        // Log the new user in automatically by setting the session variables.
        $_SESSION["user_id"] = $insertedId;
        $_SESSION["username"] = $username;
        $_SESSION["is_admin"] = false;
        $_SESSION["date_joined"] = date("Y-m-d H:i:s");

        // Return an empty string to signal success to the calling page.
        return "";
    }
}