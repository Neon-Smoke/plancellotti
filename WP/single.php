<?php get_header(); ?>

<main>

<style>
	iframe {
		width: 50%;
		height: 50vh;
	}

	@media only screen and (max-width: 1080px){

				iframe {
					width: 100%;
					height: 20vh;
				}
			}
</style>
		<div class="blog">

			<h1><?php the_title();?></h1>

			<?php get_template_part('includes/section', 'blogcontent');?>


		</div>

</main>

<?php get_footer(); ?>