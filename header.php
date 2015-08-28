<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Becca_Makes_Things
 * @since Becca Makes Things 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
    <meta name="p:domain_verify" content="23b6aa91619cd2207eb96a71556e6380"/>
	<title><?php wp_title('|', true, 'right'); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Sacramento' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
	</script>
	<script type ="text/javascript">




$(function(){
    $('.page-header').data('size','big');
});
$(window).scroll(function(){
    if($(document).scrollTop() > 10)
    {
        if($('.page-header').data('size') == 'big')
        {
            $('.page-header').data('size','small');
            $('.page-header').css('padding-top', '8px');
            $('.top-nav').css('padding-top', '8px');
            $('.title').css('font-size', '24px');
            $('.sub-title').css('font-size', '15px'); 
            // $('.page-header .top-nav ul').css('margin-top', '17px');           
            $('.page-header').stop().animate({
                height:'60px'
            }, 0);

        }
    }
    else
    {
        if($('.page-header').data('size') == 'small')
        {
            $('.page-header').data('size','big');
            $('.page-header').css('padding-top', '40px');
            $('.top-nav').css('padding-top', '22px');
            $('.title').css('font-size', '34px');
            $('.sub-title').css('font-size', '21.45px');
            // $('.page-header .top-nav ul').css('margin-top', '0');
            $('.page-header').stop().animate({
                height:'138px'
            }, 0);
        }  
    }
});


	</script>

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

     wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<div id = "header-nav">
			<header class="page-header container">
				<a href="<?php echo site_url(); ?>" class="top-logo">
					<span class="title"><?php bloginfo('name'); ?></span>
					<span class="sub-title"><?php bloginfo('description'); ?></span>
				</a>

				<nav class="top-nav">
					<?php wp_nav_menu(array('theme_location' => 'primary-menu')); ?>
				</nav>
			</header>
		</div>
        
            <div id="mobile-only">
                <nav class ="mobile-nav">
                    <?php wp_nav_menu(array('theme_location' => 'primary-menu')); ?>
                </nav>
            </div>
		<div id="main" class="site-main">