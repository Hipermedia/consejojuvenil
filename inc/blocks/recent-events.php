<div class="RecentEvents-contenido">
	<p class="RecentEvents-blockTitle"><?php the_field('tituloEventosRecientes', 'option'); ?></p>
	<?php 
	// the query
	$args = array( 	
					'cat' 		=> 4, 
					'meta_key' 	=> 'fechaEvento', 'lugarEvento', 'horaEvento'
				);
	$the_query = new WP_Query( $args ); ?>
	<?php if ( $the_query->have_posts() ) : ?>
		<!-- pagination here -->
		<!-- the loop -->
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
			<div class="RecentEvents-event">
				<a class="RecentEvents-event-image" href="<?php the_permalink(); ?>" style="background-image: url('<?php echo $url; ?>')"></a>
				<p class="RecentEvents-event-category">
					<i class="fa fa-map-marker"></i> <?php the_field('lugarEvento'); ?>, 
					<i class="fa fa-clock-o"></i> <?php the_field('horaEvento'); ?>
				</p>
				<h2 class="RecentEvents-event-title">
					<a class="RecentEvents-event-titleLink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h2>
			</div>
		<?php endwhile; ?>
		<!-- end of the loop -->
		<!-- pagination here -->
		<?php wp_reset_postdata(); ?>
	<?php else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
</div>