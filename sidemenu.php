<?php

function remove_adminarea_menus() {
    remove_menu_page( 'index.php' ); 
    remove_menu_page( 'edit.php' ); 
    remove_menu_page( 'upload.php' ); 
    remove_menu_page( 'link-manager.php' ); 
    remove_menu_page( 'edit.php?post_type=page' ); 
    remove_menu_page( 'edit-comments.php' ); 
    remove_menu_page( 'edit.php?post_type=feedback' ); 
    remove_menu_page( 'themes.php' ); 
    remove_menu_page( 'plugins.php' ); 
    remove_menu_page( 'users.php' ); 
    remove_menu_page( 'tools.php' ); 
    remove_menu_page( 'options-general.php' ); 
}
add_action( 'admin_menu' , 'remove_adminarea_menus' );
