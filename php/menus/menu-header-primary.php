<?php 
    /**
     * php/menus/menu-header-primary.php
     * @package scgolfpanel
     * @author Scott Shealy
     * @version 1.0.0 (2023.11.30)
     * @copyright 2023 (2023.11.30)
    **/
?>

<?php 
    wp_nav_menu(
        array(
            'theme_location' => 'menu-3',
            'menu_id' => 'Header-Primary'
        )
    );
?>