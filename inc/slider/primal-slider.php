<div class="PrimalSlider-contenido">
	<?php if(have_rows('slider_ce', 'option')) : ?>
		<div id="slider" class="flexslider">
		  <ul class="slides">
		  	<?php while(have_rows('slider_ce', 'option')) : the_row(); ?>
		    	<li>
		    	  <img src="<?php the_sub_field('imagen', 'option'); ?>" />
		    	  	<?php if(get_sub_field('titulo')) : ?>
		    	  		<div class="flex-caption">
		    	  			<h2><?php the_sub_field('titulo', 'option'); ?></h2>
		    	  			<p><?php the_sub_field('descripcion', 'option'); ?></p>
		    	  		</div>
		    		<?php endif; ?>
		    	</li>
			<?php endwhile; ?>
		  </ul>
		</div>
	<?php endif; ?>

	<div id="carousel" class="flexslider">
	  	<ul class="slides">
	  		<?php while(have_rows('slider_ce', 'option')) : the_row(); ?>
	  		 	<li class="u-custom-li">
	  		 	  <img src="<?php the_sub_field('imagen', 'option'); ?>" />
	  		 	</li>
	  		<?php endwhile; ?>
	  	</ul>
	</div>
</div>

<aside class="BloquesAside-contenido">
	<div class="BloqueAside">
		<a href="<?php the_field('sliderAside1url', 'option'); ?>">
			<figure>
				<img src="<?php the_field('sliderAside1', 'option'); ?>" alt="">
				<figcaption>
					<p><?php the_field('sliderAside1titulo', 'option'); ?></p>
				</figcaption>
			</figure>
		</a>
	</div>

	<div class="BloqueAside">
		<a href="<?php the_field('sliderAside2url', 'option'); ?>">
			<figure>
				<img src="<?php the_field('sliderAside2', 'option'); ?>" alt="">
				<figcaption>
					<p><?php the_field('sliderAside2titulo', 'option'); ?></p>
				</figcaption>
			</figure>	
		</a>
	</div>
</aside>		
