<?php
/**
 * @file
 * Node template
 */
?>
<?php if ($wrapper): ?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
<?php endif; ?>
<?php print render($title_prefix); ?>
<a href="<?php print $node_url; ?>"<?php print $title_attributes; ?>><?php print $title; ?></a>
<?php print render($title_suffix); ?>
<?php if ($wrapper): ?>
</div>
<?php endif; ?>
