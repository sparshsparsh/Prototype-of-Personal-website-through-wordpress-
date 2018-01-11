<?php 
get_header();
?>
<div class="home-hero">
<div class="home-intro">
<div class="intro-small-header" data-ix="fade-up-1">Sanya Sharma</div>
<h1 class="intro-header" data-ix="fade-up-2">Clicks</h1>
<img class="hero-separator" data-ix="fade-up-2" src="http://uploads.webflow.com/593008e46c534e61e392e0f2/5937e2b173e0d361f51661fc_Sep White.svg">
<div class="w-dyn-list" data-ix="fade-up-3">
<div class="hero-categories w-dyn-items">
<div class="hero-category-container w-dyn-item">
<div class="dot-separator hero-dot-separator w-hidden-tiny w-condition-invisible">
<div></div>
</div>
<a class="hero-category w-inline-block" data-ix="underline" href="<?php echo get_post_type_archive_link('photography'); ?>">
<div>Photography</div>
<div class="hero-underline underline">
</div>
</a>
</div>
<div class="hero-category-container w-dyn-item">
<div class="dot-separator hero-dot-separator w-hidden-tiny">
<div></div>
</div>
<a class="hero-category w-inline-block" data-ix="underline" href="<?php echo get_post_type_archive_link('basketball'); ?>">
<div>Basketball</div>
<div class="hero-underline underline">
</div>
</a>
</div>
<div class="hero-category-container w-dyn-item">
<div class="dot-separator hero-dot-separator w-hidden-tiny">
<div></div>
</div>
<a class="hero-category w-inline-block" data-ix="underline" href="#">
<div>Cookery</div>
<div class="hero-underline underline">
</div>
</a>
</div>
</div>
</div>
</div>
</div>
<div class="home-works section works-section">
<div class="w-container wrapper">
<div class="section-header-block" data-ix="fade-up-1">
<div class="section-small-header">Sanya's</div>
<h2>Interests</h2>
<img class="section-separator" src="http://uploads.webflow.com/593008e46c534e61e392e0f2/5938f139d7978c0a4faf1460_Sep.svg">
</div>
<div class="w-dyn-list" data-ix="fade-up-2">
<div class="w-dyn-items works">
<div class="w-dyn-item work-card-container">
<a class="w-inline-block work-card" data-ix="work-card" href="<?php echo get_post_type_archive_link('photography');?>">
<div class="card-image-container">
<img class="card-hover-icon" src="<?php bloginfo('template_url')?>/images/593ce479e5608a435f48dec5_Lens%20Icon.png" width="48">
<div class="work-card-image" style="background-image: url('<?php bloginfo('template_url')?>/images/photog.jpg');">
</div>
</div>
<div class="work-card-info">
<div class="work-card-category">
<div style="color: #ffaf41;">Photography</div>
<div class="underline work-card-underline" style="background-color: #ffaf41;">
</div>
</div>
<h5 class="work-card-header">Innovative in the moment.</h5>
<p class="work-card-description">My eye for the artistic and attention to detail allows me to create memories that will last a lifetime.</p>
<div class="work-card-back-text">Photography</div>
</div>
</a>
</div>
<div class="w-dyn-item work-card-container">
<a class="w-inline-block work-card" data-ix="work-card" href="<?php echo get_post_type_archive_link( 'basketball' ); ?>">
<div class="card-image-container">
<img class="card-hover-icon" src="<?php bloginfo('template_url')?>/images/593ce479e5608a435f48dec5_Lens%20Icon.png" width="48">
<div class="work-card-image" style="background-image: url('<?php bloginfo('template_url')?>/images/basket.jpg');">
</div>
</div>
<div class="work-card-info">
<div class="work-card-category">
<div style="color: #059ab4;">Basketball</div>
<div class="underline work-card-underline" style="background-color: #059ab4;">
</div>
</div>
<h5 class="work-card-header">Make'em Believe</h5>
<p class="work-card-description">The most important measure of how good a game I played was how much better I’d made my teammates play.</p>
<div class="work-card-back-text">Basketball</div>
</div>
</a>
</div>
<div class="w-dyn-item work-card-container">
<a class="w-inline-block work-card" data-ix="work-card" href="#">
<div class="card-image-container">
<img class="card-hover-icon" src="<?php bloginfo('template_url')?>/images/593ce479e5608a435f48dec5_Lens%20Icon.png" width="48">
<div class="work-card-image" style="background-image: url('<?php bloginfo('template_url')?>/images/cook.jpg');">
</div>
</div>
<div class="work-card-info">
<div class="work-card-category">
<div style="color: #b06a51;">Cookery</div>
<div class="underline work-card-underline" style="background-color: #b06a51;">
</div>
</div>
<h5 class="work-card-header">Cooking is like love.</h5>
<p class="work-card-description">The simplest things in life give me the most pleasure: cooking a good meal, enjoying my friends.</p>
<div class="work-card-back-text">Cookery</div>
</div>
</a>
</div>
</div>
</div>
</div>
</div>
<div class="section service-section">
<div class="w-container wrapper">
<div class="section-header-block" data-ix="fade-up-1">
<div class="section-small-header white-text">Sanya's</div>
<h2 class="white-text">Achievements</h2>
<img class="section-separator" src="http://uploads.webflow.com/593008e46c534e61e392e0f2/5937e2b173e0d361f51661fc_Sep White.svg">
</div>
<div class="services">
<?php 
global $post;
$args = array(
	'posts_per_page'   => -1,
	'post_type'        => 'achievements',
	'post_status'      => 'publish',
	
);
$posts = get_posts( $args ); 
if (count($posts)) :
foreach ($posts as $post) : 
setup_postdata($post);
?>
<div class="service" data-ix="fade-up-1">
<div class="service-color-line">
</div>
<?php if ( has_post_thumbnail( $post->ID ) ) { ?>
<div class="service-icon">
<img width="32" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>">
</div>
<?php } ?>
<h6><?php the_title(); ?></h6>
<div class="service-text"><?php the_content();?></div>
</div>

