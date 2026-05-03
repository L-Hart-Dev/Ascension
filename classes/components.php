<?php

// Wrapper class for outputting shared page-level components.
// Each method simply includes the relevant template file. Variables set in the
// calling scope (e.g. $pageTitle, $stylesheets) are available inside the
// included template because require shares the same variable scope.

class Components {
    /**
     * Output a standard page header
     * 
     * $pageTitle - string
     * $stylesheets - array
     * $scripts - array
     */
    public static function pageHeader($pageTitle, $stylesheets, $scripts) {
        require "components/header.php";
    }

    /**
     * Output a standard page footer
     */
    public static function pageFooter() {
        require "components/footer.php";
    }
}