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
=	</style>

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
				</div>
			</contact>
			<maillist>
				<div class="about">
					Sign up for my mailing list here:
						<br>
						<br>

						<div class="search">
							<form action="https://peterlancellotti.us14.list-manage.com/subscribe/post?u=f7d76c797d5f1f55d452ec911&amp;id=3a62b86790" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							<input type="text" name="EMAIL" class="search-bar" id="mce-EMAIL" placeholder="Your Email Address" required>
							<input type="submit" name="subscribe" id="mc-embedded-subscribe" class="search-btn" value="join">
							</form>
						</div>
					
				</div>
				<div class="about">
						Most recent blogs and stories: <br>
						<br>
						<a href="https://peterlancellotti.com/category/blog/">Latest Blogs</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href="https://peterlancellotti.com/category/stories/">Latest Stories</a>
				</div>
			</maillist>
		</div>
	</div>
</main>

<?php
get_footer();
?>

