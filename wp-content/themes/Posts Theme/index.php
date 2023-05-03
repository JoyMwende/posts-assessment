<?php get_header(); ?>
<h2>Index page</h2>

<?php
    if (have_posts()):
        while (have_posts()): the_post() ;?>

       <!-- Post content -->
        <?php get_template_part('content', get_post_format()) ?>
      
        
    <?php endwhile; ?>

    <!-- pagination -->
   <div class="pagination">
        <div class="prev-link"><?php previous_posts_link('<< Previous Page'); ?></div>
        <div class="next-link"><?php next_posts_link('Next Page >>'); ?></div>
    </div>
    <?php endif; ?>


<?php get_footer(); ?>