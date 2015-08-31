<div class="RecentNews-contenido">
	<p class="RecentNews-blockTitle"><?php the_field('tituloNoticiasRecientes', 'option'); ?></p>
	<?php 
	// the query
	$args = array( 'cat' => 3, 'post_per_page' => 3 );
	$the_query = new WP_Query( $args ); ?>
	<?php if ( $the_query->have_posts() ) : ?>
		<!-- pagination here -->
		<!-- the loop -->
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); ?>
			<div class="RecentNews-new">
				<a class="RecentNews-new-image" href="<?php the_permalink(); ?>" style="background-image: url('<?php echo $url; ?>')"></a>
				<div class="u-wrapper">
					<p class="RecentNews-new-date"><?php the_date(); ?></p>
					<h2 class="RecentNews-new-title">
						<a class="RecentNews-new-titleLink" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h2>
					<?php the_excerpt(); ?>
					<!-- <p class="RecentNews-new-resume">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae perferendis quae cum accusantium libero. Veritatis distinctio obcaecati magni, itaque porro sint quae voluptas veniam ullam, autem eaque, iusto accusantium incidunt.</p> -->
					<!-- <a class="RecentNews-new-more" href="">Seguir leyendo</a> -->
				</div>
			</div>
		<?php endwhile; ?>
		<!-- end of the loop -->
		<!-- pagination here -->
		<?php wp_reset_postdata(); ?>
	<?php else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
</div>