<?php
/**
 * Template Name: Front-page
 */

get_header();
?>

<div id="contents">
		<div id="adbox">
			<?php 
				$post_7 = get_post(47);
				$title  = $post_7->post_title;
				$content= $post_7->post_content;
				$excerpt= $post_7->post_excerpt;
				$link 	= get_permalink(47);
				$image	= get_the_post_thumbnail_url(47, 'full');
			?>
			<div class="clearfix">
				<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Img" height="382" width="594">
				<div class="detail">
					<?php echo $content; ?>
				</div>
			</div>
		</div>
		<div class="highlight">
			
				<?php echo $excerpt; ?>
			
		</div>
		<div class="featured">
			<h2>Why Choose Us?</h2>
			<ul class="clearfix">
				<li>
				<?php 
				$post_7 = get_post(54);
				$title  = $post_7->post_title;
				$content= $post_7->post_content;
				$excerpt= $post_7->post_excerpt;
				$link 	= get_permalink(54);
				$image	= get_the_post_thumbnail_url(54, 'full');
			?>
					<div class="frame1">
						<div class="box">
							<img src="<?php echo $image; ?>" alt="Img" height="130" width="197">
						</div>
					</div>
					<p>
						<b><?php echo $title; ?></b><?php echo $excerpt; ?>
					</p>
					<a href="<?php echo $link; ?>" class="more">Read More</a>
				</li>
				<li>
				<?php 
				$post_7 = get_post(70);
				$title  = $post_7->post_title;
				$content= $post_7->post_content;
				$excerpt= $post_7->post_excerpt;
				$link 	= get_permalink(70);
				$image	= get_the_post_thumbnail_url(70, 'full');
			?>
					<div class="frame1">
						<div class="box">
							<img src="<?php echo $image; ?>" alt="Img" height="130" width="197">
						</div>
					</div>
					<p>
						<b><?php echo $title; ?></b> <?php echo $excerpt; ?>
					</p>
					<a href="<?php echo $link; ?>" class="more">Read More</a>
				</li>
				<li>
				<?php 
				$post_7 = get_post(34);
				$title  = $post_7->post_title;
				$content= $post_7->post_content;
				$excerpt= $post_7->post_excerpt;
				$link 	= get_permalink(34);
				$image	= get_the_post_thumbnail_url(34, 'full');
			?>
					<div class="frame1">
						<div class="box">
							<img src="<?php echo $image; ?>" alt="Img" height="130" width="197">
						</div>
					</div>
					<p>
						<b><?php echo $title; ?></b><?php echo $excerpt; ?>
					</p>
					<a href="<?php echo $link; ?>" class="more">Read More</a>
				</li>
				<li>
				<?php 
				$post_7 = get_post(73);
				$title  = $post_7->post_title;
				$content= $post_7->post_content;
				$excerpt= $post_7->post_excerpt;
				$link 	= get_permalink(73);
				$image	= get_the_post_thumbnail_url(73,'full');
			?>
					<div class="frame1">
						<div class="box">
							<img src="<?php echo $image; ?>" alt="Img" height="130" width="197">
						</div>
					</div>
					<p>
						<b><?php echo $title; ?></b><?php echo $excerpt; ?>
					</p>
					<a href="<?php echo $link; ?>" class="more">Read More</a>
				</li>
			</ul>
		</div>
	</div>
	




<?php

get_footer();
