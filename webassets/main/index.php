<?php get_header(); ?>

<div id="content">

<form action="http://www.ispera.org/search-result-for-ispera" id="cse-search-box">
  <div>
    <input type="hidden" name="cx" value="005739434281058118731:1fk_kyeloma" />
    <input type="hidden" name="cof" value="FORID:10" />
    <input type="hidden" name="ie" value="UTF-8" />
    <input type="text" name="q" size="31" />
    <input type="submit" name="sa" value="Search" />
  </div>
</form>

<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">google.load("elements", "1", {packages: "transliteration"});</script>
<script type="text/javascript" src="http://www.google.com/coop/cse/t13n?form=cse-search-box&t13n_langs=en"></script>

<script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=cse-search-box&lang=en"></script>






<div class="search-form">
<?php include (TEMPLATEPATH . ‘/searchform.php’); ?>
<?php $search_text = "Search"; ?> 
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
	<?php if (have_posts()) : the_post(); ?>
	
		<div id="post-<?php the_ID(); ?>" class="post">
			<h1 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Read full article on <?php the_title(); ?>"><?php the_title(); ?></a></h1>
			<div class="entry">
				<?php the_content('Read the rest of this entry &raquo;'); ?>
			</div>
			<div class="meta"><small><i>By <strong><?php the_author() ?></strong> on <?php the_time('F jS, Y') ?></small></i>
				<p class="links">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Read full article on <?php the_title(); ?>" </a>
                                        &nbsp;&nbsp;&raquo;&nbsp;&nbsp;
                                        <?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments'); ?>
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

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php previous_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php next_posts_link('Next Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here. </p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>

	</div>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>
