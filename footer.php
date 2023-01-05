<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage DEMOTHEME
 * @since Demo Theme 1.0
 */
?>
<?php 
	$footer_logo = get_field('footer_logo','option');
	$copyright = get_field('demotheme_options_f_copy','option');
	$facebook_icon = get_field('facebook_icon','option');
	$facebook_link = get_field('facebook_link','option');
	$twitter_icon = get_field('twitter_icon','option');
	$twitter_link = get_field('twitter_link','option');
	$instagram_icon = get_field('instagram_icon','option');
	$instagram_link = get_field('instagram_link','option');
?>
	<footer class="site-footer">
	        <div class="container">
	            <div class="row">
	            	<div class="footer-logo">
	            		<a href="<?php echo home_url(); ?>"><img src="<?php echo $footer_logo['url']?>" alt=""></a>
	            	</div>
	            	<div class="footer-social">
	            		<div class="icons-wrapper">
	            			<a href="<?php echo $facebook_link; ?>" target="_blank" class="social-btn"><img src="<?php echo $facebook_icon ?>" loading="lazy" alt="" class="social-img"></a>

	            			<a href="<?php echo $twitter_link; ?>" target="_blank" class="social-btn"><img src="<?php echo $twitter_icon; ?>" loading="lazy" alt="" class="social-img"></a>

	            			<a href="<?php echo $instagram_link; ?>" target="_blank" class="social-btn"><img src="<?php echo $instagram_icon; ?>" loading="lazy" alt="" class="social-img"></a>
	            		</div>
	            	</div>
	                <div class="copyright">
	                	<p><?php echo $copyright; ?></p>
	                </div>
	            </div>
	        </div>
    	</footer>		

        <?php wp_footer(); ?>
    </body>
</html>
