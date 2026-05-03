<?php

// Centralised repository for every SQL query string used in the application.
// Keeping queries here means they are easy to find and update in one place
// without having to search through individual page files.

class SQL
{
    // Fetches a full user record by username.
    // Used during login to verify credentials and during registration to check
    // whether the chosen username is already taken.
    public static $getUser = "SELECT user_id, username, email, password, is_admin, date_joined FROM users WHERE username = ?";

    // Inserts a new user row. The password passed in must already be hashed.
    public static $createUser = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";

    // Fetches every comment ordered newest-first.
    // Includes user_id so the display layer can determine ownership for
    // edit/delete button visibility.
    public static $getAllComments = "SELECT
    comment_id, user_id, character_name, battlenet_id, class, specialization, additional_info, admin_reply, created_at
    FROM comments
    ORDER BY created_at DESC";

    // Fetches only the comments belonging to a specific user.
    // Used on the user panel page to show a member their own submissions.
    public static $getUserComments = "SELECT
    comment_id, user_id, character_name, battlenet_id, class, specialization, additional_info, admin_reply, created_at
    FROM comments
    WHERE user_id = ?
    ORDER BY created_at DESC";

    // Fetches a single comment by its primary key.
    // user_id is included so that ownership checks can verify edit/delete
    // permissions before carrying out the action.
    public static $getCommentById = "SELECT
    comment_id, user_id, character_name, battlenet_id, class, specialization, additional_info, admin_reply, created_at
    FROM comments
    WHERE comment_id = ?";

    // Inserts a new comment/application row.
    // user_id is set separately at the application layer (from the trusted
    // session) rather than from POST data, which is why it is not a ? here.
    public static $createComment = "INSERT INTO comments
    (character_name, battlenet_id, class, specialization, additional_info)
    VALUES (?, ?, ?, ?, ?)";

    // Updates the editable fields on an existing comment.
    // comment_id is the last parameter so it binds to the WHERE clause.
    public static $updateComment = "UPDATE comments
    SET character_name = ?, battlenet_id = ?, class = ?, specialization = ?, additional_info = ?
    WHERE comment_id = ?";

    // Permanently removes a comment row by its primary key.
    public static $deleteComment = "DELETE FROM comments WHERE comment_id = ?";

    // Sets or overwrites the admin reply text on an existing comment.
    public static $replyComment = "UPDATE comments SET admin_reply = ? WHERE comment_id = ?";

}
?>