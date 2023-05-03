<?php get_header(); ?>

<?php
    if(have_posts()):
        while(have_posts()): the_post(); ?>
            <h2 class='title'><?php the_title(); 
                if(current_user_can('manage_options')){ echo ' || '; edit_post_link();} ?></h2>
            <p><?php the_content(); ?><p>
<?php
        endwhile;
    endif;
?>

<!-- Pagination -->
<div>
    <?php previous_post_link(); ?> &nbsp; <?php next_post_link(); ?>
</div>
<?php get_footer(); ?>