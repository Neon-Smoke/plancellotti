<?php
/* Template Name: Contact */
get_header();
?>

<main>

	<style>
		a:link {
				color: white;
			}
		a:visited {
				color: white;
			}

		img {
			width: 12%;
			height: auto;
		}

		body {
			width: 100%;
			overflow-x: hidden;
			overflow-y: hidden;
		}

	</style>

			<div class="maincontain">
				<div class="contact">
					<contact>
							<div class="about">
								Email: <a href="https://mail.google.com/mail/?view=cm&source=mailto&to=[PeterGLBook@gmail.com]" target="_blank"> 
							   	<br> <img src="<?php bloginfo('template_directory');?>/images/mail.png" alt="E-Mail Link"> 

							   	<br> </a> Facebook: <a href="https://www.facebook.com/profile.php?id=100075626184497" target="_blank"> 
								<br> <img src="<?php bloginfo('template_directory');?>/images/fblogo.png" alt="Facebook Link"> </a> 	

							   	<br> Twitter:  <a href="https://twitter.com/PeterLancellot1" target="_blank"> 
							   	<br> <img src="<?php bloginfo('template_directory');?>/images/twitterlogo.png" alt="Twitter Link"> </a> 

							   	<br> Instagram: <a href="https://www.instagram.com/peterlancellotti/" target="_blank">
							   	<br> <img src="<?php bloginfo('template_directory');?>/images/instalogo.png" alt="Instagram Link"> </a>
							   	<br>

							   		<!--	<br> LinkedIn: <a href="#">
							   			<br> <img src="#" width="15%" height="auto" alt="LinkedIn"> </a>
							   			<br> 
							   		-->
							</div>
						</contact>
						<maillist>
							<div class="about">
								Sign up for my mailing list here:
								<br>
								<br>

								<div class="search">
									<input type="text" class="search-bar" placeholder="Your Email Address" required>
									<input type="button" class="search-btn" value="join">
								</div>
							</div>

							<div class="about">
								Links to newest Blog post/Story will go here <br>
								<br>
								<a href="#">Newest Blog</a> &nbsp &nbsp &nbsp &nbsp &nbsp <a href="#">Newest Story</a>
							</div>
						</maillist>
				</div>
			</div>
		</main>

<?php
get_footer();
?>