<?php endforeach;
wp_reset_postdata();
endif;
?>

</div>
<a class="big button color-1 w-button" href="contact.html">Contact Me</a>
</div>
</div>
<div class="section white-section">
<div class="w-container wrapper">
<div class="reviews w-slider" data-animation="slide" data-duration="500" data-infinite="1">
<div class="w-slider-mask">
<?php 
global $post;
$args = array(
	'posts_per_page'   => -1,
	'post_type'        => 'testimonials',
	'post_status'      => 'publish',
	
);
$posts = get_posts( $args ); 
if (count($posts)) :
foreach ($posts as $post) : 
setup_postdata($post);
?>
<div class="w-slide">
<div class="review" data-ix="fade-up-1">
<?php if ( has_post_thumbnail( $post->ID ) ) { ?>
<img class="review-avatar" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>">
<?php } ?>
<div class="review-text"><?php the_content(); ?></div>
<div class="review-author">
<div><?php the_title(); ?></div>
</div>
</div>
</div>

<?php endforeach;
wp_reset_postdata();
endif; 
?>
</div>
<div class="review-arrow w-slider-arrow-left" data-ix="review-arrow-left">
<img class="review-arrow-left" src="http://uploads.webflow.com/593008e46c534e61e392e0f2/5938dea58da2e21b76c328a4_Review Arrow Left Icon.svg">
<img class="review-arrow-base" src="http://uploads.webflow.com/593008e46c534e61e392e0f2/5938dea5ce0e2e1ad8da7441_Review Arrow Left Base.svg">
</div>
<div class="review-arrow w-slider-arrow-right" data-ix="review-arrow-right">
<img class="review-arrow-right" src="http://uploads.webflow.com/593008e46c534e61e392e0f2/5938dea51924d911f245ab41_Review Arrow Right Icon.svg">
<img class="review-arrow-base" src="http://uploads.webflow.com/593008e46c534e61e392e0f2/5938dea4ff85bd0a3faab32a_Review Arrow Roght Base.svg">
</div>
<div class="w-hidden-main w-hidden-medium w-hidden-small w-hidden-tiny w-round w-slider-nav w-slider-nav-invert">
</div>
</div>
</div>
</div>
<div class="instagram-session">
<a class="instagram-card w-inline-block" data-ix="instagram" href="http://instagram.com/flexrs" target="_blank">
<img class="instagram-icon" src="<?php bloginfo('template_url')?>/images/593ccab6bedace68bd40c9c3_Instagram%20Logo.png" width="48">
<div class="instagram-text">Follow Me on<br>
<strong>Instagram</strong>
</div>
</a>
<div class="instagram-photo-block">
<div class="instagram-photo-line">
<div class="instagram-photo photo-09">
</div>
<div class="instagram-photo photo-10">
</div>
<div class="instagram-photo photo-11">
</div>
<div class="instagram-photo photo-12">
</div>
<div class="instagram-photo photo-13">
</div>
<div class="instagram-photo photo-14">
</div>
<div class="instagram-photo photo-15">
</div>
<div class="instagram-photo photo-16">
</div>
</div>
<div class="instagram-photo-line">
<div class="instagram-photo photo-01">
</div>
<div class="instagram-photo photo-02">
</div>
<div class="instagram-photo photo-03">
</div>
<div class="instagram-photo photo-04">
</div>
<div class="instagram-photo photo-05">
</div>
<div class="instagram-photo photo-06">
</div>
<div class="instagram-photo photo-07">
</div>
<div class="instagram-photo photo-08">
</div>
</div>
</div>
<div class="instagram-photo-block">
<div class="instagram-photo-line">
<div class="instagram-photo photo-01">
</div>
<div class="instagram-photo photo-02">
</div>
<div class="instagram-photo photo-03">
</div>
<div class="instagram-photo photo-04">
</div>
<div class="instagram-photo photo-05">
</div>
<div class="instagram-photo photo-06">
</div>
<div class="instagram-photo photo-07">
</div>
<div class="instagram-photo photo-08">
</div>
</div>
<div class="instagram-photo-line">
<div class="instagram-photo photo-09">
</div>
<div class="instagram-photo photo-10">
</div>
<div class="instagram-photo photo-11">
</div>
<div class="instagram-photo photo-12">
</div>
<div class="instagram-photo photo-13">
</div>
<div class="instagram-photo photo-14">
</div>
<div class="instagram-photo photo-15">
</div>
<div class="instagram-photo photo-16">
</div>
</div>
</div>
<div class="instagram-photo-block">
<div class="instagram-photo-line">
<div class="instagram-photo photo-09">
</div>
<div class="instagram-photo photo-10">
</div>
<div class="instagram-photo photo-11">
</div>
<div class="instagram-photo photo-12">
</div>
<div class="instagram-photo photo-13">
</div>
<div class="instagram-photo photo-14">
</div>
<div class="instagram-photo photo-15">
</div>
<div class="instagram-photo photo-16">
</div>
</div>
<div class="instagram-photo-line">
<div class="instagram-photo photo-01">
</div>
<div class="instagram-photo photo-02">
</div>
<div class="instagram-photo photo-03">
</div>
<div class="instagram-photo photo-04">
</div>
<div class="instagram-photo photo-05">
</div>
<div class="instagram-photo photo-06">
</div>
<div class="instagram-photo photo-07">
</div>
<div class="instagram-photo photo-08">
</div>
</div>
</div>
<div class="instagram-photo-block">
<div class="instagram-photo-line">
<div class="instagram-photo photo-01">
</div>
<div class="instagram-photo photo-02">
</div>
<div class="instagram-photo photo-03">
</div>
<div class="instagram-photo photo-04">
</div>
<div class="instagram-photo photo-05">
</div>
<div class="instagram-photo photo-06">
</div>
<div class="instagram-photo photo-07">
</div>
<div class="instagram-photo photo-08">
</div>
</div>
<div class="instagram-photo-line">
<div class="instagram-photo photo-09">
</div>
<div class="instagram-photo photo-10">
</div>
<div class="instagram-photo photo-11">
</div>
<div class="instagram-photo photo-12">
</div>
<div class="instagram-photo photo-13">
</div>
<div class="instagram-photo photo-14">
</div>
<div class="instagram-photo photo-15">
</div>
<div class="instagram-photo photo-16">
</div>
</div>
</div>
<div class="instagram-photo-block">
<div class="instagram-photo-line">
<div class="instagram-photo photo-09">
</div>
<div class="instagram-photo photo-10">
</div>
<div class="instagram-photo photo-11">
</div>
<div class="instagram-photo photo-12">
</div>
<div class="instagram-photo photo-13">
</div>
<div class="instagram-photo photo-14">
</div>
<div class="instagram-photo photo-15">
</div>
<div class="instagram-photo photo-16">
</div>
</div>
<div class="instagram-photo-line">
<div class="instagram-photo photo-01">
</div>
<div class="instagram-photo photo-02">
</div>
<div class="instagram-photo photo-03">
</div>
<div class="instagram-photo photo-04">
</div>
<div class="instagram-photo photo-05">
</div>
<div class="instagram-photo photo-06">
</div>
<div class="instagram-photo photo-07">
</div>
<div class="instagram-photo photo-08">
</div>
</div>
</div>
</div>




