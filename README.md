!&# Entity
==========

This developer helper module adds contextual links to Field UI's display settings for
any entity being displayed.

![Screenshot](http://f.cl.ly/items/1M0Y2l1r0J3R441k321o/Fullscreen%2012:2:12%2010:48%20PM.png)

This module depends on [Entity View Modes module][entity_view_mode] and some patches in
that project's queue. These patches fix some bugs in that project and decorate the theme
registry with entity information that is used to generate template suggestions.

* [Template suggestions for node.tpl.php are effective only after specifying content
  type.][1300818]: [patch][1300818-patch]
* [Theme hook suggestion for `{$entity_type}__{$bundle}__{$view_mode}` is added before
  `{$entity_type}__{$bundle}`][1831766]: [patch][1831766-patch]
* [Improve checking of entity type based on hook.][1795812]: [patch][1795812-patch]

[entity_view_mode]: http://drupal.org/project/entity_view_mode

[1300818]: http://drupal.org/node/1300818
[1300818-patch]: http://drupal.org/files/template_suggestion_view_modes-1300818-4.patch

[1831766]: http://drupal.org/node/1831766
[1831766-patch]: http://drupal.org/files/evm_theme_hook_suggestions-1.patch

[1795812]: http://drupal.org/node/1795812
[1795812-patch]: http://drupal.org/files/improve_entity_type_check-1795812-2.patch

Example
-------

This module implements a view mode and template to imitate title lists as rendered by
[`node_title_list()`][node_title_list].

[node_title_list]: http://api.drupal.org/api/drupal/modules%21node%21node.module/function/node_title_list/7
