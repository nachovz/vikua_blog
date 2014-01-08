<?php
/*
Template Name: Noticias Vikua
*/
?>
<?php get_header() ?>
    
	<div id="container">
		<div id="content">

<?php while ( have_posts() ) : the_post() ?>

			<div id="post-<?php the_ID() ?>" class="<?php simplr_post_class() ?>">
				<!-- Titulo -->
				<h2 class="entry-title">
					<a href="<?php the_permalink() ?>" title="<?php printf(__('Permalink to %s', 'simplr'), _wp_specialchars(get_the_title(), 1)) ?>" rel="bookmark">
						Noticias de Vikua <small>Grupo InTech</small>
					</a>
				</h2>
				<div class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO'); ?>"><?php unset($previousday); printf(__('%1$s', 'simplr'), the_date('l, F jS, Y', false)) ?></abbr></div>
				<div class="entry-content">
<?php the_content('<span class="more-link">'.__('Continuar Leyendo &gt;', 'simplr').'</span>'); ?>

<?php link_pages('<div class="page-link">'.__('Paginas: ', 'simplr'), "</div>\n", 'number'); ?>
				</div>
				<div class="entry-meta">
					<span class="entry-category"><?php printf(__('Archivado en %s', 'simplr'), get_the_category_list(', ')) ?></span>
					<span class="meta-sep">|</span>
					<span class="entry-tags"><?php the_tags(__('Tagged ', 'simplr'), ", ", "") ?></span>
					<span class="meta-sep">|</span>
					<span class="entry-permalink"><?php printf(__('<a href="%1$s" title="Link hacia %2$s">Link Permanente</a>', 'simplr'), get_permalink(), _wp_specialchars(get_the_title(), 'double') ) ?></span>
					<span class="meta-sep">|</span>
<?php edit_post_link(__('Editar', 'simplr'), "\t\t\t\t\t<span class='entry-edit'>", "</span>\n\t\t\t\t\t<span class='meta-sep'>|</span>\n"); ?>
					<span class="entry-comments"><?php comments_popup_link(__('Comentarios (0)', 'simplr'), __('Comments (1)', 'simplr'), __('Comments (%)', 'simplr')) ?></span>
				</div>
			</div>

<?php endwhile ?>

			<div id="nav-below" class="navigation">
				<div class="nav-previous"><?php next_posts_link(__('&lt; Posts Antiguos', 'simplr')) ?></div>
				<div class="nav-next"><?php previous_posts_link(__('Posts más Recientes &gt;', 'simplr')) ?></div>
			</div>

		</div>
	</div>
   
<?php get_sidebar() ?>
<?php get_footer() ?>