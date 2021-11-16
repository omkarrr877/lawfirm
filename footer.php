<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package omkar
 */

?>

<div id="footer">
		<div class="clearfix">
			<div class="section">
			<?php 
				$post_7 = get_post(105);
				$title  = $post_7->post_title;
				$content= $post_7->post_content;

			?>
				<h4><?php echo $title; ?></h4>
				<p><?php echo $content; ?></p>
			</div>
			<div class="section contact">
			<?php 
				$post_7 = get_post(107);
				$title  = $post_7->post_title;
				$content= $post_7->post_content;

			?>
				<h4><?php echo $title; ?></h4>
				<?php echo $content; ?>
			</div>
			<div class="section">
			<?php 
				$post_7 = get_post(109);
				$title  = $post_7->post_title;
				$content= $post_7->post_content;

			?>
				<h4><?php echo $title; ?></h4>
				<?php echo $content; ?>
			</div>
		</div>
		<div id="footnote">
			<div class="clearfix">
			<?php 
				$post_7 = get_post(123);
				$title  = $post_7->post_title;
				$content= $post_7->post_content;

			?>
			<?php echo $content; ?>
			</div>
		</div>
	</div>
</body>
</html>
