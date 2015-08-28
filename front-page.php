<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage beccamakesatheme
 * @since Becca Makes a Theme 1.0
 */

get_header(); ?>

<section class="home-page">
	<div class="main-content">
		<div class="content">
			<?php while ( have_posts() ): the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<center>
					<div class="social-btns">
				<?php
					if(is_active_sidebar('front-page')){
						dynamic_sidebar('front-page');
					}
				?>
			</div>
				</center>
				<center><a href="<?php echo site_url('/welcome/'); ?>" class="btn">Enter Site</a></center>
			<?php endwhile; ?>
		</div>
	</div>
</section>