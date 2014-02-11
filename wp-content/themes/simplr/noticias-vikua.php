<?php
/*
Template Name: Noticias Vikua
*/
?>
<?php get_header() ?>
	<?php global $wpdb, $r; $r = new WP_Query("showposts=5"); if ($r->have_posts()) : // Custom recent posts for Simplr ?>
	<!--<?php while ($r->have_posts()) : $r->the_post(); ?>
		<div class="span12 entry">
			<div class="entry-image"><?php the_post_thumbnail(array(300,300)); ?></div>
			<div class="entry-data">
				<span class="entry-title"> <?php get_the_title(); the_title(); ?></span><br><br>
				<span class="entry-summary"><?php the_content_rss('', TRUE, '', 50); ?></span><br><br>
				<a class="leer-mas" href="<?php the_permalink() ?>"> Leer más </a>					
			</div>
		</div>
	<?php endwhile;?>
	-->
		<div class="span12 entry">
			<div class="entry-image"><?php the_post_thumbnail(array(300,300)); ?></div><br><br>
			<div class="entry-data">
				<span class="entry-title"> <?php get_the_title(); the_title(); ?></span><br><br>
				<span class="entry-summary"><?php the_content_rss('', TRUE, '', 50); ?></span><br><br>
				<a class="leer-mas" href="<?php the_permalink() ?>"> Leer más </a>					
			</div>
		</div>
		<?php $r->the_post(); ?>
		<div class="span12 entry">
			<div class="entry-image2"><?php the_post_thumbnail(array(600,300)); ?></div>
			<div class="entry-data2">
				<div class="entry-title2"> <?php get_the_title(); the_title(); ?></div>
				<div class="entry-date2"><?php unset($previousday); printf(__('%1$s', 'simplr'), the_date('j M Y', false)) ?></div>
			</div>
			<div class="summary-div">
				<div class="entry-summary2"><?php the_content_rss('', TRUE, '', 50); ?></div><br><br>
				<a class="leer-mas2" href="<?php the_permalink() ?>"> Leer más </a>					
			</div>
		</div>
		<?php $r->the_post(); ?>
		<div class="span12 entry">
			<div class="entry-data2">
				
				<div class="entry-title2"> <?php get_the_title(); the_title(); ?></div>
				<div class="entry-date2"><?php unset($previousday); printf(__('%1$s', 'simplr'), the_date('j M Y', false)) ?></div>
							
			</div>
			<div class="summary-div">
				<div class="entry-summary2"><?php the_content_rss('', TRUE, '', 50); ?></div><br><br>
				<a class="leer-mas2" href="<?php the_permalink() ?>"> Leer más </a>		
			</div>
		</div>
		<?php $r->the_post(); ?>
		<div class="span12 entry">
			<div class="entry-data2">
				
				<div class="entry-title2"> <?php get_the_title(); the_title(); ?></div>
				<div class="entry-date2"><?php unset($previousday); printf(__('%1$s', 'simplr'), the_date('j M Y', false)) ?></div>
			</div>
			<div class="summary-div">	
				<div class="entry-summary2"><?php the_content_rss('', TRUE, '', 20); ?></div><br><br>
				<a class="leer-mas2" href="<?php the_permalink() ?>"> Leer más </a>					
			</div>
		</div>


	<?php endif; ?>
<?php get_sidebar() ?>
<?php get_footer() ?>
