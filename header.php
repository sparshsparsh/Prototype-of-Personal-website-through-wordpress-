<?php
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?php echo get_theme_file_uri('css/style.css'); ?>" rel="stylesheet" type="text/css"> 
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
	<link href="<?php echo get_theme_file_uri('5943d20abec15a6c5ec7dbb0_Favicon.png'); ?>" rel="shortcut icon" type="image/x-icon">
	<link href="<?php echo get_theme_file_uri('5943d545ebd3db1d5c410322_Webclip.png'); ?>" rel="apple-touch-icon">
</head>

<body <?php body_class('body'); ?>>
<div class="nav-bar-section w-nav" data-animation="over-right" data-collapse="all" data-duration="400">
		<a class="brand w-nav-brand" href="<?php echo site_url(); ?>">
			<?php 
			$customLogo = get_theme_mod('custom_logo'); 
			$logoSrc = wp_get_attachment_url($customLogo);
			?>
			<img src="<?php echo $logoSrc; ?>" />
		</a>
          <div class="menu-button w-nav-button" data-ix="menu-icon">
<div class="menu-button-text w-hidden-tiny">Menu</div>
<div class="menu-line menu-top-line">
</div>
<div class="menu-line menu-middle-line-1">
</div>
<div class="menu-line menu-middle-line-2">
</div>
<div class="menu-bottom-line menu-line">
</div>
</div>
<nav class="nav-sidebar w-nav-menu" role="navigation">
<div class="nav-menu">
<?php  
$params = array(
	'theme_location'	=>	'top',
	'container'			=>	false,
	'echo'				=>	false,
	'items_wrap'		=>	'%03$s',
	'depth'				=>	0,
);
echo strip_tags(wp_nav_menu($params), '<a>');
?>
</div>
</nav>
</div>