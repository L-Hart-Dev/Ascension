<?php

// Factory class that creates PDO database connections.
// All database access in the application goes through here so that
// connection settings are defined in one place (includes/credentials.php).

class Connection
{
    /**
     * 
     * Return a new PDO database connection object so we can carry out database transactions.
     */
    public static function create()
    {
        // Load the $credentials array from the credentials file.
        require "includes/credentials.php";

        try {
            $server = $credentials["server"];
            $dbName = $credentials["dbName"];

            // Build the PDO DSN string and open the connection.
            $conn = new PDO(
                "mysql:host=$server;dbname=$dbName;",
                $credentials["user"],
                $credentials["pass"]
            );

            // Make PDO throw exceptions on error rather than failing silently,
            // so problems surface immediately during development.
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // Stop script execution and print the database error.
            exit("Error: " . $e->getMessage());
        }

        return $conn;
    }
}
?>
