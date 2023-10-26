<?php

declare(strict_types=1);

/*
Plugin Name: Super Editor
Description: Allows Editor role to update theme options
Author: tom
Version: 1.1
*/

include_once 'super-editor.class.php';

register_activation_hook( __file__, array( 'super_editor', 'install' ) );
register_deactivation_hook( __file__, array( 'super_editor', 'uninstall' ) );
