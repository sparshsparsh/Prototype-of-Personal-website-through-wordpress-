<?php
get_header();
?>
<div class="page-hero-section works-hero">
<h1 class="intro-header">Photography</h1>
</div>

<div class="section works-section">
<div class="w-container wrapper">
<div class="page-description" data-ix="fade-up-1">
<img src="http://uploads.webflow.com/593008e46c534e61e392e0f2/5938f139d7978c0a4faf1460_Sep.svg">
<div class="page-description-text">My eye for the artistic and attention to detail allows me to create memories that will last a lifetime.</div>
</div>
<div class="w-dyn-list" data-ix="fade-up-2">
<div class="w-dyn-items works">
<?php 
global $post;
$args = array(
	'posts_per_page'   => -1,
	'post_type'        => 'photography',
	'post_status'      => 'publish',
);
$posts = get_posts( $args ); 
if (count($posts)) :
foreach ($posts as $post) : 
setup_postdata($post);
?>
<div class="w-dyn-item work-card-container">
<a class="w-inline-block work-card" data-ix="work-card" href="works/sunrise-and-sunset.html">
<div class="card-image-container">


<?php
    if ( has_post_thumbnail( $post->ID ) ) {
        //echo get_the_post_thumbnail( $post->ID, 'full', array('class' => 'card-hover-icon') );
		?>
		<img class="card-hover-icon" src="http://uploads.webflow.com/593008e46c534e61e392e0f2/593ce479e5608a435f48dec5_Lens%20Icon.png" width="48">
		<div class="work-card-image" style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>'">
    <?php
	}
?>

</div>
</div>
<div class="work-card-info">
<div class="work-card-category">
<div class="text-block-2" style="color: #ffaf41;"><?php the_title(); ?></div>
<div class="underline work-card-underline" style="background-color: #ffaf41;">
</div>
</div>
</div>
</a>
</div>
<?php endforeach;
wp_reset_postdata();
endif; 
?>

</div>
</div>
<a class="big button color-1 w-button" href="#">View More</a>
</div>
</div>


<?php 
get_footer();
?>