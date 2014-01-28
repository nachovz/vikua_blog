<?php
/*
Template Name: Noticias Vikua
*/
?>
<?php get_header() ?>
<div>
    
</div>
    
<div id="container">
	<div id="content">
		<div id="nav-below" class="navigation">
			<div class="nav-previous"><?php next_posts_link(__('&lt; Posts Antiguos', 'simplr')) ?></div>
			<div class="nav-next"><?php previous_posts_link(__('Posts más Recientes &gt;', 'simplr')) ?></div>
		</div>

	</div>
</div>
<div id="primary" class="sidebar">
	<ul>
	<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : // Begin Widgets for Sidebar 1; displays widgets or default contents below ?>
	<!--<h1 style="text-align:center;">Noticias <img class="subview-image" src="wp-content/themes/simplr/images/noticias.png"></h1>-->
	<h1 style="text-align:center;margin-bottom:50px;">Noticias </h1>
	<?php global $wpdb, $r; $r = new WP_Query("showposts=5"); if ($r->have_posts()) : // Custom recent posts for Simplr ?>
			<!--<h2 id="noticias-title"><?php _e('Entradas Recientes', 'simplr') ?></h3>-->
			<li id="simplr-recent-entries">
				
				<ul><?php while ($r->have_posts()) : $r->the_post(); ?>
					<div class="entry">
						<li class="hentry" onclick="location.href='<?php the_permalink() ?>';">
							<div class="entry-image">
								<?php the_post_thumbnail(array(300,300)); ?>
							</div>
							<div class="entry-data">
								<span class="entry-title"><a href="<?php the_permalink() ?>" title="Continue reading <?php get_the_title(); the_title(); ?>" rel="bookmark"><?php get_the_title(); the_title(); ?></a></span><br>
								<span class="entry-date"><abbr class="published" title="<?php the_time('Y-m-d\TH:i:sO'); ?>"><?php unset($previousday); printf(__('%1$s', 'simplr'), the_date('F jS, Y', false)) ?></abbr></span><br>
								<span class="entry-summary"><?php the_content_rss('', TRUE, '', 50); ?></span><br>					
								<!--<span class="entry-comments"><?php comments_popup_link(__('Sin Comentarios', 'simplr'), __('One Comentario', 'simplr'), __('% Comentarios', 'simplr')) ?></span>-->
							</div>
						</li>
					</div>
				<?php endwhile; ?>

				</ul>
			</li>
<?php endif; ?>

<!--<?php global $wpdb, $comments, $comment; // Custom recent comments for Simplr
	$comments = $wpdb->get_results("SELECT comment_author, comment_author_url, comment_ID, comment_post_ID, SUBSTRING(comment_content,1,65) AS comment_excerpt FROM $wpdb->comments LEFT OUTER JOIN $wpdb->posts ON ($wpdb->comments.comment_post_ID = $wpdb->posts.ID) WHERE comment_approved = '1' AND comment_type = '' AND post_password = '' ORDER BY comment_date_gmt DESC LIMIT 5"); ?>
			<li id="simplr-recent-comments">
				<h3><?php _e('Comentarios Recientes', 'simplr') ?></h3>
				<ul id="recentcomments"><?php
				if ( $comments ) : foreach ($comments as $comment) :
				echo  '<li class="recentcomments" onclick="location.href=\''. get_permalink($comment->comment_post_ID) . '#comment-' . $comment->comment_ID . '\';">' . sprintf(__('<span class="comment-author vcard"><span class="fn n">%1$s</span> wrote:</span> <span class="comment-summary">%2$s ...</span> <span class="comment-entry">On %3$s</span>'),
					get_comment_author_link(),
					strip_tags($comment->comment_excerpt),
					'<a href="'. get_permalink($comment->comment_post_ID) . '#comment-' . $comment->comment_ID . '" title="">' . get_the_title($comment->comment_post_ID) . '</a>') . '</li>';
				endforeach; endif; ?></ul>
			</li>
<?php endif; // End Widgets ?>

		</ul>
	</div>

	<div id="secondary" class="sidebar">
		<ul>
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : // Begin Widgets for Sidebar 2; displays widgets or default contents below ?>
			<li id="search">
				<h3><label for="s"><?php _e('Search', 'simplr') ?></label></h3>
				<form class="searchform" method="get" action="<?php bloginfo('home') ?>">
					<div>
						<input id="s" name="s" type="text" value="<?php the_search_query() ?>" size="10" />
						<input id="searchsubmit" name="searchsubmit" type="submit" value="<?php _e('Find', 'simplr') ?>" />
					</div>
				</form>
			</li>
			<li id="categories">
				<h3><?php _e('Categorias', 'simplr'); ?></h3>
				<ul>
<?php wp_list_categories('title_li=&orderby=name&use_desc_for_title=1&hierarchical=0') ?>

				</ul>
			</li>
			<li id="tag-cloud">
				<h3><?php _e('Etiquetas', 'simplr'); ?></h3>
				<p><?php wp_tag_cloud() ?></p>
			</li>
			<li id="archives">
				<h3><?php _e('Archivos', 'simplr') ?></h3>
				<ul>
<?php wp_get_archives('type=monthly') ?>

				</ul>
			</li>
			<li id="simplr-rss-links">
				<h3><?php _e('RSS Feeds', 'simplr') ?></h3>
				<ul>
					<li><a href="<?php bloginfo('rss2_url') ?>" title="<?php echo _wp_specialchars(get_bloginfo('name'), 1) ?> RSS 2.0 Feed" rel="alternate" type="application/rss+xml"><?php _e('All posts', 'simplr') ?></a></li>
					<li><a href="<?php bloginfo('comments_rss2_url') ?>" title="<?php echo _wp_specialchars(bloginfo('name'), 1) ?> Comments RSS 2.0 Feed" rel="alternate" type="application/rss+xml"><?php _e('All comments', 'simplr') ?></a></li>
				</ul>
			</li>
			<?php if ( is_home() || is_paged() ) { ?>
			<li id="meta">
				<h3><?php _e('Meta', 'simplr') ?></h3>
				<ul>
					<?php wp_register() ?>
					<li><?php wp_loginout() ?></li>
					<?php wp_meta() // Do not remove; helps plugins work ?>
				</ul>
			</li>
			<?php } ?>
<?php endif; // End Widgets ?>

		</ul>
	</div><!-- #primary .sidebar -->
<?php get_sidebar() ?>
<?php get_footer() ?>
