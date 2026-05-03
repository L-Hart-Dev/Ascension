<?php

// Handles all database operations and display logic relating to comments
// (guild/raid applications). Methods are static so pages can call them
// directly without creating a Comments instance.

require_once "classes/connection.php";
require_once "classes/sql.php";
require_once "classes/utils.php";

class Comments {
    /**
     * Execute any SELECT query against the comments table and return all rows.
     *
     * Accepts an optional $params array so the same method can serve both the
     * "all comments" query (no params) and filtered queries (with params).
     */
    public static function getAllComments($sql, $params = []) {
        $conn = Connection::create();

        // Prepare and execute the query
        $stmt = $conn->prepare($sql);
        $stmt->execute($params);

        // Get the results
        $comments = $stmt->fetchAll();

        // Null the connection object
        $conn = null;

        return $comments;
    }

    /**
     * Fetch a single comment row by its primary key.
     * Returns the row as an associative array, or false if not found.
     */
    public static function getSingleComment($commentId) {
        $conn = Connection::create();

        $stmt = $conn->prepare(SQL::$getCommentById);

        // Replace each ? in the query from values in the array
        $stmt->execute([$commentId]);
        $comment = $stmt->fetch();

        $conn = null;

        return $comment;
    }

    /**
     * Loop through a comments array and render comment-preview.php for each one.
     *
     * Calculates ownership and admin flags per comment so the template can
     * conditionally show edit/delete/reply controls to the right users.
     */
    public static function displayAllComments($comments) {
        if (empty($comments)) {
            require "components/no-comments-found.php";
            return;
        }

        foreach ($comments as $comment) {
            $commentId = Utils::escape($comment["comment_id"]);
            $characterName = Utils::escape($comment["character_name"]);
            $battlenetId = Utils::escape($comment["battlenet_id"]);
            $class = Utils::escape($comment["class"]);
            $specialization = Utils::escape($comment["specialization"]);
            $additionalInfo = Utils::escape($comment["additional_info"]);
            $adminReply = isset($comment["admin_reply"]) ? Utils::escape($comment["admin_reply"]) : "";
            $date = Utils::escape($comment["created_at"]);

            // Determine whether the current session user owns this comment.
            $commentUserId = isset($comment["user_id"]) ? (int) $comment["user_id"] : null;
            $isOwner = isset($_SESSION["user_id"]) && $commentUserId !== null && $commentUserId === (int) $_SESSION["user_id"];
            $isAdmin = !empty($_SESSION["is_admin"]);

            // Owners can edit their own comment; owners or admins can delete it.
            $canEditComment = $isOwner;
            $canDeleteComment = $isOwner || $isAdmin;

            date_default_timezone_set("UTC");
            $displayDate = date("l jS \of F Y", strtotime($date));

            require "components/comment-preview.php";
        }
    }

    /**
     * Fetch all comments submitted by a specific user.
     * Used on the user panel so members can see their own applications.
     */
    public static function getUserComments($userId) {
        $conn = Connection::create();

        // Prepare and execute the query
        $stmt = $conn->prepare(SQL::$getUserComments);
        $stmt->execute([$userId]);

        // Get the results
        $comments = $stmt->fetchAll();

        // Null the connection object
        $conn = null;

        return $comments;
    }

    /**
     * Validate the shared fields used when creating or editing a comment.
     * Returns an HTML error string if validation fails, or an empty string on success.
     */
    public static function validateComment() {
        if (Utils::postValuesAreEmpty(["character_name", "battlenet_id", "class", "specialization"])) {
            return "<p class='error'>ERROR: Please fill in all required fields.</p>";
        }

        // Validate character name
        if (strlen($_POST["character_name"]) > 255) {
            return "<p class='error'>ERROR: Character name must be less than 255 characters.</p>";
        }

        // Validate battlenet ID
        if (strlen($_POST["battlenet_id"]) > 255) {
            return "<p class='error'>ERROR: BattleNet ID must be less than 255 characters.</p>";
        }

        return "";
    }

    /**
     * Update the editable fields of an existing comment row.
     */
    public static function updateComment($commentId, $characterName, $battlenetId, $class, $specialization, $additionalInfo) {
        $conn = Connection::create();

        $stmt = $conn->prepare(SQL::$updateComment);
        $stmt->execute([$characterName, $battlenetId, $class, $specialization, $additionalInfo, $commentId]);

        $conn = null;

        return true;
    }

    /**
     * Permanently delete a comment by its primary key.
     */
    public static function deleteComment($commentId) {
        $conn = Connection::create();

        $stmt = $conn->prepare(SQL::$deleteComment);
        $stmt->execute([$commentId]);

        $conn = null;
    }

    /**
     * Save an admin reply against a comment row.
     * If a reply already exists it is overwritten.
     */
    public static function replyComment($commentId, $replyText) {
        $conn = Connection::create();

        $stmt = $conn->prepare(SQL::$replyComment);
        $stmt->execute([$replyText, $commentId]);

        $conn = null;
        return true;
    }
}
?>
