<div class="Gallery-contenido">
	<p class="Gallery-blockTitle">Galerías</p>
	<?php 
	// the query
	$args = array( 	
					'cat' 		=> 5, 
				);
	$the_query = new WP_Query( $args ); ?>
	<?php if ( $the_query->have_posts() ) : ?>
		<!-- pagination here -->
		<!-- the loop -->
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
			<figure class="Gallery-gallery">
				<a href="<?php the_permalink(); ?>">
					<img src="<?php echo $url; ?>" alt="">
					<figcaption>
						<p><?php the_title(); ?></p>
					</figcaption>
				</a>
			</figure>
		<?php endwhile; ?>
		<!-- end of the loop -->
		<!-- pagination here -->
		<?php wp_reset_postdata(); ?>
	<?php else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
</div>