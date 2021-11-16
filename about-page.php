<?php
/**
 * Template Name: About-page
 */

get_header();
?>

<?php 
				$post_7 = get_post(1);
				$title  = $post_7->post_title;
				$content= $post_7->post_content;
				$excerpt= $post_7->post_excerpt;
				$link 	= get_permalink(1);
				$image	= get_the_post_thumbnail_url(1, 'full');
			?>
<div id="contents">
<div class="clearfix">
    <h1>About Us</h1>
    <div class="frame2">
        <div class="box">
            <img src="<?php echo $image; ?>" alt="Img" height="298" width="924">
        </div>
    </div>
    <?php echo $content; ?>
</div>
</div>


<?php
get_footer();
?>
