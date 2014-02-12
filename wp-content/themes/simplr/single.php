<?php get_header(); ?>

	<div class="entry">
		<div id="content" class="hfeed">
		<?php the_post(); ?>

			<div id="post-<?php the_ID(); ?>" class="<?php simplr_post_class(); ?>">
				<div class="entry-content-large">
				<div class="entry-image-large"><?php the_post_thumbnail(array(750,400)); ?> </div>
				<div class="entry-data3">
					<div class="entry-title3"> <?php get_the_title(); the_title(); ?></div>
					<div class="entry-date3"><?php unset($previousday); printf(__('%1$s', 'simplr'), the_date('j M Y', false)) ?></div>
				</div>
				<br><br>
				<?php printf(__('<p class="entry-details">Publicado por: %1$s </p>'), get_the_author()) ?><br><br>
					<br>
				
					<?php the_content('<span class="entry-data3">'.__('Continued reading &gt;', 'simplr').'</span>'); ?>

					<?php link_pages('<div class="page-link">'.__('Pages: ', 'simplr'), "</div>\n", 'number'); ?>
					<br><br><a class="leer-mas3" href="./?page_id=68">Atras</a>

				</div>
				

				
			</div><!-- .post -->
		</div><!-- #content .hfeed -->
	</div><!-- #container -->




<?php get_footer() ?>
