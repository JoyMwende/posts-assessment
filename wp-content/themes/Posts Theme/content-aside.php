<h1>Aside Post Format</h1>
<h3><?php the_title(sprintf('<h2 class="entry-title"><a href= "%s">', esc_url(get_permalink() )), '</a></h2>'); ?></h3>
<p><?php the_content(); ?></p>
<hr color="pink">