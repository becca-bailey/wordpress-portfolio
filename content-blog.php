<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="post-entry">
	<div class="entry-wrap">
		<header class="entry-header">
			<div class="entry-meta">
				<h3 class="entry-time"><?php the_date(); ?></h3>
			</div>
			<h2 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		</header>
		<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail();
		}
		?>
		<div class="entry-summary">
			<?php the_excerpt() ?>
			<a href="<?php the_permalink(); ?>">Read more</a>
		</div>
		<footer class="entry-footer">
			<div class="entry-meta">
				<span class="entry-terms comments author">
					Written by <?php the_author(); ?>
					/
					Posted in <?php the_category(', ') ?>
					/
					<?php echo get_comments_number() ?> comments
					
					
				</span>
			</div>
		</footer>
	</div>
</article>