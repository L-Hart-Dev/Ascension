<?php
// components/comment-preview.php
// Renders a single comment card on the comments feed or user panel.
//
// Expected variables (set by Comments::displayAllComments() before require):
//   $commentId      - int    - Primary key of the comment row.
//   $characterName  - string - Escaped character name.
//   $battlenetId    - string - Escaped Battle.net ID.
//   $class          - string - Escaped WoW class name.
//   $specialization - string - Escaped role (Tank / DPS / Healer).
//   $additionalInfo - string - Escaped extra information (may be empty).
//   $adminReply     - string - Escaped admin reply text (may be empty).
//   $displayDate    - string - Human-readable formatted date string.
//   $canEditComment - bool   - True when the session user owns this comment.
//   $canDeleteComment - bool - True when the session user owns OR is admin.
?>
<div class="posts page-content">
    <h3 class="post-title">
        <?php echo $characterName; ?> - <?php echo $class; ?> <?php echo $specialization; ?>
    </h3>

    <p class="post-meta">
        Posted on <?php echo $displayDate; ?> | 
        <a>
            <?php echo $battlenetId; ?>
        </a>
    </p>

    <?php if (!empty($additionalInfo)): ?>
        <!-- Only render the additional info block if the applicant filled it in. -->
        <p class="post-body"><?php echo nl2br($additionalInfo); ?></p>
    <?php endif; ?>

    <?php if (!empty($adminReply)): ?>
        <!-- Show the admin reply section only when a reply has been saved. -->
        <div class="admin-reply">
            <strong>Admin reply:</strong>
            <p><?php echo nl2br($adminReply); ?></p>
        </div>
    <?php endif; ?>

    <?php if (!empty($_SESSION["is_admin"])): ?>
        <!-- Admin reply form: only rendered for admin sessions. -->
        <form method="POST" action="comment.php" class="comment-actions">
            <input type="hidden" name="reply_comment_id" value="<?php echo $commentId; ?>">
            <textarea
                name="admin_reply"
                class="comment-reply-input"
                placeholder="Write an admin reply..."
                required
            ></textarea>
            <button type="submit" class="comment-action-button">Save reply</button>
        </form>
    <?php endif; ?>

    <?php if (isset($canEditComment) && $canEditComment): ?>
        <!-- Edit button: only shown to the comment's owner. -->
        <form method="GET" action="edit-comment.php" class="comment-actions">
            <input type="hidden" name="id" value="<?php echo $commentId; ?>">
            <button type="submit" class="comment-action-button">Edit comment</button>
        </form>
    <?php endif; ?>

    <?php if (isset($canDeleteComment) && $canDeleteComment): ?>
        <!-- Delete button: shown to the comment's owner and to admins. -->
        <form method="GET" action="delete-post.php" class="comment-actions">
            <input type="hidden" name="id" value="<?php echo $commentId; ?>">
            <button type="submit" class="comment-action-button">Delete comment</button>
        </form>
    <?php endif; ?>
</div>