<div class="section">
<div class="w-container wrapper">
<div class="section-header-block" data-ix="fade-up-1">
<div class="section-small-header">From the Blog</div>
<h2>Recent Posts</h2>
<img class="section-separator" src="http://uploads.webflow.com/593008e46c534e61e392e0f2/5938f139d7978c0a4faf1460_Sep.svg">
</div>

<div class="w-dyn-list" data-ix="fade-up-2">
<div class="blog-posts w-dyn-items">



<?php 
global $post;
$args = array(
	'posts_per_page'   => -1,
	'post_type'        => 'category',
	'post_status'      => 'publish',
);
$posts = get_posts( $args ); 
if (count($posts)) :
foreach ($posts as $post) : 
setup_postdata($post);
?>



<div class="post-card-container w-dyn-item">
<a class="post-card w-inline-block" data-ix="post-card" href="blog/12-tips-for-indoor-natural-light-photography.html">
<div class="card-image-container">




<?php
    if ( has_post_thumbnail( $post->ID ) ) {
        //echo get_the_post_thumbnail( $post->ID, 'full', array('class' => 'card-hover-icon') );
		?>
		
		<img class="card-hover-icon" src="<?php bloginfo('template_url')?>/images/593e3d1cb16e23436d97292d_Post%20Icon.png" width="50">
        <div class="post-card-image" style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>'">
		

		
    <?php
	}
