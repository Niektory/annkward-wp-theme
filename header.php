<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<title><?php echo get_bloginfo( 'name' ); ?></title>
	<meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>" />
	<link href="<?php bloginfo('template_directory'); ?>/annkward.css" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body>
<div id="header">
	<a href="<?php bloginfo( 'wpurl' );?>">
		<img id="headerimg" src="<?php header_image(); ?>"
			alt="<?php echo get_bloginfo( 'name' ); ?>" />
	</a>
	<nav>
		<div id="header-menu">
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
		</div>
	</nav>
	<hr id="header-rule" />
</div>
