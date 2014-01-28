<?php get_header() ?>
<?php the_post() ?>
<?php the_content() ?>


<?php if ( get_post_custom_values('comments') ) : comments_template(); else : // To show comments on this page, see the readme.html ?>

<?php endif; ?>

<?php get_footer() ?>