<?php
/**
 * The template for displaying pages
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */

get_header(); ?>

<section class="default-page">		
	<div class="page-main-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class = "title-background">
				<h2 class="entry-title"><?php the_title(); ?></h2>
			</div>
			<article class="post-entry">
				<h2 class="packages-header">I would love to help you with WordPress.</h2>
				<?php the_content(); ?>
		

			<div class="blog-posts">
				<?php
					if(is_active_sidebar('home-top')){
						dynamic_sidebar('home-top');
					}
				?>
			</div>
			<span class="clearfix"></span>
			</article>


			<div class="services">
				<h1 class="packages-header">Freebies</h1>
				<div class="packages-quote">
					<h4>I have a wordpress blog, and need some friendly advice.</h4>
				</div>
				<p class="p1">Do you have a wordpress question? Do you need an opinion about your blog? If you want to learn to do some small fixes yourself, email me! I would love to help you out.</p>
				<h3 class="price">Free!</h3>
				<h3 class="contact"><a href="<?php echo site_url('/contact/'); ?>">Contact Me</a></h3><span class="clearfix"><nbsp></span>
			</div>

			<div class="services">
				<h1 class="packages-header">Quick Fixes</h1>
				<div class="packages-quote">
					<h4>Help! I’m having just a little bit of trouble!</h4>
				</div>
				<p class="p1">Quick Fixes may include:</p>

				<ul>
					<li class="p1">Changing or re-sizing fonts</li>
					<li class="p1">Resizing or swapping out a header image</li>
					<li class="p1">Changing the width of your content or sidebar</li>
					<li class="p1">Configuring a plug-in</span></li>
					<li class="p1">Adding a media query (Re-sizing content for mobile devices)</li>
					<li class="p1">Adding or removing space between content, widgets, navigation menu items, etc.</li>
					<li class="p1">Installing a new theme (for theme install + additional fixes, see “Now it’s getting serious…”)</li>
				</ul>
				<h3 class="price" style="text-align: left;">Starting at $20</h3>
<!-- 				<h3 class="contact"><a href="http://www.beccanelsonmakesthings.com/contact/">Contact Me</a></h3><span class="clearfix"><nbsp /></span>
 -->			</div>

			<div class="services">
				<h1 class="packages-header">I need a little more help.</h1>
				<div class="packages-quote">
					<h4>I want to make my current theme work better for me.</h4>
				</div>
				<p class="p1">This includes three or more quick fixes that add up to a slightly more noticeable makeover.</p>

				<h3 class="price">Starting at $50</h3>
<!-- 				<h3 class="contact"><a href="http://www.beccanelsonmakesthings.com/contact/">Contact Me</a></h3><span class="clearfix"><nbsp></span>
 -->			</div>

			<div class="services"> 
				<h1 class="packages-header">Now it's getting serious...</h1>
				<div class="packages-quote">
					<h4>My current theme isn’t working for me AT ALL.</h4>
				</div>
				<p class="p1">This includes theme install + three or more quick fixes. Your blog will feel like a new person… except it’s a blog.</p>

				<h3 class="price">Starting at $75</h3>
<!-- 				<h3 class="contact"><a href="http://www.beccanelsonmakesthings.com/contact/">Contact Me</a></h3><span class="clearfix"><nbsp></span>
 -->			</div>

			<div class="services">
				<h1 class="packages-header">I have never done this before!</h1>
				<div class="packages-quote">
					<h4>Wordpress install? What is that?</h4>
				</div>
				<p class="p1">Have no fear, I can help you out with setting up hosting, installing wordpress, migrating content, and configuring your theme. I can even help you choose a host and a theme if you’re a complete newbie.</p>

				<h3 class="price">Starting at $100</h3>
<!-- 				<h3 class="contact"><a href="http://www.beccanelsonmakesthings.com/contact/">Contact Me</a></h3><span class="clearfix"><nbsp></span>
 -->			</div>

			<div class="services">
				<h1 class="packages-header">I need something custom made.</h1>
				<div class="packages-quote">
					<h4>I want a custom-built theme that is as unique as I am.</h4>
				</div>
				<p class="p1">I would love to talk to you about what you need for a custom theme. Pricing will depend on what you need, and how quickly you need it.</p>

				<h3 class="price"><a href="http://www.beccanelsonmakesthings.com/contact/">Ask for a quote</a></h3>
<!-- 				<h3 class="contact"><a href="http://www.beccanelsonmakesthings.com/contact/">Contact Me</a></h3><span class="clearfix"><nbsp></span>
 -->			</div>

			<div class="extras">
				<h1>Extra add-ons</h1>
				<div class="extra1">
					<h2>PHP fix</h2>
					<p class="p1">PHP fixes might include:</p>

					<ul>
						<li class="p1">Re-locating your navigation menu</li>
						<li class="p1">Switching your homepage to display post excerpts instead of the full content</li>
						<li class="p1">Adding the featured image to your posts or excerpts</li>
						<li class="p1">Changing the location or format of the author, date, categories, and tags</li>
						<li class="p1">Adding a post format</li>
						<li class="p1">Re-configuring your landing page</li>
					</ul>
<!-- 					<h3>Starting at $30</h3>
 -->				</div> <!-- extra1 -->
				<div class="extra2">
				<h2>A bit of JavaScript</h2>
					<p class="p1">JavaScript might include:</p>

					<ul>
						<li class="p1">Adding an awesome shrinking header (like the one on this page)</li>
						<li class="p1">Creating click or hover effects such as moving, re-sizing, showing or hiding content</li>
					</ul>
					<!-- <h3>$40</h3> -->
				</div><!-- extra2 -->
				<span class="clearfix"><nbsp /></span>
				<h3 id = "extra-price">Starting at $30</h3>
			</div>
			<hr />

			<section class="portfolio">
				<h2>Recent Projects</h2>
				<ul class = "portfolio-container">
				<?php query_posts ('posts_per_page=2&post_type=portfolio'); ?>
					<?php while ( have_posts() ) : the_post(); 
					$home_page_image = get_field("home_page_image");
					$size = "home-portfolio"; 
					?>
					
					<li class = "portfolio-entry">
						<a href="<?php the_permalink(); ?>"><figure>
							<?php echo wp_get_attachment_image($home_page_image, $size); ?>
						</figure></a>
					
					</li>
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>
				</ul>

			</section>
			<hr />
			<div class="call-to-action clearfix">
				<h3 >Don’t see what you need?  Shoot me a message, and I would love to create a custom package for you. </strong></h3>
				<p class="p1">* All of my packages include revisions.  This means if I fixed it and it’s still not exactly right, I will gladly fix it again.  I also answer questions, listen to all of your Wordpress frustration, and give lots of free advice. </p>
				<p class="p1">** Prices are estimates, and may change based on the scope of the project.  If something changes, I will ALWAYS ask you first. </p>
				<p class="p1">*** I promise I am not a creeper.  I also promise I will not make any changes to your blog’s appearance or content without your permission and approval. </p>
				<center><a class="btn" href="http://www.beccanelsonmakesthings.com/contact/">Let's get started!</a></center><span class="clearfix"><nbsp /></span>
			</div>
		<?php endwhile; ?>
	</div> <!-- Page Main Content -->
	
	<?php get_footer(); ?>
	