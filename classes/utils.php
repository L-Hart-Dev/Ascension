<?php

// General-purpose helper methods shared across the application.
// All methods are static so they can be called without instantiating the class.

class Utils
{
    /**
     * Takes an array of $_POST[] keys and checks if any 
     * are empty and returns true if any values are missing.
     */
    public static function postValuesAreEmpty($arrayOfKeys)
    {
        foreach ($arrayOfKeys as $key) {
            if (!isset($_POST[$key]) || empty($_POST[$key])) {
                return true;
            }
        }
        return false;
    }

    /**
     * Escape input string to prevent accidental evaluation of HTML 
     * or JavaScript
     */
    public static function escape($input)
    {
        return trim(htmlspecialchars($input));
    }

    // Base URL of the project, used when building Location redirect headers.
    // Ensures redirects resolve correctly regardless of which page triggers them.
    public static $projectFilePath = "http://localhost/Ascension";
}
?>
