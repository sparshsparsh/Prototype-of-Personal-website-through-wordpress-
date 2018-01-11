<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	
	<meta charset="utf-8">
	<title>Photographer — Webflow CMS Template</title>
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="<?php echo get_theme_file_uri('css/style.css');?>" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js" type="text/javascript">
</script>
	<script type="text/javascript">WebFont.load({
	  google: {
		families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Raleway:regular,500,600,700"]
	  }
	});
	</script>

	<script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);
	</script>
		<?php wp_head(); ?>
<link href="<?php echo get_theme_file_uri('5943d20abec15a6c5ec7dbb0_Favicon.png'); ?>" rel="shortcut icon" type="image/x-icon">
	<link href="<?php echo get_theme_file_uri('5943d545ebd3db1d5c410322_Webclip.png'); ?>" rel="apple-touch-icon">

</head>
<body <?php body_class('body')?> >
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
<a class="nav-link w-inline-block" data-ix="underline" href="index.html">
<div>Home</div>
<div class="nav-link-underline underline">
</div>
</a>
<a class="nav-link w-inline-block" data-ix="underline" href="photography.html">
<div>Photography</div>
<div class="nav-link-underline underline">
</div>
</a>
<a class="nav-link w-inline-block" data-ix="underline" href="basketball.html">
<div>Basketball</div>
<div class="nav-link-underline underline">
</div>
</a>
<a class="nav-link w-inline-block" data-ix="underline" href="#">
<div>Cookery</div>
<div class="nav-link-underline underline">
</div>
</a>
<a class="nav-link w-inline-block" data-ix="underline" href="#">
<div>Blog</div>
<div class="nav-link-underline underline">
</div>
</a>
<a class="nav-link w-inline-block" data-ix="underline" href="#">
<div>About</div>
<div class="nav-link-underline underline">
</div>
</a>
<a class="nav-link w-inline-block" data-ix="underline" href="#">
<div>Contact</div>
<div class="nav-link-underline underline">
</div>
</a>
</div>
</nav>
</div>
<div class="services-section side-section" data-ix="side-section">
<div class="services-side-image side-image">
<div class="services-cover side-image-cover" data-ix="side-cover">
</div>
<div class="side-header w-clearfix" data-ix="side-header">
<h1 class="side-header-text" data-ix="new-interaction">Basketball</h1>
<div class="side-header-line" data-ix="side-header-line">
</div>
</div>
</div>
<div class="side-content-wrapper">
<div class="services-content side-content" data-ix="side-content">
<?php 
global $post;
$args = array(
	'posts_per_page'   => 4,
	'post_type'        => 'basketball',
	'post_status'      => 'publish',
	
);
$posts = get_posts( $args ); 
if (count($posts)) :
foreach ($posts as $post) : 
setup_postdata($post);
?>


<div class="services-page">
<div class="service">
<div class="service-color-line">
</div>
<div class="service-icon">
<img src="<?php bloginfo('template_url');?>/images/593ba0c26c30ae104b267a5c_Service%202%20Icon.png" width="32">
</div>

<h6><?php the_title(); ?></h6>
<div class="service-text"><?php the_content(); ?></div>
</div>

</div>


<?php endforeach;
wp_reset_postdata();
endif; 
?>

</div>

<div class="side-back-text" data-ix="side-back-text">Basketball</div>
</div>
</div>


<script src="<?php echo get_theme_file_uri('js/jquery.min.js'); ?>" type="text/javascript">
</script>
<script src="<?php echo get_theme_file_uri('js/webflow.bec35cbfa.js'); ?>" type="text/javascript">
</script>

<?php wp_footer();?>
</body>
</html>