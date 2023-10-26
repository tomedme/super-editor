<?php

declare(strict_types=1);

final class super_editor {
  
  public static function install(): void {
    $editor_role = get_role( 'editor' );
    $editor_role->add_cap( 'edit_theme_options' );
  }
  
  public static function uninstall(): void {
    $editor_role = get_role( 'editor' );
    $editor_role->remove_cap( 'edit_theme_options' );
  }
  
}
