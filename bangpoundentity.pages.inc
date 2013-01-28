<?php

/**
 * Menu callback; view a single node with a view mode.
 */
function bangpoundentity_node_page_view($node, $view_mode) {
  $entity_info = entity_get_info();
  drupal_set_title($entity_info['node']['view modes'][$view_mode]['label']);
  $nodes = node_view_multiple(array($node->nid => $node), $view_mode);
  return $nodes;
}
