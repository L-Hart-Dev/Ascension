<?php
// logout.php – Destroys the current session and redirects to the home page.
// No HTML is rendered; this page only performs the logout action.

session_start();

require "classes/utils.php";

// Clear all session variables so no user data lingers.
$_SESSION = [];

// Destroy the server-side session record.
session_destroy();

header("Location: " . Utils::$projectFilePath . "/index.php");