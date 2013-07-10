<?php

class super_editor {
	
	public static function install() {
		
		$editor = get_role('editor');
		
		$editor->add_cap('edit_theme_options');
		
	}
	
	public static function uninstall() {
		
		$editor = get_role('editor');
		
		$editor->remove_cap('edit_theme_options');
		
	}
	
}
