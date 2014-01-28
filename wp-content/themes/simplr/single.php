<?php get_header(); ?>

	<div id="container">
		<div id="content" class="hfeed">
		
			<div id="nav-above" class="navigation">
				<div class="nav-previous"><?php previous_post_link(__('&lt; %link', 'simplr')) ?></div>
				<div class="nav-next"><?php next_post_link(__('%link &gt;', 'simplr')) ?></div>
			</div>

<?php the_post(); ?>

			<div id="post-<?php the_ID(); ?>" class="<?php simplr_post_class(); ?>">
				<div class="entry-content-large">
				<div class="entry-image-large"><?php the_post_thumbnail(array(750,750)); ?> </div>
				<h2 class="entry-title"><?php the_title() ?></h2>
				<?php printf(__('<p class="entry-details">Publicado por <span class="vcard"><span class="fn n">%1$s</span></span> el <abbr class="published" title="%2$sT%3$s">%4$s a las %5$s <br> <a href="%6$s" title="Permalink to %7$s" rel="bookmark">Añadir a favoritos </a> </abbr>. '),

				get_the_author(),
				get_the_time('Y-m-d'),
				get_the_time('H:i:sO'),
				get_the_time('l, F jS, Y', false),
				get_the_time(),
				get_permalink(),
				_wp_specialchars(get_the_title(), 'double'),
				esc_url( get_post_comments_feed_link() ) ) ?>

				
					<?php the_content('<span class="more-link">'.__('Continued reading &gt;', 'simplr').'</span>'); ?>

					<?php link_pages('<div class="page-link">'.__('Pages: ', 'simplr'), "</div>\n", 'number'); ?>

					<?php edit_post_link(__('Editar esta noticia.', 'simplr'),'<p class="entry-edit">','</p>'); ?>
					<div class="entry-footer">
						<!--
						<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) : ?>
											<?php printf(__('<a href="#respond" title="Publicar un comentario">Publicar un comentario</a> <span class="meta-sep">|</span> <a href="%s" rel="trackback" title="Trackback URL for your post">Trackback URI</a>', 'simplr'), get_trackback_url()) ?>
						<?php elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) : ?>
											<?php printf(__('Comments closed <span class="meta-sep">|</span> <a href="%s" rel="trackback" title="Trackback URL for your post">Trackback URI</a>', 'simplr'), get_trackback_url()) ?>
						<?php elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) : ?>
											<?php printf(__('<a href="#respond" title="Publicar un comentario">Publicar un comentario</a> <span class="meta-sep">|</span> Trackbacks closed', 'simplr')) ?>
						<?php elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) : ?>
											<?php _e('Comments closed <span class="meta-sep">|</span> Trackbacks closed', 'simplr') ?>
						<?php endif; ?>
						-->
					</div>
				</div>
				

				
			</div><!-- .post -->
		</div><!-- #content .hfeed -->
	</div><!-- #container -->




<?php get_footer() ?>
