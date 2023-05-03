<?php get_header(); ?>

<?php
/*
Template Name: Custom Page Template
*/

?>

<?php
    if(have_posts()):
        while(have_posts()): the_post();
?>
<h2><?php the_title(); ?></h2>
<p><?php the_content(); ?></p>
<?php
        endwhile;
    endif;
?>

<?php get_footer(); ?>