?>


</div>
</div>


<div class="post-card-info">
<div class="post-card-info-small">
<div class="post-card-date"><?php echo get_the_date('M d,Y');?></div>
<div class="dot-separator post-card-separator">
<div></div>
</div>
<div class="post-card-category">
<div style="color: #f44a66;"><?php the_title();?></div>
<div class="post-card-category-line underline" style="background-color: #f44a66;">
</div>
</div>
</div>
<h6 class="post-card-header"><?php the_content();?></h6>
</div>
</a>
</div>

</div>
</div>
</div>
</div>




<!--<div class="post-card-container w-dyn-item">
<a class="post-card w-inline-block" data-ix="post-card" href="blog/dealing-with-weird-job-interview-questions.html">
<div class="card-image-container">
<img class="card-hover-icon" src="<//?php bloginfo('template_url')?>/images/593e3d1cb16e23436d97292d_Post%20Icon.png" width="50">
<div class="post-card-image" style="background-image: url('<//?php bloginfo('template_url')?>/images/593a959acd8a6e16f186cae2_jonathan-simcoe-88013.jpg');">
</div>
</div>
<div class="post-card-info">
<div class="post-card-info-small">
<div class="post-card-date">June 1, 2017</div>
<div class="dot-separator post-card-separator">
<div></div>
</div>
<div class="post-card-category">
<div style="color: #ffaf41;">Personal</div>
<div class="post-card-category-line underline" style="background-color: #ffaf41;">
</div>
</div>
</div>
<h6 class="post-card-header">Dealing with Weird Job Interview Questions</h6>
</div>
</a>
</div>
<div class="post-card-container w-dyn-item">
<a class="post-card w-inline-block" data-ix="post-card" href="blog/how-to-spend-4-days-in-amsterdam.html">
<div class="card-image-container">
<img class="card-hover-icon" src="<?//php bloginfo('template_url')?>/images/593e3d1cb16e23436d97292d_Post%20Icon.png" width="50">
<div class="post-card-image" style="background-image: url('<?//php bloginfo('template_url')?>/images/593a94ebe470f660e76616c9_javier-m-80140.jpg');">
</div>
</div>
<div class="post-card-info">
<div class="post-card-info-small">
<div class="post-card-date">May 23, 2017</div>
<div class="dot-separator post-card-separator">
<div></div>
</div>
<div class="post-card-category">
<div style="color: #059ab4;">Travel</div>
<div class="post-card-category-line underline" style="background-color: #059ab4;">
</div>
</div>
</div>
<h6 class="post-card-header">How to Spend 4 Days in Amsterdam</h6>

 </div>
</a>
</div>--!>

<?php endforeach;
wp_reset_postdata();
endif; 
?>


<?php 
get_footer();
?>