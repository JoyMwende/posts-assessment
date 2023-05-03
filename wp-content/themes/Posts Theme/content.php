<h1>this is standard</h1>
<h2 class="title"><?php the_title(sprintf('<h2 class="entry-title"><a href="%s">', esc_url(get_permalink() )), '</a></h2>'); ?></h2>
<h4>Posted on: <?php the_time(); ?></h4>
<p><?php the_content(); ?></p>
<p><?php the_category(); ?></p>