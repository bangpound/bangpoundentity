<?php

/**
 * @file
 * Default theme implementation to display a term.
 *
 * @ingroup themeable
 */
?>
<?php if ($wrapper): ?>
<div id="taxonomy-term-<?php print $term->tid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <?php endif; ?>
  <?php print render($title_prefix); ?>
  <a href="<?php print $term_url; ?>"<?php print $title_attributes; ?>><?php print $term_name; ?></a>
  <?php print render($title_suffix); ?>
  <?php if ($wrapper): ?>
</div>
<?php endif; ?>
