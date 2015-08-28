<?php
/**
 * The template for displaying pages
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */

get_header(); ?>

<section class="portfolio-page">
	<div class="page-main-content">

	<?php while ( have_posts() ) : the_post(); 
		$description = get_field('description');
		$description_2 = get_field('description_2');
		$before = get_field('before_image');
		$name = get_field('first-name');
		$testimonial = get_field('testimonial');
		$site_link = get_field('site_link');
		$image_1 = get_field('image_1');
		$image_2 = get_field('image_2');
		$image_3 = get_field('image_3');
		$link_1 = wp_get_attachment_url( $image_1 );
		$link_2 = wp_get_attachment_url( $image_2 );
		$link_3 = wp_get_attachment_url( $image_3 );
		$link_before = wp_get_attachment_url( $before );
		$size = 'large';
		$size_2 = 'medium';
	?>

	<article class="portfolio-entry">
		<aside class="portfolio-sidebar">
			<a href="<?php echo $site_link; ?>">
				<h2 id="portfolio-title"><?php the_title(); ?></h2>
			</a>

			<p class="site-link">
				<a href ="<?php echo $site_link; ?>">
					<?php echo '<img src="http://www.beccanelsonmakesthings.com/wp-content/uploads/2015/08/keyboard53-1.png" />' ?>
					<strong>Visit Site</strong>
				</a>
			</p>
			
			<h3>What I did...</h3>
			<p><?php echo $description; ?></p>

			<?php if($description_2) { ?>
				<p><?php echo $description_2; ?></p>
			<?php } ?>

			<?php if($before) { ?>
				<h3>Before...</h3>
				<a href="<?php echo $link_before ?>" rel="lightbox"[<?php wp_title(); ?>]>
					<?php echo wp_get_attachment_image( $before, $size_2 ); ?>
				</a>
			<?php } ?>
			
			<?php if($testimonial) { ?>
				<h3><?php echo $name; ?>&nbsp;says...</h3>
				<em><p><?php echo $testimonial; ?></em></p>
			<?php } ?>
			<?php the_content(); ?>

			<p class="site-link back-link">
				<a href ="<?php echo site_url(); ?>/portfolio">
					<img src="http://www.beccanelsonmakesthings.com/wp-content/uploads/2015/08/left216-1.png" />
					<strong>Go Back</strong>
				</a>
			</p>


			
		</aside>

	<div class = "portfolio-images">
		
		<?php if($before) { ?>
				<h3>After...</h3>
		<?php } ?>
		<?php if($image_1) { ?>
			<a href="<?php echo $link_1 ?>" rel="lightbox"[<?php wp_title(); ?>]>
			<?php echo wp_get_attachment_image( $image_1, $size ); ?>
			</a>
		<?php } ?>

		<?php if($image_2) { ?>
			<a href="<?php echo $link_2 ?>" rel="lightbox"[<?php wp_title(); ?>]>
			<?php echo wp_get_attachment_image( $image_2, $size ); ?>
			</a>
		<?php } ?>

		<?php if($image_3) { ?>
			<a href="<?php echo $link_3 ?>" rel="lightbox"[<?php wp_title(); ?>]>
			<?php echo wp_get_attachment_image( $image_3, $size ); ?>
			</a>
		<?php } ?>
	</div>

</article>
		
		<?php endwhile; ?>
	</div>	
</section>

<?php get_footer(); ?>
