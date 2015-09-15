<?php get_header(); ?>

<div id="content">
<div class="search-form">
<?php include (TEMPLATEPATH . ‘/searchform.php’); ?>
<?php $search_text = "Search & Enter"; ?> 
<form method="get" id="searchform"  
action="<?php bloginfo('home'); ?>/"> 
<input type="text" value="<?php echo $search_text; ?>"  
name="s" id="s"  
onblur="if (this.value == '')  
{this.value = '<?php echo $search_text; ?>';}"  
onfocus="if (this.value == '<?php echo $search_text; ?>')  
{this.value = '';}" /> 
<input type="hidden" id="searchsubmit" /> 
</form>
</div>
<p></p>

	<?php if (have_posts()) : ?>
	
		<div class="post">
			<p class="title">search results for &ldquo;<?php the_search_query(); ?>&rdquo;</p>
			<div class="entry">&nbsp;</div>
		</div>

		<?php while (have_posts()) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" class="post">
				<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Read full article on <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<div class="entry">
					<?php the_excerpt('Read the rest of this entry &raquo;'); ?>
				</div>
				<div class="meta"><small><i>By <strong><?php the_author() ?></strong> on <?php the_time('F jS, Y') ?></small></i>
					<p class="links">
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Read full article on <?php the_title(); ?>" class="more">Read full article</a>
						&nbsp;&nbsp;&raquo;&nbsp;&nbsp;
					<?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments'); ?>
					</p>
				</div>
			</div>
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php previous_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php next_posts_link('Next Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<div class="post">
			<p class="title">search results for &ldquo;<?php the_search_query(); ?>&rdquo;</p>
			<div class="entry">
				<p>Sorry, nothing came up. Try a different search?</p>
			</div>
		</div>

	<?php endif; ?>

</div>
<!-- end content -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>