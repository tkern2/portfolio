<?php 

get_header(); ?>

<div class='container flex-row items-center bg-orange-100 min-w-screen min-h-screen'>
	
	<?php	while(have_posts()) {
    the_post(); ?>
	<?php the_content(); ?>
<?php }
?>
	
</div>




<?php get_footer(); ?>