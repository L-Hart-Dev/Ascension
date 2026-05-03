<?php
// components/header.php
// Outputs the opening <html>, <head>, and <header> for every page.
// $pageTitle, $stylesheets, and $scripts are passed in by Components::pageHeader().
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/tooltip.js" defer></script>
    <script src="js/mobile-nav.js" defer></script>
    <title><?php if (isset($pageTitle))
        echo $pageTitle; ?></title>

    <?php

    // Build a <link> tag for each stylesheet name in the $stylesheets array.
    // Names should be passed without the .css extension (e.g. "main").
    if (!empty($stylesheets)) {
        foreach ($stylesheets as $sheet) {
            echo "<link rel=\"stylesheet\" href=\"css/$sheet.css\">";
        }
    }

    // Build a deferred <script> tag for each script name in the $scripts array.
    // Names should be passed without the .js extension (e.g. "accordion").
    if (!empty($scripts)) {
        foreach ($scripts as $script) {
            echo "<script src=\"js/$script.js\" defer></script>";
        }
    }

    ?>
</head>

<body>
    <header class="page-header">
        <div class="header-container page-wrapper">
            <a href="index.php" class="logo-container">
                <img class="page-logo" src="Images/Wowlogo.png" alt="Website Logo">
            </a>

            <h1 class="page-title"><a href="index.php">Ascension</a></h1>

            <div class="header-right">
                <?php if (isset($_SESSION["username"])):
                    // User is logged in — show their account link and a logout button.
                    $user = $_SESSION["username"];
                    ?>

                        <nav class="login-nav hide-on-mobile">
                            <ul class="nav-links">
                                <li><a href="user-panel.php">
                                        <?php echo htmlspecialchars($user, ENT_QUOTES, 'UTF-8'); ?>'s account
                                    </a></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </nav>
                    <?php else: ?>
                        <!-- User is not logged in — show login and register links instead. -->
                        <nav class="login-nav hide-on-mobile">
                            <ul class="nav-links">
                                <li><a href="login.php">Log in</a></li>
                                <li><a href="register.php">Register</a></li>
                            </ul>
                        </nav>
                    <?php endif; ?>

                <div class="burger-button">
                    <img src="Images/nav-button.png" alt="Navigation Button" class="burger-button-image"
                        onclick="toggleNavigation()">
                </div>

                <nav class="nav-container hide-on-mobile">
                    <ul class="nav-links">
                        <li><a href="index.php">Home</a></li>

                        <li><a href="guide.php">Guides</a></li>
                        <li><a href="loot.php">Loot Tables</a></li>
                        <li><a href="events.php">Events</a></li>
                        <?php if (isset($_SESSION["username"])): ?>
                            <!-- Admins see the Comments management link; regular users see the Apply link. -->
                            <?php if (isset($_SESSION["is_admin"]) && $_SESSION["is_admin"]): ?>
                                <li><a href="comment.php">Comments</a></li>
                            <?php else: ?>
                                <li><a href="signup.php">Apply</a></li>
                            <?php endif; ?>
                        <?php endif; ?>

                        <?php if (isset($_SESSION["username"])): ?>
                            <li class="hide-on-desk"><a href="user-panel.php">
                                    <?php echo htmlspecialchars($_SESSION["username"], ENT_QUOTES, 'UTF-8'); ?>'s account
                                </a></li>
                            <li class="hide-on-desk"><a href="logout.php">Logout</a></li>
                        <?php else: ?>
                            <li class="hide-on-desk"><a href="login.php">Log in</a></li>
                            <li class="hide-on-desk"><a href="register.php">Register</a></li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>