				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 

						<header class="entry-header">

							<h1><?php esc_html_e('404 - Page Not Found', 'wphierarchy') ?></h1>
							
							

						</header>

						<div class="entry-content">
							
							<p><?php esc_html_e('Sorry! No Content Found.', 'wphierarchy') ?></p>
							<p> <?php get_search_form(); ?> </p>
						</div>


				</article>