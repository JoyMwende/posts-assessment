<?php get_header();
/* Template Name: View Posts with WP Query
*/

?>

<!-- Get all posts -->
  <?php 
        //$posts = new WP_Query('type=post&posts_per_page=4');

        
        if (have_posts()):
            while(have_posts()):the_post();?>
            <header>
                <!-- Post content -->
                <?php get_template_part('content', get_post_format()) ?>
                <!-- <h3 class="title"><?php //the_title(sprintf('<h2 class="entry-title"><a href= "%s">', esc_url(get_permalink() )), '</a></h2>'); ?></h3> -->
            </header>

            <p><?php //the_content(); ?></p>
            
            <?php
            endwhile;
            ?>
               <div class="pagination">
        <div class="prev-link"><?php previous_posts_link('<< Previous Page'); ?></div>
        <div class="next-link"><?php next_posts_link('Next Page >>'); ?></div>
    </div>
<?php
        endif;
        wp_reset_postdata();
    ?>

<?php get_footer(); ?>
