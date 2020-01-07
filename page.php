<?php get_header(); ?>

<!-- Hero -->
<div id="hero" style="display: none;"></div>

<!-- Content -->
<?php if( have_rows('flexible_content') ): ?>
<div id="flexible">
<?php while ( have_rows('flexible_content') ) : the_row(); ?>

    <?php if (get_row_layout() == 'image') : ?>
      <!-- Content Goes Here -->
    <?php endif; ?>

    <?php if (get_row_layout() == 'content') : ?>
      <!-- Content Goes Here -->
    <?php endif; ?>

    <?php if (get_row_layout() == 'content_w_sidebar') : ?>
      <!-- Content Goes Here -->
    <?php endif; ?>

    <?php if (get_row_layout() == 'flexbox') : ?>
      <!-- Content Goes Here -->
    <?php endif; ?>

<?php endwhile; ?>
</div>
<?php endif; ?>

<?php get_footer(); ?>
