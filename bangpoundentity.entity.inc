<?php

/**
 * Implements hook_entity_view_mode_info().
 */
function bangpoundentity_entity_view_mode_info() {
  $view_modes['node']['title_list_item'] = array(
    'label' => t('Title list item'),
    'custom settings' => TRUE,
  );
  return $view_modes;
}
