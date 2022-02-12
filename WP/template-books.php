<?php
/* Template Name: Books */
get_header();?>

<main>
	<style>
		  	img {
		  		border: 0.2em solid black;
			}

			@media only screen and (max-width: 1080px){

				img {
					width: 50%;
				}
			}
	</style>
	
	<div class="maincontain">
		<div class="about">
			<p style="float: center;"> 
			<h3>Books:<br> (Click the covers to see more details) <br></h3> 
			</p> 
			<br>
			<a href="https://peterlancellotti.com/alive-after-dying/">
				<img src="<?php bloginfo('template_directory');?>/images/PeterGLBookCoverFinal.png" width="25%" height="auto">
			</a>
		</div>
	</div>	
</main>

<?php
get_footer();?>