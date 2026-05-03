<?php
// components/footer.php
// Closes the <body> and <html> tags opened in header.php and outputs the
// site-wide footer bar. Included on every page via Components::pageFooter().
?>
    <footer class="page-footer">
        <div class="footer-container">
            <a href="index.php" class="logo-container">
                <img class="page-logo" src="Images/Wowlogo.png" alt="Website Logo">
            </a>
            <div class="footer-right">
                <p>&copy; <?php echo date('Y'); ?> Ascension. All rights reserved.</p>
            </div>
        </div>

    </footer>
</body>
</html>