<?php get_header();
/* Template Name: View Posts with WP Query
*/

?>

<!-- Get all posts -->
  <?php 
        $posts = new WP_Query('type=post&posts_per_page=4');

        
        if ($posts->have_posts()):
            while($posts->have_posts()):$posts->the_post();?>
            <header>
            <h3 class="title"><?php the_title(sprintf('<h2 class="entry-title"><a href= "%s">', esc_url(get_permalink() )), '</a></h2>'); ?></h3>
            </header>

            <p><?php the_content(); ?></p>
            
            <?php
            endwhile;
            ?>
<?php
        endif;
        wp_reset_postdata();
    ?>

<?php get_footer(); ?>
