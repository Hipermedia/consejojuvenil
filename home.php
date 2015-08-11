<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage SH_Base
 */

get_header(); ?>

	<!-- Slider -->
	<section class="u-contenedor u-init-distance">
		<?php primalSlider(); // Slider básico ?>
	</section>

	<section class="u-contenedor">

		<div class="RecentNews">
			<?php recentNews(); //noticias recientes ?>
		</div>

		<div class="Sidebar">
			<?php recentEvents(); //eventos recientes ?>
			<?php socialNetworks(); //sus redes sociales ?>
		</div>
	</section>

	<section class="u-contenedor">
		<?php gallery(); //bloque para galerías ?>
	</section>

<?php get_footer(); ?>
