<?php get_header(); ?>

	<div id="content">
		
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">
			<h1 class="title"><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h1>
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
<div class="meta"><small><i>By <strong><?php the_author() ?></strong> on <?php the_time('F jS, Y') ?></small></i>
				<p class="links">
<?php echo '<ul class="addtoany_list">'; if(
function_exists('ADDTOANY_SHARE_SAVE_ICONS') )
ADDTOANY_SHARE_SAVE_ICONS( array("html_wrap_open" => "<li>",
"html_wrap_close" => "</li>") ); if(
function_exists('ADDTOANY_SHARE_SAVE_BUTTON') )
ADDTOANY_SHARE_SAVE_BUTTON( array("html_wrap_open" => "<li>",
"html_wrap_close" => "</li>") ); echo '</ul>'; ?>				
</p>
			</div>			
</div>
			
<?php comments_template(); ?>

<div class="meta">
<p><small>
iSpera does not condone bad internet behavior. Please comment with full respect or you will be banned. 


					</small>
				</p>
			</div>
		</div>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

	<?php endif; ?>

	</div>
	<!-- end content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
