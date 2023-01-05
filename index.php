<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage DEMOTHEME
 * @since Demo Theme 1.0
 */
get_header();
?>
<?php if (class_exists('acf')) { 
    
    if (have_rows('flexible_content', get_option( 'page_for_posts' ))):
        while (the_flexible_field('flexible_content', get_option( 'page_for_posts' ))) : 
            include locate_template('flexible-parts/' . str_replace('_', '-', get_row_layout()) . '.php');
        endwhile;
    endif;
    } ?>

<section class="star-section">
    <div class="container-fluid">
        <div class="start-pic">
            <img src="<?php echo get_template_directory_uri(); ?>/images/blogsideIcon.png" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/images/blogTopIcon.png" alt="">    
        </div>
    </div>
</section>
<?php if (have_posts()) { ?>
    <section class="blog-section-wrap">
        <div class="container">
            <div class="row">
                <?php
                while (have_posts()) {
                    the_post();
                    $link = get_permalink();
                    $title = get_the_title();
                    $date = get_the_date('d M Y');
                    $img = get_the_post_thumbnail_url();
                    ?>
                    <div class="blog-card">
                        <div class="card-body">
                            <?php if (!empty($img)) { ?>
                                <a href="<?php echo $link; ?>">
                                    <div class="blogs_img"><img src="<?php echo $img; ?>" alt="<?php echo $title; ?>" /></div>
                                </a>
                            <?php } ?>
                            <div class="date">
                                <p><?php echo $date; ?></p>
                            </div>
                            <h5 class="card-title"><a href="<?php echo $link; ?>"><?php echo $title; ?></a></h5>
                            <a href="<?php echo $link; ?>" class="readmore-link" role="button"><?php _e('Read more'); ?><svg width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="2" xmlns="http://www.w3.org/2000/svg"><path d="M7.15845 13.825L10.9751 10L7.15845 6.175L8.33345 5L13.3334 10L8.33345 15L7.15845 13.825Z" fill="#6C6F6B"></path></svg></a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>
<section class="star-section-bottom">
    <div class="container-fluid">
        <div class="start-pic">
            <img src="<?php echo get_template_directory_uri(); ?>/images/blogsideIcon.png" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/images/blogTopIcon.png" alt="">    
        </div>
    </div>
</section>
<?php get_footer(); ?>