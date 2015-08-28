<?php
/**
 * The template for displaying the portfolio archive.
 *
 * @package WordPress
 * @subpackage beccamakesatheme
 * @since Becca Makes a Theme 1.0
 */

get_header(); ?>

<section class="portfolio-archive">
	<div class="page-main-content">
		<h2 class="entry-title">My Portfolio</h2>

	<?php while ( have_posts() ) : the_post(); 
		$description = get_field('description');
		$image_1 = get_field('image_1');
		$size = 'large';
		$size_2 = 'medium';
	?>

	<article class="portfolio-entry portfolio-entry-archive clearfix">
		<aside class="portfolio-sidebar">
		
			<a href="<?php echo get_page_link(); ?>">
				<h2 id="portfolio-title"><?php the_title(); ?></h2>
			</a>
			<p><?php echo $description; ?></p>
			<p class="site-link">
				<a href ="<?php echo get_page_link(); ?>">
					<img src="http://www.beccanelsonmakesthings.com/wp-content/uploads/2015/08/keyboard53-1.png" />
					<strong>Learn More...</strong>
				</a>
			</p>

			<?php the_content(); ?>

		</aside>

	<div class = "portfolio-images">
		<a href="<?php echo get_page_link(); ?>">
			<?php if($image_1) { 
				echo wp_get_attachment_image( $image_1, $size );
			} ?>
		</a>
	</div>
	</article>
		<?php the_content(); ?>


		
		<?php endwhile; ?>
	<div>
		<p class="site-link writing-link">
			<a href ="http://www.beccanelsonwrites.com/writing">
				<img src="http://www.beccanelsonmakesthings.com/wp-content/uploads/2015/08/keyboard53-1.png" />
				<strong>Visit my blog to see published writing.</strong>
			</a>
		</p>
	</div>

		<?php if ( have_posts() ): ?>
			<div id="navigation" class="container">
       		<div class="left"><?php next_posts_link('&larr; Older Posts'); ?></div>
        	<div class="right"><?php previous_posts_link('Newer Posts &rarr;'); ?></div>
    		</div>
		<?php endif; ?>

	</div>	
</section>

<?php get_footer(); ?>
