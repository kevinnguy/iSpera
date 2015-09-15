<link href="style.css" rel="stylesheet" type="text/css" />
<div id="sidebar">
	<ul>
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar()): ?>
		
		
		<li>
        	<ul>
		    <li class="home<?php if (is_home()) echo ' current_page_item'; ?>"><a href="<?php echo get_option('home'); ?>/"></li>
                    <li class="goal"><a href="goal.html"></a></li>
                    <li class="tshirt"><a href="tshirt.html"></a></li>
                    <li class="links"><a href="links.html"></a></li>
                    <li class="contact"><a href="contact.html"></a></li>
                    <li class="archive"><a href="archive.html"></a></li>
                    <li class="facebook"><a href="http://www.facebook.com/pages/iSpera/108279616060" title="Become a fan on Facebook" target="_blank"></a></li>
                    <li class="twitter"><a href="http://www.twitter.com/ispera" title="Follow us on Twitter" target="_blank" ></a></li>
                    <li class="rss"><a href="<?php bloginfo('rss2_url'); ?>"></a></li>
		    </ul>
        </li>
		<li>
			<h2>Archives</h2>
			<ul>
				<?php wp_get_archives('type=monthly'); ?>
			</ul>
		</li>	
		<?php endif; ?>
	</ul>
</div>
<!-- end sidebar -->