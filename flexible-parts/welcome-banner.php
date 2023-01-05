<?php
wp_reset_query();
wp_reset_postdata();
$welcome_title = get_sub_field('welcome_title');
$welcome_content = get_sub_field('welcome_content');
?>
<section class="welcome-section">
    <div class="container">
        <h2><?php echo $welcome_title; ?></h2>
        <p><?php echo $welcome_content; ?></p>
    </div>
</section>