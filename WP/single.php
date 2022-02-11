<?php get_header(); ?>

<main>
	<div class="maincontain">
		<div class="blog">

			<h1><?php the_title();?></h1>

			<?php get_template_part('includes/section', 'content');?>
			
		</div>
	</div>
</main>

<?php get_footer(); ?>