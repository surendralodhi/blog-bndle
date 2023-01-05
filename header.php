<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage DEMOTHEME
 * @since Demo Theme 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) { ?>
            <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php } ?>
        <?php
            if( class_exists('acf') ) {
                $favicon = get_field( 'demotheme_options_favicon', 'option' );
                $favicon = ! empty($favicon) ? $favicon['url'] : '';
                if( !empty( $favicon ) ) {
        ?>
            <!-- Favicon -->
            <link rel="shortcut icon" href="<?php echo $favicon; ?>" type="image/x-icon" />
        <?php
                }
            }
        ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php 
    if(class_exists('acf')){
        $site_logo = get_field('demotheme_options_site_logo','option');
        
    }
    ?>
    <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="logo">
                    <a href="<?php echo home_url(); ?>"><img src="<?php echo $site_logo['url']?>" alt=""></a>
                </div>
                <div class="header-top-menu">
                    <?php 
                    $register_link = get_field('register_link','option');
                    $login_link = get_field('login_link','option');
                    ?>
                    <ul>
                        <?php if (!empty($register_link['title'])) { ?>
                            <li><a href="<?php echo $register_link['url']?>"><?php echo $register_link['title']?></a></li>
                        <?php } ?>
                        <?php if (!empty($login_link['title'])) { ?>
                            <li><a href="<?php echo $login_link['url']?>"><?php echo $login_link['title']?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </header>    